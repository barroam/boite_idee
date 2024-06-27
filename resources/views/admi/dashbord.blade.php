@extends('base')
@section('main')
<div style="display:flex; gap:2rem; justify-content-around">
<div class="d-flex flex-wrap">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Les catégories</li>
        @foreach ($categories as $categorie)

        <li class="list-group-item">  {{$categorie->libelle}}
            <div class="d-flex " style="gap:2rem;" >
                 <a class="btn btn-primary" href="{{route('categorie.edit',$categorie)}}">Modifier </a>
                <form action="{{route('categorie.destroy',$categorie)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            @endforeach
      </ul>



</div>

<div class="">
    <h1>Ajout de catégorie</h1>
    <form action="{{route('categorie.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

</div>
<div style="width: 100%; height:2rem;"></div>
@endsection
