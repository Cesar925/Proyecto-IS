<?php
// Definir los parámetros de conexión
$conn = new mysqli("localhost", "root", "", "login","3306");
$conn -> set_charset("utf8");
// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta SQL para verificar el usuario
    $sql = "SELECT * FROM Usuarios WHERE user = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if ($result->num_rows > 0) {
        // Usuario autenticado, redirigir al usuario a la página principal
        header("Location: Principal/Principal.html");
        exit();
    } else {
        // Usuario no encontrado o credenciales incorrectas
        echo "Usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>
