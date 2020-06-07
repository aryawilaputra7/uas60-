@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <div class="panel-body">
            <div class="col-lg-12">
            <div class="col-lg-6">
                <blockquote col="col-md-12">
                        <b>DETAIL PERUSAHAAN</b>
                    </blockquote>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            Nama :
                        </div>
                        <div class="col-md-8 no-margin">
                            KELOMPOk KELAS PTI 4C
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            TELP. :
                        </div>
                        <div class="col-md-8 no-margin">
                            081916532073
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-4 no-margin">
                            ALAMAT :
                        </div>
                        <div class="col-md-8 no-margin">
                            Jalanin No. 3 Singaraja
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                 <blockquote col="col-md-12">
                        <b>STUDI KASUS</b>
                    </blockquote>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-2 no-margin">
                            Judul
                        </div>
                        <div class="col-md-8 no-margin">
                            <b>Jual Mobil</b>
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-md-2 no-margin">
                            Penjelasan
                        </div>
                        <div class="col-md-8 no-margin">
                        Sistem penjualan ini digunakan untuk mengetahui mobil-mobil yang tersedia dengan cara ditambahkan atau diinput oleh user mobil apa saja yang ada, sehingga pembeli tidak perlu lagi berkeliling melihat mobil-mobil 
                        </div>
                    </div>
            </div>
            </div>
            <div class="col-lg-12">
            <a href="{{route('rental.create')}}"> <button><b>(+) Tambah Data Mobil</b></button></a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>#</th><th>Nama Mobil</th><th>PLAT</th><th>Warna</th><th>Tahun Masuk</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($mobil as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->merk_mobil}}</td><td>{{$val->plat_mobil}}</td><td>{{$val->warna_mobil}}</td><td>{{$val->tahun_mobil}}</td>
                        <td>
                        <a href="{{route('rental.edit',$val->id_mobil)}}"><button>update</button></a>
                        <form action="{{route('rental.destroy', $val->id_mobil)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">delete</button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                {{$mobil->links()}}
            </div>
        </div>
    </div>
</div>
@endsection