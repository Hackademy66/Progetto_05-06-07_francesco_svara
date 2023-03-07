<x-layout>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h1>HOMEPAGE</h1>
        </div>
        <div class="col-12 col-md-8">
        @if (session()->has('articleCreated'))
          <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{ session('articleCreated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session('emailError'))
          <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
            {{ session('emailError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      </div>
    </div>
</div>

</x-layout>