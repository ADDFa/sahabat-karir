<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAHABAT KARIR</title>
    <!-- --------------- slick slider --------------- -->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!-- --------------- css --------------- -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/landingPage.css">
</head>

<body>
    <header>
        <div class="sahabat-karir-logo">
            <img src="assets/img/icon/logo-sk.png" alt="sahabat karir">
        </div>

        <nav class="navigasi-halaman-landing">
            <a href="#">Kelas</a>
            <a href="#">Tentang Kami</a>
            <a href="#">Pelanggan</a>
        </nav>

        <form class="pencarian" action="" method="POST">
            <input type="text" placeholder="Searching">

            <svg class="icon-cari" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
            </svg>

            <button class="header__cari" type="submit" hidden></button>
        </form>

        <div class="hamburger-navigasi">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
            </svg>
        </div>
    </header>

    <section id="halaman-landing">
        <!-- --------------- jumbotron --------------- -->
        <div class="pembungkus-jumbotron">
            <div class="jumbotron-slider__arrow go-back">
                <img src="assets/img/icon/backward.png" alt="go back">
            </div>

            <div class="jumbotron jumbotron-slider">
                <div class="jumbotron-konten">
                    <img src="assets/img/landingPage/1.jpg" alt="sahabat karir">
                </div>
                <div class="jumbotron-konten">
                    <img src="assets/img/landingPage/2.jpg" alt="sahabat karir">
                </div>
                <div class="jumbotron-konten">
                    <img src="assets/img/landingPage/1.jpg" alt="sahabat karir">
                </div>
                <div class="jumbotron-konten">
                    <img src="assets/img/landingPage/2.jpg" alt="sahabat karir">
                </div>
            </div>

            <div class="jumbotron-slider__arrow go-next">
                <img src="assets/img/icon/forward.png" alt="go next">
            </div>
        </div>

        <!-- --------------- jumbotron --------------- -->
        <div class="gabung-bersama-kami">
            <div class="pembungkus-judul">
                <h1 class="judul">Ayo bergabung bersama kami!</h1>
                <h3 class="sub-judul">Pilih kelas sesuai cita-cita mu</h3>
            </div>

            <div class="pembungkus-konten__gabung-bersama-kami">
                <div class="gabung-bersama-kami__slider">
                    <div class="konten__gabung-bersama-kami">
                        <img class="konten-logo" src="assets/img/landingPage/cpns.png" alt="kelas cpns">
                        <h1>Kelas CPNS</h1>
                        <div class="lihat-kelas">
                            <p>Ayo Belajar CPNS</p>
                            <a href="" title="Kunjungi">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="gabung-bersama-kami__slider">
                    <div class="konten__gabung-bersama-kami">
                        <img class="konten-logo" src="assets/img/landingPage/polri.png" alt="kelas polri">
                        <h1>Kelas POLRI</h1>
                        <div class="lihat-kelas">
                            <p>Ayo Belajar POLRI</p>
                            <a href="" title="Kunjungi">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="gabung-bersama-kami__slider">
                    <div class="konten__gabung-bersama-kami">
                        <img class="konten-logo" src="assets/img/landingPage/ikadin.png" alt="kelas ikadin">
                        <h1>Kelas IKADIN</h1>
                        <div class="lihat-kelas">
                            <p>Ayo Belajar IKATAN DINAS</p>
                            <a href="" title="Kunjungi">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="gabung-bersama-kami__slider">
                    <div class="konten__gabung-bersama-kami">
                        <img class="konten-logo" src="assets/img/landingPage/sbmptn.png" alt="kelas sbmptn">
                        <h1>Kelas SBMPTN</h1>
                        <div class="lihat-kelas">
                            <p>Ayo Belajar SBMPTN</p>
                            <a href="" title="Kunjungi">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="gabung-bersama-kami__slider">
                    <div class="konten__gabung-bersama-kami">
                        <img class="konten-logo" src="assets/img/landingPage/pelatihan.png" alt="kelas pelatihan">
                        <h1>Kelas PELATIHAN</h1>
                        <div class="lihat-kelas">
                            <p>Ayo Ikuti PELATIHAN</p>
                            <a href="" title="Kunjungi">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------- jquery - slick - slider --------------- -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <!-- --------------- js --------------- -->
    <script src="assets/js/landingPage.js"></script>
</body>

</html>