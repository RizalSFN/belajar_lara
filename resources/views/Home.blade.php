<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
</head>

<body>
    <h1>Data</h1>
    <br>

    <table>
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Agama</th>
            <th>No.hp</th>
            <th>Email</th>
        </tr>
        <?php
        foreach($data as $row) : ?>
        <tr>
            <td>{{ $row->nik }}</td>
            <td>{{ $row->nama}}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->pekerjaan }}</td>
            <td>{{ $row->ttl }}</td>
            <td>{{ $row->agama }}</td>
            <td>{{ $row->no_hp }}</td>
            <td>{{ $row->email }}</td>
            <td>
                <a href="/data/edit/{{ $row->nik }}">Edit</a>
                |
                <a href="/data/hapus/{{ $row->nik }}">Hapus</a>
            </td>
        </tr>
        <?php endforeach  ?>
    </table>
</body>

</html>