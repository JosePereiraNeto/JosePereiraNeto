<?php
// Inclua o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $horario = $_POST['horario'];
    $data = $_POST['data'];

    // Prepara a consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO usuarios (nome, email, cpf, telefone, horario, data) VALUES ('$nome', '$email', '$cpf', '$telefone', '$horario', '$data')";

    // Executa a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
