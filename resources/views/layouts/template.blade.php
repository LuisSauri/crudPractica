<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/styles.css">
        <!--Bootstrap-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    
    <body class="d-flex flex-column h-100">
        <header>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div id="nav-bar">
                            <input id="nav-toggle" type="checkbox" />
                            <div id="nav-header"><a id="nav-title" href="#"></i>Bootstrap</a>
                                <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
                                <hr />
                            </div>
                            <div id="nav-content">
                                <div class="nav-button"><i class="fas fa-solid fa-table"></i><span>Tabla de clientes</span></div>
                                <hr />
                                <div id="nav-content-highlight"></div>
                            </div>
                            <input id="nav-footer-toggle" type="checkbox" />
                            <div id="nav-footer">
                                <div id="nav-footer-heading">
                                    <div id="nav-footer-avatar"><img src="https://gravatar.com/avatar/4474ca42d303761c2901fa819c4f2547" />
                                    </div>
                                    <div id="nav-footer-titlebox"><a id="nav-footer-title" href="#">Ejemplo</a><span
                                            id="nav-footer-subtitle">Admin</span></div>
                                    <label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
                                </div>
                                <div id="nav-footer-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        @yield('content')
                    </div>
            </div>
        </main>

        <footer>
        </footer>
    </body>
</html>