<!-- Getting Blog Posts -->
<br />
<br />
<br />

<div class="container">
  <div class="starter-template">
    <h1>Ueber uns</h1>
    <p class="lead">Das hier ist der Text der Ueber uns Seite.</p>

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
