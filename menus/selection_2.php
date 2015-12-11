1
<?php

function database_connect($select_database)
{
    $resource_link = mysql_connect("localhost", "root", "");
    if (mysql_select_db($select_database, $resource_link)) {
        return $resource_link;
    } else {
        echo "Cannot connect to DB";
        return false;
    }
}

function print_dropdown($query, $link){
    $queried = mysql_query($query, $link);
    $menu = '<select cha_PointID="cha_CoronalHoleNumber">';
    while ($result = mysql_fetch_array($queried)) {
        $menu .= '
      <option value="' . $result['cha_PointID'] . '">' . $result['cha_CoronalHoleNumber'] . '</option>';
    }
    $menu .= '</select>';
    return $menu;
}
 
//Some other form elements, or just start a form.
echo '<form method="post" action="">'; 
//The important bit

echo print_dropdown("SELECT cha_PointID, cha_CoronalHoleNumber FROM tbl_coronal_hole_annotations LIMIT 0, 30", database_connect("carina"));

//Some other form elements, or just end the form.

echo '<input type="submit" name="submit" value="submit"/>
    </form>';


