<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Добавить сотрудника</title> 
        <style>
            div {
               margin-bottom: 10px; 
            }
            span {
                display: block;
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>         
         <form action="{{route('addUser')}}" method="POST" name="form" id="form">
             {{ csrf_field() }}
            <div>
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" required>
            </div> 
            <div>
                <label for="surmame">Фамилия</label>
                <input type="text" name="surname" id="surname" required>
            </div>
            <div>
                <label for="age">Возраст</label>
                <input type="text" name="age" id="age" required>
            </div>
                        
            <input type="submit" value='Добавить'>
        </form>
        
    </body>
</html>
