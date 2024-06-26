<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "1234") {
    $_SESSION['authenticated'] = true;
    echo "<div class='text-center fs-4 mt-5'>ACESSO PERMITIDO</div>";
    echo "<form action='register.php' method='post'>
            <div class='text-center'>
                <input class='btn btn-primary mt-5' type='submit' value='Cadastrar Alunos'>
            </div>
          </form>";
} else {
    echo "<div class='text-center'>ACESSO NEGADO</div>";
}
?>
