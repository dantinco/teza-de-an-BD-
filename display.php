<?php
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    width: 1905px;
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
    width: 1240px;
    height: auto;
    text-align: center; 
    opacity: 95%;
    position:absolute;
    top:50%;
    left:50%;
    margin-top:-250px;
    margin-left:-590px;
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
<button class="btn btn-primary"><a href="user.php" class="text-light">
Adauga Produs</a>
</button>
<br><br><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Denumire</th>
      <th scope="col">Culoare</th>
      <th scope="col">Clasificare</th>
      <th scope="col">Pret</th>
      <th scope="col">Producator</th>
      <th scope="col">An</th>
      <th scope="col">Volum</th>
    </tr>
  </thead>
  <tbody>


  <?php

    $sql="Select * from `catalog`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id_catalog=$row['id_catalog'];
            $denumire_vin=$row['denumire_vin'];
            $id_culoare=$row['id_culoare'];
            $id_clasificare=$row['id_clasificare'];
            $pret=$row['pret'];
            $id_producator=$row['id_producator'];
            $an=$row['an'];
            $volum=$row['volum'];
            echo '<tr>
            <th scope="row">'.$id_catalog.'</th>
            <td>'.$denumire_vin.'</td>
            <td>'.$id_culoare.'</td>
            <td>'.$id_clasificare.'</td>
            <td>'.$pret.'</td>
            <td>'.$id_producator.'</td>
            <td>'.$an.'</td>
            <td>'.$volum.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php ?updateid='.$id_catalog.'" class="text-light">Modifica</a></button>
            <button class="btn btn-primary"><a href="delete.php ?deleteid='.$id_catalog.'" class="text-light">Sterge</a></button>
            </td>
          </tr>';
        }
    }
?>


</tbody>
</table>
</div>
    
</body>
</html>