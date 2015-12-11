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
//  Module:  tools/jsonString2Obj.php
//
//  Purpose: JSON function tool to bring data off server
//           in preparation for php code to hand for mysql statement
//           builder in dbInterface.php
//           This file is required by the file dbInterface.php
//
////////////////////////////////////////////////////////////////////////////////

function jsonString2Obj($str)
{
  return json_decode(stripslashes($str));
}

