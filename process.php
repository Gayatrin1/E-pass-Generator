<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EPASS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="pstyles.css">
</head>
    <body>

    <nav class="navbar navbar-inverse">
            <div class="container-fluid">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <h1>E-PASS</h1>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" class="btn btn-one">

               <li class="active"><a href="index.html">HOME</a></li>
                   <li ><a href="details.html">DETAILS</a></li>
                   <li><a href="contact.html">CONTACT US</a></li>


                   </ul>

             </div>
            </div>
          </nav>

                <h2 style="margin-top:150px;
                margin-left:150px;
   font-family: Georgia, 'Times New Roman', Times, serif;
   font-size:35px;
   color:black;
   display:inline-block;
   border:4px solid yellow;
   background-color:white;">THANKYOU AND TRAVEL SAFELY!</h2>


            <?php
include 'connect.php';

                  if(isset($_POST['submit'])){
                    $fstate = $_POST['fstate'];
                            $state = $_POST['state'];
                            $city=$_POST['city'];
                            $address=$_POST['address'];
                            $date=$_POST['date'];
                            $tdate=$_POST['tdate'];
                            $reason=$_POST['reason'];
                            $pincode=$_POST['pincode'];
                            $fname= $_POST['fname'];
                            $lname= $_POST['lname'];
                            $mobile=$_POST['mobile'];
                            $aadhar=$_POST['aadhar'];


                            echo "<center></br>";
                            echo "WELCOME</br>";
                         echo "TRAVEL E-PASS FROM:$fstate to $state </br>";
                    echo "DESTINATION STATE: $state</br>";
                    echo "DESTINATION CITY: $city</br>";
                    echo "DESTINATION ADDRESS: $address </br>";
                    echo "VALID FROM $date TO $tdate </br>";
                    echo "REASON: $reason</br>";
                    echo "PINCODE: $pincode<br>";
                    echo "FULL NAME: $fname $lname<br>";
                    echo "MOBILE: $mobile <br>";
                    echo "AADHAR: $aadhar<br>";

                    $result = mysqli_query($conn,"INSERT INTO details (fstate,state, city , address,date,tdate,reason,pincode,fname,lname,mobile,aadhar) VALUES ('$fstate','$state','$city','$address','$date','$tdate','$reason','$pincode','$fname','$lname','$mobile','$aadhar')");

                            if($result){

                                echo "<br>Success";
                            } else
                                echo "<br> not inserted";

                          }
                          echo "<button> SAVE</button>";
                          echo "<button>EXIT</button>";

                                ?>




</body>
</html>
