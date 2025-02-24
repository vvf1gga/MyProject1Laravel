<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Послуги - Страхова компанія</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            block-size: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            flex: 1;
            max-inline-size: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2rem;
            margin-block-end: 20px;
            text-align: center;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .btn {
            font-size: 1rem;
            padding: 8px 15px;
        }

        header, footer {
            background-color: #222;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Kyrsova/public/">Облік страхових договорів</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/Kyrsova/public/contracts">Контракти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Kyrsova/public/services">Послуги</a>
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

    <div class="container">
        <h1>Управління послугами</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Назва послуги</th>
                    <th>Опис</th>
                    <th>Ціна</th>
                    <th>Дії</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Автострахування</td>
                    <td>Повне КАСКО</td>
                    <td>5000 грн</td>
                    <td>
                        <button class="btn btn-warning">Редагувати</button>
                        <button class="btn btn-danger">Видалити</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Медичне страхування</td>
                    <td>Договір на рік</td>
                    <td>12000 грн</td>
                    <td>
                        <button class="btn btn-warning">Редагувати</button>
                        <button class="btn btn-danger">Видалити</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-success">Додати нову послугу</button>
    </div>

    <footer>
        <p>&copy; 2024 Курсовий проект.</p>
    </footer>
</body>
</html>
