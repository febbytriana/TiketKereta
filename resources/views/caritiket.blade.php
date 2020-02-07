@extends('layouts.app')
@section('content')
	
	<section role="main" class="content-body" style="margin-left: 400px;">
		<div class="">
			<p>Pilih Rute</p>
                        <div class="col-md-4">
                            <select name="" class="form-control select2">
                                <option value="">Pilih</option>
                                <option value="Bandung">Bandung(BD)</option>
                                <option value="Gambir">Gambir(GMB)</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control select2">
                                <option value="">Pilih</option>
                                <option value="Bandung">Bandung(BD)</option>
                                <option value="Gambir">Gambir(GMB)</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-2"> 
                                <p>Tanggal</p>
                            </div>    
                            <div class="col-md-2"> 
                                <input type="date" name="tanggal">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"> 
                                <p>Penumpang</p>
                            </div>  
                            <div class="col-md-2"> 
                                <select name="jumlah_dewasa" class="form-control select2">
                                    <option value="">Dewasa</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select> 
                            </div>
     
                            <div class="col-md-2"> 
                                <select name="jumlah_bayi" class="form-control select2">
                                    <option value="">Bayi</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select> 
                            </div> 
                        </div>
                        <a href="{{ url('home') }}" style="margin-left: 400px;">
                        	<button class="btn btn-success">Cari Tiket!</button>
                        </a>
        </div>
	</section>

@endsection