echo "<html>

<head></head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table border=\"5\">
        <tbody>
            <tr>
                <td>Foto</td>
                <td>Id toko</td>
                <td>Nama Toko</td>
                <td>Nama Barang</td>
                <td>Detail</td>
            </tr>";
            foreach ($barang as $row) {
            echo "<tr>
                <td><img src=\"barang/$row[foto_barang]\" width=\"120px\"></td>
                <td>$row[id_toko]</td>
                <td>$row[nama_toko]</td>
                <td>$row[nama_barang]</td>
                <td>$row[detail]</td>
            </tr>
        </tbody>
    </table>
</body>

</html>";