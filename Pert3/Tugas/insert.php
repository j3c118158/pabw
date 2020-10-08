<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container mt-3">
        <h2>Form tambah data baru</h2>    
        <form method ="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nim">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <br><input type="radio" name="jenisKelamin" value="Pria">Pria<br>
                <input type="radio" name="jenisKelamin" value="Wanita">Wanita<br>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label><br>
                <select name="agama" id="agama">
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                  <option value="Atheis">Atheis</option>
                </select><br>
            </div>    
            <div class="form-group">
                <label for="olahraga">Olahraga Favorit</label>
                <br>
                <input type='hidden' name='renang' value=0>
                <input type='hidden' name='basket' value=0>
                <input type='hidden' name='futsal' value=0>
                <input type="checkbox" id="renang" name="renang" value=1>
                <label for="renang"> Berenang</label><br>
                <input type="checkbox" id="basket" name="basket" value=1>
                <label for="basket"> Basket</label><br>
                <input type="checkbox" id="futsal" name="futsal" value=1>
                <label for="futsal"> Futsal</label><br> 
            </div>    
            <div class="form-group">
                <label for="foto">Foto Mahasiswa</label><br>
                <input type="file" name="foto">
            </div>
            <input type="submit" class="btn btn-primary" name="sub" value="Kembali">
            <input type="submit" class="btn btn-primary" name="sub" value="Simpan">
            <?php
                if(isset($_POST['sub'])){
                    if($_POST['sub']=='Kembali'){
                        header("location:tampil_data.php");
                    }
                    else{
                        if(strlen($_POST['nama'])){    
                            include "koneksi.php";
                            $target = "images/".basename($_FILES['foto']['name']);
                            $img = $_FILES['foto']['name'];
                            $perintah = "INSERT INTO mahasiswa (nim,nama,jenisKelamin,agama,renang,basket,futsal,foto) 
                                VALUES ('".$_POST['nim'].
                                        "','".$_POST['nama'].
                                        "','".$_POST['jenisKelamin'].
                                        "','".$_POST['agama'].
                                        "',".$_POST['renang'].
                                        ",".$_POST['basket'].
                                        ",".$_POST['futsal'].
                                        ",'".$img."')";
                            if(!move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
                                echo 'Your file was not uploaded please try again
                                here are your debug informations:
                                '.print_r($_FILES);
                                } 
                            mysqli_query($kon,$perintah) or die(mysqli_error($kon));
                            echo "<br>Data <b>'".$_POST['nama']."'</b> telah dimasukan ke database";
                            echo "<br>silahkan klik tombol kembali ke daftar data untuk melihat hasilnya";
                            //header("location:tampil_data_link_insert.php");
                          }
                          else{
                              echo "Agar data tersimpan, nama tidak boleh kosong :)";
                          }    
                     }
                }
            ?>
        </form>
    </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
