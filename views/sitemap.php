<!-- Getting Blog Posts - Übersicht SiteMap -->
<br />
<br />
<br />

<div class="container">
  <div class="starter-template">
    <h1>Sitemap</h1>
    <p class="lead">Sitemap Seite</p>

    <!-- Verbindung zur Datenbank -->
    <?php $res = $pdo ->query("SELECT * FROM `posts`"); ?>


    <!-- Pre-Tag Formatiert den Text so wie er kommt - Macht das ganze bisschen lesbarer -->
    <!-- <pre><?php var_dump($res) ?></pre> -->

    <ul>
        <!-- Achtung PHP Alternativ Syntax -->
        <?php foreach ($res as $row): ?>
            <h2>
                <?php echo $row['title']; ?>
            </h2>
        <?php endforeach; ?>
    </ul>

  </div>
</div>
