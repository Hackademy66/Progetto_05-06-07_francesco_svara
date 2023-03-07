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
            <form class="p-5 shadow" method="POST" action="{{route('store')}}">
                @csrf
              <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" class="form-control" id="title">
              </div>
              <div class="form-group">
                <label for="producer">Produttore</label>
                <input type="producer" name="producer" class="form-control" id="producer">
              </div>
              <div class="form-group">
                <label for="description">Testo</label>
                <textarea type="text" name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Inserisci qui il testo"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Inserisci articolo</button>
               <a href="{{route('homepage')}}" type="submit" class="btn btn-primary">Torna Indietro</a>
            </form>
        </div>
    </div>
</div>


</x-layout>