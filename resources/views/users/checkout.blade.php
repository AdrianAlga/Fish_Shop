@extends('layouts.main')

@push('style')
  {{-- <link rel="stylesheet" href="{{ asset('/css/users.css') }}"> --}}
@endpush

@section('body')

  <div id="etalase">
    <div class="container card">
      <div class="row">
        <div class="col-md-12 py-3">
          <a href="{{ route('users.index') }}">
            <button type="button" class="btn btn-info">Back</button>
          </a>
        </div>
      </div>
      <div class="row card-header pb-5">
        <div class="col-md-12 text-center">
          <h1 style="font-size: 50px; font-weight: 900">ETALASE</h1>
        </div>
      </div>
      <div class="row card-body">
        <div class="col-md-7">
          <table class="table table-responsive text-center">
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <td class="col-2"><img src="{{ asset('/images/baground.jpg') }}" alt="img" height="50px" /></td>
                <td class="col-5">Koi</td>
                <td class="col-3">20.000</td>
                <td class="col-1"><button type="button" class="btn-close text-dark" style="font-size: 10px"
                    aria-label="Close"></button></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td class="fw-bold">Total</td>
                <td colspan="3" class="fw-bold text-end">Rp. 20.000</td>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="ps-5 col-md-5">
          <h3 class="mb-4">Informasi Pembeli:</h3>
          <div class="user-checkout">
            <form>
              <div class="form-group">
                <label for="namaLengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaLengkap" aria-describedby="namaHelp" required/>
              </div>
              <div class="form-group">
                <label for="namaLengkap">Alamat Email</label>
                <input type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp" required/>
              </div>
              <div class="form-group">
                <label for="namaLengkap">Telepon</label>
                <input type="number" class="form-control" id="noHP" aria-describedby="noHPHelp" required/>
              </div>
              <div class="form-group">
                <label for="alamatLengkap">Alamat Lengkap</label>
                <textarea class="form-control" id="alamatLengkap" rows="3" required></textarea>
              </div>
              <div class="col-md my-3">
                <p>Pilih Pembayaran</p>
              </div>
              <div class="col-md-12 pb-4">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Virtual
                        Account</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row">
                          <div class="col-6 col-md-10 p-3">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment1" />
                              <label class="form-check-label" for="payment1">
                                <div><img src="{{ asset('/images/payment1.png') }}" alt="dm"
                                    class="img-fluid border-bottom border-3" style="height: 50px"/></div>
                              </label>
                            </div>
                          </div>
                          <div class="col-6 col-md-10 p-3">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment2" />
                              <label class="form-check-label" for="payment2">
                                <div><img src="{{ asset('/images/payment2.png') }}" alt="dm"
                                    class="img-fluid border-bottom border-3" style="height: 50px"/></div>
                              </label>
                            </div>
                          </div>
                          <div class="col-6 col-md-10 p-3">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment3" />
                              <label class="form-check-label" for="payment3">
                                <div><img src="{{ asset('/images/payment3.png') }}" alt="dm"
                                    class="img-fluid border-bottom border-3" style="height: 50px"/></div>
                              </label>
                            </div>
                          </div>
                          <div class="col-6 col-md-10 p-3">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment4" />
                              <label class="form-check-label" for="payment4">
                                <div><img src="{{ asset('/images/payment4.png') }}" alt="dm"
                                    class="img-fluid border-bottom border-3" style="height: 50px"/></div>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="row pb-5">
                  <button type="submit" class="btn btn-info fw-bold text-white">Checkout</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @push('script')
    <script src="{{ asset('/js/script.js') }}"></script>
  @endpush
@endsection
