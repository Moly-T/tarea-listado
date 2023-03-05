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
        <td>
        <button type="button" class="btn btn-primary">Editar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </td>
      </tr>    
    </tbody>
    @endforeach
  </table>
 </div>

 <!--Modal Button-->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Añadir</button>

<!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('Listado.guardar')}}" method="POST">
        @csrf
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="description">Descripción</label>
    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="price">Precio</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>
      <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
    </div>
  </div>
  <div class="form-group">
    <label for="amount">Cantidad</label>
    <input type="number" class="form-control" id="amount" name="amount" min="1" required>
  </div>
  <div class="form-group">
    <label for="name">Link de Imagen</label>
    <input type="text" class="form-control" id="image" name="image" required>
  </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
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
