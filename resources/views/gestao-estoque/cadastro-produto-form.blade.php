<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos - Supermercados Irmãos Teixeira</title>
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
        .image-upload {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        .image-upload label {
            cursor: pointer;
            color: #4682B4;
            text-decoration: underline;
        }
        .image-upload input[type="file"] {
            display: none;
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
        <h2 class="text-center">Cadastro de Produtos</h2>
        <form action="{{ route('gestao-estoque-cadastro-produto') }}" method="POST">
            @csrf
            <!-- Informações Básicas do Produto -->
            <div class="section-title">
                Informações Básicas do Produto
            </div>
            <div class="form-group-inline">
                <div class="form-group">
                    <input name="nome_produto" type="text" class="form-control" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <input name="descricao" type="text" class="form-control" placeholder="Descrição">
                </div>
                <div class="form-group">
                    <input name="codigo_barras" type="text" class="form-control" placeholder="Código de Barras">
                </div>


                <div class="form-group">
                    <select name="categoria" class="form-control">
                        <option value="" disabled selected>Categoria</option>
                        <option value="Teste">teste</option>
                        <!-- Adicione opções de categorias aqui -->
                    </select>
                </div>
                <div class="form-group">
                    <select name="marca" class="form-control">
                        <option value="" disabled selected>Marca</option>
                        <option value="Teste" >teste</option>
                        <!-- Adicione opções de marcas aqui -->
                    </select>
                </div>
                <div class="form-group">
                    <select name="unidade_medida" class="form-control">
                        <option value="" disabled selected>Unidade de Medida</option>
                        <option value="Teste" >teste</option>
                        <!-- Adicione opções de unidades de medida aqui -->
                    </select>
                </div>


            </div>

            <!-- Detalhes de Preço e Estoque -->
            <div class="section-title">
                Detalhes de Preço e Estoque
            </div>
            <div class="form-group-inline">
                <div class="form-group">
                    <input name="preco_custo" type="number" class="form-control" placeholder="Preço de Custo" step="0.01">
                </div>
                <div class="form-group">
                    <input name="preco_venda" type="number" class="form-control" placeholder="Preço de Venda" step="0.01">
                </div>
                <div class="form-group">
                    <input name="margem_lucro" type="number" class="form-control" placeholder="Margem de Lucro" step="0.01">
                </div>
                <div class="form-group">
                    <input name="estoque_atual" type="number" class="form-control" placeholder="Estoque Atual">
                </div>
                <div class="form-group">
                    <input name="estoque_maximo" type="number" class="form-control" placeholder="Estoque Máximo">
                </div>
            </div>

            <!-- Imagem do Produto -->
            <div class="image-upload">
                <label for="imagemProduto">Clique aqui para selecionar a imagem do produto</label>
                <input name="imagemProduto" type="file" id="imagemProduto">
            </div>

            <button class="section-title" type="submit">Cadastrar Produto</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
