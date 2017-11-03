<?php

include '../lib/includes.php';
include '../partials/admin_header.php';


/**
* SUPPRESSION
**/
if(isset($_GET['delete'])) {
    checkCsrf();
    $id = $db->quote($_GET['delete']);
    $db->query("DELETE FROM categorie WHERE id=$id");
    setflash('La catégorie a bien été supprimée');
    header('Location:category.php');
}

/**
* CATEGORIE
**/
$select = $db->query('SELECT id, cat_name, slug FROM categorie');
$categories = $select->fetchAll();
?>

<h1>Mes catégorie</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category): ?>
            <tr>
                <td><?= $category['id']; ?></td>
                <td><?= $category['cat_name']; ?> </td>
                <td>
                    <a href="category_edit.php?id=<?= category['id']; ?>&<?= csrf(); ?>"class ="btn btn-default">Edit</a>
                    <a href="?delete=<?= category['id']; ?>"class ="btn btn-error" onclick="return confirm('Sure de ton coup Morray ?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



<?php
include '../partials/footer.php';

?>