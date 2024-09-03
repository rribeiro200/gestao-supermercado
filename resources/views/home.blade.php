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
            padding: 10px;
            text-align: center;
            color: #333;
            font-size: 24px;
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
            height: 40px;
            margin-right: 10px;
        }
        .content {
            margin-top: 60px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
            max-width: 900px;
        }
        .card-custom {
            flex: 1 1 calc(33% - 20px);
            min-width: 250px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            padding: 20px;
            color: #333; /* Cor do texto dos cards */
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 260px;
        }
        .card-custom:hover {
            text-decoration: none;
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-custom .emoji {
            font-size: 40px;
            margin-bottom: 15px;
        }
        .card-custom .card-title {
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .card-custom .card-description {
            font-size: 16px;
            text-align: center;
            color: #333; /* Cor do texto dos cards */
            margin-bottom: 20px;
        }
        .card-custom .btn-group {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card-custom .btn-group a {
            width: 100%;
            margin-bottom: 10px;
        }
        .btn-custom {
            background-color: #2d5388; /* Cor de fundo vermelha */
            color: #fff; /* Cor do texto dos botões */
            border: none;
            width: 100%;
            padding: 10px 0;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-custom:hover {
            background-color: #00429e; /* Cor de fundo vermelha mais escura ao passar o mouse */
            color: #fff;
        }
        .tamanho-fixo {
            height: 15rem;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img style="height:70px;" src="/img/pollo.png" alt="Logo Supermercados Irmãos Teixeira">
    </div>
    <div class="content">
        <div class="card-container">
            <div class="card-custom">
                <div class="tamanho-fixo">
                    <div class="emoji">📦</div>
                    <div class="card-title">Gestão de Estoque</div>
                    <div class="card-description">
                        Ferramentas para gerenciar o estoque de produtos, controlar a qualidade e monitorar movimentações.
                    </div>
                </div>
                <div class="btn-group">
                    <a href="{{ route('gestao-estoque-cadastro-produto-form') }}" class="btn btn-custom">Cadastro de Produtos</a>
                    <a href="{{ route('gestao-estoque-controle-qualidade') }}" class="btn btn-custom">Controle de Qualidade</a>
                    <a href="{{ route('gestao-estoque-estoque-baixo') }}" class="btn btn-custom">Alerta de Estoque Baixo</a>
                    <a href="{{ route('ge-historico-movimentacao') }}" class="btn btn-custom">Histórico de Movimentações</a>
                </div>
            </div>
            <div class="card-custom">
                <div class="tamanho-fixo">
                    <div class="emoji">🚚</div>
                    <div class="card-title">Gestão de Delivery</div>
                    <div class="card-description">
                        Soluções para cadastrar pedidos, acompanhar status e gerar relatórios de vendas.
                    </div>
                </div>
                <div class="btn-group">
                    <a href="{{ route('cadastro-pedido-form')}}" class="btn btn-custom">Cadastro de Pedidos</a>
                    <a href="{{ route('status-pedidos') }}" class="btn btn-custom">Status de Pedidos</a>
                    <a href="#" class="btn btn-custom">Relatórios de Vendas</a>
                </div>
            </div>
            <div class="card-custom">
                <div class="tamanho-fixo">
                    <div class="emoji">📝</div>
                    <div class="card-title">Gestão de Fornecedores</div>
                    <div class="card-description">
                        Ferramentas para gerenciar fornecedores, contratos e avaliar o desempenho.
                    </div>
                
                </div>
                <div class="btn-group">
                    <a href="#" class="btn btn-custom">Cadastro de Fornecedores</a>
                    <a href="#" class="btn btn-custom">Gestão de Contratos</a>
                    <a href="#" class="btn btn-custom">Avaliação de Desempenho</a>
                </div>
            </div>
            <div class="card-custom">
                <div class="tamanho-fixo">
                    <div class="emoji">🛒</div>
                    <div class="card-title">Gestão de Clientes</div>
                    <div class="card-description">
                        Ferramentas para gerenciar clientes, histórico de compras e programas de fidelidade.
                    </div>
                
                </div>
                <div class="btn-group">
                    <a href="#" class="btn btn-custom">Cadastro de Clientes</a>
                    <a href="#" class="btn btn-custom">Histórico de Compras</a>
                    <a href="#" class="btn btn-custom">Programas de Fidelidade</a>
                </div>
            </div>
            <div class="card-custom">
                <div class="tamanho-fixo">
                    <div class="emoji">📊</div>
                    <div class="card-title">Relatórios e Análises</div>
                    <div class="card-description">
                        Ferramentas para gerar relatórios de vendas, analisar desempenho e visualizar estatísticas.
                    </div>
                
                </div>
                <div class="btn-group">
                    <a href="#" class="btn btn-custom">Relatórios de Vendas</a>
                    <a href="#" class="btn btn-custom">Análise de Desempenho</a>
                    <a href="#" class="btn btn-custom">Gráficos e Estatísticas</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
