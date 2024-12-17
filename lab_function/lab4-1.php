<?php
    echo "<h2> การใช้ strlen </h2>";
    $strlen = "I am string";
    echo strlen($strlen);
    $strlen2 = "มหาวิทยาลัย";
    echo "<br>";
    echo strlen($strlen2);

    echo "<h2> การใช้ explode (การสร้างสตริงจากอาเรย์) </h2>";
    $expStr = "I am string";
    $expArr = explode(' ',$expStr);
    print_r($expArr); //print_r ใช้ในการแสดงผลข้อมูลในอาเรย์
    echo "<br>";
    echo $expArr[0].$expArr[1].$expArr[2].$expArr[3];

    echo "<h2> การใช้ implode (การสร้างอาเรย์จากสตริง) </h2>";
    $impArr = ["I","am","an","array"];
    $impStr = implode($impArr);
    echo $impStr;
    echo "<br>";
    $filename = ['img123','png'];
    $impFilename = implode('.',$filename);
    echo $impFilename[0].$impFilename[1].$impFilename[2].$impFilename[3].$impFilename[4].$impFilename[5];
    echo "<br>";
    echo $filename[0]."<br>";
    echo $impFilename;

    echo "<h2> การเข้ารหัสแบบ md5 (มี 32 ตัวอักษร) </h2>";
    $password = "Mo";
    $hashValue = md5($password);
    echo $hashValue;
    echo "<br>";

    echo "<h2> การเข้ารหัสแบบ sha256 (ปลอดภัยกว่าเพราะมี 64 ตัวอักษร) </h2>";
    echo "การเข้ารหัสแบบ SHA-256 เป็นการเข้ารหัสแบบทางเดียว (one-way eccryption) เนื่องจาก SHA-256 เป็นฟังก์ชันแฮชที่ออกแบบมาเพื่อความปลอดภัยไม่มีคำสั่งหรือวิธีการที่สามารถแปลงกลับ ข้อความที่ถุกแฮชด้วย SHA-256 กลับไปเป็นข้อความต้นฉบับได้โดยง่าย";

    echo "<br>";
    $password = "pitboo";
    $hashValue = hash('sha256', $password);
    echo $hashValue;
    //หากต้องการแปลงค่ากลับ http://md5decrypt.net/
    echo "<br>";

    $storedData = "358d0ea28a987530d47b4651b170b13dd570f345a967cd68d2085d82a9f28255";
    $originalText = "pitboo";

    if (hash_equals(hash('sha256', $originalText), $storedData)) {
        echo "ล็อกอินสำเร็จ";
    } else {
        echo "รหัสผ่านไม่ถูกต้อง";
    }
?>