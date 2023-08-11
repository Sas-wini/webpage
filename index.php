<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Successfull login!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>     
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

    <body>
        <button class="button1"><a href="Webpage03-new.html"><i class="fas fa-home"  style="color: aliceblue;"></i></a></button>
        <button class="button2" onclick="openForm()"><i class='fas fa-phone' style='font-size:36px'></i></button>
    
        <div class="section1">
            <h1> Log In </h1>
            <br>
            <p class="p1" style="margin-top: 100px;">Successfully logged in. Return back to <a href="homepage.html" style="color: rgb(6, 85, 76); font-weight: bold;" > Home </a></p>
        </div>
            
        <div class="section3" id="footer">
            <div class="media">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" style="font-size:40px";></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram" style="font-size:40px";></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin" style="font-size:40px";></i></a>
            </div>
    
            <p class="p2"><span><b>Contact No: </b></span>011-234 56 78</p>
            <p class="p2"><span><b>Email: </b></span>abc123@gmail.com</p>
            <p class="p3" id="demo"></p>
        </div> 
    
    </body>
</html>