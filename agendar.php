<!DOCTYPE html>
<html>

<head>
    <title>Exemplo de PHP com HTML</title>
    <link rel="stylesheet" type="text/css" href="estilo_agd.css">
</head>

<body>

    <fieldset id="form_field">
        <legend>Agendar evento</legend>
        <form action="get" id="formulario">
            <div id="div_form">
                <div id="form1">
                    <div id="titulo_div">
                        <label>Título</label><br>
                        <input type="text">
                    </div>
                    <br><br>
                    <div id="desc_div">
                        <label>Descrição</label><br>
                        <textarea cols="20" rows="3" placeholder="Meu super duper evento"></textarea>
                    </div>
                </div>

                <div id="form2">
                    <div id="data_div">
                        <label>Data</label><br>
                        <input type="date">
                    </div>
                    <br><br>
                    <div id="hora_div">
                        <label>Hora</label><br>
                        <input type="time">
                    </div>
                </div>
            </div>

            <input type="submit">
        </form>
    </fieldset>

    <?php

    ?>

</body>

</html>