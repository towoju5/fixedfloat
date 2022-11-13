@extends('layouts.master')

@push('css')
@endpush
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-12 order-0 mb-4">
         <div class="card">
            <div class="card-body">
               <h5 class="card-header">{{ __('Withdrawal Requests') }}</h5>
               <div class="table-responsive text-nowrap">
                  <table class="table" id="dataTable">
                     <thead>
                        <tr>
                           <th>S/N</th>
                           <th>Customer</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!--/ Order Statistics -->
   </div>
</div>
@endsection
@push('js')
    <script type="text/javascript">
        var datatable;
        var rowid;
        $(document).ready(function() {
            datatable = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ordering: false,
                ajax: "{{ route('admin.payouts.index') }}",
                columns: [
                    {
                        data: 'order_id'
                    },
                    {
                        data: 'customer'
                    },
                    {
                        data: 'send'
                    },
                    {
                        data: 'receive'
                    },
                    {
                        data: 'paid_status'
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