<?php
require_once __DIR__ . '/../app/controllers/LoginController.php';

$controller = new LoginController();

if (isset($_GET['route'])) {
    switch ($_GET['route']) {
        case 'login':
            $controller->login();
            break;
        case 'register':
            $controller->register();
            break;
        default:
            echo "Rota inválida!";
            break;
    }
} else {
    echo "Nenhuma rota especificada.";
}
?>
