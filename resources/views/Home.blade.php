<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #b6abab;
      }
      
      .container {
        max-width: 600px;
        margin: 10px auto;
        padding: 1px;
        background-color: #d4c2c2;
        border-radius: 50px;
        box-shadow: 5 10 10px rgba(0, 0, 0, 0.1);
      }
      
      h1 {
        text-align: center;
      }
      
      form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
      }
      
      input[type="text"] {
        padding: 10px;
        margin-right: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      
      button {
       
        padding: 10px 20px;
        background-color: #4caf50;
        border: none;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
      }
      
      table {
        width: 100%;
        border-collapse: collapse;
      }
      
      th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      
      th {
        background-color: #f2f2f2;
      }
      
      td:last-child {
        text-align: center;
      }
      
      .actions {
        display: flex;
        justify-content: center;
      }
      
      .edit-btn,
      .delete-btn {
        margin-left: 5px;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }
      
      .edit-btn {
        background-color: #2196f3;
        color: #bbb7b7;
      }
      
      .delete-btn {
        background-color: #f44336;
        color: #bdb5b5;
      } </style>
</head>
</head>
<body>
    <center>
        <header>
            <h1>REGISTER</h1>
        </header>
    </center>

    <div class="container">
        
        <ul>
        @forelse ( $fullname as $keys => $value )
            <form id="crud-form" action="{{ route('edit.user' , ['id' => $value->id])}}" method="post">
            @csrf
            
            <ul>
                
                <li><p style="display: inline;">{{ $value->fullname }}</li> </p> <button style="display: inline;" type="submit" >Edit</button>
                <br>
            </form>
       
            <br> <form id="crud-form" action=" {{route('delete.user', ['id' => $value->id]) }} " method="post">
               @csrf
               @method("DELETE")
                <button  type="submit"> Delete</button>
            </form>
            </ul>
        </div>

        <div class="container">
        @empty
            
        @endforelse
        </ul>
    </div>
        <hr>
        <section>
            <form action="{{route('create.user')}}" method="get"> 
                <button type="submit"> Create User</button>
            </form>
        </section>
</body>
</html>