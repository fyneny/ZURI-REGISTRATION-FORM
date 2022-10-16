<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="POST" action="user_data.csv">
     
        <?php 
          $name= $_POST ['name'];
          $email= $_POST ['email'];
          $birthday = $_POST ['birthday'];
          $gender = $_POST ['gender'];
          $country = $_POST ['country'];

          echo "NAME : " . $name . "<br>";
          echo "EMAIL : " . $email . "<br>";
          echo "BIRTHDAY : " . $birthday . "<br>";
          echo "GENDER : " . $gender . "<br>";
          echo "COUNTRY : " . $country . "<br>"; 
        ?>
</body>
</html>













