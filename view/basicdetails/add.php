<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <title>Bloomfield</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="icon" href="images/bloomfieldlogo.png" sizes="32*32">
        <link rel="stylesheet" href="../style/crud.css">
        <script type="text/javascript" src="../script/additem.js"></script>
        <script type="text/javascript" src="../script/maxQuantity.js"></script>
        
        
  </head>
  <body>
  
  <?php
        require_once "../../model/database.php";
        if(isset($_GET['data'])){ 
            $DB2 = new DB;
            $id = explode("=", $_GET['data'])[1];
            //$StaffName = explode("=", $_GET['data'])[1];
            $query = "SELECT DisplayID,Name,UserType FROM plunk.user WHERE  DisplayID= '$id'";
            $result2 = $DB2->runQuery($query)[0];
            //print_r($result2);
        }
        else{
            $result2['DisplayID'] = "Select the StaffID";
            $result2['Name'] = "Select the StaffName";
            $result2['UserType'] = "Select the UserType";
        }
    ?>
    <div class="main">
    <div class= "left">
    <div class="form">
        <h2 class="center-text"><b>Add Staff Details</b></h2>
        <form action="../../controller/CRUD.php" method="POST">
                <input name ="add-basicdetail" type="hidden" >
                <table class="formtable">
                <tr>
                    <div class="form-group">
                        <td><label for="StaffID">Staff ID</label></td>
                        <td><input type="text" id="StaffID" name="StaffID"  required class="form-control"  placeholder="Select the staff ID" value = "<?php echo "$result2[DisplayID]";?>"/></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="StaffName">Staff Member Name</label></td>
                        <td><input type="text" id="StaffName" name="StaffName"  required class="form-control"  placeholder="Select the staff Name" value = "<?php echo "$result2[Name]";?>"/></td>
                    </div>
                </tr>
                <div class="form-group">
                        <td><label for="UserType">Staff Type</label></td>
                        <td><input type="text" id="UserType" name="UserType"  required class="form-control"  placeholder="Select the staff Name" value = "<?php echo "$result2[UserType]";?>"/></td>
                    </div>
                </tr>
                        <!-- <tr>
                            <td><label for="BasicSalary">Basic Total</label></td>
                            <td><input type="text" id= "BasicSalary" name="BasicSalary" required class="form-control" min=0 oninput="validity.valid||(value='');" placeholder="Enter the value"/></td>
                        </tr>
                        <tr>
                            <td><label for="Bonus">Bonus Percentage</label></td>
                            <td><input type="text" id= "Bonus" name="Bonus" required class="form-control" min=0 oninput="validity.valid||(value='');" placeholder="Enter the value"/></td>
                        </tr>
                        <tr>
                            <td><label for="ETF">ETF Percentage</label></td>
                            <td><input type="text" id= "" name="ETF" required class="form-control" min=0 oninput="validity.valid||(value='');" placeholder="Enter the value"/></td>
                        </tr>
                        <tr>
                            <td><label for="EPF">EPF Percentage</label></td>
                            <td><input type="text" id= "" name="EPF" required class="form-control" min=0 oninput="validity.valid||(value='');" placeholder="Enter the value"/></td>
                        </tr>
                        <tr>
                            <td><label for="Percentage">Service Charge Percentage</label></td>
                            <td><input type="text" id= "Percentage" name="Percentage" required class="form-control" min=0 oninput="validity.valid||(value='');" placeholder="Enter the value"/></td>
                        </tr> -->
                    </table>
                        
            
                <div class="form-group">
                    <button type="submit" name="submit" value="Submit" class="button submit" >Add</button>
                    <button type="reset" name="reset" value="Reset" class="button reset" >Reset</button>
                </div>
        </form> 
    </div> 
    </div>
        
    <div class= right>
      <div class = "righttop">
        <div class="itemtable">
            <h4>STAFF MEMBERS DETAILS TABLE</h4>
            <iframe src="staff.php" class="item"></iframe>
        </div>
        
       </div>
        <div class = "rightbottom">
            <div class="itemtable">
                <h4>STAFF CATEGORY PAYMENTS DETAILS TABLE</h4>
                <iframe src="detailtable2.php" class="item"></iframe>
            </div>  
        </div>
    </div>

</div>
     
  </body>

 
</html>