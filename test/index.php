<?php
require_once "../config.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $FAVICON ?>" rel="icon" type="image/x-icon" />

    <?php
    foreach ($CSS_FRAMEWORKS as $CSS) {
        echo "<link href='" . $CSS['url'] . "' rel='stylesheet' integrity='" . $CSS['integrity'] . "' crossorigin='" . $CSS['crossorigin'] . "'>";
    }
    ?>

    <link href="../<?php echo $CSS_PATH ?>" type="text/css" rel="stylesheet" />
    <title>TEST PAGE</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
        <?php
        $homeController = new HomeController();
        $users = $homeController->createUser();
        ?>
    </div>

</body>
<footer class="border-top footer text-muted">
    <div class="container">
        <a href="../index">Home</a>
        <= Get Back To </div>
</footer>
<?php
foreach ($JS_FRAMEWORKS as $JS) {
    echo "<script src='" . $JS["url"] . "' integrity='" . $JS["integrity"] . "' crossorigin='" . $JS["crossorigin"] . "'></script>";
}

?>
<script src="../<?php echo $JS_PATH ?>"></script>

</html>