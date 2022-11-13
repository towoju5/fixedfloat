@extends('layouts.master')

@push('css')
    <style>
        .bg-soft-primary {
            background-color: rgba(85, 110, 230, .25) !important;
        }

        .border-bottom {
            display: none;
        }

        .mini-stats-wid .mini-stat-icon {
            overflow: hidden;
            position: relative;
        }

        .avatar-sm {
            height: 3rem;
            width: 3rem;
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #556ee6;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('fixedfloat/min.css') }}">
@endpush
@section('content')
@php $user = auth()->user() @endphp
<div class="container-xxl flex-grow-1 container-p-y">
    <section class="content">
        <h3>{{__('User List')}}</h3>
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card p-3">
                        <table class="table px-1" id="dataTable">
                            <thead>
                                <tr>
                                    <th>{{__('S/N')}}</th>
                                    <th>{{__('Customer Name')}}</th>
                                    <th>{{__('Customer Email')}}</th>
                                    <th>{{__('Wallet Balance')}}</th>
                                    <th>{{__('affiliate ID')}}</th>
                                    <th>{{__('Joined')}}</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
@endsection

@push('js')
    <script type="text/javascript">
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

        var datatable;
        var rowid;
        $(document).ready(function() {
            datatable = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ordering: false,
                ajax: "{{ route('admin.users.index') }}",
                columns: [{
                    data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'btc_balance'
                    },
                    {
                        data: 'affiliate_id'
                    },
                    {
                        data: 'date'
                    },
                ],
                "order": [
                    [0, 'desc']
                ],
                dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                displayLength: 5,
                lengthMenu: [5, 10, 25, 50, 75, 100],
                buttons: [{
                        extend: 'collection',
                        className: 'btn btn-outline-secondary dropdown-toggle me-2',
                        text: feather.icons['share'].toSvg({
                            class: 'font-small-4 me-50'
                        }) + 'Export',
                        buttons: [{
                                extend: 'print',
                                text: feather.icons['printer'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Print',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [0, 1, 2, 3]
                                }
                            },
                            {
                                extend: 'csv',
                                text: feather.icons['file-text'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Csv',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [0, 1, 2, 3]
                                }
                            },
                            {
                                extend: 'excel',
                                text: feather.icons['file'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Excel',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [0, 1, 2, 3]
                                }
                            },
                            {
                                extend: 'pdf',
                                text: feather.icons['clipboard'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Pdf',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [0, 1, 2, 3]
                                }
                            },
                            {
                                extend: 'copy',
                                text: feather.icons['copy'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Copy',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [0, 1, 2, 3]
                                }
                            }
                        ],
                        init: function(api, node, config) {
                            $(node).removeClass('btn-secondary');
                            $(node).parent().removeClass('btn-group');
                            setTimeout(function() {
                                $(node).closest('.dt-buttons').removeClass('btn-group')
                                    .addClass('d-inline-flex');
                            }, 50);
                        }
                    },
                    {
                        text: feather.icons['plus'].toSvg({
                            class: 'me-50 font-small-4'
                        }) + 'Add New',
                        className: 'create-new btn btn-primary',
                        attr: {
                            'data-bs-toggle': 'modal',
                            'data-bs-target': '#add_modal'
                        },
                        init: function(api, node, config) {
                            $(node).removeClass('btn-secondary');
                        }
                    }
                ]
            });
            // Filter form control to default size for all tables
            $('.dataTables_filter .form-control').removeClass('form-control-sm');
            $('.dataTables_length .form-select').removeClass('form-select-sm').removeClass('form-control-sm');
        });
    </script>
@endpush
