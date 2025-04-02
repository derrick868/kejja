<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>
<section id="center">
  <div class="center">
   <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <div class="overlay"></div>
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="item slides">
      <div class="slide-1" style="background-image: url(img/1.jpg);"></div>
      <div class="hero">
        <hgroup>
            <h1>Welcome</h1> 
			 <h3>view our various properties</h3>   
			 <h4><a href="property">click here</a></h4>    
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2" style="background-image: url(images/image2.jpg);"></div>
      <div class="hero">        
        <hgroup>
            <h1>CONTACT US</h1> 
			 <h3>feel free to talk to us</h3>   
			 <h4><a href="contact">Click here</a></h4>    
        </hgroup>
      </div>
    </div>
    <div class="item slides active">
      <div class="slide-3" style="background-image: url(images/12.jpg);"></div>
      <div class="hero">        
        <hgroup>
            <h1>Leoma properties limited</h1> 
		<!-- 	 <h3>Vestibulum Lacinia Arcu Eget</h3>  -->  
			 <h4><a href="index">GET STARTED</a></h4>    
        </hgroup>
      </div>
    </div>
  </div> 
  </div>
  </div>
 </section>

<section id="available">
 <div class="container">
  <div class="row">
   <div class="available_1 clearfix">
    <div class="col-sm-8">
	 <div class="available_2">
	  <h1>FEW DESCRIPTION</h1>
	  <h2>ABOUT LEOMA</h2>
	  <h5>properties ltd</h5>
	 </div>
	 <div class="available_3">
	  <p>Leoma brings 20 years of experience in real estate, excellent customer service and a commitment to work hard, listen and follow through. Provide quality service to build relationships with clients and more importantly, maintain those relationships.</p>
	  
	 
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="available_4">
	  <a href="#"><img src="images/title.jpg" alt="#" class="img_responsive"></a>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
<section id="book" class="clearfix">
   <div class="book_1">
    <div class="col-sm-6 space_all">
	 <div class="book_2">
	  <h5>BOOK YOUR</h5>
	  <h3>APPARTMENT OR HOUSE</h3>
	 </div>
	</div>
	<div class="col-sm-6 space_all">
	 <div class="book_3">
	  <h3>WE ARE READY TO RECEIVE YOUR CALL</h3>
	  <h4>+254704093823</h4>
	 </div>
	</div>
   </div>
</section>
<section id="property">
 <div class="container">
  <div class="row">
   <div class="property_1">
    <h2>AWESOME <a href="#">PROPERTY</a></h2>
	<div class="line width-10 clearfix">
	 <div class="line_inner width-70 clearfix"></div>	
	</div>
   </div>
   <div class="property_3">
    <p>Our list of properties:</p>
   </div>
   <div class="col-sm-12 space_all">
    <div class="blog_home1">


    	  <?php
                                             

                        $query = "SELECT * FROM houses " ;
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
                        
                            $house_description =substr($row['house_description'], 0,70);


                          ?>
	 <div class="col-sm-4">
	   <div class="blog_home1i clearfix">
			<a href="property_details?h_id=<?php echo $house_id?>"><img src="admin/images/<?php echo $house_image?>" style="width: 360px;height: 300px;" alt="abc" class="img_responsive"></a>
	    <div class="blog_home1ii clearfix">
		

		  <?php

                $query = "SELECT * FROM comments WHERE comment_post_id = $house_id ";
                $query .= "AND comment_status = 'unapproved' ";
                $query .= "ORDER BY comment_id DESC";

                $select_comment_query = mysqli_query($connection,$query);
                $count=mysqli_num_rows($select_comment_query);


                ?>
			<ul>
			
		<!-- 	 <li>	  <form method="post" action="includes/book?user_id=<?php echo $_SESSION['id']?>&h_id=<?php echo $house_id?>"><i class="fa fa-plus"></i> <a name="book" type="submit" href="includes/book?user_id=<?php echo $_SESSION['id']?>&h_id=<?php echo $house_id?>"> BOOK</a></form></li> -->
			 <li><i class="fa fa-comment"></i> <a href="property_details?h_id=<?php echo $house_id?>" ><?php echo $count;?> reviews</a></li>
			 <h4><a href="property_details?h_id=<?php echo $house_id?>"><?php echo $house_number?></a></h4>
			</ul>
		<p><?php echo $house_description?> <a href="property_details?h_id=<?php echo $house_id?>">Read More</a></p>
		</div>
		<div class="blog_home1il clearfix">
        <h6 class="mgt"><span class="date">For <?php echo $house_category?></span> <span class="year">KES:<?php echo $house_rent?> <?php echo $house_units?></span></h6>
		</div>
	  </div>
	  <div class="property_2">
	     <ul>
	    <!--    <li><i class="fa fa-object-group"></i></li>
			  <li> <?php echo $house_size?></li> -->
			  <li><i class="fa fa-bed"></i></li>
			  <li><?php echo $house_rooms?></li>
			  <li><i class="fa fa-map-marker"></i></li>
			  <li><?php echo $house_location?></li>
	     </ul>
	  </div>
	 </div>
	 <?php } ?>
	 
	</div>
   </div>
   
  </div>
 </div>
</section>


	<?php include "includes/footer.php"?>