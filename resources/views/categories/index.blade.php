@extends('base')
@section('main')
<div class="container mt-4">
<div style="display:flex; gap:2rem; justify-content-around">
<div class="d-flex flex-wrap">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true" > <h3>les catégories</h3> </li>
        @foreach ($categories as $categorie)
        <li class="list-group-item"> <h5>{{$categorie->libelle}} </h5>
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

<div class="bg-light border " style="height: 15rem;">
    <h3 class="bg-primary p-3 text-light rounded-1" >Ajouter une catégorie</h3>
    <form action="{{route('categorie.store')}}" method="POST" class="p-2">
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
<div style="display: flex; justify-content:center;"> {{$categories->links()}}</div>
<div style="width: 100%; height:2rem;"></div>
</div>
@endsection
