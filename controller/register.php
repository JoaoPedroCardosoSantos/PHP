<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    echo "<div class='text-center'>ACESSO NEGADO</div>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome'])) {
    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = [];
    }

    $student = [
        'nome' => $_POST['nome'],
        'telefone' => $_POST['telefone'],
        'email' => $_POST['email'],
        'endereco' => $_POST['endereco']
    ];

    $_SESSION['students'][] = $student;

    if (count($_SESSION['students']) >= 5) {
        header("Location: show_students.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cadastro de Alunos</title>
    <style>
        .text-center {
            text-align: center;
            margin-top: 20px;
        }
        .form-center {
            margin: 0 auto;
            width: 300px;
        }
    </style>
</head>
<body>

<a href="../view/exerciciosLoops/(1)_login.html" id="arrow" class="align-self-start fs-2 mt-5 ms-5">
      <i class="bi bi-arrow-left m-3"> </i>
    </a>
    <h2 class="text-center mt-5">Cadastro de Alunos</h2>
    <form method="post" action="register.php" class="form-center">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <h2 class="text-center mt-5">Alunos Cadastrados</h2>
        <div class="row">
            <div class="col-4"></div>
        <table border="1" class="text-center col-4 mt-5">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Endereço</th>
        </tr>
        <?php
        if (isset($_SESSION['students'])) {
            foreach ($_SESSION['students'] as $student) {
                echo "<tr>
                        <td>{$student['nome']}</td>
                        <td>{$student['telefone']}</td>
                        <td>{$student['email']}</td>
                        <td>{$student['endereco']}</td>
                      </tr>";
            }
        }
        ?>
    </table>
        </div>
</body>
</html>
