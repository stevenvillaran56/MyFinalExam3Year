<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store.user')}}" method="post">
        @csrf
        <label for="fullname">
            <p>Fullname</p> <span><input type="text" name="fullname"></span>
        </label>
        <button type="submit"> Create User</button>
    </form>
</body>
</html>