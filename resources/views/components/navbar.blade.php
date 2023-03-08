<nav id='menu'>
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    @Auth
    <li><a href="{{route('homepage')}}">Home</a></li>
    <li><a href="{{route('services')}}">Servizi</a></li>
    <li><a href="{{route('articles')}}">Articoli</a></li>
    <li><a href="{{route('create')}}">Inserisci articolo</a></li>
    <li><a href="{{route('about')}}">About</a></li>
    <li><a href="{{route('contact')}}">Contattaci</a></li>
    <li><a href="{{route('register')}}">Profilo</a></li>
    <li><a href="#">Benvenuto {{Auth::user()->name}}</a></li>
    <li><a href="{{route('register')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a></li>
    <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@Csrf</form>
    @else
    <li><a href="{{route('homepage')}}">Home</a></li>
    <li><a href="{{route('services')}}">Servizi</a></li>
    <li><a href="{{route('articles')}}">Articoli</a></li>
    <li><a href="{{route('create')}}">Inserisci articolo</a></li>
    <li><a href="{{route('about')}}">About</a></li>
    <li><a href="{{route('contact')}}">Contattaci</a></li>
    <li><a href="{{route('register')}}">Registazione</a></li>
    <li><a href="{{route('login')}}">login</a></li>
    @endAuth
  </ul>
</nav>