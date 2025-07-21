@extends('layout.master')
@section('title', 'Reportes')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">
    <!-- flatpickr css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datepikar/flatpickr.min.css')}}">
    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/jquery.dataTables.min.css')}}">
    <style>
        .filters-container {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 15px;
            flex-wrap: wrap;
        }
        .filter-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .filter-item select, .filter-item input {
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
        }
        .filter-item input[type="text"] {
             min-width: 200px;
        }
        .filter-item select {
            min-width: 150px;
        }
        .date-group {
            position: relative;
        }
        .date-group input {
            width: 130px;
            cursor: pointer;
            padding-right: 30px;
        }
        .date-group i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6c757d;
        }
        .clear-filters {
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f8f9fa;
            color: #6c757d;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .app-datatable-default {
            box-shadow: none !important;
        }
    </style>
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
                            <span><i class="ph-duotone ph-chart-bar f-s-16"></i> Reportes</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Lista de Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Filters start -->
        <div class="filters-container">
            <div class="filter-item">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar...">
            </div>
            <div class="filter-item date-filter">
                <div class="date-group">
                    <input type="text" id="startDate" class="form-control" placeholder="Fecha inicial" readonly>
                    <i class="ti ti-calendar"></i>
                </div>
                <div class="date-group">
                    <input type="text" id="endDate" class="form-control" placeholder="Fecha final" readonly>
                    <i class="ti ti-calendar"></i>
                </div>
            </div>
            <div class="filter-item">
                <select id="typeFilter" class="form-select">
                    <option value="">Tipo de Reporte</option>
                    <option value="Ventas">Ventas</option>
                    <option value="Inventario">Inventario</option>
                    <option value="Financiero">Financiero</option>
                </select>
            </div>
            <div class="filter-item">
                <select id="userFilter" class="form-select">
                    <option value="">Generado por</option>
                    <option value="Ana Gomez">Ana Gomez</option>
                    <option value="Juan Perez">Juan Perez</option>
                    <option value="Luis Lopez">Luis Lopez</option>
                </select>
            </div>
            <button type="button" class="clear-filters" id="clearFilters">
                <i class="ti ti-filter-off"></i>
                Limpiar filtros
            </button>
        </div>
        <!-- Filters end -->

        <!-- Data Table start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Lista de Reportes</h5>
                        <p>Gestión y descarga de reportes del sistema.</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="reportesTable" class="display app-data-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre del Reporte</th>
                                    <th>Fecha de Generación</th>
                                    <th>Generado Por</th>
                                    <th>Tipo</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>REP-001</td>
                                    <td>Reporte de Ventas Mensual</td>
                                    <td>15/02/2025</td>
                                    <td>Ana Gomez</td>
                                    <td><span class="badge text-light-primary">Ventas</span></td>
                                    <td>
                                        <button type="button" class="btn btn-primary icon-btn b-r-4 download-btn">
                                            <i class="ti ti-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REP-002</td>
                                    <td>Reporte de Inventario Semanal</td>
                                    <td>14/02/2025</td>
                                    <td>Juan Perez</td>
                                    <td><span class="badge text-light-info">Inventario</span></td>
                                    <td>
                                        <button type="button" class="btn btn-primary icon-btn b-r-4 download-btn">
                                            <i class="ti ti-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REP-003</td>
                                    <td>Cierre Financiero Anual</td>
                                    <td>12/02/2025</td>
                                    <td>Luis Lopez</td>
                                    <td><span class="badge text-light-success">Financiero</span></td>
                                    <td>
                                        <button type="button" class="btn btn-primary icon-btn b-r-4 download-btn">
                                            <i class="ti ti-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data Table end -->
    </div>
@endsection

@section('script')
    <!-- Data Table js-->
    <script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>
    <!-- flatpickr js-->
    <script src="{{asset('assets/vendor/datepikar/flatpickr.js')}}"></script>
    <script>
        $(document).ready(function() {
            var table = $('#reportesTable').DataTable({
                "dom": 't<"bottom"ip>',
                "language": {
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });

            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });

            var startDatePicker = flatpickr("#startDate", {
                dateFormat: "d/m/Y",
                locale: "es",
                onChange: function() { table.draw(); }
            });

            var endDatePicker = flatpickr("#endDate", {
                dateFormat: "d/m/Y",
                locale: "es",
                onChange: function() { table.draw(); }
            });

            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                var startDate = $('#startDate').val() ? new Date($('#startDate').val().split('/').reverse().join('-')) : null;
                var endDate = $('#endDate').val() ? new Date($('#endDate').val().split('/').reverse().join('-')) : null;
                
                if (!startDate && !endDate) return true;
                
                var dateParts = data[2].split('/');
                var rowDate = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
                
                if (startDate && rowDate < startDate) return false;
                if (endDate && rowDate > endDate) return false;
                
                return true;
            });

            $('#typeFilter').on('change', function() {
                table.column(4).search($(this).val()).draw();
            });

            $('#userFilter').on('change', function() {
                table.column(3).search($(this).val()).draw();
            });

            $('#clearFilters').on('click', function() {
                $('#searchInput').val('');
                startDatePicker.clear();
                endDatePicker.clear();
                $('#typeFilter, #userFilter').val('');
                table.search('').columns().search('').draw();
            });

            $(document).on('click', '.download-btn', function() {
                var reportName = $(this).closest('tr').find('td').eq(1).text();
                alert('Descargando: ' + reportName);
            });
        });
    </script>
@endsection
 