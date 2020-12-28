<style>
    .background {
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,1);
        opacity: 1;
        position: absolute;
        top: 0;
        left: 0;
        box-shadow: 0  0.260vw  0.260vw rgba(0, 0, 0, 0.25);
        overflow: hidden;
    }
    .label_title {
        position: relative;
        width: inherit;
        height: 30%;
        text-align: left;
        top: 12%;
        left: 20%;
        font-family: Poppins, serif;
        font-weight: Bold;
        font-size: 3.906vw;
    }
    .main{
        overflow-x: hidden;
        overflow-y: scroll;
        height: 80%;
    }
    .yellowCircle {
        width: 8.658vw;
        height: 8.658vw;
        background: rgba(255,239,96,1);
        opacity: 1;
        position: absolute;
        left: 21%;
        top: 18%;
        border-radius: 50%;

    }
    .form{
        position: relative;
        text-align: left;
        width:60%;
        height: 100%;
        padding-right: 20%;
        padding-left: 20%;
        font-family: Poppins, serif;
        font-weight: Normal;
        font-size: 1.302vw;
        opacity: 1;
        color: rgba(0,0,0,1);
    }
    .table{
        width:90%;
        height:50%
    }
    .tableRow{
        height:20%;
        vertical-align:middle;
    }
    .tableColLabel{
        text-align: right;
    }
    .tableCol{
        height: 100%;
        width: 70%;
        padding-top: 1%;
        padding-left: 5%;
        text-align: left;
        vertical-align: middle;
    }
    .input{
        width: 100%;
        height: 100%;
        margin-left:5%;
        border: 0.1302vw solid rgba(0,0,0,1);
        background: rgba(255,255,255,1);
        box-shadow: 0.260vw  0.260vw 0 rgba(0, 0, 0, 0.25);
    }
    .tags{
        width: 100%;
        margin-left:5%;
    }
    .input_tag{
        width: 30%;
        height: 40%;
        margin-left:0.25%;
        border: 0.1302vw solid rgba(0,0,0,1);
        box-shadow: 0.260vw  0.260vw 0 rgba(0, 0, 0, 0.25);
        background: rgba(255,255,255,1);
    }
    .btn_form{
        padding-top: 5%;
        height:15%;
    }
    .btn_return{
        height: 100%;
        width: 20%;
        left: 0;
        font-size: 1.692vw;
        text-align: center;
        background: white;
        border: 0.1302vw solid rgba(0,0,0,1);
        box-shadow:  0.260vw 0.260vw 0 rgba(0, 0, 0, 0.25);
    }
    .btn_return:hover{
        cursor:pointer;
        color: white;
        background: black;
    }
    .btn_upload{
        height: 100%;
        width: 20%;
        font-size: 1.692vw;
        margin-left: 55%;
        text-align: center;
        background: white;
        border: 0.1302vw solid rgba(0,0,0,1);
        box-shadow: 0.260vw 0.260vw 0 rgba(0, 0, 0, 0.25);
    }
    .btn_upload:hover{
        cursor:pointer;
        color: white;
        background: black;
    }
    .btn_upload_disabled{
        height: 100%;
        width: 20%;
        font-size: 1.692vw;
        margin-left: 55%;
        text-align: center;
        background: lightgray;
        border: 0.1302vw solid rgba(0,0,0,1);
        box-shadow: 0.260vw 0.260vw 0 rgba(0, 0, 0, 0.25);
    }
    .btn_upload_disabled:hover{
        cursor:not-allowed;
    }

</style>
