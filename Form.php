<?php

require "proses_mahasiswa.php";

if(isset($_POST['simpan'])){
    // var_dump($_POST);
    if(tambah($_POST) > 0){
        // echo "Oke Bro";//
        echo "
        <script>
        
         alert('berhasil bro');
         document.location.href='listmahasiswa.php'
        </script>
            
        ";
    }else {
        echo "gagal bro";
    }


}   
?>
<html lang="en">
    <head>
    <title>cuti</title>
    </head>

<body>
    
    <!--  ini header ukuran tex h1 - h6-->
    <hr>
    <a href="index.php">Index</a> |
    <a href="cv.php">CV</a>  |
    <a href="table.php">Table</a> |
    <a href="form.php">form</a>  |
    <a href="Pengalaman.php">Pengalaman</a>  |
    <a href="ListMahasiswa.php">List Mahasiswa</a>  |
    <hr>
    <h4>halaman form</h4>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
                <input type="text" id="namamahasiswa" name="namamahasiswa"> 
                <!-- type = text, date, file , hidden, password,submit, number -->
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select  id="jeniskelamin" name="jk">
                <option value="laki-laki">laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>

            <!-- <input type="text" name="email" placeholder="masukan Email"/>    -->

            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>
            <input type="text"  id="tempatlahir" name="tpt_lahir">   
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
            <input type="date"  id="tgllahir" name="tgl_lahir">   
            </td>
        </tr>

        <tr>
            <td valign="top">Alamat</td>
            <td valign="top"> :</td>
            <td>
            <textarea id="alamat" cols="20" rows="8" name="alamat"></textarea>
            </td>
        </tr>        
    </table>
    <button type="submit" id="submit" name="simpan">Submit</button>
    </form>
    
</body>
</html>