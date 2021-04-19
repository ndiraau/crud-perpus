<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    
      <h1><center> Daftar Buku &nbsp; </h1> </center>

        <div class="col-md-8" >
        <a style="text-align: right; " href="<?=base_url()?>index.php/home/tambah" class="btn btn-info">Tambah</a> 

      

      
      
    </div>

    <div class="container" style="text-align: center;">
       
 
      <div class="row">
      <div class="col-md-3" >
      <form action="<?=base_url()?>index.php/home/index" method="get">
        <input type="text" name="cari" class="form-control" placeholder="Cari judul buku">
        <input type="submit" value="Cari" class=" form-control btn btn-info">
      </form>
    </div>
  </div>
  <hr>
  <br>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-7 col-md-2">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/picture/<?=$data->foto?>" style="max-width:115%; max-height:100%; height:180px" alt="foto">
            </a>
            <div class="caption">
              <h3><?php echo $data->name?></h3>
              <p> <?php echo $data->alamat ?></p>
              <p> <?php echo $data->penerbit ?></p>
              <p>
                <a href="<?=base_url()?>index.php/home/edit/<?=$data->id?>" class="btn btn-warning" role="button">Edit</a>
                <a href="<?=base_url()?>index.php/home/deletedata/<?=$data->id?>/<?=$data->foto?>" class="btn btn-danger" role="button">Hapus</a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
