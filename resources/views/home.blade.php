<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <nav class="nav">
        <div class="nav__wrapper">
            <div class="nav__logo-wrapper">
                <img src="{{asset('img/logo-white.png')}}" alt="" class="nav__logo">
            </div>
            <ul class="nav__menu-list">
                <li class="nav__menu-item">
                    <a class="nav__menu-link" href="#">Home</a>
                </li>
                <li class="nav__menu-item">
                    <a class="nav__menu-link" href="#">Genres</a>
                </li>
                <li class="nav__menu-item">
                    <a class="nav__menu-link" href="#">About</a>
                </li>
                <li class="nav__menu-item">
                    <a class="nav__menu-link" href="#">Testimonials</a>
                </li>
            </ul>
            <ul class="nav__icons-menu">
                <li class="nav__icons-menu-item">
                    <a href="" class="nav__icons-menu-link">
                        <img src="{{asset('img/star-icon.png')}}" alt="" class="nav__icons-menu-icon">
                    </a>
                </li>
                <li class="nav__icons-menu-item">
                    <a href="" class="nav__icons-menu-link">
                        <img src="{{asset('img/search-icon.png')}}" alt="" class="nav__icons-menu-icon">
                    </a>
                </li>
                <li class="nav__icons-menu-item">
                    <a href="" class="nav__icons-menu-link">
                        <img src="{{asset('img/user-icon.png')}}" alt="" class="nav__icons-menu-icon">
                    </a>
                </li>
            </ul>
        </div>

    </nav>
    <section class="hero">

        <div class="hero__text">
            <h3 class="hero__welcome">Welcome</h3>
            <h1 class="hero__header">Your own movie library</h1>
            <p class="hero__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, dolor
                atque
                itaque aliquid dolorem
                consectetur illum aliquam.</p>
            <div class="hero__buttons">
                <a href="" class="hero__button">Latest movies</a>
                <a href="" class="hero__button hero__button--colored">Get started</a>
            </div>

        </div>

        <div class="hero__bullets">
            <span class="hero__bullet">Latest movies</span>
            <span class="hero__bullet">Official movies</span>
            <span class="hero__bullet">All in one place</span>
        </div>


    </section>
    <section class="section genres">
        <div class="section__wrapper">
            <div class="section__heading">
                <h1 class="section__title">
                    Choose the type of film you like
                </h1>
                <h3 class="section__subtitle">
                    We present many films from various main categories, let's chosse and search film you like.
                </h3>
            </div>
            <div class="genres__wrapper">
                <div class="genres__item">
                    <div class="genres__icon-wrapper">
                        <img src="{{asset('img/genres-icons/action-icon.png')}}" alt="" class="genres__icon">
                    </div>
                    <div class="genres__text">
                        <h3 class="genres__name">Action</h3>
                        <p class="genres__description">+1300 Movies</p>
                        <a href="#" class="genres__link">View more</a>
                    </div>
                </div>
                <div class="genres__item">
                    <div class="genres__icon-wrapper">
                        <img src="{{asset('img/genres-icons/fantasy-icon.png')}}" alt="" class="genres__icon">
                    </div>
                    <div class="genres__text">
                        <h3 class="genres__name">Fantasy</h3>
                        <p class="genres__description">+1300 Movies</p>
                        <a href="#" class="genres__link">View more</a>
                    </div>
                </div>
                <div class="genres__item">
                    <div class="genres__icon-wrapper">
                        <img src="{{asset('img/genres-icons/comedy-icon.png')}}" alt="" class="genres__icon">
                    </div>
                    <div class="genres__text">
                        <h3 class="genres__name">Comedy</h3>
                        <p class="genres__description">+1300 Movies</p>
                        <a href="#" class="genres__link">View more</a>
                    </div>
                </div>
                <div class="genres__item">
                    <div class="genres__icon-wrapper">
                        <img src="{{asset('img/genres-icons/drama-icon.png')}}" alt="" class="genres__icon">
                    </div>
                    <div class="genres__text">
                        <h3 class="genres__name">Drama</h3>
                        <p class="genres__description">+1300 Movies</p>
                        <a href="#" class="genres__link">View more</a>
                    </div>
                </div>
                <div class="genres__item">
                    <div class="genres__icon-wrapper">
                        <img src="{{asset('img/genres-icons/mystery-icon.png')}}" alt="" class="genres__icon">
                    </div>
                    <div class="genres__text">
                        <h3 class="genres__name">Mystery</h3>
                        <p class="genres__description">+1300 Movies</p>
                        <a href="#" class="genres__link">View more</a>
                    </div>
                </div>
                <div class="genres__item">
                    <div class="genres__icon-wrapper">
                        <img src="{{asset('img/genres-icons/romance-icon.png')}}" alt="" class="genres__icon">
                    </div>
                    <div class="genres__text">
                        <h3 class="genres__name">Romance</h3>
                        <p class="genres__description">+1300 Movies</p>
                        <a href="#" class="genres__link">View more</a>
                    </div>
                </div>
                <div class="genres__item">
                    <div class="genres__icon-wrapper">
                        <img src="{{asset('img/genres-icons/horror-icon.png')}}" alt="" class="genres__icon">
                    </div>
                    <div class="genres__text">
                        <h3 class="genres__name">Horror</h3>
                        <p class="genres__description">+1300 Movies</p>
                        <a href="#" class="genres__link">View more</a>
                    </div>
                </div>
                <div class="genres__item">
                    <div class="genres__icon-wrapper">
                        <img src="{{asset('img/genres-icons/thriller-icon.png')}}" alt="" class="genres__icon">
                    </div>
                    <div class="genres__text">
                        <h3 class="genres__name">Thriller</h3>
                        <p class="genres__description">+1300 Movies</p>
                        <a href="#" class="genres__link">View more</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
