<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h3>Tabel Mahasiswa</h3>
    <table border="1px solid black">
        <tr>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Alamat</th>
        </tr>
        <?php 
        foreach($mahasiswa as $mhs):?>
            <tr>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['alamat']; ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>