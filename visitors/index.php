<html>
  <head>
    <title>How many 😃</title>
  </head>
  <body>
  <div class="main">
  <style>
  .body{
    margin:0px;
    background-image: url(/hack.jpg);
  }
    .number{
    margin-top: 10%;
    font-size: 40px;
    text-align:center;
    }
  </style>
<div class="number">Пользователей на сайте: 
    <?php 
    $num = file_get_contents('number.txt');
    echo $num; 
    ?> 
  </body>
</html>