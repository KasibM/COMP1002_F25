<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <title>Better than Domino's</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <header>
        <h1>Better than Domino's</h1>
        <h4><em>Because we're better than Domino's</em></h4>
        <br />
    </header>
    <main>
        <h2>Order Placed.</h2>
<?php
    $user_name = $_GET["user_name"];
    $user_email = $_GET["user_email"];
    $user_phone = $_GET["user_phone"];

    $pizza_quantity = $_GET["pizza_quantity"];
    $pizza_style = $_GET["pizza_style"];
    $pizza_size = $_GET["pizza_size"];
    $pizza_shape = $_GET["pizza_shape"];
    $pizza_toppings = $_GET["pizza_toppings"];

    $delivery_method = $_GET["delivery_method"];
    $instructions = $_GET["instructions"];


    echo('<p>Thank you '.$user_name.', your '.$pizza_quantity.' '.$pizza_size.' '.$pizza_shape.' pizza(s) with: <ul>');
    foreach($pizza_toppings as $topping){
        echo('<li>'.$topping.'</li>');
    };
    echo('</ul>will be ready in 5 minutes!</p>');
?>
    </main>
    <footer>
        <p><small>©Better than Domino's Inc. All rights reserved</small></p>
    </footer>

</html>