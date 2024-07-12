@extends('admin.dashboard')

@section('content')
<div class="container">
    <h1>Create New Postingan</h1>
    <form action="{{ route('postingans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
