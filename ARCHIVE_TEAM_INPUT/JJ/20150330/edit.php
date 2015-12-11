<?php
//include('_header.php');
include_once '../config/lang_config.php';
include_once '../translations/' . $lang_file;
?>
<html>
    <head>
        <style>
            #nav {
                line-height:30px;
                height:800px;
                width:100px;
                float:left;
                padding:30px;
                font-size: 10px;
                display: inline-block;                
            }                     
        </style>        
        <title>Carina | Edit</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen">
        <script type="text/javascript" src="../js/jquery-1.6.min.js"></script>
        <script src="../js/cufon-yui.js" type="text/javascript"></script>
        <script src="../js/cufon-replace.js" type="text/javascript"></script>
        <script src="../js/Open_Sans_400.font.js" type="text/javascript"></script>
        <script src="../js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
        <script src="../js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
        <script src="../js/FF-cash.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>
    <div id="nav">
        <a href="register.php?lang=en"><img src="../translations/images/flag.en.jpg" /><font size="4"><br></font>
            <?php echo $lang['LANGUAGE_FLAG_ENGLISH'] ?></a></a><font size="4"><br><br></font>
    <a href="register.php?lang=el"><img src="../translations/images/flag.el.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_GREEK'] ?></a><font size="4"><br><br></font>
    <a href="register.php?lang=it"><img src="../translations/images/flag.it.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN'] ?></a><font size="4"><br><br></font>
    <a href="register.php?lang=es"><img src="../translations/images/flag.es.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_SPANISH'] ?></a><font size="4"><br><br></font>
    <a href="register.php?lang=ca"><img src="../translations/images/flag.ca.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_CATALAN'] ?></a><font size="4"><br><br></font>   
    <a href="register.php?lang=pt"><img src="../translations/images/flag.pt.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE'] ?></a><font size="4"><br><br></font>
    <a href="register.php?lang=tl"><img src="../translations/images/flag.tl.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG'] ?></a><font size="4"><br><br></font>
</div>
<body id="page3">
    <!-- header -->
    <div class="bg">
        <div class="main">
            <header>
                <div class="row-1">
                    <h1> <a class="logo" href="../index.php">Carina</a> <strong class="slog">Collaborative Solar Imaging Annotation</strong> </h1>
               
                </div>
                <div class="row-2">
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="register.php">Edit</a></li>
                           
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- content -->
           <section id="content">
            <div class="padding">
              <div class="wrapper margin-bot">
                <div class="col-3">
                  <div class="img-indent3">
                    <div id="main_section" style="position: relative; left: 0px; top: 0px; width: 950px; height: 380px;">
					
					<?php include('_header.php'); ?>

<!-- clean separation of HTML and PHP -->
<h2><?php echo $_SESSION['user_name']; ?> - <?php echo $lang['WORDING_EDIT_YOUR_CREDENTIALS']; ?></h2>

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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script type="text/javascript">Cufon.now();</script>
</html>

