<?php 
$prodotto = $templateParams["prodotto"]; 
$azione = getAction($templateParams["azione"])
?>
<form action="processa-prodotto.php" method="POST" enctype="multipart/form-data">
    <h2>Gestisci Prodotto</h2>
    <?php if($prodotto==null): ?>
    <p>Prodotto non trovato</p>
    <?php else: ?>
    <ul>
        <li>
            <label for="nomeprodotto">Nome:</label><input type="text" id="nomeprodotto" name="nome" value="<?php echo $prodotto["nome"]; ?>" /> 
        </li>
        <li>
            <label for="prezzoprodotto">Prezzo:</label><input type="text" id="prezzoprodotto" name="prezzo" value="<?php echo $prodotto["prezzo"]; ?>" /> 
        </li>
        <li>
            <label for="quantitaprodotto">Quantità:</label><input type="text" id="quantitaprodotto" name="quantita_disponibile" value="<?php echo $prodotto["quantita_disponibile"]; ?>">
        </li>
        <li>
            <label for="ingredientiprodotto">Ingredienti:</label><textarea id="ingredientiprodotto" name="ingredienti"><?php echo $prodotto["ingredienti"]; ?></textarea>
        </li>
        <li>
            <?php if($templateParams["azione"]!=3): ?>
            <label for="imgprodotto">Immagine Prodotto</label><input type="file" name="img" id="imgprodotto" />
            <?php endif; ?>
            <?php if($templateParams["azione"]!=1): ?>
            <img width="360" height="360" src="<?php echo IMG_DIR.$prodotto["img"]; ?>" alt="" />
            <?php endif; ?>
        </li>
        <li>
            <input type="submit" name="submit" value="<?php echo $azione; ?> Prodotto" />
            <a href="login.php">Annulla</a>
        </li>
    </ul>
        <?php if($templateParams["azione"]!=1): ?>
        <input type="hidden" name="codice_prodotto" value="<?php echo $prodotto["codice_prodotto"]; ?>" />
        <input type="hidden" name="oldimg" value="<?php echo $prodotto["img"]; ?>" />
        <?php endif;?>

        <input type="hidden" name="action" value="<?php echo $templateParams["azione"]; ?>" />
    <?php endif;?>
</form>