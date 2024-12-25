<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset password email</title>
</head>
<body>

    <p>Hello,{{ $formData['user']->name }}</p>

<h1>You have requested to change password:</h1>

<p>please click the link given below to reset password</p>
  <a href="{{ route('resetpsw',$formData['token']) }}">Click Here</a>  

<p>Thanks</p>
</body>
</html>
