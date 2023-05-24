@extends('layouts/admin')

@section('content')

<div class="container p-5">

    <h3 class="display-5 fw-bold mb-5">
        Type: {{$type->title}} - projects list
    </h3>

    <hr class="mb-5">

    <p>
        <strong>Description</strong>: {{$type->description}}
    </p>

    <div class="mb-2">
        <a id="back-link" href="{{ route('admin.types.index') }}">Back to all types preview</a>
    </div>

</div>
@endsection