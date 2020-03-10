<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MerchAndEyes</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 

        <?php echo View::make('parts.style') ?>

    </head>
     
    <body>

         <?php echo View::make('parts.header') ?>

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
        <?php echo View::make('parts.footer') ?>
    </body>
</html>
