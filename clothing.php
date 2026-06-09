<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figures</title>
    <link rel="stylesheet" href="Pokemon site styles.css">
    <link rel="icon" type="img" href="img/Bag_Poké_Ball_SV_Sprite.png">

    <style>
        .cart-floating-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.4);
            z-index: 99999;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .cart-floating-btn:hover {
            background-color: #003d82;
            transform: scale(1.05);
        }
    </style>

</head>
<body>
    <header class="header">
        <div class="block">
            <a href="eshop.html"><h2>Poké-Shop</h2></a>
        </div>
    </header>
    <nav class="nav">
        <div class="block">
            <div>
                <h2>Generations</h2>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_I" target="_blank">Generation I</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_II" target="_blank">Generation II</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_III" target="_blank">Generation III</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_IV" target="_blank">Generation IV</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_V" target="_blank">Generation V</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_VI" target="_blank">Generation VI</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_VII" target="_blank">Generation VII</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_VIII" target="_blank">Generation VIII</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Generation_IX" target="_blank">Generation IX</a> <br> <br>
            </div>
        </div>
            <br><br>
        <div class="block">
            <div>
                <h2>Regions</h2>
                <a href="https://bulbapedia.bulbagarden.net/wiki/Kanto" target="_blank">Kanto <img src="" alt=""></a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Johto" target="_blank">Johto</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Hoenn" target="_blank">Hoenn</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Sinnoh" target="_blank">Sinnoh</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Unova" target="_blank">Unova</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Kalos" target="_blank">Kalos</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Alola" target="_blank">Alola</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Galar" target="_blank">Galar</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Hisui" target="_blank">Hisui</a> <br> <br>

                <a href="https://bulbapedia.bulbagarden.net/wiki/Paldea" target="_blank">Paldea</a> <br> <br>

            </div>
        </div>
            <br><br>
        <div class="block">
            <div>
                <h2>Other Sites</h2>
                <a href="Types.html">Types</a> <br> <br>
                <a href="Battle_Gimmicks.html">Battle Gimmicks</a> <br> <br>
                <a href="Photo Bank.html">Photo Gallery</a> <br> <br>
                <a href="index.html">My Journey</a> <br> <br>
                <a href="eshop.html">Poké-Shop</a> <br> <br>
            </div>
    </nav>
<main class="main">
    <img class="logo" src="img/logo.jpg" alt="Pokémon">
    
    <div class="flex_passport">
        <?php
            include 'db.php';
            $dotaz = $conn->query("SELECT * FROM products WHERE category = 'cloths'");

            while($row = $dotaz->fetch_assoc()) {
                echo "<div class='category'>";
                echo "  <div class='inside card_background'>";
                echo "      <div class='buy_text'>";
                echo "          <p class='buy_text_title'>" . htmlspecialchars($row['name']) . "</p>";
                echo "      <img class='buy_img' src='" . htmlspecialchars($row['img']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
                echo "          <p class='buy_text_desc'>" . htmlspecialchars($row['desct']) . "</p>";
                echo "      </div>";
                echo "      <div class='price'>Cena: " . number_format($row['price'], 0, ',', ' ') . " Kč</div>";
                echo "      <a href='pridat_do_db.php?id=" . $row['id'] . "' class='card-link'>";
                echo "          <button class='add-to-cart-btn'>Přidat do košíku</button>";
                echo "      </a>";
                echo "  </div>"; 
                echo "</div>"; 
            }
        ?>
    </div>
    <a href="kosik.php" class="cart-floating-btn">🛒 Košík</a>
</main>
    
</body>
</html>
