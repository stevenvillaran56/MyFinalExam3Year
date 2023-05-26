<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
    @forelse ($data as $keys => $value )
        <form action="{{ route('update.user' , ['id' => $value->id]) }}" method="post">
            @csrf
            <label for="">
                <p>Name:</p> <span><input type="text" name="fullname" value="{{ $value->fullname }}"></span>
            </label>
            <button type="submit">Change Name</button>
        </form>
    @empty
        
    @endforelse

</body>
</html>