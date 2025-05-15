<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    .bottom-nav {
        display: none;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 50;
        width: 100%;
        background-color: #dbaa49;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.15);
    }

    .bottom-nav a {
        text-decoration: none;
        color: #1f2937; /* Gray-800 */
        font-size: 13px;
        font-weight: 500;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2px;
        transition: color 0.2s ease;
    }

    .bottom-nav a .material-icons {
        font-size: 22px;
    }

    .bottom-nav a.active {
        color: white;
    }


</style>

<div class="bottom-nav mt-4 ">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <span class="material-icons">home</span>
        <span>Home</span>
    </a>
    <a href="{{ route('updates') }}" class="{{ request()->routeIs('updates') ? 'active' : '' }}">
        <span class="material-icons">update</span>
        <span>Update</span>
    </a>
    <a href="{{ route('bankDetail') }}" class="{{ request()->routeIs('bankDetail') ? 'active' : '' }}">
        <span class="material-icons">account_balance</span>
        <span>Bank</span>
    </a>
    <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">
        <span class="material-icons">contact_phone</span>
        <span>Contact</span>
    </a>
</div>
