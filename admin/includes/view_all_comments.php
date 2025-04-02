                                <h5 class="card-title">All Reviews</h5>
                                <div class="table-responsive">
                                     <table class="table table-bordered table-hovered">
                        <thead style="background-color: burlywood;">
                            <tr>
                                <th>Id</th>
                                <th>Client</th>
                                <th>Comment</th>
                                <th>Email</th>
                                <th>Phone</th>
                              <!--   <th>Status</th> -->
                                <th>House</th>
                                <th>Date</th>
                              <!--   <th>Approve</th>
                                <th>Unapprove</th> -->
                                <th>Delete</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                        <?php 

                        $query = "SELECT * FROM comments" ;
                        $select_posts = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_posts)) {
                            $comment_id = $row['comment_id'];
                            $comment_post_id = $row['comment_post_id'];
                            $comment_author = $row['comment_author'];
                            $comment_content = $row['comment_content'];
                            $comment_email = $row['comment_email'];
                            $comment_status = $row['comment_status'];
                            $comment_date = $row['comment_date'];
                            $comment_phone = $row['comment_phone'];

                           echo "<tr>";
                           echo "<td>{$comment_id}</td>";
                           echo "<td>{$comment_author}</td>";
                           echo "<td>{$comment_content}</td>";

                     
                          //   $query= "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
                          //  $select_categories_id = mysqli_query($connection,$query);

                          //  while($row = mysqli_fetch_assoc($select_categories_id)){
                          //     $cat_id = $row['cat_id'];
                          //      $cat_title = $row['cat_title'];
                         //  echo "<td>{$cat_title}</td>";

                      //   }
                          echo "<td>{$comment_email}</td>";
                            echo "<td>{$comment_phone}</td>";

                          $query = "SELECT * FROM houses WHERE house_id = $comment_post_id ";
                          $select_post_id_query = mysqli_query($connection,$query);
                          while($row=mysqli_fetch_assoc($select_post_id_query)){
                            $post_id = $row['house_id'];
                            $post_title = $row['house_number'];

                            echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";

                          }

                           


                           echo "<td>{$comment_date}</td>";
                          //  echo "<td><a href='comments.php?approve=$comment_id'>Approve</a></td>";
                          // echo "<td><a href='comments.php?unapprove=$comment_id'>Unapprove</a></td>";                          
                          echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>";
                           echo "<tr>";

                        }

                         ?>
                            
                        </tr>
                    </tbody>
                    </table>

                                </div>


<?PHP
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];


    $del="DELETE FROM comments WHERE comment_id = $delete ";
$deleting=mysqli_query($connection,$del);
header("location:comments.php");
}