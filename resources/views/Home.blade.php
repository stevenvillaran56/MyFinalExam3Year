<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest method using Laravel</title>
</head>
<body>
    <center>
        <header>
            <h2>Rest Method</h2>
        </header>
    </center>


        <ul>
        @forelse ( $fullname as $keys => $value )
            <form action="{{ route('edit.user' , ['id' => $value->id])}}" method="post">
            @csrf
            <ul>
                <li><p style="display: inline;">{{ $value->fullname }}</p> <button style="display: inline;" type="submit" >Edit</button></li>
            
            </form>
            <form  action=" {{route('delete.user', ['id' => $value->id]) }} " method="post">
               @csrf
               @method("DELETE")
                <button  type="submit"> Delete</button>
            </form>
            </ul>
        @empty
            
        @endforelse
        </ul>

        <hr>
        <section>
            <form action="{{route('create.user')}}" method="get"> 
                <button type="submit"> Create User</button>
            </form>
        </section>
</body>
</html>