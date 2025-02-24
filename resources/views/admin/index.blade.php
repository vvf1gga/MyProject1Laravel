<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмін Панель - Послуги Страхової Компанії</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .service-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        .service-card h4 {
            margin-bottom: 10px;
            font-size: 1.5rem;
            color: #3a3a3a;
            font-weight: 600;
        }
        .service-card p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
        }
        .child-service {
            margin-left: 30px;
            font-size: 1.1rem;
            color: #555;
            margin-top: 10px;
        }
        .child-service h5 {
            font-size: 1.2rem;
            color: #007bff;
            font-weight: 500;
        }
        .container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
            color: #2c3e50;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .container p {
            font-size: 1.2rem;
            text-align: center;
            color: #333;
            font-style: italic;
            margin-bottom: 30px;
        }
        .list-group-item {
            padding: 1.25rem;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }
        .highlight {
            background: linear-gradient(45deg, #f9d423, #ff4e50);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Kyrsova/public/">Облік страхових договорів</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            </div>
        </div>
    </header>

    <main class="container py-5">
        <h1>Послуги Страхової Компанії</h1>
        <p>Перегляньте доступні послуги нашої компанії.</p>

        <div class="row">
            @foreach($services as $service)
                @if($service->ParentServiceId == null) <!-- Це батьківська послуга -->
                    <div class="col-md-6">
                        <div class="service-card">
                            <h4 class="highlight">{{ $service->Name }}</h4>
                            <p>{{ $service->Description }}</p>
                            <!-- Виводимо дочірні послуги -->
                            <div class="child-services">
                                @foreach($services->where('ParentServiceId', $service->Id) as $childService)
                                    <div class="child-service">
                                        <h5>{{ $childService->Name }}</h5>
                                        <p>{{ $childService->Description }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Для адміністратора додаємо кнопки для редагування та видалення -->
                            <div class="admin-actions mt-3">
                                <a href="{{ route('services.edit', $service->Id) }}" class="btn btn-warning btn-sm">Редагувати</a>
                                <form action="{{ route('services.delete', $service->Id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Видалити</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="mt-5">
            <a href="{{ route('services.create') }}" class="btn btn-primary">Додати нову послугу</a>
        </div>
    </main>

    <footer class="footer">
        <p>© 2024 Курсовий проект. Страхова компанія</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
