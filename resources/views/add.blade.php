@extends('all')
@section('title','Data Penduduk')
@section('content')
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <div class="h4 mt-4 mb-3 ml-4">Add Data</div>
  </div>
</nav>
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
        
        <form method="POST" action="/dash">
        @csrf
        <div class="form-group">
            <label>Nik</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror"placeholder="Nik" value="{{ old('nik') }}"  id="nik" name="nik" >
            @error('nik')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror"placeholder="Nama" value="{{ old('nama') }}" id="nama" name="nama">
            @error('nama')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="text" name="lahir" id="picker" class="form-control" placeholder="Lahir" value="{{ old('lahir') }}">
            
       </div>
        
        <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" value="{{ old('alamat') }}" id="alamat" name="alamat">
                @error('alamat')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
                <label>Penghasilan</label>
                <input type="text" class="form-control @error('penghasilan') is-invalid @enderror" placeholder="Penghasilan" value="{{ old('penghasilan') }}" id="penghasilan" name="penghasilan">
                @error('penghasilan')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
                <label>Job</label>
                <input type="text" class="form-control @error('job') is-invalid @enderror " placeholder="Pekerjaan" value="{{ old('job') }}" id="job" name="job">
                @error('job')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
        </div>
        <label>Riwayat Penyakit</label>
        <div class="form-group">
       
            <div class="form-check form-check-inline" name="riwayat[]">
                <input class="form-check-input" name="riwayat[]" type="checkbox" id="inlineCheckbox1" value=5f1b1630df1bd3fd37c07af1>
                <label class="form-check-label" for="inlineCheckbox1">Asma</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" name="riwayat[]" type="checkbox" id="inlineCheckbox2" value="5f1b1630df1bd3fd37c07af1">
                <label class="form-check-label" for="inlineCheckbox2">Paru-Paru</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" name="riwayat[]" type="checkbox" id="inlineCheckbox2" value="5f1b1630df1bd3fd37c07af1">
                <label class="form-check-label" for="inlineCheckbox2">Gula Darah</label>
            </div>
               
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
<script>
      $('#picker').datepicker({
        format: 'yyyy-mm-dd',
       
      });
    </script>
@endsection