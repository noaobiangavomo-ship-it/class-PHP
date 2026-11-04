<?php

require "datos.php";

$media = ($notaServidor + $notaCliente + $notaDespliegue + $notaInterfaces + $notaEmpresa) / 5;

if ($media <5){
$calificacion="insuficiente";
}
elseif ($media < 6){
    $calificacion="suficiente";
}
elseif($media <7){
    $calificacion= "bien";
}
elseif($media < 9){
    $calificacion="notable";
}
else{
    $calificacion="sobresaliente";
}

$suspensos = 0;
if ($notaServidor < 5) {
    $suspensos++;
}
if ($notaCliente < 5) {
    $suspensos++;
}
if ($notaDespliegue < 5) {
    $suspensos++;
}
if ($notaInterfaces < 5) {
    $suspensos++;
}
if ($notaEmpresa < 5) {
    $suspensos++;
}

$moduloMasAltaNombre = "Desarrollo Web en Entorno Servidor";
$moduloMasAltaNota = $notaServidor;
if ($notaCliente > $moduloMasAltaNota) {
    $moduloMasAltaNombre = "Desarrollo Web en Entorno Cliente";
    $moduloMasAltaNota = $notaCliente;
}
if ($notaDespliegue > $moduloMasAltaNota) {
    $moduloMasAltaNombre = "Despliegue de Aplicaciones Web";
    $moduloMasAltaNota = $notaDespliegue;
}
if ($notaInterfaces > $moduloMasAltaNota) {
    $moduloMasAltaNombre = "Diseño de Interfaces Web";
    $moduloMasAltaNota = $notaInterfaces;
}
if ($notaEmpresa > $moduloMasAltaNota) {
    $moduloMasAltaNombre = "Empresa e Iniciativa Emprendedora";
    $moduloMasAltaNota = $notaEmpresa;
}

$moduloMasBajaNombre = "Desarrollo Web en Entorno Servidor";
$moduloMasBajaNota = $notaServidor;
if ($notaCliente < $moduloMasBajaNota) {
    $moduloMasBajaNombre = "Desarrollo Web en Entorno Cliente";
    $moduloMasBajaNota = $notaCliente;
}
if ($notaDespliegue < $moduloMasBajaNota) {
    $moduloMasBajaNombre = "Despliegue de Aplicaciones Web";
    $moduloMasBajaNota = $notaDespliegue;
}
if ($notaInterfaces < $moduloMasBajaNota) {
    $moduloMasBajaNombre = "Diseño de Interfaces Web";
    $moduloMasBajaNota = $notaInterfaces;
}
if ($notaEmpresa < $moduloMasBajaNota) {
    $moduloMasBajaNombre = "Empresa e Iniciativa Emprendedora";
    $moduloMasBajaNota = $notaEmpresa;
}

$resultadoCurso = "Suspendido";
if ($notaServidor >= 5 && $notaCliente >= 5 && $notaDespliegue >= 5 && $notaInterfaces >= 5 && $notaEmpresa >= 5) {
    $resultadoCurso = "Aprobado";
} elseif ($media >= 5 && $suspensos > 0 && $notaServidor >= 4 && $notaCliente >= 4 && $notaDespliegue >= 4 && $notaInterfaces >= 4 && $notaEmpresa >= 4) {
    $resultadoCurso = "Pendiente de recuperación";
}

$claseResultado = "resultado-suspendido";
if ($resultadoCurso === "Aprobado") {
    $claseResultado = "resultado-aprobado";
} elseif ($resultadoCurso === "Pendiente de recuperación") {
    $claseResultado = "resultado-recuperacion";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín de notas</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
   
</head>
<body>
    <div class="boletin">
        <h1>BOLETÍN DE NOTAS 2DAW</h1>
        <p><strong>Alumno:</strong> <?= $alumno ?></p>

        <table class="table ">
            <thead class="table-dark">
                <tr>
                    <th>Módulo</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <tr class="<?= $notaServidor >= 5 ? 'table-aprobado' : 'table-suspenso' ?>">
                    <td>Desarrollo Web en Entorno Servidor</td>
                    <td><?= (float)$notaServidor ?></td>
                </tr>
                <tr class="<?= $notaCliente >= 5 ? 'table-aprobado' : 'table-suspenso' ?>">
                    <td>Desarrollo Web en Entorno Cliente</td>
                    <td><?= (float)$notaCliente ?></td>
                </tr>
                <tr class="<?= $notaDespliegue >= 5 ? 'table-aprobado' : 'table-suspenso' ?>">
                    <td>Despliegue de Aplicaciones Web</td>
                    <td><?= (float)$notaDespliegue ?></td>
                </tr>
                <tr class="<?= $notaInterfaces >= 5 ? 'table-aprobado' : 'table-suspenso' ?>">
                    <td>Diseño de Interfaces Web</td>
                    <td><?= (float)$notaInterfaces?></td>
                </tr>
                <tr class="<?= $notaEmpresa >= 5 ? 'table-aprobado' : 'table-suspenso' ?>">
                    <td>Empresa e Iniciativa Emprendedora</td>
                    <td><?= (float)$notaEmpresa ?></td>
                </tr>
            </tbody>
        </table>

        <div class="resumen">
            <p><strong>Número de módulos suspensos:</strong> <?= $suspensos ?></p>
            <p><strong>Módulo con la nota más alta:</strong> <?= $moduloMasAltaNombre ?> (<?= (float)$moduloMasAltaNota ?>)</p>
            <p><strong>Módulo con la nota más baja:</strong> <?= $moduloMasBajaNombre ?> (<?= (float)$moduloMasBajaNota ?>)</p>
            <p><strong>Nota media:</strong> <?= (float)$media ?> - <?= $calificacion ?></p>
        </div>

        <div class="resultado <?= $claseResultado ?>">
            <?php if ($resultadoCurso === "Aprobado"): ?>
               Aprobado
            <?php elseif ($resultadoCurso === "Pendiente de recuperación"): ?>
                Pendiente de recuperación
            <?php else: ?>
                 Suspendido
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
