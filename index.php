<?php
    $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ex repellat iste blanditiis officia ea totam, possimus iusto aperiam voluptas sit! Porro corrupti earum ullam cum saepe ut aut quas.';
    $paragraphLenght = strlen(str_replace(' ', '', $paragraph));
    $censored = str_replace($_GET["censor"], '***', $paragraph);
    $censoredLenght = strlen(str_replace(' ', '', $censored));
    $currentYear = date("Y");
    $myYear = 1998;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <h1>La prima frase:</h1>
    <?php
        echo $paragraph;
    ?>
    <p>
        <span>è lunga: </span>
        <?php
            echo $paragraphLenght;
        ?>
        <span> caratteri</span>
    </p>
</div>
<div>
    <?php
        if (!$_GET["censor"])
            echo "<h1 style=\"color:red\">Non hai inserito \"?censor\" = \"qualsiasi parola\" nell'url!</h1>";
        else
            echo "<h1>La frase censurata:</h1>" . $censored . "<p><span>è lunga: </span>" . $censoredLenght . "<span> caratteri</span></p>";
    ?>
</div>
<div>
    <h4>La mia età è <?php echo $currentYear - $myYear ?> anni</h4>
</div>
<div>
    <span>copyright <?php echo $currentYear ?></span>
</div>

</body>
</html>