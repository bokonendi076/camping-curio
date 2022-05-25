@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Beschikbaarheidsform</h1>
    <form action="{{route('checkdate')}}" method="GET">
        <label for="">start datum</label>
        <input class="form-control" name="start-date" type="date">

        <label for="">tot datum</label>
        <input class="form-control" name="end-date" type="date">

        <label for="">plaats</label>
        <select class="form-control" name="plaats" id="plaats">
            @foreach ($plaatsen as $plaats)
                <option value="{{$plaats->code}}">{{$plaats->code}}</option>
            @endforeach
        </select><br>

        <input class="btn btn-primary" type="submit">
    </form>
    <div><a href=""></a></div>
</div>
    <script>
    </script>
@endsection