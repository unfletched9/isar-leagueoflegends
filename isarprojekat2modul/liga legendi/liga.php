<?php
if(isset($_POST["dodajLegendu"])){
    $naziv=$_POST["naziv"];
    $runa=$_POST["runa"];
    $tip=$_POST["tip"];
    $porijeklo=$_POST["porijeklo"];
    
    $id = uniqid();
    $check = getimagesize($_FILES["slika"]["tmp_name"]);
    if($check !== 0){
    move_uploaded_file($_FILES["slika"]["tmp_name"], "img/slika-$id.jpg");
  }
     else {
    echo "Nažalost, nema slike legende!";
    }

    $slika = "img/slika-$id.jpg";
}
 $datoteka=fopen("legende.txt","a");
 fwrite($datoteka,"\n$naziv\n$runa\n$tip\n$porijeklo\n$slika");
 fclose($datoteka);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="artiklicss.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>


      
    <div class="container">

    <div class="row text-center" style='padding-top:3%;'>
                <h3 style='font-weight:bold;'>Legenda <?php echo $naziv?> </span> je uspješno dodana</h3>
            </div>

            <div class="row" style='padding-top: 1%;'>
               <div class="col-md-4 offset-md-4">
               <div class="card text-bg-warning mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src=<?php echo $slika?> class="img-fluid rounded-start" alt="<?php echo $naziv;?>" style='height:250px;'>
                    </div>
                    <div class="col-md-8">
                    <div class="card-header text-black" style='font-weight:bold;'><?php echo $naziv?></div>
                    <div class="card-body text-black py-1">
                    <p class="card-text d-flex justify-content-between" style='font-size:15px;'>Naziv: <span><?php echo $naziv?></span></p>
                    <p class="card-text d-flex justify-content-between" style='font-size:15px;'>Runa: <span><?php echo $runa?></span></p>
                    <p class="card-text d-flex justify-content-between" style='font-size:15px;'>Tip: <span><?php echo $tip?></span></p>
                    <p class="card-text d-flex justify-content-between" style='font-size:15px;'>Porijeklo: <span><?php echo $porijeklo?></span></p>
                    </div>
                    </div>
                </div>
                </div>
               </div>
            </div>

</div>



</body>
</html>