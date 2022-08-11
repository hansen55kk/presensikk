@extends('components.template')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    {{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <style>
        select[name="DataTables_Table_0_length"] {
            padding-right: 30px;
            margin-top: 5px;
        }

        input[aria-controls="DataTables_Table_0"],
        input[aria-controls="DataTables_Table_0"]:focus {
            margin-top: 5px;
            border: 1px solid rgba(125, 128, 152, 0.7);
            border-radius: 5px;
            padding: 2px 8px;
            margin-right: 15px;
        }

        .dt-button.buttons-excel.buttons-html5,
        .dt-button.buttons-pdf.buttons-html5,
        .dt-button.buttons-csv.buttons-html5 {
            border: 1px solid rgb(209, 66, 110);
            padding: 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        .dt-button.buttons-excel.buttons-html5 {}

        .dt-button.buttons-pdf.buttons-html5,
        .dt-button.buttons-csv.buttons-html5 {
            margin-left: 8px;

        }

        input[aria-controls="DataTables_Table_0"]:focus {
            box-shadow: 0 0 2px 2px rgba(209, 66, 110, 0.5) !important;
        }

        #DataTables_Table_0_length,
        #DataTables_Table_0_info {
            margin-left: 15px;
        }

        #DataTables_Table_0_info {
            font-size: 14px;
        }

        .page-item.active .page-link {
            color: white !important;
        }

        #DataTables_Table_0_paginate {
            margin-right: 15px;
        }
    </style>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div
                            class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3  d-flex justify-content-between">
                            <h6 class="text-white text-capitalize ps-3 mt-1">Tabel Pegawai</h6>
                            <button class="btn btn-sm btn-white m-3 my-0 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Add Data</button>
                        </div>
                    </div>
                    {{-- @if (session()->has('message')) --}}

                    {{-- @endif --}}
                    @include('components.modal-add-data')
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table table-striped align-items-center mb-0 yajra-datatable">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            No</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Nama</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            E-mail</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor Telepon</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Last Update</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($tables as $table)
                                        <tr>
                                            <td class="text-xs text-center">
                                                {{ $i }}
                                            </td>
                                            <td class="text-xs">
                                                {{ $table->name }}
                                            </td>
                                            <td class="text-xs">
                                                {{ $table->email }}
                                            </td>
                                            <td class="text-xs text-center">
                                                {{ $table->status }}
                                            </td>
                                            <td class="align-middle text-center text-xs">
                                                {{ $table->phone }}
                                            </td>
                                            <td class="align-middle text-center text-xs">
                                                {{ $table->updated_at }}
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user"
                                                    data-bs-toggle="modal" data-bs-target="#editModal{{ $table->id }}">
                                                    <span class="badge badge-sm bg-gradient-success">Edit</span>
                                                </a>
                                                @include('components.modal-edit-data')
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Delete user"
                                                    data-bs-toggle="modal" data-bs-target="#deleteModal{{ $table->id }}">
                                                    <span class="badge badge-sm bg-gradient-danger">Delete</span>
                                                </a>
                                                @include('components.modal-delete-data')
                                            </td>
                                        </tr>
                                        @php $i++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_script')
    <script>
        var table = $('.yajra-datatable').DataTable({
            dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>" +
                "<'row'<'col-sm-12 p-3 text-bold text-uppercase'B>>",
            buttons: [{
                    extend: 'excelHtml5',
                    title: 'Data Karyawan',
                    text: 'Save as Excel',
                    exportOptions: {
                        columns: ':not(:last-child)',
                    }
                    //Columns to export
                    //exportOptions: {
                    //     columns: [0, 1, 2, 3,4,5,6]
                    // }
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Data Karyawan',
                    text: 'Save as PDF',
                    exportOptions: {
                        columns: ':not(:last-child)',
                    }
                    //Columns to export
                    //exportOptions: {
                    //     columns: [0, 1, 2, 3, 4, 5, 6]
                    //  }
                },
                {
                    extend: 'csvHtml5',
                    title: 'Data Karyawan',
                    text: 'Save as CSV',
                    exportOptions: {
                        columns: ':not(:last-child)',
                    }
                    //Columns to export
                    //exportOptions: {
                    //     columns: [0, 1, 2, 3, 4, 5, 6]
                    //  }
                },


            ],
            language: {
                'paginate': {
                    'previous': '<span class="ni ni-bold-left"></span>',
                    'next': '<span class="ni ni-bold-right"></span>'
                }
            },
            "columnDefs": [{
                "orderable": false,
                "targets": [6]
            }, ],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'Nama',
                    name: 'Nama'
                },
                {
                    data: 'E-mail',
                    name: 'E-mail'
                },
                {
                    data: 'Status',
                    name: 'Status'
                },
                {
                    data: 'Nomor Telepon',
                    name: 'Nomor Telepon'
                },
                {
                    data: 'Last Update',
                    name: 'Last Update'
                },
                {
                    data: 'Action',
                    name: 'Action'
                },
            ]
        });
    </script>
@endsection
