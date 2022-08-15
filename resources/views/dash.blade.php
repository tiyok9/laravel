@extends('all')
@section('title','Data Penduduk')
@section('content')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container  mb-4 mt-3">
               <div class="h4 ">Sistem Data Penduduk</div>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                 <a href="/add" class="btn btn-primary mt-4 mb-4">Add Data</a>
                <div class="table-responsive">
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->alamat}}</td>
                    <td><a href="/detail/{{ $data->_id}}" class="btn btn-info">Detail</div></td>
                    <td><a href="/edit/{{ $data->_id}}" class="btn btn-success">Edit</div></td>
                    <td>
                    <form action="/delete/{{ $data->_id}}" method="post" class="">
                        @method('delete')
                        @csrf
                        <button type="submit"onclick="return confirm('apakah ingin mendelete data ?');" class="btn btn-danger">Delete</button>
                    </form>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            
            </div>
            </div>
        </div>      
@endsection