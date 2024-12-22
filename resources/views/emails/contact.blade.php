<!DOCTYPE html>
<html>

<head>
    <title>New Contact Form Submission</title>
</head>

<body>
    <h1>New Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact->message }}</p>


    Thanks,<br>
    {{ config('app.name') }}
</body>

</html>
