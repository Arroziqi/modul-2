<!-- resources/views/posts/show.blade.php -->

@extends('layout.app')

@section('content')
    <div class="container">
        <div class="cover-grid">
            {{-- <div class="main-content"></div> --}}
            <div class="grid">
                <div class="left-section">
                    <div class="nav-float">
                        <a href="{{ route('posts.edit', $post->id) }}"> <i class="fa-solid fa-xl fa-pen-to-square"></i></a>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input id="delete-btn" hidden type="submit"><label for="delete-btn"><i
                                    class="fa-solid fa-xl fa-trash"></i></label>
                        </form>
                        <br>
                        <a href=""><i class="fa-brands fa-xl fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-xl fa-linkedin"></i></a>
                        <a href=""><i class="fa-brands fa-xl fa-youtube"></i></a>
                        <a href=""><i class="fa-brands fa-xl fa-github"></i></a>
                    </div>
                </div>
                <div class="mid-section">
                    <div class="text-category">#Web Development</div>
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->content }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum quis
                        architecto officiis natus? Consequuntur corrupti odit dolorum nisi a ipsam ab praesentium, dolorem
                        eos deserunt, culpa blanditiis quaerat sit dicta repudiandae debitis iusto omnis! Quam adipisci
                        quaerat voluptate ipsum itaque earum in minima laudantium ipsam vitae! Itaque, nemo quis, autem
                        voluptas, unde porro deserunt earum corporis fuga quia qui rerum sunt accusantium velit eveniet
                        saepe sit vero atque quae vitae. Nesciunt sunt ex, temporibus eius voluptates quaerat id, placeat,
                        nemo distinctio totam quae cum in? Quidem adipisci, unde laboriosam, exercitationem inventore
                        ducimus nobis, nesciunt dolore impedit minima at iusto?</p>
                </div>
                <div class="right-section">
                    <div class="table-of-content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, voluptatem.</p>
                    </div>
                    <div class="news"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
