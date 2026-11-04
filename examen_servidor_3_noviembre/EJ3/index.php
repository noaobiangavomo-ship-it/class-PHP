<?php

require "datos.php";

$q = $_GET["q"] ?? "";
$categoriaSeleccionada = $_GET["categoria"] ?? "todas";

$categorias = ["todas" => "Todas", "musica" => "Música", "teatro" => "Teatro", "cine" => "Cine", "deporte" => "Deporte"];

$eventosFiltrados = [];
foreach ($eventos as $evento) {
    $coincideTexto = empty($q) || stripos($evento["titulo"], $q) !== false;
    $coincideCategoria = $categoriaSeleccionada === "todas" || strtolower($evento["categoria"]) === strtolower($categoriaSeleccionada);

    if ($coincideTexto && $coincideCategoria) {
        $eventosFiltrados[] = $evento;
    }
}

?>
<?php require "partials/header.php"; ?>

<main class="contenedor">
    <section class="card ">
        <form method="GET" >
            <div class="formulario">
                
                <input class="form-control" type="text" name="q" id="q"placeholder="Buscar por Título">
                
                <select class="form-select" id="categoria" name="categoria">
                    <?php foreach ($categorias as $valor => $label): ?>
                        <option value="<?= $valor ?>" <?= $categoriaSeleccionada === $valor ? "selected" : "" ?>><?= $label ?></option>
                    <?php endforeach; ?>
                </select>           
                <button type="submit" class="btn">Buscar</button>
            </div>
        </form>
    </section>

    <?php if (empty($eventosFiltrados)): ?>
        <div class="alert " role="alert">
            No hay eventos que coincidan con los filtros seleccionados.
        </div>
    <?php else: ?>
        <div class="pintando">
            <?php foreach ($eventosFiltrados as $evento): ?>
                <?php include "partials/tarjeta.php"; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <p class=" textocard">Mostrando <?= count($eventosFiltrados) ?> de <?= count($eventos) ?> eventos</p>
</main>

<?php require "partials/footer.php"; ?>
