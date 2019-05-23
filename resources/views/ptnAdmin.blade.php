@extends('home')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Table PTN</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <input id="myInput" type="text" placeholder="Search..">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Ujian</th>
                    <th>Pendaftaran</th>
                    <th>Penutupan</th>
                    <th>Tanggal Ujian</th>
                    <th>Pengumuman</th>
                    <th>Penyelenggara</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="myTable">
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->namaujian }}</td>
                        <td>
                            <?php setlocale(LC_TIME, 'Indonesian');
                            echo strftime("%d %B %Y", strtotime( $d->pendaftaran));?>
                        </td>
                        <td>
                            <?php setlocale(LC_TIME, 'Indonesian');
                            echo strftime("%d %B %Y", strtotime( $d->penutupan));?>
                        </td>
                        <td>
                            <?php setlocale(LC_TIME, 'Indonesian');
                            echo strftime("%d %B %Y", strtotime( $d->tanggalujian));?>
                        </td>
                        <td>
                            <?php setlocale(LC_TIME, 'Indonesian');
                            echo strftime("%d %B %Y", strtotime( $d->pengumuman));?>
                        </td>
                        <td>{{ $d->penyelenggara }}</td>
                        <td>
                            <form action="{{ route('ptnAdmin.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('ptnAdmin.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection