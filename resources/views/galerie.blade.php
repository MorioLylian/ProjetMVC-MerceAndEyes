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

        <div class="divpink">
            <div class="divcaseblanc">
                <p class="boldcenter">SWEAT</p><p>50€ unitaire</p><p>
                120€ par commande de 3</p>
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
                <p class="boldcenter">T-SHIRT</p><p>30€ unitaire</p>
                <p>80€ par commande de 3</p>
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
                <p class="boldcenter">JEAN</p><p>45€ unitaire</p><p>
                110€ par commande de 3</p>
            </div>
            <div class="divimages">
                <img src="images/jean1.png" alt="jean gris">
                <img src="images/jean2.png" alt="jean noir">
                <img src="images/jean3.png" alt="jean usée">
                <img src="images/jean4.png" alt="jean bleu">
                <img src="images/jean5.png" alt="jean clair">
            </div>
        </div>
        <?php echo View::make('parts.footer') ?>
    </body>
</html>
