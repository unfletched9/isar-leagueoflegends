<?php 
   $naziv = isset($naziv)? $naziv :  "Nema podataka";
   $runa = isset($runa)? $runa :  "Nema podataka";
   $tip = isset($tip)? $tip :  "Nema podataka";
   $porijeklo= isset($porijeklo)? $porijeklo :  "Nema podataka";
   $opis = isset($opis)? $opis :  "Nema podataka";
   $slika = isset($slika)? $slika :  "Nema podataka";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/šampioni.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<div class="pozadina">
  <header>
    <h1 class="logo">Legends
    </h1>
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
        <ul>
            <li><a href="pocetna.html">Home</a></li>
            <li><a href="pocetna.html">About</a></li>
            <li><a href="pocetna.html">More</a></li>
            <li><a href="pocetna.html">Contacts</a></li>
            <li><a href="unosliga legendi.php">Add Legend</a></li>
        </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
    </label>
  </header>

      <div class="main">
        <div class="txt">
            <h1 class="text-center" style="font-weight:bold; padding-top: 10%;">DODAJ ŠAMPIONA</h1>
        </div>
        <div class="forma">
        <div class="row justify-content-center">
        <div class="col-3 form-group">
        <form id="form-bicikl" class="w-100" enctype="multipart/form-data" method="POST" action="liga.php" target="_blank">
        <input type="text" name="naziv" class="form-control" id="naziv" placeholder="Naziv Legende" required>
    </div>
    <div class="col-3 form-group">
        <input type="text" name="runa" class="form-control" id="runa" placeholder="Runa Legende" required>
    </div>
</div>
<div class="row justify-content-center" style="padding-top: 2%;">
    <div class="col-3 form-group">
        <input type="text" name="tip" class="form-control" id="tip" placeholder="Tip Legende" required>
    </div>
    <div class="col-3 form-group">
        <input type="text" name="porijeklo" class="form-control" id="generacija" placeholder="Porijeklo Legende" required>
    </div>
      </div>
          <div class="row justify-content-center" style="padding-top: 2%;">
            <div class="col-6 form-group">
                <textarea class="form-control" name="opis" rows="5" placeholder="Opis Legende" required></textarea>
            </div>
          </div>
          <div class="row justify-content-center" style="padding-top: 2%;">
            <div class="col-6 form-group">
            <label for="slika" class="form-label">Učitaj fotografiju legende!</label>
                <input class="form-control" type="file" id="slika" name="slika">
            </div>
          </div>
          <div class="row justify-content-center"  style="margin-top: 2%;" >
            <div class="col-1 form-group">
                <input type="submit" value="Dodaj Legendu" name="dodajLegendu" class="btn btn-dark" name="submit">
          </div>
          </div>
          
    </div>

      </div>

      <div class="container">

<div class="row text-center">
    <h1 style="font-weight:bold;padding-top: 10%; color: black ;">LISTA LEGENDE KOJE STE UNIJELI</h1>
</div>
<div class="row">
    <div class="col-6 offset-md-3">
        <ul class="list-group">
          <?php 
          $datoteka = fopen("legende.txt", "r");
          if($datoteka){
            fgets($datoteka);
            while(!feof($datoteka)){
              $naziv = fgets($datoteka);
              $runa = fgets($datoteka);
              $tip = fgets($datoteka);
              $porijeklo = fgets($datoteka);
              $slika = fgets ($datoteka);
            

              echo "
            <li class='list-group-item d-flex justify-content-between align-items-center'>
            <div class='d-flex'>
            <div class='mr-3'>
            <img src='$slika' alt='$naziv' style='height: 100px;'  class='img-fluid'>
            </div>
            <div  style='margin-left: 5%;'>
            <div class='fw-bold'>
            $naziv 
            $runa
            </div>
            Naziv: $naziv <br>
            Runa: $runa <br>
            Porijeklo: $porijeklo<br>
            </div>
            </div>
            <span class='badge bg-dark rounded-pill' style='font-size: 20px;'>$naziv</span>
            </li>
            ";
            }
          }
          ?>
          </ul>
    </div>
</div>


<?php            fclose($datoteka); ?>
</div>



<footer id="contacts">
  <section class="alija">
    <div class="about-us">
      <h3>About</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Esse sint illo ex, labore, doloremque quia nisi sed nulla eum numquam est </p>
    </div>
    <div class="usluge">
      <h3>Rune</h3>
      <ul>
        <li><a href="#">Runa 1</a></li>
        <li><a href="#">Runa 2</a></li>
        <li><a href="#">Runa 3</a></li>
        <li><a href="#">Runa 4</a></li>
     
      </ul>
    </div>
    <div class="contact">
      <h3>Contacts</h3>
      <ul>
        <li>
        Email:
       <a href="#">
        isarsabc@gmail.com
        </a></li>
        <li>
        Mobitel
          <a href="#">
        061 967 886
          </a></li>

        <li>
        Adresa:
          <a href="#">
        Riot games</a></li>
        
      </ul>

    </div>

  </section>
  <section class="copyright">Copyright &copy; Riot games 2023</section>
</footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>