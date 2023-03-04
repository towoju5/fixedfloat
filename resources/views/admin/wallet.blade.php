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
                        <h5 class="card-header d-flex justify-content-between">
                            {{ __('Wallet Management') }}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modelId">
                                Add New Coin Wallet
                            </button>
                        </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Coin/Ticker Name</th>
                                        <th>Wallet ID</th>
                                        <th>Date Added</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($wallets as $k => $item)
                                        <tr>
                                            <td>{{ $k + 1 }}</td>
                                            <td> {{ $item->coin }} </td>
                                            <td> {{ $item->wallet_id }} </td>
                                            <td>
                                                <a href="{{ route('admin.wallets.delete', $item->id) }}"
                                                    class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Coin Wallet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.wallets.add') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label for="coin">Coin/Ticker Name <small>Please use the ticker name only as appear on Provider website e.g BTC, ETH, USDT, BCH</small></label>
                            <input type="text" name="coin" id="coin" class="form-control" placeholder="Ticker Name e.g BTC, ETH, USDT">
                        </div>
                        <div class="form-group mb-2">
                            <label for="coin">Wallet ID <small>As seen on Bitgo</small></label>
                            <input type="text" name="wallet" id="wallet" class="form-control" placeholder="Wallet ID: E.g 63e93df165840c000738efb0debb996c">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
