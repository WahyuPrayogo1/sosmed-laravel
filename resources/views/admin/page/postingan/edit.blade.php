@extends('admin.dashboard')

@section('content')
<div class="container">
    <h1>Edit Postingan</h1>
    <form action="{{ route('postingans.update', $postingan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" required>{{ $postingan->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($postingan->image)
                <img src="{{ asset('storage/postingans/' . $postingan->image) }}" alt="Image" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
