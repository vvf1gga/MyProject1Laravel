<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсовий проект - Облік страхових договорів</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            min-block-size: 100vh;
        }
        header, footer {
            background-color: #222;
            color: white;
            padding: 10px;
        }
        main {
            flex: 1;
        }
        .feature-card {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: scale(1.05); 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        .feature-card h5 {
            font-size: 1.25rem;
            margin-block-end: 10px;
        }
        .feature-card p {
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container text-center py-5">
        <h1>Система обліку страхових договорів</h1>
        <p>Спочатку увійдіть у систему, обравши вашу роль</p>

        <!-- Виведення помилки при неправильному паролі -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row my-5">
            <div class="col-md-12 mb-3">
                <a href="/Kyrsova/public/services" class="feature-card d-block">
                    <h5>Гість</h5>
                    <p>Доступен перегляд Послуг</p>
                </a>
            </div>
            <div class="col-md-12 mb-3">
                <!-- Менеджер -->
                <a href="#" class="feature-card d-block role-select" data-bs-toggle="modal" data-bs-target="#passwordModal" data-role="manager">
                    <h5>Менеджер</h5>
                    <p>Доступ тільки для працівників компанії</p>
                </a>
            </div>
            <div class="col-md-12 mb-3">
                <!-- Адмін -->
                <a href="#" class="feature-card d-block role-select" data-bs-toggle="modal" data-bs-target="#passwordModal" data-role="admin">
                    <h5>Адмін</h5>
                    <p>Доступ строго для адміністрації компанії</p>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3">
        <p>© 2024 Курсовий проект.</p>
    </footer>

    <!-- Password Modal -->
    <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="passwordModalLabel">Введіть пароль</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf
                        <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Введіть пароль" required>
                        <input type="hidden" id="roleInput" name="role">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                    <button type="button" class="btn btn-primary" id="loginButton">Вхід</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let selectedRole = null;

        // Запам’ятовуємо роль при відкритті модального вікна
        document.querySelectorAll(".role-select").forEach(button => {
            button.addEventListener("click", function () {
                selectedRole = this.getAttribute("data-role");
                document.getElementById("roleInput").value = selectedRole; // Встановлюємо значення ролі
                document.getElementById("passwordInput").value = ""; 
            });
        });

        // Обробник для кнопки входу
        document.getElementById("loginButton").addEventListener("click", function () {
            document.getElementById("loginForm").submit(); // Відправляємо форму на сервер
        });

        // Очищення поля при закритті модального вікна
        document.getElementById("passwordModal").addEventListener("hidden.bs.modal", function () {
            document.getElementById("passwordInput").value = "";
        });
    </script>
</body>
</html>
