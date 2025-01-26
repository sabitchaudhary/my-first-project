<?php
include("conn.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$pn=$_POST['phone'];
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$add=$_POST['address'];
	$em=$_POST['email'];
	$pa=$_POST['password'];

	$query="INSERT INTO signin1 values('$pn','$fn','$ln','$add','$em','$pa')";
	if(mysqli_query($conn,$query))
	{
		echo " <script> alert('data has been successfully isserted')</script>";
        header("location:home.php");
         $_SESSION['loggedin'] = true;
	}
}
?>

   <form method="POST"  action="sign1.php">
<!-- signin -->
<div class="modal fade" id="example1ModalLong" tabindex="-1" role="dialog" aria-labelledby="example1ModalLong"aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="example1ModalLong">Sign up</h5>
       <button type="button" class="close" data-dismiss="modal" aria-Label="close" data-target="example1ModalLong">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     

<!-- ID -->
<div class="form-outline mb-4">
   
          <input type="number" id="form1" class="form-control" name="Phone" placeholder="Phone" required>
          <lavel class="form-label" for="form1">Phone</lavel>
        </div>

        <!-- First Name-->

        <div class="form-outline mb-4">
          <input type="text" id="form2" class="form-control" name="fname" placeholder="FirstName" required>
          <lavel class="form-label" for="form2">First Name</lavel>
        </div>
        <!--Second Name-->
        <div class="form-outline mb-4">
          <input type="text" id="form3" class="form-control" name="lname" placeholder="LastName" required>
          <label class="form-label" for="form3">  Last Name</label>
        </div>
        <!--Address input -->
        <div class="form-outline mb-4">
          <input type="text" id="form4" class="form-control" name="address" placeholder="Address" required>
          <label class="form-label" for="form4">Address</label>
        </div>
        <!--Email Address-->
        <div class="form-outline mb-4">
          <input type="text" id="form5" class="form-control" name="email">
          <lavel class="form-label" for="form5"><i class="fa fa-envelope fa-lg"></i>Email address</lavel>
        </div>
        <!--password-->
        <div class="form-outline mb-4">
          <input type="password" id="form6" class="form-control" name="password" placeholder="password" required>
          <label class="form-label" for="form6"> <i class="fa fa-lock"></i> Password</label>
        </div>
        </div>
        
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->


        <!-- 2 column grid layout for inline styling-->
        <div class="row mb-4">
          <div class="col">
            <!-- simple link-->
            If you have already account <?php
include("login1.php"); 
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-dismiss="modal" aria-Label="close">
    Login 
</button>
          </div>
        </div>
        <!--submit button-->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="Sigin1" data-toggle="modal" data-target="#example1ModalLong" data-dismiss="modal">Signin</button>
      </form>
    </div>
  </div>
</div>

</div>
<!-- signin close -->

    </form>
