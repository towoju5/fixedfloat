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
      <div class="col-xl-5">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title mb-4">{{ __('Personal Information') }}</h4>
               <p class="text-muted mb-4">{{__('Investor')}}</p>
               <div class="table-responsive">
                  <table class="table table-nowrap mb-0">
                     <tbody>
                        <tr>
                           <th scope="row">{{__('Full Name')}}:</th>
                           <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                           <th scope="row">{{__('Mobile')}}:</th>
                           <td>{{ $user->phone ?? 'NULL' }}</td>
                        </tr>
                        <tr>
                           <th scope="row">{{__('E-mail')}}:</th>
                           <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                           <th scope="row">{{__('Location')}}:</th>
                           <td>{{ $user->location ?? 'NULL' }}</td>
                        </tr>
                        <tr>
                           <th scope="row">{{__('Country')}}:</th>
                           <td>{{ $user->country ?? 'NULL' }}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <!-- end card -->
      </div>

      <div class="col-xl-7">
         <div class="card">
            @include('notification')
            <form action="{{ route('users.profile.save', $user->id) }}" method="POST">
               @csrf
               <div class="card-body">
                  <h4 class="card-title mb-4">{{__('Change Password')}}</h4>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="">{{ __('New Password')}}:</label>
                     <div class="col-md-9">
                        <input type="password" class="form-control" name="password" id="pa">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label" for="">{{__('Confirm Password')}}:</label>
                     <div class="col-md-9">
                        <input type="password" class="form-control" name="password_confirmation" id="pac">
                     </div>
                  </div>
                  <div class="alert alert-danger" style="display:none" id="pacEr">
                     <span>{{__('Passwords do not match')}}</span>
                  </div>
                  <hr>
                  <button type="submit" class="btn btn-primary btn-bloc waves-effect waves-light text-center">
                     <i class="fa fa-check"></i> {{__('Change Password')}}
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection