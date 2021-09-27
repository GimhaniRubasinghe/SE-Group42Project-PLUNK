<?php session_start(); 
  if (isset($_SESSION['UserType'])){
    if ($_SESSION['UserType'] != 'Accountant'){
      require_once "../../controller/pages.php";
      $page = new Page('../login.html');
      $page->show();
    }
  }
  else{
    require_once "../../controller/pages.php";
    $page = new Page('../login.html');
    $page->show();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <meta charset="utf-8">
        <title>Bloomfield</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">
        <link rel="icon" type="icon" href="../images/bloomfieldlogo.png" sizes="32*32">
        <link rel="stylesheet" href="../style/user.css">
        <script type="text/javascript" src="../script/user.js"></script>

  </head>
  <body>
    <div class="main">

          <div class="header" id="myheader">
                  <div class="leftheader">
                      <img class="plunk" src="../images/projectlogo.png" alt="plunk logo"><br>
                      <div class="menudiv">
                         <a href="accnavbtn.html" class="menubtn" target="navigation"><button type="button" name="Menu" class="Menu" onclick=myFunction() >&#9776;</button></a>
                      </div>
                  </div>

                  <div class="middleheader">
                    <img class="Logo" src="../images/bloomfieldlogo.png" alt="Bloomfield Logo"><br>
                      <h2>Bloomfield C. & A.C.</h2>

                  </div>

                  <div class="rightheader">
                    <div class="subrightheader">
                    <img class="profileicon"src="../images/profile.png" alt="profile icon">
                      <h3>Accountant</h3>
                    </div>

                  </div>

          </div>
              <div class="middle">
                            <div id="panel" class=" panel">
                                <iframe id="navv"class="nav" name="navigation" title="iframe for nav"></iframe>
                            </div>

                            <div class="mainpages" id="mainpages">
                                    <iframe  src="..\Dashboards\accountdash.php"class="page" name="Pages"  title="Iframe for pages"></iframe>

                            </div>
                  </div>
            </div>
      </body>
</html>