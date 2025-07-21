@extends('layout.master')
@section('title', 'Usuarios')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">

    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/jquery.dataTables.min.css')}}">
    <style>
        .dataTables_wrapper .dataTables_filter {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .status-filter {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .status-filter select {
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
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
    </style>
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
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Lista de Usuarios</h5>
                            <p>Gestión completa de usuarios del sistema.</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                                <i class="ti ti-plus"></i> Crear Usuario
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="usuariosTable" class="display app-data-table default-data-table">
                                <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Correo electrónico</th>
                                    <th>Departamento</th>
                                    <th>Rol</th>
                                    <th>Sucursal</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Juan Pérez</td>
                                    <td>jpe@gmail.com</td>
                                    <td>Legal</td>
                                    <td><span class="badge text-light-primary">Administrador</span></td>
                                    <td>Mendoza</td>
                                    <td><span class="badge text-light-success">Activo</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn b-r-4 view-btn">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4 edit-btn">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Elisa López</td>
                                    <td>elo@gmail.com</td>
                                    <td>Finanzas</td>
                                    <td><span class="badge text-light-info">Supervisor</span></td>
                                    <td>Ecolepec</td>
                                    <td><span class="badge text-light-success">Activo</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn b-r-4 view-btn">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4 edit-btn">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luis Gómez</td>
                                    <td>lgo@gmail.com</td>
                                    <td>Operaciones</td>
                                    <td><span class="badge text-light-warning">Director</span></td>
                                    <td>San Luis Potos</td>
                                    <td><span class="badge text-light-success">Activo</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn b-r-4 view-btn">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4 edit-btn">
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

    <!-- Modal para Crear Usuario -->
    <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createUserModalLabel">Crear Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="createUserForm">
                        <div class="form-group">
                            <label for="userName">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="userName" required>
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Correo Electrónico</label>
                            <input type="email" class="form-control" id="userEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="userDepartment">Departamento</label>
                            <select class="form-control" id="userDepartment" required>
                                <option value="">Seleccionar Departamento</option>
                                <option value="Legal">Legal</option>
                                <option value="Finanzas">Finanzas</option>
                                <option value="Operaciones">Operaciones</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userRole">Rol</label>
                            <select class="form-control" id="userRole" required>
                                <option value="">Seleccionar Rol</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Director">Director</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userBranch">Sucursal</label>
                            <select class="form-control" id="userBranch" required>
                                <option value="">Seleccionar Sucursal</option>
                                <option value="Mendoza">Mendoza</option>
                                <option value="Ecolepec">Ecolepec</option>
                                <option value="San Luis Potos">San Luis Potos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userStatus">Estado</label>
                            <select class="form-control" id="userStatus" required>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                                <option value="Pendiente">Pendiente</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="saveUser">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Ver Usuario -->
    <div class="modal fade" id="viewUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalles del Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="user-details">
                        <!-- Los detalles se llenarán dinámicamente -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Editar Usuario -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editUserForm">
                        <!-- Los campos se llenarán dinámicamente -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="updateUser">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Data Table js-->
    <script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Inicializar DataTable
            var table = $('#usuariosTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "destroy": true // Esto permite reinicializar la tabla
            });

            // Agregar el filtro de estado al DOM
            $('.dataTables_filter').append(`
                <div class="status-filter">
                    <label>Estado:</label>
                    <select id="statusFilter" class="form-select">
                        <option value="">Todos</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                        <option value="Pendiente">Pendiente</option>
                    </select>
                </div>
            `);

            // Aplicar filtro cuando cambie el select
            $('#statusFilter').on('change', function() {
                var status = $(this).val();
                table.column(5).search(status).draw();
            });

            // Función para obtener los datos de la fila
            function getRowData($row) {
                return {
                    nombre: $row.find('td').eq(0).text(),
                    email: $row.find('td').eq(1).text(),
                    departamento: $row.find('td').eq(2).text(),
                    rol: $row.find('td').eq(3).find('.badge').text(),
                    sucursal: $row.find('td').eq(4).text(),
                    estado: $row.find('td').eq(5).find('.badge').text()
                };
            }

            // Manejar clic en botón Ver
            $(document).on('click', '.view-btn', function() {
                var $row = $(this).closest('tr');
                var data = getRowData($row);
                
                var detailsHtml = `
                    <div class="mb-3">
                        <strong>Nombre:</strong> ${data.nombre}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> ${data.email}
                    </div>
                    <div class="mb-3">
                        <strong>Departamento:</strong> ${data.departamento}
                    </div>
                    <div class="mb-3">
                        <strong>Rol:</strong> ${data.rol}
                    </div>
                    <div class="mb-3">
                        <strong>Sucursal:</strong> ${data.sucursal}
                    </div>
                    <div class="mb-3">
                        <strong>Estado:</strong> ${data.estado}
                    </div>
                `;
                
                $('.user-details').html(detailsHtml);
                $('#viewUserModal').modal('show');
            });

            // Manejar clic en botón Editar
            $(document).on('click', '.edit-btn', function() {
                var $row = $(this).closest('tr');
                var data = getRowData($row);
                
                var formHtml = `
                    <div class="form-group mb-3">
                        <label>Nombre de Usuario</label>
                        <input type="text" class="form-control" name="editUserName" value="${data.nombre}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Correo Electrónico</label>
                        <input type="email" class="form-control" name="editUserEmail" value="${data.email}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Departamento</label>
                        <select class="form-control" name="editUserDepartment" required>
                            <option value="Legal" ${data.departamento === 'Legal' ? 'selected' : ''}>Legal</option>
                            <option value="Finanzas" ${data.departamento === 'Finanzas' ? 'selected' : ''}>Finanzas</option>
                            <option value="Operaciones" ${data.departamento === 'Operaciones' ? 'selected' : ''}>Operaciones</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Rol</label>
                        <select class="form-control" name="editUserRole" required>
                            <option value="Administrador" ${data.rol === 'Administrador' ? 'selected' : ''}>Administrador</option>
                            <option value="Supervisor" ${data.rol === 'Supervisor' ? 'selected' : ''}>Supervisor</option>
                            <option value="Director" ${data.rol === 'Director' ? 'selected' : ''}>Director</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Sucursal</label>
                        <select class="form-control" name="editUserBranch" required>
                            <option value="Mendoza" ${data.sucursal === 'Mendoza' ? 'selected' : ''}>Mendoza</option>
                            <option value="Ecolepec" ${data.sucursal === 'Ecolepec' ? 'selected' : ''}>Ecolepec</option>
                            <option value="San Luis Potos" ${data.sucursal === 'San Luis Potos' ? 'selected' : ''}>San Luis Potos</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Estado</label>
                        <select class="form-control" name="editUserStatus" required>
                            <option value="Activo" ${data.estado === 'Activo' ? 'selected' : ''}>Activo</option>
                            <option value="Inactivo" ${data.estado === 'Inactivo' ? 'selected' : ''}>Inactivo</option>
                            <option value="Pendiente" ${data.estado === 'Pendiente' ? 'selected' : ''}>Pendiente</option>
                        </select>
                    </div>
                `;
                
                $('#editUserForm').html(formHtml);
                $('#editUserModal').modal('show');
                
                // Guardar referencia a la fila que se está editando
                $('#editUserModal').data('editingRow', $row);
            });

            // Manejar actualización de usuario
            $('#updateUser').click(function() {
                if (!$('#editUserForm')[0].checkValidity()) {
                    $('#editUserForm')[0].reportValidity();
                    return;
                }

                var $row = $('#editUserModal').data('editingRow');
                var formData = {
                    nombre: $('input[name="editUserName"]').val(),
                    email: $('input[name="editUserEmail"]').val(),
                    departamento: $('select[name="editUserDepartment"]').val(),
                    rol: $('select[name="editUserRole"]').val(),
                    sucursal: $('select[name="editUserBranch"]').val(),
                    estado: $('select[name="editUserStatus"]').val()
                };

                // Actualizar la fila en la tabla
                var roleClass = getRoleClass(formData.rol);
                var statusClass = formData.estado === 'Activo' ? 'success' : 'warning';
                
                table.row($row).data([
                    formData.nombre,
                    formData.email,
                    formData.departamento,
                    `<span class="badge ${roleClass}">${formData.rol}</span>`,
                    formData.sucursal,
                    `<span class="badge text-light-${statusClass}">${formData.estado}</span>`,
                    $row.find('td:last').html() // Mantener los botones de acción
                ]).draw();

                $('#editUserModal').modal('hide');
            });

            // Manejar clic en botón Eliminar
            $(document).on('click', '.delete-btn', function() {
                if (confirm('¿Está seguro de que desea eliminar este usuario?')) {
                    var $row = $(this).closest('tr');
                    table.row($row).remove().draw();
                }
            });

            // Manejar la creación de usuario
            $('#saveUser').click(function() {
                if (!$('#createUserForm')[0].checkValidity()) {
                    $('#createUserForm')[0].reportValidity();
                    return;
                }

                var userName = $('#userName').val();
                var userEmail = $('#userEmail').val();
                var userDepartment = $('#userDepartment').val();
                var userRole = $('#userRole').val();
                var userBranch = $('#userBranch').val();
                var userStatus = $('#userStatus').val();

                // Crear el nuevo registro en la tabla
                var roleClass = getRoleClass(userRole);
                var newRow = table.row.add([
                    userName,
                    userEmail,
                    userDepartment,
                    `<span class="badge ${roleClass}">${userRole}</span>`,
                    userBranch,
                    `<span class="badge text-light-${userStatus === 'Activo' ? 'success' : 'warning'}">${userStatus}</span>`,
                    `<button type="button" class="btn btn-light-primary icon-btn b-r-4 view-btn">
                        <i class="ti ti-eye"></i>
                    </button>
                    <button type="button" class="btn btn-light-success icon-btn b-r-4 edit-btn">
                        <i class="ti ti-edit text-success"></i>
                    </button>
                    <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                        <i class="ti ti-trash"></i>
                    </button>`
                ]).draw();

                // Limpiar el formulario y cerrar el modal
                $('#createUserForm')[0].reset();
                $('#createUserModal').modal('hide');
            });

            // Función auxiliar para determinar la clase del badge según el rol
            function getRoleClass(role) {
                switch(role) {
                    case 'Administrador':
                        return 'text-light-primary';
                    case 'Supervisor':
                        return 'text-light-info';
                    case 'Director':
                        return 'text-light-warning';
                    default:
                        return 'text-light-secondary';
                }
            }
        });
    </script>
@endsection
 