@extends('home')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Data Ujian PTS</h1>
            <hr>
            <form action="{{ route('ptsAdmin.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="namaujian">Nama Ujian:</label>
                    <input type="text" class="form-control" id="namaujian" name="namaujian">
					<label for="pendaftaran">Pendaftaran:</label>
                    <input type="date" class="form-control" id="pendaftaran" name="pendaftaran">
					<label for="penutupan">Penutupan:</label>
                    <input type="date" class="form-control" id="penutupan" name="penutupan">
					<label for="tanggalujian">Tanggal Ujian:</label>
                    <input type="date" class="form-control" id="tanggalujian" name="tanggalujian">	
                    <label for="pengumuman">Pengumuman:</label>
                    <input type="date" class="form-control" id="pengumuman" name="pengumuman">
                    <label for="biaya">Biaya:</label>
                    <input type="number" class="form-control" id="biaya" name="biaya">
				</div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection