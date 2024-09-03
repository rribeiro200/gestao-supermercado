<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pedidos - Supermercados Irmãos Teixeira</title>
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
            margin-top: 150px; /* Compensa a altura da navbar */
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .section-title {
            background-color: #6c2c2c;
            color: white;
            padding: 10px;
            text-align: center;
            margin: 20px 0;
            border: 2px solid black;
            border-radius: 5px;
        }
        .form-group-inline {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .form-group-inline .form-group {
            flex: 1 1 30%;
            margin: 10px;
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
        <h2 class="text-center">Cadastro de Pedidos</h2>
        <form action="{{ route("cadastro-pedido") }}" method="POST">
            @csrf
            <!-- Informações do Cliente -->
            <div class="section-title">
                Informações do Cliente
            </div>
            <div class="form-group-inline">
                <div class="form-group">
                    <input name="nome_cliente" type="text" class="form-control" placeholder="Nome do Cliente">
                </div>
                <div class="form-group">
                    <input name="telefone_cliente" type="text" class="form-control" placeholder="Telefone">
                </div>
                <div class="form-group">
                    <input name="endereco_cliente" type="text" class="form-control" placeholder="Endereço">
                </div>
            </div>

            <!-- Informações do Pedido -->
            <div class="section-title">
                Informações do Pedido
            </div>
            <div class="form-group-inline">
                <div class="form-group">
                    <input name="produto" type="text" class="form-control" placeholder="Produto">
                </div>
                <div class="form-group">
                    <input name="quantidade" type="number" class="form-control" placeholder="Quantidade">
                </div>
                <div class="form-group">
                    <input name="preco_unitario" type="number" class="form-control" placeholder="Preço Unitário" step="0.01">
                </div>
                <div class="form-group">
                    <input name="data_pedido" type="date" class="form-control" placeholder="Data do Pedido">
                </div>
                <div class="form-group">
                    <input name="status_pedido" type="text" class="form-control" placeholder="Status do Pedido">
                </div>
            </div>

            <button class="section-title" type="submit">Cadastrar Pedido</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
