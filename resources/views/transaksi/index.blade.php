@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Data in - out Kendaraan</h4>
                <a class="float-right" href="">Import Data</a>
            </div>
            <div class="card-body">
                <form class="form-inline" action="{{route('transaksi.filter')}}" method="POST">
                    @csrf
                    <label for="inlineFormInputName2" class="mr-3">Tanggal</label>
                    <input type="date" name="start_date" class="form-control mb-2 mr-sm-2">

                    <span class="mr-3">s/d</span>

                    <input type="date" name="end_date" class="form-control mb-2 mr-sm-2">

                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class=" text-primary">
                            <th>
                                ID 
                            </th>
                            <th>
                                No Kendaraan
                            </th>
                            <th>
                                Jenis
                            </th>
                            <th>
                                Tanggal / Jam 
                            </th>
                            <th>
                                Status
                            </th>
                        </thead>
                        <tbody>
                            @foreach($transaksi as $tr)
                            <tr>
                                <td>
                                    {{$tr->id_member}}
                                </td>
                                <td>
                                    {{$tr->no_kendaraan}}
                                </td>
                                <td>
                                    {{$tr->jenis_kendaraan}}
                                </td>
                                <td>
                                    {{$tr->tanggal}}   
                                </td>
                                <td>
                                    {{$tr->status}}
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