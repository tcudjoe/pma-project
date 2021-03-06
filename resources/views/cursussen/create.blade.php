@extends('layouts.app')

@section('content')
<div class="col">
    <form action="{{ route('cursussen.store') }}" method="POST">

        @include('cursussen.fields')

        <div class="form-group row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Cursus toevoegen</button>
            </div>
            <div class="col-sm-9">
                <a href="{{ route('cursussen.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection