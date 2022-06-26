<div id="login-container" class="container">
    <div class="row">
        <h2 class="text-center mb-4">Admin Login</h2>
        <div class="col-12">
            <form action="index.php" method="post">
                <span><?php echo (isset($error_email)) ? $error_email : "" ?></span>
                <input type="email" name="email" class="form-control" placeholder="Your email"><br>
                <span><?php echo (isset($error_password)) ? $error_password : "" ?></span>
                <input type="password" name="password" class="form-control" placeholder="Your password"><br>
                <button type="submit" class="btn btn-primary form-control">Login</button>
            </form>
        </div>
    </div>
</div>