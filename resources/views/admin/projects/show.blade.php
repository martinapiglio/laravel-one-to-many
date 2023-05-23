@extends('layouts/admin')

@section('content')

<div class="container p-5">

    <h3 class="display-5 fw-bold mb-5">
        {{$project->title}}
    </h3>

    <hr class="mb-5">

    <p>
        <strong>Description</strong>: {{$project->description}}
    </p>

    <div class="mb-3">
        <strong>Project type</strong>: {{$project->type->title ?? 'Unknown'}}
        {{-- you can also use -->     {{$project->type?->title}}     that shows the title when exist, otherwise blank --}}
    </div>

    <img class="img-thumbnail mb-2" src="{{$project->thumbnail}}" alt="">
    <div class="mb-2"><strong>Languages</strong>: {{$project->languages}}</div>
    <div class="mb-2"><strong>Github repository name</strong>: {{$project->github_repo}}</div>
    <div class="mb-3"><strong>Year</strong>: {{$project->year}}</div>

    <button id="change-btn" class="btn text-white">
        <a href="{{route('admin.projects.edit', $project->slug)}}">Change</a>
    </button>

    {{-- modal --}}
    <button type="button" class="btn bg-danger text-white" data-bs-toggle="modal" data-bs-target="#deleteProject">
        Delete Project
    </button>

    <div class="modal fade text-dark" id="deleteProject" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                </div>

                <div class="modal-body">
                    Do you want to delete the selected project? Please consider that this action is irreversible.
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                    <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                        @csrf
                        @method('DELETE')
                
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>

                </div>

            </div>
        </div>
    </div> 
    {{-- // modal --}}

    <div class="mb-2">
        <a id="back-link" href="{{route('admin.projects.index')}}">Back to all projects preview</a>
    </div>

</div>
@endsection