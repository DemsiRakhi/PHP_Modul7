<?php

    include '../connect.php';

    $id_dosen = $_GET['ID'];

    $query = "SELECT * FROM Dosen WHERE ID = $id_dosen";

    $result = mysqli_query($connect,$query);

    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<h1>Update Data</h1>
    <form action="Update.php" method="POST">
    <table>
    <tr>
        <td><label for="nama">Nama Dosen</label></td>
        <td>:</td>
        <td><input type="text" name="nama_dosen" id="nama" value="<?php echo $row['nama_dosen']; ?>"></td>
    </tr>
    <tr>
        <td><label for="no_telp">No. Telepon</label></td>
        <td>:</td>
        <td><input type="text" name="telp" id="no_telp" value="<?php echo $row['telp']; ?>"></td>    
    </tr>
    <tr>
        <td></td>
        <td><input type="hidden" name="ID" value="<?php echo $row['ID']; ?>"></td>
        <td><input type="submit" value="Simpan" name="btnSimpan"></td>    
    </tr>
    </table>
    </form>
</body>
</html>
