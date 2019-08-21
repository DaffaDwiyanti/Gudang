<div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($barang, ['route' => ['gudang/updateB', $barang->id_barang], 'method' => 'PATCH']) !!}

                      @include('adminlte-templates::common.errors')
                      <div class="box box-primary">
                <div class="card-body">
                    {{csrf_field()}}
                        <div class="form-group row">
                            <label for="id_barang" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="id_barang" type="text" class="form-control @error('name') is-invalid @enderror" name="id_barang" value="{{$barang['id_barang']}}"  autocomplete="name" autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="namaBarang" type="text" class="form-control" name="namaBarang" value="{{$barang['namaBarang']}}" required >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-md-4 col-form-label text-md-right">{{ __('Stok') }}</label>

                            <div class="col-md-6">
                                <input id="stok" type="text" class="form-control" name="stok" value="{{$barang['stok']}}" required >

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{$barang['deskripsi']}}" required >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="tgl_kadaluarsa" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Kadaluarsa') }}</label>

                            <div class="col-md-6">
                                <input id="tgl_kadaluarsa" type="date" class="form-control " name="tgl_kadaluarsa" value="{{$barang['tgl_kadaluarsa']->toDateString()}}" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_dibuat" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Dibuat') }}</label>

                            <div class="col-md-6">
                                <input id="tgl_dibuat" type="date" class="form-control " name="tgl_dibuat" value="{{$barang['tgl_dibuat']->toDateString()}}" >
                                
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>

                            <div class="col-md-6">
                                <input id="gambar" type="text" class="form-control @error('name') is-invalid @enderror" name="gambar" value="{{$barang['gambar']}}" required autocomplete="name" autofocus>

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="id_suplier" class="col-md-4 col-form-label text-md-right">{{ __('ID Supplier') }}</label>

                            <div class="col-md-6">
                                <input id="id_suplier" type="text" class="form-control" name="id_suplier" value="{{$barang['id_suplier']}}" required >

                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" formaction="/gudang/update/{{$barang['id']}}}" class="btn btn-primary" value="SIMPAN">
                                </input>
                            </div>
                        </div>
                </div>
                  </div>
                
              </div>

              {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>