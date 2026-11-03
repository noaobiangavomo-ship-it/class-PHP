<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Delicias</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #fffaf3;
            color: #333;
        }

        header, footer {
            background: #563b2e;
            color: white;
            text-align: center;
            padding: 25px;
        }

        main {
            max-width: 1100px;
            margin: auto;
            padding: 25px;
        }

        .platos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
        }

        .tarjeta {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 8px #ddd;
        }

        .tarjeta img {
            width: 100%;
            height: 170px;
            object-fit: cover;
        }

        .contenido {
            padding: 15px;
        }

        .precio {
            color: #a34f24;
            font-size: 20px;
            font-weight: bold;
        }

        .no-disponible {
            opacity: 0.55;
        }

        .etiqueta {
            background: #b3261e;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
        }

        .oferta {
            border: 2px solid #d89b36;
        }
    </style>
</head>
<body>

<header>
    <h1>Restaurante Delicias</h1>
    <p>Sabores que te hacen sentir en casa</p>
</header>