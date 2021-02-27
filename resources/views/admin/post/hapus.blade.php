@extends('template_admin.home')
@section('sub-judul', 'Recycle Post')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Post</th>
            <th>Kategori</th>
            <th>Daftar Tags</th>
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
                               <li> {{ $tag->name }} </li>
                           </ul>
                       @endforeach
                   </td>
                   <td><img src=" {{ asset( $hasil->gambar ) }} " style="width:100px"></td>
                   <td>
                       <form action=" {{ route('post.delete', $hasil->id) }} " method="POST">
                           @csrf
                           @method('delete')
                           <a href=" {{ route('post.restore', $hasil->id) }} " class="btn btn-warning btn-sm">Restore</a>
                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                       </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
    {{ $post->links() }}
@endsection