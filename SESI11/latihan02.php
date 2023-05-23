<?php
    $dta[0]["NAMA"] = "Diantari";
    $dta[0]["TGL_LAHIR"] = "2004-01-18";
    $dta[0]["JKEL"] = "P";
    $dta[0]["ASAL"] = "Tabanan";
    $dta[0]["HOBI"] = "Tari";

    $dta[1]["NAMA"] = "Jeon Wonwoo";
    $dta[1]["TGL_LAHIR"] = "1996-07-17";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ASAL"] = "Korea Selatan";
    $dta[1]["HOBI"] = "Musik";

    $dta[2]["NAMA"] = "Kim Mingyu";
    $dta[2]["TGL_LAHIR"] = "1997-04-06";
    $dta[2]["JKEL"] = "L";
    $dta[2]["ASAL"] = "Korea Selatan";
    $dta[2]["HOBI"] = "Musik";
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);
