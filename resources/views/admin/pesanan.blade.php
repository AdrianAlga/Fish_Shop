@extends('layouts.main')

@push('style')
  {{-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> --}}
@endpush

@section('body')
  @include('components.navbar')
  @include('components.spasi')

  <!-- produk -->
  <section id="headerPesanan">
    <div class="container-fluid card shadow">
      <div class="row p-3">
        <div class="col-md-12">
          <h3>Pesanan</h3>
          <p>Informasi Pesanan Pembelian Produk</p>
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
                  <th class="col-md-4">Tanggal Pemesanan</th>
                  <th class="col-md-4">Nama Pemesan</th>
                  <th class="col-md-4">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2023-06-05</td>
                  <td>isra</td>
                  <td>
                    <a href="{{ route('admin.informasiPesanan') }}"><span class="badge text-bg-info">Informasi</span></a>
                    <a href="#"><span class="badge text-bg-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Delete</span></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>2023-06-06</td>
                  <td>sahrul</td>
                  <td>
                    <a href="{{ route('admin.informasiPesanan') }}"><span class="badge text-bg-info">Informasi</span></a>
                    <a href="#"><span class="badge text-bg-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Delete</span></a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
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
