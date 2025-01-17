<!DOCTYPE html>
<!-- saved from url=(0057)https://getbootstrap.com/docs/4.3/examples/sticky-footer/ -->
<html lang="en" class="h-100">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        
        <title>Sticky Footer Template · Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

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
        <link href="./custom/sticky-footer.css" rel="stylesheet">
        <link href="./custom/button-stylish.css" rel="stylesheet">
        <link href="./custom/button-stylish.scss" rel="stylesheet/scss" type="text/css">
        <link href="./custom/button-stylish2.css" rel="stylesheet">
        <!--<link href="./custom/button-stylish2.scss" rel="stylesheet/scss" type="text/css">-->
    </head>
    <body class="d-flex flex-column h-100 bg">
        <nav class="navbar fixed-top navbar-expand">
            <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn draw-border logo" style="font-size: x-large">Tik-Et.</button>
                    </li>
                </ul>
            </div>
            <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn draw-border">Acara</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn draw-border">Daftar</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn draw-border">namaUser</button>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="info-pembelian mx-auto">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="./img/poster1.jpg" class="img-fluid" width="100%" height="100%">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Info Tiket</h5>
                        <ul class="list-unstyled">
                            <li>Nama Acara : Lorem Ipsum</li>
                            <li>Harga : Rp 123.000,-</li>
                            <li>Tempat : Hotel Perdamaian</li>
                            <li>Tanggal : 31 November 2019</li>
                            <li>Open Gate : 19.30 WIB</li>
                        </ul>
                        <h5 class="card-title">Form Pembelian</h5>
                        <ul class="list-unstyled">
                            <li>Jumlah Tiket : <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option selected>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select></li>
                            <li>OTotal Harga : Rp 246.000,-</li>
                        </ul>
                        <button class="btn draw-border2">Beli Tiket</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
        </footer>
    </body>
</html>