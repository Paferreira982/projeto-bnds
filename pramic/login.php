<?php
@session_unset();
@session_destroy();
@$_SESSION = array();
@session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="" type="text/css">
</head>

<body>
    <form method="post" enctype="multipart/form-data" autocomplete="off">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" maxlength="40" size="50" />

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" maxlength="40" size="50" />
    </form>
</body>

</html>

<?php
require_once "_conexao.php";

?>