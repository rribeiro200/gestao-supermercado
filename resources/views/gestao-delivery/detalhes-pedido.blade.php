<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pedido - Supermercados Irmãos Teixeira</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            min-height: 60vh;
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
            margin-top: 150px; /* Compensa a altura da navbar */
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .details-container {
            width: 100%;
            max-width: 600px; /* Limita a largura para melhor leitura */
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        .details-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #6c2c2c;
        }
        .details-list {
            margin-bottom: 20px;
        }
        .details-list-item {
            margin-bottom: 10px;
        }
        .status-history {
            margin-bottom: 20px;
        }
        .status-history-item {
            margin-bottom: 10px;
        }
        .observations {
            margin-bottom: 20px;
        }
        .close-button {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            display: inline-block;
            text-decoration: none;
        }
        .close-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .close-button .emoji {
            margin-right: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img style="height:70px;" src="/img/pollo.png" alt="Logo Supermercados Irmãos Teixeira">
    </div>
    <div class="content">
        <div class="details-container">
            <h2 class="details-title">Detalhes do Pedido</h2>
            <div class="details-list">
                <div class="details-list-item"><strong>Nº do Pedido:</strong> 539</div>
                <div class="details-list-item"><strong>Cliente:</strong> Rafael Ribeiro</div>
                <div class="details-list-item"><strong>Data do Pedido:</strong> 12/07/2024</div>
                <div class="details-list-item"><strong>Status Atual:</strong> Em Preparação</div>
            </div>
            <div class="products-list">
                <h3>Produtos:</h3>
                <ul>
                    <li>Arroz 5kg, Quantidade: 2</li>
                    <li>Feijão 1kg, Quantidade: 5</li>
                </ul>
            </div>
            <div class="address">
                <strong>Endereço de Entrega:</strong> Rua Exemplo, 123, Bairro, Cidade, Estado
            </div>
            <div class="status-history">
                <h3>Histórico de Status:</h3>
                <ul>
                    <li>12/07/2024 10:00 - Pedido Recebido</li>
                    <li>12/07/2024 12:00 - Pedido em Preparação</li>
                </ul>
            </div>
            <div class="observations">
                <strong>Observações do Cliente:</strong> (...)
            </div>
            <button onclick="window.history.back();" class="close-button">
                <span class="emoji">❌</span> Fechar
            </button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
