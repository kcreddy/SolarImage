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



if (isset($_POST['IMAGE_FILE_NAME'])) {

    $ImageFileName = $_POST['IMAGE_FILE_NAME'];

    $annots_x_NORM = jsonString2Obj($_POST['ANNOTS_X_NORM']);

    $annots_y_NORM = jsonString2Obj($_POST['ANNOTS_Y_NORM']);

    $annots_x_PIXEL = jsonString2Obj($_POST['ANNOTS_X_PIXEL']);

    $annots_y_PIXEL = jsonString2Obj($_POST['ANNOTS_Y_PIXEL']);

    $PixelsX = $_POST['PIXELS_X'];

    $PixelsY = $_POST['PIXELS_Y'];

    $sql = "select 2+2 from dual;";

    $sql .= "INSERT INTO tbl_collaboration(collaboration_id,user_id, cha_ImageLocation,cha_PointID, cha_XCoordinate_PIXEL, cha_YCoordinate_PIXEL, cha_XCoordinate_NORM, cha_YCoordinate_NORM, time_in, user_color ) VALUES ";

    $PointID = 1;
   // $PointID1 = 1;

    foreach( $annots_x_NORM as $index => $x) {


        $sql .= "('".$PointID."','$User_ID','$ImageFileName','".$PointID."','".$annots_x_PIXEL[$index]."','".$annots_y_PIXEL[$index]."','".$x."','".$annots_y_NORM[$index]."',"

            . " NOW(), (select user_color from tbl_users where user_id=".$User_ID.")),";

        #(select user_color from tbl_users where user_id=".$User_ID.")

        $PointID += 1;


    }



    $sql_trim = substr($sql, 0, -1);

    $result = mysqli_multi_query($con,$sql_trim);

    if (!$result) {

        die($result);

    }


}

if (isset($_GET['IMAGE_FILE_NAME'])) {

    $ImageFileName = ($_GET['IMAGE_FILE_NAME']);

    $NumberOfPoints = 0;

    $ANNOTS_X_PIXEL = [];

    $ANNOTS_Y_PIXEL = [];

    $user_colors = [];

    $sql = "SELECT cha_XCoordinate_PIXEL,

                  cha_YCoordinate_PIXEL, user_color

           FROM   tbl_collaboration ;";


    $result = mysqli_query($con,$sql);

    if (!$result) {

        die('Invalid query: ' . mysql_error());

    }



    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {



        $ANNOTS_X_PIXEL[] = $row[0];

        $ANNOTS_Y_PIXEL[] = $row[1];

        $user_colors[] = $row[2];

        $NumberOfPoints ++;

    }

    $data0['NumberOfPoints'] = $NumberOfPoints;

    $data['NumberOfPoints'] = $NumberOfPoints;

    $data['x_pixels'] = $ANNOTS_X_PIXEL;

    $data['y_pixels'] = $ANNOTS_Y_PIXEL;

    $data['color'] = $user_colors;

    echo json_encode($data, JSON_FORCE_OBJECT);//, JSON_FORCE_OBJECT);



}





mysqli_close($con);

