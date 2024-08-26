@extends('app')

@section('content')
    <h1>Add New Project</h1>

    <form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" required>{{ old('description') }}</textarea>
        </div>
        <div>
            <label>GitHub Link:</label>
            <input type="url" name="github_link" value="{{ old('github_link') }}" required>
        </div>
        <div>
            <label>Project Image:</label>
            <input type="file" name="image">
        </div>
        <button type="submit">Add Project</button>
    </form>
@endsection
