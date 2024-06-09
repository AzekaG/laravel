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

    .reveal {
        position: relative;
        display: flex;
        color: #6ee1f5;
        font-size: 2em;
        font-family: Raleway, sans-serif;
        letter-spacing: 3px;
        text-transform: uppercase;
        white-space: pre;

        span {
            opacity: 0;
            transform: scale(0);
            animation: fadeIn 2.4s forwards;
        }

        &::before,
        &::after {
            position: absolute;
            content: "";
            top: 0;
            bottom: 0;
            width: 2px;
            height: 100%;
            background: white;
            opacity: 0;
            transform: scale(0);
        }

        &::before {
            left: 50%;
            animation: slideLeft 1.5s cubic-bezier(0.7, -0.6, 0.3, 1.5) forwards;
        }

        &::after {
            right: 50%;
            animation: slideRight 1.5s cubic-bezier(0.7, -0.6, 0.3, 1.5) forwards;
        }
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes slideLeft {
        to {
            left: -6%;
            opacity: 1;
            transform: scale(0.9);
        }
    }

    @keyframes slideRight {
        to {
            right: -6%;
            opacity: 1;
            transform: scale(0.9);
        }
    }
</style>

<body>

    <header class="text-center" style="background: grey">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contacts') }}">Contacts</a>
        <a href="/admin/books/">Books</a>
        <a href="{{ route('adminfeedbacks') }}">Admin Feedback</a>
        <a href="{{ route('clientfeedbacks') }}">Client Feedback</a>
        <a href="{{ route('userIndex') }}">Users</a>
    </header>

    <div class="container">@yield('content')</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        let duration = 0.8;
        let delay = 0.3;
        let revealText = document.querySelector(".reveal");
        let letters = revealText.textContent.split("");
        revealText.textContent = "";
        let middle = letters.filter(e => e !== " ").length / 2;
        letters.forEach((letter, i) => {
            let span = document.createElement("span");
            span.textContent = letter;
            span.style.animationDelay = `${delay + Math.abs(i - middle) * 0.1}s`;
            revealText.append(span);
        });
    </script>
</body>

</html>
