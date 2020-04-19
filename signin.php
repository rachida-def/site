
<?php
$db_user="root";
$db_pass="";
$db_name="dbproduct";

$db=new PDO('mysql:host=localhost;dbname='.$db_name.';charset-utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>sign Up</title>	
	<link href="style/style1.css?t=<? echo time();?>" type="text/css"  rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
          @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');

          *{
          	font family: 'Titillium Web', sans-serif;

          }
</style>
</head>
<body>
	<div>
		
		 
    </div>	
	<div>
		<form action="signin.php" method="post">
			<div class="container">

			  <div class="row">	
			  	<div class="col-sm-5">
				  <h1>Register</h1>
				  <label for="firstname"><b>First Name</b></label>
				  <input class="form-control" id="firstname" type="text" name="firstname" required>

				  <label for="lastname"><b>Last Name</b></label>
				  <input class="form-control" id="lastname" type="text" name="lastname" required>

				  <label for="email"><b>Email Adresse</b></label>
				  <input class="form-control" id="email" type="email" name="email" required>

				  <label for="phonenumber"><b>Phone Number</b></label>
				  <input  class="form-control" id="phonenumber"type="text" name="phonenumber" required>

				  <label for="password"><b>Password</b></label>
				  <input class="form-control mb-3" id="password" type="password" name="password" required>

				<input class="btn btn-primary" id="register"type="submit" name="create" value="Sign Up">
                <a class="btn btn-primary" href="connect.php" role="button">Sign in</a>
			   </div>
			  </div>	
			</div>
		</form>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
	$(function(){
           $('#register').click(function(e){
           	var valid=this.form.checkValidity();
           	if(valid){

           	var firstname  =$('#firstname').val();
           	var lastname   =$('#lastname').val();
           	var email      =$('#email').val();
           	var phonenumber=$('#phonenumber').val();
           	var password   =$('#password').val();

           		e.preventDefault();

           		$.ajax({
           			type:'POST',
           			url:'process.php',
           			data:{firstname:firstname,lastname:lastname,email:email,phonenumber:phonenumber,password:password},
           			success:function(data){
                           swal.fire({
   	                          'title':'Successful',
   	                          'text':data,
   	                           'type':'success'
   	                       })
            
           			},
           			error:function(data){
                         swal.fire({
   	                          'title':'Errors',
   	                          'text':'There were errors while saving data',
                              'type':'error'
   	                       })
            
           			}

           		});
           		
           	}else{
           		
           	}
           
           	});  
                
      
  });
</script>

</body>
</html>