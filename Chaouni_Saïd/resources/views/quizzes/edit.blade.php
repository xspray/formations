@extends('layouts.default')

@section('content')

<div class="edit">

    <form action="/quizzes/{{ $quiz->id }}" method="post">
        @csrf
        @method('put')
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="{{ $quiz->titre }}" required>
        <input type="hidden" name="modules_id" id="modules_id" value="{{ $quiz->modules_id }}" required>
        <input type="submit">
    </form>

</div>


@endsection