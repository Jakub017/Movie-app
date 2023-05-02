@extends('layouts.main')

@section('title', 'Home')

@section('content')

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
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="popular__poster">
                        <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                        <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                            and
                            Cassie Lang explore...</p>
                    </div>
                    <div class="popular__movie">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="popular__poster">
                        <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                        <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                            and
                            Cassie Lang explore...</p>
                    </div>

                    <div class="popular__movie">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="popular__poster">
                        <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                        <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                            and
                            Cassie Lang explore...</p>
                    </div>
                    <div class="popular__movie">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="popular__poster">
                        <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                        <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                            and
                            Cassie Lang explore...</p>
                    </div>
                    <div class="popular__movie">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="popular__poster">
                        <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                        <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                            and
                            Cassie Lang explore...</p>
                    </div>
                    <div class="popular__movie">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="popular__poster">
                        <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                        <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                            and
                            Cassie Lang explore...</p>
                    </div>
                    <div class="popular__movie">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="popular__poster">
                        <h2 class="popular__title">Ant-Man and The Wasp: Quantumania</h2>
                        <p class="popular__description">Ant-Man and the Wasp along with Hank Pym and Janet Van Dyne
                            and
                            Cassie Lang explore...</p>
                    </div>
                    <div class="popular__movie">
                        <img src="{{asset('img/movies-posters/ant-man-poster.jpg')}}" alt="" class="popular__poster">
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

@endsection
