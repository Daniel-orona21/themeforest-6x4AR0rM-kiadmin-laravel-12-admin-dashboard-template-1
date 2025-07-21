@extends('layout.master')
@section('title', 'Recibos')
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
                <h4 class="main-title">Recibos</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-receipt f-s-16"></i> Recibos
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Lista de Recibos</a>
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
                        <h5>Lista de Recibos</h5>
                        <p>Gestión completa de recibos del sistema. Puede buscar, filtrar y administrar todos los recibos generados.</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="example" class="display app-data-table default-data-table">
                                <thead>
                                <tr>
                                    <th>Número de Recibo</th>
                                    <th>Cliente</th>
                                    <th>Concepto</th>
                                    <th>Monto</th>
                                    <th>Estado</th>
                                    <th>Fecha de Emisión</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>REC-2024-001</td>
                                    <td>Juan Pérez</td>
                                    <td>Servicio de Consultoría</td>
                                    <td>$1,500.00</td>
                                    <td><span class="badge text-light-success">Pagado</span></td>
                                    <td>2024-12-15</td>
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
                                    <td>REC-2024-002</td>
                                    <td>María García</td>
                                    <td>Desarrollo de Software</td>
                                    <td>$3,200.00</td>
                                    <td><span class="badge text-light-warning">Pendiente</span></td>
                                    <td>2024-12-16</td>
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
                                    <td>REC-2024-003</td>
                                    <td>Carlos López</td>
                                    <td>Mantenimiento Web</td>
                                    <td>$800.00</td>
                                    <td><span class="badge text-light-success">Pagado</span></td>
                                    <td>2024-12-17</td>
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
                                    <td>REC-2024-004</td>
                                    <td>Ana Martínez</td>
                                    <td>Diseño Gráfico</td>
                                    <td>$1,200.00</td>
                                    <td><span class="badge text-light-danger">Vencido</span></td>
                                    <td>2024-12-10</td>
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
                                    <td>REC-2024-005</td>
                                    <td>Luis Rodríguez</td>
                                    <td>Hosting y Dominio</td>
                                    <td>$450.00</td>
                                    <td><span class="badge text-light-success">Pagado</span></td>
                                    <td>2024-12-18</td>
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
                                    <td>REC-2024-006</td>
                                    <td>Sofía Herrera</td>
                                    <td>Capacitación</td>
                                    <td>$2,100.00</td>
                                    <td><span class="badge text-light-warning">Pendiente</span></td>
                                    <td>2024-12-19</td>
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
                                    <td>REC-2024-007</td>
                                    <td>Roberto Silva</td>
                                    <td>Auditoría de Sistemas</td>
                                    <td>$1,800.00</td>
                                    <td><span class="badge text-light-success">Pagado</span></td>
                                    <td>2024-12-14</td>
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
                                    <td>REC-2024-008</td>
                                    <td>Carmen Vega</td>
                                    <td>SEO y Marketing</td>
                                    <td>$950.00</td>
                                    <td><span class="badge text-light-warning">Pendiente</span></td>
                                    <td>2024-12-20</td>
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
