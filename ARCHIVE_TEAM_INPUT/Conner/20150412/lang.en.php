<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// English Language File

$lang = array();

// login & registration classes
$lang['MESSAGE_ACCOUNT_LOGIN'] = 'Please log in or register new account at the Log In Page link to the right';
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = 'Your account will be activated with this form and then verified with a confirmation email.';
$lang['MESSAGE_CAPTCHA_WRONG'] = 'Captcha was wrong!';
$lang['MESSAGE_COOKIE_INVALID'] = 'Invalid cookie';
$lang['MESSAGE_DATABASE_ERROR'] = 'Database connection problem.';
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = "This email address is already registered. Please use the \"I forgot my password\" page if you don't remember it.";
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = 'Sorry, your email changing failed.';
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = 'Your email address has been changed successfully. New email address is ';
$lang['MESSAGE_EMAIL_EMPTY'] = 'Email cannot be empty';
$lang['MESSAGE_EMAIL_INVALID'] = 'Your email address is not in a valid email format';
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = 'Sorry, that email address is the same as your current one. Please choose another one.';
$lang['MESSAGE_EMAIL_TOO_LONG'] = 'Email cannot be longer than 64 characters';
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = 'Empty link parameter data.';
$lang['MESSAGE_LOGGED_OUT'] = 'You have been logged out.';
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
$lang['MESSAGE_LOGIN_FAILED'] = 'Login failed.';
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = 'Your OLD password was wrong.';
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = 'Password and password repeat are not the same';
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = 'Sorry, your password changing failed.';
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = 'Password successfully changed!';
$lang['MESSAGE_PASSWORD_EMPTY'] = 'Password field was empty';
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = 'Password reset mail NOT successfully sent! Error: ';
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = 'Password reset mail successfully sent!';
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = 'Password has a minimum length of 6 characters';
$lang['MESSAGE_PASSWORD_WRONG'] = 'Wrong password. Try again.';
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = 'You have entered an incorrect password 3 or more times already. Please wait 30 seconds to try again.';
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = 'Sorry, no such id/verification code combination here...';
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = 'Activation was successful! You can now log in!';
$lang['MESSAGE_REGISTRATION_FAILED'] = 'Sorry, your registration failed. Please go back and try again.';
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = 'Your reset link has expired. Please use the reset link within one hour.';
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = 'Sorry, we could not send you an verification mail. Your account has NOT been created.';
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = 'Verification Mail NOT successfully sent! Error: ';
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = 'Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.';
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = 'This user does not exist';
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = 'Username cannot be shorter than 2 or longer than 64 characters';
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = 'Sorry, your chosen username renaming failed';
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = 'Your username has been changed successfully. New username is - ';
$lang['MESSAGE_USERNAME_EMPTY'] = 'Username field was empty';
$lang['MESSAGE_USERNAME_EXISTS'] = 'Sorry, that username is already taken. Please choose another one.';
$lang['MESSAGE_USERNAME_INVALID'] = 'Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters';
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = 'Sorry, that username is the same as your current one. Please choose another one.';
//  Common Wording/Messages in Pages
$lang['MESSAGE_WELCOME'] = 'Welcome';
$lang['MESSAGE_CARINA'] = 'Collaborative Solar Imaging Annotation';
$lang['MESSAGE_LOG_IN_PAGE'] = 'Log In Page';
$lang['MESSAGE_CONSTELLATION'] = 'Constellation';
$lang['MESSAGE_CONSTELLATION_INTRO'] = "Carina Constellation in the southern sky, meaning \"the keel of a ship\".  Carina contains the second brightest star in the night sky.";
$lang['MESSAGE_AIM'] = 'Our aim is';
$lang['MESSAGE_AIM_DEDICATION'] = 'Dedicated';
$lang['MESSAGE_AIM_INTRO'] = 'To create an open-source web application that will collect valuable data on coronal holes.';
$lang['MESSAGE_LOBO'] = "Everyone's a";
$lang['MESSAGE_LOBO_INTRO'] = "The University of New Mexico's Electrical and Computer Engineers would like to introduce Carina!";
$lang['MESSAGE_MISSION'] = 'Our Mission';
$lang['MESSAGE_CARINA_MISSION'] = 'CARINA Mission Statement';
$lang['MESSAGE_MISSION_1'] = 'The objective of this project is to provide a collaborative 
                            internet application (web app) in which users will be able 
                            to annotate solar observational images. Users will use a mouse 
                            to click along the perimeter of coronal holes in the images.  
                            The annotated data will be joined with its respective image 
                            and made available for further analysis by the image provider.';
$lang['MESSAGE_MISSION_2'] = 'The astronomical field is in need of this type of collaborative 
                            technology. With the help of this solar annotation application, 
                            scientists will have the capacity to exchange ideas and better 
                            understand the dynamics of the sun that lead to these coronal mass ejections.';
// views
$lang['WORDING_BACK_TO_LOGIN'] = 'Back to Login Page';
$lang['WORDING_BACK_TO_HOME'] = 'Back to Home Page';
$lang['WORDING_CHANGE_EMAIL'] = 'Change email';
$lang['WORDING_CHANGE_PASSWORD'] = 'Change password';
$lang['WORDING_CHANGE_USERNAME'] = 'Change username';
$lang['WORDING_CURRENTLY'] = 'currently';
$lang['WORDING_EDIT_USER_DATA'] = 'Edit user data';
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = 'You are logged in and can edit your credentials here';
$lang['WORDING_FORGOT_MY_PASSWORD'] = 'I forgot my password';
$lang['WORDING_LOGIN'] = 'Log in';
$lang['WORDING_LOGOUT'] = 'Log out';
$lang['WORDING_NEW_EMAIL'] = 'New email';
$lang['WORDING_NEW_PASSWORD'] = 'New password';
$lang['WORDING_NEW_PASSWORD_REPEAT'] = 'Repeat new password';
$lang['WORDING_NEW_USERNAME'] = 'New username (username cannot be empty and must be azAZ09 and 2-64 characters)';
$lang['WORDING_OLD_PASSWORD'] = 'Your OLD Password';
$lang['WORDING_PASSWORD'] = 'Password';
$lang['WORDING_PROFILE_PICTURE'] = 'Your profile picture (from gravatar):';
$lang['WORDING_REGISTER'] = 'Register';
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = 'Register new account';
$lang['WORDING_REGISTRATION_CAPTCHA'] = 'Please enter these characters';
$lang['WORDING_REGISTRATION_EMAIL'] = "User's email (please provide a real email address, you'll get a verification mail with an activation link)";
$lang['WORDING_REGISTRATION_PASSWORD'] = 'Password (min. 6 characters!)';
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = 'Password repeat';
$lang['WORDING_REGISTRATION_USERNAME'] = 'Username (only letters and numbers, 2 to 64 characters)';
$lang['WORDING_REMEMBER_ME'] = 'Keep me logged in (for 2 weeks)';
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "Request a password reset. Enter your username and you'll get a mail with instructions:";
$lang['WORDING_RESET_PASSWORD'] = 'Reset my password';
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = 'Submit new password';
$lang['WORDING_USERNAME'] = 'Username';
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = 'You are logged in as - ';
$lang['WORDING_ADMIN_LOGIN'] = 'Administrator Login';
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = 'Home Page';
$lang['WORDING_MENU_GALLERY'] = 'Gallery';
$lang['WORDING_MENU_SERVICES'] = 'Services';
$lang['WORDING_MENU_HELP'] = 'Help';
$lang['WORDING_MENU_CONTACT'] = 'Contact Us';
//  LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = 'ENGLISH';
$lang['LANGUAGE_FLAG_GREEK'] = 'GREEK';
$lang['LANGUAGE_FLAG_ITALIAN'] = 'ITALIAN';
$lang['LANGUAGE_FLAG_SPANISH'] = 'SPANISH';
$lang['LANGUAGE_FLAG_CATALAN'] = 'CATALAN';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = 'PORTUGUESE';
$lang['LANGUAGE_FLAG_TAGALOG'] = 'TAGALOG';
//  SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = 'Our Services';
$lang['WORDING_UPLOAD_A_PHOTO'] = 'Upload A Photo';
$lang['WORDING_UPLOAD_DESCRIPTION'] = ' - This section will let the user upload an image location from an '
        . 'external source for annotations. Will save the location in the users database for future work.';
$lang['WORDING_ANNOTATE_DEMO'] = 'Annotate DEMO Image';
$lang['WORDING_ANNOTATE_DEMO_DETAILS'] = 'Practice Annotating Administrator Supplied Image';
$lang['WORDING_SOLAR_RESOURCES'] ='Solar Dynamics & Images Resources';
$lang['WORDING_SOLAR_RESOURCES_DETAILS'] = " - Research and find images for annotations.";
$lang['WORDING_SOLAR_RESOURCES_LINK_1'] ='SDO | Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_2'] ='SDO | Browse IMage Directories';
$lang['WORDING_SOLAR_RESOURCES_LINK_3'] ='NASA Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_4'] ='Stanford Solar Center';
$lang['WORDING_SOLAR_RESOURCES_LINK_5'] ='SOHO - Solar And Heliospheric Observatory';
$lang['WORDING_BROWSE_FOR_IMAGE'] = 'Browse Album To Select Image';
$lang['WORDING_BROWSE_IMAGE_DESCRIPTION'] = " - Select an image in albums to annotate.";
$lang['WORDING_COLLABORATE'] = 'Collaborate';
$lang['WORDING_COLLABORATE_DESCRIPTION'] = " - Contact other users to discuss images.";
$lang['WORDING_MY_PROFILE'] = 'My Profile';
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = " - Update user profile information.";
$lang['WORDING_DATA_EXPORT'] = "Annotations Export";
$lang['WORDING_DATA_EXPORT_DETAILS'] = " - Output annotation data into CSV formated file.  User prompted for output file location.";
//  GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = 'Latest Image';
$lang['WORDING_ARCHIVE_SUMMARY'] = 'Archive Summary';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = 'Complete archive of solar images by year and month';
$lang['WORDING_PREVIOUS_YEARS'] = 'Previous Years';
$lang['WORDING_ARCHIVE'] = 'Archive';
//  ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = 'Annotate Photo';
$lang['WORDING_OPERATIONS'] = 'OPERATIONS:  ';
$lang['WORDING_ANNOTATE'] = 'ANNOTATE';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = 'DELETE LAST ANNOTATION POINT';
$lang['WORDING_DELETE_ALL_POINTS'] = 'DELETE ALL POINTS';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = 'ARE YOU CERTAIN?!';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = 'Click ANNOTATE to resume';
$lang['WORDING_ANNOTATION_SAVE'] = 'SAVE';
$lang['WORDING_ANNOTATION_CANCEL'] = 'CANCEL';
$lang['WORDING_ANNOTATION_SUBMIT'] = 'SUBMIT ANNOTATIONS';
$lang['WORDING_ANNOTATION_REQUEST'] = 'REQUEST ANNOTATIONS';
$lang['WORDING_ANNOTATION_QUIT'] = 'Return to Services - ALL ANNOTATIONS DISCARDED';
$lang['WORDING_CONNECT'] = 'Enable Connect Annotations';
//  ANNOTATION DATA RETRIEVE
$lang['MESSAGE_ANNOTATION_DATA_RETRIEVED'] = 'Annotation Data Retrieved For Image File: ';
//  HELP PAGE
$lang['WORDING_HELP_WHAT_IS'] = 'What is a coronal hole?';
$lang['WORDING_HELP_WHAT_IS_DETAILS'] = 'Our sun\'s corona is uneven not uniform. Darker cooler parts 
                                    of the corona are known as coronal holes. In these cooler 
                                    darker sections there are lower gas and energy levels than 
                                    the surrounding area. Because of this, the sun\'s magnetic 
                                    field will arch causing solar particles to escape the sun 
                                    in the form of solar wind. If coronal holes become big enough 
                                    coronal mass ejections car occur. Which is bad news for us on earth.';
$lang['WORDING_HELP_WHAT_DOES'] = 'What does CARINA have to do with the sun?';
$lang['WORDING_HELP_WHAT_DOES_DETAILS'] = 'Carina utilizes the large userbase of the internet to study, analyze,
                                 and most importantly annotate images of the sun to make records of these 
                                 coronal holes. The annotations of these images are recorded in a database 
                                 where they can later be analyzed. Knowing what our sun is doing is vital to 
                                 understanding solar weather to protect our satellites, power and communication 
                                 systems, and other vital electronic systems.';
$lang['WORDING_HELP_HOW_DO'] = 'How do I start?';
$lang['WORDING_HELP_HOW_DO_DETAILS'] = 'You start by creating a free account. From here you can log in access the
                                   suite of tools in the services tab. Here is where you can Edit our profile 
                                   information, upload a photo, annotate a photo, export annotation data, and 
                                   access the #carina IRC chatroom on Mibbit.';
$lang['WORDING_HELP_UPLOADING'] = 'Uploading a Photo';
$lang['WORDING_HELP_UPLOADING_DETAILS'] = 'Within the services tab clicking the Upload a Photo link will take you
                                           to the upload page where you can select the desired file and upload it.';
$lang['WORDING_HELP_ANNOTATE'] = 'Annotate a Photo';
$lang['WORDING_HELP_ANNOTATE_DETAILS'] = 'Clicking on the Browse Album to Select Image link or Browse Album to
                                          Select Image from the Services page will take you to the annotation 
                                          tool. From here you can select an image to annotate and begin looking 
                                          for coronal holes. Start by placing your mouse cursor over the image. 
                                          Your mouse coordinates are seen in real time above the image. Click 
                                          and place waypoints around the coronal holes in the image. You can delete 
                                          your last waypoint, clear all points, connect points, and request 
                                          annotattions. Showing connections on the waypoints is helpful to seeing 
                                          the coronal hole. When you\'re happy with your work click Submit Annotations 
                                          to write your annotations to the database.';
$lang['WORDING_HELP_COMMUNICATE'] = 'Communicate With Others in the IRC';
$lang['WORDING_HELP_COMMUNICATE_DETAILS'] = 'What better way to get help and questions answered than communicating
                                             with peers. The Colaboration link on the Services tab will take you to 
                                             the colaboration page with a link to access the #carina chatroom on the 
                                             right hand side. The chatroom will pop out in a new window. From here 
                                             you can use an auto-generated nickname or make your own unique one. While 
                                             online you can speak with others in the main chatroom, or PM (Personal 
                                             Message) individuals. Click HERE to launch the #carina IRC Chatroom.';
$lang['WORDING_HELP_EXPORTING'] = 'Exporting Annotation Data';
$lang['WORDING_HELP_EXPORTING_DETAILS'] = 'The contents of the annotation database can be exported for further analysis.';
// FOOTER
$lang['WORDING_UNM'] = "University of New Mexico - School Year 2014 - 2015";
$lang['WORDING_SDP-SIC'] = "Senior Design Project - Solar Image Collaboration";
$lang['WORDING_TEAM'] = "Team";
$lang['WORDING_UNM-SDPW'] = "UNM Senior Design Projects website";







