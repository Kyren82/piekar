<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piekar</title>
    <link rel="stylesheet" href="../styles/theme.css">
    <link rel="stylesheet" href="../styles/shop-style.css">
    <link rel="icon" href="../assets/cynamon-icon.png">
</head>
<body>
    <div id="wrapper">
        <?php
            require_once("../headers/nav.html");
            
            $products = [
                ['id' => 1, 'name' => 'Bułka kajzerka', 'category' => 'bulki', 'price' => 1.20],
                ['id' => 2, 'name' => 'Bułka grahamka', 'category' => 'bulki', 'price' => 1.50],
                ['id' => 3, 'name' => 'Chleb żytni', 'category' => 'pieczywo', 'price' => 4.50],
                ['id' => 4, 'name' => 'Chleb pszenny', 'category' => 'pieczywo', 'price' => 4.00],
                ['id' => 5, 'name' => 'Drożdżówka z serem', 'category' => 'bulki-slodkie', 'price' => 3.50],
                ['id' => 6, 'name' => 'Jagodzianka', 'category' => 'bulki-slodkie', 'price' => 4.20],
                ['id' => 7, 'name' => 'Bułka z budyniem', 'category' => 'bulki-slodkie', 'price' => 3.80],
                ['id' => 8, 'name' => 'Zapiekanka z pieczarkami', 'category' => 'bulki-slone', 'price' => 5.50],
                ['id' => 9, 'name' => 'Precel słony', 'category' => 'bulki-slone', 'price' => 2.80],
                ['id' => 10, 'name' => 'Pączek z dżemem', 'category' => 'paczki', 'price' => 3.50],
                ['id' => 11, 'name' => 'Donut z czekoladą', 'category' => 'paczki', 'price' => 4.00],
                ['id' => 12, 'name' => 'Ciasteczka owsiane', 'category' => 'ciasteczka', 'price' => 6.00],
                ['id' => 13, 'name' => 'Pierniczki', 'category' => 'ciasteczka', 'price' => 7.50]
            ];

        ?>
        <div class="main">
            <div class="main-top">
            <ul class="main-aside">
                <li><a href="#" category="wszystko">wszystko</a></li>
                <li><a href="#" category="bulki">bułki</a></li>
                <li><a href="#" category="pieczywo">pieczywo</a></li>
                <li><a href="#" category="bulki-slodkie">bułki słodkie</a></li>
                <li><a href="#" category="bulki-slone">bułki słone</a></li>
                <li><a href="#" category="paczki">pączki</a></li>
                <li><a href="#" category="ciastka">ciasteczka</a></li>
            </ul>
            <ul class="main-content-box">
                <li>
                    <h3 class="title-name">Tu będzie nazwa produktu</h3>
                    <p class="price">tu bedzie cena</p>
                    <input type="number" name="" id="" class="number-input">
                </li>

                <?php
                    foreach ($products as $product) {
                        echo("<li class='".$product['category']."'><h3 class='title-name'>".$product['name']."</h3><p class='price'>cena: ".$product['price']."$</p><input min='0' type='number' name='".$product['name']."' id='".$product['id']."' class='number-input'></li>");
                    }
                ?>
            </ul>
            </div>
            <div class="main-bottom">

            </div>
        </div>
        <?php
            require_once("../headers/footer.html");
        ?>
    </div>
</body>
</html>