<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
    <center>
        <h1>DATA MAHASISWA</h1>
    </center>
    <center><?php echo anchor('mahasiswa/tambah', 'Tambah Data'); ?></center>
    <table style="margin: 20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mahasiswa as $m) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $m->nim ?></td>
            <td><?php echo $m->nama ?></td>
            <td><?php echo $m->alamat ?></td>
            <td><?php echo $m->telepon ?></td>
            <td>
                <?php echo anchor('mahasiswa/edit/' . $m->nim, 'Edit'); ?>
                <?php echo anchor('mahasiswa/hapus/' . $m->nim, 'Hapus'); ?>
            </td>
        </tr>    
       <?php }
        ?>
    </table>
</body>
</html>