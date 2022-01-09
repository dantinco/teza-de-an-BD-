<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $id_catalog = $_POST['id_catalog'];
    $denumire_vin = $_POST['denumire_vin'];
    $id_culoare = $_POST['id_culoare'];
    $id_clasificare = $_POST['id_clasificare'];
    $pret = $_POST['pret'];
    $id_producator = $_POST['id_producator'];
    $an = $_POST['an'];
    $volum = $_POST['volum'];

    $sql="INSERT into `catalog` (`id_catalog`, `denumire_vin`, `id_culoare`, `id_clasificare`, `pret`, `id_producator`, `an`, `volum`)
    VALUES ('$id_catalog', '$denumire_vin', '$id_culoare', '$id_clasificare', '$pret', '$id_producator', '$an', '$volum')";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
  </head>
  <style>
  body {
    background-image: url("img/index.jpg"); 
    background-position: center down; 
    background-repeat: no-repeat;
    background-size: 100%;
    background-attachment: fixed;
   }

.titlu {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(255, 255, 255);
    font-size: 60px;
    font-weight: 550;
    border: 0px;
    margin-top: 100px;
    margin-left: 200px;
    margin-right: 800px;
}
.square {
    background-color: rgb(255, 255, 255);
    height: 95px;
    width: 1920px;
    border: 5px solid rgb(255, 255, 255);
    margin-top: -10px;
    opacity: 85%;
}

a {
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(26, 26, 26);
    font-size: 20px;
    text-decoration: none;
    padding: 5px;
    text-align: justify;
}

.comment {
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(255, 255, 255);
    font-size: 25px;
    text-decoration: none;
    margin-top: 40px;
    margin-left: 200px;
    margin-right: 800px;
    padding: 5px;
    text-align: justify;
}


.rand {
    list-style: outside;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(15, 15, 15);
    display: flex;
    width: 100%;
    height: 80hv;
    margin: auto;
    max-width: 1580px;
    justify-content: space-between;
    text-align: center;
    
}

.menu {
    padding: 1rem 2rem 1.15rem;
    text-transform: uppercase;
    cursor: pointer;
    color: #131313;
    min-width: 80px;
    margin: auto;
  }

 * {
    margin: 0;
    padding: 0;
    list-style-type: none;
  }



.titlu3 {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(255, 255, 255);
    font-size: 70px;
    font-weight: 550;
    border: 0px;
    text-align: center;
    margin-top: 150px;
    
}

.zona {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(255, 255, 255);
    font-size: 40px;
    font-weight: 550;
    border: 0px;
    margin-top: 70px;
    text-align: center;
}

.vinarie {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    font-size: 30px;
    color: rgb(255, 255, 255);
    text-align: center;
    margin-top: 20px;
}

.container {
    background-color: rgb(255, 255, 255);        
    box-shadow: 0 2px 10px black;
    width: 690px;
    height: auto;
    text-align: center; 
    opacity: 95%;
    position:absolute;
    top:50%;
    left:50%;
    margin-top:-250px;
    margin-left:-360px;
    padding: 14px;
}

.email {  
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(15, 15, 15);
    font-size: 16px;
}

.name {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(15, 15, 15);
    font-size: 16px;
}

.message {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(15, 15, 15);
    font-size: 16px;
}

.titlu4 {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(15, 15, 15);
    font-size: 40px;
}
</style>

  <body>
  <div class="square">
        <ul class="rand">
        <li class="menu"> <p><a href="index.php">Pagina Principală</a></p></li>
        <li class="menu"> <p><a href="Localitate.php">Lista Vinăriilor</a></p></li>
        <li class="menu"> <p><a href="Top.php">Cumpara Vin</a></p></li>
        <li class="menu"> <p><a href="Info.php">Despre Vinul Moldovenesc</a></p></li>
        <li class="menu"> <p><a href="Feedback.php">Trimite Feedback</a></p></li>
        <li class="menu"> <p><a href="Contact.php">Contacte</a></p></li>
        <li class="menu"> <p><a href="display.php">CRUD</a></p></li>
        </ul>
</div>

    <div class="container">
    <form method="post">
  <div class="form-group">
  <br><label>Denumirea vinului</label>
    <input type="text" class="form-control" placeholder="ex. Equinox Luchineasa" name="denumire_vin" autocomplete="off">
  </div>
  <div class="form-group">
  <br><label>Culoarea vinului</label>
    <input type="text" class="form-control" placeholder="ex. 1" name="id_culoare" autocomplete="off">
  </div>
  <div class="form-group">
  <br><label>Clasificare</label>
    <input type="text" class="form-control" placeholder="ex. 3" name="id_clasificare" autocomplete="off">
  </div>
  <div class="form-group">
  <br><label>Pret</label>
    <input type="text" class="form-control" placeholder="ex. 999" name="pret" autocomplete="off">
  </div>
  <div class="form-group">
  <br><label>Producator</label>
    <input type="text" class="form-control" placeholder="ex. 5" name="id_producator" autocomplete="off">
  </div>  
  <div class="form-group">
  <br><label>An</label>
    <input type="text" class="form-control" placeholder="ex. 2019" name="an" autocomplete="off">
  </div>
  <div class="form-group">
  <br><label>Volum</label>
    <input type="text" class="form-control" placeholder="ex. 0.5" name="volum" autocomplete="off">
  </div>

  <br><button type="Confirma" class="btn btn-primary" name="submit">Confirma</button>
</form>
    </div>

  </body>
</html>