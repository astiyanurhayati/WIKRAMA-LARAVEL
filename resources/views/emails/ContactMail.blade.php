<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Message</h1>
    <p><b>Name:</b> {{ $details['name'] }}</p>
    <p><b>Email:</b> {{ $details['email'] }}</p>
    <p><b>Subject:</b> {{ $details['subject'] }}</p>
    <p><b>Phone:</b> {{ $details['phone'] }}</p>
    <p><b>Message</b> {{ $details['msg'] }}</p>
</body>
</html>