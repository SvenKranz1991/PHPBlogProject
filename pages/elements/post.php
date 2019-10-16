<!-- Getting Blog Posts - Übersicht SiteMap -->
<!-- Google mal fetch() -->
<br />
<br />
<br />

<div class="container">
  <div class="starter-template">
    <h1>Post Beitrag</h1>
    <p class="lead">Post - Beitrag Seite</p>

    <!-- Verbindung zur Datenbank -->
    <?php $res = get_post($_GET['title']); ?>

    <p class="paragraph">Dein wundervoller Text</p>

    <!-- Pre-Tag Formatiert den Text so wie er kommt - Macht das ganze bisschen lesbarer -->
    <pre><?php
            // var_dump($_GET);
            var_dump($res);?>
    </pre>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <?php
                    echo $res["title"];
                 ?>
            </h3>
        </div>
        <div class="panel-body">
            <p>
                <?php
                    echo $res["content"];
                 ?>
            </p>
        </div>

    </div>

  </div>
</div>
