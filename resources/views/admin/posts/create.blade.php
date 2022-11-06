<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .inp-title{
                padding: 10px;
        }

        .content{

        }

        .btn{
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 10px;
            padding-bottom: 10px;

        }
        .btn-cancelar{
            background-color: red;
        }
        .btn-salvar{
            background-color: blue;
        }
    </style>
</head>
<body>
    

    @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error}}</li> 
            @endforeach
        </ul>
    @endif
   
        
    <form action="{{route ('posts.store')}}" method="post">
        @csrf
        <input type="text" name="title" class="inp-title">
        <textarea name="content" class="content" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-cancelar">Cancelar</button>
        <button type="submit" class="btn btn-salvar">Salvar</button>
    </form>
</body>
</html>