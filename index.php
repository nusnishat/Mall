  <?php
session_start();
require_once ('CreateDb.php');
require_once ('component.php');
// create instance of Createdb class
$database = new CreateDb("productdb", "producttb");
if (isset($_POST['add'])){
    
    if(isset($_SESSION['cart']))
    {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(in_array($_POST['product_id'], $item_array_id))
        {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }
        else
        {
             $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    }
    else
    {
    $item_array = array(
                'product_id' => $_POST['product_id']
                        );
    $_SESSION['cart'][$count] = $item_array;
    print_r($_SESSION['cart']);
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet"> 
    <title>Mall</title>
    
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        .nav-link
        {
            color: black;
            font-weight: 600;
        }
        .navbar-brand
        {
            color: black;
            font-size: 30px;
            font-weight: 800;
        }
        .carousel-caption
        {
            position:absolute;
            top:55%;
            transform: translateY(-80%);
            left:-8%;
        }
        .carousel-caption h1
        {
            font-size: 70px;
            font-weight: 400;
            color: black;
        }
        .carousel-caption p
        {
            color:white;
            font-weight: 600;
            font-size:25px;
        }
        .btn-full:hover
        {
           background:white;
           color:#ff0033;
           transition: 0.4s;
           width:150px;
        }
        .btn-full
        {
           width:150px;
           background:red;
           outline: none;
           color: white;
        }
        
        .sub
        {
            background-color:#0b3333;
        }
       
        .sub form input
        {
            height:51px;
            width:50%;
            padding: 10px;
            outline: none;
            color: black;
            border: none;
        }
        .btn1
        {
            width:40%;
            background-color:yellowgreen;
            margin-left: -2px;
            outline: none;
            border: none;
            color:white;
            height: 51px;
        }
        .btn1:hover
        {
            background-color:black;
            color:white;
            transition: 0.4s;
        }
        .fa-full
        {
            font-size: 32px;
        }
        .logo{
            width:170px;
            hight:20px;
        }
         
        .fa-d
        {
            color:gold;
        }
        .img-d
        {
            width: 100%;
            height: auto;
            background: lightblue;
        }
        #cart count
        {
            text-align: center;
            padding:0 0.9rem 0.1rem 0.9rem;
            border-radius: 3rem;
        }
        .about
        {
            background-color: #f2f2f2;
        }
        .fa-about
        {
            font-size: 80px;
            color:#0b3333;
            
        }
       
       .fa-contact
       {
           font-size: 45px;
           color:#0b3333;
       }
      
    </style>
    
  </head>
  <body>
   <?php require_once ('header.php'); ?>
      <nav class="navbar navbar-expand-lg bh-white">
          <img src='logo.png' class="logo" >
          
          <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>  
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link pr-5" href="#">Home</a>  
              </li> 
              <li class="nav-item ">
                  <a class="nav-link pr-5" href="#women zone">Women zone</a>  
              </li>
              <li class="nav-item ">
                    <a class="nav-link pr-5" href="#men zone">Men zone</a>  
              </li>
              <li class="nav-item ">
                  <a class="nav-link pr-5" href="#about">About</a>  
              </li>
              <li class="nav-item ">
                  <a class="nav-link pr-5" href="#contact">Contact us</a>  
              </li>
          </ul>
      </div>
      </nav>
      <!--end of navbar-->
      
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="s1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <div class="container">
              <div class="row justify-content-start text-left">
                  <div class="col-lg-8 mx-auto">
                      <p class="text-dark"> BEST WINTER  COLLECTIONS</p> 
                      <h1 style="color:#0b3333;font-family: 'Lemonada', cursive;">MaLL</h1>
                      <h1 style="color:white ;font-family: 'Concert One', cursive;">An Online Shopping Zone</h1>
                      <button class="btn btn-full mt-5 ml-2">Shop Now</button>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="s2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
              <div class="row justify-content-start text-left">
                  <div class="col-lg-8 mx-auto">
                      <p class="text-dark">BEST WINTER  COLLECTIONS</p> 
                      <h1 style="color:#0b3333;font-family: 'Lemonada', cursive;">MaLL</h1>
                      <h1 style="color:white ;font-family: 'Concert One', cursive;">An Online Shopping Zone</h1>
                      <button class="btn btn-full mt-5  ml-2">Shop Now</button>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ss3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
              <div class="row justify-content-start text-left">
                  <div class="col-lg-8 mx-auto">
                     <p class="text-dark">BEST WINTER  COLLECTIONS</p> 
                      <h1 style="color:#0b3333;font-family: 'Lemonada', cursive;">MaLL</h1>
                      <h1 style="color:white ;font-family: 'Concert One', cursive;">An Online Shopping Zone</h1>
                      <button class="btn btn-full mt-5 ml-2">Shop Now</button>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
      
 <!--end of carusel-->
 <section class="sub">
    <div class="container py-5 text-white">
     <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
             <div class="row">
                <div class="col-lg-2">
                   <span><i class="fa fa-check fa-full"></i></span>
                </div>
                <div class="col-lg-10">
                   <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Return & Exchange</button>
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title text-success" id="exampleModalLabel" style="font-weight:600">Return & Exchange</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                      <p class="lead" style="color:black">If you’re looking to return or exchange your order for whatever reason, we're here to help!
                                      We offer free  exchanges within 15 days of purchase.</p>
                                      <p class="lead"style="color:red">Please note the following exceptions to our return and refund policy:
                                      <ul style="color:black" class="lead ml-5">
                                      <li>Discounted items are final and cannot be returned or exchanged</li>
                                      <li>Returned items must have tags still on and be returned in original product packaging</li>
                                      <li>Returned items must have no visible signs of wear or use</li>
                                      </ul></p>
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                      </div>
                </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
             <div class="row">
                <div class="col-lg-2">
                    <span><i class="fa fa-gift fa-full"></i></span>
                </div>
                <div class="col-lg-10">
                   <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal2">Receive Gift Cards</button>
                </div>
                 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title text-success" id="exampleModalLabel" style="font-weight: 600">Return & Exchange</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p class="lead" style="color:black">Shop and Get your gift cards.</p>
                                <p class="lead" style="color:black">Shop upto 10k to get our <b>Silver Client Gift Card</b>
                                    <br>Shop upto 15k to get our <b>Golden Client Gift Card</b>
                                    <br><br>
                                <b>Silver Client Gift Card</b> gives you 10% off on every buying products.<br>
                                <b>Golden Client Gift Card</b> gives you 15% off on every buying products.</p>
                                <p style="color: black"> You'll get your gift cards with your products.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                      </div>
             </div>
         </div> 
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
             <div class="row">
                <div class="col-lg-2">
                    <span><i class="fa fa-shield fa-full"></i></span>
                </div>
                <div class="col-lg-10">
                 <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal3">Online Support</button>
                </div>
                 <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title text-success" id="exampleModalLabel" style="font-weight:600">Online Support</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p class="lead" style="color:black">For any query contact with us</p>
                                  <p class="lead" style="color:black"><b>Our email:</b> onlinemall@gmail.com</p>
                                  <p class="lead" style="color:black"><b>Our phone no :</b> 01878896615 , 01942133182</p>
                                  <p class="lead" style="color:red">You will get immediate feedback from us.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                      </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
             <div class="row">
                 <form action="insertmail.php" method="post">
                 <input class="user" type="text" name="mail" required placeholder="Your Email">
                 <button class="btn1">Subscribe</button>
                 </form>
             </div>
         </div>
     </div> 
    </div>
 </section>
 
<!--end of sub section-->
<!--women zone-->

<section id="women zone">
    <div class="container ">
        <h2 class="text-center display-4" style="color:#0b3333; font-weight: 400;font-family: 'Lemonada', cursive;"><br>Women Zone</h2>
        <div class="row py-5 text-center ">
          
            <?php
            $description= "women";
             $conn = mysqli_connect("localhost","root","","productdb");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT id,product_name,product_price,product_image,product_des from producttb where category = '" .$description. "' ";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_des'], $row['id']);
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>   
        </div> 
    </div>
</section>
<!--end of women zone-->
<!--men zone-->
<hr>
<section id="men zone">
    <div class="container ">
        <h2 class="text-center display-4" style="color:#0b3333; font-weight: 400;font-family: 'Lemonada', cursive;"><br>Men Zone</h2>
        <div class="row py-5 text-center ">
            
           <div class="row py-5 text-center ">
            <?php
            $description= "men";
             $conn = mysqli_connect("localhost","root","","productdb");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT id,product_name,product_price,product_image,product_des from producttb where category = '" .$description. "' ";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               component($row['product_name'], $row['product_price'], $row['product_image'],$row['product_des'], $row['id']);
              }
             
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
           </div>      
        </div>   
    </div>
    
</section>
<!--end of men zone-->
<!--space-->
<div style="background-color:#0b3333;" class="py-3">
    
</div>
<!--end of space-->
<!--about-->
<section id="about" class="about">
    <div class="container">
        <br><br>
        <h4 class="display-4 ">Our services</h4>
        <p class="lead mx-4">Welcome to our page. <b>Mall</b> is a online shopping page. We offer our customer the most trending
        products. We have a huge collections so that the customers can easily find their desire and the most beautiful 
        products they love.</p><br>
        <div class="row">
            <div class="col-4">
                <div class="card text-center">
                    <span><i class="fa fa-phone fa-about my-1" style="text-align:center;width: 100%"></i></span> 
                    <div class="card-body">
                        <h2>24/7 Customer Support</h2>
                        <p class="lead">As we offer 24/7 customer support customers can find immediate feedback of their query</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center">
                    <span><i class="fa fa-certificate fa-about my-1" style="text-align:center;width: 100%"></i></span> 
                    <div class="card-body">
                        <h2>Hygienic Branded</h2>
                        <p class="lead">We maintain hygiene while packaging and making our products.<br><br><br></p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center">
                    <span><i class="fa fa-truck fa-about my-1" style="text-align:center;width: 100%"></i></span> 
                    <div class="card-body">
                        <h2 >Safely Dispatch</h2>
                        <p class="lead">We safely deliver the products to our customers on time.<br><br><br></p>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-4">
                <div class="card text-center">
                    <span><i class="fa fa-check fa-about my-1" style="text-align:center;width: 100%"></i></span> 
                    <div class="card-body">
                        <h2>Authentic Products</h2>
                        <p class="lead">We assure the customers 100% authentic products.
                        The products are as same as the pictures of the page<br><br></p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center">
                    <span><i class="fa fa-gratipay fa-about my-1" style="text-align:center;width: 100%"></i></span> 
                    <div class="card-body">
                        <h2>100% Guarantee</h2>
                        <p class="lead">We sell the best trending products. It is guaranteed that
                            the customers will definitely love it.<br><br></p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center">
                    <span><i class="fa fa-thumbs-up fa-about my-1" style="text-align:center;width: 100%"></i></span> 
                    <div class="card-body">
                        <h2 >Safely Payment</h2>
                        <p class="lead">Our payment method is so safe that the customers wont get cheated<br><br><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
</section>
<!--end of about-->
<!--contact us-->
<section id="contact">
    <div class="container">
        <h2 class="text-center display-4" style="color:#0b3333; font-weight: 400;font-family: 'Lemonada', cursive;"><br>Contact us<br><br></h2>
        <div class="row">
            <div class="col-5">
                 <h3 class=" text-center" style="color:#0b3333; font-family: 'Handlee', cursive;">Send us a message</h3>
                <div class="card bg-light card-form  ">
                <br><br>
                <div class="card-body"> 
                  <form action="customerMessage.php" method="post">
                      <div class="form-group mx-4"><h4 class="mx-2 ">Name:</h4>
                      <input type="text" name="name" placeholder="Your name"  class="form-control form-control-lg  required">
                    </div>
                    <div class="form-group mx-4"><h4 class="mx-2 ">E-mail:</h4>
                      <input type="text" placeholder="Your email" name="email" class="form-control form-control-lg  required">
                    </div>
                     <div class="form-group mx-4"><h4 class="mx-2 ">Message:</h4>
                      <input type="text" name="msg" placeholder="Write your message" class="form-control form-control-lg  required">
                    </div> 
                    <input type="submit" class="btn btn-danger btn-center mx-4 px-4" value="Send">
                  </form>
                </div>
              </div> 
            </div>
            <div class="col-2">
                
            </div>
            <div class="col-5">
                <h2 class="m-2" style="color:#0b3333;font-family: 'Concert One', cursive;">Address</h2>
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-map-marker fa-contact mt-2 mx-4"></i>
                    </div> 
                    <div class="col-10">
                        <p class="lead mt-1" style="font-size:20px">Shop no:12, 2nd floor,Afmi Plaza,Chittagong </p>
                    </div> 
                </div>
                <br>
                <h2 class="m-2" style="color:#0b3333;;font-family: 'Concert One', cursive;">Mobile</h2>
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-mobile fa-contact mt-2 mx-4"></i>
                    </div> 
                    <div class="col-10">
                        <p class="lead mt-3"style="font-size:20px">01942133182 , 01878896615 </p>
                    </div> 
                </div>
                <br>
                <h2 class="m-2" style="color:#0b3333;font-family: 'Concert One', cursive;">E-mail</h2>
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-envelope fa-contact mt-2 mx-4"></i>
                    </div> 
                    <div class="col-10">
                        <p class="mt-3 lead"style="font-size:20px">onlinemall@gmail.com </p>
                    </div> 
                </div>
            </div>
        </div>  
    </div><br><br>
</section>
<!--end of contact us-->
   <!--footer section-->
   <footer class="text-center text-light" style="background-color:#0b3333;">
            <div class="container">
                <br> <a href="#"><i class="fa fa-chevron-circle-up text-white" style="font-size:25px;"></i></a>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br><h2>MaLL</h2> 
                        <p>An Online Shopping Zone</p>
                        <br>
                        <p>Follow us</p>
                        <a href="www.facebook.com"><i class="fa fa-facebook text-white mr-3" style="background-color:#4470f0;font-size:25px"></i></a>
                        <a href="www.instagram.com"><i class="fa fa-instagram text-white mr-3"style="background-color:red;font-size:25px"></i></a>
                        <a href="www.google.com"><i class="fa fa-google text-white mr-3"style="background-color:green;font-size:25px"></i></a>
                        <p><br>Copyright &copy  2020</p>
                        <span>
                            <p>Designed by: <a class="text-warning ml-2"href="#">Nishat</a></p>
                            
                        </span>
                        <br>
                        
                    </div>   
                </div>   
            </div>
        </footer>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
  </body>
</html>
