@extends('app')

@section('content')
    <h1>My Projects</h1>
    <div class="project-list">
        @foreach ($projects as $project)
            <div class="project">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
                <a href="{{ $project->github_link }}" target="_blank">View on GitHub</a>
                @if ($project->image_path)
                    <img src="{{ asset('storage/' . $project->image_path) }}" alt="Project Image" style="width:150px;height:auto;">
                @endif
            </div>
        @endforeach
    </div>
@endsection

