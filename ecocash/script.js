// Seleção do formulário e da lista de produtos
const form = document.getElementById('product-form');
const productsList = document.getElementById('products-list');

// Função que cria um novo item de produto
function createProduct(name, price, image) {
    const productDiv = document.createElement('div');
    productDiv.classList.add('product-item');

    // Criando os elementos do produto
    const productImage = document.createElement('img');
    productImage.src = image;
    productImage.alt = name;

    const productName = document.createElement('h3');
    productName.innerText = name;

    const productPrice = document.createElement('p');
    productPrice.innerText = `R$ ${price}`;

    // Adicionando os elementos ao item do produto
    productDiv.appendChild(productImage);
    productDiv.appendChild(productName);
    productDiv.appendChild(productPrice);

    // Adicionando o item à lista de produtos
    productsList.appendChild(productDiv);
}

// Função para lidar com o envio do formulário (cadastrando o produto)
if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Impede o envio do formulário padrão

        const productName = document.getElementById('product-name').value;
        const productPrice = document.getElementById('product-price').value;
        const productImageFile = document.getElementById('product-image').files[0];

        // Verifica se uma imagem foi escolhida
        if (productImageFile) {
            const reader = new FileReader();

            // Quando a imagem for carregada
            reader.onload = function(event) {
                const imageUrl = event.target.result;

                // Salva os dados no localStorage
                const products = JSON.parse(localStorage.getItem('products')) || [];
                products.push({ name: productName, price: productPrice, image: imageUrl });
                localStorage.setItem('products', JSON.stringify(products));

                // Redireciona para a página de produtos
                window.location.href = 'produtos.php';
            };

            reader.readAsDataURL(productImageFile); // Lê a imagem e a converte para URL
        }

        // Limpar o formulário após o envio
        form.reset();
    });
}

// Função para exibir os produtos na página produtos.php
if (productsList) {
    const products = JSON.parse(localStorage.getItem('products')) || [];

    // Verifica se existem produtos e exibe
    if (products.length > 0) {
        products.forEach(product => {
            createProduct(product.name, product.price, product.image);
        });
    } else {
        productsList.innerHTML = '<p>Nenhum produto cadastrado ainda.</p>';
    }
}
