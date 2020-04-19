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
          .container{
            padding:30px;
          }

    </style>    
</head>
<body>
	<a name="haut"></a>
 <div class="container">
   <embed src="condition.pdf" type="application/pdf" width="100%" height="500px"></embed>
 </div> 
	<?php
        
	echo' </br><a class="btn btn-danger  btn-lg" href="index.php" role="button">ACCEPT</a>';

	echo' <a class="btn btn-danger  btn-lg" href="connect.php" role="button">REFUSE</a>';

    echo' <a class="btn btn-danger  btn-lg" href="#haut" role="button">GO UP</a>';
   	 	 
   	?>
	 

</body>
</html>