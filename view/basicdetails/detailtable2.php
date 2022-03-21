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
                          require_once "..\..\controller\showtable.php";
                          $orderTable = new Table("usersalary");
                          $orderTable->show("SELECT detailID AS 'Category ID', userType AS 'Staff categoty type', basic AS 'Basic Salary',bonusValue as 'Bonus Percentage',ETFvalue as 'ETF Percentage',EPFvalue as 'EPF Percentage',Percentage as 'Service Charge Percentage' FROM plunk.usersalary");
                       ?>

                    </div>

                </div>


  </body>
</html>
