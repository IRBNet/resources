<?php
require('Parsedown.php');
require('database.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta  name="author" content="IRBNet"/>
        <meta  name="copyright" content="&copy; Research Dataware LLC"/>
        <link rel="image_src" href="http://www.irbnetresources.org/news/images/logo_irbnet_fb.gif" / >
        <link rel="icon" href="favicon.ico" sizes="32x32">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <title>IRBNet  Administrative Resources</title>
        <link href="irbnet.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function MM_CheckFlashVersion(reqVerStr,msg){
              with(navigator){
                var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
                var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
                if (!isIE || !isWin){  
                  var flashVer = -1;
                  if (plugins && plugins.length > 0){
                    var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
                    desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
                    if (desc == "") flashVer = -1;
                    else{
                      var descArr = desc.split(" ");
                      var tempArrMajor = descArr[2].split(".");
                      var verMajor = tempArrMajor[0];
                      var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
                      var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
                      flashVer =  parseFloat(verMajor + "." + verMinor);
                    }
                  }
                  // WebTV has Flash Player 4 or lower -- too low for video
                  else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

                  var verArr = reqVerStr.split(",");
                  var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
              
                  if (flashVer < reqVer){
                    if (confirm(msg))
                      window.location = "http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
                  }
                }
              } 
            }
        </script>
        <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
		<!-- JQUERY THAT ALLOWS FAQ SECTION NAVIGATION <script src="Scripts/admin_scripts.js" type="text/javascript"></script> -->
        <style type="text/css">
        <!--
        #wrapper #folio #sitewrapper #main_content #leftcol .left_content table tr td p strong {
        	color: #00F;
        }
        .heading3 {
        	color: #5959FF;
        }
        -->
        </style>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-9413511-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </head>

    <body onLoad="MM_CheckFlashVersion('8,0,0,0','Content on this page requires a newer version of Macromedia Flash Player. Do you want to download it now?');">

        <!-- Structurals - Wrapper and Folio -->
        <div id="wrapper">
            <div id="folio">

                <!-- Site Wrapper -->
                <div id="sitewrapper">

                    <div id="topstrip">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="http://www.irbnet.org"><img src="images/irbnet.gif" alt="IRBNet" width="139" height="43" border="0" title="IRBNet" /></a>
                        </div>

                        <!-- Tagline -->
                        <div class="tagline">
                            <h1>
                                Innovative Solutions for <br />
                                Compliance and Research Management
                            </h1>
                        </div>

                        <!-- Login -->
                        <div class="login">
                            <div class="login_top">
                                <form id="form1" name="form1" method="post" action="https://www.irbnet.org/release/public/login/j_security_check">
                                    <table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="35%" class="login_labels">Username</td>
                                            <td width="35%" class="login_labels">Password</td>
                                            <td width="30%" class="login_labels">&nbsp; &nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="35%" class="login_inputs"><input name="j_username" type="text" class="login_field" id="j_username" size="14" /></td>
                                            <td width="35%" class="login_inputs"><input name="j_password" type="password" class="login_field" id="j_password" size="14" /></td>
                                            <td width="30%" class="login_buttonright"><input name="image" type="image" src="images/buttons/login.gif" alt="LogIn" align="top" /></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>

                            <div class="login_bottom">
                                <p align="right" class="login_field">Login here to the <strong>National Research Network</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation -->
                    <div id="navigation">
                        <p>
                            <a href="../index.html"><img src="images/nav/home.gif" alt="Home" width="45" height="29" border="0" /></a><img src="images/nav/nav-div.gif" alt="Home" width="1" height="29" border="0" class="navdiv" /><!-- Close Nav --><a href="../tresources/admin-training.php"><img src="images/resources-on.gif" width="74" height="29" /></a><img src="images/nav/nav-div.gif" alt="Home" width="1" height="29" border="0" class="navdiv" />
                        </p>
                    </div>

                    <!-- Main Content Area -->
                    <div id="main_content">
                        <div id="titlecol">
                            <div class="title_content">
                                <h1>Administrator FAQs</h1>
                                <p>&nbsp;</p>
                            </div>
                        </div>

						<?php
                        //if(isset($_SESSION['user_role'])) {
                        ?>
			
                        <div id="faq_section">
						
                            <div id="faq_navigation">
                                <h2>Resources</h2>
									<ul>
                                        <li><a id="general_resources_link" href="admin-training.php">General Resources</a></li>
										<li><a id="faq_content_link" href="#" class="active_faq_menu_item">FAQs</a></li>
									</ul>
                            </div>
							

                            <div id="faq_main_body">
							
							<!--TABLE OF CONTENTS -->
							
                                <div id="faq_content">

                            <!--FAQ SECTIONS AND QUESTIONS -->
                                    <?php
                                        $sql = "SELECT id, name FROM faq_sections ORDER BY name";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h2>".$row["name"]."</h2>";
                                                echo "<ul>";
                                                $sectionId = $row['id'];
                                                $sql = "SELECT question, reference_name FROM faq_questions WHERE faq_section_id = $sectionId ORDER BY question";
                                                $questionResult = $conn->query($sql);
                                                if ($questionResult->num_rows > 0) {
                                                    while($row = $questionResult->fetch_assoc()) {
                                                        $reference_name = '#' . $row['reference_name'];
                                                        echo "<li><a href='$reference_name'>" . $row['question'] . "</a></li>";
                                                    }
                                                } else {
                                                    echo "<li>No Questions</li>";
                                                }
                                                echo "</ul>";
                                            }
                                        } else {
                                            echo "<h2>No Sections</h2>";
                                        }
                                    ?>

							<!--FAQ QUESTIONS AND ANSWERS -->
                                    <?php
                                        $sql = "SELECT id, name FROM faq_sections";
                                        $result = $conn->query($sql);
                                        $Parsedown = new Parsedown();

                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h2 class='faq_section_header'>".$row["name"]."<a class='faq_top_link' href='#'>top</a></h2>";
                                                $sectionId = $row['id'];
                                                $sql = "SELECT question, answer, reference_name FROM faq_questions WHERE faq_section_id = $sectionId ORDER BY question";
                                                $questionResult = $conn->query($sql);
                                                if ($questionResult->num_rows > 0) {
                                                    while($row = $questionResult->fetch_assoc()) {
                                                        $original_answer = $row['answer'];
                                                        $converted_answer = $Parsedown->text($original_answer);
                                                        $reference_name = $row['reference_name'];
                                                        echo "<h3><a name='$reference_name'></a>" . $row['question'] . "</h3>";
                                                        echo "<p>" . $converted_answer . "</p>";
                                                    }
                                                } else {
                                                    echo "<h3>No Questions</h3>";
                                                }
                                            }
                                        } else {
                                            echo "<h2 class='faq_section_header'>No Sections</h2>";
                                        }
                                        $conn->close();
                                    ?>

											
									<p>&nbsp;</p>		
                                    <p>&nbsp;</p>       
                                    <p>&nbsp;</p>
                                </div>
                            </div>

                        </div>

                        <!-- END OF FAQ -->

                        <!-- Footer -->
                        <div id="footer">
                            <p>Copyright &copy; 2002-2015 Research Dataware, LLC.&nbsp;&nbsp;&nbsp;All Rights Reserved.</p>
                        </div>
                    <!-- Close Main Content Area -->
                    </div>
                <!-- Close Site Wrapper -->
                </div>
            <!-- Close Wrapper and Folio -->
            </div>
        </div>

        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-9413511-1");
                pageTracker._trackPageview();
            } catch(err) {
            }
        </script>
    </body>
</html>