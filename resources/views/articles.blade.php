<x-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h1>IL NOSTRO BLOG</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        @foreach($articles as $article)
        <div class="col-12 col-md-4">
            <div class="card">
                @if(!$article->cover)
                <img src="https://picsum.photos/300/200" class="img-fluid" alt="...">
                @else
                <img src="{{Storage::url($article->cover)}}" class="img-fluid" style="height: 12rem;" alt="...">
                @endif
                <div class="card-body p-2">
                    <h3>{{$article->title}}</h3>
                    <h3>{{$article->producer}}</h3>
                    <p class="card-text lead my-3 fs-6">by Francesco Svara</p>
                    <a href="#" class="stretched-link">Leggi di più</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</x-layout>