<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</Form></title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<h2>Contact Us</h2>
    <div class="container">
        <form action="connect.php" method="post">
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter your email">
            </div>
            <div>
            <label>Message</label>
            <input type="text" name="message" placeholder="Enter your message">
            </div>
            <div class="btn">
                <button type="submit">Submit data</button>
        </div>
        </form>
</body>
</html>
