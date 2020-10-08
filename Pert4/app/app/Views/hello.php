<form action="<?php echo site_url('Mahasiswa/greeting');?>" method="post">
    <input type="text" name="nama">
    <input type="submit" name="kirim" value="kirim">
</form>
Good Night, <b>Mr. <?php echo $n ?></b>
<?php
    echo date("d-m-Y")."<br>";
    echo base_url()."<br>";
    echo site_url()."<br>";
    echo site_url('Mahasiswa/greeting');
?>