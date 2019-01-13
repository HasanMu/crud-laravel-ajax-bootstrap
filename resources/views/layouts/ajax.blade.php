<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-black" style="background-color: whitesmoke;">
        <a class="navbar-brand" href="#">AjaxCRUD</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

      <div class="container">
          @yield('content')
      </div>

    {{-- Form Tambah Data --}}
    @include('post.create')

    {{-- Form Edit Data --}}
    @include('post.edit')

    {{-- Form Detail Data --}}
    @include('post.show')

    {{-- Form Hapus Data --}}
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #ff1c1c;">
                    <h5 class="modal-title" style="color: white;">Hapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin akan menghapus data<br> secara permanen?</p>
                    <br>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('post.destroy', 'test')}}" method="post">
                        @csrf
                        @method('delete')

                        <input type="hidden" name="post_id" id="post_id">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tidak, Kembali</button>
                        <button type="submit" class="btn btn-outline-danger">Ya, Hapus data!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $('#edit').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('title') // Extract info from data-* attributes
            var content = button.data('content')
            var post_id = button.data('postid')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            var modal = $(this)

            modal.find('.modal-body #title').val(title)
            modal.find('.modal-body #content').val(content)
            modal.find('.modal-body #post_id').val(post_id)
        });
    </script>

    <script>
        $('#detail').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var title = button.data('title')
            var content = button.data('content')

            var modal = $(this)

            modal.find('.modal-body #title').val(title)
            modal.find('.modal-body #content').val(content)
        });
    </script>

    <script>
        $('#delete').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var post_id = button.data('postid')

            var modal = $(this)

            modal.find('.modal-footer #post_id').val(post_id)
        });
    </script>
  </body>
</html>