<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mot de Passe </title>
    </head>
    <body>
    
        <?php
            if (isset($_POST['mdp']) AND $_POST['mdp'] == "admin") 
            {
            ?>
                <h1> Le Code Secret </h1>
                
                <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
                
                <?php
            }

            else 
            {
                echo '<p> mdp incorrect </p> ';
            }
        ?>
    
        
    </body>
</html>