<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <title>Bloomfield</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="icon" href="images/bloomfieldlogo.png" sizes="32*32">
        <link rel="stylesheet" href="../style/crud.css">
        <script type="text/javascript" src="../script/additem.js"></script>
        <script type="text/javascript" src="../script/updatedata.js"></script>

  </head>
  <body>
    <!-- <script>
        var ans = getParameterByName('data', window.location.href);
        var id = ans.slice(-1);
        document.cookie = 'data='+id;
    </script> -->
    <?php
        require_once "../../model/database.php";
        $DB = new DB;
        $query = "SELECT * FROM plunk.servicechargestaff WHERE ServiceChargeID=$_GET[getdata]";
        $result = $DB->runQuery($query)[0];
    ?>

    <div class=main>
    <div class= left>
    <div class="form">
			<h2 class="center-text"><b>Service Charge Details</b></h2>
            <!-- <a href="deleteservicesuccess.html"><image src = "../images/bin.png" class="bin"></image></a></h2> -->
			
        
        <form action="../../controller/CRUD.php" method="POST">
            <input name ="update-userservicecharge" type="hidden" >
            <table class="formtable">
            <tr>
                <div class="form-group">
                   <td><label for="ServiceChargeID">Service Charge ID</label></td>    
                    <td><input type="number" id= "ServiceChargeID" name="ServiceChargeID" required class="form-control" value = "<?php echo "$result[ServiceChargeID]";?>"/></td>
                </div>
              </tr>
            
            <tr>
                        <div class="form-group">
                            <td><label for="StaffID">Staff ID</label></td>
                            <td><input type="text" id= "StaffID" name="StaffID" required class="form-control" value = "<?php echo "$result[StaffID]";?>"/></td>
                        </div>
                    </tr>

                <tr>
                    <div class="form-group">
                        <td><label for="Percentage">Percentage</label></td>
                        <td><input type="text" id= "Percentage" name="Percentage" required class="form-control" value = "<?php echo "$result[Percentage]";?>"/></td>
                    </div>
                </tr> 

                <br>
                <tr>
                    <div class="form-group">
                        <td><label for="Amount">Amount</label></td>
                        <td><input type="text" id= "Amount" name="Amountant" required class="form-control" min=0 oninput="validity.valid||(value='');" value = "<?php echo "$result[Amount]";?>"/></td>
                    </div>
                </tr>
            </table>
            
                <br>
                <div class="form-group">
                <button type="submit" name="submit" value="Submit" class="button submit" ><a class="cancel" href="updateservicesuccess.html">Update</a></button>
                <button type="submit" name="cancel" value="cancel" class="button submit"><a class="cancel" href="servicetable.php">Cancel</a></button>
            </div>
    </form>                
    </div>
</div>
<div class= right>
      <div class = "righttop">
        <div class="itemtable">
            <h4>Service Charge TABLE</h4>
            <iframe src="allservicecharge.php?id=<?php echo $_GET['getdata'];?>" class="item"></iframe>
        </div>
        
       </div>
       <div class = "rightbottom">
            <div class="itemtable">
            <h3>LEAVE DETAILS TABLE</h3>
                <iframe src="../leave/allleave.php" class="item"></iframe>
            </div>  
        </div>

    </div>

</div>
     
  </body>

 
</html>