<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.3/examples/sign-in/ -->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Signin Template · Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

        <!-- Bootstrap core CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="./custom/signin.css" rel="stylesheet">
        <link href="./custom/button-stylish2.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin" oninput='up2.setCustomValidity(up2.value != up.value ? "Passwords do not match." : "")'>
            <button class="btn draw-border logo" style="font-size: xx-large;background-color: transparent">Tik-Et.</button>
            <br>
            <br>
            <h1 class="h3 mb-3 font-weight-normal">Resgistrasi</h1>
            <input type="text" id="inputName" class="form-control" placeholder="Nama" required="" autofocus="">
            <input type="text" id="inputUsername" class="form-control" placeholder="Username" required="" autofocus="">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" required="" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="up">
            <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required="" name="up2">
            <select class="form-control" id="exampleFormControlSelect1">
                <option selected>Jenis Kelamin</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <br>
            <button class="btn btn-lg btn-block btn-primary" type="submit">Registrasi</button>
            <p class="mt-5 mb-3 text-muted">© Kelompok 4 - IMPAL IF-41-10</p>
        </form>
    </body>
</html>