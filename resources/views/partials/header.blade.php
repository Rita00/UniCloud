<!--CSS-->
<link rel="stylesheet" href="css/header.css">
<!--HTML-->
<div class="navbar">
    <table class="headerTable">
        <tr class="headerTableRow">
            <td class="headerTableCol" style="text-align:left">
                <a href="/"><img src="/images/logo.svg" class="logo"></a>
            </td>
            @if (auth()->check())
                <td class="headerTableCol2">
                    <a class="home" href="/">Home</a>
                </td>
                <td class="headerTableCol2">
                    <a class="home" href="/upload">Upload</a>
                </td>
                <td class="headerTableCol2">
                    <a class="home" href="/aboutUs">About Us</a>
                </td>
                <td class="headerTableCol3">|</td>
                <td class="headerTableCol2">
                    <a class="home" href="/profile">{{\Illuminate\Support\Facades\Auth::user()['name']}}</a>
                </td>
                <td class="headerTableCol2">
                    <a class="home" href="/logout">Logout</a>
                </td>
            @else
                <td class="headerTableCol2"></td>
                <td class="headerTableCol2">
                    <a class="home" href="/">Home</a>
                </td>
                <td class="headerTableCol2">
                    <a class="home_disabled" title="Login necessário para realizar upload">Upload</a>
                </td>
                <td class="headerTableCol2">
                    <a class="home" href="/aboutUs">About Us</a>
                </td>
                <td class="headerTableCol3">|</td>
                <td class="headerTableCol2">
                    <a class="home" href="/login">Login</a>
                </td>
            @endif
        </tr>
    </table>
    <div class="horizontalBar"></div>
</div>



