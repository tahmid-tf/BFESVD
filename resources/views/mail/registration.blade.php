<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div>
       <p>*This is an automated message.*</p><br>
       <p>Dear {{ $user }}:</p><br>

       <p>Thank you for registering for the Bangladesh Forest ESV Database as <span style="color: green">{{ \Illuminate\Support\Str::ucfirst($role) }}.</span></p><br><br>


       <p>Best wishes,</p>
       <p>Forest ESV Database Module </p>
       <p>Bangladesh Forest Department</p>

   </div>
</body>
</html>
