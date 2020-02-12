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
                width:33%;
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


        </style>
    </head>
    <body>
        <header class="header">
            
            <a class="logo"><img class="oeil" src="images/oeil.png" alt="Logo de notre site"/> MerchAndEyes </a>
            <div class="header-right">
                <a class="active" >Accueil</a>
                <a >Gallerie</a>
                <a >Contact</a>
            </div>
        </header>
        





        



        <footer>
            <div class="footer">
                <div>
                    <p>Nos Résaux</p>
                </div>
                    
                <div>
                    <p>Naviguer vers <a class="violet"> Accueil </a><a class="violet"> Gallerie </a><a class="violet"> Contact </a></p>
                </div>
                    
                <div>
                    <p>Passer en Anglais</p>
                </div>
            </div>
        </footer>
    </body>
</html>
