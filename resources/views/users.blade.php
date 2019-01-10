<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Users</title>   
        <style>
            table, td, th {
                border: 1px solid;
            }
            .addUser{
                margin: 10px;
                width: 150px;
                height: 25px;
                border: 1px solid;
                text-align: center; 
                border-radius: 5px;
                background-color: #778899;
            }
            a {
                text-decoration: none;
                color: #000;
            }
            td a {
                color: #000080;
            }
        </style>    
    </head>
    <body>            
        <h4>Список сотрудников</h4>   
        <div>
            <table>
                <tr>
                    <th>id</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Возраст</th>
                    <th>Обновить</th>
                    <th>Удалить</th>
                </tr>
                @foreach ($all as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td> 
                    <td>{{$user->surname}}</td>
                    <td>{{$user->age}}</td>
                    <td><a href="{{route('updateForm', $user->id)}}">Обновить</a></td>
                    <td><a href="{{route('deleteUser', $user->id)}}">Удалить</a></td> 
                </tr>
                @endforeach
            </table>
        </div>
        <div class='addUser'>
            <a href="{{route('addForm')}}">Добавить сотрудника</a></li>                   
        </div>
            
    </body>
</html>

