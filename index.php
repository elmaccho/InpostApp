<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4798a03daf.js" crossorigin="anonymous"></script>
</head>
<body>

    <div id="windows">

      <div class="packageInfo">
          <div class="header">
            <button class="closeInfoPage"><i class="fa-solid fa-arrow-left"></i></button> <h1>Informacje o przesyłce</h1>
          </div>

          <div class="main">

            <div class="infoBox">
              <p class="infoTitle">
                  nr przesyłki
                </p>
                <span class="trackingNumberInfo">
                </span>

                <p class="infoTitle">
                  status
                </p>
                <span class="statusInfo">
                </span>

                <p class="infoTitle">
                  nadawca
                </p>
                <span class="senderInfo">
                </span>

                <p class="infoTitle">
                  nazwa przesyłki
                </p>
              <span class="nameInfo">
                <?php 
                  $conn = mysqli_connect("localhost","root","","inpostapp");


                ?>
              </span>
            </div>

            <hr>

            <button class="shareBtn">Udostępnij przesyłkę</button>

            <div class="location">
              <div class="receiveLocation">
                  <p class="infoTitle">Miejsce odbioru</p>


              </div>
              <div class="locationAvailability">
                  <p class="infoTitle">dostępny</p>
                  <span>Całą dobę,<br>
                    7 dni w tygodniu
                  </span>
              </div>
            </div>

          </div>
      </div>  

      <div class="add-package-page">
          <div class="header">
                <button class="closeReceiveMenu"><i class="fa-solid fa-arrow-left"></i></button> <h1>Dodaj przesyłkę</h1>
          </div>
    
          <div class="main">
            <form action="./addPackage.php" method="post">
                <h1>Podaj numer przesyłki, którą chcesz śledzić</h1>
                <input
                    type="number"
                    name="trackingNumber"
                    placeholder="Numer przesyłki"
                    maxlength="24"
                    class="packageNumber"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <div class="counter-number"><span class="counter">0</span>/24 znaków</div>
              
                <h1>Możesz również nadać tej przesyłce nazwę</h1>
                <input
                    type="text"
                    placeholder="Nazwa przesyłki"
                    maxlength="20"
                    name="packageName"
                    class="packageName"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <div class="counter-name"><span class="counter">0</span>/20 znaków</div>

                <button 
                    type="submit"
                    id="addOrderBtn" 
                    disabled = "true"
                >Dodaj</button>
            </form>
              

          </div>
      </div>

    </div>

    <div class="sideMenu">
      <div class="logo">
        <img src="./inpostlogo.jpg" alt="inpost logo">
      </div>
      <div class="menuBtns">
        <button>Archiwum przesyłek</button>
        <button>Mapa punktów InPost</button>
        <button>Ustawienia</button>
        <button>Pomoc</button>
        <button>O aplikacji</button>

        <button class="logOutBtn"><i class="fa-solid fa-arrow-left"></i>Wyloguj</button>
      </div>
    </div>

    <button class="exit"></button>

    <div class="mainContainer">  

      <header>
          <div class="mainBar">

              <button class="menuBtn">
                <i class="fa-solid fa-bars"></i>
              </button>
            
              <h1 class="mainTitle">Śledzenie przesyłek</h1>
            
              <button class="searchBtn">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            
            </div>
            
            <div class="switchBar">
            
              <button class="receiveBtn">
                Odbieram
              </button>
            
              <button class="sendBtn">
                Nadaję
              </button>
            
              <button class="returnBtn">
                Zwracam
              </button>
            
            </div>
            
      </header>

      <main>
              <div class="receiveContainer">
                  <button class="addReceiveBtn">
                      <i class="fa-solid fa-plus"></i>
                  </button>
              </div>

          <?php
              $conn = mysqli_connect("localhost","root","","inpostapp");

              $sql = "SELECT * FROM zamowienie";
              $query = mysqli_query($conn, $sql);



                
                if (mysqli_num_rows($query)>0) {
                  while($row = $query->fetch_assoc()){

                  $trackingNumber = $row["nrPrzesylki"];
                  $status = $row["status"];
                  $sender = $row["nadawca"];

                  echo "
                  <div class=\"packageBox\">
                  <div class=\"packageInfo\">
                      <div class=\"trackingNumber\">
                        <p>nr przesyłki</p>
                        <span class=\"trackingNumberBox\">
                          $trackingNumber
                        </span>
                      </div>

                      <div class=\"status\">
                        <p>status</p>
                        <span class=\"statusBox\">$status</span>
                      </div>

                      <div class=\"sender\">
                        <p>nadawca</p>
                        <span class=\"senderBox\">$sender</span>
                      </div>
                  </div>

                <div class=\"moreBtn\">
                  <p>więcej</p> <i class=\"fa-solid fa-arrow-right\"></i>
                </div>

              </div>
                  ";
                } 


              } else {
                echo "
                <div class=\"infoBox\">
                <h1>Nie śledzisz jeszcze żadnej przesyłki</h1>
          
                <span>Kliknij <i class=\"fa-solid fa-plus\"></i> by dodać przesyłkę</span>
            </div>";
              }

              
              mysqli_close($conn);
          ?>
      </main>

      <footer>
          <div class="footBar">
              <button>
                <i class="fa-solid fa-magnifying-glass"></i>
              <span>Śledź</span>
              </button>
            
              <button>
                <i class="fa-solid fa-arrow-right"></i>
              <span>Nadaj</span>
              </button>
            
              <button>
                <i class="fa-solid fa-arrow-left"></i>
              <span>Zwróć</span>
              </button>
            
              <button>
                <i class="fa-regular fa-bell"></i>
                <span>Sprawdź</span>
              </button>
            
            </div>
            
      </footer>
    </div>


    <script src="./script.js"></script>
</body>
</html>