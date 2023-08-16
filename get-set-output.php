<?php
    // include the get-set-apply.php file.
    include("get-set-apply.php");

    $my_Self = new personDetails(); // object

    $my_Self->setMethodMySelf("Sabbir Hossain", "24-july-2002", "Badarganj, Rangpur", "01888-559287","mdsabbir47470@gmail.com", "https://dev-sabbir.web.app/", "khairpara, badorganj Rangpur", "Aktarer jaman bablu", "Senafa Begum", "Nadim joy", "Azmin");

    echo $my_Self->getMethodMySelf();

?>

<!-- "Sabbir Hossain", "24-july-2002", "Badarganj, Rangpur", "01888-559287", "https://dev-sabbir.web.app/", "khairpara, badorganj Rangpur", "Aktarer jaman bablu", "Senafa Begum", "Nadim joy", "Azmin" -->