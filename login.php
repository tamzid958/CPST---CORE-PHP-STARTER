<?php
include "includes/header.php";
$userController = new UserController();
//debug mode -> echo var_dump
?>


<div class="container">
    <form action="<?php $userController->Login() ?>" method="post">
        <div class="row">
            <div class="col-sm-6 m-auto mt-4 card">
                <h1 class="text-dark text-center display-6 m-3">Enter Login Details</h1>
                <input type="email" class="form-control mt-3" name="email" placeholder="Email Address" required>
                <input type="password" class="form-control mt-3" name="password" placeholder="Password" required>
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block m-3 ">Login</button>
            </div>
        </div>
    </form>
</div>

<?php
include "includes/footer.php";
?>