@extends('user.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Manage Platforms</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#platformModal">Edit Platforms</button>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($allPlatforms as $platform)
                <tr>
                    <td>{{ $platform->name }}</td>
                    <td>
                        <span class="badge bg-{{ in_array($platform->id, $userPlatforms) ? 'success' : 'secondary' }}">
                            {{ in_array($platform->id, $userPlatforms) ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">No platforms available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="platformModal" tabindex="-1" aria-labelledby="platformModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('user.platforms.sync') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="platformModalLabel">Select Platforms</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach($allPlatforms as $platform)
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="platforms[]"
                                value="{{ $platform->id }}"
                                id="platform-{{ $platform->id }}"
                                {{ in_array($platform->id, $userPlatforms) ? 'checked' : '' }}>
                            <label class="form-check-label" for="platform-{{ $platform->id }}">
                                {{ $platform->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Platforms</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
