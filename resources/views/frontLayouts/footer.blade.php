<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
    .bottom-nav {
        display: none; /* Hidden by default on all screens */
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #dbaa49;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
        box-shadow: 0 -2px 5px rgba(0,0,0,0.2);
    }
    .bottom-nav a {
        text-decoration: none;
        color: black;
        font-size: 14px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
    }
    .bottom-nav a .material-icons {
        font-size: 24px; /* Adjust icon size */
    }
    .bottom-nav a.active {
        color: white; /* Active link color */
    }
    /* Show only on screens smaller than 768px (mobile) */
    @media (max-width: 768px) {
        .bottom-nav {
            display: flex;
        }
    }
</style>

<div class="bottom-nav">
    <a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <span class="material-icons">home</span>
        Home
    </a>
    <a href="{{route('updates')}}" class="{{ request()->routeIs('updates') ? 'active' : '' }}">
        <span class="material-icons">update</span>
        Update
    </a>
    <a href="{{route('bankDetail')}}" class="{{ request()->routeIs('bankDetail') ? 'active' : '' }}">
        <span class="material-icons">account_balance</span>
        Bank
    </a>
    <a href="{{route('contacts')}}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">
        <span class="material-icons">contact_phone</span>
        Contact
    </a>
</div>
