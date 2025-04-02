<?php include "includes/header.php"?>

<?php include "includes/navigation.php"?>
<section id="">
 <!-- <div class="container">
  <div class="row">
   <div class="blog_inner_1">
    <h2>BLOG LISTING</h2>
	<p><a href="blog_details.html"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="blog_details.html"> BLOG LISTING </a></p>
   </div>
  </div>
 </div> -->
</section>
<section id="blog_main">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-3 col-back1">
	 <div class="blog_main_1">
<!-- 	  <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div> -->
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="blog_main_2">
	   <p>AUGUE SEMPER</p>
	   <ul>
	       <li><a href="blog_details.html">SED CURSUS ANTE DAPIBUS DIAM.</a></li>
		   <li><a href="blog_details.html">NULLA QUIS: Nibh ELEMENTUM.</a></li>
		   <li><a href="blog_details.html">FUSCE NEC TELLUS SED AUGUE</a></li>
		   <li><a href="blog_details.html">FUSCE NEC: TORQUENT PER </a></li>
		   <li><a href="blog_details.html">NULLA QUIS: SED AUGUE </a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="blog_main_2">
	   <p>CONUBIA NOSTRA</p>
	   <ul>
	       <li><span class="well_11">MAURIS</span><span class="well_12">in</span><a href="blog_details.html"> VESTIBULUM LACINIA</a></li>
		   <li><span class="well_11">MASSA</span><span class="well_12"> in</span> <a href="blog_details.html">DUIS SAGITTIS</a></li>
		   <li><span class="well_11">AUGUE</span><span class="well_12"> in</span> <a href="blog_details.html">INTEGER NEC ODIONEC</a></li>
		   <li><span class="well_11">PORTA</span><span class="well_12"> in</span> <a href="blog_details.html">DUIS SAGITTIS IPSUM</a></li>
		   <li><span class="well_11">MASSA</span><span class="well_12"> in</span> <a href="blog_details.html">CONUBIA NOSTRA</a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="blog_main_2">
	   <p>SAGITTIS</p>
	   <ul>
	       <li> <a href="blog_details.html"> JANUARY 2017 </a></li>
	       <li> <a href="blog_details.html"> FEBRUARY 2017 </a></li>
		   <li> <a href="blog_details.html"> MARCH 2016 </a></li>
		   <li> <a href="blog_details.html"> APRIL 2014 </a></li>
		   <li> <a href="blog_details.html"> MAY 2016 </a></li>
		   
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="blog_main_2">
	   <p>ELEMENTUM</p>
	   <ul>
	       <li> <a href="blog_details.html"> SED AUGUE </a></li>
		   <li> <a href="blog_details.html"> NULLA QUIS </a></li>
		   <li> <a href="blog_details.html"> NEC TELLUS </a></li>
		   <li> <a href="blog_details.html"> CURSUS ANTE </a></li>
		   <li> <a href="blog_details.html"> SED NISI</a></li>
		   <li> <a href="blog_details.html"> INTEGER NEC </a></li>
		   <li> <a href="blog_details.html"> ADIPISCING </a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="blog_main_2">
	   <p>AUGUE</p>
	   <ul>
	       <li> <a href="blog_details.html"> SEM AT </a></li>
		   <li> <a href="blog_details.html"> NEC ODIONEC </a></li>
		   <li> <a href="blog_details.html"> INTEGER NEC </a></li>
		   <li> <a href="blog_details.html"> SEMPER PORTA </a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-12 space_all">
	  <div class="blog_main_9">
	   <a href="#"><img src="img/70.jpg" alt="abc" class="img_responsive"></a>
	  </div>
	 </div>
	</div>
	<div class="col-sm-9">
	 <div class="blog_main_3">
	 <div class="col-sm-12 space_all">
	
	  	  <?php
            $post_query_count="SELECT * FROM posts";
            $find_count=mysqli_query($connection,$post_query_count);
            $count=mysqli_num_rows($find_count);

           

            $per_page=9;


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
            $query = "SELECT * FROM posts ORDER BY post_id Desc LIMIT $page_1,$per_page";
            $select_all_posts_query = mysqli_query($connection , $query);

            while($row = mysqli_fetch_assoc($select_all_posts_query)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date= $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = substr($row['post_content'], 0,100);
                $post_status = $row['post_status'];

                if($post_status == 'published'){

            
                

                ?>
                  <div class="col-sm-6">
	   <div class="blog_main_5">
	   	

	    <p><a href="blog_details.html"><img src="images/<?php echo $post_image?>" alt="abc" width="300px" height="300px" class="img_responsive"></a></p>
		<h4><a href="blog_details.html"><?php echo $post_title?></a></h4>
	  <h6 style="word-wrap: break-word;"><?php echo $post_content ?>
	  </br>
      <a href="blog_details.html">Read More...</a></h6>
	   <ul>
	        <li>Share :</li> 
			<li><a href="blog_details.html"><i class="fa fa-facebook"></i></a></li>
			<li><a href="blog_details.html"><i class="fa fa-twitter"></i></a></li>
			<li><a href="blog_details.html"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="blog_details.html"><i class="fa fa-skype"></i></a></li>
			<li><a href="blog_details.html"><i class="fa fa-instagram"></i></a></li>
	   </ul>
	
	   </div>

	  </div>
	     <?php } }?>

	 </div>

	
	   <ul class="pager">
         <?php
         for ($i=1; $i<=$count ; $i++ ) { 


            if($i==$page){

                echo"<li><a class='active_link' href='blog.php?page={$i}'>{$i}</a></li>";
            }else{

                 echo"<li><a href='blog.php?page={$i}'>{$i}</a></li>";
            }
           
         }

         ?>  
     </ul>
	</div>
   </div>
  </div>
 </div>
</section>
<section id="footer">
 <div class="footer_inner clearfix">
  <div class="container">
  <div class="row">
   <div class="col-sm-12">
	 <div class="col-sm-3">
	 <div class="footer_main clearfix">
	  <div class="footer_1">
	    <h3>FUSCE NEC TELLUS</h3>
	    <p>11/4 Lacinia:</p>
	  </div>
	  <div class="col-sm-12 space_all">
	  <div class="col-sm-1 space_all">
	   <div class="footer_2">
	    <p><img src="img/44.jpg"></p>
	   </div>
	  </div>
	  <div class="col-sm-11 space_all">
	   <div class="footer_3">
	    <p>+2-123-456-7890</p>
	   </div>
	  </div>
	 </div>
	  <div class="col-sm-12 space_all">
	  <div class="col-sm-1 space_all">
	   <div class="footer_2">
	    <p><img src="img/45.jpg"></p>
	   </div>
	  </div>
	  <div class="col-sm-11 space_all">
	   <div class="footer_3">
	    <p>+2-123-456-7890</p>
	   </div>
	  </div>
	 </div>
	  <div class="col-sm-12 space_all">
	  <div class="col-sm-1 space_all">
	   <div class="footer_2">
	    <p><img src="img/46.jpg"></p>
	   </div>
	  </div>
	  <div class="col-sm-11 space_all">
	   <div class="footer_3">
	    <p>+2-123-456-7890</p>
	   </div>
	  </div>
	 </div>
	 </div>
	 <div class="footer_4">
	  <p><i class="fa fa-skype"></i>Conubia_India</p>
	  <h5><i class="fa fa-envelope"></i><a href="#">info@gmail.com</a></h5>
	 </div>
	 <div class="footer_5">
	 <h5><a href="#">CONUBIA NOSTRA</a></h5>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="footer_9 clearfix">
	  <div class="colsm-12 space_all">
	  <div class="col-sm-6 space_all">
	   <div class="footer_6">
	    <h3>LACINIA</h3>
		<ul>
		    <li><a href="#">Curabitursodales Ligula</a></li>
			<li><a href="#">Dignissim Lacinia</a></li>
			<li><a href="#">Vestibulum Lacinia Arcu Eget</a></li>
			<li><a href="#">Fusce Nec Tellus Sed Augue</a></li>
			<li><a href="#">Cursus Ante Dapibus</a></li>
			<li><a href="#">Praesent Mauris</a></li>
			<li><a href="#">Curabitursodales</a></li>
			<li><a href="#">Dignissim Lacinia</a></li>
		</ul>
	   </div>
	  </div>
	  <div class="col-sm-6 space_all">
	   <div class="footer_6">
	    <h3>PARTNERS DAPIBUS</h3>
		<ul>
		    <li><a href="#">Dignissim Lacinia</a></li>
			<li><a href="#">Curabitursodales</a></li>
			<li><a href="#">Praesent Mauris</a></li>
			<li><a href="#">Cursus Ante Dapibus</a></li>
			<li><a href="#">Fusce Nec Tellus Sed Augue</a></li>
			<li><a href="#">Vestibulum Lacinia Arcu Eget</a></li>
			<li><a href="#">Dignissim Lacinia</a></li>
		</ul>
	   </div>
	  </div>
	 </div>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_7">
	  <h3>CONUBIA NOSTRA</h3>
	  <div class="col-sm-12 space_all">
	  <div class="col-sm-1 space_all">
	   <div class="footer_2">
	    <p><img src="img/44.jpg"></p>
	   </div>
	  </div>
	  <div class="col-sm-11 space_all">
	   <div class="footer_8">
	    <p>12345 torquent per conubia inceptos.Curabitursodales</p>
	   </div>
	  </div>
	 </div>
	  <div class="col-sm-12 space_all">
	  <div class="col-sm-1 space_all">
	   <div class="footer_2">
	    <p><img src="img/45.jpg"></p>
	   </div>
	  </div>
	  <div class="col-sm-11 space_all">
	   <div class="footer_8">
	    <p>Fusce nec tellus sed augue semper porta </p>
	   </div>
	  </div>
	 </div>
	  <div class="col-sm-12 space_all">
	  <div class="col-sm-1 space_all">
	   <div class="footer_2">
	    <p><img src="img/46.jpg"></p>
	   </div>
	  </div>
	  <div class="col-sm-11 space_all">
	   <div class="footer_8">
	    <p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at</p>
	   </div>
	  </div>
	 </div>
	  <div class="col-sm-12 space_all">
	   <div class="footer_14 clearfix">
	    <div class="col-sm-8 space_all">
	   <div class="footer_11">
	    <p>Dapibus Lacinia</p>
	   </div>
	  </div>
	    <div class="col-sm-2 space_all">
	   <div class="footer_12">
	    <p><i class="fa fa-picture-o"></i></p>
	   </div>
	  </div>
	    <div class="col-sm-2 space_all">
	  <div class="footer_13">
	   <p><i class="fa fa-book"></i></p>
	  </div>
	  </div>
	    </div>
	   </div>
	  <div class="col-sm-12 space_all">
	   <div class="footer_15 clearfix">
	     <ul> 
		       <li><a href="#">Blog Post</a></li>
			   <li>!</li>
			   <li><a href="#">Contact Us</a></li>
			   <li>!</li>
			   <li><a href="#">Testimonials</a></li>
		 </ul>
	    </div>
	   </div>
	  </div>
	</div>
    </div>
   <div class="col-sm-12 space_all">
    <div class="col-sm-3"></div>
	<div class="col-sm-6">
	 <div class="footer_10">
	  <ul>  
	      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
		  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		  <li><a href="#"><i class="fa fa-camera"></i></a></li>
		  <li><a href="#"><i class="fa fa-paragraph"></i></a></li>
	  </ul>
	  <p class="text-center">© 2013 Your Website Name. All Rights Reserved. Design by<a href="http://www.TemplateOnWeb.com"> Template On Web</a> </p>
	 </div>
	</div>
	<div class="col-sm-3"></div>
   </div>
  </div>
 </div>
 </div>
</section>
<script>
$(document).ready(function(){
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
		$(window).on('scroll', function(){
			if($(window).scrollTop() > secondaryNavTopPosition ) {
				secondaryNav.addClass('is-fixed');	
			} else {
				secondaryNav.removeClass('is-fixed');
			}
		});	
		
});
</script>
</body>
</html>