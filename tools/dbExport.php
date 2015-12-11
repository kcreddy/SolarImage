<?php
////////////////////////////////////////////////////////////////////////////////
//
//  University of New Mexico - School Year 2014 - 2015
//  Senior Design Project - Solar Image Collaboration
//
//  CARINA - Collaborative Solar Imaging Annotation
//
//  Sponsor - Professor Pattichis
//
//  Team - Patrick Lopez PM, Conner Dolan, Edward Sadzewicz, 
//         Cody Shell, Jaclynn Wakley
//
////////////////////////////////////////////////////////////////////////////////
//
//  Module:  tools/dbExport.php
//
//  Purpose: Database Export Tool - Output to csv file
//
////////////////////////////////////////////////////////////////////////////////

//  sesssion_start();  Includes global variables for user information

session_start();

// Includes for language system and system config
include('../config/config.php');

require_once 'jsonString2Obj.php';

// Establish connection to database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysql_error());
//$con = mysqli_connect($host, $uname, $pass, $database) or die(mysql_error());

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Fetch Record from Database

$output = "";
//$table = "tbl_coronal_hole_annotations"; // Enter Your Table Name 
$sql = mysqli_query($con,'select * from tbl_coronal_hole_annotations');

if($sql === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
$columns_total = mysqli_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
$heading = mysqli_field_name($sql, $i);
$output .= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysqli_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename = "myFile.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;

function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}

?>

