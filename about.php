<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my about page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-09-2023] 
        Version:      1.0     
        Description:  This is my about page
    -->
    <link rel="stylesheet" href="css/indexabout.css"> 
    
</head>
<body>
<?php
include('includes/header.php');
?>
    <div class="aboutsectionscontainer">
        <div class="aboutsectionitem">
            <h2 class="aboutsubtitle">Introduction:</h2>
            <p class="abouttext">Hello! My name is Sarah McCrie and I am a first year Software Development and Network Engineering student at Sheridan College.</p>
            <hr>
            <h2 class="aboutsubtitle">How it Started:</h2>
            <p class="abouttext">In 2016, I graduated from Sheridan's Art Fundamentals Program before deciding to persue another career path. Then, in 2020, I graduated from Sheridan's Veterinary Technician Program, completed the <a class="contextlinks" href="https://www.aavsb.org/vtne-overview/" target="_blank">Veterinary Technician National Exam (VTNE)</a> and received my license as a <a class="contextlinks" href="https://oavt.org/about/what-is-an-rvt/" target="_blank">Registered Veterinary Technician (RVT)</a> from the <a class="contextlinks" href="https://oavt.org/about/" target="_blank">Ontario Association of Veterinary Technicians (OAVT)</a>. For 2 years, I worked full time as an RVT for a wonderful clinic before ultimately deciding to return to school for software development. I am now enrolled in school full time and am still working part time as an RVT.</p>
            <p class="abouttext">With my love for animals and my desire to continue improving my art skills, I began painting pet portraits for my friends and family. With enough practice, I am now happy to offer custom portraits to you as well! <a class="contextlinks" href="art.php">Come take a look...</a></p>
        </div>
            <div class="aboutsectionitem">
                <img class="aboutimage" src="images/other/me.png" alt="photo of creator">
                <p class="aboutimagecaption"> This is <button class="imgchangebutton"  id="showmaisie">Maisie</button>, my 150lbs St. Bernard just over 5 years ago. She wasn't my first furry-love, and she won't be my last. Her little sister, my heart-dog, <button class="imgchangebutton" id="showjuni">Juniper</button>, is a 145lbs Leonberger, and my kitty, <button class="imgchangebutton"  id="showfreddie">Freddie</button>, is a 12 month old Maine Coon.</p>
        </div>
    </div>
    <?php include('includes/footer.html'); ?>
    <script src="scripts/script.js"></script>
</body>
</html>