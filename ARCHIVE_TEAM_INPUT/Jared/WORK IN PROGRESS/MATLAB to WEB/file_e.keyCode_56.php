<?php

/*
 *          glob function to run through all images
 *          in the R8 folder and list them as
 *          options in the Lowe_based javascript
 *          FITS viewer.  Outputs obnoxious error
 *          if no files in directory.  Second else {
 *          statement outputs obnoxious error for
 *          unknown bugs.
 * 
 *          Jared Morris
 *          Last Update: 22 June 2015
 */

$files = glob('folder/*.png', GLOB_BRACE);

if(isset($files) && is_array($files)) {
    foreach($files as $file) {
        $fileName = basename($file);
        echo '<option>' .$fileName '</option>'; }
}

elseif(empty($files)) {
        echo '<font size='60'><b>' ERROR: NO FILES IN FOLDER '</b></font>' }
        
else {
    echo '<font size='60'><b>' ERROR: UNKNOWN. SOMETHING WENT WRONG '</b></font>' }

?>


