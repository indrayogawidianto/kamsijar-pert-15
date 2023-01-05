
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
    <style type="text/css">
        
        a{
            text-decoration: none;
            font-size: 15px;
            color: green;
        }

        body{
            background-color:skyblue;
        }
        a:hover{
            color: white;
        }
        table{
            color: white;
        }
h1{
    text-align: center;
    font-style: italic;
    font-family: serif;
}

    </style>
  </head>
  <body>
    <h1>Welcome To Our Website <br>
        KELOMPOK Yakuza
    </h1>
    <hr>
    <a href="index.php">Home</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page1')); ?>">PAGE 1</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page2')); ?>">PAGE 2</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page3')); ?>">PAGE 3</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page4')); ?>">PAGE 4</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page5')); ?>">PAGE 5</a> 
    <hr>
    
    <?php 
    
    if (isset($_GET['page'])) :  
        $page= base64_decode(base64_decode(filter_var($_GET['page'],FILTER_SANITIZE_URL)));
        $a= include "halaman/".$page.".php";
        if ($a==false):
          header('location:index.php');
        endif;
        ?>
 <?php else: ?>
<table width="600px" border="2px" cellspacing="0" cellpadding="5px">
    <tr>
    <th>NAMA</th>
    <th>JABATAN</th>
    <th>PHOTO</th>
</tr>
<tr>
    <td>HERU PRATAMA H.M</td>
    <td>KETUA</td>
    <td><img src="img/e.jpeg" width="200px" height="200px"></td>
</tr>
<tr>
    <td>KURNIA MARGA HANDAYANI</td>
    <td>ANGGOTA</td>
    <td><img src="img/a.jpeg" width="200px" height="200px"></td>
</tr>
<tr>
    <td>INDRA YOGA WIDIANTO</td>
    <td>ANGGOTA</td>
    <td><img src="img/b.jpeg" width="200px" height="200px"></td>
</tr>
<tr>
    <td>DEO IRAWAN</td>
    <td>ANGGOTA</td>
    <td><img src="img/c.jpeg" width="200px" height="200px"></td>
</tr>
<tr>
    <td>IIN NURAZIZAH</td>
    <td>ANGGOTA</td>
    <td><img src="img/d.jpeg" width="200px" height="200px"></td>
</tr>
</table>
      
<?php endif; ?>
    
  </body>
</html>

<!--php://filter/convert.base64-encode/resource= ->
