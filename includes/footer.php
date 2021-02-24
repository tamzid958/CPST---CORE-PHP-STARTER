</body>
<footer class="border-top footer text-muted">
    <div class="container">
        &copy; 2021 - <?php echo $APP_NAME ?> - <a href="#">Privacy</a>
    </div>
</footer>

<?php
foreach ($JS_FRAMEWORKS as $JS) {
    echo "<script src='" . $JS["url"] . "' integrity='" . $JS["integrity"] . "' crossorigin='" . $JS["crossorigin"] . "'></script>";
}

?>
<script src="<?php echo $JS_PATH ?>"></script>
</main>

</html>