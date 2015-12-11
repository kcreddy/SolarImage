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

    $sql = "INSERT INTO tbl_collaboration (user_id,cha_ImageLocation, "

        . "time_in)"

        . " VALUES ($User_ID,'$ImageFileName', NOW());";


    $result = mysqli_query($con,$sql);

    if (!$result) {

        die('Invalid query: ' . mysql_error());

    }


}


mysqli_close($con);

