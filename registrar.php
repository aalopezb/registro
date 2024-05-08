<?php
include("conexion.php");

if(isset($_POST['register'])) {
    // Verifica que todos los campos del formulario estén completos
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        // Limpia los datos del formulario
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $direction = trim($_POST['direction']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);
        $fecha = date("Y-m-d"); 

        // Prepara la consulta SQL
        $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha)
                     VALUES('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
        
        // Ejecuta la consulta SQL
        $resultado = mysqli_query($conex, $consulta);

        // Verifica si la consulta fue exitosa
        if ($resultado) {
?>
            <h3 class="success">Registro completo</h3>
<?php
        } else {
?>
            <h3 class="error">Se ha producido un error</h3>
<?php
        }
    } else {
?>
        <h3 class="error">Se deben llenar todos los campos</h3>
<?php
    }
}
?>

