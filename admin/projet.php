<?php

include '../lib/includes.php';
include '../partials/admin_header.php';


/**
* SUPPRESSION
**/
if(isset($_GET['delete'])) {
    checkCsrf();
    $id = $db->quote($_GET['delete']);
    $db->query("DELETE * FROM works WHERE id=$id");
    setflash('Le projet a bien été supprimée');
    header('Location:projet.php');
}

/**
* CATEGORIE
**/
$select = $db->query('SELECT * FROM works');
$works = $select->fetchAll();
?>

<h1>Mes projets</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($works as $work): ?>
            <tr>
                <td><?= $work['id']; ?></td>
                <td><?= $work['content']; ?> </td>
                <td>
                    <a href="projet_edit.php?id=<?= work['id']; ?>&<?= csrf(); ?>"class ="btn btn-default">Edit</a>
                    <a href="?delete=<?= work['id']; ?>"class ="btn btn-error" onclick="return confirm('Sure de ton coup Morray ?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



<?php
include '../partials/footer.php';

?>