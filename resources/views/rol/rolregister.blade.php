

 <title>Admin </title>
 <!-- Tailwind CSS Link -->
 <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-80 text-gray-700">
    <nav class="flex py-2 bg-blue-500 text-white">  <!-- linea verde de arriba -->
      <div class="w-1/2 px-11 mr-auto">  <!-- texto izquierda -->
        <p class="text-2xl font-bold">SISTEMA </p> <!-- escribe el titulo -->

      </div>


 <!--##############################################-->

        <!-- Custom fonts for this template-->
        <link href="{{asset('bsadmin/vendor/fontawesome-free/css/all.min.css  ')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template-->
        <link href=" {{asset('bsadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    
          <!-- Custom styles for this page -->
    <link href="{{asset('bsadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <!--##############################################-->




<!-- AQUI INICIA LAS OPCIONES SUPERIORES   #####################################################################################-->

      <ul class="w-1/2 px-12 ml-auto flex justify-end pt-1"> <!-- texto derecha -->
       @if(auth()->check()) 
       <li class="mx-6">
         <p class="text-xl">USUARIO: <b>{{ auth()->user()->name}}</b></p>
      </li>

        <li>
          <a href="{{route('login.destroy')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-green-700">Logout</a> <!-- texto para login con link al register -->
        </li>
        @else
        <li class="mx-6">
          <a href="{{route('login.index')}}" class="font-semibold hover:bg-green-700 py-3 px-4 rounded-md">Login</a>  <!-- texto para login con link al login -->
        </li>

        <li>
          <a href="{{route('register.index')}}" class="font-semibold border-2 border-green py-2 px-4 rounded-md hover:bg-green hover:text-green-700">Register</a> <!-- texto para login con link al register -->
        </li>
      </ul>
      @endif

    </nav>
  </body>

<div>

    <h1 class="text-3xl text-center font-bold">Lista de Roles</h1>


     <a href="{{route('admin.crearrol')}}" class="mx-2 font-semibold border-2 border-blue py-2 px-8 pt-1 h-10 rounded-md hover:bg-white hover:text-blue-700">Crear</a>
 
     


    </div>
 
    
   
  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>



                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>

        <!--############################################33#######-->
        @foreach($rols as $row)
        <tr>
                <td class="py-3 px-6">{{$row->id}}</td>
                <td class="p-3">{{$row->descripcion}}</td>
              
                <td class="p-3">
                    <a href="{{route('admin.destroyroles', $row->id)}}" class="text-black font-semibold border-2 border-red-500 py-3 px-8 pt-1 h-10 rounded-md hover:bg-red-500 hover:text-white">Borrar</a>
                    <a href="{{route('admin.editRol', $row->id)}}" class="text-black font-semibold border-2 border-blue-500 py-3 px-8 pt-1 h-10 rounded-md hover:bg-blue-500 hover:text-white">Editar</a>
  
                </td>
              </tr>
              @endforeach  
          <!--################################3#######-->              
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
    
          <!--##############################################-->

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('bsadmin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('bsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
        <!-- Core plugin JavaScript-->
    <script src="{{asset('bsadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="{{asset('bsadmin/js/sb-admin-2.min.js')}}"></script>
    
          <!-- Page level plugins -->
    <script src="{{asset('bsadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bsadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
        <!-- Page level custom scripts -->
    <script src="{{asset('bsadmin/js/demo/datatables-demo.js')}}"></script>
    
              <!--##############################################-->