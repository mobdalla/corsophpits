<?php include_once("../repos/LibroDAO.php");
$dao = new LibroDAO();
?>

<table>
    <tr>
        <th>Titolo</th>
        <th>Pagine</th>
        <th>Prezzo</th>
        <th>Autore</th>
    </tr>
    <?php foreach ($dao->getlibri() as $libro) : ?>
        <tr><?=$libro->titolo?></tr>
        <tr><?=$libro->prezzo?></tr>
        <tr><?=$libro->autore?></tr>
       
    <?php endforeach; ?>
</table>
