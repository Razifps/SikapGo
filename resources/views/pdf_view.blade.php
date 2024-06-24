<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Laporan Kualitas Udara</h1>
    <table>
        <thead>
            <tr>
                <th>Polutan</th>
                <th>Konsentrasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item[0] }}</td>
                <td>{{ $item[1] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>