<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC</title>
</head>
<body>
    <h1>Luta lutadores:</h1>
    <pre>
    <?php 
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $lutador = array();

        $lutador[0] = new Lutador("Marcelo", "Brasil", 28, 172, 90);
        $lutador[1] = new Lutador("Samira", "Brasil", 28, 172, 90);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($lutador[0],$lutador[1]);
        $UEC01->lutar();
        // print_r($UEC01);
        
    ?>
    </pre>
</body>
</html>