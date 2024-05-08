<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <ul>
        <?php
        // Conexión a la base de datos
        $mysqli = new mysqli("db", "root", "admin123", "task");

        // Verificar la conexión
        if ($mysqli->connect_error) {
            die("Error en la conexión a la base de datos: " . $mysqli->connect_error);
        }

        // Consulta a la base de datos
        $sql = "SELECT * FROM tasks";
        $result = $mysqli->query($sql);

        // Mostrar las tareas
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["task_name"] . "</li>";
            }
        } else {
            echo "No hay tareas.";
        }

        // Cerrar la conexión
        $mysqli->close();
        ?>
    </ul>
</body>
</html>