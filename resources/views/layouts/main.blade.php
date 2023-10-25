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

    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/80916011c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('elements.nav')

    @yield('content')

    @include('elements.footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="{{asset('js/menu.js')}}"></script>
<script>
    var swiper = new Swiper(".swiper-main", {
        slidesPerView: "auto",
        slidesPerGroup: 1,
        spaceBetween: 30,
        loop: true,
        grabCursor: true,

        navigation: {
            nextEl: ".popular__arrow-wrapper--next",
            prevEl: ".popular__arrow-wrapper--prev",
        },
    });

    var swiper1 = new Swiper(".swiper-desktop", {
        slidesPerView: "auto",
        slidesPerGroup: 1,
        spaceBetween: 10,
        loop: true,
        grabCursor: true,
    });

    var swiper2 = new Swiper(".swiper-mobile", {
        slidesPerView: "auto",
        slidesPerGroup: 1,
        spaceBetween: 10,
        loop: true,
        grabCursor: true,
    });

    var swiper3 = new Swiper(".swiper-similar", {
        slidesPerView: "auto",
        slidesPerGroup: 1,
        spaceBetween: 30,
        loop: true,
        grabCursor: true,

        navigation: {
            nextEl: ".movie-more__similar-arrow-wrapper--next",
            prevEl: ".movie-more__similar-arrow-wrapper--prev",
        },
    });
</script>

</html>