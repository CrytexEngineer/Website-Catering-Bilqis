<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/e-pos-catering-bilqis/assets/css/page.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Edit Member</title>
  </head>

  <nav class="navbar-expand-sm bg-light navbar-light">
      <ul class="navbar-nav">
          <li class="nav-item ">
              <img src="http://localhost/e-pos-catering-bilqis/assets/image/logo.png" alt="" height="60px"></li>
          <li>  </li>
      </ul>
  </nav>

  <nav class="navbar sticky-top  navbar-expand-sm bg-light navbar-light">
      <ul class="navbar-nav  ">
          <li class="nav-item  " ><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_belanja">Data Belanja</a>  </li>
          <li class="nav-item ">  <a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_karyawan">Data Karyawan</a></li>
          <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_kas">Data Kas</a></li>
          <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_member">Data Member</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_menu_makanan">Data Menu Makanan</a></li>
          <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_pemesanan">Data Pemesanan</a></li>

      </ul>
  </nav>

  <div class="image_header_container">
  <img src ="http://localhost/e-pos-catering-bilqis/assets/image/page_header.jpg" alt="">
  </div>
  <br>


  <body>
    <table class="table table-bordered table-condensed table-striped  ">
   <thead>
     <td>Kode Menu Makanan</td>
     <td>Nama Menu</td>
     <td>Harga</td>
   </thead>
   <tbody>
   <?php foreach ($menu_makanan as $menu_makanan): ?>
     <tr>
       <td><?php echo $menu_makanan->Kd_MenuMakan; ?></td>
       <td><?php echo $menu_makanan->Nama_Menu; ?></td>
       <td><?php echo $menu_makanan->Harga; ?></td>

     </tr>

   </tbody>

   </table>

   <form class="form-group m-5 " action="<?php echo site_url() . '/main/action_edit_menu_makanan/'.$menu_makanan->Kd_MenuMakan; ?>" method="post"  >
       <label >Kode Menu Makanan</label><br>
       <input type="text" name="kode_menu_makanan" value="<?php echo  $menu_makanan->Kd_MenuMakan ?>"class="form-control" ><br>
       <label >Nama Menu</label><br>
       <input type="text" name="nama_menu_makanan"value="<?php echo $menu_makanan->Nama_Menu ?>"class="form-control"><br>
       <label >Harga</label><br>
       <input type="text" name="harga"value="<?php echo $menu_makanan->Harga ?>"class="form-control"><br>
       <button  name="button_update_menu_makanan"   class="btn btn-success">Update</button>
   </form>
      <?php endforeach; ?>

      <div class="wrapper">
          <br><br>
          <img src="instagramlogo.png" alt="" height="30px">
          <img src="facebooklogo.png" alt="" height="30px">
          <img src="twitterlogo.jpg" alt="" height="30px">
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
