<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>s

<?php
if(isset($_SESSION['id'])){

$id = $_SESSION['id'];
}else{
    header("location: login");
}

?>

<section id="">
 <div class="container">
  <div class="row">
   <div class="contact_main_1">
    <h2>MY PROFILE</h2>
	<p><a href="index"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="#"> MY PROFILE </a></p>
   </div>
  </div>
 </div>
</section>
<section id="contact">
  <div class="container">
   <div class="row">
    <div class="col-sm-12">
	  <div class="table-responsive">
	  	<?php
if(isset($_GET['Message'])){
    echo $_GET['Message'];
}

	  	?>
                                    <table id="zero_config" class="table table-striped table-bordered">
                                         <thead style="background-color: burlywood;">
                                            <tr>
                                                <th>Id</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                
                                                
                                                <th>Role</th>
                                                <th>Registered on:</th>
                                              
                                             </tr>
                                        </thead>
                                        <tbody>
                                        
                                           
                                            	<?php
                                                if(isset($_SESSION['id'])){
                                                   $t_id=$_SESSION['id'];

                                                }else{
                                                	header("location:login");
                                                }
                                             

                        $query = "SELECT * FROM users WHERE id = $t_id" ;
                        $select_tenant = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_tenant)) {
                            $id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $phone = $row['mobile'];
                            $house = $row['house'];
                            $date = $row['date'];
                            $role = $row['role'];
                           
                            $email = $row['email'];
                            $password = $row['password'];
                          
                          
           

                                            	?>

                                            	 <tr>
                                           

                                            <td><?php echo "$id"; ?></td>
                                   
                                            <td><?php echo "$firstname"; ?></td>
                                            <td><?php echo "$lastname"; ?></td>
                                            <td><?php echo "$email"?></td>
                                 
                                            <td><?php echo "$phone"?></td>
                                            <td><?php echo "$role"; ?></td>
                                            <td><?php echo "$date"; ?></td>
                                              <td><a href="profile?delete=<?php echo $id?>">delete account</a></td>

                                            </tr>
                                        <?php }  ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
	</div>
   </div>
  </div>
</section>
<?PHP
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];


    $del="DELETE FROM users WHERE id = $delete";
$deleting=mysqli_query($connection,$del);
$_SESSION['id'] = null;
$_SESSION['email'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;
$_SESSION['role'] = null;

header("Location:login");

}
