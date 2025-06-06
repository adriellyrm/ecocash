<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
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

        nav {
            background: rgba(149, 185, 99, 0.1);
            padding: 15px 30px;
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .meu-botao {
            padding: 10px 20px;
            background: linear-gradient(135deg, #95B963, #445A14);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: transform 0.2s ease;
        }

        .meu-botao:hover {
            transform: translateY(-2px);
        }

        .form-content {
            padding: 30px;
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

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #F8FAFC;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="number"]:focus,
        .form-group input[type="file"]:focus {
            outline: none;
            border-color: #95B963;
        }

        .form-group input[type="file"] {
            padding: 10px;
            background: #F8FAFC;
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
            
            .header h1 {
                font-size: 1.5rem;
            }

            nav {
                padding: 15px 20px;
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🌱 EcoCash</h1>
            <p>Cadastro de Produtos</p>
        </div>

        <nav>
            <a href="http://localhost/ecocash/produtos.php" class="meu-botao">Produtos</a>
            <a href="http://localhost/ecocash/index.php" class="meu-botao">Início</a>
        </nav>

        <div class="form-content">
            <h3 class="section-title">Informações do Produto</h3>
            
            <form id="product-form">
                <div class="form-group">
                    <label for="product-name">Nome do Produto <span class="required">*</span></label>
                    <input type="text" id="product-name" required>
                </div>

                <div class="form-group">
                    <label for="product-price">Preço (R$) <span class="required">*</span></label>
                    <input type="number" id="product-price" step="0.01" min="0" required>
                </div>

                <div class="form-group">
                    <label for="product-image">Imagem <span class="required">*</span></label>
                    <input type="file" id="product-image" accept="image/*" required>
                </div>

                <button type="submit" class="submit-btn">
                    Adicionar Produto
                </button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>