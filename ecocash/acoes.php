<?php
require('conexao.php');

if (isset($_POST['action']) && $_POST['action'] == 'register') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO clientes (nome, email, senha, telefone) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nome, $email, $senha, $telefone);
        if ($stmt->execute()) {
            $_SESSION['usuario'] = $email;
            header("Location: index.php");
            exit;
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }
        $stmt->close();
    } else {
        echo "Erro ao preparar o SQL: " . $conexao->error;
    }
}

if(isset($_POST['enviar'])){
    $tipo = $_POST['tipo_transacao'];
    if($tipo == "venda"){
        $nomeCliente = $_POST['nome_cliente'];
        $tefone = $_POST['tefone'];
        $email = $_POST['email'];
        $nomeProduto = $_POST['nome_produto'];
        $categoria = $_POST['categoria'];
        $condicao = $_POST['condicao'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $forma_pagamento = $_POST['forma_pagamento'];
        $forma_entrega = $_POST['forma_entrega'];
        $observacao = $_POST['observacoes'];

        $sql = "INSERT INTO vendas_trocas (nome_cliente,telefone,email,nome_produto,categoria,condicao,quantidade,preco,descricao,pagamento,entrega,observacao,tipo) VALUES ('$nomeCliente','$telefone','$email','$nomeProduto','$categoria','$condicao','$quantidade','$preco','$descricao','$forma_pagamento','$forma_entrega','$observacao')";
        mysqli_query($conexao,$sql);
        header("Location:index.php");
    }
    if($tipo == "troca"){
        $nomeCliente = $_POST['nome_cliente'];
        $tefone = $_POST['tefone'];
        $email = $_POST['email'];
        $nomeProduto = $_POST['nome_produto'];
        $categoria = $_POST['categoria'];
        $condicao = $_POST['condicao'];
        $quantidade = $_POST['quantidade'];
        $descricao = $_POST['descricao'];
        $forma_pagamento = $_POST['forma_pagamento'];
        $forma_entrega = $_POST['forma_entrega'];
        $observacao = $_POST['observacoes'];
        $produto_desejado = $_POST['produto_desejado'];
        $valor_troca = $_POST['valor_troca'];

        $sql = "INSERT INTO vendas_trocas (nome_cliente,telefone,email,nome_produto,categoria,condicao,quantidade,descricao,pagamento,entrega,observacao,tipo,valor_troca) VALUES ('$nomeCliente','$telefone','$email','$nomeProduto','$categoria','$condicao','$quantidade','$descricao','$forma_pagamento','$forma_entrega','$observacao','$tipo','$valor_troca')";
        mysqli_query($conexao,$sql);
        header("Location:index.php");
    }
}
?>