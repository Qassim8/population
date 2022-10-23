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
    <title>حساب جديد</title>
    <!-- CSS Normalize File-->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- CSS FontAwesome File-->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- CSS Main File -->
    <link rel="stylesheet" href="../css/min.css">
    <!-- Google Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
<div class="second">
    <form method="post" class="register" dir="rtl">
        <a href="../index.php"><i class="fa-solid fa-arrow-left"></i></a>
        <h2>حساب جديد</h2>
        <div>
            <input type="number" placeholder="الرقم الوطني" name="id" required>
            <input type="number" placeholder="الرقم الوطني مجدداً" required>
        </div>
        <div>
            <input type="tel" placeholder="رقم الهاتف" name="phone" required>
            <input type="tel" placeholder="رقم الهاتف مجدداً" required>
        </div>
        <input type="email" placeholder="البريد الالكتروني" name="email" required>
        <div>
            <input type="password" placeholder="كلمة السر" name="password" required>
            <input type="password" placeholder="كلمة السر مجدداً" required>
        </div>
        <input type="submit" value="تسجيل" class="register-btn" name="save">
    </form>
    <div class="popup">
        <div class="suc-popup">
            <i class="fa-solid fa-xmark cross"></i>
            <i class="fa-solid fa-check fa-3x"></i>
            <h2> تم التسجيل بنجاح</h2>
            <a href="../index.php">دخول</a>
        </div>
        <div class="fail-popup">
            <i class="fa-solid fa-xmark cros"></i>
            <i class="fa-solid fa-xmark fa-2x"></i>
            <h2> اعد التسجيل</h2>
        </div>
    </div>
</div>

<script>
let registerBtn = document.querySelector('.register'),
    formFields  = document.querySelectorAll('.register input:not([type = "submit"])');
    
registerBtn[1].oninput = function(){
    if(this.value === registerBtn[0].value){
        this.style.cssText = 'border: 1px solid green;'
    }else{
        this.style.cssText = 'border: 1px solid red;'
    }
}
registerBtn[1].onblur = function(){
    this.style.cssText = 'border: none;'
}
registerBtn[3].oninput = function(){
    if(this.value === registerBtn[2].value){
        this.style.cssText = 'border: 1px solid green;'
    }else{
        this.style.cssText = 'border: 1px solid red;'
    }
}
registerBtn[3].onblur = function(){
    this.style.cssText = 'border: none;'
}
registerBtn[6].oninput = function(){
    if(this.value === registerBtn[5].value){
        this.style.cssText = 'border: 1px solid green;'
    }else{
        this.style.cssText = 'border: 1px solid red;'
    }
}
registerBtn[6].onblur = function(){
    this.style.cssText = 'border: none;'
}
</script>
    
</body>
</html>
<?php
    require_once "connect.php";
    
    if (isset($_POST["save"])){

        $sql  = "INSERT INTO register VALUES( '$_POST[id]', '$_POST[phone]', '$_POST[email]', '$_POST[password]')";
        mysqli_query($connect,$sql);

        if($sql){
            echo"
            <script>
            let popupBox    = document.querySelector('.popup'),
    popupSuc    = document.querySelector('.popup .suc-popup'),
    popupFail   = document.querySelector('.popup .fail-popup'),
    crossSuc   = document.querySelector('.cross'),
    crossFail  = document.querySelector('.cros');

            function popUp(){
                        popupBox.style.display = 'block';
                        popupSuc.style.display = 'block';
                        popupFail.style.display = 'none';
            }
            popUp();
        crossSuc.onclick = function(){
            popupBox.style.display = 'none';
        }
        crossFail.onclick = function(){
            popupBox.style.display = 'none';
        }
            </script>";
        }
    }
?>
