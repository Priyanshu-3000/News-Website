<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $key => $item)

    <table>
        <tr>
            <th>{{$item->title}}</th>
            <th>{{$item->short_description}}</th>
            <th>{{$item->long_description}}</th>
            <th>{{$item->News_Type}}</th>
            <th>{{$item->Author}}</th>
            <th>{{$item->file}}</th>
        </tr>
    </table>
    @endforeach
</body>
</html>