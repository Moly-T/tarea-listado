<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Listado de productos</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    
        <!-- Masthead-->
        <header class="masthead" >
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Listado de Productos</h1>
                        <br>
                        <a class="btn btn-primary" href="#lista" id="botonMostrar">Revisar lista</a>
                    </div>
                </div>
            </div>
        </header>
          
        <!--Crud-->
        <section class="projects-section bg-light" id="lista" style="display:none">
            <div class="container px-4 px-lg-5">
            <div class="container">
  <h1>Productos</h1>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        
        <th colspan="2">Nombre de producto</th>
        <th>Descripción de Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
      <tr>
        <td><img src="{{$product->image}} " class="product-img"></td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->amount}}</td>
        
          <button type="button" class="btn btn-primary">Editar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </td>
      </tr>    
    @endforeach
    </tbody>
  </table>
  <button type="button" class="btn btn-secondary">Añadir</button>
</div>

      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/llll.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
