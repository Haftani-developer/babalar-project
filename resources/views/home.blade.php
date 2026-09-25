<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>قالب فروشگاهی کارین</title>
    <link rel="stylesheet" href="{{asset('styles/app.css')}}">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- link -->
    <link rel="stylesheet" href="{{ asset('swiper/swiper.css') }}">
    <!-- ==========================  DARK MODE SCRIPT ============================= -->
    <script type="text/javascript">
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>
    <!-- ALL ICONS  -->
    <svg class="hidden">
        <symbol id="arrow-left-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </symbol>
        <symbol id="star" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
        </symbol>
        <symbol id="arrows-up-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
        </symbol>
        <symbol id="rocket" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
        </symbol>
        <symbol id="mobile" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
        </symbol>
        <symbol id="tv" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
        </symbol>
        <symbol id="tag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
        </symbol>
        <symbol id="tablet" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M10.5 19.5h3m-6.75 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-15a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 4.5v15a2.25 2.25 0 0 0 2.25 2.25Z" />
        </symbol>
        <symbol id="headphone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linejoin="round" stroke-width="1.5"
                d="M20 16v-4a8 8 0 1 0-16 0v4m16 0v2a2 2 0 0 1-2 2h-2v-6h2a2 2 0 0 1 2 2ZM4 16v2a2 2 0 0 0 2 2h2v-6H6a2 2 0 0 0-2 2Z" />
        </symbol>
        <symbol id="arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </symbol>
        <symbol id="arrow-up-right" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
        </symbol>
        <symbol id="search" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </symbol>
        <symbol id="arrow-left-end" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
        </symbol>
        <symbol id="shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
        </symbol>
        <symbol id="shopping-cart" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </symbol>
        <symbol id="moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}"
            stroke="currentColor">
            <path strokeLinecap="round" strokeLinejoin="round"
                d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
        </symbol>
        <symbol id="sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
        </symbol>
        <symbol id="user" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </symbol>
        <symbol id="heart" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
        </symbol>
        <symbol id="chevron" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </symbol>
        <symbol id="x-mark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </symbol>
        <symbol id="fire" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
        </symbol>
        <symbol id="bars" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </symbol>
        <symbol id="squares" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
        </symbol>
        <symbol id="check-badge" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
        </symbol>
        <symbol id="phone" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
        </symbol>
        <symbol id="arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </symbol>
        <symbol id="home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </symbol>
        <symbol id="start" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
        </symbol>
        <symbol id="map" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
        </symbol>
        <symbol id="plus" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </symbol>
        <symbol id="minus" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
        </symbol>
        <symbol id="envelope" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </symbol>
        <symbol id="cog" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </symbol>
        <symbol id="calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
        </symbol>
        <symbol id="eye" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </symbol>
        <symbol id="instagram" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="whatsapp" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                clip-rule="evenodd" />
            <path fill="currentColor"
                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
        </symbol>
        <symbol id="linkedin" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                clip-rule="evenodd" />
            <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
        </symbol>
        <symbol id="youtube" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                clip-rule="evenodd" />
        </symbol>

    </svg>

    <!-- Header -->
    <header class="header">
        <!-- Desktop -->
        <div class="container mt-5 hidden flex-col gap-y-6 lg:flex">
            <!-- TOPBAR -->
            <div class="flex-between">
                <!-- Search Box -->
                <div class="relative z-20">
                    <!-- INPUT -->
                    <div
                        class="search-btn-open flex gap-x-2 app-border bg-gray-50 dark:bg-gray-700 p-1 rounded-full cursor-pointer ring-blue-400 w-84 transition-all">
                        <svg class="size-6 p-1.5 flex-center text-gray-100 bg-blue-600 rounded-full w-9 h-9">
                            <use href="#search" />
                        </svg>
                        <input placeholder="جستجو در کارین..." type="text">
                    </div>
                    <!-- Search Modal -->
                    <div class="search-modal space-y-4">
                        <!-- Result -->
                        <div>
                            <span class="flex items-center text-sm gap-x-1 text-gray-600 dark:text-gray-200">
                                <p>نتیجه جستجو : <span class="font-DanaMedium text-blue-400">iphone</span></p>
                            </span>
                            <ul
                                class="pt-4 text-gray-500 dark:text-gray-300 flex flex-col gap-y-4 child:flex-between child:cursor-pointer">
                                <li>
                                    <a href="#" class="flex items-center gap-x-2">
                                        <svg class="size-5">
                                            <use href="#search" />
                                        </svg>
                                        آیفون 14
                                    </a>
                                    <svg class="size-4">
                                        <use href="#arrow-up-right" />
                                    </svg>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center gap-x-2">
                                        <svg class="size-5">
                                            <use href="#search" />
                                        </svg>
                                        قاب آیفون
                                    </a>
                                    <svg class="size-4">
                                        <use href="#arrow-up-right" />
                                    </svg>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center gap-x-2">
                                        <svg class="size-5">
                                            <use href="#search" />
                                        </svg>
                                        کاور ایفون 16
                                    </a>
                                    <svg class="size-4">
                                        <use href="#arrow-up-right" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                        <!-- Trend -->
                        <div class="pt-4">
                            <span class="flex items-center gap-x-1 text-sm text-gray-500 dark:text-gray-200">
                                <svg class="size-4">
                                    <use href="#fire" />
                                </svg>
                                <p>جستجو های پرطرفدار :</p>
                            </span>
                            <ul class="w-full flex items-center gap-1.5 mt-3 child:search-modal-list-item">
                                <li>
                                    <a href="#">#آیفون</a>
                                </li>
                                <li>
                                    <a href="#">#لپ تاپ</a>
                                </li>
                                <li>
                                    <a href="#">#هدفون</a>
                                </li>
                                <li>
                                    <a href="#">#هلدر</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Logo -->
                <a href="main.html" class="flex flex-col text-center ml-20">
                    <span class="font-MorabbaMedium text-4xl flex items-center">
                        <span class="text-blue-500">کارین</span> شاپ
                    </span>
                    <p class="font-DanaMedium text-gray-400"> خرید موبایل و لپ‌تاپ</p>
                </a>
                <!--  Action -->
                <div class="flex items-center gap-x-3">
                    <!-- LOGIN -->
                    <button class="hidden flex-center py-2 px-4  app-border rounded-full app-hover">
                        <a href="#" class="flex items-center gap-x-2">
                            <p>ورود | ثبت‌نام</p>
                            <svg class="size-5">
                                <use href="#arrow-left-end" />
                            </svg>
                        </a>
                    </button>
                    <!-- Account Btn -->
                    <button class="group relative flex-center py-2 px-4 app-border rounded-full app-hover delay-75">
                        <a href="dashboard.html"  class="flex items-center gap-x-1">
                            <svg class="size-5">
                                <use href="#user" />
                            </svg>
                            <p>حساب کاربری</p>
                        </a>
                        <div
                            class="absolute dark:border-none border border-gray-100 w-52 p-2 bg-white text-gray-900 dark:text-gray-100 flex flex-col gap-y-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:top-12 transition-all delay-100 dark:bg-gray-700 top-20 rounded-lg text-base shadow child:transition-all duration-300 child:py-1.5 child:px-2 z-30 child:rounded-lg child:w-full">
                            <a href="dashboard-orders.html"
                                class="flex items-center gap-x-2  hover:bg-blue-500 hover:text-gray-100">
                                <svg class="h-5 w-5">
                                    <use href="#user"></use>
                                </svg>
                                سفارشات من
                            </a>
                            <a href="dashboard-messages.html"
                                class="flex items-center gap-x-2  hover:bg-blue-500 hover:text-gray-100">
                                <svg class="h-5 w-5">
                                    <use href="#envelope"></use>
                                </svg>
                                لیست پیام ها
                            </a>
                            <a href="dashboard-account.html"
                                class="flex items-center gap-x-2  hover:bg-blue-500 hover:text-gray-100">
                                <svg class="h-5 w-5">
                                    <use href="#cog"></use>
                                </svg>
                                اطلاعات کاربری
                            </a>
                            <a href="#"
                                class="flex items-center gap-x-2  hover:bg-red-500 dark:hover:bg-red-500 hover:text-gray-100">
                                <svg class="h-5 w-5">
                                    <use href="#arrow-left-end"></use>
                                </svg>
                                خروج از حساب
                            </a>
                        </div>
                    </button>
                    <!-- Toggle theme -->
                    <button class="toggle-theme flex-center p-2 app-border rounded-full app-hover">
                        <svg class="inline-block dark:hidden size-6">
                            <use href="#moon" />
                        </svg>
                        <svg class="hidden dark:inline size-6">
                            <use href="#sun" />
                        </svg>
                    </button>
                    <!-- Shoping cart -->
                    <button class="flex-center p-2 bg-blue-600 text-gray-100 rounded-full open-cart relative">
                        <svg class="size-6">
                            <use href="#shopping-bag" />
                        </svg>
                        <span class="absolute -top-1 -right-1 flex h-4 w-4">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-600 opacity-75"></span>
                            <span
                                class="relative inline-flex rounded-full h-4 w-4 bg-red-500 text-xs pt-1 flex-center text-white">2</span>
                        </span>
                    </button>
                    <!-- Cart -->
                    <div class="cart ">
                        <!-- HEADER -->
                        <div
                            class="flex items-center justify-between pb-2 border-b-2 border-gray-200 dark:border-gray-600 text-gray-800 dark:text-gray-300">
                            <h2 class="font-DanaMedium text-lg">سبد خرید <span class="text-sm text-gray-400 font-Dana">
                                    (2
                                    مورد)</span></h2>
                            <svg class="size-5 cursor-pointer close-cart mb-.5">
                                <use href="#x-mark" />
                            </svg>
                        </div>
                        <!-- MAIN -->
                        <div class="flex flex-col divide-y-2 divide-gray-200 dark:divide-gray-600 my-4">
                            <!-- CART ITEM -->
                            <div class="grid grid-cols-12 gap-x-2 w-full py-4 cursor-pointer">
                                <!-- img -->
                                <div class="col-span-4 w-24 h-20">
                                    <img src="{{asset('images/products/5.webp')}}" class="rounded-lg" alt="product">
                                </div>
                                <!-- detail -->
                                <div class="col-span-8 flex flex-col justify-between">
                                    <h2 class="font-DanaMedium line-clamp-2">
                                        گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 256 گیگابایت و رم 4 گیگابایت
                                        - نات اکتیو
                                    </h2>
                                    <div class="flex items-center justify-between gap-x-2 mt-2">
                                        <button
                                            class="w-20 flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-1 px-2">
                                            <svg class="size-4 increment text-green-600">
                                                <use href="#plus"></use>
                                            </svg>
                                            <input type="number" name="customInput" id="customInput" min="0" max="20"
                                                value="2" class="custom-input w-4 mr-2 text-sm">
                                            <svg class="size-4 decrement text-red-500">
                                                <use href="#minus"></use>
                                            </svg>
                                        </button>
                                        <p class="text-lg text-blue-500 dark:text-blue-400 font-DanaMedium">1,130,000
                                            <span class="font-Dana text-sm">تومان</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- CART ITEM -->
                            <div class="grid grid-cols-12 gap-x-2 w-full py-4 cursor-pointer">
                                <!-- img -->
                                <div class="col-span-4 w-24 h-20">
                                    <img src="images/products/1.png" class="rounded-lg" alt="product">
                                </div>
                                <!-- detail -->
                                <div class="col-span-8 flex flex-col justify-between">
                                    <h2 class="font-DanaMedium line-clamp-2">
                                        گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 256 گیگابایت و رم 4 گیگابایت
                                        - نات اکتیو
                                    </h2>
                                    <div class="flex items-center justify-between gap-x-2 mt-2">
                                        <button
                                            class="w-20 flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-1 px-2">
                                            <svg class="size-4 increment text-green-600">
                                                <use href="#plus"></use>
                                            </svg>
                                            <input type="number" name="customInput" id="customInput" min="0" max="20"
                                                value="2" class="custom-input w-4 mr-2 text-sm">
                                            <svg class="size-4 decrement text-red-500">
                                                <use href="#minus"></use>
                                            </svg>
                                        </button>
                                        <p class="text-lg text-blue-500 dark:text-blue-400 font-DanaMedium">1,130,000
                                            <span class="font-Dana text-sm">تومان</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FOOTER -->
                        <div
                            class="w-[90%] fixed bottom-2 flex items-center justify-between border-t-2 border-gray-200 dark:border-gray-600 pt-4">
                            <div>
                                <p class="text-gray-500 dark:text-gray-300 text-sm">مبلغ قابل پرداخت :</p>
                                <p class="text-lg text-blue-500 dark:text-blue-400 font-DanaDemiBold">1,130,000
                                    <span class="font-Dana text-sm">تومان</span>
                                </p>
                            </div>
                            <a href="shopping-cart.html"
                                class="py-2 px-4 bg-blue-600 flex-center hover:bg-blue-700 transition-all rounded-lg text-gray-200">
                                ثبت سفارش
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- NAVBAR -->
            <div class="relative flex-between h-16 bg-gray-900 dark:bg-gray-800 rounded-full text-gray-200 px-10">
                <!-- MENU -->
                <ul class="flex items-center gap-x-8">
                    <li class="menu-item">
                        <a href="main.html" class="menu-item_link">
                            صفحه اصلی
                        </a>
                    </li>
                    <!-- MENU ITEM --- Mega Menu -->
                    <li class="menu-item megamenu-link">
                        <a href="#" class="menu-item_link flex items-center justify-center gap-x-1">
                            دسته بندی ها
                            <svg class="size-4">
                                <use href="#chevron" />
                            </svg>
                        </a>
                        <div
                            class="megamenu">
                            <!-- RIGHT MENU -->
                            <ul class="megamenu_category">
                                <li class="megamenu_category-item active">
                                    <svg class="w-5 h-5">
                                        <use href="#mobile"></use>
                                    </svg>
                                    <a href="#">موبایل</a>
                                </li>
                                <li class="megamenu_category-item ">
                                    <svg class="w-5 h-5">
                                        <use href="#tv"></use>
                                    </svg>
                                    <a href="#">لپتاپ</a>
                                </li>
                                <li class="megamenu_category-item ">
                                    <svg class="w-5 h-5">
                                        <use href="#tablet"></use>
                                    </svg>
                                    <a href="#">تبلت</a>
                                </li>
                                <li class="megamenu_category-item ">
                                    <svg class="w-5 h-5">
                                        <use href="#headphone"></use>
                                    </svg>
                                    <a href="#">هدفون</a>
                                </li>
                                <li class="megamenu_category-item ">
                                    <svg class="w-5 h-5">
                                        <use href="#tag"></use>
                                    </svg>
                                    <a href="#">تخفیف</a>
                                </li>
                                <li class="megamenu_category-item ">
                                    <svg class="w-5 h-5">
                                        <use href="#tv"></use>
                                    </svg>
                                    <a href="#">کامپیوتر</a>
                                </li>
                            </ul>

                            <div class="megamenu_left">
                               <a href="shop.html" class="text-blue-400 flex items-center gap-x-0.5 text-sm mb-4">
                                مشاهده همه
                                <svg class="size-4 rotate-90">
                                    <use href="#chevron" />
                                </svg>
                               </a>
                                <ul class="megamenu_left-item active">
                                   <div class="megamenu_left-menu">
                                    <h2 class="megamenu_left-title">برندهای مختلف :</h2>
                                    <li>
                                        <a href="shop.html">گوشی آیفون</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">گوشی سامسونگ</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">گوشی هواووی</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">گوشی شیامی</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">گوشی نوکیا</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">گوشی آنر</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">گوشی آیفون</a>
                                    </li>
                                   </div>
                                   <div class="megamenu_left-menu">
                                    <h2 class="megamenu_left-title">گوشی بر اساس قیمت</h2>
                                    <li><a href="shop.html">گوشی ارزان</a></li>
                                    <li><a href="shop.html">گوشی موبایل قسطی</a></li>
                                    <li><a href="shop.html">گوشی تا ۲ میلیون تومان</a></li>
                                    <li><a href="shop.html">گوشی تا ۵ میلیون تومان</a></li>
                                    <li><a href="shop.html">گوشی تا ۷ میلیون تومان</a></li>
                                    <li><a href="shop.html">گوشی تا ۱۵ میلیون تومان</a></li>
                                    <li><a href="shop.html">گوشی بالای ۱۵ میلیون تومان</a></li>
                                   </div>
                                   <div class="megamenu_left-menu">
                                    <h2 class="megamenu_left-title">لوازم جانبی موبایل</h2>
                                    <li><a href="shop.html">شارژر گوشی</a></li>
                                    <li><a href="shop.html">شارژر وایرلس</a></li>
                                    <li><a href="shop.html">قاب و کاور گوشی</a></li>
                                    <li><a href="shop.html">گلس گوشی</a></li>
                                    <li><a href="shop.html">هولدر گوشی موبایل</a></li>
                                    <li><a href="shop.html">کابل شارژ و مبدل</a></li>
                                    <li><a href="shop.html">پاوربانک (شارژر همراه)</a></li>
                                   </div>
                            
                                </ul>
                                <ul class="megamenu_left-item ">
                                    <div class="megamenu_left-menu">
                                        <h2 class="megamenu_left-title">برندهای مختلف :</h2>
                                        <li><a href="shop.html">لپ‌تاپ اپل (MacBook)</a></li>
                                        <li><a href="shop.html">لپ‌تاپ ایسوس</a></li>
                                        <li><a href="shop.html">لپ‌تاپ لنوو</a></li>
                                        <li><a href="shop.html">لپ‌تاپ اچ‌پی</a></li>
                                        <li><a href="shop.html">لپ‌تاپ دل</a></li>
                                        <li><a href="shop.html">لپ‌تاپ ام‌اس‌آی</a></li>
                                        <li><a href="shop.html">لپ‌تاپ ایسر</a></li>
                                    </div>
                                    
                                    <div class="megamenu_left-menu">
                                        <h2 class="megamenu_left-title">لپ‌تاپ بر اساس قیمت</h2>
                                        <li><a href="shop.html">لپ‌تاپ اقتصادی</a></li>
                                        <li><a href="shop.html">لپ‌تاپ تا ۱۰ میلیون تومان</a></li>
                                        <li><a href="shop.html">لپ‌تاپ تا ۲۰ میلیون تومان</a></li>
                                        <li><a href="shop.html">لپ‌تاپ تا ۳۰ میلیون تومان</a></li>
                                        <li><a href="shop.html">لپ‌تاپ تا ۵۰ میلیون تومان</a></li>
                                        <li><a href="shop.html">لپ‌تاپ بالای ۵۰ میلیون تومان</a></li>
                                    </div>
                                    
                                    <div class="megamenu_left-menu">
                                        <h2 class="megamenu_left-title">لوازم جانبی لپ‌تاپ</h2>
                                        <li><a href="shop.html">کیف و کوله لپ‌تاپ</a></li>
                                        <li><a href="shop.html">کابل و آداپتور لپ‌تاپ</a></li>
                                        <li><a href="shop.html">استند و پایه خنک‌کننده</a></li>
                                        <li><a href="shop.html">ماوس و کیبورد</a></li>
                                        <li><a href="shop.html">هارد اکسترنال و SSD</a></li>
                                        <li><a href="shop.html">پد ماوس</a></li>
                                    </div>
                                    
                                </ul>
                                <ul class="megamenu_left-item">
                                    <div class="megamenu_left-menu">
                                        <h2 class="megamenu_left-title">برندهای مختلف تبلت</h2>
                                        <li><a href="shop.html">تبلت اپل (iPad)</a></li>
                                        <li><a href="shop.html">تبلت سامسونگ</a></li>
                                        <li><a href="shop.html">تبلت لنوو</a></li>
                                        <li><a href="shop.html">تبلت مایکروسافت (Surface)</a></li>
                                        <li><a href="shop.html">تبلت هواوی</a></li>
                                        <li><a href="shop.html">تبلت شیائومی</a></li>
                                    </div>
                                    
                                    <div class="megamenu_left-menu">
                                        <h2 class="megamenu_left-title">لوازم جانبی تبلت</h2>
                                        <li><a href="shop.html">کیف و کاور تبلت</a></li>
                                        <li><a href="shop.html">قلم لمسی</a></li>
                                        <li><a href="shop.html">کیبورد و استند</a></li>
                                        <li><a href="shop.html">گلس و محافظ صفحه</a></li>
                                        <li><a href="shop.html">کابل و شارژر</a></li>
                                        <li><a href="shop.html">پاوربانک</a></li>
                                    </div>
                                    
                                </ul>
                                <ul class="megamenu_left-item">
                                    <li>منوی4  </li>
                                </ul>
                                <ul class="megamenu_left-item">
                                    <li>منوی5  </li>
                                </ul>
                                <ul class="megamenu_left-item">
                                    <li>منوی6  </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="shop.html" class="menu-item_link">
                            فروشگاه
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="articles.html" class="menu-item_link">
                            وبلاگ
                        </a>
                    </li>
                    <!-- MENU ITEM --- Solid submenu -->
                    <li class="menu-item group">
                        <a class="menu-item_link cursor-pointer">
                            منوی ساده
                            <svg class="size-4 group-hover:rotate-180 duration-300">
                                <use href="#chevron" />
                            </svg>
                        </a>
                        <ul class="solid-menu">
                            <li>
                                <a href="aboute-us.html">درباره ما</a>
                            </li>
                            <li>
                                <a href="questions.html">سوالات متداول</a>
                            </li>
                            <li>
                                <a href="contact-us.html">تماس با ما</a>
                            </li>
                            <li class="solid-submenu_link">
                                <a href="#">صفحات</a>
                                <svg class="size-4 rotate-90 duration-300">
                                    <use href="#chevron" />
                                </svg>
                                <ul class="solid-submenu">
                                    <li>
                                        <a href="shop.html">فروشگاه</a>
                                    </li>
                                    <li>
                                        <a href="product-details.html">جزئیات محصول</a>
                                    </li>
                                    <li>
                                        <a href="dashboard.html">پنل کاربری</a>
                                    </li>
                                    <li>
                                        <a href="shopping-cart.html">سبد خرید</a>
                                    </li>
                                    <li>
                                        <a href="login.html">صفحه ورود</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Addres -->
                <div class="relative">
                    <button class="flex items-center gap-x-1 citylist-open">
                        <svg class="size-6">
                            <use href="#map" />
                        </svg>
                        <p>آدرس خود را انتخاب کنید</p>
                    </button>
                    <div class="citylist-menu z-30">
                        <!-- Search city -->
                        <button class="flex bg-gray-200 dark:bg-gray-700 gap-x-1 w-full items-center p-2 rounded-lg">
                            <svg class="size-6 text-gray-400">
                                <use href="#search" />
                            </svg>
                            <input type="text" class="w-full placeholder:text-gray-400" placeholder="جستجوی شهر...">
                        </button>
                        <h2 class="my-3 pr-1.5 font-DanaMedium">شهرهای پرتکرار :</h2>
                        <!-- City list -->
                        <ul class="city-list">
                            <li>
                                <a href="#">
                                    <svg class="size-5">
                                        <use href="#map" />
                                    </svg>
                                    تهران
                                </a>
                                <svg class="size-4 rotate-90">
                                    <use href="#chevron" />
                                </svg>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="size-5">
                                        <use href="#map" />
                                    </svg>
                                    اصفهان
                                </a>
                                <svg class="size-4 rotate-90">
                                    <use href="#chevron" />
                                </svg>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="size-5">
                                        <use href="#map" />
                                    </svg>
                                    مشهد
                                </a>
                                <svg class="size-4 rotate-90">
                                    <use href="#chevron" />
                                </svg>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="size-5">
                                        <use href="#map" />
                                    </svg>
                                    شیراز
                                </a>
                                <svg class="size-4 rotate-90">
                                    <use href="#chevron" />
                                </svg>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="size-5">
                                        <use href="#map" />
                                    </svg>
                                    تبریز
                                </a>
                                <svg class="size-4 rotate-90">
                                    <use href="#chevron" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile -->
        <div class="flex justify-center lg:hidden">
            <!-- Top Navbar -->
            <nav
                class="absolute top-0 inset-x-0 w-full h-16 px-4 shadow-sm dark:bg-gray-800 flex items-center justify-between">
                <!-- Menu -->
                <button class="open-menu-mobile flex-center p-2 app-border rounded-full">
                    <svg class=" size-6">
                        <use href="#bars" />
                    </svg>
                </button>
                <div class="mobile-menu z-50 flex flex-col">
                    <!--  MENU MOBILE header -->
                    <div class="flex w-full items-center justify-between border-b-normal pb-4">
                        <a href="main.html" class="text-xl font-MorabbaMedium">
                            <span class="text-blue-500">کارین</span> شاپ
                        </a>
                        <button class="close-menu-mobile">
                            <svg class="size-5 text-gray-500 dark:text-gray-200">
                                <use href="#x-mark" />
                            </svg>
                        </button>
                    </div>
                    <!-- MENU MOBILE CATEGORY & ACTION  -->
                    <ul class="flex flex-col gap-y-2 text-gray-800 dark:text-gray-100 mt-4">
                        <li>
                            <span class="open-category mobile-menu-item">
                                <svg class="size-5">
                                    <use href="#squares" />
                                </svg>
                                <a href="#">دسته بندی</a>
                            </span>
                            <!-- MENU CATEGORY SLIDE -->
                            <div class="category-slide">
                                <div class=" w-full border-b-normal pb-4">
                                    <span class="close-category-slide flex items-center gap-x-1 cursor-pointer">
                                        <svg class="size-4">
                                            <use href="#arrow" />
                                        </svg>
                                        دسته بندی
                                    </span>
                                </div>
                                <ul class="child:flex pt-4 child:cursor-pointer space-y-2">
                                    <li>
                                        <div class="relative open-detail-category">
                                            <span class="mobile-menu-category-badge">
                                                موبایل
                                            </span>
                                            <img src="images/category/1.webp" class="h-28 w-full object-cover rounded"
                                                alt="">
                                        </div>
                                        <!-- Mobile SLIDE -->
                                        <div class="detail-category">
                                            <span
                                                class="close-detail-category flex-center gap-x-1 mx-4 bg-gray-100 dark:bg-gray-900 rounded p-2 cursor-pointer">
                                                موبایل
                                                <svg class="size-4">
                                                    <use href="#arrow" />
                                                </svg>
                                            </span>
                                            <ul
                                                class="mt-5 flex flex-col child:py-3 divide-y-2 dark:divide-gray-700 child:px-4">
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">گوشی‌های هوشمند</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">آیفون</li>
                                                        <li href="#">سامسونگ</li>
                                                        <li href="#">شیائومی</li>
                                                        <li href="#" class="text-red-500">پرفروش‌ها</li>
                                                        <li href="#">نوکیا</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لوازم جانبی</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">قاب موبایل</li>
                                                        <li href="#">محافظ صفحه</li>
                                                        <li href="#">پاوربانک</li>
                                                        <li href="#" class="text-red-500">تخفیف‌ها</li>
                                                        <li href="#">شارژر</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">گجت‌های پوشیدنی</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">ساعت هوشمند</li>
                                                        <li href="#">دستبند هوشمند</li>
                                                        <li href="#">هدفون بی‌سیم</li>
                                                        <li href="#" class="text-red-500">جدیدترین‌ها</li>
                                                        <li href="#">هدست</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لوازم مخصوص بازی</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">کنترلر بازی</li>
                                                        <li href="#">دسته بازی موبایل</li>
                                                        <li href="#">لوازم جانبی گیمرها</li>
                                                        <li href="#" class="text-red-500">محصولات جدید</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="relative open-detail-category">
                                            <span class="mobile-menu-category-badge">
                                                لپ تاپ
                                            </span>
                                            <img src="images/category/2.jpg" class="h-28 w-full object-cover rounded"
                                                alt="">
                                        </div>
                                        <div class="detail-category">
                                            <span
                                                class="close-detail-category flex-center gap-x-1 mx-4 bg-gray-100 dark:bg-gray-900 rounded p-2 cursor-pointer">
                                                لپ تاپ
                                                <svg class="size-4">
                                                    <use href="#arrow" />
                                                </svg>
                                            </span>
                                            <ul
                                                class="mt-5 flex flex-col child:py-3 divide-y-2 dark:divide-gray-700 child:px-4">
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لپ‌تاپ‌ها</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">ایسر</li>
                                                        <li href="#">دل</li>
                                                        <li href="#">اچ‌پی</li>
                                                        <li href="#" class="text-red-500">پرفروش‌ها</li>
                                                        <li href="#">لنوو</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لوازم جانبی</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">کیبورد</li>
                                                        <li href="#">ماوس</li>
                                                        <li href="#">کوله لپ‌تاپ</li>
                                                        <li href="#" class="text-red-500">محصولات تخفیف‌دار</li>
                                                        <li href="#">پایه خنک‌کننده</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">قطعات و تجهیزات</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">هارد اکسترنال</li>
                                                        <li href="#">رم لپ‌تاپ</li>
                                                        <li href="#">شارژر لپ‌تاپ</li>
                                                        <li href="#" class="text-red-500">قطعات ویژه</li>
                                                        <li href="#">کارت گرافیک</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">نرم‌افزارها</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">آنتی‌ویروس</li>
                                                        <li href="#">نرم‌افزارهای اداری</li>
                                                        <li href="#">نرم‌افزارهای طراحی</li>
                                                        <li href="#" class="text-red-500">جدیدترین نرم‌افزارها</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="relative open-detail-category">
                                            <span class="mobile-menu-category-badge">
                                                هدفون
                                            </span>
                                            <img src="images/category/4.webp" class="h-28 w-full object-cover rounded"
                                                alt="">
                                        </div>
                                        <div class="detail-category">
                                            <span
                                                class="close-detail-category flex-center gap-x-1 mx-4 bg-gray-100 dark:bg-gray-900 rounded p-2 cursor-pointer">
                                                هدفون
                                                <svg class="size-4">
                                                    <use href="#arrow" />
                                                </svg>
                                            </span>
                                            <ul
                                                class="mt-5 flex flex-col child:py-3 divide-y-2 dark:divide-gray-700 child:px-4">
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">هدفون‌های بی‌سیم</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">ایرپاد</li>
                                                        <li href="#">هدفون‌های بلوتوثی</li>
                                                        <li href="#">هدفون‌های ورزشی</li>
                                                        <li href="#" class="text-red-500">محصولات تخفیف‌دار</li>
                                                        <li href="#">هدفون‌های نویزگیر</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">هدفون‌های باسیم</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">هدفون‌های استودیویی</li>
                                                        <li href="#">هدفون‌های گیمینگ</li>
                                                        <li href="#">هدفون‌های اقتصادی</li>
                                                        <li href="#" class="text-red-500">مدل‌های ویژه</li>
                                                        <li href="#">هدفون‌های حرفه‌ای</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لوازم جانبی هدفون</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">کیس شارژ</li>
                                                        <li href="#">پد گوش</li>
                                                        <li href="#">کابل و مبدل</li>
                                                        <li href="#" class="text-red-500">محصولات تخفیف‌دار</li>
                                                        <li href="#">هولدر هدفون</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">برندها</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron" />
                                                        </svg>
                                                    </span>
                                                    <ul
                                                        class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                        <li href="#">سونی</li>
                                                        <li href="#">بوز</li>
                                                        <li href="#">جبرا</li>
                                                        <li href="#" class="text-red-500">برندهای تخفیف‌دار</li>
                                                        <li href="#">انکر</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="relative open-detail-category">
                                            <span class="mobile-menu-category-badge">
                                                پرفروش ها
                                            </span>
                                            <img src="images/category/3.webp" class="h-28 w-full object-cover rounded"
                                                alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-menu-item">
                            <svg class="size-5">
                                <use href="#user" />
                            </svg>
                            <a href="dashboard.html">حساب کاربری</a>
                        </li>
                        <li class="mobile-menu-item">
                            <svg class="size-5">
                                <use href="#heart" />
                            </svg>
                            <a href="dashboard-favorite.html">علاقه مندی ها</a>
                        </li>
                        <li class="mobile-menu-item">
                            <svg class="size-5">
                                <use href="#shopping-cart" />
                            </svg>
                            <a href="shopping-cart.html">سبد خرید</a>
                        </li>
                        <li class="mobile-menu-item">
                            <svg class="size-5">
                                <use href="#check-badge" />
                            </svg>
                            <a href="#">دربـاره مـا</a>
                        </li>
                        <li class="mobile-menu-item">
                            <svg class="size-5">
                                <use href="#phone" />
                            </svg>
                            <a href="contact-us.html">تـماس بـا مـا</a>
                        </li>
                    </ul>
                </div>
                <!-- Logo -->
                <a href="main.html" class="flex flex-col text-center">
                    <span class="font-MorabbaMedium text-3xl flex items-center">
                        <span class="text-blue-500">کارین</span> شاپ
                    </span>
                </a>
                <!-- Toggle theme -->
                <button class="toggle-theme flex-center p-2 app-border rounded-full ">
                    <svg class="inline-block dark:hidden size-6">
                        <use href="#moon" />
                    </svg>
                    <svg class="hidden dark:inline size-6">
                        <use href="#sun" />
                    </svg>
                </button>
            </nav>
            <!-- Search baer -->
            <button class="open-mobile_search-modal">
                <svg class=" size-6">
                    <use href="#search" />
                </svg>
                <p>جستجو در <span class="font-MorabbaMedium">کارین شاپ</span></p>
            </button>
            <!-- Search Moadal -->
            <div class="mobile_search-modal">
                <!-- TOP -->
                <div class="w-full flex items-center gap-x-2">
                    <button
                        class="w-full flex items-center gap-x-1 bg-gray-200 dark:bg-gray-800 text-gray-500 py-2 px-4 rounded-3xl">
                        <svg class="size-6">
                            <use href="#search" />
                        </svg>
                        <input type="text" placeholder="جستجو در همه کالاها">
                    </button>
                    <svg class="size-6 close-mobile_search-modal">
                        <use href="#x-mark" />
                    </svg>
                </div>
                <div class="w-full space-y-4">
                    <!-- Result -->
                    <div ">
                        <span class=" flex items-center text-sm gap-x-1 text-gray-600 dark:text-gray-200">
                        <p>نتیجه جستجو : <span class="font-DanaMedium text-blue-400">iphone</span></p>
                        </span>
                        <ul
                            class="pt-4 text-gray-500 dark:text-gray-300 flex flex-col gap-y-4 child:flex-between child:cursor-pointer">
                            <li>
                                <a href="#" class="flex items-center gap-x-2">
                                    <svg class="size-5">
                                        <use href="#search" />
                                    </svg>
                                    آیفون 14
                                </a>
                                <svg class="size-4">
                                    <use href="#arrow-up-right" />
                                </svg>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-x-2">
                                    <svg class="size-5">
                                        <use href="#search" />
                                    </svg>
                                    قاب آیفون
                                </a>
                                <svg class="size-4">
                                    <use href="#arrow-up-right" />
                                </svg>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-x-2">
                                    <svg class="size-5">
                                        <use href="#search" />
                                    </svg>
                                    کاور ایفون 16
                                </a>
                                <svg class="size-4">
                                    <use href="#arrow-up-right" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <!-- Trend -->
                    <div class="pt-4">
                        <span class="flex items-center gap-x-1 text-sm text-gray-500 dark:text-gray-200">
                            <svg class="size-4">
                                <use href="#fire" />
                            </svg>
                            <p>جستجو های پرطرفدار :</p>
                        </span>
                        <ul class="w-full flex items-center gap-1.5 mt-3 child:search-modal-list-item">
                            <li>
                                <a href="#">#آیفون</a>
                            </li>
                            <li>
                                <a href="#">#لپ تاپ</a>
                            </li>
                            <li>
                                <a href="#">#هدفون</a>
                            </li>
                            <li>
                                <a href="#">#هلدر</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- bottom Navbar-->
            <ul class="bottom-navbar">
                <li class="dark:text-sky-400 text-blue-500 font-DanaMedium">
                    <svg class="size-5">
                        <use href="#home" />
                    </svg>
                    <a href="main.html">خانه</a>
                </li>
                <li>
                    <svg class="size-5">
                        <use href="#squares" />
                    </svg>
                    <a href="shop.html">فروشگاه</a>
                </li>
                <li>
                    <svg class="size-5">
                        <use href="#shopping-bag" />
                    </svg>
                    <a href="shopping-cart.html">سبد خرید</a>
                </li>
                <li>
                    <svg class="size-5">
                        <use href="#user" />
                    </svg>
                    <a href="dashboard.html">حساب من</a>
                </li>
            </ul>
        </div>
        <!-- Slider -->
        <div class="px-3 lg:container group w-full mt-4 lg:mt-10">
            <div dir="rtl" class="swiper header-slider h-52 md:h-96 cursor-pointer">
                <div class="swiper-wrapper">
                    <a href="shop.html" class="swiper-slide">
                        <img src="images/slider/4.webp" class="rounded-xl" alt="">
                    </a >
                    <a href="shop.html" class="swiper-slide">
                        <img src="images/slider/1.jpg" class="rounded-xl" alt="">
                    </a >
                    <a href="shop.html" class="swiper-slide">
                        <img src="images/slider/2.jpg" class="rounded-xl" alt="">
                    </a >
                    <a href="shop.html" class="swiper-slide">
                        <img src="images/slider/3.gif" class="rounded-xl" alt="">
                    </a >
                </div>
                <div class="swiper-pagination-wrapper">
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Swiper Navigation -->
                <div
                    class="absolute z-10 bottom-5 opacity-0 invisible group-hover:opacity-100 transition-all duration-300 group-hover:visible right-6 hidden lg:flex items-center gap-x-2 child:flex-center child:w-9 child:h-9 child:cursor-pointer child:bg-white child:dark:bg-gray-800 child:text-gray-700 child:dark:text-gray-200 child:rounded-full child:shadow child-hover:text-blue-600 child-hover:dark:text-blue-500">
                    <button class="button-prev">
                        <svg class="size-5 -rotate-90">
                            <use href="#chevron" />
                        </svg>
                    </button>
                    <button class="button-next">
                        <svg class="size-5 rotate-90">
                            <use href="#chevron" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- Main -->
    <main class="relative">
        <!-- CATEGORY -->
        <section class="mx-4 lg:container mt-20">
            <!-- SECTION TITLE -->
            <div
                class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
                <div class="flex items-center gap-x-2 sm:gap-x-4">
                    <span class="size-12 hidden xs:flex rounded-lg bg-white shadow-lg dark:bg-gray-800 flex-center">
                        <svg class="size-7 text-gray-700 dark:text-gray-100">
                            <use href="#squares"></use>
                        </svg>
                    </span>
                    <div class="space-y-1 md:space-y-1">
                        <h3 class="text-xl md:text-2xl font-MorabbaMedium text-gray-800 dark:text-gray-50">دسـته بندی
                            هـای
                            <span class="text-blue-600 dark:text-blue-500">محبوب</span>
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">جدیدترین و بروزترین دسته بندی ها</p>
                    </div>
                </div>
                <div class="w-full xs:w-auto flex justify-center items-center gap-x-2">
                    <a href="shop.html"
                        class="group shadow-xl text-sm md:text-base flex gap-x-1.5 items-center px-2 h-10 md:px-3 text-white bg-blue-600 rounded-xl">
                        <p>مشاهده همه</p>
                        <span
                            class="w-7 h-7 rounded-full bg-blue-500 flex-center md:group-hover:-translate-x-1 transition-transform duration-300">
                            <svg class="size-5">
                                <use href="#arrow" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <!-- ITEMS -->
            <div
                class="flex items-center justify-evenly flex-wrap mt-12 child:mb-8 gap-x-8 child:items-center child:flex-col child:duration-300 child:cursor-pointer child:gap-y-1 child:text-gray-800 child:dark:text-gray-300 child:relative">
                <a href="shop.html" class="group flex">
                    <img src="images/category/5.png"
                        class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                        alt="category1" />
                    <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                        موبایل
                    </p>
                </a>
                <a href="shop.html" class="group flex">
                    <img src="images/category/6.png"
                        class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                        alt="category1" />
                    <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                        کالای دیجیتال
                    </p>
                </a>
                <a href="shop.html" class="group flex">
                    <img src="images/category/7.png"
                        class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                        alt="category1" />
                    <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                        خانه و آشپزخانه
                    </p>
                </a>
                <a href="shop.html" class="group flex">
                    <img src="images/category/8.png"
                        class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                        alt="category1" />
                    <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                        آرایشی بهداشتی
                    </p>
                </a>
                <a href="shop.html" class="group flex">
                    <img src="images/category/9.png"
                        class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                        alt="category1" />
                    <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                        لوازم تحریر
                    </p>

                </a>
                <a href="shop.html" class="group flex">
                    <img src="images/category/10.png"
                        class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                        alt="category1" />
                    <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                        گیفت کارت
                    </p>
                    <a href="shop.html" class="group hidden md:flex">
                        <img src="images/category/11.png"
                            class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                            alt="category1" />
                        <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                            ابزار آلات
                        </p>
                    </a>
            </div>
        </section>

        <!-- AMAZING SLIDER -->
        <section class="mx-4 lg:container mt-20">
            <div class="w-full h-80 rounded-xl bg-blue-500 dark:bg-blue-700 p-4 relative">
                <!-- AmazingSlider products Slider -->
                <div class="swiper AmazingSlider w-full rounded-xl">
                    <div class="swiper-wrapper">
                        <!-- item -->
                        <div class="swiper-slide amazing-card">
                            <img class="w-28 h-28" src="images/slider/Amazings.svg" alt="">
                            <!-- TIMER -->
                            <div class="flex items-center gap-x-2">
                                <span class="timer-box" id="seconds">00</span>
                                <p class="text-white">:</p>
                                <span class="timer-box" id="minutes">00</span>
                                <p class="text-white">:</p>
                                <span class="timer-box" id="hours">03</span>
                            </div>

                            <a href="shop.html" class="flex items-center gap-x-.5 text-gray-100 cursor-pointer">
                                <p>مشاهده همه</p>
                                <svg class="size-4 rotate-90">
                                    <use href="#chevron"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="swiper-slide small-card group">
                            <!-- product header -->
                            <div class="w-full flex items-center justify-between">
                                <span class="flex items-center gap-x-0.5 text-blue-400">
                                    <svg class="size-4 mb-1">
                                        <use href="#rocket"></use>
                                    </svg>
                                    <p class="text-xs">ارسال امروز</p>
                                </span>
                                <span class="text-gray-400 flex items-center justify-end text-sm gap-x-0.5">
                                    <p> 5.0 </p>
                                    <svg class="size-4 mb-1">
                                        <use href="#star"></use>
                                    </svg>
                                </span>
                            </div>
                            <!-- product img -->
                            <a href="product-details.html">
                                <img class="small-card_img" src="images/products/3.png" alt="">
                            </a>
                            <!--  product footer -->
                            <div class="space-y-2">
                                <a href="product-details.html" class="small-card_link">
                                    لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                                </a>
                                <!-- Rate and Price -->
                                <div class="product-card_price-wrapper">
                                    <!-- Price -->
                                    <div class="small-card_price justify-between">
                                        <span class="pt-1">70%</span>
                                        <h4 class="flex items-center gap-x-1 text-lg">130,000,000 <p
                                                class="text-xs font-DanaMedium">تومان</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide small-card group">
                            <!-- product header -->
                            <div class="w-full flex items-center justify-between">
                                <span class="flex items-center gap-x-0.5 text-blue-400">
                                    <svg class="size-4 mb-1">
                                        <use href="#rocket"></use>
                                    </svg>
                                    <p class="text-xs">ارسال امروز</p>
                                </span>
                                <span class="text-gray-400 flex items-center justify-end text-sm gap-x-0.5">
                                    <p> 5.0 </p>
                                    <svg class="size-4 mb-1">
                                        <use href="#star"></use>
                                    </svg>
                                </span>
                            </div>
                            <!-- product img -->
                            <a href="product-details.html">
                                <img class="small-card_img" src="images/products/5.webp" alt="">
                            </a>
                            <!--  product footer -->
                            <div class="space-y-2">
                                <a href="product-details.html" class="small-card_link">
                                    لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                                </a>
                                <!-- Rate and Price -->
                                <div class="product-card_price-wrapper">
                                    <!-- Price -->
                                    <div class="small-card_price justify-between">
                                        <span class="pt-1">70%</span>
                                        <h4 class="flex items-center gap-x-1 text-lg">130,000,000 <p
                                                class="text-xs font-DanaMedium">تومان</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide small-card group">
                            <!-- product header -->
                            <span class="w-full text-gray-400 flex items-center justify-end text-sm gap-x-0.5">
                                <p> 5.0 </p>
                                <svg class="size-4 mb-1">
                                    <use href="#star"></use>
                                </svg>
                            </span>
                            <!-- product img -->
                            <a href="product-details.html">
                                <img class="small-card_img" src="images/products/1.png" alt="">
                            </a>
                            <!--  product footer -->
                            <div class="space-y-2">
                                <a href="product-details.html" class="small-card_link">
                                    لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                                </a>
                                <!-- Rate and Price -->
                                <div class="product-card_price-wrapper">
                                    <!-- Price -->
                                    <div class="small-card_price justify-between">
                                        <span class="pt-1">70%</span>
                                        <h4 class="flex items-center gap-x-1 text-lg">130,000,000 <p
                                                class="text-xs font-DanaMedium">تومان</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide small-card group">
                            <!-- product header -->
                            <span class="w-full text-gray-400 flex items-center justify-end text-sm gap-x-0.5">
                                <p> 5.0 </p>
                                <svg class="size-4 mb-1">
                                    <use href="#star"></use>
                                </svg>
                            </span>
                            <!-- product img -->
                            <a href="product-details.html">
                                <img class="small-card_img" src="images/products/7.webp" alt="">
                            </a>
                            <!--  product footer -->
                            <div class="space-y-2">
                                <a href="product-details.html" class="small-card_link">
                                    لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                                </a>
                                <!-- Rate and Price -->
                                <div class="product-card_price-wrapper">
                                    <!-- Price -->
                                    <div class="small-card_price justify-between">
                                        <span class="pt-1">70%</span>
                                        <h4 class="flex items-center gap-x-1 text-lg">130,000,000 <p
                                                class="text-xs font-DanaMedium">تومان</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide small-card group">
                            <!-- product header -->
                            <span class="w-full text-gray-400 flex items-center justify-end text-sm gap-x-0.5">
                                <p> 5.0 </p>
                                <svg class="size-4 mb-1">
                                    <use href="#star"></use>
                                </svg>
                            </span>
                            <!-- product img -->
                            <a href="product-details.html">
                                <img class="small-card_img" src="images/products/3.png" alt="">
                            </a>
                            <!--  product footer -->
                            <div class="space-y-2">
                                <a href="product-details.html" class="small-card_link">
                                    لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                                </a>
                                <!-- Rate and Price -->
                                <div class="product-card_price-wrapper">
                                    <!-- Price -->
                                    <div class="small-card_price justify-between">
                                        <span class="pt-1">70%</span>
                                        <h4 class="flex items-center gap-x-1 text-lg">130,000,000 <p
                                                class="text-xs font-DanaMedium">تومان</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide small-card group">
                            <!-- product header -->
                            <span class="w-full text-gray-400 flex items-center justify-end text-sm gap-x-0.5">
                                <p> 5.0 </p>
                                <svg class="size-4 mb-1">
                                    <use href="#star"></use>
                                </svg>
                            </span>
                            <!-- product img -->
                            <a href="product-details.html">
                                <img class="small-card_img" src="images/products/3.png" alt="">
                            </a>
                            <!--  product footer -->
                            <div class="space-y-2">
                                <a href="product-details.html" class="small-card_link">
                                    لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                                </a>
                                <!-- Rate and Price -->
                                <div class="product-card_price-wrapper">
                                    <!-- Price -->
                                    <div class="small-card_price justify-between">
                                        <span class="pt-1">70%</span>
                                        <h4 class="flex items-center gap-x-1 text-lg">130,000,000 <p
                                                class="text-xs font-DanaMedium">تومان</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="shop.html" class="swiper-slide amazing-card_last ">
                            <svg class="size-10 ">
                                <use href="#arrow-left-circle"></use>
                            </svg>
                            <h2>مشاهده همه</h2>
                        </a>
                    </div>
                </div>
                <button
                    class="slider-navigate_btn absolute right-1 top-36 border dark:border-gray-700 border-gray-200 AmazingSlider-prev-slide z-10">
                    <svg class="size-6 -rotate-90">
                        <use href="#chevron" />
                    </svg>
                </button>
                <button
                    class="slider-navigate_btn absolute left-1 top-36 border dark:border-gray-700 border-gray-200 AmazingSlider-next-slide z-10">
                    <svg class="size-6 rotate-90">
                        <use href="#chevron" />
                    </svg>
                </button>
            </div>
            </div>
        </section>

        <!-- Latest products -->
        <section class="mx-4 lg:container mt-10 lg:mt-20">
            <!-- SECTION TITLE -->
            <div
                class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
                <div class="flex items-center gap-x-2 sm:gap-x-4">
                    <span class="size-12 hidden xs:flex rounded-lg bg-white shadow-lg dark:bg-gray-800 flex-center">
                        <svg class="size-7 text-gray-700 dark:text-gray-100">
                            <use href="#mobile"></use>
                        </svg>
                    </span>
                    <div class="space-y-1 md:space-y-1">
                        <h3 class="text-xl md:text-2xl font-MorabbaMedium text-gray-800 dark:text-gray-50">جدید ترین
                            <span class="text-blue-600 dark:text-blue-500">محصولات</span>
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">جدیدترین و بروزترین محصولات</p>
                    </div>
                </div>
                <div class="w-full xs:w-auto flex justify-between xs:justify-end  items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <button class="slider-navigate_btn LatestProducts-prev-slide">
                            <svg class="size-6 -rotate-90">
                                <use href="#chevron" />
                            </svg>
                        </button>
                        <button class="slider-navigate_btn LatestProducts-next-slide">
                            <svg class="size-6 rotate-90">
                                <use href="#chevron" />
                            </svg>
                        </button>
                    </div>
                    <a href="shop.html"
                        class="group shadow-xl text-sm md:text-base flex gap-x-1.5 items-center px-2 h-10 md:px-3 text-white bg-blue-600 rounded-xl">
                        <p>مشاهده همه</p>
                        <span
                            class="w-7 h-7 rounded-full bg-blue-500 flex-center md:group-hover:-translate-x-1 transition-transform duration-300">
                            <svg class="size-5">
                                <use href="#arrow" />
                            </svg>
                        </span>
                    </a>
                </div>

            </div>
            <!-- Latest products Slider -->
            <div class="swiper LatestProducts mt-5 w-full">
                <div class="swiper-wrapper py-5">
                    <!-- PRODUCT ITEM -->
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/1.png"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/2.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/3.png"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/4.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/5.webp"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/6.webp" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/7.webp"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/8.webp" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/1.png"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/2.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/3.png"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/4.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BANNER -->
        <section
            class="mx-4 lg:container mt-10 lg:mt-20 flex flex-col lg:flex-row items-center gap-5 child:rounded-xl child:overflow-hidden">
            <a href="shop.html" class="group">
                <img src="images/banner/1.webp" class="group-hover:scale-105 transition-transform duration-300"
                    alt="">
            </a>
            <a href="shop.html" class="group">
                <img src="images/banner/2.webp" class="group-hover:scale-105 transition-transform duration-300"
                    alt="">
            </a>
        </section>

        <!-- Best-selling products -->
        <section class="mx-4 lg:container mt-10 lg:mt-20">
            <!-- SECTION TITLE -->
            <div
                class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
                <div class="flex items-center gap-x-2 sm:gap-x-4">
                    <span class="size-12 hidden xs:flex rounded-lg bg-white shadow-lg dark:bg-gray-800 flex-center">
                        <svg class="size-7 text-gray-700 dark:text-gray-100">
                            <use href="#mobile"></use>
                        </svg>
                    </span>
                    <div class="space-y-1 md:space-y-1">
                        <h3 class="text-xl md:text-2xl font-MorabbaMedium text-gray-800 dark:text-gray-50">محصولات
                            <span class="text-blue-600 dark:text-blue-500">پرفروش </span>
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">جدیدترین و بروزترین محصولات</p>
                    </div>
                </div>
                <div class="w-full xs:w-auto flex justify-between xs:justify-end  items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <button class="slider-navigate_btn BestSelling-prev-slide">
                            <svg class="size-6 -rotate-90">
                                <use href="#chevron" />
                            </svg>
                        </button>
                        <button class="slider-navigate_btn BestSelling-next-slide">
                            <svg class="size-6 rotate-90">
                                <use href="#chevron" />
                            </svg>
                        </button>
                    </div>
                    <a href="main.html"
                        class="group shadow-xl text-sm md:text-base flex gap-x-1.5 items-center px-2 h-10 md:px-3 text-white bg-blue-600 rounded-xl">
                        <p>مشاهده همه</p>
                        <span
                            class="w-7 h-7 rounded-full bg-blue-500 flex-center md:group-hover:-translate-x-1 transition-transform duration-300">
                            <svg class="size-5">
                                <use href="#arrow" />
                            </svg>
                        </span>
                    </a>
                </div>

            </div>
            <!-- Latest products Slider -->
            <div class="swiper BestSelling mt-5 w-full">
                <div class="swiper-wrapper py-5">
                    <!-- PRODUCT ITEM -->
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/1.png"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/2.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/3.png"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/4.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/5.webp"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/6.webp" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/7.webp"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/8.webp" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/1.png"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/2.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="images/products/3.png"
                                alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                src="images/products/4.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BRAND -->
        <section class="mx-4 lg:container mt-10 lg:mt-20">
            <!-- SECTION TITLE -->
            <div
                class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
                <div class="flex items-center gap-x-2 sm:gap-x-4">
                    <span class="size-12 hidden xs:flex rounded-lg bg-white shadow-lg dark:bg-gray-800 flex-center">
                        <svg class="size-7 text-gray-700 dark:text-gray-100">
                            <use href="#check-badge"></use>
                        </svg>
                    </span>
                    <div class="space-y-1 md:space-y-1">
                        <h3 class="text-xl md:text-2xl font-MorabbaMedium text-gray-800 dark:text-gray-50">محبوب‌ترین
                            <span class="text-blue-600 dark:text-blue-500">برندها</span>
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">جدیدترین و بروزترین برندها</p>
                    </div>
                </div>
                <div class="w-full xs:w-auto flex justify-between xs:justify-end  items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <button class="slider-navigate_btn brand-prev-slide">
                            <svg class="size-6 -rotate-90">
                                <use href="#chevron" />
                            </svg>
                        </button>
                        <button class="slider-navigate_btn brand-next-slide">
                            <svg class="size-6 rotate-90">
                                <use href="#chevron" />
                            </svg>
                        </button>
                    </div>
                    <a href="shop.html"
                        class="group shadow-xl text-sm md:text-base flex gap-x-1.5 items-center px-2 h-10 md:px-3 text-white bg-blue-600 rounded-xl">
                        <p>مشاهده همه</p>
                        <span
                            class="w-7 h-7 rounded-full bg-blue-500 flex-center md:group-hover:-translate-x-1 transition-transform duration-300">
                            <svg class="size-5">
                                <use href="#arrow" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <!-- BRAND Slider -->
            <div class="swiper BrandSlider mt-5 w-full">
                <div class="swiper-wrapper py-5 w-full">
                    <!-- PRODUCT ITEM -->
                    <div class="swiper-slide brand-card group">
                        <img src="images/brand/1.png" alt="">
                    </div>
                    <div class="swiper-slide brand-card group">
                        <img src="images/brand/6.webp" alt="">
                    </div>
                    <div class="swiper-slide brand-card group">
                        <img src="images/brand/5.webp" alt="">
                    </div>
                    <div class="swiper-slide brand-card group">
                        <img src="images/brand/4.webp" alt="">
                    </div>
                    <div class="swiper-slide brand-card group">
                        <img src="images/brand/3.webp" alt="">
                    </div>
                    <div class="swiper-slide brand-card group">
                        <img src="images/brand/2.png" alt="">
                    </div>
                    <div class="swiper-slide brand-card group">
                        <img src="images/brand/7.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Hottest products -->
        <section class="mx-4 lg:container mt-10 lg:mt-20 ">
            <div class="bg-white dark:bg-gray-800 shadow rounded-xl h-[420px] p-5 flex flex-col gap-y-2 relative">
                <!-- Title -->
                <div class="flex-center gap-x-1">
                    <svg class="size-6 pb-1 text-orange-400">
                        <use href="#fire"></use>
                    </svg>
                    <h4 class="font-DanaMedium text-lg text-gray-800 dark:text-gray-200">داغ ترین چند ساعت گذشته </h4>
                </div>
                <div class="swiper HottestSlider w-full">
                    <div class="swiper-wrapper w-full">
                        <!-- PRODUCT ITEM -->
                        <div class="swiper-slide hottest-slide">
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/1.png" alt="">
                                <p class="hottest-slide_text ">
                                    مانیتور گیمینگ ایسوس مدل ROG Swift PG259QN
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/3.png" alt="">
                                <p class="hottest-slide_text ">
                                    کنسول بازی پلی استیشن 5 نسخه دیسک دار
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/7.webp" alt="">
                                <p class="hottest-slide_text ">
                                    ساعت هوشمند سامسونگ مدل Galaxy Watch 6
                                </p>
                            </a>
                        </div>
                        <div class="swiper-slide hottest-slide">
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/1.png" alt="">
                                <p class="hottest-slide_text ">
                                    لپ تاپ 14 اینچی لنوو مدل ThinkPad X1 Carbon
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/3.png" alt="">
                                <p class="hottest-slide_text ">
                                    گوشی موبایل سامسونگ مدل Galaxy S23 Ultra
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/7.webp" alt="">
                                <p class="hottest-slide_text ">
                                    هدفون بی‌سیم اپل مدل AirPods Pro 2
                                </p>
                            </a>
                        </div>
                        <div class="swiper-slide hottest-slide">
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/1.png" alt="">
                                <p class="hottest-slide_text ">
                                    مانیتور گیمینگ ایسوس مدل ROG Swift PG259QN
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/3.png" alt="">
                                <p class="hottest-slide_text ">
                                    کنسول بازی پلی استیشن 5 نسخه دیسک دار
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/7.webp" alt="">
                                <p class="hottest-slide_text ">
                                    ساعت هوشمند سامسونگ مدل Galaxy Watch 6
                                </p>
                            </a>
                        </div>
                        <div class="swiper-slide hottest-slide">
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/1.png" alt="">
                                <p class="hottest-slide_text ">
                                    لپ تاپ 14 اینچی لنوو مدل ThinkPad X1 Carbon
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/3.png" alt="">
                                <p class="hottest-slide_text ">
                                    گوشی موبایل سامسونگ مدل Galaxy S23 Ultra
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/7.webp" alt="">
                                <p class="hottest-slide_text ">
                                    هدفون بی‌سیم اپل مدل AirPods Pro 2
                                </p>
                            </a>
                        </div>
                        <div class="swiper-slide hottest-slide">
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/1.png" alt="">
                                <p class="hottest-slide_text ">
                                    مانیتور گیمینگ ایسوس مدل ROG Swift PG259QN
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/3.png" alt="">
                                <p class="hottest-slide_text ">
                                    کنسول بازی پلی استیشن 5 نسخه دیسک دار
                                </p>
                            </a>
                            <a href="product-details.html" class="hottest-slide_link ">
                                <img class="hottest-slide_img " src="images/products/7.webp" alt="">
                                <p class="hottest-slide_text ">
                                    ساعت هوشمند سامسونگ مدل Galaxy Watch 6
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <button
                    class="slider-navigate_btn absolute right-1 top-[47%] border dark:border-gray-700 border-gray-200 Hottest-prev-slide z-10">
                    <svg class="size-6 -rotate-90">
                        <use href="#chevron" />
                    </svg>
                </button>
                <button
                    class="slider-navigate_btn absolute left-1 top-[47%] border dark:border-gray-700 border-gray-200 Hottest-next-slide z-10">
                    <svg class="size-6 rotate-90">
                        <use href="#chevron" />
                    </svg>
                </button>
            </div>
        </section>

        <!-- ARTICLE -->
        <section class="mx-4 lg:container mt-10 lg:mt-20">
            <!-- SECTION TITLE -->
            <div
                class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
                <div class="flex items-center gap-x-2 sm:gap-x-4">
                    <span class="size-12 hidden xs:flex rounded-lg bg-white shadow-lg dark:bg-gray-800 flex-center">
                        <svg class="size-7 text-gray-700 dark:text-gray-100">
                            <use href="#check-badge"></use>
                        </svg>
                    </span>
                    <div class="space-y-1 md:space-y-1">
                        <h3 class="text-xl md:text-2xl font-MorabbaMedium text-gray-800 dark:text-gray-50">محبوب‌ترین
                            <span class="text-blue-600 dark:text-blue-500">مقالات</span>
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">جدیدترین و بروزترین مقالات</p>
                    </div>
                </div>
                <div class="w-full xs:w-auto flex justify-between xs:justify-end  items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <button class="slider-navigate_btn articleSlider-prev-slide">
                            <svg class="size-6 -rotate-90">
                                <use href="#chevron" />
                            </svg>
                        </button>
                        <button class="slider-navigate_btn articleSlider-next-slide">
                            <svg class="size-6 rotate-90">
                                <use href="#chevron" />
                            </svg>
                        </button>
                    </div>
                    <a href="articles.html"
                        class="group shadow-xl text-sm md:text-base flex gap-x-1.5 items-center px-2 h-10 md:px-3 text-white bg-blue-600 rounded-xl">
                        <p>مشاهده همه</p>
                        <span
                            class="w-7 h-7 rounded-full bg-blue-500 flex-center md:group-hover:-translate-x-1 transition-transform duration-300">
                            <svg class="size-5">
                                <use href="#arrow" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="swiper articleSlider w-full mt-5">
                <div class="swiper-wrapper w-full py-5">
                    <!-- ITEM -->
                    <div class="swiper-slide group article-box">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="images/articles/1.webp" class="article-box_img" alt="" />
                            <div
                                class="absolute opacity-0 left-0 top-0 bottom-0 right-0 bg-black/60 flex items-center justify-center group-hover:opacity-100 duration-300 transition-all rounded-bl-3xl rounded-tr-3xl">
                                <a href="article-details.html"
                                    class="flex items-center px-2 py-1 gap-x-1 font-DanaMedium rounded-lg border-2 border-white text-white">
                                    <p>ادامه مطالب</p>
                                    <svg class="w-4 h-4 rotate-90">
                                        <use href="#chevron"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 py-5 px-1">
                            <h2 class="font-DanaDemiBold">بهترین لپ تاپ های بازار ایران [دی ۱۴۰۳] </h2>
                        </div>
                        <span class="flex w-full h-1 py-1 border-t border-gray-100 dark:border-white/10"></span>
                        <div class="flex items-center justify-between text-sm px-1">
                            <span class="flex items-center gap-x-1 text-blue-500 dark:text-sky-400">
                                <svg class="w-4 h-4">
                                    <use href="#calendar"></use>
                                </svg>
                                <p class="mt-1">1403/5/1</p>
                            </span>
                            <span class="flex items-start gap-x-1 text-gray-300">
                                <p class="font-DanaDemiBold">120</p>
                                <svg class="w-4 h-4">
                                    <use href="#eye"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide group article-box">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="images/articles/2.webp" class="article-box_img" alt="" />
                            <div
                                class="absolute opacity-0 left-0 top-0 bottom-0 right-0 bg-black/60 flex items-center justify-center group-hover:opacity-100 duration-300 transition-all rounded-bl-3xl rounded-tr-3xl">
                                <a href="article-details.html"
                                    class="flex items-center px-2 py-1 gap-x-1 font-DanaMedium rounded-lg border-2 border-white text-white">
                                    <p>ادامه مطالب</p>
                                    <svg class="w-4 h-4 rotate-90">
                                        <use href="#chevron"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 py-5 px-1">
                            <h2 class="font-DanaDemiBold">بهترین گوشی های بازار ایران [دی ۱۴۰۳] </h2>
                        </div>
                        <span class="flex w-full h-1 py-1 border-t border-gray-100 dark:border-white/10"></span>
                        <div class="flex items-center justify-between text-sm px-1">
                            <span class="flex items-center gap-x-1 text-blue-500 dark:text-sky-400">
                                <svg class="w-4 h-4">
                                    <use href="#calendar"></use>
                                </svg>
                                <p class="mt-1">1403/5/1</p>
                            </span>
                            <span class="flex items-start gap-x-1 text-gray-300">
                                <p class="font-DanaDemiBold">120</p>
                                <svg class="w-4 h-4">
                                    <use href="#eye"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide group article-box">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="images/articles/3.webp" class="article-box_img" alt="" />
                            <div
                                class="absolute opacity-0 left-0 top-0 bottom-0 right-0 bg-black/60 flex items-center justify-center group-hover:opacity-100 duration-300 transition-all rounded-bl-3xl rounded-tr-3xl">
                                <a href="article-details.html"
                                    class="flex items-center px-2 py-1 gap-x-1 font-DanaMedium rounded-lg border-2 border-white text-white">
                                    <p>ادامه مطالب</p>
                                    <svg class="w-4 h-4 rotate-90">
                                        <use href="#chevron"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 py-5 px-1">
                            <h2 class="font-DanaDemiBold">بهترین هدیه های دیجیتال [دی ۱۴۰۳] </h2>
                        </div>
                        <span class="flex w-full h-1 py-1 border-t border-gray-100 dark:border-white/10"></span>
                        <div class="flex items-center justify-between text-sm px-1">
                            <span class="flex items-center gap-x-1 text-blue-500 dark:text-sky-400">
                                <svg class="w-4 h-4">
                                    <use href="#calendar"></use>
                                </svg>
                                <p class="mt-1">1403/5/1</p>
                            </span>
                            <span class="flex items-start gap-x-1 text-gray-300">
                                <p class="font-DanaDemiBold">120</p>
                                <svg class="w-4 h-4">
                                    <use href="#eye"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide group article-box">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="images/articles/4.webp" class="article-box_img" alt="" />
                            <div
                                class="absolute opacity-0 left-0 top-0 bottom-0 right-0 bg-black/60 flex items-center justify-center group-hover:opacity-100 duration-300 transition-all rounded-bl-3xl rounded-tr-3xl">
                                <a href="article-details.html"
                                    class="flex items-center px-2 py-1 gap-x-1 font-DanaMedium rounded-lg border-2 border-white text-white">
                                    <p>ادامه مطالب</p>
                                    <svg class="w-4 h-4 rotate-90">
                                        <use href="#chevron"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 py-5 px-1">
                            <h2 class="font-DanaDemiBold">بهترین هارد های بازار ایران [دی ۱۴۰۳] </h2>
                        </div>
                        <span class="flex w-full h-1 py-1 border-t border-gray-100 dark:border-white/10"></span>
                        <div class="flex items-center justify-between text-sm px-1">
                            <span class="flex items-center gap-x-1 text-blue-500 dark:text-sky-400">
                                <svg class="w-4 h-4">
                                    <use href="#calendar"></use>
                                </svg>
                                <p class="mt-1">1403/5/1</p>
                            </span>
                            <span class="flex items-start gap-x-1 text-gray-300">
                                <p class="font-DanaDemiBold">120</p>
                                <svg class="w-4 h-4">
                                    <use href="#eye"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="swiper-slide group article-box">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="images/articles/1.webp" class="article-box_img" alt="" />
                            <div
                                class="absolute opacity-0 left-0 top-0 bottom-0 right-0 bg-black/60 flex items-center justify-center group-hover:opacity-100 duration-300 transition-all rounded-bl-3xl rounded-tr-3xl">
                                <a href="article-details.html"
                                    class="flex items-center px-2 py-1 gap-x-1 font-DanaMedium rounded-lg border-2 border-white text-white">
                                    <p>ادامه مطالب</p>
                                    <svg class="w-4 h-4 rotate-90">
                                        <use href="#chevron"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 py-5 px-1">
                            <h2 class="font-DanaDemiBold">بهترین هارد های بازار ایران [دی ۱۴۰۳] </h2>
                        </div>
                        <span class="flex w-full h-1 py-1 border-t border-gray-100 dark:border-white/10"></span>
                        <div class="flex items-center justify-between text-sm px-1">
                            <span class="flex items-center gap-x-1 text-blue-500 dark:text-sky-400">
                                <svg class="w-4 h-4">
                                    <use href="#calendar"></use>
                                </svg>
                                <p class="mt-1">1403/5/1</p>
                            </span>
                            <span class="flex items-start gap-x-1 text-gray-300">
                                <p class="font-DanaDemiBold">120</p>
                                <svg class="w-4 h-4">
                                    <use href="#eye"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <div
            class="container w-full mt-10 lg:mt-20 flex flex-wrap items-center justify-between gap-6 child:text-sm child:gap-y-1 child:cursor-pointer">
            <!-- item -->
            <span class="flex-col items-center justify-center hidden md:flex">
                <img class="w-14 h-14" src="images/svg/1.svg" alt="">
                <p class="text-gray-500 dark:text-gray-300">امکان تحویل اکسپرس</p>
            </span>
            <span class="flex flex-col items-center justify-center">
                <img class="w-14 h-14" src="images/svg/2.svg" alt="">
                <p class="text-gray-500 dark:text-gray-300">ضمانت اصل بودن کالا</p>
            </span>
            <span class="flex flex-col items-center justify-center">
                <img class="w-14 h-14" src="images/svg/3.svg" alt="">
                <p class="text-gray-500 dark:text-gray-300">ضمانت بازگشت کالا</p>
            </span>
            <span class="flex flex-col items-center justify-center">
                <img class="w-14 h-14" src="images/svg/4.svg" alt="">
                <p class="text-gray-500 dark:text-gray-300">پشتیبانی 24 ساعته</p>
            </span>
            <span class="flex flex-col items-center justify-center">
                <img class="w-14 h-14" src="images/svg/5.svg" alt="">
                <p class="text-gray-500 dark:text-gray-300">امکان پرداخت در محل</p>
            </span>
        </div>
    </main>

    <!-- Footer -->
    <footer class="md:container my-12">
        <div class=" relative w-full bg-gray-900 dark:bg-gray-800 text-white rounded-2xl p-4 lg:p-9">
            <div class="flex items-start flex-col gap-x-7 lg:gap-x-10 gap-y-10 lg:flex-row flex-wrap">
                <div class="flex-[2] w-full">
                    <h2 class="footer_title">درباره کارین شاپ</h2>
                    <p class="leading-8 text-gray-400 mb-5">در فروشگاه آنلاین ما، بهترین مدل‌های موبایل و لپ‌تاپ از
                        برندهای معتبر جهانی را با کیفیت بالا و قیمتی مناسب برای شما فراهم آورده‌ایم. با انتخاب محصولات
                        ما، تجربه‌ای حرفه‌ای و لذت‌بخش از فناوری را در خانه یا محل کار داشته باشید.

                    </p>
                    <div class="flex items-center gap-x-4">
                        <a href="#" class="size-10 bg-gray-950 rounded-xl flex-center">
                            <svg class="size-6 text-blue-500">
                                <use href="#instagram"></use>
                            </svg>
                        </a>
                        <a href="#" class="size-10 bg-gray-950 rounded-xl flex-center">
                            <svg class="size-6 text-blue-500">
                                <use href="#whatsapp"></use>
                            </svg>
                        </a>
                        <a href="#" class="size-10 bg-gray-950 rounded-xl flex-center">
                            <svg class="size-6 text-blue-500">
                                <use href="#linkedin"></use>
                            </svg>
                        </a>
                        <a href="#" class="size-10 bg-gray-950 rounded-xl flex-center">
                            <svg class="size-6 text-blue-500">
                                <use href="#youtube"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex-1 flex flex-col w-full lg:w-auto">
                    <h2 class="footer_title">دسترسی سریع</h2>
                    <div class="flex gap-x-10 child:space-y-2 child:text-gray-400">
                        <ul class="child-hover:text-blue-500 child:transition-all">
                            <li>
                                <a href="main.html">صفحه اصلی</a>
                            </li>
                            <li>
                                <a href="shop.html">فروشگاه</a>
                            </li>
                            <li>
                                <a href="contact-us.html">تماس با ما </a>
                            </li>
                            <li>
                                <a href="questions.html">سوالات متداول </a>
                            </li>
                        </ul>
                        <ul class="child-hover:text-blue-500 md:hidden child:transition-colors">
                            <li>
                                <a href="login.html"> ثبت نام | ورود </a>
                            </li>
                            <li>
                                <a href="articles.html">وبلاگ</a>
                            </li>
                            <li>
                                <a href="#">شرایط و قوانین</a>
                            </li>
                            <li>
                                <a href="#">حریم خصوصی </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-[1.5] w-full">
                    <h2 class="footer_title">تماس با ما</h2>
                    <ul
                        class="flex flex-col child:flex child:text-gray-400 child:items-center child:justify-between gap-y-6">
                        <li>
                            <p>شماره تماس :</p>
                            <p dir="ltr">012-345 678</p>
                        </li>
                        <li>
                            <p>آدرس ایمیل :</p>
                            <p>KarinShop@gmail.com</p>
                        </li>
                        <li>
                            <p>آدرس :</p>
                            <p>بلوار آزادی، استاد معین پلاک ۱۰</p>
                        </li>
                    </ul>
                </div>
                <div
                    class="flex-1 w-full md:w-1/6 flex flex-col items-end justify-end ml-5 md:ml-0 md:mr-5">

                    <div class="flex justify-center md:justify-end items-center gap-x-3  child:bg-gray-950 child:dark:bg-gray-900">
                        <span class="w-16 h-16 lg:w-20 lg:h-20 flex-center rounded-xl ">
                            <img class="w-16 h-16" src="images/footer/1.png" alt="">
                        </span>
                        <span class="w-16 h-16 lg:w-20 lg:h-20 flex-center rounded-xl ">
                            <img class="w-16 h-16" src="images/footer/2.png" alt="">
                        </span>
                    </div>
                    <!-- GO TOP --> 
                    <a href="#" class="ring-2 ring-gray-400 text-gray-300 w-32 rounded-lg text-sm flex-center gap-x-2 py-1.5 px-2 mt-10 ">
                        بازگشت به بالا
                        <svg class="size-4 rotate-180">
                            <use href="#chevron" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- DIV -->
            <div
                class="w-full rounded-xl bg-gray-950 dark:bg-gray-900 flex flex-col md:flex-row gap-y-4 items-center justify-between p-4 md:p-6 mt-6">
                <a href="#" class="text-3xl font-MorabbaMedium">
                    <span class="text-blue-500">کارین</span> شاپ
                </a>
                <div
                    class="bg-gray-900 dark:bg-gray-800 p-1.5 rounded-xl w-72 lg:w-[350px] flex items-center justify-between">
                    <input type="text" class="bg-transparent text-gray-200 px-2 w-full"
                        placeholder="از جدیدترین تخفیف ها با خبر شوید                    " />
                    <button class="px-4 py-1 bg-blue-500 rounded-xl font-DanaMedium">
                        ثبت
                    </button>
                </div>
            </div>
        </div>
        <p class="text-center text-sm my-4 text-gray-400">Copyright © 2025 Karin. All rights reserved.</p>
    </footer>

    <!-- Overlay -->
    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <script src="swiper/swiper.js"></script>
    <script src="scripts/app.js"></script>
    <script type="module" src="scripts/slider.js"></script>
    <script src="scripts/timer.js"></script>
</body>
</html>