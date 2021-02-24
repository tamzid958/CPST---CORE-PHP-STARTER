<?php
require_once "./config.inc.php";

$title = basename($_SERVER['REQUEST_URI']);
foreach ($pages_array as $page) {
    if ($page["slug"] == $title) {
        $title = $page["title"];
    }
}
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

    <link href="<?php echo $CSS_PATH ?>" type="text/css" rel="stylesheet" />
    <title><?php echo $APP_NAME . " | " . $title ?></title>
</head>

<main>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $pages_array["index"]["slug"] ?>">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $pages_array["index"]["slug"] ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $pages_array["about"]["slug"] ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body>