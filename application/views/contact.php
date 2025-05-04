<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact Us</h1>
    <p>Hubungi kami melalui kontak berikut!</p>
    <form action="" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Input your name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Input your email" required>
        </div>
        <div>
            <label for="message">Message</label> <br>
            <textarea name="message" cols="30" rows="5" id="name" placeholder="Input your message" required></textarea>
        </div>

        <div>
            <button type="submit" name="submit">Submit</button>
            <button type="reset" name="reset">Reset</button>
        </div>
    </form>
</body>
</html>