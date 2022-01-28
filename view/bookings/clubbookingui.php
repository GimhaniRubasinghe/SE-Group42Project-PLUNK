<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <title>Bloomfield</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="icon" href="images/bloomfieldlogo.png" sizes="32*32">
        <link rel="stylesheet" href="../style/bookingui.css">

  </head>
  <body>
        <div class="main" >
            <div class="coverheader">

              <div class="tableheader">
                    <div class="innerdiv">
                    </div>
                    <h2>Club and cricket Bookings</h2>
              </div>
            </div><br>
            <div class="covertable">
                <div class="table">
                    <div class="upperbar">

                        <form class="searchbar" action="clubbookingui.php" method="post">
                          <!-- <input type="hidden" name="clubsearch" > -->
                          <input type="text" id="clubsearch" name="clubsearch" class="search" placeholder="Search By Customer Name" value="<?php if(isset($_POST['clubsearch'])) { echo "$_POST[clubsearch]"; } ?>" required>

                                <button type = "submit" class = "searchbtn" ><b>Search</b></button>

                        </form>

                          <div class="addicon">
                                <a href="..\bookings\addcricketbooking.php" class="add"><button type="button" name="button" class="addbtn"><b>+</b></button></a>
                          </div>
                    </div>
                    <div class="detailtable">
                      <?php
                        if(isset($_POST['clubsearch'])){
                          echo'<iframe src="gmclubbookingtable.php?CustomerName='.$_POST['clubsearch'].'" name="searchinfo" class="staff"></iframe>';
                        }
                        else{
                          echo '<iframe src="gmclubbookingtable.php" name="searchinfo" class="staff"></iframe>';
                        }
                      ?>
                            <!-- <iframe src="..\bookings\gmclubbookingtable.php" class="staff"></iframe> -->
                    </div>

                </div>

            </div>


        </div>

  </body>
</html>