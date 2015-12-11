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
//  Module:  views/edit.php
//
//  Purpose: View with account items displayed for user to edit
//
////////////////////////////////////////////////////////////////////////////////
include('_header.php'); 
?>

<!-- clean separation of HTML and PHP -->
<a><font color="red"><?php echo $_SESSION['user_name']; ?></font> - <?php echo $lang['WORDING_EDIT_YOUR_CREDENTIALS']; ?></a><br><hr/>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_name">
    <label for="user_name"><?php echo $lang['WORDING_NEW_USERNAME']; ?></label>
    <input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo $lang['WORDING_CURRENTLY']; ?>: <?php echo $_SESSION['user_name']; ?>)
    <input type="submit" name="user_edit_submit_name" value="<?php echo $lang['WORDING_CHANGE_USERNAME']; ?>" />
</form><hr/>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_email">
    <label for="user_email"><?php echo $lang['WORDING_NEW_EMAIL']; ?></label>
    <input id="user_email" type="email" name="user_email" required /> (<?php echo $lang['WORDING_CURRENTLY']; ?>: <?php echo $_SESSION['user_email']; ?>)
    <input type="submit" name="user_edit_submit_email" value="<?php echo $lang['WORDING_CHANGE_EMAIL']; ?>" />
</form><hr/>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="edit.php" name="user_edit_form_password">
    <label for="user_password_old"><?php echo $lang['WORDING_OLD_PASSWORD']; ?></label>
    <input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />

    <label for="user_password_new"><?php echo $lang['WORDING_NEW_PASSWORD']; ?></label>
    <input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />

    <label for="user_password_repeat"><?php echo $lang['WORDING_NEW_PASSWORD_REPEAT']; ?></label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />

    <input type="submit" name="user_edit_submit_password" value="<?php echo $lang['WORDING_CHANGE_PASSWORD']; ?>" />
</form><hr/>

<!-- backlink -->
<a href="login.php"><?php echo $lang['WORDING_BACK_TO_HOME']; ?></a>

<?php include('_footer.php'); ?>
