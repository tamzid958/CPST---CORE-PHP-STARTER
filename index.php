<?php
include "includes/header.php";

$homeController = new HomeController();
var_dump($homeController->fetchUser());
//debug mode -> echo var_dump
?>


<div class="container mt-3">
    <div class="alert alert-primary" role="alert">
        To learn more about PHP, visit <a target='_blank' href='https://www.php.net/manual/en/index.php'>this site</a>
    </div>
    <div class="alert alert-info" role="alert">
        To Use Bootstrap follow <a target='_blank' href='https://getbootstrap.com/docs/5.0/'>this documentaiton</a>
    </div>
</div>


<?php
include "includes/footer.php";
?>