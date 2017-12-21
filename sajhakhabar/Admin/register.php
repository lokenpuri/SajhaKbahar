<?php
include("../classes/application_top.php");
   
if(isset($_POST['register'])){
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
    
    if($pass==$cpass){
    $obj->table_name = 'admin_table';
        $obj->val = array("username"=>$_POST['username'],
                          "email"=>$_POST['email'],
                          "password"=>md5($_POST['password'])
                          );   
        $obj->insert();
    header('Location: register.php');
}else{
    echo 'passwords do not  match';
}
}
?>
<?php include 'include/headersec.php';?>

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
        
        <form role="form" method="post" action="">
          <div class="box-body">           

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
              
<!--            <div class="form-group">
                <label for="imageselection">Choose Photo</label>
                <input type="file" name="image" id="image_select" placeholder="choose image">
            </div>  -->
              
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div><div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Repeat password">
            </div>
              
            <div class="box-footer">
                <input type="submit" name="register" value="Sign up">
            </div>
              <br>
              Already registered?? <br><br>
       <a href="login.php">Click here to login</a> 
              
        </form>
     </div>
  </div>
  <!-- /.row -->
</section>

