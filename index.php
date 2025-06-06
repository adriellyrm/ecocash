<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Site de Vendas e Trocas</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="idex.css">



</head>
<body>

  <header>
    <img src="Green White Modern Real Estate Agent LinkedIn Banner.png" alt="eco">
  </header>
  <nav>
  
  <a href="produtos.php" class="meu-botao" class="meu-botao">Produtos</a>
  <a href="cadastraproduto.php" class="meu-botao" class="meu-botao">Cadastrar produto</a>
  </nav>
  
  <div class="container">
    
    </div>
  </div>
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

    

    <script src="script.js"></script>




  <footer class="footer">
    <div class="footer-content">
        <!-- Seção de links -->
        <div class="footer-links">
            <ul>
                <li><a href="/sobre">Sobre nós</a></li>
                <li><a href="/contato">Contato</a></li>
                <li><a href="/privacidade">Política de Privacidade</a></li>
                <li><a href="/termos">Termos de Serviço</a></li>
            </ul>
        </div>

        <!-- Seção de redes sociais -->
        <div class="footer-social">
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
        </div>

        <!-- Seção de direitos autorais -->
        <div class="footer-copyright">
            <p>&copy;EcoCash. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

</body>
</html>