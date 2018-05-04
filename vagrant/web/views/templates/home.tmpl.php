<?php
    include('models/posts.mdl.php');

    if(isset($_GET['connected']) && $_GET['connected'] == 'yes' && !isset($_SESSION['user'])) {
        verifyUser();
    }

    function verifyUser()
    {
        if($_POST['username'] == $_POST['password']) {
            $_SESSION['user'] = array();
            $_SESSION['user']['username'] = $_POST['username'];
            $_SESSION['user']['password'] = $_POST['password'];
        } else {
            include('views/templates/error.tmpl.php');
        }
    }
?>

<?php if(isset($_SESSION['user'])): ?>
    <section>
        <ul>
            <li><a href="?action=logoff">Se déconnecter</a></li>
        </ul>
        <h2>Posts</h2>
            <ul>
            <?php foreach($posts as $key => $post): ?>
                <li><a href="/?post=<?= $key ?>"><?= $post['title'] ?></a></li>
            <?php endforeach ?>
            </ul>
    </section>
<?php endif ?>