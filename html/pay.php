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
    <title>الدفع</title>
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
    <div class="pay">
        <div class="main-head">
            <a href="home.php"><i class="fa-solid fa-xmark"></i></a>
            <h2>الدفع</h2>
        </div>
        <div class="container">
            <form class="pay-form" dir="rtl" method="post">
                <div>
                    <input type="text" placeholder="الاسم رباعي" name="name" required>
                    <input type="text" placeholder="العنوان" name="address" required>
                    <span>تاريخ اليوم</span>
                    <input type="date" placeholder="التاريخ " name="day_date"  required>
                </div>
                <div>
                    <select name="bank">
                        <option value="khartoum">بنك الخرطوم</option>
                        <option value="Faisal"> بنك فيصل</option>
                        <option value="Islamic"> البنك الاسلامي</option>
                    </select>
                    <input type="text" placeholder="نوع الحساب" name="type"  required>
                    <input type="text" placeholder="رقم الحساب" name="plance_number"  required>
                    <input type="number" placeholder="رقم البطاقة" name="card"  required>
                </div>
                <span>رقم حساب الموقع</span>
                <input type="number" placeholder="رقم حساب الموقع" name="site_plance" value='1776549' readonly read required>
                <span>المبلغ</span>
                <input type="number" placeholder="المبلغ" name="cash" value='5000' readonly  required>
                <div>
                    <input type="number" placeholder="الرقم الوطني " name="person_id"  required>
                    <span>تاريخ اصداره</span>
                    <input type="date" placeholder="تاريخ اصداره" name="id_date"  required>
                </div>
                <div class="btn">
                    <input type="submit" value="ارسال" name="save" >
                </div>
            </form>
            <div class="popup">
                <div class="suc-popup">
                    <i class="fa-solid fa-xmark cross"></i>
                    <i class="fa-solid fa-check fa-3x"></i>
                    <h2> تمت العملية</h2>
                    <span>سنرسل لك صورة من الشهادة في الايميل</span>
                </div>
                    <div class="fail-popup">
                        <i class="fa-solid fa-xmark cros"></i>
                        <i class="fa-solid fa-xmark fa-3x"></i>
                        <h2> اعد المحاولة</h2>
                    </div>
            </div>
        </div>
        <footer>كل الحقوق محفوظة &copy; تعداد - 2022 </footer>
    </div>

</body>
</html>
<?php
    require_once "connect.php";
    
    if (isset($_POST["save"])){

        $sql  = "INSERT INTO pay VALUES( Null, '$_POST[name]', '$_POST[address]', '$_POST[day_date]', '$_POST[bank]', 
        '$_POST[type]', '$_POST[plance_number]', '$_POST[card]','$_POST[site_plance]', '$_POST[cash]', '$_POST[person_id]', '$_POST[id_date]')";
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