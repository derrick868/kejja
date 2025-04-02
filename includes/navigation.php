<section id="header" class="cd-secondary-nav">
 <div class="container">
  <div class="row">
   <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown-thumbnail-preview">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="index.html"><span class="well_1"><i class="fa fa-home"></i></span>LEOMA</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index" class="hvr-underline-from-center">HOME</a></li>
<!-- 		<li><a href="about.html" class="hvr-underline-from-center">ABOUT</a></li> -->
		
<?php
		$query = "SELECT * FROM houses " ;
                        $select_houses = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_houses)) {
                                   $house_id = $row['house_id'];
                                    $house_category = $row['house_category'];
                       }
                            ?>

	<li class="dropdown">
		<a href="property" class="hvr-wobble-to-top-right" data-toggle="dropdown">PROPERTY <b class="caret"></b></a>
		  <ul class="dropdown-menu">
		  	<li class="tell_1"><a href="property">ALL</a></li>
			 <li class="tell_1"><a href="property_sale?c_id=<?php echo $house_category?>">FOR SALE</a></li>
			 <li class="tell_1"><a href="property_rent?c_id=<?php echo $house_category?>">FOR RENT</a></li>		 
		  </ul>
		</li> 
		<!-- <li class="dropdown">
		<a href="team.html" class="hvr-wobble-to-top-right" data-toggle="dropdown">TEAM <b class="caret"></b></a>
		  <ul class="dropdown-menu">
			 <li class="tell_1"><a href="team.html">TEAM LISTING</a></li>
			 <li class="tell_1"><a href="team_details.html">TEAM DETAILS</a></li>		 
		  </ul>
		</li> -->
		<li class="dropdown">
		<a href="blog" class="hvr-wobble-to-top-right" data-toggle="dropdown">BLOG<b class="caret"></b></a>
		  <ul class="dropdown-menu">
			 <li class="tell_1"><a href="blog">BLOG LISTING</a></li>
			 <li class="tell_1"><a href="blog_details.html">BLOG DETAILS</a></li>		 
		  </ul>
		</li>
		<li><a href="contact" class="hvr-underline-from-center">CONTACT</a></li>

  <?php 
   error_reporting(0);
    $user_role=$_SESSION['role'];

   if($user_role=='admin'){?>
      <li class="nav-item active">
       	<li><a href="admin/index" class="hvr-underline-from-center">ADMIN</a></li>
      </li>
      
      <?php } ?>
 
	
        <li class="dropdown">
		<a href="#" class="hvr-wobble-to-top-right" data-toggle="dropdown">MY ACCOUNT <b class="caret"></b></a>
		  <ul class="dropdown-menu">
			 <li class="tell_1"><a href="login">LOGIN</a></li>
			 <li class="tell_1"><a href="includes/logout">LOGOUT</a></li>

			   <?php 
   error_reporting(0);
    $id=$_SESSION['id'];

   if($id >= 1){?>
      <li class="nav-item active">
      <li><a href="profile">PROFILE</a></li>	
      </li>
      
      <?php } ?>
		     		 
		  </ul>
		</li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
  </div>
 </div>
</section>
