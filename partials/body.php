    <div class="text">
      <h1 class="haze"> Bienvenue sur mon portfolio</h1>
    <p> Bonjour je me présente je m'appelle Enzo</p>
    <p class="haze">Je vous souhaite la bienvenue dans mon univers de dévellopeur.</p>
    </div>
<div class="container">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <div class="category">
      <?php 
    $select = $db->query('SELECT id, cat_name, slug FROM categorie');
    $categories = $select->fetchAll(); 
?>
<h1>Mes catégorie</h1>
    <table>
        <thead>
            <tr>
                <th>Catégorie</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category): ?>
            <tr>
                <td><?= $category['id']; ?></td>
                <td><?= $category['cat_name']; ?> </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class= "project">
<?php
$select = $db->query('SELECT * FROM works');
$works = $select->fetchAll();
?>

<h1>Mes projets</h1>
    <table>
        <thead>
            <tr>

                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($works as $work): ?>
            <tr>
                <td><?= $work['id']; ?></td>
                <td><?= $work['content']; ?> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    </div>
    <div class="circle">
      <span><span></span></span>
      <span><span></span></span>
      <span><span></span></span>
    </div>

