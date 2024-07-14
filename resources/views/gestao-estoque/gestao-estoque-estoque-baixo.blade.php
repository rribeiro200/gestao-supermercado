<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerta de Estoque Baixo - Supermercados Irmãos Teixeira</title>
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
        .content {
            margin-top: 100px; /* Compensa a altura da navbar */
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .alert-title {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .table-container {
            max-width: 600px;
            width: 100%;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #f2f2f2;
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
        <div class="alert-title">
            5 produtos em quantidade baixa no estoque
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Produto A</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Produto B</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Produto C</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Produto D</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Produto E</td>
                        <td>5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
