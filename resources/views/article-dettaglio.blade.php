<x-layout>
  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-md-4 d-flex align-items-center">
        <div class="card mb-3" style="max-width: 540px;">
        @if(!$article->cover)
            <img src="https://picsum.photos/300/200" class="img-fluid" alt="...">
            @else
            <img src="{{Storage::url($article->cover)}}" class="img-fluid" style="height: 12rem;" alt="...">
            @endif
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$article->name}}</h5>
            <p class="card-text">{{$article->console}}</p>
            <p class="card-text">{{$article->date}}</p>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>    
    </div>                    
  </div>
</x-layout>