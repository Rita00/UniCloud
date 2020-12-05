<style>
    .navbar{
        overflow: hidden;
        width: 80%;
        height: 15%;
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
        width: 85%;
        height: 100%;
    }

    .logo {
        width: 30%;
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
        text-align: right;
        text-decoration: none;
    }
    .home:hover {
        color: gold;
    }
    .horizontalBar {
        position: relative;
        border-top: 3px solid black;

    }
</style>
<div class="navbar">
    <table class="headerTable">
        <tr class="headerTableRow">
            <td class="headerTableCol">
                <div class="logo"></div>
            </td>
            <td class="headerTableCol">
                <a class="home" href="/home">Menu Principal</a>
            </td>
        </tr>
    </table>
    <div class="horizontalBar"></div>
</div>



