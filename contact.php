<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>
<section id="">
 <div class="container">
  <div class="row">
   <div class="contact_main_1">
    <h2>CONTACT</h2>
	<p><a href="index"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="#"> CONTACT </a></p>
   </div>
  </div>
 </div>
</section>
<section id="contact">
  <div class="container">
   <div class="row">
    <div class="col-sm-12">
	 <div class="col-sm-4">
	  <div class="contact_1">
	    <h4>ADDRESS:</h4>
		<p><i class="fa fa-home"></i>Hurlingham Court, 60632-00200, Nairobi</p>
	  </div>
	  <div class="contact_2">
	    <h4>PHONES:</h4>
		<p><i class=" fa fa-phone"></i>0722 518457</p>
		<p><i class="fa fa-fax"></i>0202600145</p>
	  </div>
	  <div class="contact_3">
	    <h4>E-MAIL:</h4>
		<p><i class="fa fa-envelope"></i><a href="#">info@gmail.com</a></p>
	  </div>
	 </div>
	 <div class="col-sm-8">
	  <div class="contact_4">
	    <h4>Contact</h4>
		<p>Contact us by filling the form below</p>
	  </div>

	  <?php
if (isset($_POST['send'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	$query="INSERT INTO contact(name,email,phone,message,date)";
	$query.="VALUES('{$name}','{$email}','{$phone}','{$message}',now())";
	$insert=mysqli_query($connection,$query);

	if($insert){
        echo "<p class='alert alert-success' style='margin-top:30px'>message successfully sent<p>";
    }else{
       die("failed".mysqli_error($connection));
    // echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occured while adding<p>";   
}




}


?>
	  <form method="post">
	  <div class="col-sm-12 drop_2 clearfix">
	   <div class="col-sm-4 drop_2">
	    <div class="contact_5"><input type="text" name="name" placeholder="First Name" required=""></div>
	   </div>
	   <div class="col-sm-4 drop_2">
	    <div class="contact_5"><input type="text" name="email" placeholder="Email" required=""></div>
	   </div>
	   <div class="col-sm-4 drop_2">
	    <div class="contact_5"><input type="text" name="phone" placeholder="Phone" required=""></div>
	   </div>
	  </div>
	  <div class="col-sm-12 drop_2">
	   <div class="contact_6"><textarea name="message" placeholder="Message" required=""></textarea></div>
	   <div class="contact_7">
	     <button type="submit" name="send" class="btn btn-warning">SEND</button>	
	   </div>
	  </div>
	</form>
	 </div>
	</div>
   </div>
  </div>
</section>
<section id="contact_inner">
<div id="googleMap" style="width:100%;height:400px;"></div>
</section>
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(35.1614699,-87.3480734),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<?php include "includes/footer.php"?>