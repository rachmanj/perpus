@extends('frontend.templates.default')

@section('content')
    <div class="row">
        <h4>Buku yang sedang dipinjam</h4>

        @foreach ($books as $book)
        <div class="col s8 m12">
            <div class="card horizontal hoverable">
                <img src="{{ $book->getCover() }}">
        
                <div class="card-stacked">
                    <div class="card-content">
                        <h4 class="red-text accent-2">{{ $book->title }}</h4>
                        <blockquote>
                            <p>{{ $book->description }}</p>
                        </blockquote>
                        <p>
                            Author : {{ $book->author->name }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        


    </div>
@endsection
