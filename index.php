<?php
if(!isset($_GET['p'])){
    include_once "import/accueil.php";
}else{
    switch($_GET['p']){
        case "cv":  
            include_once "import/cv.php";
            break;
        case "menu":
            include_once "import/menu2.php";
            break;
        case "newsletter":  
            include_once "import/newsletter.php";
            break;
        case "tuto":
            include_once "import/tuto.php";
            break;
        case "admin":
            include_once "import/admin.php";
            break;
        case "blog":
            include_once "import/blog.php";
            break;
        case "contact":
            include_once "import/contact.php";
            break;
        case "galerie":
            include_once "import/galerie.php";
            break;
        default:    
            include_once "import/accueil.php";
    }
}