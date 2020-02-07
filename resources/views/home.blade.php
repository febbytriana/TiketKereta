@extends('layouts.app')
@section('content')

<section role="main" class="content-body" style="margin-left: 300px;">
    <div class="row">
        <div class="col-md-14">
           

            <section class="panel">
                <header class="panel-heading" style="font-size: 30px;text-align: center;">
                    Jadwal Kereta
                </header>
            </section>
 
                    <table class="table table-bordered table-striped table-hover" id="data-id" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">NO.</th>
                                <th style="text-align: center;" rowspan="2">Nama Kereta</th>
                                <th style="text-align: center;">Berangkat</th>
                                <th style="text-align: center;">Tiba</th>
                                <th style="text-align: center;">Durasi</th>
                                <th style="text-align: center;">Harga Tiket</th>          
                                <th style="text-align: center;" width="200px" rowspan="2">Pesan Tiket</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals as $key => $jadwal)
                                <tr>
                                    <td style="text-align: center;">{{ $key+1 }}</td>
                                    <td style="text-align: center;">{{ $jadwal->nama_kereta }}</td>
                                    <td style="text-align: center;">{{ $jadwal->jam_berangkat }}</td>
                                    <td style="text-align: center;">{{ $jadwal->jam_tiba }}</td>
                                    <td style="text-align: center;">{{ $jadwal->durasi }}</td>
                                    <td style="text-align: center;">Rp. {{ $jadwal->harga_tiket }}</td>
                                    <td style="text-align: center;"> 
                                    <a href=""> 
                                        <button type="button" class="btn btn-success">Pesan Tiket</button> 
                                    </a>
                                    </td>

                                </tr>

                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>           
</section>
@endsection 