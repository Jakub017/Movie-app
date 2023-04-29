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
                    <a class="nav__menu-link" href="#">Popular</a>
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

    <section class="section popular">
        <div class="section__wrapper">
            <div class="section__heading">
                <h1 class="section__title">Most popular movies in 2023</h1>
                <h3 class="section__subtitle">
                    We present many films from various main categories, let's chosse and search film you like.
                </h3>
            </div>
            <div class="popular__wrapper">
                <div class="popular__genres">
                    <ul class="popular__list">
                        <li class="popular__item">
                            <button class="popular__link popular__link--active">All</button>
                        </li>
                        <li class="popular__item">
                            <button class="popular__link">Action</button>
                        </li>
                        <li class="popular__item">
                            <button class="popular__link">Fantasy</button>
                        </li>
                        <li class="popular__item">
                            <button class="popular__link">Comedy</button>
                        </li>
                        <li class="popular__item">
                            <button class="popular__link">Drama</button>
                        </li>
                        <li class="popular__item">
                            <button class="popular__link">Mystery</button>
                        </li>
                        <li class="popular__item">
                            <button class="popular__link">Romance</button>
                        </li>
                        <li class="popular__item">
                            <button class="popular__link">Horror</button>
                        </li>
                    </ul>
                </div>
                <div class="popular__movies">
                    <div class="popular__movies-container">
                        <div class="popular__movie">
                            <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt=""
                                class="popular__poster">
                            <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                            <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                                and
                                Cassie Lang explore...</p>
                        </div>
                        <div class="popular__movie">
                            <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt=""
                                class="popular__poster">
                            <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                            <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                                and
                                Cassie Lang explore...</p>
                        </div>

                        <div class="popular__movie">
                            <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt=""
                                class="popular__poster">
                            <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                            <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                                and
                                Cassie Lang explore...</p>
                        </div>
                        <div class="popular__movie">
                            <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt=""
                                class="popular__poster">
                            <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                            <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                                and
                                Cassie Lang explore...</p>
                        </div>
                        <div class="popular__movie">
                            <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt=""
                                class="popular__poster">
                            <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                            <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                                and
                                Cassie Lang explore...</p>
                        </div>
                        <div class="popular__movie">
                            <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt=""
                                class="popular__poster">
                            <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                            <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                                and
                                Cassie Lang explore...</p>
                        </div>
                        <div class="popular__movie">
                            <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt=""
                                class="popular__poster">
                            <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                            <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                                and
                                Cassie Lang explore...</p>
                        </div>
                        <div class="popular__movie">
                            <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt=""
                                class="popular__poster">
                            <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                            <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                                and
                                Cassie Lang explore...</p>
                        </div>
                    </div>

                </div>
                <div class="popular__controls">
                    <div class="popular__line"></div>
                    <div class="popular__arrows">
                        <div class="popular__arrow-wrapper popular__arrow-wrapper--next">
                            <img class="popular__arrow" src="{{asset('img/arrow-left.png')}}" alt="">
                        </div>
                        <div class="popular__arrow-wrapper popular__arrow-wrapper--prev">
                            <img class="popular__arrow" src="{{asset('img/arrow-right.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section about">
        <div class="section__wrapper">
            <div class="section__heading">
                <h1 class="section__title">About this app</h1>
                <h3 class="section__subtitle">
                    We present many films from various main categories, let's chosse and search film you like.
                </h3>
            </div>
            <div class="about__wrapper">
                <div class="about__item">
                    <div class="about__icon-wrapper">
                        <img src="{{asset('img/about/info-icon.png')}}" alt="" class="about__icon">
                    </div>
                    <div class="about__text">
                        <h3 class="about__title">Lorem Ipsum</h3>
                        <p class="about__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                            vel fugit alias aspernatur accusantium.</p>
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__icon-wrapper">
                        <img src="{{asset('img/about/favourites-icon.png')}}" alt="" class="about__icon">
                    </div>
                    <div class="about__text">
                        <h3 class="about__title">Lorem Ipsum</h3>
                        <p class="about__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                            vel fugit alias aspernatur accusantium.</p>
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__icon-wrapper">
                        <img src="{{asset('img/about/official-icon.png')}}" alt="" class="about__icon">
                    </div>
                    <div class="about__text">
                        <h3 class="about__title">Lorem Ipsum</h3>
                        <p class="about__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                            vel fugit alias aspernatur accusantium.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonials">
        <div class="section__wrapper">
            <div class="section__heading">
                <h1 class="section__title">Testimonials</h1>
                <h3 class="section__subtitle">
                    We present many films from various main categories, let's chosse and search film you like.
                </h3>
            </div>
            <div class="testimonials__items">
                <div class="testimonials__item">
                    <span class="testimonials__quote">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet natus dolorum, ratione numquam quod provident, ipsa ipsam quas fuga reiciendis
                        veniam dolorem labore ab.</span>
                    <img src="{{asset('img/testimonials/portrait-1.jpg')}}" alt="" class="testimonials__image">
                    <h3 class="testimonials__name">Lorem Ipsum</h3>
                    <span class="testimonials__position">Lorem Ipsum</span>
                </div>
                <div class="testimonials__item">
                    <span class="testimonials__quote">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet natus dolorum, ratione numquam quod provident, ipsa ipsam quas fuga reiciendis
                        veniam dolorem labore ab.</span>
                    <img src="{{asset('img/testimonials/portrait-2.jpg')}}" alt="" class="testimonials__image">
                    <h3 class="testimonials__name">Lorem Ipsum</h3>
                    <span class="testimonials__position">Lorem Ipsum</span>
                </div>
                <div class="testimonials__item">
                    <span class="testimonials__quote">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet natus dolorum, ratione numquam quod provident, ipsa ipsam quas fuga reiciendis
                        veniam dolorem labore ab.</span>
                    <img src="{{asset('img/testimonials/portrait-3.jpg')}}" alt="" class="testimonials__image">
                    <h3 class="testimonials__name">Lorem Ipsum</h3>
                    <span class="testimonials__position">Lorem Ipsum</span>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__wrapper">

            <div class="footer__column">
                <h3 class="footer__heading">Quick menu</h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">Home</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Genres</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Popular</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">About</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Testimonials</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <h3 class="footer__heading">Account</h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">My account</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Login</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Register</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Favourites</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Watch list</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <h3 class="footer__heading">Information</h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">API</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Github Repo</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Author</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <h3 class="footer__heading">Movie App</h3>
                <p class="footer__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat provident,
                    magni obcaecati aliquid iusto aperiam modi ex excepturi beatae nisi amet sunt recusandae rem fuga,
                    non similique commodi possimus dolorem.</p>
            </div>
        </div>

        <p class="footer__author">Made with <img class="footer__icon" src="{{asset('img/heart-icon.png')}}" alt=""> by
            <a class="footer__author-link" href="#">Jakub Lipiński</a></p>

    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


</html>
