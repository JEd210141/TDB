<?php
namespace App\Controllers;

class ExportarBD extends BaseController
{
    public function exportar()
    {
        $db = \Config\Database::connect();

        // Nombre y ruta del archivo
        $rutaGuardar = 'C:\Users\PC\Desktop\blog.sql';
        $rutaActual = getcwd();
        chdir('../../../../../../Program Files/MySQL/MySQL Workbench 8.0 CE');
        $rutaModificada = getcwd();
        // Comando para exportar la base de datos
        $command = 'mysqldump -u root blog > "C:\Users\PC\Desktop\blog.sql"';
        // mysqldump -u root -p estudiantec > "C:\Users\PC\Desktop\estudiantec.sql"
        // Ejecutar el comando
        exec($command);
        echo "Se hizo la exportacion." . '<br>';
        echo 'De la Ruta: ' . $rutaActual . '<br>';
        echo 'Se envio a: ' . $rutaModificada . '<br>';
    }
}

//En el archivo de Routes.php, solo se manda a traer el controlador ExportarBD.php con la funcion exportar.
$routes->get('Controllers/ExportarBD', 'ExportarBD::exportar');
