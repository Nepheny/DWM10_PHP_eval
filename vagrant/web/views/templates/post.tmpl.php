<?php
    include('models/posts.mdl.php');
    $postId = $_GET['post'];
    $currentPost = $posts[$postId];
?>

<section>
    <ul>
        <li><a href="/?connected=yes">Accueil</a></li>
        <li><a href="?action=logoff">Se déconnecter</a></li>
    </ul>
    <ul>
    <?php foreach($currentPost as $key => $item): ?>
        <li><p><?= $item ?></p></li>
    <?php endforeach ?>
    </ul>
</section>