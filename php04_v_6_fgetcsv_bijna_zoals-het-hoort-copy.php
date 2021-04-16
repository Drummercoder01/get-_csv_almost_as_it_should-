<?php
$_output = "<h2>Lijstje</h2>";
$_pointer = fopen("test5.csv","rb")
    or
    die("error");

while(! feof($_pointer))
{
    $_record=(fgetcsv($_pointer));
    list($_vn, $_nm, $_em)= $_record;
    
    $_output.="voornaam = $_vn --- naam = $_nm --- email = $_em<br>";
}
fclose($_pointer);

echo $_output;
?>