<?php
    $dta["NAMA"] = "Diantari";
    $dta["TGL_LAHIR"] = "2004-01-18";
    $dta["JKEL"] = "P";
    $dta["ASAL"] = "Tabanan";
    $dta["HOBI"] = "Tari";
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);
