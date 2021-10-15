
<?php include('view/header.php')?>

<body>
    <?php
        if($nomCookies==null){
            include('view/form_nom_cognoms.php');
        }else{
            include('menu.php');
        }
    ?>
</body>
<?php include('view/footer.php')?>
