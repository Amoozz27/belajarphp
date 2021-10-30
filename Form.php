<html lang="en">
    <head>
    <title>cuti</title>
    </head>

<body>
    <H1> Lorem Ipsum </H1>
    <h2> Lorem Ipsum </H2>
    <h3> Lorem Ipsum </H3>
    <h4> Lorem Ipsum </H4>
    <h5> Lorem Ipsum </H5>
    <h6> Lorem Ipsum </H6>
    <!--  ini header ukuran tex h1 - h6-->
    <hr>
    <a href="index.php">Index</a> |
    <a href="cv.php">CV</a>  |
    <a href="table.php">Table</a> |
    <a href="form.php">form</a>  |
    <a href="Pengalaman.php">Pengalaman</a>  |
    <hr>
    <h4>halaman form</h4>
    <form action="proses_input_mahasiswa.php" method="post/get">
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
                <select name="jeniskelamin" id="jeniskelamin">
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
            <input type="text" name="Tempat Lahir" id="tempatlahir">   
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
            <input type="date" name="Tanggal Lahir" id="tgllahir">   
            </td>
        </tr>

        <tr>
            <td valign="top">Alamat</td>
            <td valign="top"> :</td>
            <td>
            <textarea name="alamat" id="alamat" cols="20" rows="8"></textarea>
            </td>
        </tr>        
    </table>
    <button type="button" id="submit">Submit</button>
    </form>
    
</body>
</html>