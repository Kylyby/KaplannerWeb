<html>

<head>
    <title>teste</title>
</head>

<body>
    aaaaaaaaaaaaaaaaa

    <?php

    $conexao = mysqli_connect("localhost:3306", "root", "segredo");

    if (mysqli_connect_errno()) {
        echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    } else {
        echo "Sucesso";
    }
    ?>
</body>

</html>