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
    <?php
        $conn = new_mysqli("localhost","root","","inpostapp")
    ?>

    <div id="windows">
        <div class="add-package-page">
            <div class="header">
                <button class="closeReceiveMenu"><i class="fa-solid fa-arrow-left"></i></button> <h1>Dodaj przesyłkę</h1>
            </div>
    
            <div class="main">
                <h1>Podaj numer przesyłki, którą chcesz śledzić</h1>
                <input
                    type="number"
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
                    class="packageName"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <div class="counter-name"><span class="counter">0</span>/20 znaków</div>
              
              
                <button 
                    id="addOrderBtn" 
                    disabled = "true"
                >Dodaj</button>
            </div>
        </div>
    </div>
    
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


        <div class="infoBox">
                <h1>Nie śledzisz jeszcze żadnej przesyłki</h1>
          
                <span>Kliknij <i class="fa-solid fa-plus"></i> by dodać przesyłkę</span>
        </div>
    </main>

    <footer>
        <div>
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
      
    <script src="./script.js"></script>
</body>
</html>