<?php
function my_autoloader($class) {
        $path = 'Model/';
        include_once $path . $class . '.php';
    }
    spl_autoload_register('my_autoloader');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once './View/head.php';
?>
<body>
    <div class="page-wrapper">

        <!-- hiện thị header -->
        <?php
        include_once 'View/header.php';
        ?>
        <!-- hiên thi noi dung -->
        <?php 
            $ctrl = isset($_GET['action']) ? $_GET['action'] : 'home';
            include_once "Controller/$ctrl.php";
        ?>
        <!-- hiên thị footer -->
        <?php
        include_once './View/footer.php';
        ?>
    
    </div>
    <?php
    include_once './View/js.php';
    ?>
</body>

</html>