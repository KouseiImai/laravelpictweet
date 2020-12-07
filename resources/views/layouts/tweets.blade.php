<html>
  <head>
    <title>Pictweet</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/png" href="/image/favicon.png">
  </head>

  <body>
    @component('components.header')
    @endcomponent
    
    @yield('content')

    @component('components.footer')
    @endcomponent

  </body>
</html>