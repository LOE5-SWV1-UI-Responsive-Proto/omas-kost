<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Oma's Kost | Traditioneel Restaurant in Rotterdam</title>

<meta name="description" content="Oma's Kost is een gezellig restaurant
 in Rotterdam waar je kunt genieten van traditionele huisgemaakte gerechten, 
 bereid met liefde en verse ingrediënten. Bezoek ons aan de Weena 6 in het 
 centrum van Rotterdam.">

<meta name="keywords" content="Oma's Kost, restaurant Rotterdam, traditioneel 
eten, Nederlandse keuken, huisgemaakte gerechten, restaurant Weena Rotterdam, 
eten in Rotterdam">

<meta name="author" content="Mo">

<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/responsive.css">
<link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'?>
    
    <main class="reserve-main">
  <section class="reserve-hero">
    <img src="images/reserveren.png" alt="Restauranttafel in Oma's Kost" class="reserve-hero-image">
    <h1 class="reserve-hero-title">Verzoek tot reservering</h1>
    <p class="reserve-hero-text">(Dinsdag tot en met zondag geopend van 10:00 - 23:00)</p>
  </section>

  <section class="reserve-content">
    <article class="reserve-info">
      <h2>Informatie betreft reserveren</h2>

      <p>Reservering is pas officieel wanneer de reservering is bevestigd via de mail.</p>
      <p>De bevestigde tijd via de mail is leidend.</p>

      <p class="reserve-note reserve-note-light">
        Voor reserveringen op de dag zelf kunt u het beste bellen op:
        <br>06 23 57 44 90.
      </p>

      <p class="reserve-note reserve-note-pink">
        Met valentijnsdag werken wij met shifts van 17:00 - 19:10 en een tweede shift vanaf 19:15.
      </p>

      <p>Na 20 minuten wordt de tafel weg gegeven. Neem daarom contact op als u te laat bent.</p>
    </article>

    <form class="reserve-form">
      <h2>Reserveren</h2>

      <input type="text" name="naam" placeholder="Je Naam">
      <input type="email" name="email" placeholder="Je e-mailadres">
      <input type="tel" name="telefoon" placeholder="Je telefoonnummer">
      <input type="text" name="datum" placeholder="Datum">
      <input type="text" name="tijd" placeholder="17:00">
      <input type="number" name="personen" placeholder="Antal personen">
      <textarea name="bericht" placeholder="Je bericht"></textarea>

      <button type="submit">Verzenden</button>
    </form>
  </section>
</main>
    
    <?php include 'includes/footer.php'?>
    <script src="script/script.js"></script>
</body>
</html>