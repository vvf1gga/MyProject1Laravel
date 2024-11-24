<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсовий проект - Облік страхових договорів</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, footer {
            background-color: #222;
            color: white;
            padding: 10px;
        }

        main {
            flex: 1;
        }

        .feature-card {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: scale(1.05); 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .feature-card h5 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Header with navigation -->
    <header class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Kyrsova/public/">Облік страхових договорів</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/Kyrsova/public/">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Kyrsova/public/contracts">Контракти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Kyrsova/public/services">Послуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Kyrsova/public/incidents">Випадки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Kyrsova/public/reports">Звіти</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container text-center py-5">
        <h1>Система обліку страхових договорів</h1>
        <p>Керуйте договорами, страховими випадками та звітністю з легкістю!</p>
        <a href="/login" class="btn btn-light">Увійти до системи</a>

        <!-- Features Section -->
        <div class="row my-5">
            <div class="col-md-4">
                <a href="/Kyrsova/public/contracts" class="feature-card d-block">
                    <h5>Облік контрактів</h5>
                    <p>Зберігайте всі дані про договори в одному місці.</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/Kyrsova/public/services" class="feature-card d-block">
                    <h5>Оптимізація платежів</h5>
                    <p>Контролюйте своєчасність виплат.</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/Kyrsova/public/reports" class="feature-card d-block">
                    <h5>Звітність</h5>
                    <p>Автоматична генерація звітів для аналізу.</p>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3">
        <p>© 2024 Курсовий проект.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>