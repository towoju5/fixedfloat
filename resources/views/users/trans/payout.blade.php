@extends('layouts.master')

@push('css')
@endpush
@section('content')
@php $user = auth()->user() @endphp
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-12 order-0 mb-4">
         <div class="card">
            <div class="card-body">
               <h5 class="card-header">{{ __('Payout') }}</h5>
               <form action="" method="post">
                  <div class="form-group row">
                     <label class="col-md-2 col-form-label" for="">{{__('Bitcoin address')}}:</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="wallet_address" id="wallet_address">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 col-form-label" for="">{{__('Ready to payout')}}:</label>
                     <div class="col-md-8">
                        <p class="form-control-plaintext" readonly id="payout_amount">0 BTC (0 BTC less than the minimum 0.001 BTC</p>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!--/ Order Statistics -->
   </div>

   <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-12 order-0 mb-4">
         <div class="card">
            <h5 class="card-header">{{ __('Last payouts') }}</h5>
            <div class="table-responsive text-nowrap">
               <table class="table">
                  <caption class="ms-4">{{ $payouts->render('pagination') }}</caption>
                  <thead>
                     <tr>
                        <th>S/N</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($payouts as $k => $list)
                     <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $list->amount }}</td>
                        <td>{{ $list->status }}</td>
                        <td>{{ show_datetime($list->created_at) }}</td>
                     </tr>
                     @empty
                     <tr>
                        <td colspan="4" class="h3 text-center">
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