<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
      }
      
      .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        color: #fff;
      }
      
      .delete-btn {
        background-color: #f44336;
        color: #fff;
      } </style>
</head>
<body>
    <form action="{{ route('store.user')}}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="unit">
                   
        <label type="form" for="fullname">
            <p>Input UserName</p> <span><input type="text" name="fullname"></span>
        </label>
    </div>
    <br>
        <button type="submit"> Create User</button>

            </div>
        </div>
    </form>

</body>
</html>