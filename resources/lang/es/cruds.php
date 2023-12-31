<?php

return [
    'userManagement' => [
        'title'          => 'Gestionar usuarios',
        'title_singular' => 'Gestionar usuarios',
    ],
    'permission' => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'expenseManagement' => [
        'title'          => 'Gestion de gastos',
        'title_singular' => 'Gestion de gastos',
    ],
    'expenseCategory' => [
        'title'          => 'Categorías de gastos',
        'title_singular' => 'Categoría de gastos',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'incomeCategory' => [
        'title'          => 'Categorías de ingresos',
        'title_singular' => 'Categoría de ingreso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'expense' => [
        'title'          => 'Gastos',
        'title_singular' => 'Gasto',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'expense_category'        => 'Expense Category',
            'expense_category_helper' => ' ',
            'entry_date'              => 'Entry Date',
            'entry_date_helper'       => ' ',
            'amount'                  => 'Amount',
            'amount_helper'           => ' ',
            'description'             => 'Description',
            'description_helper'      => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated At',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted At',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'income' => [
        'title'          => 'Ingresos',
        'title_singular' => 'Ingresos',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'income_category'        => 'Income Category',
            'income_category_helper' => ' ',
            'entry_date'             => 'Entry Date',
            'entry_date_helper'      => ' ',
            'amount'                 => 'Amount',
            'amount_helper'          => ' ',
            'description'            => 'Description',
            'description_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'expenseReport' => [
        'title'          => 'Reporte mensual',
        'title_singular' => 'Reporte mensual',
        'reports'        => [
            'title'             => 'Informes',
            'title_singular'    => 'Informe',
            'incomeReport'      => 'Reporte de ingresos',
            'incomeByCategory'  => 'Ingresos por categoria',
            'expenseByCategory' => 'Gastos por categoría',
            'income'            => 'Ingresos',
            'expense'           => 'Gasto',
            'profit'            => 'Beneficio',
        ],
    ],
    'cliente' => [
        'title'          => 'Clientes',
        'title_singular' => 'Cliente',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'fullname'                => 'Nombre Completo',
            'fullname_helper'         => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'identificacion'          => 'Identificacion',
            'identificacion_helper'   => ' ',
            'fecha_nacimiento'        => 'Fecha Nacimiento',
            'fecha_nacimiento_helper' => ' ',
            'correo'                  => 'Correo',
            'correo_helper'           => ' ',
            'telefono'                => 'Teléfono',
            'telefono_helper'         => ' ',
            'nivel'                   => 'Nivel',
            'nivel_helper'            => ' ',
            'observaciones'           => 'Observaciones',
            'observaciones_helper'    => ' ',
            'activo'                  => 'Estado',
            'activo_helper'           => ' ',
        ],
    ],
    'pago' => [
        'title'          => 'Pagos',
        'title_singular' => 'Pago',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'estudiante'                    => 'Estudiante',
            'estudiante_helper'             => ' ',
            'concepto'                      => 'Concepto',
            'concepto_helper'               => ' ',
            'metodo'                        => 'Metodo de Pago',
            'metodo_helper'                 => ' ',
            'fecha'                         => 'Fecha de pago',
            'fecha_helper'                  => ' ',
            'comprobante'                   => 'Comprobante',
            'comprobante_helper'            => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
            'fecha_asignada_de_pago'        => 'Fecha Asignada De Pago',
            'fecha_asignada_de_pago_helper' => ' ',
            'monto'                         => 'Monto',
            'monto_helper'                  => ' ',
            'descripcion'                   => 'Descripcion',
            'descripcion_helper'            => ' ',
        ],
    ],
    'asistencium' => [
        'title'          => 'Asistencia',
        'title_singular' => 'Asistencium',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'estudiante'              => 'Estudiante',
            'estudiante_helper'       => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'fecha'                   => 'Fecha',
            'fecha_helper'            => ' ',
            'fecha_reposicion'        => 'Fecha Reposición',
            'fecha_reposicion_helper' => ' ',
            'asistencia'              => 'Asistencia',
            'asistencia_helper'       => ' ',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Calendario de Clases',
        'title_singular' => 'Calendario de Clase',
    ],
    'taskStatus' => [
        'title'          => 'Materias',
        'title_singular' => 'Materia',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'aa'                => 'Aa',
            'aa_helper'         => ' ',
        ],
    ],
    'task' => [
        'title'          => 'Horarios de Clases',
        'title_singular' => 'Horarios de Clase',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'description'        => 'Descripción',
            'description_helper' => ' ',
            'due_date'           => 'Fecha Inicio',
            'due_date_helper'    => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
            'start'              => 'Hora Inicio',
            'start_helper'       => ' ',
            'end'                => 'Hora Final',
            'end_helper'         => ' ',
            'final_date'         => 'Fecha Final',
            'final_date_helper'  => ' ',
            'dias'               => 'Días',
            'dias_helper'        => ' ',
            'grupo'              => 'Grupo',
            'grupo_helper'       => ' ',
            'name'               => 'Materia',
            'name_helper'        => ' ',
        ],
    ],
    'tasksCalendar' => [
        'title'          => 'Calendario',
        'title_singular' => 'Calendario',
    ],

];
