<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Pokemon site styles.css "> </head>
<body>
    <header class="header">
        <div class="block">
            <h2>Poké-Shop</h2>
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
            </div>
        </div>
    </nav>

<main class="main">
    <img class="logo" src="img/logo.jpg" alt="Pokémon">
    <div class="card" style="max-width: 600px; margin: 50px auto; padding: 40px;">
        <h1>Tvůj košík</h1>
        <p>Děkujeme, že jsi si vybral právě náš úžasný Poké-shop!</p>
        <hr style="border: 0; border-top: 1px solid #333; margin: 20px 0;">

        <?php
        include 'db.php';
        $sql = "SELECT products.name, products.price, kosik.mnozstvi 
                FROM kosik 
                JOIN products ON kosik.product_id = products.id";
        $vysledek = $conn->query($sql);
        
        $celkem = 0;
        if ($vysledek->num_rows > 0) {
            while($row = $vysledek->fetch_assoc()) {
                $subtotal = $row['price'] * $row['mnozstvi'];
                $celkem += $subtotal;
                echo "<p>" . htmlspecialchars($row['name']) . " | " . $row['mnozstvi'] . " ks | " . number_format($subtotal, 0, ',', ' ') . " Kč</p>";
            }
            echo "<div class='total' style='font-size: 1.5rem; font-weight: bold; color: #fff; margin-top: 20px;'>Celkem k úhradě: " . number_format($celkem, 0, ',', ' ') . " Kč</div>";
        } else {
            echo "<p>Košík je prázdný.</p>";
        }
        ?>
        <br>
        <form action="objednavky.php" method="POST">
        <input type="text" name="jmeno" placeholder="Tvoje jméno" required>
        <input type="text" name="adresa" placeholder="Adresa doručení" required>
        <button type="submit">Potvrdit a odeslat objednávku</button>
    </form>
    </form>
        <br>
        <a href="eshop.html" class="btn">Zpět na obchod</a>
    </div>
    <img src="img\pikamail.jpg" alt="pikamail" class="passport_side_png">
</main>

</body>
</html>