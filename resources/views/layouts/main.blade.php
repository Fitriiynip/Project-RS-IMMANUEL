<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- My javascript -->
    <script src="js/assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/heroes.css" rel="stylesheet">
    <link href="css/headers.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/assets/dist/css/bootstrap.min.css">

    <title>RS IMMANUEL | </title>
  </head>
  <body>

    @include('partials.navbar')
    <div class="container">
        @yield('container')
    </div>


    @include('partials.content')
    <div class="carousel">
        @yield('carousel')
    </div>


    @include('partials.footer')
    <div class="container mt-4">
        @yield('footer')
    </div>

  </body>
</html>
