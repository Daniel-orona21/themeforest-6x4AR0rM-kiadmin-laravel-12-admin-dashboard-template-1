@extends('layout.master')
@section('title', 'Reportes')
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
                <h4 class="main-title">Reportes</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-chart-bar f-s-16"></i> Reportes
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Lista de Reportes</a>
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
                        <h5>Lista de Reportes</h5>
                        <p>Gestión completa de reportes del sistema. Puede buscar, filtrar y administrar todos los reportes generados.</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="example" class="display app-data-table default-data-table">
                                <thead>
                                <tr>
                                    <th>ID del Reporte</th>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Generado Por</th>
                                    <th>Estado</th>
                                    <th>Fecha de Generación</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>REP-2024-001</td>
                                    <td>Reporte de Ventas Mensual</td>
                                    <td><span class="badge text-light-primary">Ventas</span></td>
                                    <td>Juan Pérez</td>
                                    <td><span class="badge text-light-success">Completado</span></td>
                                    <td>2024-12-15 10:30</td>
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
                                    <td>REP-2024-002</td>
                                    <td>Análisis de Usuarios</td>
                                    <td><span class="badge text-light-info">Usuarios</span></td>
                                    <td>María García</td>
                                    <td><span class="badge text-light-warning">En Proceso</span></td>
                                    <td>2024-12-16 14:15</td>
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
                                    <td>REP-2024-003</td>
                                    <td>Reporte Financiero Q4</td>
                                    <td><span class="badge text-light-secondary">Financiero</span></td>
                                    <td>Carlos López</td>
                                    <td><span class="badge text-light-success">Completado</span></td>
                                    <td>2024-12-17 09:45</td>
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
                                    <td>REP-2024-004</td>
                                    <td>Estadísticas de Productos</td>
                                    <td><span class="badge text-light-warning">Productos</span></td>
                                    <td>Ana Martínez</td>
                                    <td><span class="badge text-light-danger">Error</span></td>
                                    <td>2024-12-18 16:20</td>
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
                                    <td>REP-2024-005</td>
                                    <td>Reporte de Inventario</td>
                                    <td><span class="badge text-light-dark">Inventario</span></td>
                                    <td>Luis Rodríguez</td>
                                    <td><span class="badge text-light-success">Completado</span></td>
                                    <td>2024-12-19 11:30</td>
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
                                    <td>REP-2024-006</td>
                                    <td>Análisis de Marketing</td>
                                    <td><span class="badge text-light-info">Marketing</span></td>
                                    <td>Sofía Herrera</td>
                                    <td><span class="badge text-light-warning">En Proceso</span></td>
                                    <td>2024-12-20 08:45</td>
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
                                    <td>REP-2024-007</td>
                                    <td>Reporte de Recursos Humanos</td>
                                    <td><span class="badge text-light-primary">RRHH</span></td>
                                    <td>Roberto Silva</td>
                                    <td><span class="badge text-light-success">Completado</span></td>
                                    <td>2024-12-21 13:20</td>
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
                                    <td>REP-2024-008</td>
                                    <td>Análisis de Competencia</td>
                                    <td><span class="badge text-light-secondary">Competencia</span></td>
                                    <td>Carmen Vega</td>
                                    <td><span class="badge text-light-warning">En Proceso</span></td>
                                    <td>2024-12-22 15:10</td>
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
 