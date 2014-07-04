<?php
echo 'asdasd \' &gt; asd a';
?>
<html>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" language="javascript">
        function Form() {
            $.post('B.php', $("form").serialize(), function(data) {
                $("#status").html(data);
                $("#status").slideDown();
            });
        }
    </script>
    <head></head>
    <body>
        <form id="formulario">
            <input id="id" name="id" type="text" value="233123"><br>
            <input id="nome" name="nome" type="text" value="asdas"><br>
            <div id="status" ></div>
            <input type='button'  class="right" id="saveCeremony" value='Save' onclick="Form()">
        </form>
    </body>
</html>