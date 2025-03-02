<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Послуги - Страхова компанія</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .service-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-block-end: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        .service-card h4 {
            margin-block-end: 10px;
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
            margin-inline-start: 30px;
            font-size: 1.1rem;
            color: #555;
            margin-block-start: 10px;
        }
        .child-service h5 {
            font-size: 1.2rem;
            color:#555;
            font-weight: 500;
        }
        .container h1 {
            font-size: 2.5rem;
            margin-block-end: 20px;
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
            margin-block-end: 30px;
        }
        .list-group-item {
            padding: 1.25rem;
            border-radius: 8px;
            margin-block-end: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            border-block-start: 1px solid #e0e0e0;
        }
        .highlight {
            color: transparent;
            font-weight: 600;
        }

        .icon-medium {
            font-size: 1.2rem;
            color: #777;
            cursor: pointer;
        }

        .icon-medium:hover {
            color: #333;
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
                    <a class="nav-link active" href="/Kyrsova/public/admin">Послуги</a>
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

<main class="container py-5">
    <h1 class="text-center">Послуги Страхової Компанії</h1>

    <div class="mb-4 d-flex justify-content-end">
        <button class="btn btn-outline-success d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addServiceModal">
            <i class="bi bi-plus-circle me-1"></i> Додати послугу
        </button>
    </div>

    <div class="row">
        @foreach($services as $service)
            @if($service->ParentServiceId == null)
                <div class="col-md-6">
                    <div class="service-card">
                        <h4 class="highlight">{{ $service->Name }}
                            <!-- Иконки редактирования и удаления для родительской услуги -->
                            <i class="bi bi-pencil icon-medium ms-2"></i>
                            <i class="bi bi-trash icon-medium ms-2"></i>
                        </h4>
                        <p>{{ $service->Description }}</p>
                        <div class="child-services">
                            @foreach($services->where('ParentServiceId', $service->Id) as $childService)
                                <div class="child-service">
                                    <h5>{{ $childService->Name }}
                                        <!-- Иконки редактирования и удаления для дочерней услуги -->
                                        <i class="bi bi-pencil icon-medium ms-2"></i>
                                        <i class="bi bi-trash icon-medium ms-2"></i>
                                    </h5>
                                    <p>{{ $childService->Description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</main>

<!-- Модальне вікно -->
<div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceModalLabel">Додати нову послугу</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Назва послуги</label>
                        <input type="text" class="form-control" id="name" name="Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Опис</label>
                        <textarea class="form-control" id="description" name="Description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="parentServiceId" class="form-label">Батьківська послуга</label>
                        <select class="form-select" id="parentServiceId" name="ParentServiceId">
                            <option value="">Створити батьківську послугу</option>
                            @foreach($services->where('ParentServiceId', null) as $service)
                                <option value="{{ $service->Id }}">{{ $service->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Додати</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <p>© 2024 Курсовий проект. Страхова компанія</p>
    <p>Роль: Адміністратор</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
