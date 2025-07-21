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
        .filter-item select {
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
            min-width: 150px;
        }
        .date-group {
            position: relative;
        }
        .date-group input {
            width: 130px;
            cursor: pointer;
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
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
        .download-btn {
            padding: 2px 8px;
            font-size: 12px;
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
                <select id="userFilter" class="form-select">
                    <option value="">Usuario</option>
                    <option value="Luis Gomez">Luis Gomez</option>
                    <option value="Juan Perez">Juan Perez</option>
                    <option value="Luis Lopez">Luis Lopez</option>
                </select>
            </div>
            <div class="filter-item">
                <select id="statusFilter" class="form-select">
                    <option value="">Estatus</option>
                    <option value="Visto">Visto</option>
                    <option value="Descargado">Descargado</option>
                    <option value="Pendiente">Pendiente</option>
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
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Lista de Reportes</h5>
                            <p>Gestión y descarga de reportes del sistema.</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" id="exportExcelBtn">
                                <i class="ti ti-download"></i> Descargar XLS
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="reportesTable" class="display app-data-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Usuario</th>
                                    <th>Nombre del Reporte</th>
                                    <th>Estatus</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>11</td>
                                    <td>12/02/2025</td>
                                    <td>Luis Gomez</td>
                                    <td>RA100VS2025-03-AED</td>
                                    <td><span class="badge text-light-success">Visto</span></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>12/02/2025</td>
                                    <td>Juan Perez</td>
                                    <td>RE101AE2025-03-ADD</td>
                                    <td><span class="badge text-light-danger">Descargado</span></td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>12/02/2025</td>
                                    <td>Luis Lopez</td>
                                    <td>RO202FC2025-03-SED</td>
                                    <td><span class="badge text-light-warning">Pendiente</span></td>
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
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    
    <!-- flatpickr js-->
    <script src="{{asset('assets/vendor/datepikar/flatpickr.js')}}"></script>
    <script>
        $(document).ready(function() {
            var table = $('#reportesTable').DataTable({
                "dom": '<"top"l>t<"bottom"ip>',
                "language": {
                    "lengthMenu": "Mostrar _MENU_ resultados",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ resultados",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "buttons": [
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        title: 'Reporte de Sistema',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4 ] // Exporta todas las columnas visibles
                        }
                    }
                ]
            });

            // Mover los filtros personalizados al lado del lengthMenu
            $('.dataTables_length').addClass('d-flex align-items-center gap-3');
            $('#reportesTable_wrapper .filters-container').detach().appendTo('.dataTables_length');
            
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
                
                var dateParts = data[1].split('/'); // Columna de Fecha es ahora el índice 1
                var rowDate = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
                
                if (startDate && rowDate < startDate) return false;
                if (endDate && rowDate > endDate) return false;
                
                return true;
            });

            $('#userFilter').on('change', function() {
                table.column(2).search($(this).val()).draw(); // Columna de Usuario es ahora el índice 2
            });

            $('#statusFilter').on('change', function() {
                table.column(4).search($(this).val()).draw(); // Columna de Estatus es ahora el índice 4
            });

            $('#clearFilters').on('click', function() {
                startDatePicker.clear();
                endDatePicker.clear();
                $('#userFilter, #statusFilter').val('');
                table.columns().search('').draw();
            });

            // Trigger para el botón de exportación personalizado
            $('#exportExcelBtn').on('click', function() {
                // El botón de DataTables se crea pero está oculto. Lo disparamos con este clic.
                table.button('.buttons-excel').trigger();
            });

            $(document).on('click', '.download-btn', function() {
                var reportName = $(this).closest('tr').find('td').eq(3).text(); // Columna de Nombre es ahora el índice 3
                alert('Descargando: ' + reportName);
            });
        });
    </script>
@endsection
 