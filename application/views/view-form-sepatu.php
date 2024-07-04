<html>
    <head>
        <title>Form Pembelian Sepatu</title>
    </head>
    <body>
        <form action="<?= 'http://localhost/belajar-ci3/sepatu/form'; ?>" method="post">
                <table border="0">
                <tr>
                    <td>
                        Form Pembelian Sepatu
                    </td>
                </tr>
                <tr>
                    <td>Nama Pembeli</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nama" id="nama" size="51" placeholder="Nama Lengkap">
                    </td>
                </tr>
                <tr>
                    <td>No.telp/HP</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nmrhp" id="nmrhp" size="51" placeholder="No.Telp/HP">
                    </td>
                </tr>
                <tr>
                    <td>Merk Sepatu</td>
                </tr>
                <tr>
                    <td>
                        <select name="merk" style="width: 375px">
                            <option value="merkpilih">-Pilih Merk-</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ukuran Sepatu</td>
                </tr>
                <tr>
                    <td>
                        <select name="ukuran" style="width: 375px">
                            <option value="ukuranpilih">-Pilih Ukuran-</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Jumlah Beli
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="jumlah" id="jumlah" size="51" placeholder="Jumlah Beli">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Proses">
                    </td>
                </tr>
            </table>
            </form>
    </body>
</html>