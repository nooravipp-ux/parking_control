@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Tambah Member</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('member.save')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12">
                                <img src="{{asset('theme/img/user-logo.jpg')}}" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8 pr-1">
                                    <div class="form-group">
                                        <label>ID (Tap RFID)</label>
                                        <input type="text" class="form-control" name="id_member">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pr-1">
                                    <div class="form-group">
                                        <label>Nama Pemilik</label>
                                        <input type="text" class="form-control" name="nama_pemilik">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pr-1">
                                    <div class="form-group">
                                        <label>N0 Kendaraan</label>
                                        <input type="text" class="form-control" name="no_kendaraan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pr-1">
                                    <div class="form-group">
                                        <label>Jenis Kendaraan</label>
                                        <input type="text" class="form-control" name="jenis_kendaraan">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan Informasi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class=" text-primary">
                            <th>
                                ID Member
                            </th>
                            <th>
                                Nama Pemilik
                            </th>
                            <th>
                                No Kendaraan
                            </th>
                            <th>
                                Jenis Kendaraan
                            </th>
                            <th>
                                Tanggal Aktif
                            </th>
                            <th>
                                Action
                            </th>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                            <tr>
                                <td>
                                    {{$member->id_member}}
                                </td>
                                <td>
                                    {{$member->nama_pemilik}}
                                </td>
                                <td>
                                    {{$member->no_kendaraan}}
                                </td>
                                <td>
                                    {{$member->jenis_kendaraan}}
                                </td>
                                <td>
                                    {{$member->tanggal_aktif}}
                                </td>
                                <td>
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection