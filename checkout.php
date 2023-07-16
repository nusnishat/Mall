<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
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
            <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
             .logo{
            width:170px;
            hight:20px;
        }
    #regForm {
        border: 1px;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  margin-left:140px
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
* {
  box-sizing: border-box;
}

        </style>
    </head>
    <body>
        <?php require_once ('header.php'); ?>
        <img src='logo.png' class="logo" >
        <div class="bg-light">
            <div class="container">
                    <a href="index.php">
            <h5>
                <i class="fa fa-chevron-circle-left"></i> Go Back To Home page
            </h5>
              </a>
                <form id="regForm" action="insertcheckout.php" method="post">
                   <h1 style="font-family: 'PT Sans', sans-serif;">Proceed To Checkout</h1>
                   <!-- One "tab" for each step in the form: -->
                   <div class="tab"><br>
                       <h3 class="text-light text-center bg-dark p-2" style="font-family: 'PT Sans', sans-serif;">Customer Info</h3><br>
                       <h3 style="font-family: 'PT Sans', sans-serif;">Name:</h3>
                       <p><input placeholder="Your name..." oninput="this.className = ''" name="name"></p>
                       <h3 style="font-family: 'PT Sans', sans-serif;">Email:</h3>
                       <p><input placeholder="Your email..." oninput="this.className = ''" name="email"></p>
                       <h3 style="font-family: 'PT Sans', sans-serif;">Phone no:</h3>
                       <p><input placeholder="Your phone no..." oninput="this.className = ''" name="phone"></p>
                    </div>
                    <div class="tab">
                        <br>
                       <h3 class="text-light text-center bg-dark p-2" style="font-family: 'PT Sans', sans-serif;">Shipping Address and Product Info</h3><br>
                       <h3 style="font-family: 'PT Sans', sans-serif;">Address:</h3>
                       <p ><input placeholder="Enter your address" oninput="this.className = ''" name="address"></p>
                       <h3 style="font-family: 'PT Sans', sans-serif;">Product code with quantity</h3>
                       <p><input placeholder="Example:product 502(3),product 501(2),..." oninput="this.className = ''" name="product"></p>
                    </div>
                    <div class="tab"> 
                        <h3 class="text-light text-center bg-dark p-2" style="font-family: 'PT Sans', sans-serif;">Payment Method</h3><br>
                        <div class="row">
                            <div class="col-6">
                              <div class="mx-5 shadow bg-white"  data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div> 
                            </div>
                            <div class="col-6">
                              <div class="mx-5 bg-white shadow" data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                       </div>
                        </div>
                         <h3 style="font-family: 'PT Sans', sans-serif;">Card Holder Name:</h3>
                        <p><input placeholder="Enter card holder name" oninput="this.className = ''" name="hname"></p>
                        <h3 style="font-family: 'PT Sans', sans-serif;">Card Number:</h3>
                        <p><input placeholder="Enter card name" oninput="this.className = ''" name="cname"></p>
                        <h3 style="font-family: 'PT Sans', sans-serif;">Expiry Date:</h3>
                        <p><input placeholder="Example:February,2022" oninput="this.className = ''" name="edate"></p>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>

            </div>
            <br><br>
        </div>
        
        
        
        
        
 <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
    </body>
</html>
