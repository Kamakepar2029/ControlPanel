<?php 
      $num = file_get_contents('visitors/number.txt');
      $country = file_get_contents('country/lastcountry.txt');
      $ips = file_get_contents('ips/lastip.txt');
?>
<html>
  <head>
    <title>ControlPanel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/phone.css">
    <link rel="stylesheet" href="/tablet.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
    <div class="header navbar">
      <h1 style="font-size:inherit;text-align:center;">Cloud Appstorage Control Panel</h1>
    </div>
    <div class="visitors">
    <h1>Visitors:</h1>
      <?php echo "You have ".$num." visitors";  ?>
    </div>
    <div class="country">
    <h1>Country</h1>
      <?php echo "Last country: ".$country; ?>
    </div>
    <div class="country">
    <h1>Last IP:</h1>
      <?php echo "Last ip: ".$ips; ?>
    </div>
    <div class="directory">
    </div>
    <style>
    .visitors{
      border:1px solid gray;
      background:white;
      border-radius:5px;
      margin-top:10px;
      text-align:center;
    }
    .country{
      border:1px solid gray;
      background:white;
      border-radius:5px;
      margin-top:10px;
      text-align:center;
    }
    
       body{
      margin:0px;
    }
    .header{
      box-shadow:0px 5px 5px 0px;
      border-bottom:1px solid gray;
      border:1px solid gray;
      display:flex;
      flex-direction:row;
      justify-content:center;
      margin:auto;
      text-align:center;
      font-size:30px;
      border-radius:5px;
      background:white;
    }
    @media screen and (max-width: 600px) {
  body{
  background:lightgreen;
  }
  .header{
    font-size:20px;
  }
}
@media screen and (max-width: 992px) and (min-width: 601px){
  body{
  background:lightblue;
  }
  .header{
      font-size:30px;
    }
}
@media screen and (max-width: 20000) and (min-width: 993px){
  body{
  background:white;
  }
  .header{
      font-size:70px !important;
    }
}
    </style>
  </body>
</html>