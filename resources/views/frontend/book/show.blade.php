@extends('frontend.templates.default')

@section('content')
<div class="col s12 m12">
    <h3>Detail Buku</h3>
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
                <p>
                    Stock : {{ $book->qty }}
                </p>
            </div>
            <div class="card-action">
                <form action="{{ route('book.borrow', $book) }}" method="POST">
                    @csrf
                    <input type="submit" value="Pinjam Buku" class="btn red accent-1 right waves-effect waves-light">
                </form>
            </div>
        </div>
    </div>
</div>

<h5>Buku lainnya dari penulis {{ $book->author->name }}</h5>

<div class="row">
    
    @foreach ($book->author->books->shuffle()->take(4) as $book)
    @include('frontend.templates.components.card-book', ['book' => $book])
    @endforeach
</div>
    
@endsection