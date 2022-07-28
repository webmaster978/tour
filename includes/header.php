<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul>
			
			<li class="prnt"><a href="profile.php">Mon profil</a></li><br>
				<li class="prnt"><a href="change-password.php">Changer mot de passe</a></li><br>
			<li class="prnt"><a href="tour-history.php">Historique</a></li><br>
			<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li><br>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Bienvenue :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li><br>
			<li class="sigi"><a href="logout.php" >/ Deconnexion</a></li> <br>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li> <br>
				<li class="hm"><a href="admin/index.php">Admin</a></li> <br>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Numero : +243 999 537 993</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >S'inscrire</a></li> <br>
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Se connecter</a></li> <br>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>

<div class="header">
	<div class="container">
		
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">Site securiser </div></li> <br>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				
				<div class="" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Acceuil</a></li><br>
							
								<li><a href="package-list.php">Sites touristiques</a></li><br>
								<ul>
			
			<li class="prnt"><a href="profile.php">Mon profil</a></li><br>
				<li class="prnt"><a href="change-password.php">Changer mot de passe</a></li><br>
			<li class="prnt"><a href="tour-history.php">Historique</a></li><br>
			<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li><br>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Bienvenue :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li><br>
			<li class="sigi"><a href="logout.php" >/ Deconnexion</a></li> <br>
        </ul>
								
								
								
								<?php if($_SESSION['login'])
{?>
								<li>Une aide?<a href="#" data-toggle="modal" data-target="#myModal3"> / Nous ecrire </a>  </li> <br>
								<?php } else { ?>
								<li><a href="enquiry.php"> Enquiry </a>  </li><br>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div>
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>