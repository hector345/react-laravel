<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Title of the document</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

    </style>
</head>

<body>
    <header>
        <nav class="cyan">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#" class="brand-logo">LOGO</a>
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i
                            class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">item1</a></li>
                        <li><a href="#">item2</a></li>
                        <li><a href="#">item3</a></li>
                        <li><a href="#">item4</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-menu">
                        <li>
                            <div class="userView">
                                <div class="background">
                                    <img src="http://lorempixel.com/output/abstract-q-c-640-480-10.jpg"
                                        alt="Background Sidenav">
                                </div>
                                <a href="#!user"><img class="circle"
                                        src="http://lorempixel.com/output/people-q-c-640-480-9.jpg"
                                        alt="User Image Sidenav"></a>
                                <a href="#!name"><span class="white-text name">John Doe</span></a>
                                <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                            </div>
                        </li>
                        <li><a href="#">item1</a></li>
                        <li><a href="#">item2</a></li>
                        <li><a href="#">item3</a></li>
                        <li><a href="#">item4</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Your content here -->
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->title }}</p>
                    <p>{{ $post->excerpt }}</p>
                </div>
            </div>
        </div>
        {{-- boton de inicio --}}
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <a href="/" class="btn waves-effect waves-light">Inicio</a>
                    <a href="/posts/{{ $post->id }}/edit" class="btn waves-effect waves-light">Editar</a>
                    <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block;">
                    @method('DELETE')
                    @csrf
                        <button class="btn waves-effect waves-light" onclick="return confirm('estas seguro que eliminar?')" type="submit" name="action">Eliminar<i
                                class="material-icons right">send</i>
                        </button>
                    </form>

                </div>
            </div>
            <div class="row">
                {{--seccion de comentarios--}}
                <div class="col s12">
                    <h3>Comentarios</h3>
                    <ul class="collection">
                        @foreach ($comments as $comment)
                        <li class="collection-item">
                            <div>
                                {{ $comment->content }}
                                <a href="#!" class="secondary-content">
                                    {{ $comment->name}}
                                </a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer cyan">
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l6">
                    <h5 class="white-text">First Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                        content.</p>
                </div>
                <div class="col s12 m4 l6">
                    <h5 class="white-text">Second Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                        content.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        $("document").ready(function() {
            $(".button-collapse").sideNav();
        });
    </script>
</body>

</html>
