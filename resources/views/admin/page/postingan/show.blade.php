@extends('admin.dashboard')
@section('content')
<div class="container">
    <h1>Postingan Detail</h1>
    <div>
        <h3>{{ $postingan->body }}</h3>
        @if($postingan->image)
            <img src="{{ asset('storage/postingans/' . $postingan->image) }}" alt="Image" width="300">
        @endif
    </div>
    <a href="{{ route('postingans.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
