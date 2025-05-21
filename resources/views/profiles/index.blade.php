@extends('layouts.app')

@section('title', 'Profile Page')

@section('content')
        <div class="row mx-auto ">
            <!-- Left Column -->
            <div class="col-md-4">
                <div class="card text-center p-3">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="100"
                        class="rounded-circle mx-auto">
                    <h4 class="mt-2">Contoh HTML Web Profil</h4>
                    {{-- <p class="text-secondary">{{ $profile->job_title }}</p> --}}
                    <div>
                        <button class="btn btn-primary">Follow</button>
                        <button class="btn btn-outline-primary">Message</button>
                    </div>
                </div>
                <div class="card mt-3 p-3">
                    <p><strong>Website:</strong> {{ $profile->website }}</p>
                    <p><strong>Github:</strong> {{ $profile->github }}</p>
                    <p><strong>Twitter:</strong> {{ $profile->twitter }}</p>
                    <p><strong>Instagram:</strong> {{ $profile->instagram }}</p>
                    <p><strong>Facebook:</strong> {{ $profile->facebook }}</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-8">
                <div class="card p-4 mb-3">
                    <div class="row mb-2">
                        <div class="col-sm-3">Name</div>
                        <div class="col-sm-9 text-secondary">{{  $profile->name }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-3">Email</div>
                        <div class="col-sm-9 text-secondary">{{ $profile->email}} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-3">Phone</div>
                        <div class="col-sm-9 text-secondary">{{ $profile->phone}}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-3">Address</div>
                        <div class="col-sm-9 text-secondary">{{ $profile->address}}</div>
                    </div>

                    <!-- Tombol Modal Edit -->
                    <button type="button" class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#editModal">
                        Edit Profile
                    </button>
                </div>

                <!-- Optional Project Status Section -->
                <div class="card p-3">
                    <h6><i>assignment</i> Project Status</h6>
                    <p>Web Design</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <p>Website Markup</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>
                    <p>One Page</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <p>Mobile Template</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('profiles.form', [
                            'action' => route('profiles.update', $profile->id),
                            'method' => 'PUT',
                            'profile' => $profile,
                        ])
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this profile?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
