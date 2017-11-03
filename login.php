<?php 

$auth= 0; 
include 'lib/includes.php';
include 'lib/form.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $db->quote($_POST['username']);
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM users WHERE username=$username AND password='$password'";
    $select = $db->query($sql);
    if($select->rowCount() > 0){
        $_SESSION['Auth'] = $select->fetch();
        setFlash('Vous êtes maintenant connecté');
        header('Location:' . WEBROOT . 'admin/index.php');
        die();
    }
}


?>
</br></br></br>
<form action="#" method="post">
    <div class="form-control">
        <label for="username">Nom d'utilisateur</label>
        <?php echo input('username'); ?>
    </div>
    <div class="form-control">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-group" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-default">Se connecter</button>
</form>

<?php 
include 'partials/header.php';
include 'partials/footer.php';?>