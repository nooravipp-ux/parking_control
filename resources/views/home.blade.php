@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Gate In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Gate Out</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Kendaraan Masuk</h4>
                                        <h4 class="card-title">
                                            @if ($message = Session::get('success'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @endif

                                            @if(session()->has('error'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('error') }}
                                            </div>
                                            @endif
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('home.gate_in')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <img src="{{asset('theme/img/rfid.png')}}" alt="...">
                                                            <div class="form-group">
                                                                <label class="">ID (Tap atau Input RFID)</label>
                                                                <input type="text" class="form-control"
                                                                    name="id_member">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pr-1">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Buka Gate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Kendaraan Keluar</h4>
                                        <h4 class="card-title">
                                            @if ($message = Session::get('success'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @endif

                                            @if(session()->has('error'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('error') }}
                                            </div>
                                            @endif
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('home.gate_out')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <img src="{{asset('theme/img/rfid.png')}}" alt="...">
                                                            <div class="form-group">
                                                                <label>ID (Tap atau Input RFID)</label>
                                                                <input type="text" class="form-control"
                                                                    name="id_member">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pr-1">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Buka Gate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection