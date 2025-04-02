<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>

      			 <?php
		 if (isset($_GET['h_id'])) {
		 	// code...
		 	$the_house_id = $_GET['h_id'];
		 }
                                             

                        $query = "SELECT * FROM houses where house_id = $the_house_id " ;
                        $select_houses = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_houses)) {
                                 $house_id = $row['house_id'];
                            $house_number = $row['house_number'];
                            $house_image = $row['house_image'];
                            $house_image1 = $row['house_image1'];
                            $house_image2 = $row['house_image2'];
                            $house_image3 = $row['house_image3'];

                            $house_size = $row['house_size'];
                            $house_rooms=$row['house_rooms'];
                            $house_rent=$row['house_rent'];
                            $house_units=$row['units'];
                            $house_category = $row['house_category'];
                            $house_status = $row['house_status'];
                            $house_location=$row['house_location'];
                            $house_description=$row['house_description'];
                          
}
                          ?>
<section id="listing_main" style="background-image: url(admin/images/<?php echo $house_image?>);  
">
 <div class="container">
  <div class="row">
   <div class="listing_main_1">
    <h2><?php echo $house_number?></h2>
	<!-- <p><a href="index"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="#"> PROPERTY DETAILS </a></p> -->
   </div>
  </div>
 </div>
</section>
<section id="listing_details">
 <div class="container">
  <div class="row">
   <div class="listing_details_1 clearfix">
   <div class="col-sm-8">
     <div class="listing_details_1 clearfix">
      <div class="carousel slide article-slide" id="article-photo-carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner cont-slider">
    <div class="item">
     <div class="magnify clearfix"><img data-toggle="magnify"src="admin/images/<?php echo $house_image3?>" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
    </div>
    <div class="item">
      <div class="magnify clearfix"><img data-toggle="magnify" src="admin/images/<?php echo $house_image2?>" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
    </div>
    <div class="item">
      <div class="magnify clearfix"><img data-toggle="magnify" src="admin/images/<?php echo $house_image1?>" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
    </div>
    <div class="item active">
      <div class="magnify clearfix"><img data-toggle="magnify" src="admin/images/<?php echo $house_image?>" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
    </div>
<!-- 	<div class="item">
      <div class="magnify clearfix"><img data-toggle="magnify" src="img/38.jpg" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
    </div>
	<div class="item">
      <div class="magnify clearfix"><img data-toggle="magnify" src="img/39.jpg" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
    </div> -->
  </div>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li class="" data-slide-to="0" data-target="#article-photo-carousel">
     <img src="admin/images/<?php echo $house_image3?>" >
    </li>
    <li class="" data-slide-to="1" data-target="#article-photo-carousel">
     <img src="admin/images/<?php echo $house_image2?>" >
    </li>
    <li class="" data-slide-to="2" data-target="#article-photo-carousel">
     <img src="admin/images/<?php echo $house_image1?>" >
    </li>
    <li class="active" data-slide-to="3" data-target="#article-photo-carousel">
     <img src="admin/images/<?php echo $house_image?>" >
    </li>
   
<!-- 	<li class="" data-slide-to="4" data-target="#article-photo-carousel">
      <img alt="" src="img/47.jpg">
    </li>
	<li class="" data-slide-to="5" data-target="#article-photo-carousel">
      <img alt="" src="img/48.jpg">
    </li> -->
  </ol>
</div>
     </div>

	 <div class="listing_details_2">
	  <p style="word-wrap: break-word;"><?php echo $house_description?></p><br>
	  <hr>

	 <div class="listing_details_3">
    <h2>PROPERTY <a href="#">DETAILS</a></h2>
	<div class="line width-21 clearfix">
	 <div class="line_inner width-50 clearfix"></div>	
	</div>
   </div>
 
     <div class="listing_details_5 clearfix">
       <div class="col-sm-6 space_all">
	    <div class="listing_details_6">
		 <ul>
		      <li><i class="fa fa-angle-double-right"></i>Property ID :<span class="tab_1"><a href="#"><?php echo $house_number?></a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>Full Area :<span class="tab_1"><a href="#"><?php echo $house_size?></a></span></li>
			
			<!--   <li><i class="fa fa-angle-double-right"></i>Bathrooms :<span class="tab_1"><a href="#">3</a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>Garages :<span class="tab_1"><a href="#">1</a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>Swimming Pool :<span class="tab_1"><a href="#">Yes</a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>Party Rooms :<span class="tab_1"><a href="#">Yes</a></span></li> -->
		 </ul>
		</div>
	   </div>
	   <div class="col-sm-6 space_all">
	    <div class="listing_details_6">
		 <ul>
		      <li><i class="fa fa-angle-double-right"></i>Status :<span class="tab_1"><a href="#">For <?php echo $house_category?></a></span></li>
		      <li><i class="fa fa-angle-double-right"></i>Bedrooms<span class="tab_1"><a href="#"><?php echo $house_rooms?></a></span></li>
<!-- 			  <li><i class="fa fa-angle-double-right"></i>Kitchen :<span class="tab_1"><a href="#">2</a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>AC Rooms :<span class="tab_1"><a href="#">4</a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>Internet :<span class="tab_1"><a href="#">Yes</a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>Cable TV :<span class="tab_1"><a href="#">Yes</a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>Balcony :<span class="tab_1"><a href="#">Yes</a></span></li>
			  <li><i class="fa fa-angle-double-right"></i>Pool :<span class="tab_1"><a href="#">Yes</a></span></li> -->
		 </ul>
		</div>
	   </div>
     </div>
      <hr>
<?php

 if(isset($_POST['book'])){
 $the_house_id = $_GET['h_id'];
                            
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$date=$_POST['date'];
$time=$_POST['time'];


$query = "INSERT INTO bookings(name,phone,email,message,time,house_id,status,date)";
 $query.= "VALUES('{$name}','{$phone}','{$email}','{$message}','{$time}','{$the_house_id}','pending','{$date}')";
                            
$insert=mysqli_query($connection,$query);
if($insert){
        echo '<script>alert("visit booked successfully")</script>';
                            		
    }else{
   die(mysqli_error($connection));


}

                          
}




?>

	  <form method="post" action="">
<h5><B>INQUIRE / SCHEDULE VISIT</B></h5>
<div class="col-sm-12 space_all">
	  <div class="col-sm-4 space_all">
	   <div class="listing_details_11">
	   	<label>Your Name</label>
	    <input type="text" class="form-control" placeholder="" name="name" >
	   </div>
	  </div>
	  <div class="col-sm-4 space_all">
	   <div class="listing_details_11">
	   	<label>Your Email</label>
	    <input type="text" class="form-control" placeholder="" name="email" >
	   </div>
	  </div>
	  <div class="col-sm-4 space_all">
	   <div class="listing_details_11">
	   	<label>Your Phone</label>
	    <input type="text" class="form-control" placeholder="" name="phone">
	   </div>
	  </div>
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="col-sm-4 space_all">
	   <div class="listing_details_11">
	   	<label>Visit Date</label>
	    <input type="date" class="form-control" placeholder="" name="date" >
	   </div>
	  </div>
	  <div class="col-sm-4 space_all">
	  	
	   <div class="listing_details_11">
	   	<label>Visit Time</label>
	    <input type="time" class="form-control" placeholder="" name="time" >
	   </div>
	  </div>
	
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="listing_details_12">
	  		<label>Your Message</label>
	   <textarea placeholder="Message" class="form-control" name="message"></textarea>
	  </div>
	 </div>
	 


	  	<button class="btn btn-success" name="book" type="submit">BOOK HERE</button>
	  </form>
	 </div>
	 <hr>

                  <?php

                $query = "SELECT * FROM comments WHERE comment_post_id = $the_house_id ";
                $query .= "AND comment_status = 'unapproved' ";
                $query .= "ORDER BY comment_id DESC";

                $select_comment_query = mysqli_query($connection,$query);
                $count=mysqli_num_rows($select_comment_query);


                ?>
	 <div class="listing_details_7 clearfix">
	  <h3><a href="#">Reviews <?php echo $count;?></a></h3>
       
	   </div>
	   <?php

                $query = "SELECT * FROM comments WHERE comment_post_id = $the_house_id ORDER BY comment_id DESC LIMIT 3";


                $select_comment_query = mysqli_query($connection,$query);
                
                if(!$select_comment_query){
                    die('QUERY FAILED' . mysqli_error($connection));
                }

                while($row= mysqli_fetch_array($select_comment_query)){
                	$comment_email=$row['comment_email'];
                    $comment_date = $row['comment_date'];
                    $comment_content = $row['comment_content'];
                    $comment_author = $row['comment_author'];


              
                
                ?>


       <div class="col-sm-9">
	    <div class="listing_details_9">
		 <h5><?php echo $comment_author;?></h5>
		 <h6><?php echo $comment_date;?></h6>
		 <p><?php echo $comment_content;?><p>
		</div>
	   </div>
	   <?php } ?>	
  <?php     	

	   $query = "SELECT * FROM users WHERE id = $user_id " ;
                        $select_tenant = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_tenant)) {
                             $tenants_id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $phone = $row['mobile'];
                           
                            $date_admitted = $row['date'];
                           
                           
                            $email = $row['email'];
                            $password = $row['password'];
                          
                          }
                      ?>
	 
	 <div class="listing_details_11 clearfix">




<?php
ob_start();
session_start();
include "includes/db";
if(isset($_POST['create_comment'])){

if(isset($_SESSION['id'])){

$user_id = $_SESSION['id'];



   $query = "SELECT * FROM users WHERE id = $user_id " ;
                        $select_tenant = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_tenant)) {
                             $tenants_id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $phone = $row['mobile'];
                           
                            $date_admitted = $row['date'];
                           
                           
                            $email = $row['email'];
                            $password = $row['password'];
                          
                          }


    $the_house_id = $_GET['h_id'];

     $comment_author=$_POST['firstname'];
      $comment_phone=$_POST['phone'];
     $comment_email=$_POST['email'];
     $comment_content=$_POST['message'];


$query= "INSERT INTO comments (comment_post_id, comment_author, comment_email,comment_phone ,comment_content, comment_status, comment_date) ";
$query .= "VALUES ($the_house_id,'{$comment_author}' , '{$comment_email}' , '{$comment_phone}','{$comment_content}','unapproved',now())";

$create_comment_query = mysqli_query($connection,$query);
    if(!$create_comment_query){
        die("query failed". mysqli_error($connection));
    }else{
        echo "comment submitted successfully";
    }

}
}
?>




	 	
	  <div class="col-sm-12" >
	  	<h4>LEAVE A REVIEW</h4>
	  	<form method="post" action="">
	 <div class="col-sm-12 space_all">
	  <div class="col-sm-4 space_all">
	   <div class="listing_details_11">
	    <input type="text" class="form-control" placeholder="name" name="firstname" value="<?php echo $firstname ?>" >
	   </div>
	  </div>
	  <div class="col-sm-4 space_all">
	   <div class="listing_details_11">
	    <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $email ?>">
	   </div>
	  </div>
	  <div class="col-sm-4 space_all">
	   <div class="listing_details_11">
	    <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $phone ?>">
	   </div>
	  </div>
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="listing_details_12">
	   <textarea placeholder="Review" class="form-control" name="message"></textarea>
	  </div>
	 </div>
	 	   <?php 
   error_reporting(0);
    $id=$_SESSION['id'];

   if($id >= 1){?>
     <button type="submit" name="create_comment" class="btn btn-warning">SUBMIT</button>
      
      <?php }else{?>
 <a href="login">login </a> first	
    <?php  } ?>
	    
	
	</form>
	</div>
	 </div>
    </div>
	<div class="col-sm-4">
<!-- 	 <div class="listing_details_14">
	  <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search Here.....">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
	 </div> -->
	 <div class="listing_details_15">
	  <h3>Other Properties</h3>
	  <div class="line width-40 clearfix">
	 <div class="line_inner width-70 clearfix"></div>	
	 </div>

	 <!-- <div class="listing_details_16">
	  <ul>
	      <li class="list_1"><a href="#">NEW BUILDING </a> <span class="tab_2">(10)</span></li>
		  <li class="list_1"><a href="#">MODERN DESIGN </a> <span class="tab_2">(08)</span></li>
		  <li class="list_1"><a href="#">BEST DESIGN </a> <span class="tab_2">(29)</span></li>
		  <li class="list_1"><a href="#">POPULAR DESIGN </a> <span class="tab_2">(33)</span></li>
		  <li class="list_1"><a href="#">STRONG BUILDING </a> <span class="tab_2">(23)</span></li>
		  <li class="list_1"><a href="#">OLD DESIGN </a> <span class="tab_2">(22)</span></li>
		  <li class="list_1"><a href="#">POPULAR DESIGN </a> <span class="tab_2">(29)</span></li>
		  <li><a href="#">BEST DESIGN </a> <span class="tab_2">(11)</span></li>
	  </ul>
	 </div> -->
	
	 <?php
		 if (isset($_GET['h_id'])) {
		 	// code...
		 	$the_house_id = $_GET['h_id'];
		
                                             

                        $query = "SELECT * FROM houses where house_id != $the_house_id " ;
                        $select_houses = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_houses)) {
                                 $house_id = $row['house_id'];
                            $house_number = $row['house_number'];
                            $house_image = $row['house_image'];
                            $house_image1 = $row['house_image1'];
                            $house_image2 = $row['house_image2'];
                            $house_image3 = $row['house_image3'];

                            $house_size = $row['house_size'];
                            $house_rooms=$row['house_rooms'];
                            $house_rent=$row['house_rent'];
                            $house_units=$row['units'];
                            $house_category = $row['house_category'];
                            $house_status = $row['house_status'];
                            $house_location=$row['house_location'];
                            $house_description=$row['house_description'];
                          

                          ?>
	


	 <div class="listing_details_22">
	  <a href="property_details?h_id=<?php echo $house_id?>"><img src="admin/images/<?php echo $house_image;?>" alt="abc" class="img_responsive"></a>
	 </div>
	 <?PHP }  } ?>
	<!--  <div class="listing_details_22">
	  <a href="#"><img src="img/56.jpg" alt="abc" class="img_responsive"></a>
	 </div> -->
	</div>
   </div>
  </div>
 </div>
</section>
<?php include "includes/footer.php"?>