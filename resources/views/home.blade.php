<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercados Irmãos Teixeira</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #e5e5e5;
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
            background-color: #e5e5e5;
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
        .navbar img {
            height: 50px; /* Ajuste a altura conforme necessário */
            margin-right: 10px; /* Espaçamento à direita */
        }
        .content {
            margin-top: 100px; /* Compensa a altura da navbar */
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .btn-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            max-width: 900px;
        }
        .btn-custom {
            flex: 1 1 calc(50% - 40px);
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
            text-decoration: none; /* Remove sublinhado do link */
        }
        .btn-color { background-color: #6c2c2c; } /* Verde mais suave */
        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .btn-custom .emoji {
            font-size: 24px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img style="height:70px;" src="/img/pollo.png" alt="Logo Supermercados Irmãos Teixeira">
    </div>
    <div class="content">
        <div class="btn-container">
            <a href="{{ route('gestao-estoque') }}" class="btn btn-custom btn-color">
                📦 Gestão de Estoque
            </a>
            <a href="{{ route('gestao-delivery') }}" class="btn btn-custom btn-color">
                🚚 Gestão de Delivery
            </a>
            <button class="btn btn-custom btn-color">
                📝 Gestão de Fornecedores
            </button>
            <button class="btn btn-custom btn-color">
                🛒 Gestão de Clientes
            </button>
            <button class="btn btn-custom btn-color">
                📊 Relatórios e Análises
            </button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
