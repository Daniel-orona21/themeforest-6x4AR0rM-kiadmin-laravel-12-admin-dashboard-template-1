@extends('layout.master')
@section('title', 'Recibos')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">
    <!-- flatpickr css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datepikar/flatpickr.min.css')}}">
    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/jquery.dataTables.min.css')}}">
    <style>
        .dataTables_wrapper .dataTables_filter {
            display: none; /* Ocultamos el buscador original */
        }
        .filters-container {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 15px;
            flex-wrap: wrap;
        }
        .status-filter, .user-filter, .date-filter, .search-filter {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .status-filter select, .user-filter select {
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
            min-width: 150px;
        }
        .date-filter {
            position: relative;
            display: flex;
            gap: 8px;
        }
        .date-filter input {
            padding: 6px 12px;
            padding-right: 30px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
            width: 130px;
            cursor: pointer;
        }
        .date-filter i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6c757d;
        }
        .search-filter input {
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
            min-width: 200px;
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
            transition: all 0.3s ease;
        }
        .clear-filters:hover {
            background-color: #e9ecef;
            color: #495057;
        }
        .clear-filters i {
            font-size: 14px;
        }
        .modal-body .form-group {
            margin-bottom: 1rem;
        }
        .modal-body label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .app-datatable-default {
            box-shadow: none !important;
        }
        .download-btn {
            padding: 2px 8px;
            font-size: 12px;
            margin-left: 5px;
        }
        .date-group {
            position: relative;
        }
        .flatpickr-input {
            background-color: white !important;
        }

        /* Estilos para el recibo */
        .recibo-nomina {
            background-color: white;
            padding: 30px;
            font-family: 'Times New Roman', serif;
            font-size: 10pt;
            line-height: 1.3;
            color: black;
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 950px; /* Altura mínima para asegurar espacio */
        }

        .logo-empresa {
            text-align: center;
            margin-bottom: 20px;
            opacity: 0.15;
            position: absolute;
            left: 50%;
            top: 40%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        .logo-empresa img {
            max-width: 200px;
            height: auto;
        }

        .empresa-header {
            text-align: center;
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            padding-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .empresa-header h2 {
            font-size: 18pt;
            margin-bottom: 10px;
        }

        .empresa-datos-container {
            display: flex;
            justify-content: space-between;
            font-size: 9pt;
        }

        .empleado-periodo {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .empleado-info, .periodo-info {
            flex: 1;
            border: 1px solid black;
            padding: 10px;
        }

        .empleado-info h3, .periodo-info h3 {
            font-size: 10pt;
            text-align: center;
            border-bottom: 1px solid black;
            margin-bottom: 10px;
            padding-bottom: 5px;
        }

        .dato-item {
            display: flex;
            justify-content: space-between;
            font-size: 8pt;
            margin-bottom: 3px;
        }

        .percepciones-deducciones {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .percepciones-section, .deducciones-section {
            flex: 1;
            border: 1px solid black;
            padding: 10px;
        }

        .percepciones-section h3, .deducciones-section h3 {
            font-size: 10pt;
            text-align: center;
            border-bottom: 1px solid black;
            margin-bottom: 10px;
            padding-bottom: 5px;
        }

        .tabla-header {
            display: grid;
            grid-template-columns: 50px 30px 1fr 80px;
            gap: 5px;
            font-weight: bold;
            font-size: 8pt;
            border-bottom: 1px solid black;
            padding: 3px 0;
        }

        .tabla-row {
            display: grid;
            grid-template-columns: 50px 30px 1fr 80px;
            gap: 5px;
            font-size: 8pt;
            padding: 3px 0;
        }

        .totales-section {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            position: relative;
            z-index: 1;
        }

        .qr-section {
            width: 100px;
            height: 100px;
            border: 1px solid black;
        }
        .qr-section img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .totales {
            width: 200px;
        }

        .total-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .total-final {
            border-top: 2px solid black;
            margin-top: 10px;
            padding-top: 5px;
            font-weight: bold;
        }

        .firma-section {
            margin-top: auto; /* Empuja la firma al final */
            padding-top: 40px; /* Espacio arriba de la firma */
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .firma-linea {
            width: 200px;
            height: 1px;
            background-color: black;
            margin: 0 auto 5px;
        }

        .modal-dialog {
            max-width: 800px;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
        }

        .modal-header .btn-group {
            display: flex;
            gap: 10px;
        }

        .btn-download {
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .btn-download .button-text {
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .loading-spinner {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border: 2px solid #f3f3f3;
            border-top: 2px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
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
                        <i class="ph-duotone ph-receipt f-s-16"></i> Recibos
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

        <!-- Filters start -->
        <div class="filters-container">
            <div class="search-filter">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar...">
            </div>
            <div class="date-filter">
                <div class="date-group">
                    <input type="text" id="startDate" class="form-control" placeholder="Fecha inicial" readonly>
                    <i class="ti ti-calendar"></i>
                </div>
                <div class="date-group">
                    <input type="text" id="endDate" class="form-control" placeholder="Fecha final" readonly>
                    <i class="ti ti-calendar"></i>
                </div>
            </div>
            <div class="status-filter">
                <select id="statusFilter" class="form-select">
                    <option value="">Estado</option>
                    <option value="Visto">Visto</option>
                    <option value="Descargado">Descargado</option>
                    <option value="Pendiente">Pendiente</option>
                </select>
            </div>
            <div class="user-filter">
                <select id="userFilter" class="form-select">
                    <option value="">Usuario</option>
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
            <!-- Default Datatable start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Lista de Recibos</h5>
                            <p>Gestión completa de recibos del sistema.</p>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="recibosTable" class="display app-data-table default-data-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Usuario</th>
                                    <th>Nombre del recibo</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>12/02/2025</td>
                                    <td>Ana Gomez</td>
                                    <td>RANOVS2025-03-AED</td>
                                    <td><span class="badge text-light-success">Visto</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn b-r-4 view-btn">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary download-btn">
                                            <i class="ti ti-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>12/02/2025</td>
                                    <td>Juan Perez</td>
                                    <td>RE10MAE2025-03-ADD</td>
                                    <td><span class="badge text-light-danger">Descargado</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn b-r-4 view-btn">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary download-btn">
                                            <i class="ti ti-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td>12/02/2025</td>
                                    <td>Luis Lopez</td>
                                    <td>RO202FC2025-03-SED</td>
                                    <td><span class="badge text-light-warning">Pendiente</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn b-r-4 view-btn">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary download-btn">
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
            <!-- Default Datatable end -->
        </div>
        <!-- Data Table end -->
    </div>

    <!-- Modal para Ver Recibo -->
    <div class="modal fade" id="viewReceiptModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalle del Recibo</h5>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-download" id="downloadReceipt">
                            <span class="button-text">
                                <i class="ti ti-download"></i>
                                <span>Descargar PDF</span>
                            </span>
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="recibo-nomina" id="reciboParaImprimir">
                        <div class="logo-empresa">
                            <img src="{{asset('assets/images/logo/1.png')}}" alt="Logo empresa">
                        </div>
                        <div class="empresa-header">
                            <h2>FERRE BARNIEDO</h2>
                            <div class="empresa-datos-container">
                                <div class="empresa-datos">
                                    <span><strong>RFC:</strong> <span class="rfc-empresa">ABC000000AB0</span></span>
                                    <p><strong>Régimen fiscal:</strong> General de la ley personas morales</p>
                                    <p><strong>Lugar de expedición:</strong> 00000 Zapopan</p>
                                </div>
                                <div class="empresa-detalles">
                                    <span><strong>Reg Pat:</strong> A0000000000</span>
                                    <span><strong>Fecha:</strong> <span class="fecha-recibo"></span></span>
                                </div>
                            </div>
                        </div>

                        <div class="empleado-periodo">
                            <div class="empleado-info">
                                <h3>Información del Empleado</h3>
                                <div class="datos-empleado">
                                    <!-- Los datos se llenarán dinámicamente -->
                                </div>
                            </div>
                            <div class="periodo-info">
                                <h3>Información del Período</h3>
                                <div class="datos-periodo">
                                    <!-- Los datos se llenarán dinámicamente -->
                                </div>
                            </div>
                        </div>

                        <div class="percepciones-deducciones">
                            <div class="percepciones-section">
                                <h3>Percepciones</h3>
                                <div class="tabla-percepciones">
                                    <div class="tabla-header">
                                        <span>Agrup SAT</span>
                                        <span>No.</span>
                                        <span>Concepto</span>
                                        <span>Total</span>
                                    </div>
                                    <div class="percepciones-content">
                                        <!-- Los datos se llenarán dinámicamente -->
                                    </div>
                                </div>
                            </div>
                            <div class="deducciones-section">
                                <h3>Deducciones</h3>
                                <div class="tabla-deducciones">
                                    <div class="tabla-header">
                                        <span>Agrup SAT</span>
                                        <span>No.</span>
                                        <span>Concepto</span>
                                        <span>Total</span>
                                    </div>
                                    <div class="deducciones-content">
                                        <!-- Los datos se llenarán dinámicamente -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="totales-section">
                            <div class="qr-section">
                                <img src="{{asset('assets/images/qr.png')}}" alt="QR Code">
                            </div>
                            <div class="totales">
                                <!-- Los totales se llenarán dinámicamente -->
                            </div>
                        </div>

                        <div class="firma-section">
                            <div class="firma-linea"></div>
                            <span class="firma-texto">Firma del empleado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Data Table js-->
    <script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>
    <!-- flatpickr js-->
    <script src="{{asset('assets/vendor/datepikar/flatpickr.js')}}"></script>
    <!-- html2canvas and jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#recibosTable').DataTable({
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
                }
            });

            // Mover los filtros personalizados al lado del lengthMenu
            $('.dataTables_length').addClass('d-flex align-items-center gap-3');
            $('#recibosTable_wrapper .filters-container').detach().appendTo('.dataTables_length');

            // Búsqueda personalizada
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Inicializar flatpickr
            var startDatePicker = flatpickr("#startDate", {
                dateFormat: "d/m/Y",
                locale: "es",
                allowInput: true,
                onChange: function(selectedDates, dateStr, instance) {
                    filterByDateRange();
                }
            });

            var endDatePicker = flatpickr("#endDate", {
                dateFormat: "d/m/Y",
                locale: "es",
                allowInput: true,
                onChange: function(selectedDates, dateStr, instance) {
                    filterByDateRange();
                }
            });

            // Función para filtrar por rango de fechas
            function filterByDateRange() {
                table.draw();
            }

            // Crear una función personalizada de filtrado para las fechas
            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                var startDate = $('#startDate').val() ? new Date($('#startDate').val().split('/').reverse().join('-')) : null;
                var endDate = $('#endDate').val() ? new Date($('#endDate').val().split('/').reverse().join('-')) : null;
                
                if (!startDate && !endDate) return true;
                
                var dateStr = data[1];
                var dateParts = dateStr.split('/');
                var rowDate = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
                
                if (startDate && endDate) {
                    return rowDate >= startDate && rowDate <= endDate;
                } else if (startDate) {
                    return rowDate >= startDate;
                } else if (endDate) {
                    return rowDate <= endDate;
                }
                return true;
            });

            // Aplicar filtros cuando cambien los selects
            $('#statusFilter').on('change', function() {
                table.column(4).search($(this).val()).draw();
            });

            $('#userFilter').on('change', function() {
                table.column(2).search($(this).val()).draw();
            });

            // Limpiar todos los filtros
            $('#clearFilters').on('click', function() {
                // Limpiar búsqueda
                $('#searchInput').val('');
                table.search('').draw();
                
                // Limpiar fechas
                startDatePicker.clear();
                endDatePicker.clear();
                
                // Limpiar selects
                $('#statusFilter, #userFilter').val('');
                table.columns().search('').draw();
            });

            // Función para obtener los datos de la fila
            function getRowData($row) {
                return {
                    id: $row.find('td').eq(0).text(),
                    fecha: $row.find('td').eq(1).text(),
                    usuario: $row.find('td').eq(2).text(),
                    nombreRecibo: $row.find('td').eq(3).text(),
                    estado: $row.find('td').eq(4).find('.badge').text()
                };
            }

            // Función para mostrar el recibo
            function mostrarRecibo(data) {
                $('.fecha-recibo').text('31/ene/2025');

                // Llenar datos del empleado
                let empleadoHTML = `
                    <div class="dato-item">
                        <span class="label">Nombre:</span>
                        <span class="value">000 - Nombre Apellido ABC</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">RFC:</span>
                        <span class="value">ABCD000000AR</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">CURP:</span>
                        <span class="value">ABCD000000MNTAA00</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Fecha ini Relación lab:</span>
                        <span class="value">XX/XX/XXXX</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Jornada:</span>
                        <span class="value">01 xxxxxx</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">NSS:</span>
                        <span class="value">00000000000</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Tipo salario:</span>
                        <span class="value">Fijo</span>
                    </div>
                `;
                $('.datos-empleado').html(empleadoHTML);

                // Llenar datos del período
                let periodoHTML = `
                    <div class="dato-item">
                        <span class="label">Ejercicio:</span>
                        <span class="value">2025</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Período:</span>
                        <span class="value">1.01 Quincenal</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Fecha inicio:</span>
                        <span class="value">01/ene/2025</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Fecha fin:</span>
                        <span class="value">31/ene</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Días de pago:</span>
                        <span class="value">15</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Fecha de pago:</span>
                        <span class="value">31/ene/20</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Puesto:</span>
                        <span class="value">Puesto</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">Depto:</span>
                        <span class="value">Operacion</span>
                    </div>
                    <div class="dato-item">
                        <span class="label">SBC:</span>
                        <span class="value">$</span>
                    </div>
                `;
                $('.datos-periodo').html(periodoHTML);

                // Ejemplo de percepciones
                let percepcionesHTML = `
                    <div class="tabla-row">
                        <span>P 001</span>
                        <span>001</span>
                        <span>Sueldo</span>
                        <span>$0.00</span>
                    </div>
                `;
                $('.percepciones-content').html(percepcionesHTML);

                // Ejemplo de deducciones
                let deduccionesHTML = `
                    <div class="tabla-row">
                        <span>D 001</span>
                        <span>045</span>
                        <span>I.S.R.</span>
                        <span>$0.00</span>
                    </div>
                `;
                $('.deducciones-content').html(deduccionesHTML);

                // Llenar totales
                let totalesHTML = `
                    <div class="total-item">
                        <span class="label">Subtotal:</span>
                        <span class="value">$0.00</span>
                    </div>
                    <div class="total-item">
                        <span class="label">Descuentos:</span>
                        <span class="value">$0.00</span>
                    </div>
                    <div class="total-item">
                        <span class="label">Retenciones:</span>
                        <span class="value">$0.00</span>
                    </div>
                    <div class="total-item total-final">
                        <span class="label">Total:</span>
                        <span class="value">$0.00</span>
                    </div>
                `;
                $('.totales').html(totalesHTML);
            }

            // Función para convertir una imagen a base64
            function imageToBase64(src) {
                return new Promise((resolve, reject) => {
                    const img = new Image();
                    img.crossOrigin = 'Anonymous'; // Intenta evitar problemas de CORS
                    img.onload = () => {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
                        canvas.height = img.naturalHeight;
                        canvas.width = img.naturalWidth;
                        ctx.drawImage(img, 0, 0);
                        const dataURL = canvas.toDataURL('image/png');
                        resolve(dataURL);
                    };
                    img.onerror = (err) => {
                        console.error("Error al cargar la imagen:", src, err);
                        reject(err);
                    };
                    img.src = src;
                });
            }

            // Función que GENERA Y DESCARGA el PDF.
            async function generarYDescargarPDF() {
                console.log("Iniciando generación de PDF...");
                const element = document.getElementById('reciboParaImprimir');
                const originalImages = Array.from(element.querySelectorAll('img')).map(img => ({ el: img, src: img.src }));

                try {
                    // Pre-cargar y convertir todas las imágenes a base64
                    for (const imgData of originalImages) {
                        if (imgData.src.startsWith('data:')) continue; // Ya es base64
                        try {
                            console.log(`Convirtiendo imagen: ${imgData.src}`);
                            const dataUrl = await imageToBase64(imgData.src);
                            imgData.el.src = dataUrl;
                            console.log(`Imagen convertida exitosamente.`);
                        } catch (e) {
                            console.warn(`No se pudo convertir la imagen ${imgData.src} a base64.`, e);
                            // No detenemos el proceso, pero el PDF puede salir con una imagen rota.
                        }
                    }

                    // Pequeña pausa para asegurar que el DOM se actualice con las nuevas imágenes base64
                    await new Promise(resolve => setTimeout(resolve, 500));

                    const canvas = await html2canvas(element, {
                        scale: 2,
                        useCORS: true,
                        backgroundColor: '#ffffff'
                    });

                    const imgData = canvas.toDataURL('image/png');
                    const { jsPDF } = window.jspdf;
                    const pdf = new jsPDF({
                        orientation: 'portrait',
                        unit: 'mm',
                        format: 'a4'
                    });

                    const imgProps = pdf.getImageProperties(imgData);
                    const pdfWidth = pdf.internal.pageSize.getWidth();
                    const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;

                    pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                    pdf.save('recibo.pdf');
                    console.log("PDF guardado exitosamente.");

                } catch (error) {
                    console.error('Error detallado al generar PDF:', error);
                    alert('Error al generar el PDF. Por favor, revise la consola para más detalles.');
                    throw error;
                } finally {
                    // Restaurar las fuentes originales de las imágenes
                    originalImages.forEach(imgData => {
                        imgData.el.src = imgData.src;
                    });
                }
            }

            // Manejador de UI para la descarga
            async function handleDownloadClick(buttonElement) {
                const $button = $(buttonElement);
                const originalContent = $button.html();
                const isModalButton = $button.attr('id') === 'downloadReceipt';
                const $modal = $('#viewReceiptModal');

                // Mostrar estado de carga
                $button.prop('disabled', true);
                if (isModalButton) {
                    $button.find('.button-text').html('<span class="loading-spinner"></span><span>Generando PDF...</span>');
                } else {
                    $button.html('<span class="loading-spinner"></span>');
                }

                try {
                    // Si es un botón de fila, se necesita popular el recibo
                    // y asegurarse de que el modal esté "renderizable"
                    if (!isModalButton) {
                        const $row = $button.closest('tr');
                        const data = getRowData($row);
                        mostrarRecibo(data);

                        // Hacer el modal visible pero fuera de la pantalla para que se renderice
                        $modal.css({
                            position: 'absolute',
                            left: '-9999px',
                            display: 'block'
                        });
                        
                        // Esperar a que el DOM se actualice
                        await new Promise(resolve => setTimeout(resolve, 200)); 
                    }
                    
                    await generarYDescargarPDF();

                } catch (e) {
                    // El error ya se notifica en la función de generación
                } finally {
                    // Restaurar estado del botón
                    $button.prop('disabled', false);
                    $button.html(originalContent);

                    // Si no era el botón del modal, ocultar el modal de nuevo
                    if (!isModalButton) {
                        $modal.css({
                            position: '',
                            left: '',
                            display: ''
                        });
                    }
                }
            }

            // Event listeners
            $(document).on('click', '.view-btn', function() {
                var $row = $(this).closest('tr');
                var data = getRowData($row);
                mostrarRecibo(data);
                $('#viewReceiptModal').modal('show');
            });

            // Manejar clic en botón Descargar del MODAL
            $('#downloadReceipt').on('click', function() {
                handleDownloadClick(this);
            });

            // Manejar clic en botón Descargar de la TABLA
            $(document).on('click', 'table .download-btn', function() {
                handleDownloadClick(this);
            });
        });
    </script>
@endsection
 