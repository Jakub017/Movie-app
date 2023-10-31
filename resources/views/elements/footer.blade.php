<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__column">
            <h3 class="footer__heading">Quick menu</h3>
            <ul class="footer__list">
                <li class="footer__item"><a class="footer__link">Home</a></li>
                <li class="footer__item"><a class="footer__link">Genres</a></li>
                <li class="footer__item"><a class="footer__link">Popular</a></li>
                <li class="footer__item"><a class="footer__link">About</a></li>
                <li class="footer__item"><a class="footer__link">Testimonials</a></li>
            </ul>
        </div>
        <div class="footer__column">
            <h3 class="footer__heading">Account</h3>
            <ul class="footer__list">
                @auth
                <li class="footer__item"><a href="{{route('profile.edit')}}" class="footer__link">My account</a></li>
                <li class="footer__item"><a href="{{route('favourites')}}" class="footer__link">Favourites</a></li>
                <li class="footer__item"><a href="{{route('watchlist')}}" class="footer__link">Watch list</a></li>
                @else
                <li class="footer__item"><a href="{{route('login')}}" class="footer__link">Login</a></li>
                <li class="footer__item"><a href="{{route('register')}}" class="footer__link">Register</a></li>
                @endauth
            </ul>
        </div>
        <div class="footer__column">
            <h3 class="footer__heading">Information</h3>
            <ul class="footer__list">
                <li class="footer__item"><a href="https://www.themoviedb.org/" target="_blank" class="footer__link">TMDB
                        API</a></li>
                <li class="footer__item"><a href="https://github.com/Jakub017/Movie-app" target="_blank"
                        class="footer__link">Github
                        Repo</a></li>
                <li class="footer__item"><a href="https://lipinskijakub.pl/" target="_blank"
                        class="footer__link">Author</a></li>
            </ul>
        </div>
        <div class="footer__column">
            <h3 class="footer__heading">Movie App</h3>
            <p class="footer__text">Discover the magic of cinema in one place. With our app, browse, search and delight
                in the most thrilling movies from different genres.</p>
        </div>
    </div>

    <p class="footer__author">Made with <img class="footer__icon" src="{{asset('img/heart-icon.png')}}" alt=""> by
        <a class="footer__author-link" href="https://lipinskijakub.pl/" target="_blank">Jakub Lipiński</a>
    </p>

</footer>
