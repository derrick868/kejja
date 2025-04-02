<?php include "includes/header.php"?>



<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
 <?php include "includes/preloader.php" ?>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
     <?php include "includes/nav.php" ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
   <?php include "includes/sidebar.php"?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Site Analysis</h4>
                                      
                                    </div>
                                </div>
                   <div class="row">
                    <!-- Column -->
                    <div class="col-md-8 col-lg-4 col-xlg-4">
                        <a href="houses.php">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-home"></i></h1>
                                 <?php
                    $query = "SELECT *FROM houses";
                    $select_all_houses = mysqli_query($connection,$query);
                    $house_count = mysqli_num_rows($select_all_houses);

                    echo "<div class='text-white'>{$house_count}</div>";

                    ?>
                                <h6 class="text-white">Houses</h6>
                            </div>
                        </div>
                    </a>
                    </div>
        
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <a href="tenants.php">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                 <?php
                    $query = "SELECT * FROM users";
                    $select_all_tenants = mysqli_query($connection,$query);
                    $tenant_count = mysqli_num_rows($select_all_tenants);
                  echo "<div class='text-white'>{$tenant_count}</div>";

                    ?>
                                <h6 class="text-white">All users</h6>
                            </div>
                        </div>
                    </a>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-md-8 col-lg-4 col-xlg-4" >
                        <a href="bookings.php">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-book-plus"></i></h1>
                                   <?php
                    $query = "SELECT * FROM bookings";
                    $select_all_bookings = mysqli_query($connection,$query);
                    $bookings_count = mysqli_num_rows($select_all_bookings);

                    echo "<div class='text-white'>{$bookings_count}</div>";

                    ?>
                                <h6 class="text-white">Bookings</h6>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="comments.php">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-message-text"></i></h1>
                                 <?php
                    $query = "SELECT * FROM comments";
                    $select_all_maintenance = mysqli_query($connection,$query);
                    $maintenance_count = mysqli_num_rows($select_all_maintenance);

                    echo "<div class='text-white'>{$maintenance_count}</div>";

                    ?>
                                <h6 class="text-white">comments</h6>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <a href="contact.php">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-comment"></i></h1>
                                <?php
                    $query = "SELECT * FROM contact";
                    $select_all_contacts = mysqli_query($connection,$query);
                    $contacts_count = mysqli_num_rows($select_all_contacts);

                    echo "<div class='text-white'>{$contacts_count}</div>";

                    ?>
                                <h6 class="text-white">All contacts</h6>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- Column -->
                   
                    <!-- Column -->
                    
                    <!-- Column -->
                </div>                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                 
                    <!-- column -->

                    <div class="col-lg-6">
                        <!-- Card -->
                        
                        <!-- card -->
                       
                        <!-- accoridan part -->
                        
                        <!-- toggle part -->
                       
                        <!-- Tabs -->
                       
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          <?php include "includes/footer.php"?>