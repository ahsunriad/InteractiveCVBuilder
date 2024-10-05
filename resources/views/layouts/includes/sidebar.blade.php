<div class="sidebar">
    <h3 class="text-white text-center mt-3">CV Builder</h3>
    <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="/profile" class="{{ Request::is('profile') ? 'active' : '' }}"><i class="fas fa-user"></i> Profile</a>
    <a href="/edit-cv" class="{{ Request::is('edit-cv') ? 'active' : '' }}"><i class="fas fa-pencil-alt"></i> Edit CV</a>
    <a href="/view-cv" class="{{ Request::is('view-cv') ? 'active' : '' }}"><i class="fas fa-eye"></i> View CV</a>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-link text-white w-100 text-left">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </form>
</div>