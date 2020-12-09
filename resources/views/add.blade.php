@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto rounded mb-4" src="https://avatars2.githubusercontent.com/u/57986114?s=460&u=79335adb20361b6d0b3ea7bfd7d972af4269daab&v=4" alt="Nicola's Github Profilbild" width="72" height="72">
      <h2>Essmöglichkeiten Hinzufügen</h2>
      <p class="lead">Hier könnte man Erklären wofür dieses Formular verwendet wird - we dont do that here</p>
    </div>

    <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-8">
        <h4 class="mb-3">Neue Essmöglichkeit Hinzufügen</h4>
        <form action="/add/item" method="POST">
            @csrf
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="food">Name der Essmöglichkeit</label>
              <input type="text" class="form-control" id="food" name="food" placeholder="" value="" required="">
              <div class="invalid-feedback">
                This shit aint Valid
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Add it</button>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection
