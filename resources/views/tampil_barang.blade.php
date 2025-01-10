<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Barang</title>
</head>
<body>

        <table border="1">
        <tr>
                <th>ID</td>
                <th>Nama Barang</td>
                <th>Merk</td>
                <th>Harga</td>
            </tr>
        @foreach($barang as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_barang}}</td>
                <td>{{$data->merk}}</td>
                <td>{{$data->harga}}</td>
            </tr>
            @endforeach
        </table>
</body>
</html>