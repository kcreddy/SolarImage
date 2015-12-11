<?php
//include('_header.php');
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nav {
                line-height:30px;
                height:1200px;
                width:100px;
                float:left;
                padding:30px;
                font-size: 10px;
                display: inline-block;                
            }                      
        </style>        
        <title>Carina | Help</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
        <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/cufon-replace.js" type="text/javascript"></script>
        <script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
        <script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
        <script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
        <script src="js/FF-cash.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>
    <div id="nav" >
        <a href="help.php?lang=en"><img src="translations/images/flag.en.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ENGLISH']?></a></a><font size="4"><br><br></font>
        <a href="help.php?lang=el"><img src="translations/images/flag.el.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_GREEK']?></a><font size="4"><br><br></font>
        <a href="help.php?lang=it"><img src="translations/images/flag.it.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN']?></a><font size="4"><br><br></font>
        <a href="help.php?lang=es"><img src="translations/images/flag.es.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_SPANISH']?></a><font size="4"><br><br></font>
        <a href="help.php?lang=ca"><img src="translations/images/flag.ca.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_CATALAN']?></a><font size="4"><br><br></font>     
        <a href="help.php?lang=pt"><img src="translations/images/flag.pt.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE']?></a><font size="4"><br><br></font>
        <a href="help.php?lang=tl"><img src="translations/images/flag.tl.jpg" /><font size="4"><br></font>
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG']?></a><font size="4"><br><br></font>
    </div>   
    <body id="page2">
        <!-- header -->
        <div class="bg">
            <div class="main">
                <header>
                    <div class="row-1">
                        <h1> <a class="logo" href="index.php">Carina</a> <strong class="slog"><?php echo $lang['MESSAGE_CARINA']; ?></strong> </h1>
                        <fieldset>
                            <div class="buttons"><a class="button-2"
                                                    href="login.php?logout"><?php echo $lang['WORDING_LOGOUT']; ?></a> </div>
                            </field>
                    </div>
                    <div class="row-2">
                        <nav>
                            <ul class="menu">
                                <li><a href="login.php"><?php echo $lang['WORDING_MENU_HOME_PAGE']; ?></a></li>
                                <li><a href="gallery.php"><?php echo $lang['WORDING_MENU_GALLERY']; ?></a></li>
                                <li><a href="services.php"><?php echo $lang['WORDING_MENU_SERVICES']; ?></a></li>
                                <li><a class="active" href="help.php"><?php echo $lang['WORDING_MENU_HELP']; ?></a></li>
                                <li class="last-item"><a href="contacts.php"><?php echo $lang['WORDING_MENU_CONTACT']; ?></a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
                <!-- content -->
                <section id="content">
                    <div class="padding">
                        <div class="wrapper p4">
                            <div class="col-3">
                                <div class="indent">
                                    <h2>Help</h2>
                                    <div class="news indent-bot2">
                                        <time class="tdate-2"22.05.2011&nbsp;</time>
                                              <p class="p1"><a href="#">What is a coronal hole?</a></p>
                                            Our sun's corona is uneven not uniform. Darker cooler parts of the corona are known as coronal holes. In these cooler darker sections there are lower gas and energy levels than the surrounding area. Because of this, the sun's magnetic field will arch causing solar particles to escape the sun in the form of solar wind. If coronal holes become big enough coronal mass ejections car occur. Which is bad news for us on earth.
				<br />
				<br /></div>
                                    <div class="news indent-bot2">
                                        <time class="tdate-2"22.05.2011&nbsp;</time>  
                                              <p class="p1"><a href="#">What does CARINA have to do with the sun?</a></p>
                                            Carina utilizes the large userbase of the internet to study, analyze, and most importantly annotate images of the sun to make records of these coronal holes. The annotations of these images are recorded in a database where they can later be analyzed. Knowing what our sun is doing is vital to understanding solar weather to protect our satellites, power and communication systems, and other vital electronic systems.
				<br />
				<br />
                                    </div>
				    <div class="news indent-bot2">
                                        <time class="tdate-2"22.05.2011&nbsp;</time>  
                                              <p class="p1"><a href="#">How do I start?</a></p>
                                            You start by creating a free account. From here you can log in access the suite of tools in the services tab. Here is where you can <a href="edit.php">Edit</a> our profile information, upload a photo, annotate a photo, export annotation data, and access the #carina IRC chatroom on Mibbit. 
				<br />
				<br />
                                    </div>

				     <div class="news indent-bot2">
                                        <time class="tdate-2"22.05.2011&nbsp;</time>  
                                              <p class="p1"><a href="uploadanimage.php">Uploading a Photo</a></p>
                                            Within the services tab clicking the <a href="uploadanimage.php">Upload a Photo</a> link will take you to the upload page where you can select the desired file and upload it. 
				<br />
				<br />
                                    </div>

				     <div class="news indent-bot2">
                                        <time class="tdate-2"22.05.2011&nbsp;</time>  
                                              <p class="p1"><a href="#">Annotate A Photo</a></p>
                                            Clicking on the <a href="selectImage.php">Browse Album to Select Image</a> link or <a href="selectImage.php">Browse Album to Select Image</a> from the <a href="services.php">Services</a> page will take you to the annotation tool. From here you can select an image to annotate and begin looking for coronal holes. Start by placing your mouse cursor over the image. Your mouse coordinates are seen in real time above the image. Click and place waypoints around the coronal holes in the image. You can delete your last waypoint, clear all points, connect points, and request annotattions. Showing connections on the waypoints is helpful to seeing the coronal hole.  When you're happy with your work click Submit Annotations to write your annotations to the database. 
				<br />
				<br />                                    
				</div>

				   <div class="news indent-bot2">
                                        <time class="tdate-2"22.05.2011&nbsp;</time>  
                                              <p class="p1"><a href="#">Communicate With Others in the IRC</a></p>
                                            What better way to get help and questions answered than communicating with peers. The Colaboration link on the Services tab will take you to the colaboration page with a link to access the #carina chatroom on the right hand side. The chatroom will pop out in a new window. From here you can use an auto-generated nickname or make your own unique one. While online you can speak with others in the main chatroom, or PM (Personal Message) individuals. <a href="#carina/chat" onclick="window.open(&quot;http://widget.mibbit.com/?settings=2b28adda72b17abb9e321b7117b949a8&amp;server=irc.Mibbit.Net%3A%2B6697&amp;channel=%23carina&amp;nick=CARINA_%3F%3F%3F&amp;customprompt=Welcome%20To%CARINA&amp;customloading=Loading...%20Loading...&quot;,&quot;&quot;,&quot;width=999,height=555&quot;)">
    Click HERE to launch the #carina IRC Chatroom. </a>
				<br />
				<br />
                                    </div>


				  <div class="news indent-bot2">
                                        <time class="tdate-2"22.05.2011&nbsp;</time>  
                                              <p class="p1"><a href="#">Exporting Annotation Data</a></p>
                                            The contents of the annotation database can be exported for further analysis. 
                                    </div>


                                </div>
                            </div>
                            
                        </div>
                        <div class="wrapper">
                        </div>
                    </div>
                </section>
                <!-- footer -->

                        </div>
                    </div>
                    <script type="text/javascript">Cufon.now();</script>
                    </html>


