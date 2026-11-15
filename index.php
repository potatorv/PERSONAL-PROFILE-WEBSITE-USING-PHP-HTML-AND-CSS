<?php
 $fullName = "Ralph Vincent C. Añana";
 $birthday = "June 29, 1995";
 $hometown = "Sagbayan, Bohol";
 $dreamJob = "Web Developer";
 $motto = "To see is to believe. But in God, believe and you will see.";
 $education ="2nd Year College";
 $course ="Bachelor of Science and Technology (BSIT)";
 $email ="ralph.r95.ra@gmail.com";
 $mobileNumber ="09123456789";
 $skill1 = "Java";
 $skill2 = "PHP";
 $skill3 = "CSS";
 $skill4 = "HTML";
 $hobby1 = "Gaming";
 $hobby2 = "Singing";
 $hobby3 = "Musical Instruments";
 $hobby4 = "Tennis";
 $hobby5 = "Movies";
 $hobby6 = "Anime";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--FOR PRESENTABLE FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">

        <!--FOR MOBILE COMPATIBILITY-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="styles.css">
    </head>
<body>
    
    <!--PROFILE PICTURE-->
    <header class="image">
    <div class="profilePic">
        <img style="height: 150px; width: 150px;" src="images/profile.jpg" alt="Headshot portrait of Ralph Vincent C. Añana, a student smiling gently at the camera, seated in a simple indoor setting with soft natural light and a neutral background, warm and approachable mood">
    </div>
    <h1 style="color: white;">Student Profile</h1>
    </header>

    <!--CONTAINERS FOR EACH BIO-->
<section id="about" class="about">
    <div class="about-container">
        <div class="about-me">
            <h3 style="text-align: center;">About Me</h3>
            <p>     My name is <b><?php echo $fullName?></b>, born on <b><?php echo $birthday?></b>, in Cebu City. I grew up in Inabanga, Bohol, and currently reside in <b><?php echo $hometown?></b>. I am a second-year <b><?php echo $course?></b> student at Mater Dei College.

<br><br>I chose to pursue Information Technology because of my passion for gaming and computers, as well as the career opportunities in the IT industry. I have developed skills in Java, PHP, HTML, and CSS, along with communication and teamwork.

<br><br>Outside academics, I enjoy playing musical instruments, singing, and performing with a band. I also love watching movies and anime, playing video games, and participating in competitive tennis. I consider myself friendly, approachable, hardworking, easygoing, and open-minded. I also enjoy making people laugh and bringing positive energy to the people around me.

<br><br>As I continue my studies, I aim to improve my programming and technical skills and pursue a career that combines my interests and passions.</p>
        </div>
    </div>
</section>
<section id="bio" class="bio">
    <div class="bioContainer">
        <div class="bio1">
            <h3 style="text-align: center;">Info</h3>
        <p><strong>Name: </strong> <?php echo $fullName; ?></p>
        <p><strong>Hometown:</strong> <?php echo $hometown; ?></p>
        <p><strong>Dream IT Job: </strong> <?php echo $dreamJob; ?></p>
        <p><strong>Education: </strong><?php echo $education; ?></p>
        <p><strong>Course: </strong><?php echo $course?></p>
        
        </div>
        <div class="bio1">
            <h3 style="text-align: center;">Skills</h3>
                <ul>
                    <li><?php echo $skill1; ?></li>
                    <li><?php echo $skill2; ?></li>
                    <li><?php echo $skill3; ?></li>
                    <li><?php echo $skill4; ?></li>
                </ul>
        </div>
        <div class="bio1">
            <h3 style="text-align: center;">Hobbies and Interests</h3>
                <ul>
                    <li><?php echo $hobby1; ?></li>
                    <li><?php echo $hobby2; ?></li>
                    <li><?php echo $hobby3; ?></li>
                    <li><?php echo $hobby4; ?></li>
                    <li><?php echo $hobby5; ?></li>
                    <li><?php echo $hobby6; ?></li>
                </ul>
        </div>
    </div>
</section>

<!--SEPARATE CONTAINER FOR MODIFICATION-->
<section>
    <div class="contact-container">
        <div class="contact">
            <h3 style="text-align: center; color: white;">Contact Information</h3>
            <p><strong>Email: </strong><?php echo $email?></p>
            <p><strong>Mobile Number: </strong><?php echo $mobileNumber?></p>
        </div>
    </div>
</section>

<!--MOTTO IN LIFE-->
<blockquote style="color: white; text-align: center;">"<?php echo $motto; ?>"</blockquote>
<footer>
    <p style="color: white;">&copy; 2026 <?php echo $fullName; ?></p>
</footer>
</body>
</html>
