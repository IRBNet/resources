<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['user_role'] = 'admin';
}
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
        <script src="Scripts/admin_scripts.js" type="text/javascript"></script>
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
                            <a href="../index.html"><img src="images/nav/home.gif" alt="Home" width="45" height="29" border="0" /></a><img src="images/nav/nav-div.gif" alt="Home" width="1" height="29" border="0" class="navdiv" /><!-- Close Nav --><img src="images/resources-on.gif" width="74" height="29" /><img src="images/nav/nav-div.gif" alt="Home" width="1" height="29" border="0" class="navdiv" /><a href="http://www.irbnetresources.org/forum"><img src="images/nav/irbnet-forum.gif" alt="IRBNet Forum" width="105" height="29" border="0" longdesc="http://www.irbnetresources.org/forum" /></a>
                        </p>
                    </div>

                    <!-- Main Content Area -->
                    <div id="main_content">
                        <div id="titlecol">
                            <div class="title_content">
                                <h1>Administrator Resources and FAQs</h1>
                                <p>All materials property of IRBNet. No materials may be disclosed beyond Enrolled Member Institutions without written permission of IRBNet.</p>
                            </div>
                        </div>

                        <!-- WORK IN PROGRESS SECTION -->

                        <?php
                          if(isset($_SESSION['user_role'])) {
                        ?>
                        <div id="faq_section">
                            <div id="faq_navigation">
                                <h2>FAQ Section</h2>
                                <ul>
                                    <li><a id="faq_content_link" href="#" class="active_faq_menu_item">General FAQs</a></li>
                                    <li><a id="general_resources_link" href="#">Other Resources</a></li>
                                </ul>
                            </div>

                            <div id="faq_main_body">
                                <div id="faq_content">
                                    <h1>General IRBNet FAQs</h1>
                                    <p>&nbsp;</p>
                                    <h2>Letters and Minutes</h2>
                                    <ul>
                                        <li><a href="#letters_phone">Why do I see a phone icon in my letters?</a></li>
                                        <li><a href="#pasting_letters_minutes">How do I paste into my letters / minutes?</a></li>
                                    </ul>
                                    <h2>Alerts</h2>
                                    <ul>
                                        <li><a href="#alerts_closed_project">How do I prevent alerts from running for a closed project?</a></li>
                                        <li><a href="#alerts_not_running_properly">Why are alerts not running properly for my project?</a></li>
                                    </ul>
                                    <h2 class="faq_section_header">Letters and Minutes<a class="faq_top_link" href="#">top</a></h2>
                                    <h3><a name="letters_phone"></a>Why do I see a phone icon in my letters?</h3>
                                    <p>It sounds like you have Microsoft Lync enabled on your computer.  This is an Internet Explorer (IE) add-on that automatically adds a blue phone icon to phone numbers found in your browser.  The formatting associated with this added icon will prevent your letters from opening properly. To ensure the letters you edit can open in the future, you will need to disable this add-on.  You can do this in IE by going to Tools >> Lync add-on >> select "Disable Number Detection".</p>
                                    <h3><a name="pasting_letters_minutes"></a>How do I paste into my letters / minutes?</h3>
                                    <p>Use the Paste from Word option in the rich text editor.</p>
                                    <h2 class="faq_section_header">Alerts<a class="faq_top_link" href="#">top</a></h2>
                                    <h3><a name="alerts_closed_project"></a>How do I prevent alerts from running for a closed project?</h3>
                                    <p>The Alerts will only stop running once you remove the expiration date. As long as an expiration date is filled into the Expiration Date field on the Review and Minutes page, Alerts will run based on that date, regardless of the Action taken.</p>
                                    <h3><a name="alerts_not_running_properly"></a>Why are alerts not running properly for my project?</h3>
                                    <p>Expiration Alerts run one time per package. Thus, if all of your Alerts ran based on the previous expiration date in a package, even if that date is changed, Alerts will not run for that package based on the new expiration date. The new date will need to be reflected in a new package before Alerts will run based on the new date.</p>
                                </div>

                                <div id="general_resources">
                                    <table width="596" border="0">
                                        <tr>
                                            <td width="596" height="85" valign="top">
                                                <h2><u>IRBNet Energizers</u>: PDF documents showing for <em>general use</em> of IRBNet</h2>
                                                <ul>
                                                    <li><a href="resources/IRBNet_Training_Energizer-Submission_Coordinator.pdf">Basics: Understanding submission workflow</a></li>
                                                    <li><a href="resources/IRBNet_Training_Energizer-Submission_Coordinator_Other_Tools.pdf">Other Tools: Using the Agenda/Minutes Builders</a></li>
                                                    <li><a href="resources/IRBNet_Training_Energizer-Tracking Training_and_Credentials.pdf">Track Training: Managing institutional Training &amp; Credentials records</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="100" width="596" valign="top">
                                                <h2><u>IRBNet Notes</u>: Supplemental instruction for <em>specific actions</em> in IRBNet </h2>
                                                <ul>
                                                    <li><a href="resources/IRBNetNotes-Pre-ReviewChecklist.pdf">Pre-Review Checklist</a></li>
                                                    <li><a href="resources/IRBNetNotes-ProjectClosureManagement.pdf">Project Closure Managements</a></li>
                                                    <li><a href="resources/IRBNetNotes-Messages_&_Alerts-Coordinator.pdf">Messages &amp; Alerts</a></li>
                                                    <li><a href="resources/IRBNetNotes-PastingintoRTE.pdf">Pasting into Rich Text Editors</a></li>
                                                    <li><a href="resources/IRBNetNotes-InsertingTables.pdf">Inserting Tables into Letters/Minutes</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>

                                    <h2>IRBNet Administrator / Coordinator Forum </h2>
                                    <p>The <a href="http://www.irbnetresources.org/forum">IRBNet Forum</a> is available to IRBNet administrators and coordinators to share best practices, tips and frequently asked questions.  We encourage IRBNet committee administrators and coordinators to subscribe. Access requires IRBNet approval.</p>
                                </div>
                            </div>

                        </div>

                        <!-- END OF WORK IN PROGRESS SECTION -->

                        <?php
                          } else {
                        ?>

                        <div id="leftcol">
                            <div class="left_content">
                                <table width="596" border="0">
                                    <tr>
                                        <td width="596" height="85" valign="top">
                                            <h2><u>IRBNet Energizers</u>: PDF documents showing for <em>general use</em> of IRBNet</h2>
                                            <ul>
                                                <li><a href="resources/IRBNet_Training_Energizer-Submission_Coordinator.pdf">Basics: Understanding submission workflow</a></li>
                                                <li ><a href="resources/IRBNet_Training_Energizer-Submission_Coordinator_Other_Tools.pdf">Other Tools: Using the Agenda/Minutes Builders</a></li>
                                                <li><a href="resources/IRBNet_Training_Energizer-Tracking Training_and_Credentials.pdf">Track Training: Managing institutional Training &amp; Credentials records</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="100" width="596" valign="top">
                                            <h2><u>IRBNet Notes</u>: Supplemental instruction for <em>specific actions</em> in IRBNet </h2>
                                            <ul>
                                                <li><a href="resources/IRBNetNotes-Pre-ReviewChecklist.pdf">Pre-Review Checklist</a></li>
                                                <li><a href="resources/IRBNetNotes-ProjectClosureManagement.pdf">Project Closure Managements</a></li>
                                                <li><a href="resources/IRBNetNotes-Messages_&_Alerts-Coordinator.pdf">Messages &amp; Alerts</a></li>
                                                <li><a href="resources/IRBNetNotes-PastingintoRTE.pdf">Pasting into Rich Text Editors</a></li>
                                                <li><a href="resources/IRBNetNotes-InsertingTables.pdf">Inserting Tables into Letters/Minutes</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>

                                <h2>IRBNet Administrator / Coordinator Forum </h2>
                                <p>The <a href="http://www.irbnetresources.org/forum">IRBNet Forum</a> is available to IRBNet administrators and coordinators to share best practices, tips and frequently asked questions.  We encourage IRBNet committee administrators and coordinators to subscribe. Access requires IRBNet approval.</p>
                                <p>&nbsp;</p>


                                <p>&nbsp;</p>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div id="rightcol">
                            <div class="right_bluemodulewrap">
                                <div class="right_yellowmodule_bluebg">
                                    <div class="right_yellowmodule">
                                        <h1>Energizer Breakdown...</h1>
                                        <h2><a href="resources/IRBNet_Training_Energizer-Submission_Coordinator.pdf">Basics</a></h2>
                                        <p>Pre-review</p>
                                        <p>Preparing for your next meeting</p>
                                        <p>Sharing with your committee  </p>

                                        <h2><a href="resources/IRBNet_Training_Energizer-Submission_Coordinator_Other_Tools.pdf">Other Tools</a></h2>
                                        <p>Agenda Builder</p>
                                        <p>Minutes Builder</p>
                                        <p>Library Manager</p>

                                        <h2><a href="resources/IRBNet_Training_Energizer-Tracking Training_and_Credentials.pdf">Track Training</a></h2>
                                        <p>Review and accept T&amp;C docs</p>
                                        <p>Managing T&amp;C for entire research community</p>
                                        <p id="right_resources_access_line">&nbsp;</p>
                                    </div>
                                </div>
                            </div>

                            <div class ="right_resources_access">
                        	   <h1>Other Resources Pages ...</h1>
                                <h2><a href="training.html">Researcher Resources</a></h2>
                                <h2><a href="member-training.html">Committee Member Resources</a></h2>
                                <p id="right_resources_access_line">&nbsp;</p>
                            </div>
                        </div>
                        <?php } ?>

                        <!-- Footer -->
                        <div id="footer">
                            <p>Copyright &copy; 2002-2014 Research Dataware, LLC.&nbsp;&nbsp;&nbsp;All Rights Reserved.</p>
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