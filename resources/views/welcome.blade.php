<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MerchAndEyes</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 

        <style>
            header{ display :block;
                    border-color : #8d3c93;
                    width:100%;
                    height:20%;
                    max-height:20%;
                    min-height:20%;
                    background-color: white;
                    box-shadow: 10px 5px 5px black;
                    border-style: solid;
                    border-width: 2px;
                    margin:0px !important;}

            body { margin:0px !important;}

            .logo {color:red;}
            
        </style>
    </head>
    <body>
        <header>
            <img class="logo" src="../images/jean3.jpg" alt="Logo de notre site"/>
        </header>
        
        <h1>l'utilisation de Laravel n'est pas compliqué</h1>
        <h1>c'est de l'html et du css de BASE</h1>
    </body>
</html>
