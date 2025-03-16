<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <style>
        body {
            background-color: white; /* พื้นหลังสีขาว */
            font-family: Arial, sans-serif; /* ฟอนต์ */
            margin: 0; /* ลบ margin เริ่มต้น */
            padding: 20px; /* เพิ่ม padding */
            position: relative;
        }
        .header-box {
            display: inline-block;
            padding: 10px 20px;
            font-size: 24px;
            color: black;
            border: 2px solid black; /* กรอบสี่เหลี่ยม */
            border-radius: 10px; /* มุมโค้งเล็กน้อย */
            font-weight: bold;
        }
        .button-container {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px; /* เว้นระยะห่าง */
        }
        .signup-button {
            background-color: #4CAF50; /* สีเขียว */
        }
        .signup-button:hover {
            background-color: #45a049;
        }
        .logout-button {
            background-color: #f44336; /* สีแดง */
        }
        .logout-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

    <div class="header-box">Mean</div>

    <div class="button-container">
        <a href="signup.php"><button class="btn signup-button">Sign Up</button></a>
        <a href="login.php"><button class="btn logout-button">Log Out</button></a>
    </div>

</body>
</html>
