<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}">

</head>

<body data-bs-spy="scroll" data-bs-target=.navbar>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
                <span class="h3 fw-bold d-block d-lg-none">Kevin Satrio</span>
                <img src="./Assets/images/Profpic.jpg" class="d-none d-lg-block rounded-circle" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto flex-lg-column text-lg-center">
                    <a class="nav-link" href="#home">Home</a>
                    <a class="nav-link" href="#cosplay">cosplay</a>
                    <a class="nav-link" href="#cosplan">Cosplan</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#contact">Contact</a>
                    <a class="nav-link" href="#links">Links</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">
        <!-- HOME -->
        <section id="home" class="full-height px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold" data-aos="fade-down">I'M A <span class="text-brand">COLLEGE
                            STUDENT</span> WHO
                        LIKES TO <span class="text-brand">COSPLAY</span></h1>
                    <P class="lead mt-2 mb-4" data-aos="fade-down" data-aos-delay="150">I am Kevin Satrio and I like to
                        cosplay in
                        my spare time</P>
                    <div data-aos="fade-down" data-aos-delay="300">
                        <a href="#cosplay" class="btn btn-brand">Check out my cosplay</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- COSPLAY -->
        <section id="cosplay" class="full-height px-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="text-brand" data-aos="fade-up">COSPLAY</h5>
                        <h1 data-aos="fade-up">Here are some cosplays that I did</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="card-costum rounded-4 bg-base shadow-effect" data-aos="flip-left"
                            data-aos-delay="300" data-aos-duration="2000">
                            <div class="card-costum-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/Scara-costum.jpg" alt="">
                            </div>
                            <div class="card-costum-content p-4">
                                <h4>Scaramouche Variant</h4>
                                <p>This is a cosplay of a character "Scaramouche" from the game "Genshin Impact"
                                    however, I costumised
                                    the clothing to look more modern.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-costum rounded-4 bg-base shadow-effect" data-aos="flip-left"
                            data-aos-delay="600" data-aos-duration="2000">
                            <div class="card-costum-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/Scara.jpg" alt="">
                            </div>
                            <div class="card-costum-content p-4">
                                <h4>Scaramouche</h4>
                                <p>This is a cosplay of a character "Scaramouche" from the game "Genshin Impact". This
                                    is the same
                                    character as the one on the left but this time with his original costume.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-costum rounded-4 bg-base shadow-effect" data-aos="flip-left"
                            data-aos-delay="900" data-aos-duration="2000">
                            <div class="card-costum-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/Blade.JPG" alt="">
                            </div>
                            <div class="card-costum-content p-4">
                                <h4>Blade</h4>
                                <p>This is a cosplay of a character "Blade" from the game "Honkai Star Rail". He is an
                                    immortal who
                                    transforms his body into a blade, hence his name.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- COSPLAN -->
        <section id="cosplan" class="full-height px-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="text-brand" data-aos="fade-up">COSPLAN</h5>
                        <h1 data-aos="fade-up">Here are a few characters that I would like to cosplay next!</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="card-costum rounded-4 bg-base shadow-effect" data-aos="flip-left"
                            data-aos-delay="300" data-aos-duration="2000">
                            <div class="card-costum-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/Kurapika.jpeg" alt="">
                            </div>
                            <div class="card-costum-content p-4">
                                <h4>Kurapika</h4>
                                <p>This character is "Kurapika" from the anime "Hunter x Hunter". I want to cosplay him
                                    because his outfit is simple and he looks cool.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-costum rounded-4 bg-base shadow-effect" data-aos="flip-left"
                            data-aos-delay="600" data-aos-duration="2000">
                            <div class="card-costum-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/Vanitas.jpeg" alt="">
                            </div>
                            <div class="card-costum-content p-4">
                                <h4>Vanitas</h4>
                                <p>This character is "Vanitas" from the anime "Vanitas no Carte". I want to cosplay him
                                    because his aoutfit looks really good and I like his character.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-costum rounded-4 bg-base shadow-effect" data-aos="flip-left"
                            data-aos-delay="900" data-aos-duration="2000">
                            <div class="card-costum-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/Tighnari.jpg" alt="">
                            </div>
                            <div class="card-costum-content p-4">
                                <h4>Tighnari</h4>
                                <p>This character is "Tighnari" from the game "Genshin Impact". I want to cosplay him
                                    because I really like his hair. However, I want to cosplay him as a variant like I
                                    did with Scaramouche.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" class="full-height p-lg-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="text-brand" data-aos="fade-up">ABOUT</h5>
                        <h1 data-aos="fade-up">Here are a few things about me!</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="150">
                            <h4 class="p-3">PROFILE</h4>
                            <p class="p-4">HI! My name is Muhammad Kevin Checa Satrio. You can call me Vyn. I am 19
                                years old and I'm from Depok.
                                Right now, I'm studying at Institut Teknologi Sepuluh Nopember majoring in Information
                                System.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="p-3">HOBBY</h4>
                            <p class="p-4">Other than cosplaying, I also like to draw and read mangas and webtoons.
                                I also like to learn about coding in my spare time and I also run to keep my body in
                                shape!</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="450">
                            <h4 class="p-3">WHY DID I STARTED COSPLAY?</h4>
                            <p class="p-4">At first, I only like going to cosplay events without cosplaying. but one
                                time, me and my friends decided to try to cosplay as well just for fun, and turns out
                                cosplaying is really fun! Since then I started to like cosplaying.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="600">
                            <h4 class="p-3">FAVOURITES</h4>
                            <p class="p-4">My favourite drink is chocolate milk, my favourite food is brownies, my
                                favourite cosplay I ever did is scaramouche variant, and my favourite anime is Sword Art
                                Online!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section id="contact" class="full-height p-lg-5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 pb-4" data-aos="fade-up">
                        <h6 class="text-brand">CONTACT</h6>
                        <h1>Want to know more about me or cosplaying? Just ask!</h1>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                        <form onsubmit="return validateForm()" class="row g-lg-3 gy-3">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name"
                                    placeholder="Enter Your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter Your Email Adress">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" id="subject"
                                    placeholder="Enter Your Subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="" rows="7" class="form-control" id="msg" placeholder="Enter Your Messege"></textarea>
                            </div>
                            <div class="form-group col-12 d-grid">
                                <button type="submit" class="btn btn-brand">Contact me</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </section>

        {{-- Links --}}
        <section id="links" class="full-height p-lg-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="text-brand" data-aos="fade-up">Links</h5>
                        <h1 data-aos="fade-up">Previous works</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <a href="hello" target="_blank">
                            <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="150">
                                <h4 class="p-3">hello</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="js1" target="_blank">
                            <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="150">
                                <h4 class="p-3">js1</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="js2" target="_blank">
                            <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="150">
                                <h4 class="p-3">js2</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="link" target="_blank">
                            <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="150">
                                <h4 class="p-3">link</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="responsive" target="_blank">
                            <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="150">
                                <h4 class="p-3">responsive</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="style" target="_blank">
                            <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="150">
                                <h4 class="p-3">style</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="validasi" target="_blank">
                            <div class="rounded-4 bg-base shadow-effect" data-aos="fade-up" data-aos-delay="150">
                                <h4 class="p-3">validasi</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="py-5 px-lg-5">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <p>Muhammad Kevin Checa Satrio 5026221083</p>
                    </div>
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="https://www.instagram.com/vyoletln/" target="_blank"><i
                                    class="lab la-instagram"></i></a>
                            <a href="https://x.com/checa2004?t=1tPSsDvHHTYjjlNOv9xAcQ&s=09" target="_blank"><i
                                    class="lab la-twitter"></i></a>
                            <a href="https://github.com/KevinSatrio/KevinSatrio.github.io" target="_blank"><i
                                    class="lab la-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="./Assets/js/bootstrap.bundle.min.js"></script>
    <script src="./Assets/js/aos.js"></script>
    <script src="./Assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
            var name = document.getElementById("name");
            var email = document.getElementById("email");
            var msg = document.getElementById("msg");

            //nama kosong
            if (name.value == "") {
                name.focus();
                alert("Please fill out your name");
                return false;
            }

            //email kosong
            if (email.value == "") {
                email.focus();
                alert("Please fill out your email address");
                return false;
            }

            //text kosong
            if (msg.value == "") {
                msg.focus();
                alert("Please write your messege first");
                return false;
            }
        }
    </script>
</body>

</html>
