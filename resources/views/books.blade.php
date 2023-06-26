@extends('layouts.base')

@section('contents')
    <h2>questi sono i nostri libri</h2>
    
    <div class="row row-cols-3">
        @foreach ($arrBooks as $book)
            <div class="col">
                
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('/resources/img/' . $book->img) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->plot }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach 
    </div>
    
   
@endsection