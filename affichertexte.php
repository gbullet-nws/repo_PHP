<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Intro PHP  </title>
</head>

<body>

    <h2> Hello World </h2>

    <p>
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>
    </p>
    
    <p> Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>. </p>

    <?php
        $age_du_visiteur = 17;
        echo 'Le visiteur a ' . $age_du_visiteur . ' ans';
    ?>

    
    
</body>

</html>