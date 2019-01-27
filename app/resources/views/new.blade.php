<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    <form action="/posts" method="post">
        {{ csrf_field() }}
        <p>Title<input type="text" name="post_title"></p>
        <p>Content<input type="text" name="post_content"></p>
        <input type="submit" value="ok">
    </form>

</body>
</html>