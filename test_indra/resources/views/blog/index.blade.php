<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kendaraan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('blog.create') }}" class="btn btn-md btn-success mb-3">TAMBAH KENDARAAN</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">KETERANGAN</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($blogs as $blog)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{!! $blog->content !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Kendaraan
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
<!-- Bottom Navbar -->
<link rel="stylesheet" href="style.css">
<div>
    <nav class="navbar navbar-dark bg-light navbar-expand fixed-bottom">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
            <img src="{{ ('img/home_24px_outlined.svg ') }}">
            <a href="{{ route('dashboard.index') }}"  class="nav-link">
            <button class="btn btn-home btn-light">Home</button>        
                </a>
            </li>
            <li class="nav-item">
            <img src="{{ ('img/add_shopping_cart_24px_outlined.svg ') }}">
                <a href="#" class="nav-link">
                <button class="btn btn-home btn-light">Cart</button>  
                </a>
            </li>
            <li class="nav-item">
            <img src="{{ ('img/perm_identity_24px_outlined.svg ') }}">
            <a href="{{ route('dashboard.account') }}" class="nav-link">
            <button class="btn btn-home btn-light">Account</button> 
                </a>
            </li>
        </ul>
    </nav>
</div>
</body>
</html>