<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoCash - Vendas e Trocas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #F8FAFC;
            color: #445A14;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(68, 90, 20, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #95B963, #445A14);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .form-content {
            padding: 30px;
        }

        .transaction-type {
            display: flex;
            margin-bottom: 30px;
            background: #F8FAFC;
            border-radius: 8px;
            padding: 4px;
        }

        .type-btn {
            flex: 1;
            padding: 12px;
            border: none;
            background: transparent;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            color: #445A14;
            transition: all 0.3s ease;
        }

        .type-btn.active {
            background: #95B963;
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #445A14;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #F8FAFC;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #95B963;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .trade-section {
            display: none;
            background: #F8FAFC;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .trade-section.active {
            display: block;
        }

        .trade-section h3 {
            color: #445A14;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #95B963, #445A14);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
        }

        .required {
            color: #e74c3c;
        }

        .section-title {
            color: #445A14;
            font-size: 1.3rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #F8FAFC;
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
            }
            
            .form-content {
                padding: 20px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🌱 EcoCash</h1>
            <p>Sistema de Vendas e Trocas Sustentáveis</p>
        </div>

        <div class="form-content">
            <form action="acoes.php" method="POST">
                <div class="transaction-type">
                    <button type="button" class="type-btn active" onclick="setTransactionType('venda')">
                        💰 Venda
                    </button>
                    <button type="button" class="type-btn" onclick="setTransactionType('troca')">
                        🔄 Troca
                    </button>
                </div>

                <input type="hidden" name="tipo_transacao" id="tipo_transacao" value="venda">

                <!-- Informações do Cliente -->
                <h3 class="section-title">Informações do Cliente</h3>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="nome_cliente">Nome <span class="required">*</span></label>
                        <input type="text" id="nome_cliente" name="nome_cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone <span class="required">*</span></label>
                        <input type="tel" id="telefone" name="telefone" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>

                <!-- Informações do Produto -->
                <h3 class="section-title">Produto</h3>

                <div class="form-group">
                    <label for="nome_produto">Nome do Produto <span class="required">*</span></label>
                    <input type="text" id="nome_produto" name="nome_produto" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" name="categoria">
                            <option value="">Selecione...</option>
                            <option value="eletronicos">Eletrônicos</option>
                            <option value="roupas">Roupas</option>
                            <option value="casa">Casa</option>
                            <option value="livros">Livros</option>
                            <option value="esportes">Esportes</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="condicao">Condição</label>
                        <select id="condicao" name="condicao">
                            <option value="novo">Novo</option>
                            <option value="seminovo">Seminovo</option>
                            <option value="usado">Usado</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="quantidade">Quantidade <span class="required">*</span></label>
                        <input type="number" id="quantidade" name="quantidade" min="1" value="1" required>
                    </div>
                    <div class="form-group" id="preco-group">
                        <label for="preco">Preço (R$) <span class="required">*</span></label>
                        <input type="number" id="preco" name="preco" step="0.01" min="0" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea id="descricao" name="descricao" placeholder="Descreva o produto..."></textarea>
                </div>

                <!-- Seção de Troca -->
                <div class="trade-section" id="trade-section">
                    <h3>Produto Desejado em Troca</h3>
                    <div class="form-group">
                        <label for="produto_desejado">O que você deseja receber?</label>
                        <textarea id="produto_desejado" name="produto_desejado" placeholder="Descreva o que você gostaria de receber em troca..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="valor_troca">Valor Estimado da Troca (R$)</label>
                        <input type="number" id="valor_troca" name="valor_troca" step="0.01" min="0">
                    </div>
                </div>

                <!-- Informações Adicionais -->
                <h3 class="section-title">Informações Adicionais</h3>

                <div class="form-row">
                    <div class="form-group" id="pagamento-group">
                        <label for="forma_pagamento">Forma de Pagamento</label>
                        <select id="forma_pagamento" name="forma_pagamento">
                            <option value="">Selecione...</option>
                            <option value="dinheiro">Dinheiro</option>
                            <option value="pix">PIX</option>
                            <option value="cartao">Cartão</option>
                            <option value="transferencia">Transferência</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="forma_entrega">Forma de Entrega</label>
                        <select id="forma_entrega" name="forma_entrega">
                            <option value="retirada">Retirada no Local</option>
                            <option value="entrega">Entrega</option>
                            <option value="correios">Correios</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="observacoes">Observações</label>
                    <textarea id="observacoes" name="observacoes" placeholder="Informações adicionais..."></textarea>
                </div>

                <button type="submit" class="submit-btn" name = "enviar">
                    Finalizar Transação
                </button>
            </form>
        </div>
    </div>

    <script>
        function setTransactionType(type) {
            const buttons = document.querySelectorAll('.type-btn');
            const tradeSection = document.getElementById('trade-section');
            const precoGroup = document.getElementById('preco-group');
            const pagamentoGroup = document.getElementById('pagamento-group');
            const precoInput = document.getElementById('preco');
            const tipoTransacao = document.getElementById('tipo_transacao');

            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            event.target.classList.add('active');
            
            // Update hidden input
            tipoTransacao.value = type;

            if (type === 'troca') {
                tradeSection.classList.add('active');
                precoGroup.style.display = 'none';
                pagamentoGroup.style.display = 'none';
                precoInput.removeAttribute('required');
            } else {
                tradeSection.classList.remove('active');
                precoGroup.style.display = 'block';
                pagamentoGroup.style.display = 'block';
                precoInput.setAttribute('required', '');
            }
        }
    </script>
</body>
</html>