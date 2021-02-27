@extends('template_admin.home')
@section('sub-judul', 'Post')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

    <a href=" {{ route('post.create') }} " class="btn btn-primary btn-sm">Tambah Post</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Post</th>
            <th>Kategori</th>
            <th>Daftar Tags</th>
            <th>Creator</th>
            <th>Thumbnail</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($post as $result => $hasil)
                <tr>
                   <td> {{ $result + $post->firstitem() }} </td>
                   <td> {{ $hasil->Judul }} </td>
                   <td> {{ $hasil->category->name }} </td>
                   <td>
                       @foreach ($hasil->tags as $tag)
                           <ul>
                             <span class="badge badge-secondary"> {{ $tag->name }} </span>
                           </ul>
                       @endforeach
                   </td>
                   <td> {{ $hasil->users->name }} </td>
                   <td><img src=" {{ asset( $hasil->gambar ) }} " style="width:100px"></td>
                   <td>
                       <form action=" {{ route('post.destroy', $hasil->id) }} " method="POST">
                           @csrf
                           @method('delete')
                           <a href=" {{ route('post.edit', $hasil->id) }} " class="btn btn-info btn-sm">Edit</a>
                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                       </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
    {{ $post->links() }}
@endsection