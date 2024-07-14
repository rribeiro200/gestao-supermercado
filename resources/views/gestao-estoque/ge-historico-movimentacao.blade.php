<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Movimentações - Supermercados Irmãos Teixeira</title>
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
        .table-container {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd; /* Adiciona borda nas células */
        }
        th {
            background-color: #6c2c2c;
            color: white;
        }
        tr:hover {background-color: #f1f1f1;}
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
        .export-buttons {
            margin-top: 20px;
            display: flex;
            gap: 20px;
        }
        .export-button {
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }
        .export-csv {
            background-color: #28a745; /* Verde */
        }
        .export-pdf {
            background-color: #dc3545; /* Vermelho */
        }
        .export-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .export-button .icon {
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
        <h2>Histórico de Movimentações</h2>
        <div class="table-container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Data/Hora</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Entrada/Saida</th>
                        <th>Responsável</th>
                        <th>Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-07-14 10:30</td>
                        <td>Arroz</td>
                        <td>50 Kg</td>
                        <td>Entrada</td>
                        <td>João Silva</td>
                        <td>Recebimento de fornecedor</td>
                    </tr>
                    <tr>
                        <td>2024-07-14 14:20</td>
                        <td>Feijão</td>
                        <td>20 Kg</td>
                        <td>Saída</td>
                        <td>Maria Oliveira</td>
                        <td>Venda para cliente</td>
                    </tr>
                    <!-- Mais linhas podem ser adicionadas aqui -->
                </tbody>
            </table>
        </div>
        
        <!-- Botões de Exportar -->
        <div class="export-buttons">
            <a href="#" class="export-button export-csv">
                <i class="fas fa-file-csv icon"></i> Exportar para CSV
            </a>
            <a href="#" class="export-button export-pdf">
                <i class="fas fa-file-pdf icon"></i> Exportar para PDF
            </a>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-vr9BF4A1r4nvI5Xs4gW57x4r5OxH9F8FyYB6QIMdF1KdAlpsNssnwgsu8bT8D4eWPrphjVTulJv4VTETllK1FA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
