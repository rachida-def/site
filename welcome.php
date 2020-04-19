<?php
session_start();
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	 <link href="style/style1.css?t=<? echo time();?>" type="text/css"  rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');

          *{
          	font family: 'Titillium Web', sans-serif;

          }
</style>
 </head>
 <body>
 
 
 <?php
    if(isset($_SESSION['user'])){

     
     echo' <a class="btn btn-danger  btn-lg" href="index.php" role="button">HOME</a>';
   	 
     echo ' <a class="btn btn-danger  btn-lg" href="connect.php" role="button">LOGOUT</a>';
     echo' <a class="btn btn-danger  btn-lg" href="cond.php" role="button">CONDITION DE VENTE</a>';

   }else{
     header("location:connect.php");

   }
   
?>
</body>
 </html>
