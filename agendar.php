<!DOCTYPE html>
<html>

<head>
    <title>Exemplo de PHP com HTML</title>
    <link rel="stylesheet" type="text/css" href="estilo_agd.css">
</head>

<body>

    <fieldset id="form_field">
        <form action="agendar.php" id="formulario" method="POST">
            <br><label id="title_form">Agendar evento</label>
            <div id="div_form">
                <div id="form1">
                    <div id="titulo_div">
                        <label>Título</label><br><br>
                        <input type="text" class="large_inp" name="titulo">
                    </div>
                    <br><br>
                    <div id="desc_div">
                        <label>Descrição</label><br><br>
                        <textarea cols="20" rows="5" placeholder="Meu super duper evento" class="large_inp"
                            name="descricao"></textarea>
                    </div>
                </div>

                <div id="form2">
                    <div id="data_div">
                        <label>Data</label><br><br>
                        <input type="date" name="data">
                    </div>
                    <br><br>
                    <div id="hora_div">
                        <label>Hora</label><br><br>
                        <input type="time" name="hora">
                    </div>
                </div>
            </div>

            <br><br>
            <div id="div_submit">
                <input type="submit" id="submit" name="submit">
                <button type="button" id="voltar" onclick="goBack()">Cancelar</button>
            </div>
        </form>
    </fieldset>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <?php
    // Database connection
    $host = 'localhost:3306';
    $db = 'mydb';
    $user = 'root';
    $pass = 'meia-noite eu te conto';
    $charset = 'utf8mb4';


    if (isset($_POST['submit'])) {
        // Get form data
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];

        $conexao = mysqli_connect($host, $user, $pass, $db);

        $sql = "INSERT INTO compromisso(id_compromisso, nome_compromisso, descr, prazo, hora_comp) VALUES (default,'$titulo', '$descricao', '$data', '$hora')";
        mysqli_query($conexao, $sql);
        print_r("oioioio");


    }
    ?>

</body>

</html>
