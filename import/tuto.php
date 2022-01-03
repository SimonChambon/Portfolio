<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/icons8-mon-ordinateur-50.png">
    <title>Tuto</title>
</head>
<body>
    <header>
        <?php include "menu.php"?>
    </header>
    <main id="tuto">
        <h2 class="titre">Tutorials</h2>
        <div class="infoTuto">
            <div class="ArticleTag">
                    <a href="" class="articleType">Tricks</a>
            </div>
            <div class="articleDate">Published on 11/19/2021</div>
            <div class="articleTitle">How to get email from an HTML contact form with PHP?</div>
            <div class="articleSubtitle">As I've been asked by my teachers to compare two different tutorials on a same subject, I selected this topic (from a given list). Not knowing how to resolve such a problem, and also because it's a functionality that I had to add to my 'contact' section, I thought it could be a good way to kill two birds with one stone! <br> Also, as I usually always visit the same recognized reference websites (mainly W3Schools or MDN Web Docs), I decided to take this opportunity to give a try to some of these many video tutorials available on Youtube. Once will not hurt!</div>
            <p>1st Tutorial, by Andrew :</p>
            <div class="container">
                <div class="row">
                    <div class="column left">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    </div>
                    <div class="column middle">
                    <input type="text" value="https://youtu.be/h5ghlfvU3S8">
                    </div>
                    <div class="column right">
                    <div style="float:right">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    </div>
                </div>
                <div class="content">
                <a href="https://youtu.be/h5ghlfvU3S8" target="_blank"><img src="img/followAndrew.png" alt=""></a>
                </div>
            </div>
            <p>This concise, well-structured and well-paced presentation offers a good project overview. He uses a plain, clear and comprehensible language, whilst retaining terminological precision. I didn't felt overwhelmed by excessive informations and really appreciated that!  People often start their videos telling us their whole life story, the last meal they've eaten, and several other stuffs we absolutely don't care about, but it was hopefully not the case here.</p>
            <p>Another good point is that I could follow him step by step, because he makes sure to leave enough time between the different stages of the process. Also, he operates on a split screen interface, which avoids switching endlessly back and forth from a window to another and makes things much more comfortable for the viewers. At the end of his presentation I had an operational and working code, satisfying my request and reaching its target. Simple, prompt, and efficient. Thus… I'm pleased to say : Mission accomplished!</p>
            <p>I first liked the fact that the presenter faces the camera, but it started to make me loose my concentration at some point. I'm kind of used to focus on my interlocutor when he speaks, but well… I guess I'm the one to blame. 
            I would have appreciated a quick refresh on how to make a form with HTML but once again… It's basically my problem, I should have learned my lessons better!  Lastly, I got the impression that we missed some words about website's protection from eventual hackers attacks, as it seems to me that online forms require a certain level of security against malicious user's misconduct.</p>
            <p>2nd Tutorial, by Dani Krossing :</p>
            <div class="container">
                <div class="row">
                    <div class="column left">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    </div>
                    <div class="column middle">
                    <input type="text" value="https://youtu.be/4q0gYjAVonI">
                    </div>
                    <div class="column right">
                    <div style="float:right">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    </div>
                </div>
                <div class="content">
                <a href="https://youtu.be/4q0gYjAVonI" target="_blank"><img src="img/danikrossing.png" alt=""></a>
                </div>
            </div>
            <p>At first sight, it's a well done course again, really accurate and straight to the point. However, it could have been a bit better without his kind of "cool-attitude" : constantly dropping this "You guys" interjection in between almost every sentences could have been avoided. I know that it's supposed to capture the attention of his audience, but to me, it sounds more like a disturbing verbal tic. (and furthermore : women do code too, not only "guys"…)  
            <br>Besides that, I really liked the fact that he starts form scratch, first setting up an HTML form. It was something I missed in the first tutorial. Also, he doesn't use a pre-written script (which is often the case…) but moves instead forward one small step after another, so that it's really easy to follow. </p>
            <p>I was still expecting some words about security but didn't get anything here too. I checked the comments section below the video and noticed that I was not the only one looking for some answers to these questions. Too bad, because it's unfortunaly not the only significant void...! He completely skiped an essential part of the process : users don't get any confirmation alert, absolutely no validation, once the email is sent. And it's - in my opinion - a big mistake. Every functionalities of a website must be achieved with consideration of a user-friendly perspective. We don't do this for ourselves...</p>
            <p>Lastly, I tried his code and it didn't worked for me. It is therefore obvious : my favorite, as you may have guessed, will stay the first experience I had watching Andrew! </p>
        </div>
    </main> 
    <section id="side">
        <h2 class="about">About</h2>
        <?php include "about.php"?>
    </section>
</body>
</html>