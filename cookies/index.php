

<body>
    <?php
        if(isset($_COOKIE['cookies_name'])){
            header('Location: view/menu.php');
        }else{            
            header('Location: view/form_nom_cognoms.php');

        }
    ?>
</body>

