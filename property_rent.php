<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>
<section >
 <div class="container">
  <div class="row">
   <div class="listing_1">
    <h2>PROPERTY</h2>
	<p><a href="index"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="property_details.html"> PROPERTY </a></p>
   </div>
  </div>
 </div>
</section>
<section id="property">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 space_all">
    <div class="blog_home1">

    	  <?php
                                             
if(isset($_GET['c_id'])){
	$the_house_id = $_GET['c_id'];
}
            $post_query_count="SELECT * FROM houses where house_category = 'rent' ";
            $find_count=mysqli_query($connection,$post_query_count);
            $count=mysqli_num_rows($find_count);

           

            $per_page=6 ;


           if(isset($_GET['page'])){

            $page=($_GET['page']);

           } else{

            $page="";

           }
           if($page==""||$page==1){

            $page_1 = 0;
           }else{

            $page_1= ($page * $per_page) -  $per_page;
           }


            $count=ceil($count/$per_page);

                        $query = "SELECT * FROM houses where house_category = 'rent' ORDER BY house_id Desc LIMIT $page_1,$per_page " ;
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
		<!-- 	//<h4><a href="listing_details.html">Gardening the Global Greenhouse by Richard Bisgrove..</a></h4> -->
		 <?php

                $query = "SELECT * FROM comments WHERE comment_post_id = $house_id ";
                $query .= "AND comment_status = 'unapproved' ";
                $query .= "ORDER BY comment_id DESC";

                $select_comment_query = mysqli_query($connection,$query);
                $count=mysqli_num_rows($select_comment_query);


                ?>
			<ul>
			 	<!--  <li>	  <form method="post" action="includes/book?user_id=<?php echo $_SESSION['id']?>&h_id=<?php echo $house_id?>"><i class="fa fa-plus"></i> <a href="includes/book?user_id=<?php echo $_SESSION['id']?>&h_id=<?php echo $house_id?>"> BOOK</a></form></li> -->
			 <li><i class="fa fa-comment"></i> <a href="#" ><?php echo $count;?> comments</a></li>
			 </li>
			</ul>
			<p><?php echo $house_description?> <a href="property_details?h_id=<?php echo $house_id?>">Read More</a></p>
		</div>
		<div class="blog_home1il clearfix">
          <h6 class="mgt"><span class="date">For <?php echo $house_category?></span> <span class="year">KES:<?php echo $house_rent?> <?php echo $house_units?></span></h6>	
		</div>
	  </div>
	  <div class="property_2">
	     <ul>
	          <!-- <li><i class="fa fa-object-group"></i></li>
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
   <div class="col-sm-12">
    <div class="property_4">

    	  <ul class="pager">
         <?php
         for ($i=1; $i<=$count ; $i++ ) { 


            if($i==$page){

                echo"<li><a class='active_link' href='property?page={$i}'>{$i}</a></li>";
            }else{

                 echo"<li><a href='property?page={$i}'>{$i}</a></li>";
            }
           
         }

         ?>  
     </ul>
	  <!--  <ul>
	        <li><a href="property_details.html"><i class="fa fa-angle-double-left"></i></a></li>
			<li><a href="property_details.html">1</a></li>
			<li><a href="property_details.html">2</a></li>
			<li><a href="property_details.html">3</a></li>
			<li><a href="property_details.html">4</a></li>
			<li><a href="property_details.html">5</a></li>
			<li><a href="property_details.html"><i class="fa fa-angle-double-right"></i></a></li>
	   </ul> -->
	</div>
   </div>
  </div>
 </div>
</section>
<?php include "includes/footer.php"?>