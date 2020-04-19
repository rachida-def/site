
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style/style1.css?t=<? echo time();?>" type="text/css"  rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style>
          @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');

          *{
          	font family: 'Titillium Web', sans-serif;

          }
    </style>      
<title>Identification</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-6 m-auto">
			<div class="card-bg-dark mt-5">
				<div class="p-3 mb-2 bg-danger text-white mt-5">
					<h3 class="text-center">Login:</h3>
					<?php
                        if(@$_GET['Empty']==true){
                     ?>

                     <div class="alert-light text-danger text-center my-3">
                     	<?php echo$_GET['Empty']?>
                     </div>
                     <?php
                        }
					?>
					<?php
                        if(@$_GET['invalid']==true){
                     ?>

                     <div class="alert-light text-danger text-center my-3">
                     	<?php echo$_GET['invalid']?>
                     </div>
                     <?php
                        }
					?>

					<div class="card-body">
						<form action="check.php" method="post">
							<input type="text" name="uname" placeholder="login" class="form-control mb-3">
							<input type="password" name="password" placeholder="password" class="form-control mb-3">
							<button  class="btn btn-secondary mt-3" name="login">Login</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
