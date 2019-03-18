<?php

include '../connect.php';

$query = "SELECT ID, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>
<html>
   <body>
   <h1>Tambah Data Matakuliah</h1>
    <form action="Create.php" method="POST">
        Kode : <input type="text" name="kode"><br><br>
        Mata Kuliah : <input type="text" name="nama_matkul"><br><br>
        SKS : <input type="text" name="sks"><br><br>
        Semester : <input type="text" name="semester"><br><br>
        <input type="submit" name="btnSimpan" value="SIMPAN">

        <select name="ID" id="nama_dosen">
        <option value="NULL">--Pilih salah satu--</option>
        <?php
            while ($data = mysqli_fetch_assoc($result)) {
               ?>
            <option value="<?php echo $data['ID']; ?>">
               <?php echo $data['nama_dosen']; ?>
            </option>
            <?php
           }
        ?>
        </select>
    </form>
   </body>
</html>