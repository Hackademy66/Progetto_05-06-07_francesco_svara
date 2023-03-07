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
        <div class="col-12 col-md-8">
            <div class="card custom-card">
                <img src="https://picsum.photos/300/200" class="img-fluid" alt="...">
                <div class="p-2">
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