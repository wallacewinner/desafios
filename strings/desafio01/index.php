
<html>
 <head>
   <title> Desafio 01 </title>
   <link rel="stylesheet" type="text/css" href="css/style.css"/>
 </head>
 <body>

   <div class="container">

     <div class="colleft">
       <h2>Digite o texto para ser formato aqui:</h2>
       <form class="form" action="index.php" method="post">
         <textarea rows="20" cols="40" name="text" autofocus></textarea>
         </br><input type="submit" value="FORMATAR" class="btn"/>
       </form>
     </div>

     <div class="colright">
       <h2>Texto Formatado: </h2>
       <div class="text">
           <?php
            $str = $_POST['text'];
            $parts = wordwrap ($str,40,"<br/>" );
            echo $parts;
           ?>
        </div>
     </div>

   </div>
 </body>
</html>
