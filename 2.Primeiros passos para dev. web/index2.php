<html>
    <head>
        <title> Meu segundo site em PHP! UwU</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <style type="text/css">
            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }
        </style>
    </head>

    <body>
        <?php
            for($i = 0; $i < 10; $i++) {
                print("<span class=\"linha\">Linha número: " . $i . "</span><br />");
            }
        ?>

        <script type="text/javascript">
            $(document).ready(function() {
                alert("UwU!");
            });
        </script>
</html>