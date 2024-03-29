<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <title>Bloomfield</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="icon" href="images/bloomfieldlogo.png" sizes="32*32">
        <link rel="stylesheet" href="../style/company.css">


  </head>
  <body>
    <?php
        require_once "../../model/database.php";
        $DB = new DB;
        $id = explode("=", $_GET['data'])[1];
        $query = "SELECT * FROM plunk.usersalary WHERE detailID='$id'";

        $result = $DB->runQuery($query)[0];

    ?>

        <div class="main" >
            <form class="addcompany" action="..\..\controller\CRUD.php" method="post" autocomplete="on" >
              <input name ="update-basicsalary" type="hidden" >
              <div class="headerrow">
                
              </div>
              <div class="submain">
                <div class="forminputs">
                    <label for="detailID"> Staff Category ID</label><br>
                    <input type="number" id="detailID" class="input" name="detailID" value = "<?php echo "$result[detailID]";?>"  readonly>
                </div><br>

                <div class="forminputs">
                    <label for="userType"> Staff Category Type</label><br>
                    <input type="text" id="UserType" class="input" name="UserType" value = "<?php echo "$result[UserType]";?>"  readonly>
                </div><br>

                <div class="forminputs">
                    <label for="basic"> Basic Salary </label><br>
                    <input type="number" id="basic" class="input" name="basic" min=0 oninput="validity.valid||(value='');" value = "<?php echo "$result[basic]";?>" required>
                </div><br>

                <div class="forminputs">
                    <label for="bonusValue"> Bonus Percentage </label><br>
                    <input type="number" id="bonusValue" class="input" name="bonusValue" min=0 oninput="validity.valid||(value='');" value = "<?php echo "$result[bonusValue]";?>" required>
                </div><br>

                <div class="forminputs">
                    <label for="ETFvalue"> ETF Percentage </label><br>
                    <input type="number" id="ETFvalue" class="input" name="ETFvalue" min=0 oninput="validity.valid||(value='');" value = "<?php echo "$result[ETFvalue]";?>" required>
                </div><br>

                <div class="forminputs">
                    <label for="EPFvalue"> EPF Percentage </label><br>
                    <input type="number" id="EPFvalue" class="input" name="EPFvalue" min=0 oninput="validity.valid||(value='');" value = "<?php echo "$result[EPFvalue]";?>" required>
                </div><br>


                <div class="forminputs">
                    <label for="percentage"> Service Charge Percentage</label><br>
                    <input type="number" id="percentage" class="input" name="percentage" min=0 oninput="validity.valid||(value='');" value = "<?php echo "$result[percentage]";?>" required>
                </div><br><br>

                <div class="forminputs">
                  <button type="submit"  id="add" class="add" name="button" >Update</button>
                  <button type="reset" id="reset" class="add" name="button">Reset</button>
                </div>
              </div>
            </form>
        </div>

  </body>
</html>