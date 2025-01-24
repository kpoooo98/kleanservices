<?php //error_reporting(0);
include('includes/config.php'); 

if(isset($_POST['book']))
{
$ptype=$_POST['packagetype'];
$wpoint=$_POST['washingpoint'];   
$fname=$_POST['fname'];
$mobile=$_POST['contactno'];
$date=$_POST['washdate'];
$time=$_POST['washtime'];
$message=$_POST['message'];
$status='New';
$bno=mt_rand(100000000, 999999999);
$sql="INSERT INTO tblcarwashbooking(bookingId,packageType,carWashPoint,fullName,mobileNumber,washDate,washTime,message,status) VALUES(:bno,:ptype,:wpoint,:fname,:mobile,:date,:time,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':bno',$bno,PDO::PARAM_STR);
$query->bindParam(':ptype',$ptype,PDO::PARAM_STR);
$query->bindParam(':wpoint',$wpoint,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
$query->bindParam(':time',$time,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
 
  echo '<script>alert("Your booking done successfully. Booking number is "+"'.$bno.'")</script>';
 echo "<script>window.location.href ='washing-plans.php'</script>";
}
else 
{
 echo "<script>alert('Something went wrong. Please try again.');</script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Klean Services| Home Page</title>


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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
   
        
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel001.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                            We love doing the car wash. It’s a lot of fun and a great way to reach out to the local community and serve with no strings attached.
                            </p>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Your car, our care.</h1>
                            <p>
                            The trusted hand car wash service, No one else does it like we do.
                            </p>
                           
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                            <p>
                            We give it a showroom shine every time.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about3.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car washing and detailing</h2>
                        </div>
                        <div class="about-content">
                            <p>
                            Klean Services is karnataka’s leading professional hand wash & detailing provider. For over 10 years Klean has remained a family owned.Our worker are well professionals and hard worker. Klean worker are highly skilled with an experience in the trades. 
                            </p>
                            <p>Klean prides itself on offering an unrivalled service and is determined that every customer enjoys that new car feeling.</p>
                            <p>Klean aims to make cleaning your car an affordable and convenient experience in our any car point. All our locations live up to the same  Car Wash quality.</p>
                            <p>Some of our services are-</p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Deep Dry Cleaning</li>
                            </ul>
                            <a class="btn btn-custom" href="about.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
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
                            <p> It is a glowing finish, chrome trim, window, wheels and tires as well as other visible components on the outer part of a vehicle.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                            <p>The detailing interior detailing services team will look into your car from inside out of spotlessness. Such as tires, windows and wheels.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                            <p>Internal cleaning with suction vacuum using a special car tool. It cleans Fabric seat and floor of your car</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                            <p>Fabric seat protection is done a by a proprietary chemical. It removes dirt, dust & grime including very tough stains.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                            <p>This is for cleansing and protection of windshield of cars. With this treatment, hard water marks and oxidation are removed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Paint Protaction</h3>
                            <p>It cleans paint , repair mirror scratches , enhances the paint & gives it a protective coating.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                            <p>A Klean Services oil change takes about 30 minutes and includes oil and filter change and can access the oil drain plug and filter on your vehicle </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Wheels Cleaning</h3>
                            <p>This treatment is designed for cleaning and protection of the alloy wheels. It protects alloy wheels from brake dust and grime</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">10</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">150</h3>
                                <p>Engineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">4000</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><span></span><strong>399</strong><span>Rs/-</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="washing-plans.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <h2><span></span><strong>999</strong><span>Rs/-</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="washing-plans.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning</h3>
                                <h2><span></span><strong>1299</strong><span>Rs/-</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="washing-plans.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
         <!-- Location Start -->
         <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p>Washing Points</p>
                            <h2>Car Washing & Care Points</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>165, Rose Garden Rd</p>
                                        <p>Panduranga Nagar </p>
                                        <p>Bangalore ,karnataka 560076</p>
                                        <p><strong>Call:</strong>096116 68668</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>3156, 12th Main Rd</p>
                                        <p>Indira Nagar </p>
                                        <p>Bangalore ,karnataka 560076</p>
                                        <p><strong>Call:</strong>088617 40099</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                    <h3>Car Washing Point</h3>
                                        <p>121, Vivekananda Rd</p>
                                        <p>Kuvempu Nagar </p>
                                        <p>Mysuru ,karnataka 560023</p>
                                        <p><strong>Call:</strong>098869 99978</p>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>684, Lingsugar Rd</p>
                                        <p>Basaveshwara Nagar </p>
                                        <p>Raichur ,karnataka 584101</p>
                                        <p><strong>Call:</strong>099161 47145</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-form">
                            <h3>Request for a car wash</h3>
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="phoneno" class="form-control" placeholder="Phone No" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Description" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Send Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Our Maneger & Workers</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team1 (1).png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Krishnkant Iyer</h2>
                                <p>Owner</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team2.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Karthik Reddy</h2>
                                <p>Manager</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team3.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Sunita Jain</h2>
                                <p>Worker</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team4.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Gorakh Naidu</h2>
                                <p>Worker</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial01.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Prafulla Sharma</h3>
                            
                            <p>
                            Amazing overall experience with alignment, balancing, puncture fixing and washing, Thank you!!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial02.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>kalyani Goyal</h3>
                            <p>
                            Very good service at affordable price. Staff behaviour and their work is awesome.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial04.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Shubham Mehra</h3>
                           
                            <p>
                            Mr Iyer and his team  is really honest in their work...You will never ever get such a detailed wash at such good prices...I'm regular in getting my car washed here !
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial3.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Pawan Thampy</h3>
                            
                            <p>
                            Boys who work here and the owner of this place is just awesome. Works closely with customers.  For the price they are offering, it's a steal deal. Took complete car interior detailing and my rotten car interiors came back to life. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog01.jpg" alt="Image">
                                <div class="meta-date">
                                    <span>09</span>
                                    <strong>Jan</strong>
                                    <span>2022</span>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog.php">Car Wax and Polish</a></h3>
                                <p>
                                A proper wax and polish does more than just return the shine to your car’s exteriors, it can also protect your car’s paintwork from future wear and tear.After your car is thoroughly cleaned, the polishing process will help remove minor imperfections from your car’s exterior including swirl marks, water spots, and small scratches. Next, a quality wax applied by hand will add extra shine to your car and protect its new sparkle for a long time to come.
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-folder"></i><a href="">Web Design</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog05.jpg" alt="Image">
                                <div class="meta-date">
                                    <span>22</span>
                                    <strong>Oct</strong>
                                    <span>2020</span>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog.php">TOP 5 THINGS TO ALWAYS KEEP IN YOUR CAR</a></h3>
                                <p>
                                A few small items in your glove compartment and trunk could save your life. How many of these do you have? Which items should have made our list?
                                </p>
                                <p>1 Spare Tire </p>
                                <p>2 Jumper Cables</p>
                                <p>3 First Aid Kit </p>
                                <p>4 Reflective Triangle</p>
                                <p>5 Emergency Kit </p>
                               
                    
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-folder"></i><a href="">Web Design</a></p>
                                <p><i class="fa fa-comments"></i><a href="">12 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog03.png" alt="Image">
                                <div class="meta-date">
                                    <span>24</span>
                                    <strong>Dec</strong>
                                    <span>2021</span>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog.php">FOUR TIPS TO PROTECTING YOUR CAR'S PAINT FROM BUGS</a></h3>
                                <p>
                                It's bug season and that can be bad news for your car's paint if you don't take the proper steps to protect it. Here are four tips to make your paint shine for years to come!  
                                </p>
                                <p>1. Wax your car.</p>
                                <p>2. Wash often.</p>
                                <p>3. Quick clean-ups</p>
                                <p>4. Use Bug Barricade.</p>
                                <p>.</p>
                                
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-folder"></i><a href="">Web Design</a></p>
                                <p><i class="fa fa-comments"></i><a href="">10 Comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        <!-- Footer Start -->
   <?php include_once('includes/footer.php');?>
        
<!--Model-->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Car Wash Booking</h4>
        </div>
        <div class="modal-body">
<form method="post">   
  <p>
            <select name="packagetype" required class="form-control">
                <option value="">Package Type</option>
                <option value="1">BASIC CLEANING (399 Rs/-)</option>
                 <option value="2">PREMIUM CLEANING (999 Rs/-)</option>
                  <option value="3 ">COMPLEX CLEANING(1299 Rs/-)</option>
              </select>

          <p>
            <select name="washingpoint" required class="form-control">
                <option value="">Select Washing Point</option>
<?php $sql = "SELECT * from tblwashingpoints";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{               ?>  
    <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->washingPointName);?> (<?php echo htmlentities($result->washingPointAddress);?>)</option>
<?php } ?>
            </select></p>
            <p><input type="text" name="fname" class="form-control" required placeholder="Full Name"></p>
            <p><input type="text" name="contactno" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required placeholder="Mobile No."></p>
            <p>Wash Date <br /><input type="date" name="washdate" required class="form-control"></p>
             <p>Wash Time <br /><input type="time" name="washtime" required class="form-control"></p>
             <p><textarea name="message"  class="form-control" placeholder="Message if any"></textarea></p>
             <p><input type="submit" class="btn btn-custom" name="book" value="Book Now"></p>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


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

