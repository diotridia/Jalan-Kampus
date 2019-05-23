@extends('home')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Ujian PTS</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('ptsAdmin.update', $datas->id) }}" method="post"> <!-- pts = nama controller // update = nama fungsi -->
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="namaujian">Nama Ujian:</label>
                    <input type="text" class="form-control" id="namaujian" name="namaujian" value="{{ $datas->namaujian }}">
                </div>
				<div class="form-group">
                    <label for="pendaftaran">Pendaftaran:</label>
                    <input type="date" class="form-control" id="pendaftaran" name="pendaftaran" value="{{ $datas->pendaftaran }}">
                </div>
				<div class="form-group">
                    <label for="penutupan">Penutupan:</label>
                    <input type="date" class="form-control" id="penutupan" name="penutupan" value="{{ $datas->penutupan }}">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Ujian:</label>
                    <input type="date" class="form-control" id="tanggalujian" name="tanggalujian" value="{{ $datas->tanggalujian }}">
                </div>
                <div class="form-group">
                    <label for="pengumuman">Pengumuman:</label>
                    <input type="date" class="form-control" id="pengumuman" name="pengumuman" value="{{ $datas->pengumuman }}">
                </div>
           
                <div class="form-group">
                    <label for="biaya">Biaya:</label>
                    <input type="number" class="form-control" id="biaya" name="biaya" value="{{ $datas->biaya }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection