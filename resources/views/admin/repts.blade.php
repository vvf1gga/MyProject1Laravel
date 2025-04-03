<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Звіти - Страхова компанія</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        html, body {
            block-size: 100%;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-block-size: 100vh;
        }
        main {
            flex: 1;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            border-block-start: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>
<div class="wrapper">
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
                        <a class="nav-link" href="{{ route('admin.contracts') }}">Контракти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('admin.index') }}">Послуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.incidents') }}">Випадки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.payouts') }}">Виплати</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.repts') }}">Звіти</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container py-5">
        <h1>Звіти</h1>

        <form method="GET" action="{{ route('admin.repts') }}">
            <div class="row">
                <div class="col-md-4">
                    <label for="report_type">Тип звіту</label>
                    <select id="report_type" name="report_type" class="form-select">
                        <option value="contracts" @selected($reportType == 'contracts')>Контракти</option>
                        <option value="incidents" @selected($reportType == 'incidents')>Страхові випадки</option>
                        <option value="payouts" @selected($reportType == 'payouts')>Виплати</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="date_from">Період з</label>
                    <input type="date" id="date_from" name="date_from" class="form-control" value="{{ old('date_from', $dateFrom) }}">
                </div>

                <div class="col-md-4">
                    <label for="date_to">Період до</label>
                    <input type="date" id="date_to" name="date_to" class="form-control" value="{{ old('date_to', $dateTo) }}">
                </div>

                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Сформувати звіт</button>
                </div>
            </div>
        </form>

        <div class="mt-4">
            <h3>Результати звіту</h3>

            @if($data->isEmpty())
                <p>Немає даних для відображення.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Назва</th>
                            <th>Дата</th>
                            <th>Сума</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->service->Name ?? 'Невідомо' }}</td>
                                <td>{{ $item->StartDate ?? $item->IncidentDate ?? $item->PayoutDate }}</td>
                                <td>{{ $item->Premium ?? $item->PayoutAmount }} грн</td>
                                <td>{{ $item->paymentStatus->Name ?? $item->status->Name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>

    <footer class="footer">
        <p>© 2024 Курсовий проект. Страхова компанія</p>
        <p>Роль: Адміністратор</p>
    </footer>
</div>

</body>
</html>