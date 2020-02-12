<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MerchAndEyes</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 

        <style>
            

            body { margin:0px !important;}

            .header {
                overflow: hidden;
                padding: 20px 10px;
                border-color : #8d3c93;
                background-color: white;
                box-shadow: 2px 2px 6px black;
                border-style: solid;
                border-width: 2px;
                margin:0px !important;
                }

            .header a {
                float: left;
                color: #8d3c93;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
            }

            .header a.logo {
                font-size: 25px;
                font-weight: bold;
            }

            .oeil {
                width:10%;
                min-width:30px;
            }

            .logo :hover{
                cursor:pointer;
            }

            .header-right a:hover {
                text-decoration:underline;
                cursor:pointer;
            }

            .header a.active {
                background-color: #8d3c93;
                color: white;
            }

            .header-right {
                float: right;
            }

            @media screen and (max-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }
                .header-right {
                    float: none;
                }
            }




            footer{
                overflow: hidden;
                padding: 20px 10px;
                border-color : #8d3c93;
                background-color: white;
                box-shadow: 2px -2px 3px black;
                border-style: solid;
                border-width: 2px;
                margin:0px !important;
                
            }

            footer div{
                width:50%;
                text-align:center; 
            }

            .footer{
                display:flex;
                width:70%;
                margin-left:15%;
            }

            .violet{
                color:#8d3c93;
                cursor:pointer;
            }

            footer a:hover{
                text-decoration:underline;
            }





            div#slider figure {
                position: relative;
                width: 500%;
                margin: 0;
                padding: 0;
                font-size: 0;
                left: 0;
                text-align: left;
                animation: 20s slidy infinite;
                background :#E7D5E8;
            }
            div#slider figure img {
                width: 5%;
                height: auto;
                float: left;
                background :#E7D5E8;
            }

            div#slider {
                width: 100%;
                overflow: hidden;
                background :#E7D5E8;
                
            }

            @keyframes slidy {
            0% { left: 0%; }
            20% { left: -25%; }
            40% { left: -50%; }
            60% { left: -75%; }
            80% { left: -100%; }
            100% { left: -125%; }
            }


            .boldcenter{
                color:#8d3c93;
                text-align:center;
                font-size: 25px;
                font-weight: bold;
            }


            .equipe{
                background :#E7D5E8;
            }


            .flex{
                display:flex;
            }

            .flex a:hover{
                cursor:pointer;
            }

            .resaux{
                max-width:50px;
                margin-left:1%;
            }

            .equipeflex{
                display:flex;
            }

            .equipeflex img{
                width:10%;
                margin-left:12%;
            }
            .equipeflex p{
                width:10%;
                margin-left:12%;
            }


            @media screen and (max-width: 700px) {
                .equipeflex p{
                    font-size: 14px;
            }
            }

            @media screen and (max-width: 400px) {
                .equipeflex p{
                    font-size: 9px;
            }
            }

     


        </style>
    </head>
    <body>
        <header class="header">
            
            <a class="logo"><img class="oeil" src="images/oeil.png" alt="Logo de notre site"/> MerchAndEyes </a>
            <div class="header-right">
                <a class="active" >Accueil</a>
                <a href="gallerie">Gallerie</a>
                <a href="contact">Contact</a>
            </div>
        </header>

        <div id="slider">
        <p class="boldcenter">NOS PRODUITS LES PLUS AIMÉS!</p>
            <figure>
                <img src="images/sweatblanc.png" >
                <img src="images/tshirtblanc.png" >
                <img src="images/tshirtrose.png" >
                <img src="images/sweatrouge.png" >
                <img src="images/sweatviolet.png" >
                <img src="images/sweatblanc.png" >
                <img src="images/tshirtblanc.png" >
                <img src="images/tshirtrose.png" >
                <img src="images/sweatrouge.png" >
                <img src="images/sweatviolet.png" >
                
            </figure>
        </div>









        <div class="actualite">
        <p class="boldcenter">NOS ACTUALITÉES!</p>
            
        </div>










        <div class="equipe">
        <p class="boldcenter">NOTRE ÉQUIPE!</p>
            <div class="equipeflex">
            <img src="images/IMG_Lucas.png" >
            <img src="images/IMG_Lylian.png" >
            <img src="images/IMG_Denwal.png" >
            <img src="images/IMG_Thibault.png" >
            </div>
            <div class="equipeflex">
                <p class="boldcenter">Lucas MAILLARD</p>
                <p class="boldcenter">Lylian MORIO</p>
                <p class="boldcenter">Denwal GUILLO</p>
                <p class="boldcenter">Thibault LEDANOIS</p>
            </div>
        </div>











        <footer>
            <div class="footer">
                <div class="flex">
                    <p>Nos Résaux</p>
                    <div class="flex">
                    <a ><img class="resaux" src="images/logo_TWITTER.png" alt="Logo de twitter"/></a>
                    <a ><img class="resaux" src="images/logo_FB.png" alt="Logo de facebook"/></a>
                    <a ><img class="resaux" src="images/logo_INSTA.png" alt="Logo d'instagram"/></a>
                    </div>
                </div>
                    
                <div>
                    <p>Naviguer vers <a class="violet"> Accueil </a><a class="violet" href="gallerie"> Gallerie </a><a class="violet" href="contact"> Contact </a></p>
                </div>
                    
                <div class="flex">
                    <p>Passer en Anglais</p>
                    <a ><img class="resaux" src="images/logo_ANG.png" alt="Logo Angleterre"/></a>
                </div>
            </div>
        </footer>
    </body>
</html>
