
@extends('template.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">siswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Edit siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url("siswa/$siswa->nim")}}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM" value="{{ $siswa->nim }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control id="nama" placeholder="Masukkan Nama" value="{{ $siswa->nama }}" >
                                </div>
                                <div class="form-group">
                                    <label for="kelas">kelas</label>
                                    <select class="form-control select2bs4" style="width: 100%;" id="kelas" name="kelas_id">
                                        <option value="">Pilih kelas</option>
                                        @foreach ($kelas as $d)
                                        <option value="{{ $d['id'] }}" {{$d['id'] == $siswa->kelas_id ? 'SELECTED' : ''}}>{{$d['nama_kelas']}}</option>
                                        @endforeach`
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">Nomor HP</label>
                                    <input type="text" name="no_hp" class="form-control" id="nohp" placeholder="Masukkan Nomor HP" value="{{ $siswa->no_hp }}" >
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" value="{{ $siswa->alamat }}" >
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="foto" id="foto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

  @endsection
