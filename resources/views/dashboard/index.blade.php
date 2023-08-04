@extends('layouts.dashboard-layouts')
<!-- Section Stack CSS -->
@push('css')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables') }}/datatables.min.css"> --}}
    <link href="{{ asset('datatables') }}/datatables.min.css" rel="stylesheet">
@endpush

<!-- Header Content Section -->
@section('header-content')
    Dashboard - Main Index Page
@endsection

@section('main-content')
    <div class="container mt-2">

        <div class="row">

            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Saldo Materai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $saldo }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Signing</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">32</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Error Signing</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Sukses Signing</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">28</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="text-dark">Pembubuhan E-Materai</h5>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="date">Tanggal Dokumen</label>
                                    <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="text">Nomor Dokumen</label>
                                    <input type="number" class="form-control" id="text">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="text">Pilih Dokumen File</label>
                                    <input type="file" class="form-control" id="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('datatables') }}/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
