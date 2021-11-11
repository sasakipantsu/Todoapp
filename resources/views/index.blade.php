@extends('layouts.default')

@section('content')

    @foreach ($items as $item)
    <tr>
        <form action="/todo/update" method="POST">
            @csrf
            <td class="text-center">
                {{ $item->created_at }}
            </td>
            <td class="w-1/2">
                <input type="hidden" name="id" value=" {{ $item->id }}">
                <input type="text" name="content" class="w-full py-2 px-2 border-solid border-2 border-gray-400 rounded-md" value=" {{ $item->content }}">
            </td>
            <td class="pl-4">
                <button type="submit" class="my-2 px-4 py-2 border-2 border-green-600 rounded-md bg-green-500 hover:bg-green-300 text-white shadow-lg transition ease-out duration-500">更新</button>
            </td>
        </form>
        <form action="/todo/delete" method="POST">
            @csrf
            <td class="pl-4">
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit" class="my-2 px-4 py-2 border-2 border-red-600 rounded-md bg-red-500 hover:bg-red-300 text-white shadow-lg transition ease-out duration-500 ">削除</button>
            </td>
        </form>
    </tr>
    @endforeach

@endsection

