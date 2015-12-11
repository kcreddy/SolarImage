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
//  Module:  views/password_reset.php
//
//  Purpose: View with form for password reset
//
////////////////////////////////////////////////////////////////////////////////
include('_header.php'); 
?>

<!-- clean separation of HTML and PHP -->
<!-- <h2><?php //echo $_SESSION['user_name']; ?> - <?php //echo $lang['WORDING_EDIT_YOUR_CREDENTIALS']; ?></h2> -->
 <!-- <?php //echo $lang['LANGUAGE_FLAG_ENGLISH']; ?></a></a> -->

<?php if ($login->passwordResetLinkIsValid() == true) { ?>
<form method="post" action="password_reset.php" name="new_password_form">
    <input type='hidden' name='user_name' value='<?php echo $_GET['user_name']; ?>' />
    <input type='hidden' name='user_password_reset_hash' value='<?php echo $_GET['verification_code']; ?>' />

    <label for="user_password_new"><?php echo $lang['WORDING_NEW_PASSWORD'];  ?></label>
    <input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="user_password_repeat"><?php echo $lang['WORDING_NEW_PASSWORD_REPEAT'];  ?></label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    <input type="submit" name="submit_new_password" value="<?php echo $lang['WORDING_SUBMIT_NEW_PASSWORD'];  ?>" />
</form>
<!-- no data from a password-reset-mail has been provided, so we simply show the request-a-password-reset form -->
<?php } else { ?>
<form method="post" action="password_reset.php" name="password_reset_form">
    <label for="user_name"><?php echo $lang['WORDING_REQUEST_PASSWORD_RESET'];  ?></label>
    <input id="user_name" type="text" name="user_name" required />
    <input type="submit" name="request_password_reset" value="<?php echo $lang['WORDING_RESET_PASSWORD'];  ?>" />
</form>
<?php } ?>

<a href="login.php"><?php echo $lang['WORDING_BACK_TO_LOGIN'];  ?></a>

<?php include('_footer.php'); ?>
