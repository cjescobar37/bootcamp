-- Crear la tabla tasks si no existe
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL
);

-- Insertar algunos datos de ejemplo
INSERT INTO tasks (task_name) VALUES
('Tarea 1'),
('Tarea 2'),
('Tarea 3');
