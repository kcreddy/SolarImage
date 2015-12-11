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



if (isset($_POST['IMAGE_FILE_NAME'])) {

    $ImageFileName = $_POST['IMAGE_FILE_NAME'];

    $annots_x_NORM = jsonString2Obj($_POST['ANNOTS_X_NORM']);

    $annots_y_NORM = jsonString2Obj($_POST['ANNOTS_Y_NORM']);

    $annots_x_PIXEL = jsonString2Obj($_POST['ANNOTS_X_PIXEL']);

    $annots_y_PIXEL = jsonString2Obj($_POST['ANNOTS_Y_PIXEL']);

    $PixelsX = $_POST['PIXELS_X'];

    $PixelsY = $_POST['PIXELS_Y'];

    $NumberOfPoints = 0;

    $ANNOTS_X_PIXEL_DRAW = [];

    $ANNOTS_Y_PIXEL_DRAW = [];

    $user_colors_DRAW = [];


//    $sql = "select cha_XCoordinate_PIXEL,cha_YCoordinate_PIXEL from tbl_coronal_hole_annotations
//where cha_ImageLocation='$ImageFileName' and (((cha_XCoordinate_PIXEL between '$annots_x_PIXEL[0]' and '$annots_x_PIXEL[0]'+100)
//or (cha_XCoordinate_PIXEL between '$annots_x_PIXEL[0]' and '$annots_x_PIXEL[0]'-100)) and ((cha_YCoordinate_PIXEL between '$annots_y_PIXEL[0]' and '$annots_y_PIXEL[0]'+100)
//or (cha_YCoordinate_PIXEL between '$annots_y_PIXEL[0]' and '$annots_y_PIXEL[0]'-100)));";

    $sql = "select cha_XCoordinate_PIXEL,cha_YCoordinate_PIXEL from tbl_coronal_hole_annotations
where cha_ImageLocation='$ImageFileName' and ((cha_XCoordinate_PIXEL < '".end($annots_x_PIXEL)."'+50 and cha_XCoordinate_PIXEL >= '".end($annots_x_PIXEL)."'-50) AND
(cha_YCoordinate_PIXEL < '".end($annots_x_PIXEL)."'+50 and cha_YCoordinate_PIXEL >= '".end($annots_y_PIXEL)."'-50));";


    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

        $ANNOTS_X_PIXEL_DRAW[] = $row[0];

        $ANNOTS_Y_PIXEL_DRAW[] = $row[1];

        $NumberOfPoints ++;

    }

    $data['NumberOfPoints'] = $NumberOfPoints;

    $data['x_pixels'] = $ANNOTS_X_PIXEL_DRAW;

    $data['y_pixels'] = $ANNOTS_Y_PIXEL_DRAW;

    echo json_encode($data, JSON_FORCE_OBJECT);//, JSON_FORCE_OBJECT);

}
mysqli_close($con);

