<html>

<!--
	AUTHOR:
	Jared Morris

	UPDATED:
	31 / 1812 July 2015
	ranking.php
	STABLE Build 0.41

	ToDo:
	fileWrite functions: highlightBlob();
	database functions;
	maybe more.
	implement date var like annotate.php so as to automate image selection and coordinate grab
	implement into website with UI like annotate.php
	DB function to RETRIEVE data for users like annotate.php needed.

	NOTES:
	Created & Edited with Sublime Text 3
	Tested with XAMPP localhost server & server clone
	Try to keep 4 builds + current in update notes, with stability note &  keep backups for every build

	FOR DEV:
	Test file contains the rectangular region of coordinates from { (x,y) | 100 < x < 111; 300 < y < 311 }

	Also:
	some dev options still exist (console logs, coord/color displayed under canvas, second image, etc) 
		I did this because it is still in need of development and these tools are useful for testing.
		Final product should be akin to annotate.php's layout with an image - user friendly, not dev friendly.

	Update Notes:
	0.41 - ISSTABLE - SOME BUGS - Finalized my portion.  Plugged security hole, noted another security hole.
	0.40 - ISSTABLE - SOME BUGS - Compressed to 173 lines. Cleaned up names, variables, etc., added architecture, modified load order, optimized.
	0.32 - ISSTABLE - NO ERRORS - Fixed [i][2] not scanning
	0.31 - UNSTABLE - SOME BUGS - bug semi-fix.  .toStr() scan fix, file I/O completely redesigned and compressed to just 6 lines
	0.30 - UNSTABLE - SOME BUGS - .click loop for scan, 
-->

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>                      

<canvas id="solarCanvas" width="720" height="360" style="border:1px solid #00FFFF;"></canvas>
<div id="status"></div>
<img id="testimage" src='cpp/images/PNG/imagetesting.png'></img>
</head>
<style></style>
<body>


<script> // We need these functions declared ASAP
function findPos(obj) {
	var curleft = 0, curtop = 0;
	if (obj.offsetParent) {
		do {
			curleft += obj.offsetLeft;
			curtop += obj.offsetTop} 
		while (obj = obj.offsetParent);
		return { x: curleft, y: curtop };
	}
	return undefined;}
function rgbToHex(r, g, b) { // appears to be showing #0 + hex color, instead of # + hex color
	if (r > 255 || g > 255 || b > 255)
		throw "Invalid color parameters (value > 255)";
	return '#' + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1); }
</script>


<script>  // functions to make canvas and place PNG overlay image

	<?php  // fopen("cpp/textdump/coordinate/" . date ."_XY.txt");
		$XYFile = fopen("cpp/textdump/coordinates/imagetesting.txt.txt","r") or die ("file reading error");
		$coordinates = array(); // create coordinates array
		while (!feof($XYFile)) { // while not at last line of file
			$uncatXY = fgets($XYFile); // read one line of file
			array_push($coordinates, explode(" ", $uncatXY)); } // push into coordinates array
		fclose($XYFile); // close file 
	?>

	var coords = <?= json_encode($coordinates) ?>;
	console.log(coords); // dev

	// needed to implement database
    function jsObj2phpObj(object) { // convert js array to data format for SQL POST
        var MyJsonString = JSON.stringify(object);
        return MyJsonString;
    }

	$(document).ready(function() {
		window.onload = function() {
			var c = document.getElementById("solarCanvas");  
			var ctx = c.getContext("2d");
			ctx.fillStyle = "#00FFFF"; // cyan fill
			var img = document.getElementById("testimage");
			img.src = 'cpp/images/PNG/imagetesting.png';   //"cpp/images/" + date + ".png";
			ctx.drawImage(img, 0, 0); 

			c.addEventListener('click', function() { }, false);


		// functions for color & coordinates on mouse movement/clicl
				$('#solarCanvas').mousemove(function(e) {
					var c = document.getElementById("solarCanvas");
					var ctx = c.getContext("2d"); // temp declaration bug fix -- can't find root cause, so redec
					var pos = findPos(this);
					var x = e.pageX - pos.x;
					var y = e.pageY - pos.y;
					var coord = "x=" + x + ", y=" +y;
					var p = ctx.getImageData(x, y, 1, 1).data;
					var hex = ("#" + 000000 + rgbToHex(p[0], p[1], p[2]).slice(-6));
					$('#status').html(coord + "<br>" + hex);
					console.log(x + "," + y + "---" + coord + " at " + hex);
				});
				$('#solarCanvas').click(function(e) {
					var c = document.getElementById("solarCanvas");
					var ctx = c.getContext("2d");
					var pos = findPos(this);
					var xNum = e.pageX - pos.x;
					var yNum = e.pageY - pos.y;
					var xStr = xNum.toString();
					var yStr = yNum.toString();

					function promptUser(i) {  // ***BUGGED*** ALWAYS accepting the answer!  
						// THIS IS EASILY HACKABLE WITH SQL INJECTION
						 userRank = prompt("Please rank the accuracy of this blob model");
						 if(userRank == '0' || '00' || '01' || '02' || '03' || '20' || '30') {	//
						 	alert("Thanks! (placeholder)");
						 	// write to database function here
						 	// if desired, write to "cpp/images/textdump/" . date . "_temp.txt" with "a" operation (append to, do not overwrite)
						 	// BUT FIX THE SECURITY VULNERABILITY ABOVE BEFORE WRITING IT
						 	// php exec(CPP program to write to binary image directly);
						 }
						 else {
						 	alert("Not a valid rank!");
						 	promptUser(i); // run the function over and over until "cancel" or valid rank
						 }
					}

					for(var i = 0; i < coords.length; i++) {
		   				if(coords[i][1] === xStr && coords[i][2] === (yStr + "\r\n")) {
			     			promptUser();
			     			// var label = coords[i][0];
			     			} 
		     			}                      
					console.log(xStr);								   
					console.log(yStr);							       
				});
												  
		}
	});

</script>

<script>

</script>

</body>
</html>
