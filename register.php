<?php
$conexao = mysqli_connect("localhost", "root", "alunoifro", "cadastro");

// Verifica a conexão
if (mysqli_connect_errno()) {
    echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
}

// Recupera os dados do formulário
$nome = mysqli_real_escape_string($conexao, $_GET['nome']);
$sobrenome = mysqli_real_escape_string($conexao, $_GET['sobrenome']);
$idade = mysqli_real_escape_string($conexao, $_GET['idade']);
$email = mysqli_real_escape_string($conexao, $_GET['email']); // Adicionei a variável email

// Verifica se o email já existe no banco de dados
$verifica_email = "SELECT * FROM Usuarios WHERE email='$email'";
$resultado = mysqli_query($conexao, $verifica_email);

if (mysqli_num_rows($resultado) > 0) {
    // Se o email já existe, exibe uma mensagem de erro
    echo "Não foi possível inserir os dados. Este email já está cadastrado.";
} else {
    // Se o email não existe, realiza a inserção
    $sql = "INSERT INTO Usuarios (nome, sobrenome, idade, email) VALUES ('$nome', '$sobrenome', '$idade', '$email')";

    if (!mysqli_query($conexao, $sql)) {
        die('Erro: ' . mysqli_error($conexao));
    }

    echo "Um registro adicionado";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>