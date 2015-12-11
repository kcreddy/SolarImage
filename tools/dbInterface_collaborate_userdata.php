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


if (isset($_GET['IMAGE_FILE_NAME'])) {

    $ImageFileName = ($_GET['IMAGE_FILE_NAME']);

    $User_Names = [];

    $User_IDS = [];

    $User_Colors = [];

    $NumberOfUsers =0;

    $sql = "select user_name,user_id,user_color from tbl_users where user_id in (select user_id from tbl_collaboration where cha_ImageLocation = '$ImageFileName')";

    $result = mysqli_query($con,$sql);

    if (!$result) {

        die('Invalid query: ' . mysql_error());

    }



    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {


        $User_Names[] = $row[0];
        $User_IDS[] = $row[1];
        $User_Colors[] = $row[2];
        $NumberOfUsers ++;

    }

    $data['NumberOfUsers'] = $NumberOfUsers;

    $data['user_names'] = $User_Names;
    $data['user_ids'] = $User_IDS;

    $data['cur_user_id'] = $User_ID;

    $data['user_color'] = $User_Colors;

    echo json_encode($data, JSON_FORCE_OBJECT);//, JSON_FORCE_OBJECT);



}





mysqli_close($con);

