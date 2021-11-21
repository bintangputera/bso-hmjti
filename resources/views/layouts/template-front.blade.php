<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>BSO HMJTI-Kampus Bondowoso</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
      <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo.png') }}" type="image/x-icon">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
      <link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
      @stack('css')
    </head>
    <body>
    {{-- header --}}
       @include('components.frontend.header')
      <main>
        @yield('content')
      </main>
      @include('components.frontend.footer')
      @include('components.frontend.modal')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script src="https://cdn.plyr.io/3.6.9/plyr.polyfilled.js"></script>
      <script>
        const player = new Plyr('#player');

      </script>
      @stack('js')
    </body>
  </html>
