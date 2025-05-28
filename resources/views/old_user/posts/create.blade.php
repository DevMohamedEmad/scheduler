@extends('user.layout')

@section('content')
    <div class="container">
        <h2>Create New Post</h2>
        <hr>
        
        <form action="{{ route('user.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title <small class="text-muted"
                        id="titleCounter"></small></label>
                <input type="text" class="form-control" name="title" id="title" maxlength="100" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            <!-- Platform -->
            <div class= "mb-3">

                <select name="platform_ids[]" id="platform_ids" class="form-select" required 
                    multiple>
                    <option value="">Select Platform</option>
                    @foreach ($platforms as $platform)
                        <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                    @endforeach
                </select>
                @error('platform_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Content -->
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="6" required></textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Image </label>
                <input type="file" class="form-control" name="image" accept="image/*" id="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror    
            </div>

            <!-- Scheduled Date & Time -->
            <div class="mb-3">
                <label for="scheduled_for" class="form-label">Schedule Post</label>
                <input type="datetime-local" name="scheduled_time" class="form-control">
                @error('scheduled_for')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror    
            </div>

            <button type="submit" class="btn btn-primary">Save Post</button>
        </form>
    </div>
@endsection