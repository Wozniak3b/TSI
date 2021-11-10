<!DOCTYPE html>
<html lang="pl-Pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style/style.css" />
    <title>"Hasbulla" Serwis</title>
  </head>

  <body>
    <header>
      <a href="index.html"><img src="img/logo.png" alt="Serwis Komputerowy Hasbulla"></a>
      <nav>
        <ul>
          <li id="cennik"><a href="#cennik">Cennik</a></li>
          <li id="formularz"><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <article>
        <h2>Witaj u Hasbulli!</h2>
        W "Hasbulli" zajmujemy się serwisem komputerów stacjonarnych PC, laptopów.
        Nasza specjalność to naprawa komputerów oraz laptopów, 
        instalowanie oprogramowania, usuwanie wirusów oraz złośliwego 
        oprogramowania, instalacja urządzeń peryferyjnych, konfiguracja 
        sieci LAN, WIFI oraz routerów, konfiguracja oprogramowania każdego 
        typu, naprawa oraz obsługa urządzeń GPS. Nasz serwis działa 
        całodobowo na terenie miasta Gliwice.
      </article>
    </main>
    <h2 id="cennik">Cennik</h2>
    <section>
      <article>
        <div id="komp">
          <p onclick="komputer();inneRzeczy();inneMarki();">
            <b>KOMPUTER STACJONARNY</b>
          </p>
        </div>
        <div id="laptop">
          <p onclick="laptop();inneRzeczy();inneMarki();">
            <b>LAPTOP</b>
          </p>
        </div>
        <div id="inne">
          <p onclick="inne();inneMarki();"><b>INNE URZĄDZENIE</b></p>
        </div>
        <form action="data/zapis.php" method="POST">
          <h3>Zgłoszenie</h3>
          <label for="sprawa"
            >Wybrany dział:&ThickSpace;
            <input type="text" value="" id="rodzaj" name="sprawa" readonly />
          </label>
          <label for="firma" id="firma"
            >Producent laptopa:&ThickSpace;
            <select name="firma" onclick="inneMarki();">
              <option selected>Dell</option>
              <option>Asus</option>
              <option>Acer</option>
              <option>HP</option>
              <option>Lenovo</option>
              <option>MSI</option>
              <option>Inny</option>
            </select>
          </label>
          <label for="InnaMarka" id="InnaMarka"
            >Wpisz producenta laptopa:&ThickSpace;
            <input type="text" name="firmaDod" />
          </label>
          <label for="model" id="model"
            >Model:&ThickSpace;
            <select name="model">
              <?php
              $baza=@mysqli_connect("localhost","root","","hasbulla");
              $producent = array("Dell", "Asus","Acer","HP","Lenovo","MSI");

              for($i=0;$i<=5;$i++){
                $query = "SELECT * FROM $producent[$i]";
                $result = mysqli_query($baza,$query);
                ?><optgroup label="<?php echo $producent[$i];?>"><?php 
                for($j=0;$j<(mysqli_num_rows($result));$j++){
                ?><option><?php echo mysqli_fetch_row($result)[1]; ?></option><?php  
            }?></optgroup><?php }mysqli_close($baza);?>

            </select>
          </label>
          <label for="problem"
            >Wybierz problem:&ThickSpace;
            <select name="problem" id="problem" onclick="inneRzeczy();">
              <option value="50">Powolne działanie</option>
              <option value="80">Laptop zawiesza się</option>
              <option value="70">Wirus</option>
              <option value="30">Nieaktywny touchpad</option>
              <option value="100">Aktualizacja Windows</option>
              <option value="200">Zepsuty ekran</option>
              <option value="40">Brak dźwięku</option>
              <option value="90">Blue Screen</option>
              <option value="300">Zalany laptop</option>
              <option class="inne" value="150">Inny</option>
            </select>
            <select name="problem" id="problem2" onclick="inneRzeczy();">
              <option value="50">Powolne działanie</option>
              <option value="80">Komputer zawiesza się</option>
              <option value="70">Wirus</option>
              <option value="100">Aktualizacja Windows</option>
              <option value="40">Brak dźwięku</option>
              <option value="60">Brak obrazu</option>
              <option value="90">Blue Screen</option>
              <option class="inne" value="150">Inny</option>
            </select>
          </label>
          <label for="InnyProblem" id="InnyProblem"
            >Opisz swój problem:&ThickSpace;
            <textarea style="resize:none" name="innyProblem"></textarea>
          </label>
          <label for="normal"
            >Gwarancja Miesięczna
            <input
              type="radio"
              name="gwarancja"
              id="normal"
              value="0"
              checked
            />
          </label>
          <label for="extended"
            >Gwarancja Roczna &#40;+100zł&#41;
            <input type="radio" name="gwarancja" id="extended" value="100" />
          </label>
          <input type="button" value="OBLICZ" onclick="oblicz();" />
          <div id="obliczenia"><b></b></div>
          <h3>Dane osobowe</h3>
          <label for="imie">
            <input type="text" name="imie" placeholder="Imie" required>
          </label>
          <label for="nazwisko">
            <input type="text" name="nazwisko" placeholder="Nazwisko" required>
          </label>
          <label for="tele">
            <input type="tel" name="tele" placeholder="[123-456-789]" required>
          </label>
          <input type="submit" value="Złóż zamówienie" name="wyslij">
        </form>
      </article>
    </section>
    
    <h2 id="kontakt">Kontakt</h2>
    <aside>
      <p><b>Lokalizacja: </b>ul. HeszkeMeszke 2/15</p><br>
      <p>44-122 Gliwice</p><br>
      <p><b>Nr Telefonu: </b>897-2198-879</p><br>
      <p><b>Godziny otwarcia: </b>pon-pt 9:00-17:00</p><br>
      <p><b>Zapraszamy!</b></p>
    </aside>

    <footer>
      &copy; Jakub Woźniak 2021r. &ThickSpace;<a
        href="https://www.youtube.com/watch?v=PrlvNPD9YLc"
        >: &#41;</a
      >
    </footer>

    <script src="data/skrypt.js"></script>
  </body>
</html>
