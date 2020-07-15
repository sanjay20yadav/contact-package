<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact us</title>
</head>
<body>
    <h1>Contact us At any time<h1>
        <form method="post" action="contact" >
            @csrf
            <input type="text" name="name" value="" placeholder="give us your name">
            <input type="email" name="email" placeholder="your valid emial address">
            <textarea name="message" id="" cols="30" rows="10" placeholder="query here"></textarea>
            <input type="submit" value="sumbit">
        </form>
</body>
</html>