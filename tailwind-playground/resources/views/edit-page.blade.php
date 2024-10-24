<!DOCTYPE html>
<html lang="en">
<head>
    @extends('template')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="background h-[100vh]">

    @include("components.mainHeader")


    <div class="popup" id="popup1">

        <div class="overlay"></div>
        
        <div class="content">
            <div class="close-btn" onclick="togglePopup()">&times;</div>
            <h1>yoww</h1>
            surely gagana to
        </div>
               
    </div>
<button onclick="togglePopup()"> show ???</button>     

</body>
</html>