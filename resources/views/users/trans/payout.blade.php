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
               @include('notification')
               <form action="{{ route('users.trans.payouts.request') }}" method="post">
                  @csrf
                  <div class="form-group row">
                     <label class="col-md-2 col-form-label" for="wallet_address">{{__('Bitcoin address')}}:</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" name="wallet_address" id="wallet_address">
                     </div>
                  </div>
                  <div class="form-group row" hidden>
                     <label class="col-md-2 col-form-label" for="amount">{{__('Amount')}}:</label>
                     <div class="col-md-8">
                        <input type="hidden" class="form-control" name="amount" value="{{$user->btc_balance}}" id="amount">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 col-form-label" for="">{{__('Ready to payout')}}:</label>
                     <div class="col-md-8">
                        <p class="form-control-plaintext" readonly id="payout_amount">{{ number_format($user->btc_balance, 4) }} BTC 
                           @if($user->btc_balance < 0.001) ({{ number_format($user->btc_balance, 3) }}  BTC {{__('less than the minimum')}} <b>0.001 BTC</b> @endif</p>
                     </div>
                  </div>
                  <div class="d-flex justify-content-center">
                     <button type="submit" class="btn btn-info btn-rounded">{{__('Payout')}}</button>
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
                        <th>{{__('S/N')}}</th>
                        <th>{{__('Amount')}}</th>
                        <th>{{__('Status')}}</th>
                        <th>{{__('Date')}}</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($payouts as $k => $list)
                     <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $list->amount }}</td>
                        <td>{{ status_code($list->status) }}</td>
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