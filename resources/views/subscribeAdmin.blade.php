@extends('home')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>DATA UJIAN PTS</h1>
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
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->email }}</td>
                        <td>
                            <form action="{{ route('subscribeAdmin.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
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