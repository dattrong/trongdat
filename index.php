<!DOCTYPE html>
<html>
    <head>
        <title>Baby lady</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .container{
                width: 90%;
                margin: 0 auto;
            }
            .container img{
                width: 40%;

            }
            .footer{
                width: 100%;
                height: 100px;
                background-color: black;
            }
            .main{
                width: 100%;
                overflow: hidden;
                background-color: white;
            }

            .image img{
                width: 100%;
            }
            .detail{
                width: 100%;
                float: right;
                text-align: center;
            }
            .title{
                background-color: white;
                font-size: 25px;
                line-height: 30px;
                padding-left: 5px;
                font-weight: bold;
                color: red;
            }
            .detail{
                padding-left: 15px;
                box-sizing: border-box;
            }
            .des{
                color: greenyellow;
                font-size: 18px;
                padding-left: 10px;
                padding-top: 10px;
                font-weight: normal;
            }

            .list{
                width: 100%;
                padding-top: 10px;
            }
            .item{
                width: 25%;
                float: left;
                padding: 5px;
                box-sizing: border-box;
            }
            .iimage img{
                width: 100%;
                height : 50%;
            }
           

            .nav{
                width: 100%;
                height: 50px;
                background-color: black;
            }
            .nav ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }
            .nav a{
                color:whitesmoke;
                font-size: 30px;
                text-decoration: none;
                line-height: 50px;
                padding: 0 15px;
                display: block;
            }
            .nav li{
                float: left;
            }
            .nav a:hover{
                color: #792323;
            }
            .nav li:hover{
                background-color:#DCF4F6;
            }
        </style>
    </head>
    <body>
        <?php
require_once './functions.php';
//load items
$query = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage FROM Item ";
$result = queryMysql($query);
$error = $msg = "";
if (!$result){
    $error = "Couldn't load data, please try again.";
}
?>

        <div class="container">
            <center><img src="images/1.jpg"></center>
            <div class="header">
                
                <div class="nav">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#Princess">Princess</a></li>
                        <li><a href="#Black Baby">Black Baby</a></li>
                        <li><a href="#Mermaid">Mermaid</a></li>
                        <li><a href="./login.php" style="margin-left:800px">Admin</a></li>

                    </ul>


                </div>
            </div>

                
                <div class="list w3-row">
                    <div class="" id="Princess"><h2>Princess</h2>
                    <?php
     require_once './functions.php';
     $query = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage,cname FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%Bag%'  ORDER BY cName";
     $result = queryMysql($query);
     $error = $msg = "";
     if (!$result){
      $error = "Couldn't load data, please try again.";
     }
     while ($row = mysqli_fetch_array($result)) {
        $iId = $row['iid'];
        $iName = $row['iname'];
        $iDescription = $row['idescription'];
        $iPrice = $row['iprice'];
        $iStatus = $row['istatus'];
        $iSize = $row['isize'];
        $iImage = $row['iimage'];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-orange w3-padding-large'>$istatus</div><div ><img onclick=\"document.getElementById('$iname').style.display='block'\" id='testimg' src='./images/item/". $iimage . "' width='100%'></div><div class='name'><h3>$iname</h3></div><h3>$iprice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iname' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-orange w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iname').style.display='none';\"
         class='w3-button w3-orange w3-xlarge w3-display-topright'>×</span>
          <h2>$iname</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/item/". $iimage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>$iprice$</h3>
              <p>$idescription.</p>
              <h4>$isize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-orange w3-section' onclick=\"document.getElementById('$iname').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
     
                </div>        
                    <div class="list w3-row">
                    <div class=""id="BlackBaby"><h2>BlackBaby</h2>
                    <?php
     require_once './functions.php';
     $query = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage,cname FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%Leather%'  ORDER BY cName";
     $result = queryMysql($query);
     $error = $msg = "";
     if (!$result){
      $error = "Couldn't load data, please try again.";
     }
     while ($row = mysqli_fetch_array($result)) {
        $iId = $row['iid'];
        $iName = $row['iname'];
        $iDescription = $row['idescription'];
        $iPrice = $row['iprice'];
        $iStatus = $row['istatus'];
        $iSize = $row['isize'];
        $iImage = $row['iimage'];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-orange w3-padding-large'>$iStatus</div><div ><img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./images/item/". $iImage . "' width='100%'></div><div class='name'><h3>$iName</h3></div><h3>$iPrice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iname' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-orange w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iname').style.display='none';\"
         class='w3-button w3-orange w3-xlarge w3-display-topright'>×</span>
          <h2>$iname</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/item/". $iimage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>$iprice$</h3>
              <p>$idescription.</p>
              <h4>$isize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-orange w3-section' onclick=\"document.getElementById('$iname').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
     
                </div>
                                        </div>        
                    <div class="list w3-row">
                    <div class=""id="Mermaid"><h2>Mermaid</h2>
                    <?php
     require_once './functions.php';
     $query = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage,cname FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%Pants%'  ORDER BY cName";
     $result = queryMysql($query);
     $error = $msg = "";
     if (!$result){
      $error = "Couldn't load data, please try again.";
     }
     while ($row = mysqli_fetch_array($result)) {
        $iId = $row['iid'];
        $iName = $row['iname'];
        $iDescription = $row['idescription'];
        $iPrice = $row['iprice'];
        $iStatus = $row['istatus'];
        $iSize = $row['isize'];
        $iImage = $row['iimage'];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-orange w3-padding-large'>$istatus</div><div ><img onclick=\"document.getElementById('$iname').style.display='block'\" id='testimg' src='./images/item/". $iimage . "' width='100%'></div><div class='name'><h3>$iname</h3></div><h3>$iprice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iname' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-orange w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iname').style.display='none';\"
         class='w3-button w3-orange w3-xlarge w3-display-topright'>×</span>
          <h2>$iname</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/item/". $iimage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>$iprice$</h3>
              <p>$idescription.</p>
              <h4>$isize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-orange w3-section' onclick=\"document.getElementById('$iname').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
     
                </div>

                        
            </div>
            <div class="footer">
            </div>
        </div>
    </body>
</html>

