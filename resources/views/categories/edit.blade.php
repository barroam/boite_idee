@extends('layout.base')
@section('main')
<div class="container mt-4">
<div style="display:flex; gap:2rem; justify-content-around">


<div class="">
    <h1>Modifier une catégorie</h1>
    <form action="{{ route ( 'categorie.update',$categorie )}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="libelle" name="libelle" value="{{$categorie->libelle}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</div>
<div style="width: 100%; height:2rem;"></div>
</div>
@endsection
