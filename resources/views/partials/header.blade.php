<style>
    .navbar{
        overflow: hidden;
        width: 80%;
        height: 10%;
        padding-right: 10%;
        padding-left: 10%;
        color: rgba(0,0,0,1);
        position: relative;
        font-family: Poppins, serif;
        font-weight: Normal;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }
    .headerTable{
        height: 90%;
        width:100%;
    }
    .headerTableRow{
        height: 100%;
        width:100%;
    }
    .headerTableCol{
        width: 59%;
        height: 100%;
    }
    .headerTableCol2{
        width: 10%;
        height: 100%;
        text-align: center;
    }
    .headerTableCol3{
        width: 1%;
        height: 100%;
        text-align: center;
    }

    .logo {
        width: 25%;
        height: 100%;
        background: url("https://scontent-lis1-1.xx.fbcdn.net/v/t1.15752-9/126030799_2477808079010387_3065445384996410535_n.jpg?_nc_cat=111&ccb=2&_nc_sid=ae9488&_nc_ohc=rsMewyTft84AX8tpd49&_nc_ht=scontent-lis1-1.xx&oh=69b10677cb7da2d9d322550fe0da9a5d&oe=5FE00BC5");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        top: 20%;
    }

    .home {
        vertical-align: center;
        display: block;
        color:black;
        text-align: center;
        text-decoration: none;
    }
    .home:hover {
        color: gold;
    }
    .home_disabled {
        vertical-align: center;
        display: block;
        color:gray;
        text-align: center;
        text-decoration: none;
    }
    .horizontalBar {
        position: relative;
        margin-top:0.25%;
        border-top: 3px solid black;

    }
</style>
<div class="navbar">
    <table class="headerTable">
        <tr class="headerTableRow">
            <td class="headerTableCol">
                <div class="logo"></div>
            </td>
            @if (auth()->check())
                <td class="headerTableCol2">
                    <a class="home" href="/">Home</a>
                </td>
                <td class="headerTableCol2">
                    <a class="home" href="/upload">Upload</a>
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
                    <a class="home_disabled">Upload</a>
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



