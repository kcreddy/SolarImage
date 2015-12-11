            
<body>

    <form method="get" action="http://www.yourwebskills.com/files/examples/process.php">

        <select id="cd" name="cd">

            <?php
//            $dbHost = "localhost";
//$dbUser = "root";
//$dbPass = "";

            $dbName = "carina";

            $mysqlserver = "localhost";
            $mysqlusername = "root";
            $mysqlpassword = "";
            $link = mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die("Error connecting to mysql server: " . mysql_error());

            $dbname = 'carina';
            mysql_select_db($dbname, $link) or die("Error selecting specified database on mysql server: " . mysql_error());

            $holequery = "SELECT cha_CoronalHoleNumber FROM tbl_coronal_hole_annotations";
            $holeresult = mysql_query($holequery) or die("Query to get data from firsttable failed: " . mysql_error());

            while ($holerow = mysql_fetch_array($holeresult)) {
              $holeNumber = $holerow["cha_CoronalHoleNumber"];
              echo "<option>
                    $holeNumber
                </option>";
            }
            ?>

        </select>

    </form>

</body>

