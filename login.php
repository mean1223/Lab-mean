<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #ffffff;
            padding: 40px; /* เพิ่ม padding */
            width: 420px; /* ขยายความกว้าง */
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            font-size: 14px;
            color: #555;
            display: block;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-control:focus {
            border-color: #333;
            outline: none;
        }
        .btn-login {
            width: 100%;
            background-color: #000; /* สีดำ */
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-login:hover {
            background-color: #333; /* เปลี่ยนเป็นสีดำอมเทาเมื่อ hover */
        }
        .signup-link {
            margin-top: 15px;
            font-size: 14px;
        }
        .signup-link a {
            color: #000; /* สีดำ */
            text-decoration: none;
            font-weight: bold;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>เข้าสู่ระบบ</h2>
    <form action="process_login.php" method="post">
        <div class="form-group">
            <label for="username">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="กรุณากรอกชื่อผู้ใช้" required>
        </div>
        <div class="form-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="กรุณากรอกรหัสผ่าน" required>
        </div>
        <button type="submit" class="btn-login">เข้าสู่ระบบ</button>
    </form>
    <p class="signup-link">ยังไม่มีบัญชี? <a href="signup.php">สมัครสมาชิก</a></p>
</div>

</body>
</html>
