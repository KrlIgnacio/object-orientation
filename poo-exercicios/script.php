<?php

    require_once ('./smartTv.php');

    $instancia1 = new SmartTv("KA159", "LG", 63, "preta", "WebOS");
    $instancia2 = new SmartTv("79WV", "Sony", 42, "branca", "Android TV");

    var_dump($instancia1);
    var_dump($instancia2);

    $instancia1->navegarNaInternet();
    $instancia1->assistirStreamingDeVideo("Netflix");
    $instancia2->assistirStreamingDeVideo("Amazom Prime Video");
