<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Waterfall&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" class="rel">
    
    <title>Walentynki w Ekonomiku</title>
</head>

<body>

    <header class="gora"> 
        Walentynki 2022 w Ekonomiku
    </header>
    
    <div class="odczyt"><a href="index.html">Powrót do strony głównej</a></div>
<section>

    <div class="lovefoto">
      <img src="images/serce.jpg" class="serce"> 
    </div>

    <div class="srodek" id="trescwalentynki">

        <?php 
        if (isset($_POST["submit"])) {

        if (empty($_POST["tresc"]) || empty($_POST["adresat"]) || empty($_POST["klasa"]) || empty($_POST["nadawca"])) 
            {
                echo "<p style=\"color:white\">Musisz wypełnić wszystkie pola!</p>";
                echo "<p><a href=\"index.html\" onclick=\"history.back()\">Powrót do formularza</a></p>";
          
            } 
            
        else {
        
        
            $walnetynkaJSON =
            "{\"tresc\":\"".$_POST["tresc"]."\",\"adresat\":\"".$_POST["adresat"]."\",\"klasa\":\"".$_POST["klasa"]."\",\"nadawca\":\"".$_POST["nadawca"]."\"}";

            $nazwaStrony = $_POST["nazwaStrony"];
            echo "<p style=\"color:white\">Dziękujemy za dodanie Walentynki.</p>";
            echo "<p>Twoja walentynka jest widoczna pod kodem <b style=\"color:red\">$nazwaStrony</b> i zostanie przekazana do Odbiorcy.</p>";
        
            $fname = "$nazwaStrony.json";

            $file = fopen('walentynki22/'.$fname, 'w');
            fwrite($file, $walnetynkaJSON);
            fclose($file);

        }}
        else {
        header("Location: index.html");
        }
        ?>  

    </div>
</section> 

<footer>
    <p id="autor">Projekt Walentynki 2022 na zajęciach programistycznych w Ekonomiku przygotowali: Aleksandra Hamera, Emilia Marciniak, Bartosz Kusiak.</p>
</footer>

</body>
</html>