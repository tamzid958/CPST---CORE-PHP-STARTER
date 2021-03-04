<?php

namespace {
    session_start();
    ob_start("ob_gzhandler");

    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    $APP_NAME = "CORE PHP";
    $FAVICON = "data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAhuj8AHLa+wDXx34A67V2APfVhwDr6uoA9/X0APv8+QD37KoA9eOzAOPNhgD39/cA3JYxAEmz5wBOx/kA9+ePAPGeOwDc3NkAhuP7APGqQwD35qMA7rVWAPbihQDr1YkA9MxoAPf08AD9/v0A7u/uAO/v7gDl5OQA/KsfANbV1QD28OsA5MByAOTe1ADyn2MA9stbAPv26wD37aEA7e/vAP7+/gDum28A+fr5APbpnAD19vQA3dzbAPDJpADa0s4A4NzbAG/Z+QDomkkA4ch+AO/ioADXsnIA6enoANLW1AD36I8A7unoAP/+/wD21H0A+6ZAAPXs6AD3+PgA8ePQAPj4+AD17aMA8rRkAN6QFADp5uEA4dKNAPfmlgDn5+cA5dvPAFnL+gD18vEA19HTAN/f3QDWzc4A9eKJAPT09AD48ewA7stnAPLrogDywVoA9tyjAOrk4AD5nlkA+fTkANbU1AD7/PcA////AOe4hQD55YoA2tbXANTS0gBSxPcA/f39APfjqQD+/f0A7eahAODf3wD265sAr9zyAOTKhQD55JYA+uiTAPnjgAD29/YA9u+pAPHz8QDnxXIA3cuLAHzg+gDu69YAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHigcHTcjAAAAAAAAAAAASAYAAAAtZTAAAAAAAAAAAG4AAAAAABtWGgdYCkcXCQApRVAAbE0xEitjQDVrXTliAABOSyBZXy5bO1FcBGkQLAAAQT84TF4IW2FaJW1tahUAAABBckk6IT4mFCptZicAAAAADB9SNg1EMyIvU0JPAAAAAFU8VBFDbzQDRmQZAAAAAAAFPVckFhgLcGhnAAAAAAAAAAAAAAAADmAPcQEAAAAAAAAAAAAAAABKMgITAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP//AAD//wAAgf8AADj/AAB8AQAAEAAAAMAAAADAAAAA4AEAAOABAADgAwAA4AcAAP+DAAD/wwAA//8AAP//AAA=";

    $DEVELOPMENT_MODE = true;

    if ($DEVELOPMENT_MODE) {
        error_reporting(E_ALL);
        $DBCONFIG = array(
            "SERVER_NAME" => "localhost",
            "SERVER_USER_NAME" => "root",
            "SERVER_PASSWORD" => "",
            "DATABASE_NAME" => "greenlife"
        );
    } else {
        error_reporting(0);
    }

    $CSS_FRAMEWORKS = array(
        "bootstrap@5.0.0" => array(
            "url" => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css",
            "integrity" => "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl",
            "crossorigin" => "anonymous"
        ),
        "tailwindcss@^2" => array(
            "url" => "https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css",
            "integrity" => "",
            "crossorigin" => ""
        )
    );

    $JS_FRAMEWORKS = array(
        "jquery-3.5.1" => array(
            "url" => "https://code.jquery.com/jquery-3.5.1.min.js",
            "integrity" => "sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=",
            "crossorigin" => "anonymous"
        ),
        "bootstrap@5.0.0" => array(
            "url" => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js",
            "integrity" => "sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0",
            "crossorigin" => "anonymous"
        )
    );

    $WWWROOT_CSS = array(
        "wwwroot/css/stylesheet.css"
    );

    $WWWROOT_JS = array(
        "wwwroot/scripts/app.js"
    );
    $IMG_PATH = "wwwroot/images/";

    require "route/route.php";
    require ($DEVELOPMENT_MODE) ? "data/DBcontext.dev.php" : "data/DBcontext.pro.php";
    require "model/CoreModel.php";
    require "controller/CoreController.php";
    require "service/CoreService.php";

    $NAV_ACTIVE = $PAGE_TITLE = basename($_SERVER['REQUEST_URI']);
    foreach ($pages_array as $page) {
        if ($page["slug"] == $PAGE_TITLE) {
            $PAGE_TITLE = $page["title"];
        }
    }
}
