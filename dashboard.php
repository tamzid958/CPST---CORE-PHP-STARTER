<?php
include "includes/header.php";
?>


<div class="container mt-3">
    <form action="<?php Service\SignInManager::Logout() ?>" method="POST" class="d-flex">
        <p class="me-1">Successfully logged in. </p>
        <input type="submit" name="logout" class="link-danger bg-transparent" value="Logout">
    </form>
</div>


<?php
include "includes/footer.php";
?>