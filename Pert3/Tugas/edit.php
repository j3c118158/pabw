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
            <h2>Form edit data</h2>    
        <form method="POST" enctype="multipart/form-data">
            <?php
                include "koneksi.php";
                if(isset($_POST['sub']))
                    $x = $_POST['idnya'];
                else    
                    $x = $_GET['id'];
                
            ?>
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" name="nim" value="<?php 
                if(isset($_POST['sub'])) 
                     echo $_POST['nim'];
                else{     
                    $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                    $brs = mysqli_fetch_assoc($r);        
                    echo $brs['nim'];
                    }
                ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php 
                if(isset($_POST['sub'])) 
                     echo $_POST['nama'];
                else{     
                    $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                    $brs = mysqli_fetch_assoc($r);        
                    echo $brs['nama'];
                    }
                ?>">
            </div>
            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                    <br><input type="radio" name="jenisKelamin" value="Pria" 
                    <?php
                    if(isset($_POST['sub'])){
                        if($_POST['jenisKelamin'] == "Pria"){
                            echo "checked";
                        }   
                    }
                    else{
                        $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                        $brs = mysqli_fetch_assoc($r);      
                        if($brs['jenisKelamin'] == "Pria"){
                            echo "checked";
                        };
                    } 
                    ?>
                >Pria<br>
                <input type="radio" name="jenisKelamin" value="Wanita"
                    <?php
                    if(isset($_POST['sub'])){
                        if($_POST['jenisKelamin'] == "Wanita"){
                            echo "checked";
                        }   
                    }
                    else{
                        $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                        $brs = mysqli_fetch_assoc($r);      
                        if($brs['jenisKelamin'] == "Wanita"){
                        echo "checked";
                        };
                    }
                    ?>
                >Wanita<br>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label><br>
                <select name="agama" id="agama">
                    <option value="Islam" 
                    <?php
                        if(isset($_POST['sub'])){
                            if($_POST['agama'] == "Islam")
                                echo "selected";
                        }
                        else{
                            $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                            $brs = mysqli_fetch_assoc($r);
                            if($brs['agama'] == "Islam"){
                                echo "selected";
                            }  
                        }
            
                    ?>
                    >Islam</option>
                    <option value="Kristen"
                    <?php
                        if(isset($_POST['sub'])){
                            if($_POST['agama'] == "Kristen")
                                echo "selected";
                        }
                        else{
                            $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                            $brs = mysqli_fetch_assoc($r);
                            if($brs['agama'] == "Kristen"){
                                echo "selected";
                            }      
                        }
                    ?>
                    >Kristen</option>
                    <option value="Hindu"
                    <?php
                       if(isset($_POST['sub'])){
                            if($_POST['agama'] == "Hindu")
                                echo "selected";
                        }
                        else{
                            $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                            $brs = mysqli_fetch_assoc($r);
                            if($brs['agama'] == "Hindu"){
                                echo "selected";
                            }                      
                        }    
                    ?>
                    >Hindu</option>
                    <option value="Budha"
                    <?php
                        if(isset($_POST['sub'])){
                            if($_POST['agama'] == "Budha")
                                echo "selected";
                        }
                        else{
                            $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                            $brs = mysqli_fetch_assoc($r);
                            if($brs['agama'] == "Budha"){
                                echo "selected";
                            }  
                        }   
                    ?>
                    >Budha</option>
                    <option value="Konghucu"
                    <?php
                        if(isset($_POST['sub'])){
                            if($_POST['agama'] == "Konghucu")
                                echo "selected";
                        }
                        else{
                            $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                            $brs = mysqli_fetch_assoc($r);
                            if($brs['agama'] == "Konghucu"){
                                echo "selected";
                            }
                        }
                    ?>
                    >Konghucu</option>
                    <option value="Atheis"
                    <?php
                        if(isset($_POST['sub'])){
                            if($_POST['agama'] == "Atheis")
                                echo "selected";
                        }
                        else{
                            $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                            $brs = mysqli_fetch_assoc($r);
                            if($brs['agama'] == "Atheis"){
                                echo "selected";
                            }
                        }     
                    ?>
                    >Atheis</option>
                </select><br>
            </div>
            <div class="form-group">
                <label for="olahraga">Olahraga Favorit  </label>
                <br>
                <input type='hidden' name='renang' value=0>
                <input type='hidden' name='basket' value=0>
                <input type='hidden' name='futsal' value=0>
                <input type="checkbox" id="renang" name="renang" value=1 
                <?php
                    if(isset($_POST['sub'])){
                        if($_POST['renang'] == 1){
                            echo "checked";
                        }   
                    }
                    else{
                        $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                        $brs = mysqli_fetch_assoc($r);      
                        if($brs['renang'] == 1){
                        echo "checked";
                        };
                    }
                ?>
                >
                <label for="renang"> Berenang</label><br>
                <input type="checkbox" id="basket" name="basket" value=1
                <?php
                    if(isset($_POST['sub'])){
                        if($_POST['basket'] == 1){
                            echo "checked";
                        }   
                    }
                    else{
                        $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                        $brs = mysqli_fetch_assoc($r);      
                        if($brs['basket'] == 1){
                        echo "checked";
                        };
                    }
                ?>
                >
                <label for="basket"> Basket</label><br>
                <input type="checkbox" id="futsal" name="futsal" value=1
                <?php
                    if(isset($_POST['sub'])){
                        if($_POST['futsal'] == 1){
                            echo "checked";
                        }   
                    }
                    else{
                        $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
                        $brs = mysqli_fetch_assoc($r);      
                        if($brs['futsal'] == 1){
                        echo "checked";
                        };
                    }
                ?>
                >
                <label for="futsal"> Futsal</label><br>
            </div>    
            <div class="form-group">
                <label for="foto">Foto</label><br>
                <?php 
                    if(isset($_POST['sub'])){
                        $r = mysqli_query($kon,"SELECT foto FROM mahasiswa WHERE id=$x");
                        $foto=mysqli_fetch_assoc($r)['foto'];
                        echo "<img src='images/$foto' width='150' height='150'";
                    }else{
                        $r = mysqli_query($kon,"SELECT foto FROM mahasiswa WHERE id=$x");
                        $foto=mysqli_fetch_assoc($r)['foto'];
                        echo "<img src='images/$foto' width='150' height='150'";
                    }            
                ?>
                <br>
                <input type="file" name="foto">
            </div>
            <input type="submit" class="btn btn-primary" name="sub" value="kembali ke daftar data">
            <input type="submit" class="btn btn-primary" name="sub" value="simpan hasil pengubahan!">
            <input type="hidden" name="idnya" value="<?php echo $x; ?>">
            <?php
                if(isset($_POST['sub']) ){
                    if($_POST['sub']=='kembali ke daftar data'){
                        header("location:tampil_data.php");
                    }
                    else{
                      if(strlen($_POST['nama'])){    
                        //include "koneksi.php"; //di atas sudah ya
                        $target = "images/".basename($_FILES['foto']['name']);
                        $img = $_FILES['foto']['name'];
                        if(!move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
                                echo 'Your file was not uploaded please try again
                                here are your debug informations:
                                '.print_r($_FILES);
                        }else{
                            $r = mysqli_query($kon,"SELECT foto FROM mahasiswa WHERE id=$x");
                            $foto=mysqli_fetch_assoc($r)['foto'];
                            unlink("images/".$foto);
                        }
                        $kueri="UPDATE `mahasiswa` SET `nama` = '".$_POST['nama']."',
                                `nim` = '".$_POST['nim']."',
                                `jenisKelamin` = '".$_POST['jenisKelamin']."',
                                `agama` = '".$_POST['agama']."',
                                `renang` = '".$_POST['renang']."',
                                `basket` = '".$_POST['basket']."',
                                `futsal` = '".$_POST['futsal']."',
                                `foto` = '".$img."'  
                                           WHERE `id` = ".$_POST['idnya'];
                        mysqli_query($kon,$kueri);
                        echo "<br>Data <b>'".$_POST['nama']."'</b> telah disimpan sebagai perubahan pada database";
                        echo "<br>silahkan klik tombol kembali ke daftar data untuk melihat hasilnya";
                        //header("location:tampil_data_link_insert.php");
                      }
                     else{
                         echo "Data nama baru tidak boleh kosong :)";
                     }    
                    }
                }
            ?>
        </form>
    </div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
