<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Виплати - Страхова компанія</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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
                        <a class="nav-link" href="{{ route('admin.contracts') }}">Контракти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}">Послуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.incidents') }}">Випадки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.payouts') }}">Виплати</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.repts') }}">Звіти</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container py-5">
        <h1 class="text-center mb-4">Список страхових виплат</h1>

        <div class="row">
            @foreach($payouts as $payout)
                @php
                    $status = $payout->status->Name ?? 'Невідомо';  
                    $colorClass = $status === 'Виплачено' ? 'bg-success' : 'bg-warning';
                @endphp

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4 shadow-sm border-0 bg-light rounded-4">
                        <div class="card-body">
                            <h5 class="fw-bold text-success">Виплата № {{ $payout->Id }}</h5>
                            <p class="mb-1"><strong>Дата:</strong> {{ $payout->PayoutDate }}</p>
                            <p class="mb-1"><strong>Сума:</strong> {{ number_format($payout->PayoutAmount, 2, ',', ' ') }} грн</p>
                            <p class="mb-1"><strong>Статус:</strong> 
                                <span class="badge {{ $colorClass }}">{{ $status }}</span>
                            </p>
                            <p class="text-muted small"><strong>Страховий випадок:</strong> № {{ $payout->IncidentId }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer class="footer">
        <p>© 2024 Курсовий проект. Страхова компанія</p>
        <p>Роль: Адміністратор</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>