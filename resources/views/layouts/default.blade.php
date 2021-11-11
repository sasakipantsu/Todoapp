<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Todo List</title>
</head>
<body class="bg-gray-200">

    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-10 rounded-2xl bg-white w-3/5 ">
        <h1 class="text-5xl font-bold">Todo List</h1>

        {{-----  validate  -----}}

        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                   <p class="text-xl my-2">{{$error}}</p>
                </li>
                @endforeach
            </ul>
        @endif

        {{-----  create_new_area  -----}}

        <form action="/todo/create" method="POST">
            @csrf
            <div class="flex space-x-5">
                <div class="w-4/5">
                    <input type="text" name="content" class="w-full my-2 py-2 px-2 border-solid border-2 border-gray-400 rounded-md">
                </div>
                <div>
                    <button type="submit" class="my-2 px-4 py-2 border-2 border-blue-600 rounded-md bg-blue-500 hover:bg-blue-300 text-white shadow-lg transition ease-out duration-500">追加</button>
                </div>
            </div>
        </form>

        {{-----  created_task_area  -----}}

            <table  class="w-full">
                <div class="py-2">
                    <tr>
                        <th>作成日</th>
                        <th>タスク名</th>
                        <th>更新</th>
                        <th>削除</th>
                    </tr>
                </div>
                @yield('content')
            </table>
    </div>

</body>
</html>
