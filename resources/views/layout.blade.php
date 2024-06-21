<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Pizzeria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Registrate</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Ordena</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Mis Pedidos</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <section class="mt-5 mb-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Nuestra pizzeria</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto dolore velit tempora laborum omnis a accusantium asperiores. Dicta quasi ad iste qui incidunt. Veniam beatae expedita dolorum, vitae reprehenderit laudantium.
                    Minus in suscipit dignissimos doloremque quo minima illo tempora recusandae quis voluptatem debitis impedit qui, sequi quisquam soluta vero, omnis enim! Error ab maiores, repellat culpa quaerat sed dolor consequatur.
                    Quos a non commodi eum repellat earum magni assumenda deleniti nesciunt corporis, recusandae reiciendis voluptatum dolores quis quod ipsam nostrum! Deleniti et hic ut corporis omnis voluptatibus, veniam nesciunt iste!</p>
                    <a href="{{ route('pizzas.index')}}" class="btn btn-success">Crear</a>
                </div>
            </div>
        </section>
        <hr>
        <!-- Contenido a mostrar -->
        @yield("contenido")
        <hr>
        <footer class="mt-5">
            <p class="text-center"> Mi Pizzeria.</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
