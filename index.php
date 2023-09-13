<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação de Progressão por Capacitação</title>
    <?php 
    require './conexao.php';
    ?>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="index.css" media="screen">
</head>

<body>
    <!-- Cabeçalho com título (com css de id "titulo") -->
    <div>
        <img src="http://localhost/formprogr/imagens/logo.jpg" alt="Logo" width="120" height="140">
        <h1 id="titulo">UFSB Formulário de Solicitação de Progressão por Capacitação</h1>
        <br>
    </div><br><br>

    <form method="post">
        <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
        <fieldset class="grupo">
            <p id="subtitulo">Dados de Identificação</p>
            <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
            <div class="campo">
                <label for="nome"><strong>Nome:</strong></label>
                <input type="text" name="nome" id="nome" placeholder="Nome completo" required><br><br>
            </div>
            <!-- Campo de siape -->
            <div class="campo">
                <label for="siape"><strong>SIAPE:</strong></label>
                <input type="text" name="siape" id="siape" placeholder="Digite seu SIAPE" required><br><br>
            </div>
            <!-- Campo de cargo -->
            <div class="campo">
                <label for="cargo"><strong>Cargo:</strong></label>
                <input type="text" name="cargo" id="cargo" placeholder="Digite seu cargo" required><br><br>
            </div>
            <!-- Campo de email -->
            <div class="campo">
                <label for="email"><strong>E-mail:</strong></label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required><br><br>
            </div>
            <!-- Campo de tel -->
            <div class="campo">
                <label for="tel"><strong>Telefone:</strong></label>
                <input type="tel" name="tel" id="tel" placeholder="Digite seu telefone" required><br><br>
            </div>

            <p id="subtitulo">A DGP - Diretoria de Gestão de Pessoas</p>

            <!-- Campo de Justificativa -->
            <div class="campo">
                <label for="just"><strong>Justificativa:</strong></label>
                <textarea id="textoGrande" name="just" rows="5" cols="40"
                    placeholder="Descreva nome do curso, carga horária, data da certificação e instituição"></textarea>
            </div>

            <!-- Campo de soma da carga horária excedente -->
            <div class="campo">
                <label>Desejo somar a carga horária excedente da progressão anterior: </label>

                <label><input type="radio" name="soma" value="Sim" id="yes" required>Sim</label>

                <label><input type="radio" name="soma" value="Não" id="no" required>Não</label><br>

            </div>

            <!-- Campo da data -->
            <div class="campo">
                <label for="data"><strong>Data de hoje:</strong></label>
                <input type="date" name="data" id="data" placeholder="" required><br><br>
            </div>

            <button name="Enviar" class="botao">Enviar</button>

    </form>

</body>

</html>