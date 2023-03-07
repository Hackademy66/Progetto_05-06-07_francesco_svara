<x-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h1>INSERISCI ARTICOLO</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-5 shadow" method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
            @csrf
              <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
              </div>
              <div class="form-group">
                <label for="producer">Produttore</label>
                <input type="producer" name="producer" class="form-control" id="producer" value="{{old('producer')}}">
              </div>
              <div class="form-group">
                <label for="cover">Copertina</label>
                <input type="file" name="cover" class="form-control" id="cover">
              </div>
              <div class="form-group">
                <label for="description">Testo</label>
                <textarea type="text" name="description" class="form-control" id="description" cols="30" rows="10" value="{{old('description')}} placeholder="Inserisci qui il testo"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Inserisci articolo</button>
               <a href="{{route('homepage')}}" type="submit" class="btn btn-primary">Torna Indietro</a>
            </form>
        </div>
    </div>
</div>


</x-layout>