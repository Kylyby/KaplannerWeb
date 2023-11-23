<!DOCTYPE html>
<html>

<head>
    <title>Exemplo de PHP com HTML</title>
    <link rel="stylesheet" type="text/css" href="estilo_agd.css">
</head>

<body>

    <fieldset id="form_field">
        <form method="get" id="formulario">
            <br><label id="title_form">Editar evento</label>
            <div id="div_form">
                <div id="form1">
                    <div id="titulo_div">
                        <label>Título</label><br><br>
                        <input type="text" class="large_inp">
                    </div>
                    <br><br>
                    <div id="desc_div">
                        <label>Descrição</label><br><br>
                        <textarea cols="20" rows="5" placeholder="Meu super duper evento" class="large_inp"></textarea>
                    </div>
                </div>

                <div id="form2">
                    <div id="data_div">
                        <label>Data</label><br><br>
                        <input type="date">
                    </div>
                    <br><br>
                    <div id="hora_div">
                        <label>Hora</label><br><br>
                        <input type="time">
                    </div>
                </div>
            </div>

            <br><br>
            <div id="div_submit">
                <input type="submit" id="submit">
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

    ?>

</body>

</html>