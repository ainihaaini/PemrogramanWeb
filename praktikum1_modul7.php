<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>


<form enctype="multipart/form-data" action= "simpan.php" method="post">
        Nama : <input type="text" name="nama"> <br><br>
        tempat lahir: <input type="text" name="tempat"> <br><br>
        Tanggal lahir: <input type="date" name="tgl"> <br><br>
        Jenis Kelamin: <br>
         <input type="radio" name="jk" value="Laki-laki">Laki-laki <br>
          <input type="radio" name="jk" value="Perempuan">Perempuan <br>
          agama :
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
            </select>
            <br><br>
            alamat : <textarea name="alamat" ></textarea>
            <br><br>
            Hobi : <br>
            <input type="checkbox" name="Hobi1" value="berenang">Berenang <br>
            <input type="checkbox" name="Hobi2" value="berlari">Berlari <br>
            <input type="checkbox" name="Hobi3" value="memancing">Memancing <br>
            <input type="checkbox" name="Hobi4" value="lainnya">Lainnya <br><br>
            Masukkan foto : <input type="file" name="file"><br><br>

            <input type="submit" value="Send">
            <input type="submit" name="logout" value="Logout">
            
    </form>
    </body>
</html>