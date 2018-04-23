<?php
// Array with names
$a[] = "alles";
$a[] = "broodje";
$a[] = "cmd";
$a[] = "dexter";
$a[] = "eerder";
$a[] = "fiets";
$a[] = "goed";
$a[] = "heer";
$a[] = "insta";
$a[] = "jonathan";
$a[] = "kloten";
$a[] = "lopen";
$a[] = "meerder";
$a[] = "nee";
$a[] = "op";
$a[] = "peter";
$a[] = "quote";
$a[] = "repen";
$a[] = "steven";
$a[] = "ui";
$a[] = "vroeger";
$a[] = "waarom";
$a[] = "xnxx";
$a[] = "ybel";
$a[] = "zack";
$a[] = "list";
$a[] = "knop";
$a[] = "ijdel";
$a[] = "varenn";
$a[] = "woahVicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
