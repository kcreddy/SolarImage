<?php

////////////////////////////////////////////////////////////////////////////////

//

//  University of New Mexico - School Year 2015 - 2016

//  ECE 435 Software Engineering - Solar Image Analysis

//

//  CARINA - Collaborative Solar Imaging Annotation

//

//  Sponsor - Professor Pattichis
//          - Venkatesh Jatla

//

//  Team - Krishna Chaitanya Reddy Burri, Vaibhav Reddy Isanaka, Shiva Krishna Vuppala
//          Bhanu Rayini, Magesh Rajasekaran, Neshanth Kalaichelvan Kambarnatham

//

////////////////////////////////////////////////////////////////////////////////

//


//

//  Purpose: Database Interface - Store and Retrieve Data

//

////////////////////////////////////////////////////////////////////////////////



//

//  Module:  tools/dbInterface.php

//

//  Purpose: Database Interface - Store and Retrieve Data

//

////////////////////////////////////////////////////////////////////////////////



//  sesssion_start();  Includes global variables for user information

session_start();

include('../config/config.php');

include_once('../config/lang_config.php');

include_once('../translations/' . $lang_file);

require_once 'jsonString2Obj.php';



// CARINA Database tbl_solar_image_data

$User_ID = $_SESSION['user_id'];

#$User_Color = '#FFD700';

$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
$User_Color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

// OLD hard coded for development & testing

//$Image_Location = "images/testing/20111215_002729_512_0335.jpg";



// Establish connection to database

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysql_error());



// Check connection

if (mysqli_connect_errno()) {

    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

?>

    <script type = "text/javascript">
        alert("InsertUser");

    </script>

<?php

if (isset($_POST['IMAGE_FILE_NAME'])) {



    $ImageFileName = $_POST['IMAGE_FILE_NAME'];

    echo $ImageFileName;


    $sql = "select 2+2 from dual;";
    $sql .= "INSERT INTO tbl_collaboration(collaboration_id,user_id, cha_ImageLocation, time_in,user_color ) VALUES ";

    $PointID = 1;
    // $PointID1 = 1;

    echo $PointID;

        $sql .= "((select max(collaboration_id)+1 from tbl_collaboration as b),'$User_ID','$ImageFileName', NOW(),(select user_color from tbl_users where user_id='$User_ID'));";





    $sql_trim = substr($sql, 0, -1);

    $result = mysqli_multi_query($con,$sql_trim);
    echo $result;

    if (!$result) {

        die($result);

    }


}





mysqli_close($con);

