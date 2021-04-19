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

    <div class="container">
      <h1>Edit Buku</h1>
      <hr>
    </div>

<!-- KONTEN UTAMA -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <form action="<?=base_url()?>index.php/home/updatedata" method="post" enctype="multipart/form-data">
          <label>Judul</label>
          <input type="text" name="name" class="form-control" value="<?=$data->name?>">
          <label>Pengarang</label>
          <input type="text" name="alamat" class="form-control" value="<?=$data->alamat?>">
          <label>Penerbit</label>
          <input type="text" name="penerbit" class="form-control" value="<?=$data->penerbit?>">
          <label>Foto</label><br>
          <input type="file" name="fotopost" class="form-control"><br><br>
          

          <!-- file lama -->
          <input type="hidden" name="filelama" value="<?=$data->foto?>">
          <!-- ID -->
          <input type="hidden" name="id" value="<?=$data->id?>">

          <input type="submit" name="submit" value="Submit" class="btn btn-info">
        </form>
        </div>
      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
