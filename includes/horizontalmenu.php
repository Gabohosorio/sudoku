<!--Developed by: Gabohsoft 2023P2-->
<body>
  <!--Head and find-->
  <div class="Conthcj" style="height: 55px;">
    <div class="Conthcc" style="width: 200px;">
      <img class="ImgLogo" src="./assets/images/amisoftoscuro80x40.png" alt="Developed by: Gabohsoft">
    </div>
    <div class="Conthcl">
      <input id="TxFind" name="TxFind" type="text" placeholder="Busca por categoria y talla" style="width: 250px;" required/>
      <img class="Img30x30" src="./assets/images/buscar.png" alt="Lupa" style="margin-left: 20px; cursor: pointer">
    </div>
    <div class="Conthcj" style="width: 340px;">
      <div class="Conthcc" style="width: 140px;">
        <img class="Img30x30" src="./assets/images/favorito.png" alt="Favoritos" style="cursor: pointer">
        <img class="Img30x30" src="./assets/images/salecar.png" alt="Carrito Compras" style="margin-left: 30px; cursor: pointer">
      </div>
      <div class="Conthcj" style="width: 200px;">
        <div class="Conthcc Btlog">
          <p onclick="location.href='login.php'">Acceder</p>
        </div>
        <div class="Conthcc Btlog" style="margin-right: 20px;">
          <p onclick="location.href='signup.php'">Registrarse</p>
        </div>
      </div>
    </div>
  </div>
  <!--End Head and find-->
  <!--Horizontal Menu-->
  <div class="Conthcl" id="MnGenero" style="height: 40px; border-top: 2px solid #89888a;
    border-bottom: 2px solid #89888a; background: #c1c1c1;">
		<ul class="nav">
			<li style="margin-left: 50px;"><p>Mujeres</p>
				<ul>
					<li><p onclick="MjZapa()">Zapatos</p></li>
					<li><p onclick="MjRopa()">Ropa</p></li>
					<li><p onclick="MjAcce()">Accesorios</p></li>
				</ul>
			</li>
			<li><p>Hombres</p>
				<ul>
					<li><p onclick="HmZapa()">Zapatos</p></li>
					<li><p onclick="HmRopa()">Ropa</p></li>
					<li><p onclick="HmAcce()">Accesorios</p></li>
				</ul>
			</li>
			<li><p>Niñas</p>
				<ul>
					<li><p onclick="NaZapa()">Zapatos</p></li>
					<li><p onclick="NaRopa()">Ropa</p></li>
					<li><p onclick="NaAcce()">Accesorios</p></li>
				</ul>
			</li>
			<li><p>Niños</p>
				<ul>
					<li><p onclick="NoZapa()">Zapatos</p></li>
					<li><p onclick="NoRopa()">Ropa</p></li>
					<li><p onclick="NoAcce()">Accesorios</p></li>
				</ul>
			</li>
		</ul>
  </div>
  <!--End Horizontal Menu-->
<body>