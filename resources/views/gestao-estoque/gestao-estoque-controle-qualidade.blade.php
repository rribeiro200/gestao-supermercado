<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Qualidade - Supermercados Irmãos Teixeira</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-9ZUbvxUuAP5h+IHB0E/ldw/5JIOyLxM0OgC/9IBdU4GJw0QDhW3V+V9knMFjGOCFymHEe5TygUp+9wLY0s6Oqg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .navbar {
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 32px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content {
            margin-top: 100px; /* Compensa a altura da navbar */
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            max-width: 900px;
        }
        .card {
            flex: 1 1 calc(33% - 20px);
            min-width: 250px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: white;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: #6c757d; /* Cor padrão para todos os cards */
        }
        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }
        .card-green { background-color: #006400; }
        .card-red { background-color: #B22222; }
        .card-gray { background-color: #6c757d; }
        .card-large {
            font-size: 48px;
            margin-top: 10px;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; /* Altura do corpo do card */
        }
        .card-body .icon {
            font-size: 60px; /* Tamanho do ícone */
            margin-right: 10px; /* Espaçamento à direita do ícone */
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            max-width: 900px;
        }
        .btn-custom {
            min-width: 250px;
            height: 150px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #6c2c2c; /* Laranja */
        }
        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .back-button {
            position: fixed;
            top: 130px;
            left: 150px;
            background-color: #4682B4; /* Azul mais suave */
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: center;
        }
        .back-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .back-button .emoji {
            margin-right: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <!-- Botão Voltar -->
    <button class="back-button" onclick="window.history.back();">
        <span class="emoji">🔙</span> Voltar
    </button>
    
    <div class="navbar">
        <img style="height:70px;" src="/img/pollo.png" alt="Logo Supermercados Irmãos Teixeira">
    </div>

    <div class="content">
        <div class="card-container">
            <!-- Card de Produtos Aprovados -->
            <a href="#" class="card card-green">
                <div class="card-title">Produtos Aprovados</div>
                <div class="card-body">
                    <span class="card-large">50</span>
                </div>
            </a>

            <!-- Card de Produtos Reprovados -->
            <a href="#" class="card card-red">
                <div class="card-title">Produtos Reprovados</div>
                <div class="card-body">
                    <span class="card-large">10</span>
                </div>
            </a>

            <!-- Card de Número de Inspeções -->
            <a href="#" class="card card-gray">
                <div class="card-title">Número de Inspeções</div>
                <div class="card-body">
                    <span class="card-large">100</span>
                </div>
            </a>
        </div>

        <div class="btn-container">
            <button class="btn btn-custom">
                Inspeção de Produtos
            </button>
            <button class="btn btn-custom">
                Histórico de Inspeção
            </button>
            <button class="btn btn-custom">
                Gestão de Reclamações
            </button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-vr9BF4A1r4nvI5Xs4gW57x4r5OxH9F8FyYB6QIMdF1KdAlpsNssnwgsu8bT8D4eWPrphjVTulJv4VTETllK1FA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
