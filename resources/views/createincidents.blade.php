<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Додати новий випадок</title>
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
        <h1>Додати новий випадок</h1>
        <form action="/incidents/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="incident_number" class="form-label">Номер випадку</label>
                <input type="text" class="form-control" id="incident_number" name="incident_number" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Дата</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Опис випадку</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Статус</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Розглядається">Розглядається</option>
                    <option value="Закрито">Закрито</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Зберегти</button>
        </form>
    </main>

    <footer class="text-center py-3">
        <p>© 2024 Курсовий проект.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>