<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    {{-- <p>Hello, {{$formData['user']->name}}</p> --}}
    <p>Bạn nhận được email này vì bạn (hoặc ai đó) đã yêu cầu đặt lại mật khẩu cho tài khoản của bạn.</p>
    <p>Click vào liên kết dưới đây để đặt lại mật khẩu:</p>
    <a href="{{route('confirmpass', $token)}}">Reset Password</a>
    <p>Nếu bạn không yêu cầu điều này, vui lòng bỏ qua email này.</p>
</body>
</html>
