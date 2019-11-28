<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.3/examples/sign-in/ -->
<html lang="en">
    <head>
        <?php $this->load->view("main/_partials/headLR.php") ?>
    </head>
    <body class="text-center">
        <form class="form-signin" action="<?php echo site_url('main/main/loginCheck') ?>" method="post">
            <button class="btn draw-border logo" style="font-size: xx-large;background-color: transparent" onclick="window.location.href = '<?php echo site_url('main') ?>'">Tik-Et.</button>
            <br>
            <br>
            <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
            <label for="inputEmail" class="sr-only"></label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Username" required="" autofocus="" name="username">
            <label for="inputPassword" class="sr-only">password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-block btn-primary" type="submit">Log In</button>
            <p class="mt-5 mb-3 text-muted">© Tik-Et 2019</p>
        </form>
    </body>
</html>