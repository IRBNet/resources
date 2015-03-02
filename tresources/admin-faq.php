<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "admin_site_cake";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
                            <a href="../index.html"><img src="images/nav/home.gif" alt="Home" width="45" height="29" border="0" /></a><img src="images/nav/nav-div.gif" alt="Home" width="1" height="29" border="0" class="navdiv" /><!-- Close Nav --><a href="../tresources/admin-training.php"><img src="images/resources.gif" width="74" height="29" /></a><img src="images/nav/nav-div.gif" alt="Home" width="1" height="29" border="0" class="navdiv" /><img src="images/nav/faq-on.gif" width="36" height="29" border="0" longdesc="http://www.irbnetresources.org/tresources/admin-faq.php" />
                        </p>
                    </div>

                    <!-- Main Content Area -->
                    <div id="main_content">
                        <div id="titlecol">
                            <div class="title_content">
                                <h1>Administrator FAQs</h1>
                                <p>All materials property of IRBNet. No materials may be disclosed beyond Enrolled Member Institutions without written permission of IRBNet.</p>
                            </div>
                        </div>

						<?php
                        //if(isset($_SESSION['user_role'])) {
                        ?>
			
                        <div id="faq_section">
						
                            <div id="faq_navigation">
                                <h2>FAQ Section</h2>
									<ul>
										<li><a id="faq_content_link" href="#" class="active_faq_menu_item">General FAQs</a></li>
										<li><a id="general_resources_link" href="admin-training.php">Other Resources</a></li>
									</ul>
                            </div>
							

                            <div id="faq_main_body">
							
							<!--TABLE OF CONTENTS -->
							
                                <div id="faq_content">
                                    <h1>General IRBNet FAQs</h1>
                                    <p>&nbsp;</p>

                                    <?php
                                        $sql = "SELECT id, name FROM faq_sections";
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


                                    <!-- HARD CODED CONTENT BELOW -->

                                    <!--
									<h2>Account Access</h2>
										<ul>
											<li><a href="#accounts_forgot_password">My researcher has forgotten his or her password, and the email address registered to his or her account is no longer accessible. How can he retrieve access to his or her account? Should he or she create a new account?</a></li>
											<li><a href="#accounts_change_username">Can a user change his or her username once it has been created?</a></li>
											<li><a href="#accounts_no_confirmation_email">My researcher isn't getting his or her confirmation emails? How can I fix this?</a></li>
										</ul>
									<h2>Agendas</h2>
										<ul>
											<li><a href="#agendas_change_time">How do I change the time of an Agenda date?</a></li>
											<li><a href="#agendas_assign_second">Can I assign a second agenda date to a project?</a></li>
											<li><a href="#agendas_will_subs_move">My meeting was cancelled. Will I have to make a new Agenda with everything I made for the old meeting?</a></li>
										</ul>
									<h2>Alerts</h2>
										<ul>
											<li><a href="#alerts_closed_project">How do I prevent alerts from running for a closed project?</a></li>
											<li><a href="#alerts_not_running_properly">Why are alerts not running properly for my project?</a></li>
										</ul>
                                    <h2>Audits</h2>
										<ul>
											<li><a href="#audits_level_access">What sort of access should we grant to auditors?</a></li>
											<li><a href="#audits_cfr">Do you have a CFR Part 11 statement regarding reviewing online documents?</a></li>
										</ul>
									<h2>Emails and Notifications</h2>
										<ul>
											<li><a href="#emails_inbox_or_system">Will I receive emails to my inbox, or will I only receive them in IRBNet?</a></li>
											<li><a href="#emails_when_sent">When will I receive an email from the system?</a></li>
											<li><a href="#emails_opt_out">Can I opt out of receiving system emails from IRBNet?</a></li>
										</ul>
                                    <h2>Letters and Minutes</h2>
										<ul>
											<li><a href="#letters_phone">Why do I see a phone icon in my letters?</a></li>
											<li><a href="#pasting_letters_minutes">How do I paste into my letters / minutes?</a></li>
										</ul>
                                    <h2>Researcher Functions</h2>
										<ul>
											<li><a href="#researcher_find_previous_package">I unlocked a previous package for a researcher to edit, and they are telling me they can only see the most recent package in the project. How can they edit the previous package?</a></li>
											<li><a href="#researcher_add_affiliation">I have a committee member who is also a researcher, but cannot see the My Projects or Create New Project options. How do I get those options added to their account?</a></li>
											<li><a href="#researcher_project_transfer">Can you grant me or another researcher access to a researcher's project?</a></li>
											<li><a href="#researcher_sign_lock">Do I need to unlock a package to get a signature?</a></li>
											<li><a href="#researcher_no_forms">Why can't one of my researchers see the Forms &amp; Templates button under Other Tools?</a></li>
											<li><a href="#researcher_project_info">How do you change the PI or the title of a project?</a></li>
											<li><a href="#researcher_multisite">When a PI from our site wants to collaborate with a PI from another site and both sites have IRBNet how do we tell the PI to submit?  Is there a way the other site can see what has already been submitted so we don't need duplicative submissions?</a></li>
										</ul>
									<h2>Special Event Packages</h2>
										<ul>
											<li><a href="#sep_whatis">What is a Special Event Package?</a></li>
											<li><a href="#sep_howcreate">How do I create a Special Event Package?</a></li>
										</ul>							
									<h2>Submission Management</h2>
										<ul>
											<li><a href="#submission_can_delete">Can I delete a submission?</a></li>
										</ul>
									<h2>Training and Credentials</h2>
										<ul>
											<li><a href="#tc_rescoord_upload">Can research coordinators upload training on behalf of other researchers?</a></li>
											<li><a href="#tc_oops_cred">My researcher uploaded a credential, and then updated that credential with an entirely different one, causing a stack of papers icon to appear next to it. These are two different credentials that have the same expiration date, but the system won't let me overlap expiration dates. How can I add the expiration date for the second credential?</a></li>
										</ul>
                                    -->
									
							<!--FAQ BODY -->
                                    <?php
                                        $sql = "SELECT id, name FROM faq_sections";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h2 class='faq_section_header'>".$row["name"]."<a class='faq_top_link' href='#'>top</a></h2>";
                                                $sectionId = $row['id'];
                                                $sql = "SELECT question, answer, reference_name FROM faq_questions WHERE faq_section_id = $sectionId ORDER BY question";
                                                $questionResult = $conn->query($sql);
                                                if ($questionResult->num_rows > 0) {
                                                    while($row = $questionResult->fetch_assoc()) {
                                                        $reference_name = $row['reference_name'];
                                                        echo "<h3><a name='$reference_name'></a>" . $row['question'] . "</h3>";
                                                        echo "<p>" . $row['answer'] . "</p>";
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

                                    <!-- HARD CODED CONTENT BELOW -->

                                    <!--
                                    <h2 class="faq_section_header">Account Access<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="accounts_forgot_password"></a>My researcher has forgotten his or her password, and the email address registered to his or her account is no longer accessible. How can he retrieve access to his or her account? Should he or she create a new account?</h3>
											<p>Please send <a href="mailto:support@irbnet.org" target="_blank">support@irbnet.org</a> the name of the user and what email address he would like to use. From there, a Support Team Member will change the email address of the user and trigger a password reminder email to him or her. Your researchers should never create duplicate accounts.</p>
										<h3><a name="accounts_change_username"></a>Can a user change his or her username once it has been created?</h3>
											<p>IRBNet users are directed to contact their local coordinator in order to change their username, who will then contact the IRBNet Support team at <a href="mailto:support@irbnet.org">support@irbnet.org</a>. Please provide the individual's current username and the username to which they would like it to be changed. A Support Team member will make the change for you and will confirm when it is complete. Usernames can only be changed in certain cases, such as changing of last name.</p>
										<h3><a name="accounts_no_confirmation_email"></a>My researcher isn't getting his or her confirmation emails? How can I fix this?</h3>
											<p>Upon registration, an activation email is sent to each new users' registered email address. Occasionally this email is sent to a Spam Folder, or the registered email address is not valid. If the activation email was not received, it is usually for one of those reasons. Below are instructions on how to remedy these scenarios, re-trigger the email and activate the account.</p>
												<ol>
													<li>Check your Spam folder. If the email is not there, then follow the remainder of the steps.</li>
													<li>Add the address nobody@irbnet.org to your email contacts.</li>
													<li>Log into IRBNet and click on &quot;User Profile&quot; in the upper right-hand corner.</li>
													<li>Check to make sure your email address is correct. If it is not, correcting it and clicking &quot;Save&quot; will send another email to the now correct registered email address.</li>
													<li>If your email address is correct, next to the affiliation that is (Pending Activation) click the blue Send me an activation email link.</li>
													<li>Check the inbox for your registered email address. You should now have a new &quot;IRBNet Activation Required&quot; message.</li>
												</ol>
									<h2 class="faq_section_header">Agendas<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="agendas_change_time"></a>How do I change the time of an Agenda date?</h3>
											<p>Click on the Calendar tool. At the bottom of the tool are boxes to add hours, minutes, and am/pm. You can change the time by clicking into the boxes, or by clicking into one of the boxes and dragging left and right across the screen to increase or decrease the numbers. Then, click on the date in the calendar to close out the tool and save the time and date of the Agenda.</p>
										<h3><a name="agendas_assign_second"></a>Can I assign a second agenda date to a project?</h3>
											<p>Yes. Go to the project title. Then on the Submissions Details page and under Review Details click on Assign. Make sure to pick a date other than the one you already assigned and click Save.</p>
										<h3><a name="agendas_will_subs_move"></a>My meeting was cancelled. Will I have to make a new Agenda with everything I made for the old meeting?</h3>
											<p>No, you just need to change the date of the meeting to your new meeting date. EVERYTHING moves with it so you don't have to &quot;move&quot; any submissions.</p>
									<h2 class="faq_section_header">Alerts<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="alerts_closed_project"></a>How do I prevent alerts from running for a closed project?</h3>
											<p>The Alerts will only stop running once you remove the expiration date. As long as an expiration date is filled into the Expiration Date field on the Review and Minutes page, Alerts will run based on that date, regardless of the Action taken.</p>
										<h3><a name="alerts_not_running_properly"></a>Why are alerts not running properly for my project?</h3>
											<p>Expiration Alerts run one time per package. Therefore, if all of your Alerts ran based on the previous expiration date in a package, even if that date is changed, Alerts will not run for that package based on the new expiration date. The new date will need to be reflected in a new package before Alerts will run based on the new date.</p>
									<h2 class="faq_section_header">Audits<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="audits_level_access"></a>What sort of access should we grant to auditors?</h3>
											<p>Auditors are usually granted Committee Member access, and specific submissions are shared with them manually. Some institutions prefer to have Reviewer access granted for all past and future submissions. Ensure that the individual has registered on IRBNet prior to requesting access.</p>
										<h3><a name="audits_cfr"></a>Do you have a CFR Part 11 statement regarding reviewing online documents?</h3>
											<p>Yes. The link to the forum posting about this can be found <a href="http://www.irbnetresources.org/forum/viewtopic.php?f=11&t=136&p=233#p233" target="_blank">here</a>.</p>
									<h2 class="faq_section_header">Emails and Notifications<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="emails_inbox_or_system"></a>Will I receive emails to my inbox, or will I only receive them in IRBNet?</h3>
											<p>Notifications and messages in the system will go to <em>both</em> your &quot;Messages &amp; Alerts&quot; box and the email address that you have provided in your User Profile.</p>		
										<h3><a name="emails_when_sent"></a>When will I receive an email from the system?</h3>
											<p>As a board administrator, you will receive emails when:</p>
												<ul>
													<li>A project has been shared with you.</li>
													<li>A package has been submitted to your board.</li>
													<li>Package revisions have been marked as complete.</li>
													<li>You have been marked as a recipient of a message in Project Mail or Committee Mail.</li>
													<li>A review has been completed by a reviewer with whom you have shared a package and marked with a bell icon.</li>
												</ul>
										<h3><a name="emails_opt_out"></a>Can I opt out of receiving system emails from IRBNet?</h3>
											<p>Yes. If you would like to stop receiving emails from the system as a board administrator, then contact IRBNet support at <a href="mailto:support@irbnet.org" target="_blank">support@irbnet.org</a>. We will change your affiliation so that you no longer receive board-related automatic notifications (you will still receive Project Mail and Committee Mail). Please bear in mind, however, that this process does not apply to reviewers who have manually been granted administrator access to a particular package.</p>				
                                    <h2 class="faq_section_header">Letters and Minutes<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="letters_phone"></a>Why do I see a phone icon in my letters?</h3>
											<p>It sounds like you have Microsoft Lync enabled on your computer.  This is an Internet Explorer (IE) add-on that automatically adds a blue phone icon to phone numbers found in your browser.  The formatting associated with this added icon will prevent your letters from opening properly. To ensure the letters you edit can open in the future, you will need to disable this add-on.  You can do this in IE by going to Tools >> Lync add-on >> select "Disable Number Detection".</p>
										<h3><a name="pasting_letters_minutes"></a>How do I paste into my letters / minutes?</h3>
											<p>Use the Paste from Word option in the rich text editor.</p>
									<h2 class="faq_section_header">Researcher Functions<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="researcher_find_previous_package"></a>I unlocked a previous package for a researcher to edit, and they are telling me they can only see the most recent package in the project. How can they edit the previous package?</h3>
											<p>The researcher will need to click on the Project History button to locate the previous package. Once they click on the right package, they will be dropped into the Designer to edit and re-lock their package with revisions complete.</p>
										<h3><a name="researcher_add_affiliation"></a>I have a committee member who is also a researcher, but cannot see the My Projects or Create New Project options. How do I get those options added to their account?</h3>
											<p>Any individual can add an additional Researcher affiliation via their User Profile. After clicking on User Profile, they should click on Add an Additional Affiliation. From there, they can add and activate a Researcher affiliation.</p>
										<h3><a name="researcher_project_transfer"></a>Can you grant me or another researcher access to a researcher's project?</h3>
											<p>We can transfer all of a researcher's Full access projects to a designated administrator (not to another researcher). We do not recommend this if the researcher is still active at your institution.</p>
										<h3><a name="researcher_sign_lock"></a>Do I need to unlock a package to get a signature?</h3>
											<p>No. Packages can be signed at any time.</p>
										<h3><a name="researcher_no_forms"></a>Why can't one of my researchers see the Forms &amp; Templates button under Other Tools?</h3>
											<p>It is possible that they have registered under the incorrect research organization. They can check their affiliations via their User Profile. If they are not registered with your organization, they can use the Add an Additional Affiliation option to add and activate an affiliation to your organization.</p>
										<h3><a name="researcher_project_info"></a>How do you change the PI or the title of a project?</h3>
											<p>The PI name or title can be changed within a project's basic information on the Project Overview page. Any researcher with Full or Write access to a study can change the PI name within a package that is unlocked or has not yet been submitted by clicking on the yellow (Edit) link at the top of the page. Please note that the change will reflect in the package in which the information is edited and will carry forward into future packages. It will not, however, reflect in previous packages, unless each previous package is unlocked for the change to take place.</p>
										<h3><a name="researcher_multisite"></a>When a PI from our site wants to collaborate with a PI from another site and both sites have IRBNet how do we tell the PI to submit?  Is there a way the other site can see what has already been submitted so we don't need duplicative submissions?</h3>
											<p>In cases like this, we recommend using the "Multi-site" feature of the "Share Project" tool. The Multi-site feature allows PIs to send a complete and independent copy of this project to a Principal Investigator at another site. The local Principal Investigator will be able to obtain project documents from the lead site and may modify their copy of these documents (such as consent forms) to meet the requirements of their local Board. IRBNet automatically grants permission for the research team and reviewing committees at each participating site to view the status, documentation and details of the project at other participating sites.</p>
									<h2 class="faq_section_header">Special Event Packages<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="sep_whatis"></a>What is a Special Event Package?</h3>
											<p>If a Continuing Review is not submitted prior to the end of the approval period for a project, the project may need to be administratively closed (depending on local standard operating procedure). Administrative closures should be done using a Special Event Package, which will allow you to preserve the audit trail for the project, while also providing you with an additional review workspace - a new package - in which to record the closure information for this project.</p>
										<h3><a name="sep_howcreate"></a>How do I create a Special Event Package?</h3>
											<p>Please follow these steps:</p>
												<ol>
													<li>Begin from the IRBNet Submission Manager page (using the button on the left-hand blue toolbar).</li>
													<li>Select a project for which you would like to create a Special Events Package.</li>
													<li>Go to the Project History page (using the button on the left-hand blue toolbar).</li>
													<li>Click the &quot;Create Special Event Package&quot; button.</li>
													<li>Submit the Package to the appropriate board using the &quot;Submit this Package&quot; tool.</li>
													<li>Process the submission as you normally would, and add any relevant documents as Board Documents</li>
												</ol>
									<h2 class="faq_section_header">Submission Management<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="submission_can_delete"></a>Can I delete a submission?</h3>
											<p>There is no way for a coordinator to &quot;delete&quot; submissions via the system as they are part of the official record so the way you address this is by marking the study as &quot;Withdrawn&quot;. Then they will be &quot;hidden&quot; in your Unassigned queue default view. You can also create a dummy agenda date such as 01/01/1999 and assign them there after you mark them as &quot;Withdrawn&quot;. </p>
									<h2 class="faq_section_header">Training and Credentials<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="tc_rescoord_upload"></a>Can research coordinators upload training on behalf of other researchers?</h3>
											<p>No. Only Administrators who have access to the Track Training tool can upload credentials on behalf of other researchers.</p>
										<h3><a name="tc_oops_cred"></a>My researcher uploaded a credential, and then updated that credential with an entirely different one, causing a stack of papers icon to appear next to it. These are two different credentials that have the same expiration date, but the system won't let me overlap expiration dates. How can I add the expiration date for the second credential?</h3>
											<p>First, we recommend removing the second version of the credential from your workspace using the red X icon. Your researcher will then need to upload the second credential as an entirely new credential, instead of updating a previous credential. He or she can do this by clicking on Add a New Training &amp; Credentials Record, and then selecting None of these and clicking continue. From there, they can upload the new record and submit it. Once they have submitted it, you can add the expiration date accordingly.</p>
									</div>
                                    -->

											
											
									<!--TEMPLATE 
									
									<h2 class="faq_section_header">SECTION TOP<a class="faq_top_link" href="#">top</a></h2>
										<h3><a name="PUT_SOMETHING_HERE"></a>QUESTION</h3>
											<p>ANSWER</p>
									
									-->
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