@extends('template')
@section('content')
    <section class="main-section">
      <div class="content">
        <h1>Tambah pembelian</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
        @endif

        <form action="{{ route('pembelian.store') }}" method="post">
          {{ csrf_field() }}
          <div class="from-group">
            <label for="nama">Id:</label>
            <input type="text" class="form-control" id="usr" name="id">
          </div>
          <div class="from-group">
            <label for=kd_barang>kd_barang</label>
            <select name="kd_barang" class="form-control">
              @foreach($data as $datas)
                  <option value="{{ $datas->kd_barang }}">{{ $datas->kd_barang }} ||
                  {{ $datas->nama_barang }}</option>
              @endforeach
            </select>
          </div>


          <div class="from-group">
            <label for="nama">jml</label>
            <input type="text" class="form-control" id="jml" name="jml">
          </div>
          <div class="from-group">
            <label for="nama">total_harga</label>
            <textarea class="form-control" id="total_harga" name="total_harga"></textarea>
          </div>
          <div class="from-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </section>
    @endsection
