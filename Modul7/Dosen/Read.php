<?php

include '../connect.php';

$query = "SELECT * FROM Dosen";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <table border='1'>
    <h2>Data Dosen</h2>
    <tr>
        <th>No.</th>
        <th>Nama Dosen</th>
        <th>Telepon</th>
        <th>Aksi</th>
        <th>Delete</th>
    </tr>

    <?php
        if($num > 0)
        {
            $no = 1;
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nama_dosen'] . "</td>";
                echo "<td>" . $data['telp'] . "</td>";
                echo "<td><a href='Form-Update.php?ID=" . $data['ID'] . "'>Edit</a> | ";
                echo "<td><a href='Delete.php?ID=" . $data['ID'] . "'onclick='return confirm(\"Apakah Anda Yakin Ingin Menghapus Data ?\")' >Hapus</a></td>";              
                echo "</tr>";
                $no++;
            }
        }
        else
        {
            echo "<td colspan='3'> Tidak Ada Data</td>";
        }
    ?>

    </table>
</body>
</html>

<?php
if($num > 0)
{
    $no = 1;
    while ($data = mysqli_fetch_assoc($result)) { ?>
       <tr>
          <td> <?php echo $no; ?> </td>
          <td> <?php echo $data['kode'] ?> </td>
          <td> <?php echo $data['nama_matkul'] ?> </td>
          <td> <?php echo $data['sks'] ?> </td>
          <td> <?php echo $data['semester']; ?> </td>
          <?php
             if($data['nama_dosen'] != NULL )
             {echo $data['nama_dosen']; }
             else { echo "NULL"; }
          ?>
          <td>
             <a href="form-update.php?kode=<?php echo $data['kode']; ?>">Edit</a> |
             <a href="delete.php?kode=<?php echo $data['kode']; ?>"> onclick="return confirm('Anda yakin ingin menghapus data?')"> Hapus</a>
          </td>
       </tr>
    <?php
    $no++;
    }
}
else
{
    echo "<tr> <td colspan='7'> Tidak ada data </td></tr>";
}
?>