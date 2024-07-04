<html>

<head>
    <title>Tampilan Struk Pembelian</title>
</head>
<body>
    <table>
        <tr>
            <td colspan="4">Struk Pembelian Sepatu</td>
            <td>
                <form action="<?= 'http://localhost/belajar-ci3/sepatu'; ?>" method="post">
                    <input type="submit" name="kembali" value="Kembali ke Form">
                </form>
            </td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td colspan="4"> <?= $nama; ?></td>
        </tr>
        <tr>
            <td>No telp/HP</td>
            <td>:</td>
            <td colspan="4"> <?= $nmrhp; ?></td>
        </tr>
        <tr>
            <td>Merk Sepatu</td>
            <td>:</td>
            <td colspan="4"> <?= $merk; ?></td>
        </tr>
        <tr>
            <td>Ukuran Sepatu</td>
            <td>:</td>
            <td colspan="4"> <?= $ukuran; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td colspan="4"> <?= $harga_per_pasang; ?></td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td>:</td>
            <td colspan="4"><?= $jumlah ?></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td colspan="4"><?= $total_pembelian ?></td>
        </tr>
    </table>
</body>
</html>