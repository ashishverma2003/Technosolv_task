<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createpost.php" method="POST">
        Name: <input type="text" name="name" required>
        Email: <input type="text" name="email" required>
        Phone: <input type="number" name="phone" required>
        Subject: <input type="text" name="subject" required>
        Message: <input type="text" name="message" required>
        <input type="submit" name="submit">
    </form>
</body>
</html>