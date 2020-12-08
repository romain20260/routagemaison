<?php require "blocTemplate/TemplateHead.php"; ?>
<?php require "blocTemplate/TemplateNavigation.php"; ?>
    <?php
    foreach($data as $article)
    {
       ?>
       <a href="/routagemaison/article/<?php echo $article['idarticle'] ?>"> <?= "<H3>".$article["titre"]."</h3>" ?> </a> 
       <hr>
       <br>
    <?php
    }
    ?>
<?php require "blocTemplate/TemplateFooter.php"; ?>
