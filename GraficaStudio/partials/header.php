
<link rel="stylesheet" href="assets/style_header.css">
<nav class="nav-stylo" >
    <a href="index.php">Inicio</a>
    <a href="catalogo.php">Catálogo</a>
    <?php if (siEstaLogeado()): ?>
        <a href="dashboard.php">Panel de control</a>
        <span>Bienvenido, <?= htmlspecialchars($_SESSION["username"], ENT_QUOTES, "UTF-8") ?></span>
        <a href="controllers/logout.php">Cerrar sesión</a>
        <?php if (isAdmin()): ?>
            <a href="add_item.php">Añadir revista</a>
        <?php endif; ?>
    <?php else: ?>
        <a href="login.php">Iniciar sesión</a>
    <?php endif; ?>
</nav>
<?php
