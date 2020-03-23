<?php
    include "display_sql.php"; //include functions for classes display
?>

<html> <!-- ALT + B to run in an oepn browser-->
<script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("user_q8qaHpID3MDMpXziPTIjL");
   })();
</script>
    <head>
        <title> Shahaf Dan </title>
        <link rel="shortcut icon" href="Logos/s-logo.jpg"/>

        <!-- Bootstrap for CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "shahaf.css">

        <!-- Bootstrap for JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Bootstrap for JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- Bootstrap for CSS Icon -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- API's website: https://funnel.io/data-sources -->
    </head>

    <body class = "body">
        
        <div class = "header">
        <h2 class = "nameText"> Shahaf Dan </h2>
        <!-- <p> <strong> Page built by Shahaf Dan </strong> </p> -->
        <h4> »    Web and software full stack developer from the Bay Area<br><br> »    Computer science 2nd year student at Las Positas College 
        <br><br> »    A passionate programmer who always loves to learn more<br> and expands the borders of his knowledge
        <br><br> »    I always strive to thrive, desire to learn more and enrich my knowledge, while <br>using my skills to contribute to my community and surroundings</h4>
        
       
        <button type = "button" class = "btn btn-outline-secondary" onclick = "open_view_resume()">View My Resume (JPG)</button>

            &nbsp; &nbsp; &nbsp;

        <button type = "button" class = "btn btn-outline-danger" onclick = "open_dnld_resume()" download = "docs/ShahafDan_Resume.pdf">Download My Resume (PDF)</button>
       <br><br>
       <div class = "imgContainer">
            <img id = "imgBanner" class = "imgBanner shadow-lg p-3" src = "" alt = "" />
        </div>
        <br>
        
        </div>
        
        <!-- BACKGROUND Collapse-->
        <button type = "button" class = " btn btn-primary" data-toggle = "collapse" data-target = "#history_div"> Experience </button>
        <div id = "history_div" class = "collapse info_div">
            <br>
            <div class = "container">
                <div class = "row">
                    <div class = "col-md-offset-2 col-md-8 col-sm-12">
                        <div class = "main-timeline">
                            <div class = "timeline">
                                <a hred = "#" class = "timeline-content">
                                    <div class = "timeline-icon">
                                        <i class = "fa fa-code"></i>
                                    </div>
                                    <div class = "inner-content">
                                        <h3 class = "title"> Full Stack Web Developer Intern </h3>
                                        <p> <strong> Sep. 2018 - Apr. 2019  |  Amber Systems Technologies  |  Pleasanton, CA </strong> </p> 
                                        <p class = "description">
                                             » Developed Front End Templates using HTML, CSS, JavaScript, Bootstrap API and jQuery
                                             » Constructed Back End Programs in PHP along with the Front End Applications
                                             » Managed and Manipulated data from clients using PostgreSQL databases and AJAX database connectivity.
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- ---------------- -->
                            <div class = "timeline">
                                    <a hred = "#" class = "timeline-content">
                                        <div class = "timeline-icon">
                                            <i class = "fa fa-database"></i>
                                        </div>
                                        <div class = "inner-content">
                                            <h3 class = "title"> SQL Server Database Administrator </h3>
                                            <p> <strong> Jun. 2019 - Aug. 2019  |  FindingGenius Startup   |  San Ramon, CA </strong> </p> 
                                            <p class = "description">
                                                 » Used wpDatatables wordpress plugin to connect to a MySQL database
                                                 » Manipulated large amounts of information and data in SQL 
                                                 » Constructed Bakcend Programs in Java, using JavaServer Pages (JSP) 
                                                 » Connected Java JSP code to SQL databases using JDBC connectivity.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <br><br>
        <!-- EDUCATION Collapse-->
        <button type = "button" class = " btn btn-primary" data-toggle = "collapse" data-target = "#education_div"> Education </button>
        <div id = "education_div" class = "collapse info_div">
            <div class = "lpc edu" id = "lpc">
                <h3>Las Positas Class</h3>
                <p> <strong> Livermore, CA | Jun. 2018  -  September 2020 </strong> </p>
                
                <h4> <u>GPA:</u> 3.89 </h4>
                    <button type = "button" class = "btn btn-info" id = "activities-btn" data-toggle="collapse" data-target="#activities-div"> Activities </button>
                    <div id = "activities-div" class = " collapse activities_div"> <!-- ALIGN TO THE LEFT-->
                        <li>
                            <!-- Chess Club -->
                            <ul class = "pull-left">
                                <p class = "act-title">&nbsp;&nbsp;&nbsp;<strong>Chess Club   </strong>|   Founder ⇨ President</p> <!--13-->
                                <p class = "act-date"> Novemebr 2018 - June 2020 </p><!--10-->
                                
                                <p class = "act-desc"> The chess club was founded in November 2018 by Shahaf Dan and Sayed Hamid Mirzahi
                                On a weekly basis, 30 registered member gather to play chess, learn new strategies, study the history of the game,
                                and enjoy a safe space where they can take a break from the busy academic routine
                                </p>
                            </ul> <br><hr>
                            <!-- Alpha Gamma Sigma-->
                            <ul class = "pull-left">
                                <p class = "act-title">&nbsp;&nbsp;&nbsp;<strong> Alpha Gamma Sigma (ΑΓΣ) - Honors Society   </strong>|   Member ⇨ President</p> <!--13-->
                                <p class = "act-date"> February 2019 - September 2020 </p><!--10-->
                                <p class = "act-desc"> AGS is an intercollegiate honors society for leader, overachiever students with emphasis on community service 
                                As the Las Positas College Sigma Theta (ΣΘ) is considered one of the most active and accomplished chapters in the state of California,
                                it is my duty and pleasure to serve as the president, chair the biweekly meetings, oversee all community service by all members, 
                                conduct events and fundraisers, and create an environment where overachievr students who are interested in contributing further to 
                                their communities and the student body, are given and granted a various of opporutnities. </p>
                            </ul> <br> <hr>
                            <!-- Student Government -->
                            <ul class = "pull-left">
                                <p class = "act-title">&nbsp;&nbsp;&nbsp;<strong> Las Positas College Student Government   </strong>|   Senator ⇨ Director of Events</p> <!-- 13 -->
                                <p class = "act-date"> Novemebr 2018 - August 2020 </p><!-- 10 -->
                                <p class = "act-desc"> <!-- 12 -->
                                    The LPCSG is the most effective student organizatio on campus, creating many events, attending conference, 
                                and representing the student body of Las Positas. As the director of events, it is my mission to phase the campus cultural identity to
                                 be more student friendly, get rid of the negative stigma that student life in communit colleges are not productive, and create events 
                                that will strngethen and embrace the relationships between the student body and the campus. </p>
                            </ul> <br> <hr>
                            <!-- Mu Alpha Theta: Math Honors Society -->
                            <ul class = "pull-left">
                                <p class = "act-title">&nbsp;&nbsp;&nbsp;<strong> Mu Alpha Theta (ΜΑΘ) - Math Honors Society   </strong>|   Member</p> <!--13-->
                                <p class = "act-date"> September 2018 - June 2020 </p><!--10-->
                                <p class = "act-desc"> 
                                    Mu Alpha Theta is the Math Honors Society on Las Positas College, providing student with extracurricular math activities,
                                     club meetings, and the AMATYC Exam per academic term. As an outstanding member, I have places in the top 5 students in the AMATYC exam,
                                     in both academic years 2018 - 2019, and 2019 - 2020.
                                </p>
                            </ul><br><hr>
                            <!-- Committees -->
                            <ul class = "pull-left">
                                <p class = "act-title">&nbsp;&nbsp;&nbsp;<strong> Committees, Involvement and Representation </strong> </p> <!--13-->
                                <p class = "act-desc"> 
                                    » <u>ASACC Representative: </u> Represented Las Positas in the American Student Association tow years continuasly (2019, 2020) in Washington D.C. &nbsp; Met with congresspeople and brought to their attention concerns and issues from community college students <br>
                                    » <u>Technology Committee: </u> Represented the student body on the District Technology Coordination Committee, pushing for technological solutions that will benefit the student body <br>
                                    » <u>Student Events Committee: </u> Chaired the student events committee as the student elected Director of Events <br>
                                    » <u>Student Achievment and Equity Committee: </u> Served as the representative on the SAE Committee, pushing for increased student equity and voicing student concerns <br>
                                </p>
                            </ul> <br><hr>
                            <!-- Honors Projects -->
                            <ul class = "pull-left">
                            
                                <p class = "act-title">&nbsp;&nbsp;&nbsp;<strong> Honors Projects, Research, and Papers</strong> </p> <!--13-->
                                <p class = "act-desc"> 
                                    As part of the honors program, by graduation I will have completed 6 honors porjects in various subjects and classes, and achieving the honors stamp on my diploma.
                                    As part of the program, I have conducted research in Physics, Mathematics, and Computer Science.
                                </p>
                                <!-- TODO : Add Asbtracts later-->
                            </ul><br><hr>
                            <!-- Dive Team -->
                            <ul >
                                <p class = "act-title">&nbsp;&nbsp;&nbsp;<strong> Student Athlete: Swim & Dive Team   </strong>|   Diver ⇨ Team Leader </p> <!--13-->
                                <p class = "act-date"> January 2019 - May 2019 </p><!--10-->
                                <p class = "act-desc"> As a student athlete, I have represnted Las Positas College in conferences and meets as a diver.</p>
                            </ul><br>
                        </li>
                    </div>
                    <br><br>
                    <button type = "button" class = "btn btn-info" id = "classes-btn" data-toggle="collapse" data-target="#classes-div"> Classes </button>
                    <div id = "classes-div" class = "collapse classes_div">
                        <h4> Organize By: </h4>
                        <form method = "post" action = "display_sql.php"> 
                            <input type = "hidden" name = "message" value = "dispByName">
                            <button class = "btn btn-secondary smallerBtn" id = "classByName" onclick = "orderByName()"><strong> Name </strong></button> &nbsp; &nbsp; 
                        </form>
                        <form method = "post" action = "display_sql.php"> 
                            <input type = "hidden" name = "message" value = "dispBySubject">
                            <button class = "btn btn-secondary smallerBtn" id = "classBySubject" onclick = "orderBySubject()"> <strong> Subject </strong> </button> &nbsp; &nbsp; 
                        </form>
                        <form method = "post" action = "display_sql.php">
                            <input type = "hidden" name = "message" value = "dispByGrade">
                            <button class = "btn btn-secondary smallerBtn" id = "classByGrade" onclick = "orderByGrade()"> <strong> Grade </strong> </button> 
                        </form>
                        <div class ="projects-div">
                        <br><br><br><br>
                        <h4><u>Projects, Researches, Papers </u></h4>
                        <br>
                        <div class = "honorsProjectsClass" id = "honorsProjectsId">
                            <table class = "projectTable table">
                                <tr class = "tableRow">
                                    <td><p> <strong><u>Physics</u>: Electricity andg Magnetism </strong></p> <a href="docs/Phy1c_abs.pdf">Solar Panels: Efficiency, Mechanism, and Applications</a></td> 
                                    <td><p> <strong><u>Computer Science</u>: Java Development </strong></p> <a href="docs/csci19a_abs.pdf"> Java Web Development and SQL</a></td>
                                </tr>
                                <!-- <br><br><hr> -->
                                <tr class = "tableRow">
                                    <td> <p> <strong><u>Computer Science</u>: Data Structures </strong></p> <a href="docs/DataStruc_Abs.pdf">Dictionary Tree Structure</a> <br></td>
                                    <td> <p> <strong><u>Math</u>: Discrete Math Structures </strong></p> <a href="docs/cs17_abs.pdf">Hash Tables: Efficiency, Mechanism, and Applications</a> </td>
                                </tr>
                                <!-- <br><br><hr> -->
                                <tr class = "tableRow">
                                    <td> <p> <strong><u>Computer Science</u>: Database Programming </strong><p> <a href="docs/cs45_abs.pdf">Web Development: PHP, PDO, and Dynamic Front End</a> </td>
                                    <td> <p> <strong><u>Math</u>: Differential Equations </strong></p> <a href="docs/LinkNotAvail.pdf">Fourier's theorem and Transformation</a> </td>
                                </tr>
                                <!-- <br><br><hr> -->
                                <tr class = "tableRow">
                                    <td> <p> <strong><u>Computer Science</u>: Capstone Project </strong></p> <a href="docs/LinkNotAvail.pdf">The Market's Platform</a></td>
                                    <td><p> <strong><u>Physics</u>: Quantum Mechanics </strong></p> <a href="docs/LinkNotAvail.pdf">Meissner's Effect and Magentic Elevation</a></td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </div>
                    
                    <!-- REDESIGNING FROM NOW ^^^^ -->
                    <!-- MAKE INTO DIVS: Computer Science, Math, Physics, Others -->
                     <!-- MAKE INTO COLLAPSABLE DIVS -->
                </p>
            </div>
            <br><br>
            <div class = "ghs edu" id = "ghs">
                <h3>Granada High Shcool</h3>
                <p> <strong> Livermore, CA | Aug. 2015  -  Jun. 2018 </strong> </p>
                <p>
                    Graduated with a GPA of 4.2, as an honors student.
                    Focused on studying computer science and computational physics.
                </p>
            </div>
            <br><br>
            <div class = "MOR edu" id = "MOR">
                <h3>MOR Middle School</h3>
                <p> <strong> Modi'in, Israel | Aug. 2012  -  Jun. 2015 </strong> </p>
                <p>
                    Graduated the AMAT honors program with an average grade of 97% three years in a row. <br>
                    Was destined to enter a software engineering program of the Israeli military.
                </p>
            </div>
            
            
            
        </div>

        <br><br>
        <!-- EXEPRIENCE & KNOWLEDGE Collapse-->
        <button type = "button" class = " btn btn-primary" data-toggle = "collapse" data-target = "#knowledge_div"> Technical Skills </button>
        <div id = "knowledge_div" class = "collapse info_div">
            <!-- <div class = "exp" id = "exp_div">
                <h2 class = "title"> <u>Experience</u> </h2>
                
            </div> -->
            <!-- TODO: Add linkedin logo if passed the linkedin test-->
            <div class = "kwnld" id = "knd_div">
                <h2 class = "title"><u> Technical Knowledge & Skills </u></h2>
                <div class = "front-end">
                    <h4> Front End </h4>
                    <ul class = "list-group">
                        <li class = "list-group-item"><img src = "Logos/html-logo.png" class = "logo-img">   <img src = "Logos/css-logo.png" class = "logo-img"> <img src = "Logos/javascript-logo.svg" class = "logo-img"></li>
                        <li class = "list-group-item"><img src = "Logos/react-logo.png" class = "logo-img"></li>
                        <li class = "list-group-item"><img src = "Logos/bootstrap-logo.png" class = "logo-img"> &nbsp;&nbsp; &nbsp; &nbsp; <img src = "Logos/jquery-logo.png" class = "logo-img"></li>
                        <li class = "list-group-item"><img src = "Logos/swift-logo.png" class = "logo-img"></li>
                        <li class = "list-group-item"><img src = "Logos/angularjs-logo.svg" class = "logo-img"></li>
                    </ul>
                </div>
                <div class = "back-end">
                        <h4> Back End </h4>
                        <ul class = "list-group">
                            <li class = "list-group-item"><img src = "Logos/java-logo.png" class = "logo-img">&nbsp; &nbsp; &nbsp; &nbsp;<img src = "Logos/jsp-logo.png" class = "logo-img"></li>
                            <li class = "list-group-item"><img src = "Logos/nodejs-logo.png" class = "logo-img"></li>
                            <li class = "list-group-item"><img src = "Logos/c++-logo.png" class = "logo-img"></li>
                            <li class = "list-group-item"><img src = "Logos/php-logo.png" class = "logo-img"></li>
                            <li class = "list-group-item"><img src = "Logos/mysql-logo.png" class = "logo-img"></li>
                        </ul>
                    </div>
            </div>

            <br><br>
            <div class = "other-exps">
                <h4> Other Experties </h4>
                <ul class = "list-group">
                    <li class = "list-group-item"><img src = "Logos/word-logo.svg" class = "logo-img"> &nbsp; &nbsp; <img src = "Logos/powerpoint-logo.svg" class = "logo-img"> &nbsp; &nbsp; <img src = "Logos/excel-logo.svg" class = "logo-img"></li> 
                    <li class = "list-group-item"><img src = "Logos/linux-logo.jpg" class = "logo-img"> &nbsp; &nbsp; <img src = "Logos/ubuntu-logo.png" class = "logo-img"> &nbsp; &nbsp; <img src = "Logos/vmware-logo.webp" class = "logo-img"></li>
                    <li class = "list-group-item"><img src = "Logos/wordpress-logo.png" class = "logo-img"></li>
                </ul>
            </div>


            <!-- INSERTION ON TIMELAPSE VIDEO GALLERY -->
            <iframe id = "vid" class = "embed-responsive-item vid" src = "shahaf-pics/vid-1.mp4" allowfullscreen></iframe>
             
       <!--35836cdf-de4a-48ab-9ec2-881ef4b0c909-->
        </div>
        <br><br>
        <!-- CONTACT ME Collapse-->
        <button type = "button" class = " btn btn-warning" data-toggle = "collapse" data-target = "#contact_div"> Contact Me </button>
        <div id = "contact_div" class = "collapse info_div">
            <h4><strong><u> Email:</u></strong> &nbsp;  dan.shachaf@gmail.com <br><br>
            <strong><u>Mobile:</u></strong> &nbsp;  (925) 791 - 1544</h4>
            <h4><strong><u> LinkedIn:</u></strong> &nbsp; &nbsp; <button type = "button" class = "btn LinkedIn-btn" onclick = "open_LinkedIn()"><img src = "Logos/linkedIn-logo.png" class = "LinkedIn-img"></button> &nbsp; &nbsp; &nbsp; &nbsp;
                <strong><u> GitHub:</u></strong> &nbsp; &nbsp; <button type = "button" class = "btn LinkedIn-btn" onclick = "open_GitHub()"><img src = "Logos/GitHub-logo.svg" class = "LinkedIn-img"></button><br></h4>
            <!-- <h4> <strong>Shoot me an Email! </strong> <button type = "button" class = "btn gmail-btn" data-toggle = "collapse" data-target = "#email_div" ><img src = "Logos/gmail-logo.png" class = "gmail-img"></button> </h4> -->
                <br>
            <!-- Open this div when email img is clicked: COMMENTED OUT FOR NOW, FINISH LATER -->

            <!--
            <div id = "email_div" class = "collapse email-div">
                From: &nbsp; &nbsp; <input type = "text" id = "from_email" placeholder = " Your Email Address" class = "email-sender-input"> &nbsp; &nbsp; &nbsp; &nbsp;
                <input type = "text" class = "subject" id = "subjectIntro" placeholder="Message Subject"><br><br>
                <textarea class = "email-body form-control" id = "email-body" rows = "7"></textarea>
                <br>
                <button type = "button" class = "btn btn-outline-danger send" id = "send-email-btn" onclick = "sendEmail()"> Send this email!</button>
            </div>
        -->
        </div>
        <br><br><br>
        
    
        <!-- JavaScript code here -->
        <script src = "shahaf.js" type = "text/JavaScript"></script>
        <script type = "text/JavaScript">

            var picPaths = ['shahaf-pics/off-pic-1.jpeg','shahaf-pics/off-pic-3.jpeg','shahaf-pics/pic-4.jpeg','shahaf-pics/off-pic-2.jpeg','shahaf-pics/pic-5.jpeg', 'shahaf-pics/IMG_3878.jpeg'];            
            var curPic = -1;

            var movPaths = ['shahaf-pics/mov-1.MOV','shahaf-pics/mov-2.MOV'];
            
            //preload the images and movies for smooth animation;
            var img0 = new Array();

            for(var i = 0; i < picPaths.length; i++)
            {
                img0[i] = new Image();
                img0[i].src = picPaths[i];
                
            }

           
            function swapImage()
            {
                curPic = (++curPic > picPaths.length - 1)? 0: curPic;
                imgCont.src = img0[curPic].src;
                setTimeout(swapImage, 3500);
            }

            window.onload = function()
            {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
            function open_view_resume()
            {
                window.open("docs/ShahafDan_Resume.jpg");
            }
            function open_dnld_resume()
            {
                window.open("docs/ShahafDan_Resume.pdf");
            }
            function open_LinkedIn()
            {
                window.open("https://www.linkedin.com/in/shahaf-dan-66812b180/");
            }
            function open_GitHub()
            {
                window.open("https://github.com/ShahafDan25");
            }
        </script>

    <!-- JavaScript code for smtp.js API for sending the email -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script type = "text/javascript">
        function sendEmail()
        {
             
            Email.send({
                SecureToken:'5659d736-6bc5-4d73-a2ee-a0835e344417',
                To: "dan.shachaf@gmail.com",
                //From: document.getElementById("from_email").value,
                //Subject: document.getElementById("subjectIntro").value,
                //Body: document.getElementById("email-body").value
                From: "dan.shachaf@gmail.com",
                Subject: "This is a test",
                Body: "Hello World Email Test"
            }).then(
                message => alert("Message Sent Succesfully, Thank You!")
            );
        }
        </script>

    </body>
</html>

    