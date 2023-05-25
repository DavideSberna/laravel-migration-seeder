<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">BoolTrain</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                </ul>
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorie
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('price')}}">Migliori prezzi</a></li>
                      <li><a class="dropdown-item" href="{{route('delay')}}">In ritardo</a></li>
                      <li><a class="dropdown-item" href="{{route('lastStart')}}">In partenza</a></li>
                    </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>

    <main class="bg-light">
        <section class="container-fluid">
            @yield('content')
        </section>
    </main>

    <footer class="bg-dark">
        <section class="container">
            <p class="text-white">footer del mio brand</p>
        </section>
    </footer>

</body>

</html>
