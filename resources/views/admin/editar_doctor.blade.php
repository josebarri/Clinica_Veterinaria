<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">

  <style  type="text/css">

      label{
          display: inline-block;
          width:200px;
      }


</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
   
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.barralateral')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div style="padding-top:50px; width:100%">
        @if(session()->has('message'))

<div  class="alert alert-success">

    <button type="" class="close" data-dismiss="alert">X</button>
       {{session()-> get ('message')}}

       </div>

  @endif
        
        <form  action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            

            <div style="margin: 15px;">

              <label> Nombre Veterinario</label>
              <input type="text"  style="color:black" name="nombre" value="{{$data->nombre}}">

            </div>

            <div style="margin: 15px;">

              <label> Telefono</label>
              <input type="number"  style="color:black" name="telefono" value="{{$data->telefono}}">

            </div>

            <div style="margin: 15px;">

              <label> Especialidad</label>

              <select name="especialidad" style="color: black;  width: 200px;" value="{{$data->especialidad}}">
                <option  >--seleccionar--</option>
                <option style="color: black;" value="cardiología">Cardiología</option>
                <option value="anestesiología">Anestesiología</option>
                <option value="cirugía">Cirugía</option>
                <option value="dermatología">Dermatología</option>

              </select>

            </div>

            <div style="margin: 15px;">

              <label> Consultorio</label>
              <input type="text"  style="color:black" name="consultorio" value="{{$data->consultorio}}">

            </div>

            <div style="margin: 15px;">

              <label> Imagen</label>
              <img  src="doctorimagen/{{$data->imagen}}" alt="" width="100px" height="100px">


            </div>
            <div style="margin: 15px;">

           <label> Cambio de imagen</label>
            <input type="file" name="file">

            </div>

            <div style="margin: 15px;">

              
              <input type="submit" class="btn btn-success"> <a  style="background-color:#00D9A5;" class="btn "   href="{{url('mostrar_doctor')}}">Cancelar</a>

            </div>


          </form>

  
        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    

    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
