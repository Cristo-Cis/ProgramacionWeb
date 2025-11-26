<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<?php 

    $librosA = $_POST['librosA'];
    $diasA = $_POST['diasA'];
    $entregoTodos = $_POST['entregoTodos'];

    $multaBase = 5;
    $recargoDiario = 2;
    $descuento = 0;
    $recargo = 0;

    switch ($entregoTodos) {
        case 'si':
            $descuento = ($multaBase * $librosA + $recargoDiario * $diasA * $librosA) * 0.20;
            break;
        case 'no':
            $descuento = 0;
            break;
    }

    if ($diasA >= 1){
        $cuotabase = $librosA * $multaBase;
        $recargo = $librosA * $diasA * $recargoDiario;
        $total = $cuotabase + $recargo - $descuento;
    }else{
        $cuotabase = $librosA * $multaBase;
        $descuento = $cuotabase * 0.20;
        $total = $cuotabase - $descuento;
    }
?>
<body>

    <div class="center-container">

        <div class="d-flex justify-content-center">

            <div class="card shadow custom-card">
                <div class="card-body">
                    <h4 class="card-title text-center">Datos de la multa</h4>
                    <p class="card-text text-center">
                        Tienes un descuento de: <strong>$<?php echo number_format($descuento, 2); ?></strong>
                    </p>
                    <p class="card-text text-center">
                        Tienes un recargo de: <strong>$<?php echo number_format($recargo, 2); ?></strong>
                        por que tienes <?php echo $diasA; ?> día/s de retraso
                    </p>
                    <p class="card-text text-center">
                        El total a pagar es: <strong>$<?php echo number_format($total, 2); ?></strong>
                </div>
            </div>
        </div>
    </div>



<?php include 'footer.php'; ?>