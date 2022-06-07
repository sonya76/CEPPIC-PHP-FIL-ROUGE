<?php
    require_once './includes/nav.php';
?>
<main>
<?php
    $page = isset($_GET['page']) ? $_GET['page'] : "N'existe pas";

    /*if (isset($_GET['page']))
        $page = $_GET['page'];

    else
        $page = "N'existe pas";
    */
    echo $page;
?>
</main>