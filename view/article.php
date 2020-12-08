<?php require "blocTemplate/TemplateHead.php"; ?>
<?php require "blocTemplate/TemplateNavigation.php"; ?>
    <?php
        echo "<H2>".$data->getTitre()."</H2>";
        echo "<br>";
        echo "<p style='text-align: center'>".$data->getContenu()."<p>";
        echo "<br>";

    ?>
<?php require "blocTemplate/TemplateFooter.php"; ?>
