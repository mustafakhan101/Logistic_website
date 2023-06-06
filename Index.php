<?php

require_once("config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>
</head>
<body>
    <?php include_once "Header.php"; ?>

        <!-- About Start -->
    <div class="container-fluid py-5" id="About">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">25+ Years Experience</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                    <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="d-flex align-items-center pt-2">
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/yejV9a43FZU" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yejV9a43FZU" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5" id="Quote">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Get A Quote</h6>
                    <h1 class="mb-4">Request A Free Quote</h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="number" class="form-control border-0 p-4" placeholder="Parcel Weight" required="required" />
                            </div>
                            
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                        <?php $Select_query = "SELECT * FROM `tbl_service` WHERE 1";
                                                $execute_query = mysqli_query($connect , $Select_query);
                                                while ($a = mysqli_fetch_array($execute_query)) { ?>
                                                    <option value="1">  <?php echo " $a[1]";
                                                }              
                                    ?>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Price Show Here" required="required" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->


    <!-- Services Start -->
    <div class="container-fluid pt-5" id="Services">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Our Services</h6>
                <h1 class="mb-4">Best Logistic Services</h1>
            </div>
            <div class="row pb-3">
            <?php $Select_query = "SELECT * FROM `tbl_service` ";
                                                $execute_query = mysqli_query($connect , $Select_query);
                                                while ($a = mysqli_fetch_array($execute_query)) { ?>
                                                    <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fas fa-box text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0"><?php echo "$a[1]" ?></h6>
                    </div>
                    <p><?php echo "$a[2]" ?></p>
                    <a class="border-bottom text-decoration-none" href="">Find Price</a>
                </div>
                                             <?php   }              
                                    ?>
               
              
            </div>
        </div>
    </div>
    <!-- Services End -->





    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5" id="Price">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Pricing Plan</h6>
                <h1 class="mb-4">Affordable Pricing Packages</h1>
            </div>
            <div class="row">
                                             <?php $Select_query1 = "SELECT * FROM `tbl_service` ";
                                                $execute_query1 = mysqli_query($connect , $Select_query1);
                                                while ($a = mysqli_fetch_array($execute_query1)) { ?>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">Rs</small><?php echo "$a[3]" ?><small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0"><?php echo "$a[1]" ?></h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <h6 class="m-0"><?php echo "$a[2]" ?></h6>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php   }              
                                    ?>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5" id="Team">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Agents</h6>
                <h1 class="mb-4">Meet Our Agents</h1>
            </div>
            <div class="row">
                <?php 
                        $Select_query3 = "SELECT * FROM `tbl_agent`";
                ?>
                
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-1.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               
                
        
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="Testimonial">
                                            
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
                <h1 class="mb-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                                <?php $Select_query2 = "SELECT * FROM `tbl_contact` ";
                                                $execute_query2 = mysqli_query($connect , $Select_query2);
                                                while ($a = mysqli_fetch_array($execute_query2)) { ?>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/Agent.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0"><?php echo "$a[1]" ?></h6>
                            
                        </div>
                    </div>
                    <p class="m-0"><?php echo "$a[4]" ;?></p>
                </div>
               
                <?php } ?>
            </div>
        </div>
        
    </div>
    <!-- Testimonial End -->





    <?php include_once "Footer.php"; ?>
</body>





</html>