<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Change the link color to #111 (black) on hover */
    li a:hover {
        background-color: #111;
    }
</style>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/">News</a></li>
    <li><a href="/">Contact</a></li>
    <li><a href="/upload">Upload</a></li>
    @if (auth()->check())
        <li><a href="/profile">{{\Illuminate\Support\Facades\Auth::user()['name']}}</a></li>
        <li><a href="/logout">Logout</a></li>
    @else
        <li><a href="/login">Login</a></li>
    @endif
</ul>
