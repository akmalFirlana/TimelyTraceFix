<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loginpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="img/clock.png"
                    style="border-radius: 20px; box-shadow: -5px 0px 5px rgba(31, 38, 135, 0.37), 5px 0px 5px rgba(31, 38, 135, 0.20);">
                <div class="text">
                    <b class="text-1 poppins top-0 p-5">Mencatat kehadiran siswa yang <br>
                        terlambat menjadi lebih mudah dengan LateTrack. </b>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content row justify-content-around">
                <div class="lg-form col-md-5 col-lg-5">
                    <div class="logo top-0 d-flex pt-3 mb-5">
                        <img class="logo-img" src="img/logo.svg" style="height: 40px;">
                        <h2 class="logo-title pt-1"
                            style="font-family: 'Noto Serif', serif; font-size: 24px; margin-left: 10px;">TimelyTrace
                        </h2>
                    </div>
                    <div class="upper-text">
                    <h3 class="title pt-1 mb-0" >Selamat datang kembali!</h3>
                    <p class="desc pb-2"style="font-family: 'Noto Serif', serif;">Silakan masuk untuk mengakses akun Anda.</p></div>
                    <form action="proses_login.php" method="post">
                        <div class="input-boxs">
                            <div class="wave-group">
                                <input required="" type="text" class="inpute" name="email">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">E</span>
                                    <span class="label-char" style="--index: 1">m</span>
                                    <span class="label-char" style="--index: 2">a</span>
                                    <span class="label-char" style="--index: 3">i</span>
                                    <span class="label-char" style="--index: 4">l</span>
                                </label>
                            </div>
                            <div class="wave-group2">
                                <input required="" type="password" class="inpute" name="password">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">P</span>
                                    <span class="label-char" style="--index: 1">a</span>
                                    <span class="label-char" style="--index: 2">s</span>
                                    <span class="label-char" style="--index: 3">s</span>
                                    <span class="label-char" style="--index: 4">w</span>
                                    <span class="label-char" style="--index: 5">o</span>
                                    <span class="label-char" style="--index: 6">r</span>
                                    <span class="label-char" style="--index: 7">d</span></label>
                            </div>
                            <div class="btn input-box d-block pt-4">
                                <input type="submit" class="btn_input" value="Login" name="kirim_login">
                            </div>
                            <div class="text reg-txt" style="text-align: center">Belum punya akun? <label
                                    style="color: #03A5CA; text-decoration: underline;" for="flip">Daftar
                                    disini!</label></div>
                        </div>
                    </form>
                </div>
                <div class="reg-form col-lg-5 col-md-5">
                    <div class="logo top-0 d-flex pt-3 mb-5">
                        <img class="logo-img" src="img/logo.svg" style="height: 40px;">
                        <h2 class="logo-title pt-1"
                            style="font-family: 'Noto Serif', serif; font-size: 24px; margin-left: 10px;">TimelyTrace
                        </h2>
                    </div>
                    <div class="upper-text">
                    <h3 class="title pt-1 mb-0"> Selamat datang!</h3>
                    <p class="desc pb-2" style="font-family: 'Noto Serif', serif;">Silakan daftar untuk membuat akun baru.</p></div>
                    <form action="proses_register.php" method="post">
                        <div class="input-boxs">
                            <div class="wave-group">
                                <input required="" type="text" class="inpute" name="username">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">U</span>
                                    <span class="label-char" style="--index: 1">s</span>
                                    <span class="label-char" style="--index: 2">e</span>
                                    <span class="label-char" style="--index: 3">r</span>
                                    <span class="label-char" style="--index: 4">n</span>
                                    <span class="label-char" style="--index: 5">a</span>
                                    <span class="label-char" style="--index: 6">m</span>
                                    <span class="label-char" style="--index: 7">e</span>
                                </label>
                            </div>
                            <div class="wave-group">
                                <input required="" type="text" class="inpute" name="email">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">E</span>
                                    <span class="label-char" style="--index: 1">m</span>
                                    <span class="label-char" style="--index: 2">a</span>
                                    <span class="label-char" style="--index: 3">i</span>
                                    <span class="label-char" style="--index: 4">l</span>
                                </label>
                            </div>
                            <div class="wave-group">
                                <input required="" type="password" class="inpute" name="password">
                                <span class="bar"></span>
                                <label class="labeltest">
                                    <span class="label-char" style="--index: 0">P</span>
                                    <span class="label-char" style="--index: 1">a</span>
                                    <span class="label-char" style="--index: 2">s</span>
                                    <span class="label-char" style="--index: 3">s</span>
                                    <span class="label-char" style="--index: 4">w</span>
                                    <span class="label-char" style="--index: 5">o</span>
                                    <span class="label-char" style="--index: 6">r</span>
                                    <span class="label-char" style="--index: 7">d</span>
                                </label>
                            </div>
                            <div class="btn input-box d-block">
                                <input type="submit" class="btn_input" onclick="window.location.href='landingpage.php'" value="Register" name="kirim_register">
                            </div>
                            <div class="text reg-txt" style="text-align: center">Sudah punya akun? <label
                                    style="color: #03A5CA; text-decoration: underline;" for="flip">Login</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleZoomScreen() {
            document.body.style.zoom = "80%";
        } 
    </script>

</body>

</html>