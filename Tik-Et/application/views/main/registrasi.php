<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.3/examples/sign-in/ -->
<html lang="en">
    <head>
        <?php $this->load->view("main/_partials/headLR.php") ?>
    </head>
    <body class="text-center">
        <form action="<?php base_url('main/user/registrasi') ?>" method="post" enctype="multipart/form-data" class="form-signin" oninput='up2.setCustomValidity(up2.value != password.value ? "Passwords do not match." : "")'>
            <button class="btn draw-border logo" style="font-size: xx-large;background-color: transparent" onclick="window.location.href = '<?php echo site_url('main') ?>'">Tik-Et.</button>
            <br>
            <br>
            <h1 class="h3 mb-3 font-weight-normal">Resgistrasi</h1>
            <div class="form-group">
                <label for="Name" hidden>Name</label>
                <input type="text" id="inputName" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" placeholder="Nama" name="nama" required="" autofocus="">
                <div class="invalid-feedback">
                    <?php echo form_error('name') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="Username" hidden>Username</label>
                <input type="text" id="inputUsername" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" placeholder="Username" name="username" required="" autofocus="">
                <div class="invalid-feedback">
                    <?php echo form_error('username') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="nomor_kartu" hidden>No.Kartu Identitas</label>
                <input type="text" id="nomor_kartu" class="form-control <?php echo form_error('nomor_kartu') ? 'is-invalid':'' ?>" placeholder="Nomo kartu identitas anda" name="nomor_kartu" required="" autofocus="">
                <div class="invalid-feedback">
                    <?php echo form_error('nomor_kartu') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="Email" hidden>Email</label>
                <input type="email" id="inputEmail" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" placeholder="Email Address" name="email" required="" autofocus="">
                <div class="invalid-feedback">
                    <?php echo form_error('email') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="No HP" hidden>No HP</label>
                <input type="text" id="inputNoHP" class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>" placeholder="No HP" name="no_hp" required="" autofocus="">
                <div class="invalid-feedback">
                    <?php echo form_error('no_hp') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="Password" hidden>Password</label>
                <input type="password" id="inputPassword" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" placeholder="Password" name="password"  required="">
                <div class="invalid-feedback">
                    <?php echo form_error('password') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="name" hidden>Name*</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required="" name="up2">
            </div>
            <div class="form-group">
                <label for="Jenis Kelamin" hidden>Jenis Kelamin</label>
                <select class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>" name="jenis_kelamin" id="exampleFormControlSelect1">
                    <option selected>Jenis Kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
                <div class="invalid-feedback">
                    <?php echo form_error('jenis_kelamin') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="Level" hidden>Level</label>
                <select class="form-control <?php echo form_error('level') ? 'is-invalid':'' ?>" name="level" id="exampleFormControlSelect1">
                    <option selected>Jenis User</option>
                    <option>Penjual</option>
                    <option>Pembeli</option>
                </select>
                <div class="invalid-feedback">
                    <?php echo form_error('level') ?>
                </div>
            </div>
            <br>
            <button class="btn btn-lg btn-block btn-primary" type="submit" name="btn">Registrasi</button>
            <p class="mt-5 mb-3 text-muted">© Kelompok 4 - IMPAL IF-41-10</p>
        </form>
    </body>
</html>