<?php ob_start();      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

    <title>PDF</title>
</head>
<style>
        *{
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;     
        }
      
            .m-logoo{
                width: 100%;
                height: 3.6rem;
                text-align: center;
                margin: auto, auto, 8%, auto;
            
            }
            .m-logo-s{
                width: 70%;
                height: 80px;
                text-align: center;
                margin-top: 1%;
                margin-left: 16%;
                margin-bottom: 1%;
            }
            .titlee{
                text-align: center;
                font-size: 17px;
                margin-bottom: 1%;
                font-weight: lighter;
                font-family:'Times New Roman', Times, serif;
            }
            
            .c-dta{
                width: 100%;
                min-height: 10%;
                margin: auto, auto, 1%, auto;
                display: block;
                background: #faf9f9;
            }
            .dta{
                display: inline-block;
                text-align: center;
                margin-bottom: 8px ;
                padding: 2px;

            }
            .d-1{
                font-size: 12px;
                font-weight: bold;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                display: inline-block;
                margin-left: 2%;
            
            }
            .r-d-1{
                font-size: 12px;
                font-weight: lighter;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                display: inline-block;
            }
            .d-2{
                font-size: 12px;
                font-weight: bold;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                display: inline-block;
                margin-left: 2%;
            
            }
            .r-d-2{
                font-size: 12px;
                font-weight: lighter;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                display: inline-block;
            }
            .line{
                border: 1px solid rgba(197, 197, 197, 0.664);
                margin-bottom: 1%;
            }
            .logoo-u{
                width: 80px;
                height: 80px;
                margin: 1%, auto, 1%, 1%;
            }
            .logoo-s{
                width: 80px;
                height: 80px;
                float: right;
            }
            .loo{
                margin-right: 1%;
            }
            .looo{
                margin-top: auto;
                margin-right: 2%;
                margin-bottom: 2%;
                margin-left: 85%;
                display: block;
            }
        </style>
<?php
include_once 'controller/functions.php';
$id = $_GET['id'];
$alumno = find($conn, 'representante', $id);
?>
<center><img  src="img/Captura.png" ></center>
<hr class="line">

<br><br>

<div class="c-dta">
    <div class="dta">
        <p class="d-1">NOMBRE COMPLETO:</p>
        <p class="r-d-1"><?php echo $alumno->nombre . ' ' . $alumno->apellido; ?>.</p>

        <p class="d-1">CEDULA:</p>
        <p class="r-d-1"><?php echo $alumno->cedula; ?>.</p>
    </div>
</div>

<div class="c-dta">
    <div class="dta">
        <p class="d-1">fECHA DE NACIMIENTO:</p>
        <p class="r-d-1"><?php echo $alumno->fecha; ?>.</p>

        <p class="d-1">ESTADO CIVIL:</p>
        <p class="r-d-1"><?php echo $alumno->civil; ?>.</p>

        <p class="d-1">PROFESION:</p>
        <p class="r-d-1"><?php echo $alumno->profesion; ?>.</p>
    </div>
</div>

<div class="c-dta">
    <div class="dta">
        <p class="d-1">TELEFONO:</p>
        <p class="r-d-1"><?php echo $alumno->numero_de_telefeno; ?>.</p>

        <p class="d-1">DIRECCION:</p>
        <p class="r-d-1"><?php echo $alumno->direccion; ?>.</p>

        <p class="d-1">LUGAR DONDE VIVE</p>
        <p class="r-d-1"><?php echo $alumno->lugar_donde_vive; ?>.</p>
    </div>
</div>

<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "PRUEBA.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>