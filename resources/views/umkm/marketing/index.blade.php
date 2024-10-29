@extends('layouts.umkm')
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Marketing</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <tbody>
                                    {{-- <form action="{{route('')}}" method="POST" enctype="multipart/form-data">
                    @csrf --}}
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="row w-100">
                                                    <div class="card-header pb-0">

                                                    </div>
                                                    {{-- akta pendirian --}}
                                                    <div class="form-group">
                                                        <label for="month">Bulan</label>
                                                        <select name="month" id="month" class="form-control" required>
                                                            <option value="" disabled selected>Pilih Bulan</option>
                                                            <option value="Januari">Januari</option>
                                                            <option value="Februari">Februari</option>
                                                            <option value="Maret">Maret</option>
                                                            <option value="April">April</option>
                                                            <option value="Mei">Mei</option>
                                                            <option value="Juni">Juni</option>
                                                            <option value="Juli">Juli</option>
                                                            <option value="Agustus">Agustus</option>
                                                            <option value="September">September</option>
                                                            <option value="Oktober">Oktober</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="yearly_target">Target Tahunan (Rp)</label>
                                                        <input type="number" name="yearly_target" id="yearly_target"
                                                            class="form-control" placeholder="Masukkan target tahunan"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="monthly_target">Target Bulanan (Rp)</label>
                                                        <input type="number" name="monthly_target" id="monthly_target"
                                                            class="form-control" placeholder="Masukkan target bulanan"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="actual_sales">Realisasi Penjualan (Rp)</label>
                                                        <input type="number" name="actual_sales" id="actual_sales"
                                                            class="form-control" placeholder="Masukkan realisasi penjualan"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-4 py-1">
                                                {{-- <a href="{{route('Umkmhome')}}" class="btn btn-danger">
                                    <i class="fa fa-sharp fa-light fa-arrow-left"></i>
                                </a> --}}
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- </form> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection