<?php
session_start();

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Editor de Texto</title>
        <script src="ckeditor.js"></script>
    </head>
    <body>
        
        <form method="POST" action="processa.php">
            <textarea name="exemplo" id="editor1" rows="10" cols="80">
               
            </textarea>
            <script>
              
                CKEDITOR.replace( 'editor1' );
            </script>

            <input type="submit" value="Postar" name="postar">
        </form>
    </body>
</html>
