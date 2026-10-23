
<nav>
    <a href="index.php">Inicio</a>
    <a href="catalogo.php">Catálogo</a>

    <?php if (isset($_SESSION["username"])): ?>

        <a href="dashboard.php">Dashboard</a>

        <?php if ($_SESSION["role"] === "ADMIN"): ?>
            <a href="add_item.php">Añadir película</a>
        <?php endif; ?>

        <span>
            Hola, <?= htmlspecialchars($_SESSION["username"]) ?>
        </span>

        <a href="controllers/logout.php">Cerrar sesión</a>

    <?php else: ?>

        <a href="login.php">Login</a>

    <?php endif; ?>
</nav>
