<?php
echo getcwd(), '<br>', file_exists('images/icons/css/font-awesome.css');

if (!empty($_GET))
    return var_dump($_GET);
?>
<html>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        $(function() {
            $('#form').submit(function(){
        //       event.preventDefault(); 
               $.post($(this).attr("action"), $(this).serialize(), function(data) {
                   $("#result").html(data);
               });
               return false;
           });
        });
    </script>

    <head></head>
    <img src="wamp.ico">
    <body>
        <form id="form" action="A.php">
            <input name="id" type="text" value="233123"><br>
            <input name="nome" type="file" value="asdas"><br>
            <div id="result" ></div>
            <input type="submit" name="submit" value="Enviar Mensagem"/>
        </form>
    </body> 
</html>