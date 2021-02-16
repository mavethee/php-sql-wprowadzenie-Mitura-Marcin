<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Galeria</title>
            <link rel="stylesheet" href="style.css">
            <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
            <link rel="manifest" href="../assets/favicons/site.webmanifest">
            <link rel="mask-icon" href="../assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
                <meta name="msapplication-TileColor" content="#da532c">
                <meta name="theme-color" content="#ffffff">
  </head>
<body>
    <!--Autoplay music script-->
    <script>
      window.onload = function() 
      {
        var context = new AudioContext();
      }
    </script>

        <!--Autoplay music in loop-->
        <audio controls autoplay loop>
            <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/music/Kara_OST.mp3" type="audio/mpeg">
        </audio>

          <!--Nagłówek-->
            <h1 class="galleryHeader">Galeria</h1>
              <!--First images row!-->
              <div class="gallery row">
                <div class="image photoFirst">1</div>
                <div class="image photoSecond">2</div>
                <div class="image photoThird">3</div>
              </div>
                <!--Second images row!-->
                <div class="gallery row">
                  <a href="#" class="image photoFirst">
                    <span class="photo_desc1">Fotografia No. 1</span>
                        <span class="photo_desc2">cena wywoławcza: 1 569 zł</span>
                  </a>
                  <a href="#" class="image photoSecond">
                    <span class="photo_desc1">Fotografia No. 2</span>
                        <span class="photo_desc2">cena wywoławcza: 1 299 zł</span>
                  </a>
                  <a href="#" class="image photoThird">
                    <span class="photo_desc1">Fotografia No. 3</span>
                        <span class="photo_desc2">cena wywoławcza: 10 299 zł</span>
                  </a>
                </div>
                  <!--Third images row!-->
                  <div class="gallery row">
                    <div class="image photoFirst">1</div>
                    <div class="image photoSecond">2</div>
                    <div class="image photoThird">3</div>
                  </div>
</body>
</html>