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
    background-image: url("img/contact.jpg"); 
    background-position: center; 
    background-repeat: no-repeat;
    background-size: 100%;
    background-attachment: fixed;
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
    width: 450px;
    height: 450px;
    text-align: center; 
    opacity: 85%;
    position:absolute;
    top:50%;
    left:50%;
    margin-top:-180px;
    margin-left:-220px;
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

    <meta charset="UTF-8">
    <title>Feedback</title>
    
    
</head>
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
    <h1 class="titlu4">Trimite Feedback</h1>
    <form action="outputFEEDBACK.php" method="post">
    <br><label for="name">Numele/Username:</label>
    <br><input type="text" class="name" name="name" placeholder="Dan"></br>

    <br><label for="email" >Email:</label> 
    <br><input type="email" class="email" name="email" placeholder="dan2001@mail.com"></br>
    
    <br><label for="message">Mesajul</label>
    <br><textarea name="message" class="message" cols="45" rows="6" placeholder="text"></textarea></br>

    <br><button>Trimite</button></br>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('button').on('click', function() {
            var name_info = $('input.name').val();
            var email_info = $('input.email').val();
            var message_info = $('input.message').val();


            $.ajax({
            method: 'POST',
            url: 'localhost/teza/feedback.php',
            data: {'name': name_info, 'email': email_info, 'message': message_info }
            })
            
            .done(function() {
                $('input.name').val('');
                $('input.email').val('');
                $('input.message').val('');
            });
        })
    });
</script>
</body>
</html>