<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courier+Prime:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <title>Carte de voeux</title>
</head>
<body>

<div id="div-boule">
    <div class="img-boule">
        <img id="boule" src="assets/img/boule.svg" alt="boules">
    </div>
    <div class="img-click">
        <img id="cliquez" src="assets/img/cliquez.svg" alt="cliquez-ici">
    </div>
</div>
<!-- XXXXXXXXXXXXXXXXXX FIN BOULE FORM XXXXXXXXXXXXXXXXXX -->

<canvas id="canvas"></canvas>

<div class="wrap">
    <div class="santa">
      <div class="santa__head">
        <div class="santa__hat"></div>
        <div class="santa__face">
          <div class="santa__eye santa__eye-1">
            <div class="santa__pupil santa__pupil-1"></div>
          </div>
          <div class="santa__eye santa__eye-2">
            <div class="santa__pupil santa__pupil-2"></div>
          </div>
          <div class="santa__nose"></div>
          <div class="santa__mouth"></div>
          <div class="santa__beard"></div>
        </div>
      </div>
      <div class="santa__body">
        <div class="santa__hand santa__hand-1"></div>
        <div class="santa__hand santa__hand-2"></div>
        <div class="santa__costume">
          <div class="santa__jacket"></div>
          <div class="santa__belt"></div>
        </div>
        <div class="santa__leg santa__leg-1"></div>
        <div class="santa__leg santa__leg-2"></div>
      </div>
    </div>
  </div>

  <ul>
    <li class="hohoho">
    <h2></h2><h2></h2><h2></h2>
    </li>
  <li class="santaclaus">
    <div class="chapeu">
        <div class="cone-2"></div>
      <div class="cone-1"></div>
    </div>
    <div class="face">
        <div class="eyes"></div>
      <div class="nariz"></div>
      <div class="barba">
        <div class="boca"></div>
      </div>
    </div>
    <div class="orelhas"></div>
  </li>
  <li class="hohoho">
    <h2></h2><h2></h2><h2></h2>
  </li>
</ul>

<!-- XXXXXXXXXXXXXXXXXX FIN PERE NOEL XXXXXXXXXXXXXXXXXX -->

<div class='reindeer'>
    <div class='head'>
      <div class='eyes-and-nose'></div>
      <div class='antlers'>
        <div class='outside-antler-trunk right'>
          <div class='antler-branches right'></div>
        </div>
        <div class='outside-antler-trunk left'>
          <div class='antler-branches left'></div>
        </div>
        <div class='inside-antler right'></div>
        <div class='inside-antler left'></div>
      </div>
    </div>
    <div class='tail'></div>
    <div class='legs'>
      <div class='leg-rear-right'></div>
      <div class='leg-rear-left'></div>
      <div class='leg-front-right'></div>
      <div class='leg-front-left'></div>
    </div>
    <div class='ground'></div>
  </div>

   <!-- XXXXXXXXXXXXXXXXXX FIN PETIT REINE XXXXXXXXXXXXXXXXXX  -->

<h1 class="headline" id="wish">I WISH YOU</h1>
<p class="headline" id="merry">A MERRY CHRISTMAS</p>
<p class="headline"id="year">AND HAPPY NEW YEAR !</p>

<div id="form">
    <form id="formulaire" action="mail.php" method="POST" role="form">

        <p class="titre">ENVOYEZ VOTRE CARTE DE VOEUX</p>
        <label for="nom">NOM :</label>
        <input id="nom" type="text" name="nom" placeholder="Entrez votre nom">
        <p id="error-name" class="error"></p>

        <label for="mail">E-MAIL :</label>
        <input id="mail" type="mail" name="mail" placeholder="Entrez l'email du destinataire">
        <p id="error-mail" class="error"></p>

        <label for="mymail">VOTRE E-MAIL :</label>
        <input id="mymail" type="mail" name="mymail" placeholder="Entrez votre email">        
        <p id="error-mymail" class="error"></p>

        <label for="message">MESSAGE :</label>
        <textarea name="message" id="message" placeholder="Entrez votre message" rows="8" cols="50"></textarea>
        <p id="error-message" class="error"></p>

        <input type="submit" id="submit" name="submit" value="Envoyer">

    </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/script.js"></script>
<script src="mail.js"></script>
</body>
</html>