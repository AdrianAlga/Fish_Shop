@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/form_add.css') }}">
@endpush

@section('body')
  @include('components.navbar')
  @include('components.spasi')

  <section id="header-tambahProduk">
    <div class="container-fluid card shadow-lg">
      <div class="row mt-3">
        <div class="col-2">
          <a href="{{ route('admin.produk') }}"><button type="button" class="btn btn-primary"><i
                class="bi bi-arrow-left-circle"></i></button></a>
        </div>
        <div class="col-12 text-center">
          <h3>Edit Produk</h3>
          <p>Edit Produk pada colom dibawah</p>
        </div>
      </div>
    </div>
  </section>

  <section id="editProduk">
    <div class="container-fluid">
      <div class="row m-4 justify-content-center">
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="login-box">
              <form>
                <h4 class="mb-4 text-center">Produk</h4>
                <div class="user-box">
                  <input type="text" name="" required="" />
                  <label class="text-black">Nama Produk</label>
                </div>
                <div class="user-box">
                  <input type="number" name="" required="" min="0"/>
                  <label class="text-black">Harga Produk</label>
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Masukkan foto produk</label>
                  <input class="form-control" type="file" id="formFile" required/>
                </div>
                <div class="row text-center my-4">
                  <div class="col-md-12">
                    <div class="login-box">
                      <button type="submit" class="card">
                        Ubah
                        <span></span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
