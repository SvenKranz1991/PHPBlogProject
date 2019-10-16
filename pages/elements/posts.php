<!-- Getting Blog Posts - Übersicht SiteMap -->
<br />
<br />
<br />

<div class="container">
  <div class="starter-template">
    <h1>Posts</h1>
    <p class="lead">Posts Seite</p>

    <!-- Verbindung zur Datenbank -->
    <?php $res = fetch_posts(); ?>


    <!-- Pre-Tag Formatiert den Text so wie er kommt - Macht das ganze bisschen lesbarer -->
    <!-- <pre><?php var_dump($res) ?></pre> -->

    <ul>
        <!-- Achtung PHP Alternativ Syntax -->
        <?php foreach ($res as $row): ?>
            <li>
                <a href="post.php?title=<?php echo $row['title'];?>">
                <?php echo $row['title']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

  </div>
</div>
