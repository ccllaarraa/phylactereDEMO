<?php
if($_POST["message"]) {
    mail("clarapasteau@gmail.com", "Time to write something", $_POST["message"]);
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <title>Phylactère</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  </head>
  
  <body>
    <main>   
        <section class="pto-main-section">

        <div class="header">
                <img class="logo" src="images/phylactere.png">
        </div>
        

        <div class="formContainer">
                    <form method="post" action="pto.php">
                        
                    
                        <textarea rows="40" cols="100" name="message" > </textarea>
                        
                        <input src= "images/button.png" class="buttonInput" alt="Submit Form" type="image" value="Submit">
                    </form> 
        </div>
        <img src= "images/who.png" class="draggable" >
 

        </section>

        <footer class="footer">
            
            <div class="language-container">
                    <a href="index.html" class="fr-button contour">Retour</a> / <a href="index-EN.html" class="eng-button contour">Back</a>
            </div>

        
        </footer>

    </main>
   
                
                <script>

                $(document).ready(function(){
                // to drag the WHO image in the page //
                $( function() {
                    $( ".draggable" ).draggable();
                } );
                });

                </script>

</body>



</html>