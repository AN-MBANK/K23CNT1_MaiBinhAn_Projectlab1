<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_customers</title>
</head>
<body>
    <form action="{{ route('Aregister') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Tên:</label>
        <input type="text" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required><br>
        
        <label for="phone">Số điện thoại:</label>
        <input type="text" name="phone"><br>
        
        <label for="address">Địa chỉ:</label>
        <textarea name="address"></textarea><br>
        
        <label for="picture">Ảnh đại diện:</label>
        <input type="file" name="picture"><br>
        
        <input type="submit" value="Đăng ký">
    </form>

</body>
</html>