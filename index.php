<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>UEC</title>
</head>
<body>
    <h1>Lutadores</h1>

    <p>Registre seu lutador</p>

    <form action="cadastrar.php" method="get">
        <label for="nome">Nome do Lutador</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="nacionalidade">Nacionalidade do Lutador</label>
        <input type="text" name="nacionalidade" id="nacionalidade">
        <br>
        <label for="idade">Idade do Lutador</label>
        <input type="number" name="idade" id="idade">
        <br>
        <label for="altura">Altura do Lutador</label>
        <input type="number" name="altura" id="altura" step="any">
        <br>
        <label for="peso">Peso do Lutador</label>
        <input type="number" name="peso" id="peso" step="any">
        <br>
        <input type="submit" value="Registrar">
    </form>

    <div id="selectLutadores">   
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <select name="Lutador1" id="lutador1">
                <option value=""></option>
                    <?php 
                        require_once 'config.php';
                        $query = $conexao->query("SELECT * FROM lutadores ORDER BY nome ASC");
                        $lutadores = $query->fetch_all(PDO::FETCH_ASSOC);

                        foreach($lutadores as $option) {
                            echo "<option value=\"{$option[0]}\">{$option[1]}</option>";
                        }
                    ?>
                </select>
                    
                <select name="Lutador2" id="lutador2">
                    <option value=""></option>
                    <?php 
                        $query = $conexao->query("SELECT * FROM lutadores");
                        $lutadores = $query->fetch_all(PDO::FETCH_ASSOC);
                        
                        foreach($lutadores as $option) {
                            echo "<option value=\"{$option[0]}\">{$option[1]}</option>";
                        }            
                    ?>
                </select>

                <input type="submit" value="selecionar">
            </form>  
        </div>      

        <div id="statusLutadores">
            <div id="lutador1">
                <?php 
                    require_once 'Lutador.php';
                    
                    $lutadorSelecionado1 = $lutadores[$_GET['Lutador1'] - 1];
                    $lutadorObjeto1 = new Lutador($lutadorSelecionado1[1], $lutadorSelecionado1[9], $lutadorSelecionado1[2], $lutadorSelecionado1[3], $lutadorSelecionado1[4], $lutadorSelecionado1[6], $lutadorSelecionado1[7], $lutadorSelecionado1[8]);
                    $lutadorObjeto1->status();

                ?>
            </div>
        <br>
            <div id="lutador2">
                <?php 
                    
                    $lutadorSelecionado2 = $lutadores[$_GET['Lutador2'] - 1];
                    $lutadorObjeto2 = new Lutador($lutadorSelecionado2[1], $lutadorSelecionado2[9], $lutadorSelecionado2[2], $lutadorSelecionado2[3], $lutadorSelecionado2[4], $lutadorSelecionado2[6], $lutadorSelecionado2[7], $lutadorSelecionado2[8]);
                    $lutadorObjeto2->status();
                ?>
            </div>
        </div>       
</body>
</html>