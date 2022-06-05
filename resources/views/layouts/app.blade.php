<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Vetro') }}</title>

    <link href="//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/blog/css/style-starter.css') }}">
  </head>
  <body>

    @include('include.header')
    @yield('content')
    @include('include.footer')


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- Template JavaScript -->
<script src="{{ asset('assets/blog/js/jquery-3.3.1.min.js') }}"></script>

<!-- theme changer js -->
<script src="{{ asset('assets/blog/js/theme-change.js') }}"></script>
<!-- //theme changer js -->

<!-- courses owlcarousel -->
<script src="{{ asset('assets/blog/js/owl.carousel.js') }}"></script>

<!-- bootstrap -->
<script src="{{ asset('assets/blog/js/bootstrap.min.js') }}"></script>

</body>

</html>
