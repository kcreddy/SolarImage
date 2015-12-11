<?php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************

/////// Update your database login details here /////
$dbhost_name = "localhost"; // Your host name 
$database = "carina";       // Your database name
$username = "root";            // Your login userid 
$password = "";            // Your password 
//////// End of database details of your server //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

//require 'config.php';  // Database connection
//////// End of connecting to database ////////
?>

<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Multiple drop down list box from plus2net</title>
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
self.location='dd.php?cat=' + val ;
}

</script>
</head>

<body>
<?Php
//$cat = (isset($_GET['cat'])) ? $_GET['cat'] : false;
//$CONFIG['cat'] = 'local';
@$cat=$_GET['cat']; // Use this line or below line if register_global is off
if(strlen($cat) > 0 and !is_numeric($cat)){ // to check if $cat is numeric data or not. 
echo "Data Error";
exit;
}

///////// Getting the data from Mysql table for first list box//////////
$quer2="SELECT DISTINCT sid_AnnImgLocation, sid_SolarImgDataKeyID FROM tbl_solar_image_data order by sid_SolarImgDataKeyID"; 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
if(isset($cat) and strlen($cat) > 0){
$quer="SELECT DISTINCT cha_CoronalHoleNumber FROM tbl_coronal_hole_annotations where cha_CoronalHoleNumber=$cat order by cha_CoronalHoleNumber"; 
}else{$quer="SELECT DISTINCT cha_CoronalHoleNumber FROM tbl_coronal_hole_annotations order by cha_CoronalHoleNumber"; } 
////////// end of query for second subcategory drop down list box ///////////////////////////

echo "<form method=post name=f1 action='dd-check.php'>";
/// Add your form processing page address to action in above line. Example  action=dd-check.php////
//////////        Starting of first drop downlist /////////
echo "<select name='cat' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
foreach ($dbo->query($quer2) as $noticia2) {
if($noticia2['sid_SolarImgDataKeyID']==@$cat){echo "<option selected value='$noticia2[sid_SolarImgDataKeyID]'>$noticia2[sid_AnnImgLocation]</option>"."<BR>";}
else{echo  "<option value='$noticia2[sid_SolarImgDataKeyID]'>$noticia2[sid_AnnImgLocation]</option>";}
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////

//////////        Starting of second drop downlist /////////
echo "<select name='subcat'><option value=''>Select one</option>";
foreach ($dbo->query($quer) as $noticia) {
echo  "<option value='$noticia[cha_CoronalHoleNumber]'>$noticia[cha_CoronalHoleNumber]</option>";
}
echo "</select>";
//////////////////  This will end the second drop down list ///////////
//// Add your other form fields as needed here/////
echo "<input type=submit value=Submit>";
echo "</form>";
?>
<br><br>
<a href=dd.php>Reset and start again</a>
<br><br>
<center><a href='http://www.plus2net.com' rel="nofollow">PHP SQL HTML free tutorials and scripts</a></center> 
</body>

</html>
