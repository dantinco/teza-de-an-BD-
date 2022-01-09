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
     
    .container{
        margin: 6%;
  }    
  
    .grid-container {
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        grid-gap: 30px;
        padding: 5px;
      }
      
    .border{
        border-style: solid;
        border-width: 0px;
        border-radius: 10px;
        border-color: white;
        background-color: rgb(212, 216, 218);
        width: 280px;
        height: 500px;
        opacity: 95%;
        
    }

    .button {
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: rgb(255, 255, 255);
        font-size: 15px;
        text-decoration: none;
        padding: 5px;
        background-color: black;
        border: none;
        display: inline-block;
        text-align: center;
        cursor: pointer;
        width: 270px;
        height: 40px;
        justify-content: center;  
        border-radius: 10px;      
      }
   
    .amount_n{
        float: right;
        margin-top: 1px;
        padding: 2px;
    }
    

    .text{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(0, 0, 0);
    font-size: 15px;
    text-decoration: none;
    padding: 5px;
    text-align: justify;
    }

    .img {
    margin-top:50px;
    margin-left: 50px;
    width: 60%;
    height: 60%;
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
        <div class="grid-container">
            <div class="border">
                <img src="img/AGRICI WINE CHARDONNAY.png" width="110" height="380px" class="img"><br><br><br>
                <span class="text">AGRICI WINE CHARDONNAY:</span>
                <span class="text">110 MDL</span><div class="br_l"><br></div>
                <a href="Top.php"><button class="button"> Cumpara</button></a>
            </div>   
            
            <div class="border">
                <img src="img/gogu-spumant.png" width="110" height="380px" class="img"><br><br><br>
                <span class="text">Feteasca regala:</span>
                <span class="text">310 MDL</span><div><br></div>
                <a href="Top.php"><button class="button"> Cumpara</button></a>
            </div>           

            <div class="border">
                <img src="img/gogu-sauvignon-blanc.png" width="110" height="380px" class="img"><br><br><br>
                <span class="text">SAUVIGNON BLANC:</span>
                <span class="text">140 MDL</span><div><br></div>
                <a href="Top.php"><button class="button"> Cumpara</button></a>
            </div>           
            
            <div class="border">
                <img src="img/equino_sintagma.png" width="110" height="380px" class="img"><br><br><br>
                <span class="text">EQUINOX SINTAGMA:</span>
                <span class="text">550 MDL</span><div><br></div>
                <a href="Top.php"><button class="button"> Cumpara</button></a>
            </div>           

            <div class="border">
                <img src="img/FETEASCA ALBA.png" width="110" height="380px" class="img"><br><br><br>
                <span class="text">FETEASCA ALBA:</span>
                <span class="text">550 MDL</span><div><br></div>
                <a href="Top.php"><button class="button"> Cumpara</button></a>
            </div>   
            
            <div class="border">
                <img src="img/CRAMA MIRCEȘTI - RIESLING.png" width="110" height="380px" class="img"><br><br><br>
                <span class="text">RIESLING:</span>
                <span class="text">300 MDL</span><div><br></div>
                <a href="Top.php"><button class="button"> Cumpara</button></a>
            </div>           

            <div class="border">
                <img src="img/KAZAYAK MALBEC.png" width="110" height="380px" class="img"><br><br><br>
                <span class="text">KAZAYAK MALBEC</span>
                <span class="text">220 MDL</span><div><br></div>
                <a href="Top.php"><button class="button"> Cumpara</button></a>
            </div>           
            
            <div class="border">
                <img src="img/PINOT NOIR.png" width="110" height="380px" class="img"><br><br><br>
                <span class="text">PINOT NOIR:</span>
                <span class="text">209 MDL</span><div><br></div>
                <a href="Top.php"><button class="button"> Cumpara</button></a>
            </div>     
        </div>
    </div>
    
</body>
</html>


