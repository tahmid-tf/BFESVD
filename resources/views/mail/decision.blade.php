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
    <p>*This is an automated message.*</p>
    <p>Dear {{ $user->name }}:</p>

    <p>Your entered data has been {{ $approve }} by the Admin on the Bangladesh Forest Department's website. </p>

    <p>Data entry number:  {{ $tracking_number }}</p>


    <p>Best wishes,</p>
    <p>Forest ESV Database Module </p>
    <p>Bangladesh Forest Department</p>

</div>
</body>
</html>
