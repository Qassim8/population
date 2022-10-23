
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href)
}
    </script>
    <title>تعداد</title>
    <!-- CSS Normalize File-->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- CSS FontAwesome File-->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- CSS Main File -->
    <link rel="stylesheet" href="css/min.css">
    <!-- Google Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
<div class="first">
    <form action="" class="login" dir="rtl" method="post">
        <h2>تسجيل دخول</h2>
        <input type="number" placeholder="الرقم الوطني" name="id" required>
        <input type="password" placeholder="كلمة السر" name="password" required>
        <input type="submit" value="دخول" name="save">
        <p>او</p>
        <a href="html/register.php">حساب جديد</a>
    </form>
    <div class="popup">
        <div class="fail-popup">
            <i class="fa-solid fa-xmark cros"></i>
            <i class="fa-solid fa-xmark fa-2x"></i>
            <h2> خطأ في بيانات المستخدم</h2>
        </div>
    </div>
</div>
</body>
</html>
<?php
    require_once "html/connect.php";

    if(isset($_POST["save"])){
        $result = $connect->query("SELECT id FROM register WHERE id ='$_POST[id]' AND password ='$_POST[password]'");
        if($result->num_rows == 0 ){
            echo"
            <script>
    let popupBox    = document.querySelector('.popup'),
    popupFail   = document.querySelector('.popup .fail-popup'),
    crossFail  = document.querySelector('.cros');

    function popUp(){
                popupBox.style.display = 'block';
                popupFail.style.display = 'block';
    }
    popUp();
crossFail.onclick = function(){
    popupBox.style.display = 'none';
}
    </script>
            ";
        }else{
            header('Location:http://localhost:8080/finalproject/html/home.php');
        }
    }
?>
