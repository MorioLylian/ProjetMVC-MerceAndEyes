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
                text-decoration:none;
            }

            footer a:hover{
                text-decoration:underline;
            }


            @media screen and (max-width: 1100px) {
                .footer p{
                    font-size: 13px;
                }
                .resaux{
                width:25px;
                margin-left:1%;
            }
            }


            @media screen and (max-width: 600px) {
                .footer p{
                    font-size: 10px;
                }
                .resaux{
                width:17px;
                margin-left:1%;
            }
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
            /* |\/\/| création du css que j'utilise |\/\/| */
            .divpink{
                background-color: #E7D5E8;
                border-top: solid 3px #8d3c93;
                border-bottom: solid 3px #8d3c93;
                padding-left: 0.5%;
                padding-top: 2%;
                padding-bottom: 2%;
                display:flex;
            }
            .divblank{
                padding-left: 0.5%;
                padding-top: 2%;
                padding-bottom: 2%;
                display:flex;
            }
            .divcaserose{
                width: 25%;
                background-color: #E7D5E8;
                border: solid 4px #8d3c93;
                border-radius: 8px;
                margin-top: 2.5%;
                padding: 5px;
                margin-bottom:2%;
            }
            .divcaseblanc{
                width: 25%;
                background-color: white;
                border: solid 4px #8d3c93;
                border-radius: 8px;
                margin-top: 2.5%;
                padding: 5px;
                margin-bottom:2%;
                transition:0.5s;
            }
        .divimages{
            margin-left:10%;
        }
        .divimages img{
            margin-top: auto;
            margin-left: 1.5%;
            margin-right: 1.5%;
            width:15%;
            transition:0.5s;
        }
        .divimages img:hover{
            width: 20%;
        }

            /* |/\/\| Fin du code css que j'ai ajouté |/\/\| */

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
                <a href="welcomeANG" >Home</a>
                <a class="active">Gallery</a>
                <a href="contactANG">Contact</a>
            </div>
        </header>

        <div class="divpink">
            <div class="divcaseblanc">
                <p class="boldcenter">SWEAT</p><p>50€ per unit</p><p>
                120€ per order of 3</p>
            </div>
            <div class="divimages">
                <img src="images/sweatrouge.png" alt="sweat rouge">
                <img src="images/sweatblanc.png" alt="sweat blanc">
                <img src="images/sweatnoir.png" alt="sweat noir">
                <img src="images/sweatviolet.png" alt="sweat violet">
                <img src="images/sweatbleu.png" alt="sweat bleu">
            </div>
        </div>
        <div class=divblank>
            <div class="divcaserose">
                <p class="boldcenter">T-SHIRT</p><p>30€ per unit</p>
                <p>80€ per order of 3</p>
            </div>
            <div class="divimages">
                <img src="images/tshirtblanc.png" alt="t-shirt blanc">
                <img src="images/tshirtbleu.png" alt="t-shirt bleu">
                <img src="images/tshirtnoir.png" alt="t-shirt noir">
                <img src="images/tshirtrose.png" alt="t-shirt rose">
                <img src="images/tshirtrouge.png" alt="t-shirt rouge">
            </div>
        </div>
        <div class="divpink">
            <div class="divcaseblanc">
                <p class="boldcenter">JEAN</p><p>45€ per unit</p><p>
                110€ per order of 3</p>
            </div>
            <div class="divimages">
                <img src="images/jean1.png" alt="jean gris">
                <img src="images/jean2.png" alt="jean noir">
                <img src="images/jean3.png" alt="jean usée">
                <img src="images/jean4.png" alt="jean bleu">
                <img src="images/jean5.png" alt="jean clair">
            </div>
        </div>
















        <footer>
            <div class="footer">
                <div class="flex">
                    <p>Our Networks</p>
                    <div class="flex">
                    <a ><img class="resaux" src="images/logo_TWITTER.png" alt="Logo de twitter"/></a>
                    <a ><img class="resaux" src="images/logo_FB.png" alt="Logo de facebook"/></a>
                    <a ><img class="resaux" src="images/logo_INSTA.png" alt="Logo d'instagram"/></a>
                    </div>
                </div>
                    
                <div>
                    <p>Go to <a class="violet" href="welcomeANG"> Home </a><a class="violet"> Gallery </a><a class="violet" href="contactANG"> Contact </a></p>
                </div>
                    
                <div class="flex">
                    <p>Display French site</p>
                    <a href="galerie"><img class="resaux" src="images/logo_FR.png" alt="Logo France"/></a>
                </div>
            </div>
        </footer>
    </body>
</html>
