@extends('all')
@section('title','Data Penduduk')
@section('content')
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <div class="h4 mt-4 mb-3 ml-auto mr-auto">Detail Data</div>
  </div>
</nav>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
        
        <form >
        @csrf
        <div class="form-group">
            <label>Nik</label>
            <input type="text" class="form-control " value="{{ $data->nik }}"   name="nik" readonly >
            
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control " value="{{ $data->nama }}" readonly name="nama">
           
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="text" name="lahir" id="picker" class="form-control" placeholder="Lahir" readonly value="{{ $data->lahir }}">
            
       </div>
        
        <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control " readonly value="{{ $data->alamat }}"  name="alamat">
                
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label>Penghasilan</label>
                <input type="text" class="form-control " readonly value="{{ $data->penghasilan  }}" id="penghasilan" name="penghasilan">
         
            </div>
            <div class="col-md-4">
                <label>Job</label>
                <input type="text" class="form-control " readonly value="{{  $data->job }}"  name="job">
               
            </div>
        </div>
        </div>
        
       
        
        <a href="/dash" class="btn btn-primary">Back To Data</a>
        </form>
        </div>
    </div>
</div>
