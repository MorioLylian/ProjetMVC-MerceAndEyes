<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">

    <style>

    .bold{
      color:#8d3c93;
      font-weight: bold;
    }
    </style>
  </head>
  <body>
    <h2 class="bold">QUELQU'UN VOUS A ENVOYÉ UN MESSAGE À PARTIR DU SITE</h2>
    <p class="bold">Voici les informations</p>
    <ul>
      <li><span class="bold">Nom de l'expéditeur:</span> {{ $contact['name'] }}</li>
      <li><span class="bold">Email de l'expéditeur:</span> {{ $contact['email'] }}</li>
      <li><span class="bold">Le message de l'expéditeur:</span></br> {{ $contact['message'] }}</li>
    </ul>
  </body>
</html>