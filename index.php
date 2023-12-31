<?php
    
    require_once 'Empleado.php';
    $Empleado1 = new Empleado("Jose Alberto", "Quiñones", 2000);

    echo $Empleado1->getInfo();
    echo "Nombre completo: " . $Empleado1->obtenerNombreCompleto() . "<br>";
    echo "Salario actual: $" . $Empleado1->obtenerSalario() . "<br>";
    echo "Bonificación: $" . $Empleado1->calcularBonificacion() . "<br>";



    $gerente1 = new Gerente("María", "Gómez", 60000, "Gerente de Ventas");

    echo $gerente1->getInfo();
    echo "Bonificación: $" . $gerente1->calcularBonificacion() . "<br>";
    echo "Cargo: " . $gerente1->obtenerCargo() . "<br>";
    
    

?>