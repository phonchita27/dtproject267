<?php
    include"dbcon.php"; //ทำให้รู้จักกับฐานข้อมูล
    if(isset($_REQUEST['bSubmitStudent'])){
        $firstname = $_REQUEST ['tfirstname']; //รับค่าจาก textbox ที่ชื่อ tfirstname
        $lastname = $_REQUEST ['tlastname'];
        $email = $_REQUEST ['temail'];
        $address = $_REQUEST ['taddress'];

        echo $firstname.$lastname.$email.$address;
        $sql = "INSERT INTO tbstudent
                VALUE (null,'$firstname','$lastname','$email','$address')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV = 'refresh' CONTENT = '3; URL = lab2-2.php'>";

    }elseif(isset($_REQUEST['bSubmitroom'])){

        //ส่วนของการรับค่าจากหน้าเว็บ
        $roomname = $_REQUEST['troomname'];
        $detail = $_REQUEST['tdetail'];
        $roomtypeid = $_REQUEST['troomtypeid'];

        echo $roomname.$detail.$roomtypeid;
        $sql = "INSERT INTO tbroom
                VALUE (null,'$roomname','$detail','$roomtypeid')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV = 'refresh' CONTENT = '3; URL = lab2-4.php'>";

    }elseif(isset($_REQUEST['bSubmitbook'])){

        //ส่วนของการรับค่าจากหน้าเว็บ
        $bookname = $_REQUEST['tbookname'];
        $author = $_REQUEST['tbookauthor'];
        $price = $_REQUEST['tbookprice'];
        $stock = $_REQUEST['tbookstock'];
        $booktypeid = $_REQUEST['tbooktypeid'];

        echo $bookname.$author.$price.$stock.$booktypeid;
        $sql = "INSERT INTO tbbook
                VALUE (null,'$bookname','$author','$price','$stock','$booktypeid')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV = 'refresh' CONTENT = '3; URL = lab2-3.php'>";

    }elseif(isset($_REQUEST['bSubmitbooktype'])){

        //ส่วนของการรับค่าจากหน้าเว็บ
        $booktypename = $_REQUEST['tbooktypename'];

        echo $booktypename;
        $sql = "INSERT INTO tbbooktype
                VALUE (null,'$booktypename')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV = 'refresh' CONTENT = '3; URL = lab2-3.php'>";

    }elseif(isset($_REQUEST['submitAjax'])){

        //ส่วนของการรับค่าจากหน้าเว็บ
        $fullName = $_REQUEST['fullName'];
        $emailAddress = $_REQUEST['emailAddress'];
        $city = $_REQUEST['city'];
        $country = $_REQUEST['country'];

        echo $fullName.$emailAddress.$city.$country;
        $sql = "INSERT INTO usertable
                VALUE (null,'$fullName','$emailAddress','$city','$country')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV = 'refresh' CONTENT = '3; URL = user-form.php'>";

    }elseif(isset($_REQUEST['submitFormregis'])){

        //ส่วนของการรับค่าจากหน้าเว็บ
        $firstname = $_REQUEST['tfirstname'];
        $lastname = $_REQUEST['tlastname'];
        $username = $_REQUEST['tusername'];
        $password = $_REQUEST['tpassword'];
        $hashValue = md5($password);

        $sql = "INSERT INTO tbuser
                VALUE (null,'$firstname','$lastname','$username','$hashValue')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV = 'refresh' CONTENT = '3; URL = lab_function/lab_formregis.php'>";

    }elseif(isset($_REQUEST['bLogin'])){

        //ส่วนของการรับค่าจากหน้าเว็บ
        $username = $_REQUEST['tusername'];
        $password = md5($_REQUEST['tpassword']);

        $sql = "SELECT * FROM tbuser
                    WHERE username = '$username'
                    AND password = '$password' ";
        $query = $conn->query($sql);
        $rs = $query->fetch_object();
        //ดึงข้อมูลตัวที่หาเจอมาเก็บที่ตัวแปร $rs
        $numrows = $query->num_rows;
        //นับจำนวนแถวที่หาเจอ จะคืนค่ากลับมาเป็น int เสมอ
        if ($numrows>0) {
            //$_SESSION['username'] = $username;
            echo "ล็อกอินสำเร็จ";
        } else {
            echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }
        echo "<META HTTP-EQUIV = 'refresh' CONTENT = '3; URL = lab_function/lab_formlogin.php'>";
    }
?>