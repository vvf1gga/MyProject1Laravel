<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контракти - Курсовий проект</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        header, footer {
            background-color: #222;
            color: white;
            padding: 10px;
        }

        main {
            margin-top: 20px;
        }

        .contract-card {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .contract-card h5 {
            font-size: 1.25rem;
        }

        .contract-card p {
            color: #555;
        }

        .table th, .table td {
            vertical-align: middle;
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
                        <a class="nav-link" href="/Kyrsova/public/">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Kyrsova/public/contracts">Контракти</a>
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
    <main class="container">
        <h1>Контракти</h1>
        <p>Управляйте вашими страховиими контрактами, додавайте нові або редагуйте існуючі.</p>

        <!-- Form to add new contract -->
        <div class="contract-card">
            <h5>Додати новий контракт</h5>
            <form action="/contracts" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="contract_name" class="form-label">Назва контракту</label>
                    <input type="text" class="form-control" id="contract_name" name="contract_name" required>
                </div>
                <div class="mb-3">
                    <label for="contract_date" class="form-label">Дата укладення</label>
                    <input type="date" class="form-control" id="contract_date" name="contract_date" required>
                </div>
                <div class="mb-3">
                    <label for="contract_details" class="form-label">Деталі контракту</label>
                    <textarea class="form-control" id="contract_details" name="contract_details" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Додати контракт</button>
            </form>
        </div>

        <!-- Contracts Table -->
        <h2 class="my-4">Список контрактів</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Назва</th>
                    <th>Дата укладення</th>
                    <th>Деталі</th>
                    <th>Дії</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example of contract data, replace with dynamic data from database -->
                <tr>
                    <td>Контракт 1</td>
                    <td>2024-01-15</td>
                    <td>Деталі контракту 1</td>
                    <td>
                        <a href="/contracts/edit/1" class="btn btn-warning">Редагувати</a>
                        <a href="/contracts/delete/1" class="btn btn-danger">Видалити</a>
                    </td>
                </tr>
                <tr>
                    <td>Контракт 2</td>
                    <td>2024-02-01</td>
                    <td>Деталі контракту 2</td>
                    <td>
                        <a href="/contracts/edit/2" class="btn btn-warning">Редагувати</a>
                        <a href="/contracts/delete/2" class="btn btn-danger">Видалити</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3">
        <p>© 2024 Курсовий проект.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
