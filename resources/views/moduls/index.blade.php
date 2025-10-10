<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hallaman Admin - dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center text-yellow-200">
                    <h3 class=" my-4">Hallaman Admin - dashboard</h3>
                    <div class="flex p-3">
                    @if (Auth::check())
                        <b>Hallo {{ Auth::user()->name }}</b>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                Logout
                            </button>
                        </form>
                    @endif
                    </div>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="/" class="btn btn-primary mb-3">Home</a>
                        {{-- <a href="{{ route('moduls.create') }}" class="btn btn-md btn-success mb-3">Tambah Product</a> --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">DESKRIPSI 1</th>
                                    <th scope="col">JUDUL KONTEN 1</th>
                                    <th scope="col">KONTEN 1</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($moduls as $modul )
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/products/'.$modul->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $modul->title }}</td>  
                                        <td>{{ $modul->deskripsi1 }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin? ');" action="{{ route('products.destroy', $modul->id) }}" method="POST">
                                                <a href="{{ route('products.show', $modul->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('products.edit', $modul->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Product Belum Tersedia
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $moduls->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>

</body>
</html>