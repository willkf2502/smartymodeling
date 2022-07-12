<?php 

require __DIR__."/vendor/autoload.php";


use App\Controller\Pages\Home;

$request = new App\Http\Request;

//dd($request);

echo Home::getHome();
exit;
?>