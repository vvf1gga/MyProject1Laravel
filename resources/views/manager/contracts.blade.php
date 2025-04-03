<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контракти - Страхова компанія</title>
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
                        <a class="nav-link active" href="{{ route('manager.contracts') }}">Контракти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manager.index') }}">Послуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manager.incidents') }}">Випадки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manager.payouts') }}">Виплати</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    @php
    $statusColors = [
        'Оплачений' => 'bg-success',  // Зелене
        'Очікує опл' => 'bg-warning', // Жовте
    ];
@endphp

<main class="container py-5">
    <h1 class="text-center mb-4">Список страхових контрактів</h1>

    <div class="row">
        @foreach($contracts as $contract)
            @php
                $status = $contract->paymentStatus->Name ?? 'Невідомо';  
                $colorClass = $statusColors[$status] ?? 'bg-dark'; // За замовчуванням темний
            @endphp

            <div class="col-md-6 col-lg-4">
                <div class="card mb-4 shadow-sm border-0 bg-light rounded-4">
                    <div class="card-body">
                        <h5 class="fw-bold text-success">№ {{ $contract->Id }}</h5>
                        <p class="mb-1"><strong>Клієнт:</strong> {{ $contract->contractDetails->ClientName ?? 'Невідомо' }}</p>
                        <p class="mb-1"><strong>Статус:</strong> 
                            <span class="badge {{ $colorClass }}">{{ $status }}</span>
                        </p>
                        <p class="text-muted small"><strong>Дата укладання:</strong> {{ $contract->StartDate }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mb-4 d-flex justify-content-end">
        <button class="btn btn-outline-success d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addContractModal"><i class="bi bi-plus-circle me-1"></i>Новий контракт</button>
    </div>
    <div class="mb-4 d-flex justify-content-end">
        <button class="btn btn-outline-success d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addContractModal"><i class="bi bi-plus-circle me-1"></i>Пролонгувати контракт</button>
    </div>

</main>

    <footer class="footer bg-light text-center py-3">
        <p>© 2024 Курсовий проект. Страхова компанія</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>