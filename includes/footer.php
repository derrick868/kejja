
<section id="footer">
 <div class="footer_inner clearfix">
  <div class="container">
  <div class="row">
   <div class="col-sm-12">
	
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
	  <!-- <p class="text-center">© 2013 Your Website Name. All Rights Reserved. Design by<a href="http://www.TemplateOnWeb.com"> Template On Web</a> </p> -->
	 </div>
	</div>
	<div class="col-sm-3"></div>
   </div>
  </div>
 </div>
 </div>
</section>
<script>
$("#submit").click(function(){
var errorMessage="";


if($("#password").val() != $("#confirm-password").val()){
	errorMessage+= "<br>your password do not match";
}

if(errorMessage != ""){
	$("#error").html(errorMessage);
}else{
	$("#success").show();
	$("#errorMessage").hide();
}
});
</script> 
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