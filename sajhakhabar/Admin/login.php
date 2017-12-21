<?php
    include("../classes/application_top.php");
    if(isset($_POST['login'])){
      
    $username = $_POST['username'];
    
    $password = $_POST['password'];
   $obj->chklogin($username, $password);
  // var_dump($data);
}
?>
<?php include 'include/headersec.php';?>
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <form role="form" method="post" action="" onSubmit="return chklogin();">
          <div class="box-body">
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter your name">
            </div>
           
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div>
            <div class="box-footer">
                <input type="submit" name="login" value="Login">
            </div>
                
            <br>
              Not registered?? <br><br>
            <a href="register.php">Click here to Register</a> 
              
        </form>
     </div>
  </div>
  <!-- /.row -->
</section>