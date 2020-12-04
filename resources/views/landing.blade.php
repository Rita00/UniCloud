<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>UniCloud</title>
  	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    @include('partials.mainCSS')
</head>

<body>
	<div class="fundo">
    <!--------------------------------------Navigation-->
       @include('partials.header')

    <!--------------------------------------Main-->
        <div class="main">
            <div class="imgLand"></div>
	        <div class="bolaLand"></div>
            <div class="tBemVindo">Bem vindo à UniCloud!</div>

            <div class="bSignIn">
            <div class="tSignIn">Sign In</div>
        </div>


      <div class="bLogIn">
        <div class="tLogIn">Log In</div>
      </div>

      <div class="bEmail"></div>
      <div class="bPass"></div>
      <div class="tEmail">Email</div>
      <div class="tPass">Password</div>

      <div class="bCursos">
        <div class="tCursos">Cursos</div>
      </div>
      <div class="textos">
          <span class="tQue">+ O que é a UniCloud</span><br>
          <span class="tPorque">+ Porquê a UniCloud</span><br>
          <span class="tGuia">+ Guia UniCloud</span><br>

      </div>


		  <div class="barraVert"></div>
      <div class="tNovidades">Novidades:</div>

		  </div>

      <!--------------------------------------Footer-->
      <div class="footer">
        <div class="barraD"></div>
      </div>

    </div>

</body>

</html>







