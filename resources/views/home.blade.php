<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-light .navbar-brand, 
        .navbar-light .navbar-nav .nav-link {
            color: #000000;
        }
        .bg-primary {
            background-color: #E7CCCC !important;
        }
        .text-primary {
            color: #E7CCCC !important;
        }
        .btn-primary {
            background-color: #E7CCCC;
            border-color: #E7CCCC;
        }
        footer {
            background-color: #C1CFA1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Laboratory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Welcome to Laravel Home Page</h1>
            <p class="lead">A simple and beautiful home page built with Laravel and Bootstrap</p>
        </div>
    </header>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Feature 1</h3>
                    <p>Template Engine: Laravel includes a templating system called Blade. The blade allows you to write plain PHP code in your views, but it also provides convenient shortcuts for common tasks such as displaying data, creating forms, and paginating records.
                    Routing: Laravel provides an easy and intuitive way to define routes in your application. Routing allows you to map URLs to specific actions, such as displaying a view, making an API call, or sending an email.</p>
                </div>
                <div class="col-lg-4">
                    <h3>Feature 2</h3>
                    <p>Eloquent ORM: Eloquent is Laravel’s built-in Object Relational Mapper (ORM). It provides an easy way to define relationships between models and allows you to perform database operations in an object-oriented manner.
                    Security: Laravel includes several security features such as input validation, password hashing, and user authentication.</p>
                </div>
                <div class="col-lg-4">
                    <h3>Feature 3</h3>
                    <p>Artisan: Artisan is a command line interface that comes bundled with Laravel. It allows you to perform common tasks such as database migrations, database seeding, and package installation.
                    Testing: Laravel includes a built-in testing framework that allows you to easily test your application. It also provides convenient methods for mocking and stubbing external services.</p>
                </div>
            </div>
        </div>
    </section>


    <footer class="text-white text-center py-3">
        <div class="container">
            <p>© 2024 Laravel App. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
