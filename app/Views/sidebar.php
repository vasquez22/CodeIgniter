<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
 <h3 class="w3-bar-item">Menu de Roles</h3>
 <a href="#" class="w3-bar-item w3-button">Agregar Roles</a>
 <a href="#" class="w3-bar-item w3-button">Modificar Roles</a>
 <a href="#" class="w3-bar-item w3-button">Eliminar Roles</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">
<div class="w3-container w3-teal">
 <h1>Pagina 1</h1>
</div>

<!--carusel de imagenes-->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/247791/pexels-photo-247791.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="https://images.pexels.com/photos/247791/pexels-photo-247791.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/1432680/pexels-photo-1432680.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="https://images.pexels.com/photos/1432680/pexels-photo-1432680.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="w3-container">
 <h2>Controles</h2>
 <p>Un controlador es simplemente un archivo de clase que maneja una solicitud HTTP.</p>
 <p>Cada controlador que cree debe extender de la clase BaseController.</p>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>