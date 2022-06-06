<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FA 6
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" /> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="frontend2/style/nav-bar.css">
    <title>Bakti Millenial</title>
    <style>
        #navbarSupportedContent {
            display: none;
        }

        #navbarSupportedContent.active {
            display: block;
        }
    </style>

<body>
    <!-- Navbar content -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow p-3 w-auto navigasi-container" style="background-color: #96bb7c; border-radius: 0px 0px 40px 40px; width: 100px; z-index: 9;height:65px;filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.15));">
        <div class="container-fluid">
            <!-- <button class="navbar-toggler" id="nav-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
            <!-- <span class="navbar-toggler-icon"></span> -->
            <div class="mobile-bar">
                <span class="mobile-bar1 mobile-bar-all"></span>
                <span class="mobile-bar2 mobile-bar-all"></span>
                <span class="mobile-bar3 mobile-bar-all"></span>
            </div>
            <!-- </button> -->
            <a class="navbar-brand ms-5" href="<?= base_url('/'); ?>">
                <img src="frontend2/images/logomm.svg" style="width: 45px; height: 45px;">
            </a>
            <div class="menu-nav collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-3 fs-5">
                    <li class="me-5">
                        <!-- <a id="home" class="nav-link active" id="nav-btn" aria-current="page" href="Chome">Home</a> -->
                        <!-- <a id="home" class="nav-link < ($this->uri->segment(1)==='/')?'active':''?>" id="nav-btn" aria-current="page" href="<?= base_url('/'); ?>">Home</a> -->
                        <a id="home" class="nav-link active" style="color:#f9f9f9" id="nav-btn" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                    </li>
                    <li class="me-5">
                        <a id="galery" class="nav-link" style="color:#f9f9f9" href="<?= base_url('artikel'); ?>">Blog</a>
                    </li>
                    <li class="nav-item dropdown me-5">
                        <a class="nav-link dropdown-toggle" style="color:#f9f9f9" href="<?= base_url('jalurfully'); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Jalur</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #96BB7C;top:3.5rem;">
                            <li><a class="dropdown-item" href="<?= base_url('jalurfully'); ?>"><i class="fas fa-caret-right"></i> Fully Funded</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('jalurspecial'); ?>"><i class="fas fa-caret-right"></i> Special Funded</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('jalurself'); ?>"><i class="fas fa-caret-right"></i> Self Funded</a></li>
                        </ul>
                    </li>
                    <li class="me-5">
                        <a id="galery" style="color:#f9f9f9" class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
                    </li>
                    <li>
                        <!-- make href a jgn button href -->
                        <!-- <button type="button" class="btn btn-light h-1 mt-1 ms-auto ms-lg-5" href="#" style="background: #d6efc7; border-radius: 40px; width: 122px;">Sign</button> -->
                        <button type="button" class="btn btn-light h-1 mt-1 ms-auto ms-lg-5" href="#" style="background: #d6efc7; border-radius: 40px; width: 122px;"><a id="admin" class="nav-link" href="<?= base_url('login'); ?>" style="width: 100%;height: 20px;display: flex;justify-content: center;align-items: center;position:relative;top:0;">Sign Up</a></button>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
        </div>
    </nav>
    <!-- end navbar contect -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script>
        // $(document).ready(function() {
        //     $('.navbar-toggler').click(function() {
        //         $('#navbarSupportedContent').toggleClass('active');
        //     });
        // });

        $(document).ready(function() {
            $('.mobile-bar').click(function() {
                $('#navbarSupportedContent').toggleClass('active');
                $('.mobile-bar1').toggleClass('active');
                $('.mobile-bar2').toggleClass('active');
                $('.mobile-bar3').toggleClass('active');
                // $('.a').toggleClass('active');
            });
        });

        // active
        $(".navbar-nav .nav-link").on("click", function() {
            $(".navbar-nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });

        // var home = document.getElementById("home");
        // home.classList.add('active');
        // home.setAttribute("aria-current", "page");

        // var galery = document.getElementById("galery");
        // galery.classList.remove('active');
        // galery.setAttribute("aria-current", "none");

        // var program = document.getElementById("program");
        // program.classList.remove('active');
        // program.setAttribute("aria-current", "none");

        // // Gak ada id berkaitan dengan daftar
        // var daftar = document.getElementById("daftar");
        // daftar.classList.remove('active');
        // daftar.setAttribute("aria-current", "none");
    </script>
</body>

</html>