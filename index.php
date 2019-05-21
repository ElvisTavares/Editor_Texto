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

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </head>
    <body>
        
        <form method="POST" action="processa.php">
           <div class="form-group">
                <label for="exampleFormControlTextarea1">Caixa de texto</label>
                <textarea class="form-control" name="exemplo" id="editor1" rows="10" cols="80">
               
               </textarea>
               <script>
                 
                   CKEDITOR.replace( 'editor1' );
               </script>
   
               <input type="submit" value="Postar" name="postar">
           </div>
        </form>
    </body>
</html>
