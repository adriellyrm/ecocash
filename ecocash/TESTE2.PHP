<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: flex-start; /* Alinha no topo */
    min-height: 100vh;
    background-color: #f0f2f5;
    padding: 20px;
    gap: 20px; /* Espaço entre os cards, se tiver mais de um */
    flex-wrap: wrap; /* Permite que os cards quebrem a linha */
}

.product-card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 25px;
    text-align: center;
    width: 300px;
    margin-bottom: 20px;
    overflow: hidden; /* Garante que nada saia dos limites do card */
    display: flex;
    flex-direction: column;
    align-items: center;
}

.product-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
}

.product-title {
    font-size: 1.6em;
    color: #333;
    margin-bottom: 10px;
}

.product-price {
    font-size: 1.4em;
    color: #007bff;
    font-weight: bold;
    margin-bottom: 20px;
}

.toggle-description-btn {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s ease;
    margin-bottom: 15px;
}

.toggle-description-btn:hover {
    background-color: #218838;
}

.product-description {
    text-align: left;
    width: 100%; /* Ocupa toda a largura do card */
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #eee;
    box-sizing: border-box; /* Inclui padding na largura total */

    /* Importante: Esconde a descrição por padrão */
    display: none;
    /* transition: all 0.3s ease-in-out; */ /* Descomente para uma transição suave na aparição */
}

.product-description h3 {
    font-size: 1.2em;
    color: #555;
    margin-bottom: 10px;
}

.product-description p,
.product-description ul {
    font-size: 0.95em;
    color: #666;
    line-height: 1.6;
    margin-bottom: 10px;
}

.product-description ul {
    list-style-type: disc;
    margin-left: 20px;
}

/* Classe que será adicionada/removida pelo JavaScript para mostrar/esconder */
.product-description.visible {
    display: block; /* Ou display: flex; se você quiser que o conteúdo interno seja flex */
}
        </style>
</head>
<body>

    <div class="product-card" id="product1">
        <img src="https://via.placeholder.com/200" alt="Produto Exemplo" class="product-image">
        <h2 class="product-title">Camiseta Estampada Premium</h2>
        <p class="product-price">R$ 79,90</p>
        <button class="toggle-description-btn">Ver Detalhes</button>

        <div class="product-description hidden">
            <h3>Descrição Completa:</h3>
            <p>Esta camiseta é feita com 100% algodão orgânico, proporcionando um toque suave e excelente respirabilidade. Ideal para uso diário, com estampa durável e cores vibrantes.</p>
            <ul>
                <li>Material: 100% Algodão Orgânico</li>
                <li>Estampa: Serigrafia de alta qualidade</li>
                <li>Tamanhos disponíveis: P, M, G, GG</li>
                <li>Cores: Azul, Branco, Preto</li>
            </ul>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>