<?php
//koneksi database 
//mysqli_connect("host name server","user","password","database")
$conn = mysqli_connect("localhost","root","","belajar_crud");
if($conn){
    // echo "oke bos"; - > tampilan berhasil
}else{
    echo mysqli_eror($conn);
}
function tambah($data){
    global $conn;
    $namamahasiswa = $data['namamahasiswa'];
    $jk = $data['jk'];
    $tpt_lahir = $data['tpt_lahir'];
    $tgl_lahir = $data['tgl_lahir'];
    $alamat = $data['alamat'];

    $query = "INSERT INTO mahasiswa 
    (namamahasiswa,jk,tpt_lahir,tgl_lahir,alamat)
    VALUES
    ('$namamahasiswa','$jk','$tpt_lahir','$tgl_lahir','$alamat')
    ";
    mysqli_query($conn, $query);

    
    return mysqli_affected_rows($conn);

}

function listMahasiswa($query){
global $conn;
$getmhs = mysqli_query($conn,$query); //ambil seluruh mahasiswa

$mhsArray = [] ; // buat array baru

while ($row = mysqli_fetch_assoc($getmhs)){
$mhsArray[] = $row;


}


return $mhsArray;
}
?>