<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Success 2020 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h2 style="text-align: center;">Download File</h2>   
   
    <table class="table table-bordered">
      <tr>
        <th width="20%">Nama</th>
        <th width="20%">Link</th>
      </tr>
      
        <tr>
          <td>Inventori</td>
          <td><input type='button' class="btn btn-primary" value='Download'onClick='top.location="file/inventori.pdf"'></td>

        </tr>
        <tr>
            <td>Wartegg</td> 
            <td><input type='button' class="btn btn-primary" value='Download'onClick='top.location="file/wartegg.pdf"'></td>
            </tr>
    </table>
  </div>
</body>
</html>