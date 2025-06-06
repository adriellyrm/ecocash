<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>

<style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .product-item:hover {
            transform: translateY(-5px);
        }

        .product-item img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .product-item h3 {
            margin: 10px 0;
            color: #333;
        }

        .product-item p {
            color: #777;
            font-size: 1.1em;
            font-weight: bold;
        }

        /* Estilos do Modal */
        .modal {
            display: none; /* Escondido por padrão */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Permite scroll se o conteúdo for grande */
            background-color: rgba(0,0,0,0.5); /* Fundo semi-transparente */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 30px;
            border: 1px solid #888;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            position: relative;
        }

        .close-button {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-button:hover,
        .close-button:focus {
            color: black;
            text-decoration: none;
        }

        .modal-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .modal-content h2 {
            margin-top: 0;
            color: #333;
        }

        .modal-content p {
            color: #555;
            line-height: 1.6;
        }

        .modal-price {
            font-size: 1.4em;
            color: #28a745;
            font-weight: bold;
            margin-top: 15px;
        }

body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }


    .buy-button {
            background: linear-gradient(135deg, #95B963, #445A14);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(68, 90, 20, 0.2);
        }

        .buy-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(68, 90, 20, 0.3);
            background: linear-gradient(135deg, #a5c973, #556b24);
        }

        .buy-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(68, 90, 20, 0.2);
        }
    
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
   
    
<nav>
        <ul>
             <a href="index.php">Inicio</a></li>
            <a href="cadastraproduto.php">Cadastrar Novo Produto</a>
        </ul>
    </nav>


</head>
<body>


  
  <script>
    const barraPesquisa = document.getElementById('barra-pesquisa');
    const itens = document.querySelectorAll('.item');

    barraPesquisa.addEventListener('input', function() {
      const filtro = barraPesquisa.value.toLowerCase();

      itens.forEach(item => {
        const texto = item.textContent.toLowerCase();
        item.style.display = texto.includes(filtro) ? '' : 'none';
      });
    });
  </script>



<h1>Produtos Disponíveis</h1>
    <div id="products-list" class="products-list"></div>
    <div>
    
<a href="form.php" class="buy-button">
        🛒 Comprar
    </a>

  
 
    <script src="script.js"></script>
</body>
</html>
