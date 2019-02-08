<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor.js"></script>
    </head>
    <body>
        
        <form method="POST" action="processa.php">
            <textarea name="exemplo" id="editor1" rows="10" cols="80">
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

            <input type="submit" value="Postar" name="postar">
        </form>
    </body>
</html>
