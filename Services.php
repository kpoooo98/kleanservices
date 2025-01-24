<?php //error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Klean Services | Services Page</title>
   

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
<?php include_once('includes/header.php');?>
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Services</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="services.php">Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Washing Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Exterior Washing</h3>
                            <?php 
                        $sql = "SELECT type,detail from tblservices where type='exterior_washing'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        foreach($results as $result)
                        {       
                        ?>

                            <p>
                            <?php   echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                            <?php 
                        $sql = "SELECT type,detail from tblservices where type='interior_washing'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        foreach($results as $result)
                        {       
                        ?>

                            <p>
                            <?php   echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                            <?php 
                        $sql = "SELECT type,detail from tblservices where type='vacuum_cleaning'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        foreach($results as $result)
                        {       
                        ?>

                            <p>
                            <?php   echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                            <?php 
                        $sql = "SELECT type,detail from tblservices where type='seats_washing'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        foreach($results as $result)
                        {       
                        ?>

                            <p>
                            <?php   echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                            <?php 
                        $sql = "SELECT type,detail from tblservices where type='window_wiping'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        foreach($results as $result)
                        {       
                        ?>

                            <p>
                            <?php   echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Paint Protaction</h3>
                            <?php 
                        $sql = "SELECT type,detail from tblservices where type='paint_protection'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        foreach($results as $result)
                        {       
                        ?>

                            <p>
                            <?php   echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                            <?php 
                        $sql = "SELECT type,detail from tblservices where type='oil_changing'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        foreach($results as $result)
                        {       
                        ?>

                            <p>
                            <?php   echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Wheels Cleaning</h3>
                            <?php 
                        $sql = "SELECT type,detail from tblservices where type='wheels_cleaning'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        foreach($results as $result)
                        {       
                        ?>

                            <p>
                            <?php   echo $result->detail; ?>
                            </p>
                        <?php } ?>
                        <hr />
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <!-- Service End -->
        <?php include_once('includes/footer.php');?>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
