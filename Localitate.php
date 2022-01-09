<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css" type="text/css"/>
</head>

<style>

body {
    background-image: url("img/locatie.jpg"); 
    background-position: center; 
    background-repeat: no-repeat;
    background-size: 100%;
    background-attachment: fixed;
   }

.titlu2 {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    color: rgb(255, 255, 255);
    font-size: 70px;
    font-weight: 550;
    border: 0px;
    text-align: center;
    
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

    <h1 class="titlu2">Vinăriile Moldovei</h1>
    
    <h2 class="zona">Nordul Moldovei</h2>
    
    <ul class="vinarie">
    <li class="vinarie">Barza Albă</li>
    </ul>   

    <h2 class="zona">Centrul Moldovei</h2>
    <ul class="vinarie">
    <li class="vinarie">Vinăria Mileștii Mici</li>
    <li class="vinarie">Vinăria Mihai Sava</li>
    <li class="vinarie">Vinăria Tronciu</li>
    <li class="vinarie">Crama Tudor</li>
    <li class="vinarie">Vinăria Poiana</li>
    <li class="vinarie">Chateau Cojusna</li>
    <li class="vinarie">Vinăria Cricova</li>
    <li class="vinarie">Pivnițele Brănești</li>
    <li class="vinarie">Chateau Vartely</li>
    <li class="vinarie">Crama Mircești</li>
    </ul>  

    <h2 class="zona">Sudul Moldovei</h2>
    <ul class="vinarie">
    <li class="vinarie">Vinăria Et Cetera</li>
    <li class="vinarie">Vinăria din Vale</li>
    <li class="vinarie">Novak Winery</li>
    <li class="vinarie">Vinuri de Comrat</li>
    <li class="vinarie">Vinia Traian</li>
    <li class="vinarie">Kara Gani</li>
    </ul>

</body>
</html>