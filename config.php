<?php
$servername = "localhost"; // ชื่อเซิร์ฟเวอร์ฐานข้อมูล
$username = "root"; // ชื่อผู้ใช้ฐานข้อมูล
$password = ""; // รหัสผ่านฐานข้อมูล
$mydb = "myproject"; // ชื่อฐานข้อมูล

try {
    // สร้างการเชื่อมต่อ PDO
    $dbh = new PDO("mysql:host=$servername;dbname=$mydb", $username, $password);
    
    // ตั้งค่าการจัดการข้อผิดพลาด
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // หากต้องการแสดงข้อความเชื่อมต่อสำเร็จ สามารถเปิดใช้งานบรรทัดนี้
    // echo "Connected successfully";
} catch(PDOException $e) {
    // แสดงข้อความเมื่อการเชื่อมต่อล้มเหลว
    echo "Connection failed: " . $e->getMessage();
}
?>
