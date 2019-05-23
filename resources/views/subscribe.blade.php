<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jalan Kampus</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/vend/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/vend/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="Sub/css/landing-page.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.bawah {
    margin-bottom: -10px;
}
</style>
  </head>

  <body>

    <!-- Masthead -->
            @if(Session::has('alert-failed'))
            <div class="alert alert-danger alert-dismissible bawah">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Gagal!</strong> Email yang anda masukkan sudah terdaftar.
            </div>
            @endif
            @if(Session::has('alert-success'))
            <div class="alert alert-success alert-dismissible bawah">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Berhasil!</strong> Anda sekarang telah berlangganan .
            </div>
            @endif
    <header class="masthead text-white text-center">

      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Dapat informasi lebih lanjut seputar jadwal ujian dengan subscribe website Jakam Indonesia</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <form action="{{ route('subscribe.store') }}" method="post" >
                  {{ csrf_field() }}
                    <input type="email" class="form-control form-control-lg" placeholder="Masukkan email anda..." id="email" name="email">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Subscribe</button>
                </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </header>
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
