@extends('layouts.app')

@section('title', 'Lihat Data Pengguna')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Akun Pengguna</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- Button Tambah -->
                            <div class="text-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-file"></i> Tambah
                                    </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item" type="button" data-toggle="modal" data-target="#modalTambahPasien">Tambah Pasien</button>
                                        <button class="dropdown-item" type="button" data-toggle="modal" data-target="#modalTambahAhliGizi">Tambah Ahli Gizi</button>
                                        <button class="dropdown-item" type="button" data-toggle="modal" data-target="#modalTambahChef">Tambah Chef</button>
                                    </div>
                                     
                                </div>
                                @include('admin/modaltambahahligizi')
                                @include('admin/modaltambahchef') 
                            </div>


                            <!-- End Button Tambah -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Table -->
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>Nama Lengkap</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="text-center">
                                                <!-- Button Edit -->
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit">
                                                    Edit
                                                </button>

                                                <!-- Button Hapus -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
                                                    Hapus
                                                </button>
                                                
                                            </div>
                                            @include('admin/modaleditpasien') 
                                            @include('admin/modaldeletepengguna')
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris tabel lainnya di sini -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper --> 
@include('admin/modaltambahpasien')  

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/dataTables.bootstrap4.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "lengthMenu": [5, 10, 25, 50], // Menambahkan opsi jumlah entri
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "lengthMenu": [5, 10, 25, 50], // Menambahkan opsi jumlah entri
        });
    });
</script>
@endsection
