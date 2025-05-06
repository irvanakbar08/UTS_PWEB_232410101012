<nav class="navbar">
    <div class="container">
        <a href="#" class="navbar-logo">AKBAR JAYA</a>
        <ul class="navbar-menu">
            <li><a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a></li>
            <li><a href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a></li>
            <li><a href="{{ route('profile', ['username' => $username]) }}">Profile</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
