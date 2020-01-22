<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Google</title>
    <link rel="stylesheet" href="public/app.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="googlelogo">
        <h2> Privacy e termini</h2>
      </div>
      <div class="navbar">
        <div class="menu-left">
          <a href="#">Introduzione</a>
          <a href="#">Norme sulla privacy</a>
          <a href="#">Termini di servizio</a>
          <a href="#">Tecnologie</a>
          <a class="blu" href="#">Domande frequenti</a>
        </div>
        <div class="menu-right">
          <a href="#">Account Google</a>
        </div>
      </div>
    </header>
    <main>
      <?php
        include 'data.php'; //vado a prendermi il file con l'array da ciclare
        foreach ($faq as $faqTesto) { //ciclo l'array delle domande
      ?>
        <div class="domanda">
          <h2><?php echo $faqTesto['domanda'] //creo tanti div per quante sono le domande, e dentro un tag h2 ci andrà il contenuto della key?></h2>
        </div>
        <div class="risposta">
          <?php echo $faqTesto['risposta'] //creo tanti div per quante sono le risposte, e le risposte saranno la key suddivisa da dei tag p ?>
        </div>
      <?php } ?>
    </main>
    <footer>
      <div class="container">
        <div class="options">
          <a href="#">Google</a>
          <a href="#">Tutto su google</a>
          <a href="#">Privacy</a>
          <a href="#">Termini</a>
        </div>
        <div class="language">
          <select class="lang" name="">
            <option value="ita">Italiano </option>
            <option value="Ing">Inglese </option>
            <option value="Fra">Francese </option>
            <option value="Spa">Spagnolo </option>
          </select>
        </div>
      </div>
    </footer>
  </body>
</html>
