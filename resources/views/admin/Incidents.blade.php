<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страхові випадки - Менеджер</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Kyrsova/public/">Облік страхових договорів</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.contracts') }}">Контракти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}">Послуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.incidents') }}">Випадки</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.payouts') }}">Виплати</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.repts') }}">Звіти</a>
                </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container py-5">
    <h1>Страхові випадки</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Контракт</th>
                <th>Дата випадку</th>
                <th>Опис</th>
                <th>Статус</th>
                <th>Дія</th>
            </tr>
        </thead>
        <tbody>
            @foreach($incidents as $incident)
            <tr>
                <td>{{ $incident->Id }}</td>
                <td>{{ $incident->contract->Id }}</td>
                <td>{{ $incident->IncidentDate }}</td>
                <td>{{ $incident->Description }}</td>
                <td>{{ $incident->status->Name }}</td>
                <td>
                    <button class="btn btn-primary btn-sm">Змінити статус</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>

<footer class="footer">
    <p>© 2024 Курсовий проект. Страхова компанія</p>
    <p>Роль: Адміністратор</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
