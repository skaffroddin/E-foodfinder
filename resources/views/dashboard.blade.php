@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded">
                <div class="card-header bg-primary text-white text-center py-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- Display Profile Photo -->
                        <img src="{{ auth()->user()->profile_photo_url }}" alt="Profile Photo" class="rounded-circle" width="80" height="80">
                        <h3 class="ml-3">{{ auth()->user()->name }}</h3>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title text-center">Your Dashboard</h5>
                    <p class="card-text text-center mb-4">
                        This is your personalized dashboard. From here you can manage your profile, view updates, and more.
                    </p>

                    <h6>Quick Links:</h6>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Profile</a>
                        <a href="#" class="list-group-item list-group-item-action">Settings</a>
                        <a href="#" class="list-group-item list-group-item-action">Notifications</a>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="#" class="btn btn-primary">Manage Profile</a>
                        <a href="#" class="btn btn-secondary">View Settings</a>
                    </div>
                    
                    <!-- Logout Form -->
                    <div class="mt-4 text-center">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success message -->
@if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
