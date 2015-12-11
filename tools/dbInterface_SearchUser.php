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



// OLD hard coded for development & testing

//$Image_Location = "images/testing/20111215_002729_512_0335.jpg";



// Establish connection to database

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysql_error());



// Check connection

if (mysqli_connect_errno()) {

    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



if (isset($_GET['Search_UserName'])) {

    $ImageFileName = ($_GET['IMAGE_FILE_NAME']);

    $Search_UserName = ($_GET['Search_UserName']);

    $NumberOfPoints = 0;

    $ANNOTS_X_PIXEL = [];

    $ANNOTS_Y_PIXEL = [];

    $sql = "SELECT cha_XCoordinate_PIXEL,

                  cha_YCoordinate_PIXEL

           FROM   tbl_coronal_hole_annotations WHERE cha_ImageLocation ='$ImageFileName' and cha_SolarImageDataKeyID in (select sid_SolarImgDataKeyID from tbl_solar_image_data where sid_UserKeyID in (select user_id from tbl_users where user_name = '$Search_UserName')) ;";


    $result = mysqli_query($con,$sql);

    if (!$result) {

        die('Invalid query: ' . mysql_error());

    }



    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {



        $ANNOTS_X_PIXEL[] = $row[0];

        $ANNOTS_Y_PIXEL[] = $row[1];

        $NumberOfPoints ++;

    }

    $data0['NumberOfPoints'] = $NumberOfPoints;

    $data['NumberOfPoints'] = $NumberOfPoints;

    $data['x_pixels'] = $ANNOTS_X_PIXEL;

    $data['y_pixels'] = $ANNOTS_Y_PIXEL;

    echo json_encode($data, JSON_FORCE_OBJECT);//, JSON_FORCE_OBJECT);



}

if (isset($_GET['Search_Date1'])) {

    $ImageFileName = ($_GET['IMAGE_FILE_NAME']);

    $Search_Date1 = ($_GET['Search_Date1']);

    $Search_Date2 = ($_GET['Search_Date2']);

    $NumberOfPoints = 0;

    $ANNOTS_X_PIXEL = [];

    $ANNOTS_Y_PIXEL = [];

    $sql = "SELECT cha_XCoordinate_PIXEL,

                  cha_YCoordinate_PIXEL

           FROM   tbl_coronal_hole_annotations WHERE cha_ImageLocation ='$ImageFileName' and DATE(cha_CreationDateTime) between '$Search_Date1' and '$Search_Date2'";



    $result = mysqli_query($con,$sql);

    if (!$result) {

        die('Invalid query: ' . mysql_error());

    }



    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {



        $ANNOTS_X_PIXEL[] = $row[0];

        $ANNOTS_Y_PIXEL[] = $row[1];

        $NumberOfPoints ++;

    }

    $data0['NumberOfPoints'] = $NumberOfPoints;

    $data['NumberOfPoints'] = $NumberOfPoints;

    $data['x_pixels'] = $ANNOTS_X_PIXEL;

    $data['y_pixels'] = $ANNOTS_Y_PIXEL;

    echo json_encode($data, JSON_FORCE_OBJECT);//, JSON_FORCE_OBJECT);



}

mysqli_close($con);

