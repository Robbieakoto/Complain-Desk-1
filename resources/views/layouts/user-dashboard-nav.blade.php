<nav class="navbar navbar-expand-md navbar-dark text-white" style="background-color:#0054a6">
    <a class="navbar-brand" href="{{ url('/home') }}">
        <img class="img-responsive2" src="{{ asset('img/cmp.png') }}" style="width:70px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        </ul>
        <span>Hello, {{ Auth::user()->name }}</span> &nbsp&nbsp

        <form id="logout-form" method="POST" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
            @csrf
            <button type="submit" class="btn btn-outline-primary text-white">Log out</button>
        </form>
    </div>
</nav>
<div class="nav-scroller bg-white box-shadow">
    <nav class="nav nav-underline">

        @if (Auth::user()->is_admin)
        <a class="nav-link active" href="{{ url('/home') }}">Dashboard</a>
        <a class="nav-link" href="{{ url('/admin/tickets') }}">All Tickets</a>
        <a class="nav-link" href="{{ url('/admin/category') }}">Category</a>
        <a class="nav-link" href="{{ url('/admin/users') }}">Users</a>
        <!--  <a class="nav-link" href="{{ url('/admin/logs') }}">Logs</a> -->
        @else
        <a class="nav-link active" href="{{ url('/home') }}">Dashboard</a>
        <a class="nav-link" href="{{ url('/mytickets') }}">My Tickets</a>
        <a class="nav-link" href="{{ url('/tickets') }}">Open Ticket</a>
        @endif
        <a class="nav-link" href="{{ url('/settings') }}">Settings</a>

    </nav>
</div>