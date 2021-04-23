<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form id="form_produk" action="proses.php" method="post">
        <table>
            <h1>Form Input Produk</h1>
            <br/>

            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" size="20"></td>
            </tr>

            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" size="20"></td>
            </tr>

            <tr>
                <td>Satuan</td>
                <td><input type="text" name="satuan" size="20"></td>
            </tr>

            <tr>
                <td><input type="submit" name="proses" value="Proses"></td>
                <td><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</body>
</html>