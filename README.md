# PHP_Modul7
Form Create
![ALT EXT](https://github.com/DemsiRakhi/PHP_Modul7/blob/master/Modul7/SSFormCreate.PNG)
Hasil Create
![ALT EXT](https://github.com/DemsiRakhi/PHP_Modul7/blob/master/Modul7/SSCreate.PNG)
Hasil Form Create
![ALT EXT](https://github.com/DemsiRakhi/PHP_Modul7/blob/master/Modul7/SSRead.PNG)
Form Update
![ALT EXT](https://github.com/DemsiRakhi/PHP_Modul7/blob/master/Modul7/SSFormUpdate.PNG)
Hasil Update
![ALT EXT](https://github.com/DemsiRakhi/PHP_Modul7/blob/master/Modul7/SSUpdate.PNG)
Hasil Form Update
![ALT EXT](https://github.com/DemsiRakhi/PHP_Modul7/blob/master/Modul7/SSRead1.PNG)
Menghapus Data
![ALT EXT](https://github.com/DemsiRakhi/PHP_Modul7/blob/master/Modul7/SSDelete.PNG)

Soal
1. Berikan contoh kode koneksi untuk ke database pada php?
" $connect = mysqli_connect($host, $uname, $pass, $db); "
2. Bagaimana cara anda membuat database pada phpMySQl!
Dengan menambahkan parameter yang bersifat opsional, jika tidak ditentukan, maka akan menggunakan koneksi dengan fungsi mysql_connect
3. Berikan code query untuk menampilkan sebuah data yang ada pada ke database?
" $query = "SELECT * FROM Dosen"; "
4. Berikan code query untuk mengupdate sebuah data yang ada pada ke database?
" $query = "UPDATE Dosen SET nama_dosen = '$nama_dosen', telp = '$telp' WHERE ID = $id_dosen"; "
5. Berikan code query untuk menghapus sebuah data yang ada pada ke database?
" $query = "DELETE FROM Dosen WHERE ID = $id_dosen"; "
