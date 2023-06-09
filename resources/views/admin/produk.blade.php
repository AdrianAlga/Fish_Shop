@extends('layouts.main')

@push('style')
  {{-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> --}}
@endpush

@section('body')
  @include('components.navbar')
  @include('components.spasi')

   <!-- produk -->
   <section id="headerProduk">
    <div class="container-fluid card shadow">
      <div class="row p-3">
        <div class="col-md-12">
          <h3>Produk</h3>
          <p>menambah, mengedit, atau menghapus produk</p>
        </div>
        <div class="col-md-4">
          <a href="{{ route('admin.tambahProduk') }}"><button type="button" class="btn btn-primary">Buat Produk</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- alerts -->
  <div id="liveAlertPlaceholder"></div>

  <!-- End Alerts -->

  <section class="produk">
    <div class="container-fluid card shadow my-3">
      <div class="row">
        <div class="col-md-12 p-4">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="col-md-0">No.</th>
                  <th class="col-md-4">Nama Produk</th>
                  <th class="col-md-4">Harga Produk</th>
                  <th class="col-md-4">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>ikan koi</td>
                  <td>300.000</td>
                  <td>
                    <a href="#"><span class="badge text-bg-info" id="liveAlertBtn">Informasi</span></a>
                    <a href="#"><span class="badge text-bg-warning">Edit Produk</span></a>
                    <a href="#"><span class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</span></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>ikan koi emas</td>
                  <td>500.000</td>
                  <td>
                    <a href="{{ route('admin.informasiProduk') }}"><span class="badge text-bg-info">Informasi</span></a>
                    <a href="{{ route('admin.editProduk') }}"><span class="badge text-bg-warning">Edit Produk</span></a>
                    <a href="#"><span class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</span></a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">Apakah anda ingin menghapusnya?</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-primary">Ya</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
