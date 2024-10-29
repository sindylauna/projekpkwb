@extends('layouts.masterAdmin')
@section('content')

    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Table Pengguna</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <tbody>
                    <form action="{{route('Master Adminuser.store')}}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <tr>
                            {{-- daftar pengguna --}}
                            <td>
                                <div class="d-flex px-5 py-1">
                                    <div class="row w-100">
                                        {{-- nama --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Masukkan Username:</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-label="Masukkan Nama" autofocus>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- email --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Masukkan Email:</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-label="Masukkan Email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- password --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Masukkan Password:</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" aria-label="Password" autofocus>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- daftar role --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pilih Role:</label>
                                                <select class="form-control" name="role">
                                                    @foreach($roles as $role)
                                                    @if($role->name != 'Master Admin')
                                                        <option value="{{ $role->name }}">
                                                            {{ ucfirst($role->name) }}
                                                        </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            {{-- gender --}}
                                            <div class="form-group mb-3">
                                                <label class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pilih Jenis Kelamin:</label>
                                                <div>
                                                    <input type="radio" name="gender" value="pria" required> Pria
                                                    <input type="radio" name="gender" value="wanita" required> Wanita
                                                    <input type="radio" name="gender" value="lainnya" required> Lainnya
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-1">
                                    <a href="{{route('Master Adminuser.index')}}" class="btn btn-danger">
                                        <i class="fa fa-sharp fa-light fa-arrow-left"></i>
                                    </a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </td>
                        </tr>
                    </form>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection