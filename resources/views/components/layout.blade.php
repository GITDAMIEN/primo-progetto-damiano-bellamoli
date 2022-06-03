<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/presto.css">
    <title>Presto.it | {{$title ?? ''}}</title>
    <link rel="shortcut icon" href="/media/pLogoNewNew.png" type="image/x-icon">
</head>
<body>

    <x-header/>
    <x-navbar/>

    <div class="min-vh-100">
        {{$slot}}
    </div>


    <!-- Newsletter -->
    <x-newsletter/>

    <!-- Footer  -->
    <x-footer/>

    <!-- Easter Egg Toast Message -->
    <div id="easterEggToastMessage" class="toast align-items-center text-white back-sec border-0" role="alert" aria-live="assertive" aria-atomic="true">
    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Swiper Js -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <!-- My JS -->
    @if(Route::currentRouteName()=='welcome')
        <script src="/js/presto.js"></script>
    @elseif(Route::currentRouteName()=='allAds')
        <script src="/js/ads.js"></script>
    @endif        


</body>
</html>