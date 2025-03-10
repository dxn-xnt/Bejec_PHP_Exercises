<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div>
        <h1>A Month of Changing Weather</h1>

        <?php
        $weather = ['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];

        echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had 
        <a href='?color=ecfffd'>{$weather[5]}</a> and 
        <a href='?color=c5eff2'>{$weather[6]}</a>. Then came 
        <a href='?color=FFDF8E'>{$weather[1]}</a> with a few 
        <a href='?color=d3e4f8'>{$weather[2]}</a> and some 
        <a href='?color=566f97'>{$weather[0]}</a>. At least we didn't get any 
        <a href='?color=9dbab7'>{$weather[3]}</a> or 
        <a href='?color=9aa6bc'>{$weather[4]}</a>.</p>";

        $color = isset($_GET['color']) ? preg_replace('/[^a-fA-F0-9]/', '', $_GET['color']) : 'FFFFFF';
        echo "<style>body { background-color: #$color; }</style>";
        ?>

        <h4>
            click the weather element to change the background color
        </h4>
    </div>

</body>

</html>
