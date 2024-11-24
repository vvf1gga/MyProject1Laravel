<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страхові випадки</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
                        <a class="nav-link" href="/Kyrsova/public/contracts">Контракти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Kyrsova/public/services">Послуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Kyrsova/public/incidents">Випадки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Kyrsova/public/reports">Звіти</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container py-5">
        <h1>Страхові випадки</h1>
        <p>Переглядайте, додавайте та редагуйте інформацію про страхові випадки.</p>

        <!-- Example table of incidents, data can be dynamically filled -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Номер випадку</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Опис</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Дії</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>101</td>
                    <td>01.05.2024</td>
                    <td>ДТП на перехресті</td>
                    <td>Розглядається</td>
                    <td>
                        <button class="btn btn-warning">Редагувати</button>
                        <button class="btn btn-danger">Видалити</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>102</td>
                    <td>15.06.2024</td>
                    <td>Пожежа в будинку</td>
                    <td>Закрито</td>
                    <td>
                        <button class="btn btn-warning">Редагувати</button>
                        <button class="btn btn-danger">Видалити</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="/Kyrsova/public/createincidents" class="btn btn-success">Додати новий випадок</a>
    </main>

    <footer class="text-center py-3">
        <p>© 2024 Курсовий проект.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>