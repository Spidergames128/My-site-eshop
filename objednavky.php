<?php
include 'db.php';

$jmeno = $_POST['jmeno'];
$adresa = $_POST['adresa'];

$sql_suma = "SELECT SUM(products.price * kosik.mnozstvi) AS total 
             FROM kosik 
             JOIN products ON kosik.product_id = products.id";
$vysledek_suma = $conn->query($sql_suma);
$row = $vysledek_suma->fetch_assoc();
$celkovaCena = ($row['total'] !== null) ? $row['total'] : 0;

$stmt = $conn->prepare("INSERT INTO objednavky (jmeno, adresa, celkova_cena) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $jmeno, $adresa, $celkovaCena);
$stmt->execute();

$conn->query("DELETE FROM kosik");
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Pokemon site styles.css">
    <title>Potvrzení objednávky</title>
</head>
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
        <div style="max-width: 600px; margin: 50px auto; padding: 40px; text-align: center;">
            <h1>Děkujeme za nákup v našém eshopu, <?php echo htmlspecialchars($jmeno); ?>!</h1>
            <p>Tvoje objednávka na adresu: <strong><?php echo htmlspecialchars($adresa); ?></strong> byla úspěšně přijata. <br> Tvá objednávka dorazí za 1 den. <br> Platit se bude na místě peněžně</p>
            <p>Celková cena: <?php echo number_format($celkovaCena, 0, ',', ' '); ?> Kč</p>
            <a href="eshop.html" class="btn">Zpět na obchod</a>
        </div>
        <img src="img\emilia2.jpg" alt="pikamail" class="passport_side_png">
    </main>
</body>
</html>