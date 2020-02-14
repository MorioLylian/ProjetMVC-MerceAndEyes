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

            .al_vertical {
                display: inline-block;
                height: auto;
                padding: auto; 
                box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                margin-left: 5.2%; 
                box-sizing: border-box;
                margin: auto;
                min-width: 100px;
                
                
            }
            
            .twitter-timeline {
                box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
                -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            }

            .reseaux_sociaux {
                display: flex;
                flex-direction: horizontal;
               
            }

            @media screen and (max-width: 1500px) {
            .reseaux_sociaux {
                display: flex;
                flex-direction: column;
               
            }
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
                <a class="active" >Home</a>
                <a href="galerieANG">Gallery</a>
                <a href="contactANG">Contact</a>
            </div>
        </header>

        <div id="slider">
        <p class="boldcenter">Most liked merchandise</p>
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
        <p class="boldcenter">OUR NEWS!</p>
            <div class="reseaux_sociaux">
                <div class="al_vertical"> 
                    <iframe scrolling="yes" src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FMerchandEyes-103323357923161&width=500&height=600&stream=true&header=true" style="border:none; overflow:hidden; width:500px; height:600px; float:left;"></iframe>                   
                </div>
                <div class="al_vertical">
                    <a class="twitter-timeline"
                    href="https://twitter.com/EyesMerchand?ref_src=twsrc%5Etfw"
                    data-width="500"
                    data-height="600">
                    Tweets by @EyesMerchand
                    </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="al_vertical">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-cac14897-ada7-4bc0-80a7-890889bf1575"></div>
                </div>
            </div>  
        </div>





        <div class="equipe">
        <p class="boldcenter">OUR TEAM!</p>
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
                    <p>Our social networks</p>
                    <div class="flex">
                    <a ><img class="resaux" src="images/logo_TWITTER.png" alt="Logo de twitter"/></a>
                    <a ><img class="resaux" src="images/logo_FB.png" alt="Logo de facebook"/></a>
                    <a ><img class="resaux" src="images/logo_INSTA.png" alt="Logo d'instagram"/></a>
                    </div>
                </div>
                    
                <div>
                    <p>Go to <a class="violet"> Home </a><a class="violet" href="galerieANG"> Gallery </a><a class="violet" href="contactANG"> Contact </a></p>
                </div>
                    
                <div class="flex">
                    <p>Display French site</p>
                    <a href="/"><img class="resaux" src="images/logo_FR.png" alt="Logo France"/></a>
                </div>
            </div>
        </footer>
    </body>
</html>
