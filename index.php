<?php
  if (isset($_POST['send'])){
    if((!empty($_POST['name']))) {
        $name=$_POST['name'];
        setcookie('name',$name); 
    } 
  }
  else if(isset($_COOKIE['name'])) {
    $name =$_COOKIE['name'];
  }
  else {
      $name='введите ваше имя';
  }
?>


<!DOCTYPE html>
<html>
<head>
    <title> Страница index.php</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1> Страница index.php</h1>
    <h2><a href="page.php"> Cтраница page.php<br><br></a></h2>

    <p>Привет, <?php echo $name; ?></p>

    <form method ="post">
         <input type="text" name="name" /><br><br>
         <input type="submit" name="send" />
    </form>
</body>
</html>