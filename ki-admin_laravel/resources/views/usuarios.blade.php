@extends('layout.master')
@section('title', 'Usuarios')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">

    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/jquery.dataTables.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Usuarios</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-users f-s-16"></i> Usuarios
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Lista de Usuarios</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Breadcrumb end -->

        <!-- Data Table start -->
        <div class="row">
            <!-- Default Datatable start -->
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h5>Lista de Usuarios</h5>
                        <p>Gestión completa de usuarios del sistema. Puede buscar, filtrar y administrar todos los usuarios registrados.</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="example" class="display app-data-table default-data-table">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Fecha de Registro</th>
                                    <th>Último Acceso</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Juan Pérez</td>
                                    <td>juan.perez@email.com</td>
                                    <td><span class="badge text-light-primary">Administrador</span></td>
                                    <td><span class="badge text-light-success">Activo</span></td>
                                    <td>2024-01-15</td>
                                    <td>2024-12-19 10:30</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>María García</td>
                                    <td>maria.garcia@email.com</td>
                                    <td><span class="badge text-light-info">Editor</span></td>
                                    <td><span class="badge text-light-success">Activo</span></td>
                                    <td>2024-02-20</td>
                                    <td>2024-12-19 09:15</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Carlos López</td>
                                    <td>carlos.lopez@email.com</td>
                                    <td><span class="badge text-light-secondary">Usuario</span></td>
                                    <td><span class="badge text-light-warning">Pendiente</span></td>
                                    <td>2024-03-10</td>
                                    <td>2024-12-18 16:45</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ana Martínez</td>
                                    <td>ana.martinez@email.com</td>
                                    <td><span class="badge text-light-info">Editor</span></td>
                                    <td><span class="badge text-light-success">Activo</span></td>
                                    <td>2024-01-25</td>
                                    <td>2024-12-19 11:20</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luis Rodríguez</td>
                                    <td>luis.rodriguez@email.com</td>
                                    <td><span class="badge text-light-secondary">Usuario</span></td>
                                    <td><span class="badge text-light-danger">Inactivo</span></td>
                                    <td>2024-02-05</td>
                                    <td>2024-12-15 14:30</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sofía Herrera</td>
                                    <td>sofia.herrera@email.com</td>
                                    <td><span class="badge text-light-primary">Administrador</span></td>
                                    <td><span class="badge text-light-success">Activo</span></td>
                                    <td>2024-01-10</td>
                                    <td>2024-12-19 08:45</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Roberto Silva</td>
                                    <td>roberto.silva@email.com</td>
                                    <td><span class="badge text-light-secondary">Usuario</span></td>
                                    <td><span class="badge text-light-success">Activo</span></td>
                                    <td>2024-03-15</td>
                                    <td>2024-12-19 12:10</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Carmen Vega</td>
                                    <td>carmen.vega@email.com</td>
                                    <td><span class="badge text-light-info">Editor</span></td>
                                    <td><span class="badge text-light-warning">Pendiente</span></td>
                                    <td>2024-02-28</td>
                                    <td>2024-12-18 17:30</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Datatable end -->
        </div>
        <!-- Data Table end -->
    </div>
@endsection
@section('script')
    <!-- Data Table js-->
    <script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/data_table.js')}}"></script>
@endsection
