<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/icons8-mon-ordinateur-50.png">
    <title>ADMIN</title>
</head>
<body>
    <header>
    <?php include "menu.php"?>
        <h2 class="titre">ADMIN</h2>
        <h2 class="about">ABOUT</h2>
    </header>

    <main>
        <form>
            <p>This is a personal acess to my very own private space, nothing interesting for you here.</p>
            <div class="inputRow">
            <label>Email</label>
            <input type="email" name="email" required>
            </div>
            <div class="inputRow">
            <label>Password</label>
            <input type="password" name="password" minlength="8" required>
            </div>
            <div class="inputRow">
            <button type="submit" class="connectButton">Log in</button>
            <a href="">Forgot password?</a>
            </div>
        </form>
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
            <p><a href="">Read legal notice & Credits</a><br><a href="./?p=newsletter">Subscribe to my monthly Newsletter</a><br><a href="https://www.instagram.com/simon_andreani/" target="_blank">Have a look to my Instagram Account</a></p>
        </div>    
    </main> 
    <?php include "about.php"?>
</body>
</html>