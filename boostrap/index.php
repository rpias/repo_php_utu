<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Probando Boostrap</title>
</head>

<body  style="background-image: url('../img/carousel_1/3.jpg');">

    <div class="container w-75">

        <div class="row">
            
            <div class="col-2">
                <img src="../img/carousel_1/3.jpg" class="d-block w-100" alt="Tercera Imágen">
            </div>
            
            <div class="col-2">
                <img src="../img/carousel_1/3.jpg" class="d-block w-100" alt="Tercera Imágen">
            </div>

            <div class="col-2">
                <img src="../img/carousel_1/3.jpg" class="d-block w-100" alt="Tercera Imágen">
            </div>

            <div class="col-4">
                <img src="../img/carousel_1/3.jpg" class="d-block w-100" alt="Tercera Imágen">
            </div>
           
        </div>

        <div class="row"> &nbsp; &nbsp; </div>


        <!-- Fila: para cada fila puedo incluir hasta 12 col -->
        <div class="row">

            <!-- Columnas -->
            <div class="col">
                <label for="txt_cedula" class="form-label">Cédula</label>
                <input type="number" class="form-control" id="txt_cedula" 
                name="txt_cedula" placeholder="Ej.: 192459555">
            </div>

            <div class="col">
                <label for="txt_cedula" class="form-label">Credencial Serie</label>
                <input type="number" class="form-control" id="txt_cedula" placeholder="Ej.: 192459555">
            </div>

            <div class="col">
                <label for="txt_cedula" class="form-label">Credencial Nro.</label>
                <input type="number" class="form-control" id="txt_cedula" placeholder="Ej.: 192459555">
            </div>



        </div>

        <div class="row"> &nbsp; &nbsp; </div>

        <div class="row">

            <div class="col">
                <label for="txt_primer_nombre" class="form-label">Primer Nombre</label>
                <input type="text" class="form-control" id="txt_primer_nombre" placeholder="Ingrese primer nombre">
            </div>

            <div class="col">
                <label for="txt_segundo_nombre" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" id="txt_segundo_nombre" placeholder="Ingrese segundo nombre">
            </div>

            <div class="col">
                <label for="txt_primer_apellido" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="txt_primer_apellido" placeholder="Ingrese primer apellido">
            </div>

            <div class="col">
                <label for="txt_segundo_apellido" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" id="txt_segundo_apellido" placeholder="Ingrese segundo apellido">
            </div>

        </div>

        <div class="row"> &nbsp; &nbsp; </div>

        <div class="row">

            <div class="col">
                <label class="form-label">Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Femenino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Masculino
                    </label>
                </div>
            </div>

            <div class="col">

                <label for="cbo_estado_civil" class="form-label">Estado Civil</label>
                <select id="cbo_estado_civil" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="row"> &nbsp; &nbsp; </div>

        <div class="row">

            <div class="col">
                <button type="button" class="btn btn-primary">Primary</button>
            </div>

        </div>
    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>