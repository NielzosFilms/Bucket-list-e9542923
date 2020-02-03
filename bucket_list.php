<?php
echo("Hoeveel activiteiten wil je aan je bucket list toevoegen?".PHP_EOL);
$count = readline();
if(!is_numeric($count)){
    exit($count." is geen nummer");
}
$items = [];
for($i = 0;$i<$count;$i++){
    echo("Wat wil je toevoegen aan jouw bucket list?".PHP_EOL);
    $item = readline();
    array_push($items, $item);
}
echo("Op jouw bucket list staat:".PHP_EOL);
for($i = 0;$i<count($items);$i++){
    echo($items[$i].PHP_EOL);
}
?>