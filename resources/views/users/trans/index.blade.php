@extends('layouts.master')

@push('css')
<style>
   .bg-soft-primary {
      background-color: rgba(85, 110, 230, .25) !important;
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
@endpush
@section('content')
@php $user = auth()->user() @endphp
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-12 order-0 mb-4">
         <div class="card">
            <div class="card-body">
                <h5 class="card-header">{{ __('Active orders') }}</h5>
                <div class="table-responsive text-nowrap">
                <table class="table" id="activeTable">
                    <thead>
                        <tr>
                            <th>{{__('S/N')}}</th>
                            <th>{{__('Time')}}</th>
                            <th>{{__('Send')}}</th>
                            <th>{{__('Receive')}}</th>
                            <th>{{__('Status')}}</th>
                            <th>{{__('Date')}}</th>
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

   <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-12 order-0 mb-4">
         <div class="card">
            <div class="card-body">
                <h5 class="card-header">{{ __('Сompleted orders') }}</h5>
                <div class="table-responsive text-nowrap">
                <table class="table" id="listTable">
                    <thead>
                        <tr>
                            <th>{{__('Order ID')}}</th>
                            <th>{{__('Send')}}</th>
                            <th>{{__('Received')}}</th>
                            <th>{{__('Received Address')}}</th>
                            <th>{{__('Date')}}</th>
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
            datatable = $('#activeTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ordering: false,
                ajax: "{{ route('users.trans.index') }}?type=actives",
                columns: [
                    {
                        data: 'order_id'
                    },
                    {
                        data: 'date'
                    },
                    {
                        data: 'send'
                    },
                    {
                        data: 'receive'
                    },
                    {
                        data: 'order_status'
                    },
                    {
                        data: 'date'
                    },
                ],
                "order": [
                    [0, 'desc']
                ],
                displayLength: 10,
                lengthMenu: [5, 10, 25, 50, 75, 100]
            });
            
            datatable = $('#listTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ordering: false,
                ajax: "{{ route('users.trans.index') }}?type=list",
                columns: [
                    
                    {
                        data: 'order_id'
                    },
                    {
                        data: 'send_amount'
                    },
                    {
                        data: 'receives'
                    },
                    {
                        data: 'receive_address'
                    },
                    {
                        data: 'date'
                    },
                ],
                "order": [
                    [0, 'desc']
                ],
                displayLength: 10,
                lengthMenu: [5, 10, 25, 50, 75, 100]
            });
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
