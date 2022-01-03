<?php
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "simon.chambon-andreani@hotmail.fr";
        $body = "";
        $body .="From: ".$userName. "\r\n";
        $body .="Email: ".$userEmail. "\r\n";
        $body .="Message: ".$message. "\r\n";

        mail($to,$messageSubject,$body);
        $message_sent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/icons8-mon-ordinateur-50.png">
    <title>Contact</title>
</head>
<body>
    <header>
    <?php include "menu.php"?>
    </header>

    <main class="formDisplay">
        <h2 class="titre">Contact</h2>
        <?php 
        if($message_sent):
        ?>
        <p class="thanksMessage">Thanks! We'll be in touch..!</p>
        <?php
        else:
        ?>
        <form action="?p=contact" method="POST" id="contact">
            <p>Just fill this form if you want to share your thoughts, to say hello, or anything else.</p>
            <div class="inputRow">
                <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
            </div>
            <div class="inputRow">
                <label for="email">Email</label>
            <input type="email" name="email" id="email"required>
            </div>
            <div class="inputRow">
                <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" required>
            </div>
            <div class="inputRow">
                <label for="message">Kind words here</label>
            <textarea name="message" id="message" rows="3" cols="20" name=""></textarea>
            </div>
            <div class="inputRow">
                <button type="submit" class="connectButton">Send your message</button>
            </div>
        </form>
        <?php
        endif;
        ?>
        <section class="section1">
            <a href="mailto:someone@yoursite.com"><img class="iconeSection"src="img/icons8-communication-50.png">
            <p>Any questions or feedbacks?</p></a>
        </section>
        <section class="section2">
            <a href="./?p=cv"><img class="iconeSection" src="img/icons8-cv-100.png">
            <p>Take a look at my CV!</p></a>
        </section>
        <section class="section3">
            <a href="https://www.cf2m.be" target="_blank"><img class="iconeSection" src="img/icons8-prof-100.png">
            <p>Give a visit to my school..</p></a>
        </section>
        <div class="footer1">
            <p>© Simon Chambon - 2021 <br> Rue Dethy 14, 1060 Saint-Gilles, Belgium <br> simon.chambon@gmail.com - 0486 396 480</p>
        </div>
        <div class="footer2">
            <p><a href="">Read legal notice & Credits</a><br><a href="./?p=admin">Log into Admin</a><br><a href="https://www.instagram.com/simon_andreani/" target="_blank">Have a look to my Instagram Account</a></p>
        </div>
    </main> 
    <section id="side">
        <h2 class="about">About</h2>
        <?php include "about.php"?>
    </section>
</body>
</html>