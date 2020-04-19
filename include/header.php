<?php
session_start();
$database_name="dbproduct";
$con = mysqli_connect("localhost","root","",$database_name);
   
?>
<!DOCTYPE html>
<html>
<head>
    <link href="style/style1.css?t=<? echo time();?>" type="text/css"  rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style>
          @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');

          *{
          	font family: 'Titillium Web', sans-serif;

          }

         
          .product{
            border: 1px solid #eaeaec;
            float:left;
	        width:180px;
	        margin:5px;
            text-align: center;
            background-color: #efefef;
            
        }
         div.product img{
	          width:100%;
	          height: 0 auto;
	         
          }
        
       
          	
        table, th, tr{
            text-align: center;
          
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            padding: 2%;
        }
        table th {
            background-color: #efefef;
        }
</style>
</head>
<header >
	<h2>high-shpping</h2>
	<ul class="menu">
		<li><a href="accueil.php" >ACCUEIL</a></li> 
		<li><a href="panier.php">PANIER</a></li>
		<li><a href="signin.php">INSCRIPTION</a></li>
		<li><a href="connect.php">CONNEXION</a></li>
		<li><a href="cond.php">CONDITIONS DE VENTE</a></li>
	</ul>
</header>
<body>
	
	<div class="container " style="width 65%;">
		
         <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-sm">

                        <form method="post" action="panier.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                            	
                                <img src="<?php echo $row["image"]; ?>"    class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
	</div>
</body>
 
</html>
