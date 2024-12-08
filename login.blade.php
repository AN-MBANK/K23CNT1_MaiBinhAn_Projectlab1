<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Xác nhận mật khẩu:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <label for="gender">Giới tính:</label>
        <select id="gender" name="gender">
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
            <option value="other">Khác</option>
        </select><br><br>

        <input type="submit" value="Đăng ký">
    </form>

   
    @if(isset($username))
        <h2>Thông tin đăng ký:</h2>
        <p><b>Tên đăng nhập:</b> {{ $username }}</p>
        <p><b>Email:</b> {{ $email }}</p>
        <p><b>Mật khẩu:</b> {{ $password }}</p>
        <p><b>Xác nhận mật khẩu:</b> {{ $confirmPassword }}</p>
        <p><b>Giới tính:</b> {{ $gender }}</p>
    @endif
    <a href=" https://github.com/AN-MBANK/K23CNT1_MaiBinhAn_Projectlab1.git " target="_blank">GitHub của tôi</a>

</body>
</html>
