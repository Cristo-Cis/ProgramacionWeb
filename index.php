<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>


<body>

    <div class="center-container">

        <div class="d-flex justify-content-center">

            <div class="card shadow custom-card">
                <div class="card-body">
                    <h4 class="card-title text-center">Bienvenid@ al sistema</h4>
                    <p class="card-text">
                        <strong>Multa base:</strong> $5 por libro <br>
                        <strong>Recargo:</strong> $2 por día de retraso por libro <br>
                        <strong>Descuento:</strong> 20% si devuelve todos los libros el mismo día
                    </p>
                </div>
            </div>
            <form action="calcular.php" method="POST" class="ms-4">
            <div class="card shadow custom-card">
                <div class="card-body">
                    <h4 class="card-title text-center">Toma de datos</h4>

                    <label>Libros atrasados:</label>
                    <input type="number" name="librosA" class="form-control mb-2" required>

                    <label>Dias de retraso:</label>
                    <input type="number" name="diasA" class="form-control mb-2" required>

                    <label>¿Entrego todos los libros el mismo dia?</label>
                    <select name="entregoTodos" class="form-select mb-2" required>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3 w-100">Calcular multa</button>
                </div>
            </div>
            </form>

        </div>
    </div>

<?php include 'footer.php'; ?>