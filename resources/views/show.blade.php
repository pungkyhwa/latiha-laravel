<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{ route('add') }}"><button>Tambahkan data baru</button></a>
    <table border="1">
        <tr>
            <td>kegiatan</td>
            <td>tanggal</td>
            <td>waktu</td>
            <td>keterangan</td>
            <td>status</td>
            <td>aksi</td>
        </tr>
        @foreach($data as $row)
            <tr>
                <td>{{$row->kegiatan}}</td>
                <td>{{$row->tanggal}}</td>
                <td>{{$row->waktu}}</td>
                <td>{{$row->keterangan}}</td>
                <td>{{$row->status}}</td>
                <td></td>
            </tr>
        @endforeach
        
    </table>


</body>
</html>

