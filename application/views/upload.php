<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h1>Crud Upload Image dan Delete</h1>

      <?= $error ?>
      <?= form_open_multipart('C_upload_gambar/do_upload') ?>

      <div class="form-group">
        <label for="title">Keterangan</label>
        <input type="text" class="form-control" id="" name="keterangan" placeholder="">
      </div>

      <div class="form-group">
        <label for="userfile">Image 1:</label>
        <input type="file" name="nama_file1" class="form-control" id="" placeholder="">
      </div>

      <div class="form-group">
        <label for="userfile">Image 2:</label>
        <input type="file" name="nama_file2" class="form-control" id="" placeholder="">
      </div>

      <input type="submit" name="" value="upload" class="btn btn-primary">

      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
