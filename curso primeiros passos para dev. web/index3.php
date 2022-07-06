<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Testando jQuery Accordion</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#accordion").accordion();
            });
        </script>
    </head>
    <body>
        <h1>Canção do Exílio</h1>
        <h2><i>Gonçalves Dias</i></h2>
        <div id="accordion">
            <h3><b>Seção 1</b></h3>
            <div>
                <p>
                <i>Minha terra tem palmeiras<br>
                Onde canta o Sabiá,<br>
                As aves, que aqui gorjeiam,<br>
                Não gorjeiam como lá.<br>
               <br>
                Nosso céu tem mais estrelas,<br>
                Nossas várzeas têm mais flores,<br>
                Nossos bosques têm mais vida,<br>
                Nossa vida mais amores.</i>
                </p>
            </div>
            <h3><b>Seção 2</b></h3>
            <div>
                <p>
                <i>Em cismar, sozinho, à noite,<br>
                Mais prazer encontro eu lá;<br>
                Minha terra tem palmeiras,<br>
                Onde canta o Sabiá.<br>
                <br>
                Minha terra tem primores,<br>
                Que tais não encontro eu cá;<br>
                Em cismar – sozinho, à noite –<br>
                Mais prazer encontro eu lá;<br>
                Minha terra tem palmeiras,<br>
                Onde canta o Sabiá.</i>
                </p>
            </div>
            <h3><b>Seção 3</b></h3>
            <div>
                <p>
                <i>Não permita Deus que eu morra,<br>
                Sem que eu volte para lá;<br>
                Sem que desfrute os primores<br>
                Que não encontro por cá;<br>
                Sem qu’inda aviste as palmeiras,<br>
                Onde canta o Sabiá.</i>
                </p>
            </div>

            <br>Acabou !!!
    </body>
</html>