
@props(['active'])
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <div class="navbar-brand">
            <h4 class="fw-bold">Comics</h4>
        </div>
        <button class="navbar-toggler" data-bs-target="#navmenu" data-bs-toggle="collapse"><span class="navbar-toggler-icon"></span></button>
        <div id="navmenu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <strong class="nav-link">Welcome, {{auth()->user()->name}}</strong>
                    </li>
                @endauth
                <li class="nav-item">
                    
                    <form action="/comis">
                        <div class="input-group">
                            <input name="search" placeholder="Search" type="text" class="form-control">
                            <button class="btn btn-light">Search</button>
                        </div>
                    </form>
                    
                </li>
                <li class="nav-item">
                    <a href="/comis" class="<?php if($active == 'home'){ echo 'active'; } ?> nav-link">Home</a>
                </li>
                <li>
                    <a href="add" class="<?php if($active == 'add'){ echo 'active'; }?> nav-link">Add</a>
                </li>
                @auth
                @else
                <li>
                    <a href="register" class=" nav-link">Sign Up</a>
                </li>
                <li>
                    <a href="login" class="<?php if($active == 'login'){ echo 'active'; }?> nav-link">Sign In</a>
                </li>
                @endauth
                @auth
                <li>
                    <form action="logout" method="POST">
                        @csrf
                        <button class="btn btn-link  nav-link">Log Out</a>
                    </form>
                    
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>