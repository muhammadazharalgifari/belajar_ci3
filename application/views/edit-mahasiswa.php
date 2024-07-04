<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
    <center>
        <h3>Edit Data</h3>
    </center>
    <?php foreach ($mahasiswa as $m) { ?>
    <form action="<?php echo base_url() . 'mahasiswa/update'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="nim" value="<?php echo $m->nim ?>">
                    <input type="text" name="nama" value="<?php echo $m->nama ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $m->alamat ?>"></td>
            </tr>
            <tr>
                <td>No.Telepon</td>
                <td><input type="text" name="telepon" value="<?php echo $m->telepon ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    
   <?php } ?>
</body>
</html>