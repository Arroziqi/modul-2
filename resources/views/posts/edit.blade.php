<!-- resources/views/posts/edit.blade.php -->

@extends('layout.app')

@section('content')
    <div class="container">
        <div class="cover-create-post">
            <div class="create-post">
                <h1>Buat Postingan Baru</h1>
                <form action="{{ route('posts.update', $post->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="text" name="judul" id="judul" value="{{ $post->title }}" placeholder="Judul postingan"
                        required>
                    <textarea name="content" id="mytextarea" placeholder="Tulis content blog anda di sini..." required>{{ $post->content }}</textarea>
                    <div class="input-img">
                        <div class="category">
                            <h6>Pilih kategori: </h6>
                            <select name="category" id="category">
                                <option value="0">select kategori</option>
                                <option value="1">UI/UX</option>
                                <option value="2">Web Development</option>
                                <option value="3">Javascript</option>
                                <option value="4">Laravel</option>
                            </select>
                        </div>
                        <div class="img">
                            <h6>Upload gambar di sini: </h6>
                            <input type="file" name="img" id="img">
                        </div>
                    </div>
                    <div class="navigator">
                        <a href="/" class="btn btn-back">Back</a>
                        <input type="submit" value="Update" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
