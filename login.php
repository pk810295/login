<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container mt-4 mb-2 bg-gradient-dark" style="width: 60%;background:#edeae1">
    <h2 class="text-center text-bold">Log In</h2>
    <hr>
   <form action="" method="post" >
  <div class="form-group">
    
 
    <label for="exampleInputEmail1">Email address</label>
    <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="required">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd" required="required"><br>
   
  
  <div class="form-check">
    <input  type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div><br>
  <p class="text-center pb-2"><button type="submit" name="submit" class="btn btn-primary">Log In</button></p>
</form>
  </div>
  
</body>
</html>
<?php 
include('db_connect.php');
  if(isset($_POST['submit'])){
    extract($_POST);
   
  $sql="SELECT * from user where email='$email'";
            $result=$conn->query($sql);
            $val=$result->fetch_assoc();
            if($val>0){
              if($pwd==$val['password']){
                session_start();
              $_SESSION['user']=1;
               header("Location: http://127.0.0.1/signup/home.php");
              }
              else{
                ?>
                <script type="text/javascript">
                  window.alert("Wrong credentials");
                </script>
                <?php
              }
              
            }
            else{
              echo "User not found";
            }
            
}
  
  
?>
