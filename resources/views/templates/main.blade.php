<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<style>
    a {
        box-shadow: inset 0 0 0 0 #54b3d6;
        color: #54b3d6;

        margin: 10 -.25rem;
        transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
    }

    a:hover {
        color: #fff;
        box-shadow: inset 300px 0 0 0 #54b3d6;
        ;
    }

    a {
        color: #54b3d6;
        font-family: 'Poppins', sans-serif;
        font-size: 27px;
        font-weight: 700;
        line-height: 1.5;
        text-decoration: none;
    }
</style>

<body>

    <header class="text-center" style="background: grey">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contacts') }}">Contacts</a>
        <a href="{{ route('adminfeedbacks') }}">Admin Feedback</a>
        <a href="{{ route('clientfeedbacks') }}">Client Feedback</a>
    </header>

    <div class="container">@yield('content')</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
