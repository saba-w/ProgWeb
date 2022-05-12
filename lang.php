<!-- <?php

    //session_start();

    if (isset($_POST['lang']))
        $_SESSION['lang'] = $_POST['lang'];
        
    if(isset($_SESSION['lang'])){
        if($_SESSION['lang'] == 'en')
            include('./languages/en.php');
        else if($_SESSION['lang'] == 'fr')  
            include('./languages/fr.php');
        else if($_SESSION['lang'] == 'am')
            include('./languages/am.php');
    }
    else {
        include('./languages/fr.php');
    }
    //require_once "languages/" . $_SESSION['lang'] . ".php";
?> -->
<?php

//session_start();

if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "fr";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
    if ($_GET['lang'] == "fr")
        $_SESSION['lang'] = "fr";
    else if($_GET['lang'] == "am")
        $_SESSION['lang'] = "am";
    else if($_GET['lang'] == "en")
        $_SESSION['lang'] = "en";
    
}
require_once "languages/" . $_SESSION['lang'] . ".php";

?>
<!-- ?php

    //session_start();

    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "fr";
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
        if ($_GET['lang'] == "fr")
            $_SESSION['lang'] = "fr";
        else if($_GET['lang'] == "en")
            $_SESSION['lang'] = "en";
        else if($_GET['lang'] == "am")
            $_SESSION['lang'] = "am";
        
    }
    require_once "languages/" . $_SESSION['lang'] . ".php";
?> -->

