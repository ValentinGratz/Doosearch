<header id="head">
	<div class="ctn">
		<div>
			<img class="btnMenu" onclick="showHeaderMenu();" src="res/img/menu.png" />
			<p><a href="index.php"><img src="res/img/white-flat-logo-header.png" /></a></p>
		</div>
		
        <span class="right">
            <a id="appPage" href="home.php"><img src="res/img/home.png" /></a>
            <a id="configPage" href="configuration.php"><img src="res/img/config.png" /></a>
            <img class="btnFamily" onclick="showFamily();" src="res/img/family.png" />
        </span>
	</div>
	
	<ul>
		<li>
			<a href="index.php">
				<span>Accueil</span>
			</a>
		</li>
		<li>
			<a href="discover.php">
				<span>Découvrir</span>
			</a>
		</li>
		<li>
		<a href="download.php">
				<span>Télécharger</span>
			</a>
		</li>
		<li>
			<a href="contact.php">
				<span>Contact</span>
			</a>
		</li>
		<li>
			<a href="about.php">
				<span>A propos</span>
			</a>
		</li>
	</ul>
</header>

<nav class="family">
	<ul>
		<h1>Doocode Family</h1>
		<li>
			<a href="http://doocode.xyz/">
				<img src="http://doocode.xyz/res/img/white-flat-logo.png" />
				<span>Doocode</span>
			</a>
		</li>
		<li>
			<a href="http://chronos.doocode.xyz/">
				<img src="http://chronos.doocode.xyz/res/img/white-flat-logo.png" />
				<span>Doochronos</span>
			</a>
		</li>
		<li>
			<a href="http://search.doocode.xyz/">
				<img src="http://search.doocode.xyz/res/img/white-flat-logo.png" />
				<span>Doosearch</span>
			</a>
		</li>
		<li>
			<a href="http://scape.doocode.xyz/">
				<img src="http://scape.doocode.xyz/res/img/white-flat-logo.png" />
				<span>Dooscape</span>
			</a>
		</li>
	</ul>
</nav>

<script>
	if (localStorage['doosearchVersion'] == null || localStorage['doosearchVersion'] < 1.32)
		$('#configPage').css('display','none');
</script>