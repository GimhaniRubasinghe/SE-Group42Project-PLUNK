<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <title>Bloomfield</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="icon" href="images/bloomfieldlogo.png" sizes="32*32">
        <link rel="stylesheet" href="../style/tablehome.css">

  </head>
  <body>
        <div class="main" >

                    <div class="detailtable">
                    <?php
                          require_once "../../controller/showtable.php";
                          $paymentTable = new Table("payment");
                          if(isset($_GET['paymentsearch'])){
                            $search = $_GET['paymentsearch'];
                            $paymentTable->show("SELECT BookingID as 'Booking ID',CustomerName as 'Customer Name', BookingType as 'Booking Type', Reservation,Total as 'Pirce', UserID as 'User ID' FROM plunk.booking WHERE CustomerName LIKE ('%$search%');", 'makepayment');

                          }
                          else{
                            if($_SESSION['UserType'] == 'Manager' || $_SESSION['UserType'] == 'Accountant'){
                            $paymentTable->show("SELECT BookingID as 'Booking ID',CustomerName as 'Customer Name', BookingType as 'Booking Type', Reservation,Total as 'Pirce', UserID as 'User ID' FROM plunk.booking WHERE Payment = 'No'",'makepayment');
                            }
                            else {
                              $paymentTable->show("SELECT BookingID as 'Booking ID',CustomerName as 'Customer Name', BookingType as 'Booking Type', Reservation,Total as 'Pirce', UserID as 'User ID' FROM plunk.booking WHERE UserID='$_SESSION[UserID]' AND Payment = 'No'",'makepayment');
                            }
                          }

                       ?>

                    </div>

                </div>


  </body>
</html>
