<?php
require_once ("dish.php");

$appetizer = array (0=>new Dish (0, "Biryani", "Biryani.png", 5.90, 1),
                    1=>new Dish (1, "Kebab", "Kebab.png", 4.80, 1),
                    2=>new Dish (2, "Gajrela", "Gajrela.png", 5.25, 1),
                    3=>new Dish (3, "Naan", "Naan.png", 1.25, 1, "no"),
);
$mainDish = array (0=>new Dish (0, "Biryani 2", "Biryani.png", 5.90, 1),
1=>new Dish (1, "Kebab 2", "Kebab.png", 4.80, 1),
2=>new Dish (2, "Gajrela 2", "Gajrela.png", 5.25, 1),
3=>new Dish (3, "Naan 2", "Naan.png", 4.80, 1),
);

$dessert = array (0=>new Dish (0, "Biryani 3", "Biryani.png", 5.90, 1),
1=>new Dish (1, "Kebab 3", "Kebab.png", 4.80, 1),
2=>new Dish (2, "Gajrela 3", "Gajrela.png", 5.25, 1),
3=>new Dish (3, "Naan 3", "Naan.png", 4.80, 1),
);

?>