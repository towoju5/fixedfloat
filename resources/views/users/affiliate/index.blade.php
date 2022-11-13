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
            <h3>{{__('Affiliate statistics')}}</h3>
            <section class="content-box sm">
                <table class="stat-table">
                    <thead>
                        <tr>
                            <!-- <td>Overall turnover</td> -->
                            <td>{{__('Estimated Balance')}}</td>
                            <td>{{__('Pending withdrawal')}}</td>
                            <td>{{__('Minimum withdrawal amount')}}</td>
                            <td>%</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td><span>0 BTC</span></td> -->
                            <td><span>0 BTC</span></td>
                            <td><span>0 BTC</span></td>
                            <td><span>0.001 BTC</span></td>
                            <td><span>40%</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <h3>{{__('Affiliate token and links')}}</h3>
            <section class="content-box sm">
                <table class="table-content">
                    <tbody>
                        <tr>
                            <td>{{__('Your token')}}:</td>
                            <td>
                                <input type="text" class="input-copy" id="copy1" value="{{ $user->affiliate_id }}">
                                <i class="btn btn-warning fa fa-copy" onclick="copy('copy1')"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>{{__('Simple link')}}:</td>
                            <td>
                                <input type="text" class="input-copy" id="copy2" style="width: 24em"
                                    value="{{ $user->getReferralLink() }}">
                                <i class="btn btn-warning fa fa-copy clipboard" onclick="copy('copy2')"></i>
                            </td>
                        </tr>
                        <!-- tr>
                                <td>Link with currencies:</td>
                                <td>
                                    <input type="text" class="input-copy" style="width: 24em" readonly="" value="{{ $user->getReferralLink() }}">
                                    <i class="btn btn-warning fa fa-copy"></i>
                                </td>
                            </tr> -->
                    </tbody>
                </table>
            </section>
            <h3>{{__('Affiliate orders')}}</h3>
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card p-3">
                            <table class="table px-1" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>{{__('Date')}}</th>
                                        <th>{{__('Order ID')}}</th>
                                        <th>{{__('Profit')}}</th>
                                        <th>{{__('Paid')}}</th>
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
                ajax: "{{ route('users.trans.affiliate') }}",
                columns: [{
                        data: 'date'
                    },
                    {
                        data: 'orders'
                    },
                    {
                        data: 'profit'
                    },
                    {
                        data: 'paid_status'
                    },
                ],
                "order": [
                    [0, 'desc']
                ],
                dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                displayLength: 10,
                lengthMenu: [10, 25, 50, 75, 100],
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
                ],
                language: {
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                    }
                }
            });
            // Filter form control to default size for all tables
            $('.dataTables_filter .form-control').removeClass('form-control-sm');
            $('.dataTables_length .form-select').removeClass('form-select-sm').removeClass('form-control-sm');
        });

        function copy(element) {
            var copyText = document.getElementById(element);
            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endpush
