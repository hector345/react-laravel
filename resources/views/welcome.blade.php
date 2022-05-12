<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body class="">
    <div class="container" style="padding:20px;">
        <h1 style="text-align:center;">
            <a href="/employee"> Full Stack - Laravel 8 & React Hooks </a>
        </h1>
        <hr>

        <div id="example"></div>
        <script src="{{ url('/js/app.js') }}"></script>
    </div>
</body>

</html>
