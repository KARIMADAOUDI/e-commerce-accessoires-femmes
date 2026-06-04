<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Élégance Acier')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fffafc;
            color: #333;
        }

        .brand-color {
            color: #b76e79;
        }

        .btn-main {
            background-color: #b76e79;
            color: white;
            border-radius: 30px;
            padding: 10px 25px;
        }

        .btn-main:hover {
            background-color: #9f5b65;
            color: white;
        }

        .card-product {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card-product:hover {
            transform: translateY(-5px);
        }

        .section-title {
            font-weight: 700;
            color: #b76e79;
            margin-bottom: 30px;
        }

        footer {
            background-color: #2b2b2b;
            color: white;
        }
    </style>
</head>
<body>

@include('partials.navbar')

<main>
    @yield('content')
</main>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
