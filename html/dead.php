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
    <title>شهادة الوفاة</title>
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
    <div class="dead">
        <div class="main-head">
            <a href="home.php"><i class="fa-solid fa-arrow-left"></i></a>
            <h2>شهادة الوفاة</h2>
        </div>
        <div class="container">
            <form action="" class="death" dir="rtl" method="post">
                <div>
                    <input type="text" placeholder="الاسم الاول للمتوفي" required name="name">
                    <input type="text" placeholder="مدينة الميلاد" required name="birth_city">
                    <span>تاريخ الميلاد
                    <input type="date" placeholder="تاريخ الميلاد" required name="birth_date"></span>
                </div>
                <div class="gender">
                    <input type="radio" name="gender" value="1"> <span> ذكر</span>
                    <input type="radio" name="gender" value="2" > <span> انثى</span> 
                </div>
                <div>
                    <input type="text" placeholder="مكان الوفاة" required name="death_city">
                    <span>تاريخ الوفاة
                    <input type="date" placeholder="تاريخ الوفاة" required name="death_date"></span>
                </div>
                <div class="case">
                    <input type="radio" name="case" value="1"> <span> متزوج</span>
                    <input type="radio" name="case" value="2" > <span> اعزب</span> 
                    <input type="radio" name="case" value="3"> <span> مطلق</span>
                </div>
                <div>
                    <input type="text" placeholder="اسم الوالد رباعي" required name="father_name">
                    <input type="text" placeholder="اسم الوالدة رباعي" required name="mother_name">
                </div>
                <div>
                    <input type="text" placeholder="الديانة" required name="religion"> 
                    <input type="text" placeholder="المهنة" required name="job">
                    <input type="text" placeholder="الجنسية" required name="nationality">
                    <input type="number" placeholder="السن" required name="age">
                </div>
                <div class="btn">
                    <input type="submit" value="ارسال" name="save">
                </div>
            </form>
        </div>
        <div class="popup">
            <div class="suc-popup">
                <i class="fa-solid fa-xmark cross"></i>
                <i class="fa-solid fa-check fa-3x"></i>
                <h2> تمت العملية</h2>
                <a href="../html/pay.php">انتقل للدفع</a>
            </div>
                <div class="fail-popup">
                    <i class="fa-solid fa-xmark cros"></i>
                    <i class="fa-solid fa-xmark fa-3x"></i>
                    <h2> اعد المحاولة</h2>
                </div>
        </div>
        <footer>كل الحقوق محفوظة &copy; تعداد - 2022 </footer>
    </div>

</body>
</html>

<?php
    require_once "connect.php";
    
    if (isset($_POST["save"])){

        $sql  = "INSERT INTO dead VALUES( Null, '$_POST[name]', '$_POST[birth_city]', '$_POST[birth_date]', '$_POST[gender]', 
        '$_POST[death_city]', '$_POST[death_date]', '$_POST[case]','$_POST[father_name]', '$_POST[mother_name]', '$_POST[religion]', '$_POST[job]', '$_POST[nationality]', '$_POST[age]')";
        mysqli_query($connect,$sql);
        if ($sql) {
            echo "<script>
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