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
            <h5 class="card-header">{{ __('Active orders') }}</h5>
            <div class="table-responsive text-nowrap">
               <table class="table">
                  <caption class="ms-4">{{ $lists->render('pagination') }}</caption>
                  <thead>
                     <tr>
                        <th>S/N</th>
                        <th>Time</th>
                        <th>Send</th>
                        <th>Receive</th>
                        <th>Status</th>
                        <th>Date</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($actives as $k => $active)
                     <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $active->time }}</td>
                        <td>{{ $active->send }}</td>
                        <td>{{ $active->receive }}</td>
                        <td>{{ $active->status }}</td>
                        <td>{{ show_datetime($lists->created_at) }}</td>
                     </tr>
                     @empty
                     <tr>
                        <td colspan="6" class="h3 text-center">
                           {{ __('No Transaction Found') }}
                        </td>
                     </tr>
                     @endforelse
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!--/ Order Statistics -->
   </div>

   <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-12 order-0 mb-4">
         <div class="card">
            <h5 class="card-header">{{ __('Сompleted orders') }}</h5>
            <div class="table-responsive text-nowrap">
               <table class="table">
                  <caption class="ms-4">{{ $lists->render('pagination') }}</caption>
                  <thead>
                     <tr>
                        <th>S/N</th>
                        <th>Order ID</th>
                        <th>Send</th>
                        <th>Received</th>
                        <th>Received Address</th>
                        <th>Date</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($lists as $k => $list)
                     <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $list->order_id }}</td>
                        <td>{{ $list->send }}</td>
                        <td>{{ $list->received }}</td>
                        <td>{{ $list->received_address }}</td>
                        <td>{{ show_datetime($list->created_at) }}</td>
                     </tr>
                     @empty
                     <tr>
                        <td colspan="6" class="h3 text-center">
                           {{ __('No Transaction Found') }}
                        </td>
                     </tr>
                     @endforelse
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!--/ Order Statistics -->
   </div>
</div>
@endsection