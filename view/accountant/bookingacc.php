<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <title>Bloomfield</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="icon" href="images/bloomfieldlogo.png" sizes="32*32">
        <link rel="stylesheet" href="../style/itemtable.css">

  </head>
  <body>
        <div class="main" >

                    <div class="detailtable">
                    
                    <?php
                        require_once "../../controller/showtable.php";
                        $reorderTable = new Table("booking");
                        $reorderTable->show("SELECT BookingID as 'Booking ID',CustomerName as 'Customer Name', ContactNo as 'Contact No', Total as 'Total Payment' FROM plunk.booking WHERE Payment='No'");
                      ?> 
                    </div>

                </div>


  </body>
</html>
