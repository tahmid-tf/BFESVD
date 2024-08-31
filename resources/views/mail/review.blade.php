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
    <p>Dear {{ $user }}:</p>

    <p>You are invited to review the following data entry submitted to the Bangladesh Forest ESV Database on the
        Bangladesh Forest Department’s website. </p>

    <p>Data entry number:  {{ $tracking_number }}</p>

    <p>To review the invitation, please go to <a href="{{ route('reviewer.survey') }}"><span style="font-weight: bold">Dashboard</span></a></p>

    <p>We are looking forward to receiving your response. Thank you.</p><br>

    <p>Best wishes,</p>
    <p>Forest ESV Database Module </p>
    <p>Bangladesh Forest Department</p>

</div>
</body>
</html>
