<?php session_start();?>
<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
<div id="header-wrap">
<div class="container clearfix">
<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

<div id="logo">
<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><p style="margin-top: 12%;font-size: 30px;">CRIME LOGGER</p></a>

</div>

<nav id="primary-menu" class="dark">
<ul>
<li class="current"><a href="index.php"><div>Home</div></a>
</li>
<li><a href="location.php"><div>My Location</div></a>
</li>
<li><a href="complaint.php"><div>Complaint</div></a>
</li>
<li><a href="search_crime.php"><div>Search Crime</div></a>
</li>
<li class="mega-menu"><a href="contact.php"><div>Contact</div></a>
</li>
<li class="mega-menu"><a href="about.php"><div>About Us</div></a>
</li>
<?php 
if(isset($_SESSION['userid']))
{?>
	<li class="mega-menu"><a href="logout.php"><div>Logout</div></a>
</li>
<?php 
}
else
{?>
<li class="mega-menu"><a href="signin.php"><div>Login</div></a>
</li>
<?php }?>
</ul>
</nav>
</div>
</div>
</header>