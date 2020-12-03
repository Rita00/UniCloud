<style>

    body{
        width: 100%;
        height: 100%;
    }

    .fundo {
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,1);
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 0px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        overflow: hidden;
    }

    .navbar{
        width: 100%;
        height: 15%;
        overflow: hidden;
    }

    .logo {
        width: 20%;
        height: 50%;
        background: url("https://scontent-lis1-1.xx.fbcdn.net/v/t1.15752-9/126030799_2477808079010387_3065445384996410535_n.jpg?_nc_cat=111&ccb=2&_nc_sid=ae9488&_nc_ohc=rsMewyTft84AX8tpd49&_nc_ht=scontent-lis1-1.xx&oh=69b10677cb7da2d9d322550fe0da9a5d&oe=5FE00BC5");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: relative;
        left: 10%;
        top: 40%;
    }

    .Home {
        width: 10%;
        color: rgba(0,0,0,1);
        position: relative;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
        left: 40%;
        top: 1%;
    }


    /*desapareceu*/
    .lupa {
        width: 5%;
        height: 50%;
        background: rgba(255,255,255,1);
        opacity: 1;
        position: relative;
        left: 2%;
        top: 1%;

    }

    /*
    .lupa2 {
      width: 17px;
      height: 17px;
      background: rgba(0,0,0,1);
      opacity: 1;
      position: absolute;
      top: 5px;
      left: 3px;
    }
    */

    .procurarT {
        width:10%;
        color: rgba(0,0,0,1);
        position: absolute;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
        left: 48%;
        top: 7.75%;
    }

    .searchBar {
        width: 15%;
        height: 30%;
        background: rgba(255,255,255,1);
        opacity: 1;
        position: relative;
        border: 2px solid rgba(0,0,0,1);
        box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.25);
        text-align: center;
        left: 58%;
        top: -30%;
    }

    .option{
        left: 50%;
        position:relative;

    }

    .op1 {
        width: 19px;
        background: url("../images/v8_2.png");
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 0px;
        border: 2px solid rgba(0,0,0,1);
    }
    .op2 {
        width: 19px;
        background: url("../images/v8_3.png");
        opacity: 1;
        position: absolute;
        top: 5px;
        left: 0px;
        border: 2px solid rgba(0,0,0,1);
    }
    .op3 {
        width: 19px;
        background: url("../images/v8_4.png");
        opacity: 1;
        position: absolute;
        top: 10px;
        left: 0px;
        border: 2px solid rgba(0,0,0,1);
    }

    .main{
        width: 100%;
        height: 75%;
        overflow: hidden;
    }

    .barraT1 {
        border-top: 3px solid black;
        width: 80%;
        position: relative;
        left: 10%;
    }

    .imgLand {
        width: 593px;
        height: 430px;
        background: url("https://scontent.fopo2-2.fna.fbcdn.net/v/t1.15752-9/125277380_1029400880907489_245594132616440582_n.jpg?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=Gv3QZVs-gU4AX84UVem&_nc_ht=scontent.fopo2-2.fna&oh=aa2c0bfda8342ca3077033ee2fabebef&oe=5FDF70B5");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 283px;
        left: 417px;
        overflow: hidden;
    }

    .bolaLand {
        width: 133px;
        height: 133px;
        background: rgba(255,239,96,1);
        opacity: 1;
        position: absolute;
        left: 21%;
        top: 18%;
        border-radius: 50%;

    }

    .tLogIn {
        overflow: hidden;
        top: 25%;
        color: rgba(0,0,0,1);
        position: relative;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .bLogIn {
        overflow: hidden;
        width: 14.5%;
        height: 8%;
        background: rgba(255,255,255,1);
        opacity: 1;
        position: relative;
        border: 2px solid rgba(0,0,0,1);
        op: 230px;
        left: 10%;
        top: 6%;
    }

    .bSignIn {
        overflow: hidden;
        width: 14.5%;
        height: 8.5%;
        background: rgba(255,255,255,1);
        opacity: 1;
        position: relative;
        border: 2px solid rgba(0,0,0,1);
        box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.25);
        op: 230px;
        left: 10%;
        top: 4%;

    }

    .tSignIn {
        overflow: hidden;
        color: rgba(0,0,0,1);
        position: relative;
        top: 25%;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .bCursos {
        overflow: hidden;
        background: rgba(0,0,0,1);
        width: 14.5%;
        height: 10%;
        opacity: 1;
        position: relative;
        border: 2px solid rgba(0,0,0,1);
        box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.25);
        left: 10%;
        top: 10%;
    }

    .tCursos {
        overflow: hidden;
        color: rgba(255,255,255,1);
        position: relative;
        top: 25%;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .tBemVindo {
        color: rgba(0,0,0,1);
        position: relative;
        top: 110px;
        left: 50%;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 24px;
        opacity: 1;
        text-align: center;
        width: 20%;
    }

    .bEmail {
        width: 10%;
        height: 4%;
        background: rgba(255,255,255,1);
        opacity: 1;
        position: relative;
        top: 12%;
        left: 14.5%;
        border: 2px solid rgba(0,0,0,1);

    }

    .bPass {
        width: 8.5%;
        height: 4%;
        background: rgba(255,255,255,1);
        opacity: 1;
        position: relative;
        top: 125px;
        left: 16%;
        top: 14%;
        border: 2px solid rgba(0,0,0,1);

    }

    .tEmail {
        width: 9%;
        color: rgba(0,0,0,1);
        position: relative;
        font-family: Poppins;
        font-weight: Regular;
        left: 10%;
        top: 2.5%;
        font-size: 18px;
        opacity: 1;
        text-align: left;
    }

    .tPass {
        width: 9%;
        color: rgba(0,0,0,1);
        position: relative;
        font-family: Poppins;
        font-weight: Regular;
        left: 10%;
        top: 73px;
        font-size: 18px;
        opacity: 1;
        text-align: left;
        top:5%;
    }

    .textos{
        width: 14.5%;
        height: 22%;
        top: 13%;
        left: 10%;
        color: rgba(0,0,0,1);
        position: relative;
        font-family: Poppins;
        font-weight: Bold;
        font-size: 15px;
        opacity: 1;
        text-align: left;

    }

    .barraVert {
        border-left: 3px solid black;
        height: 80%;
        position: relative;
        left: 73%;
        top: -80%;
    }

    .tNovidades {
        width: 14.5%;
        height: 8%;
        top: -150% ;
        left: 75%;
        color: rgba(0,0,0,1);
        position: relative;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 14px;
        opacity: 1;
        text-align: left;
    }


    .barraD {
        border-top: 3px solid black;
        width: 80%;
        position: relative;
        left: 10%;
        top: 1%;

    }
    .footer{
        width: 100%;
        height: 15%;

    }

</style>
