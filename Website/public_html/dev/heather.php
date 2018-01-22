<?php
	$ccs = "/css/page.css"; 
	if ( $_GET["newccs"] == "yes") { $ccs = "/css/page2.css"; }
	
	if ( ! empty ($_POST["email"])) {
		$AskForName = 1;
	}
	
	
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?= $ccs ?>" />
		<title>Abolish the Bitlicense ! | Article 78 against NYDFS | Theo Chino vs. New York Departement of Financial Services</title>
	</head>

	<body>
		<div id="page">
		  <div class="topNaviagationLink"><? if ($_SERVER["PHP_SELF"] != "/index.php") { ?><a href="/"><? } ?>Case<? if ($_SERVER["PHP_SELF"] != "/index.php") { ?></a><? } ?></div>
		  <div class="topNaviagationLink"><? if ($_SERVER["PHP_SELF"] != "/raw.php") { ?><a href="/raw.php"><? } ?>Documents<? if ($_SERVER["PHP_SELF"] != "/raw.php") { ?></a><? } ?></div>
		  <div class="topNaviagationLink"><? if ($_SERVER["PHP_SELF"] != "/press.php") { ?><a href="/press.php"><? } ?>In the News<? if ($_SERVER["PHP_SELF"] != "/press.php") { ?></a><? } ?></div>
		  <div class="topNaviagationLink"><? if ($_SERVER["PHP_SELF"] != "/history.php") { ?><a href="/history.php"><? } ?>Historical<? if ($_SERVER["PHP_SELF"] != "/history.php") { ?></a><? } ?></div>
		  <div class="topNaviagationLink"><? if ($_SERVER["PHP_SELF"] != "/video.php") { ?><a href="/video.php"><? } ?>Videos<? if ($_SERVER["PHP_SELF"] != "/video.php") { ?></a><? } ?></div>
		  <div class="topNaviagationLink"><? if ($_SERVER["PHP_SELF"] != "/advocacy.php") { ?><a href="/advocacy.php"><? } ?>Advocacy<? if ($_SERVER["PHP_SELF"] != "/advocacy.php") { ?></a><? } ?></div>
		  <!--div class="topNaviagationLink"><a href="contact.html">Contact</a></div--->
		</div>

	  <div id="mainPicture">
	  	<div class="picture">
	    	<div id="headerTitle">Article 78 against NYDFS</div>
	      	<div id="headerSubtext">A lawsuit against the executive branch overreach and the Abolition of the BitLicense.</div>
	      </div>
	  </div>  
	 
	  <div class="contentBox">
			<div class="innerBox">
				<div id=countdown-wrap>
					
					<div class="contentTitleShort"><BR><font size=+1>
					  [&nbsp;<? if ($_SERVER["PHP_SELF"] != "/index.php") { ?><a href="/"><? } ?>Case Information<? if ($_SERVER["PHP_SELF"] != "/index.php") { ?></a><? } ?>&nbsp;]
					  &nbsp;&nbsp;[&nbsp;<? if ($_SERVER["PHP_SELF"] != "/raw.php") { ?><a href="/raw.php"><? } ?>Case Documents<? if ($_SERVER["PHP_SELF"] != "/raw.php") { ?></a><? } ?>&nbsp;]
					  &nbsp;&nbsp;[&nbsp;<? if ($_SERVER["PHP_SELF"] != "/press.php") { ?><a href="/press.php"><? } ?>In the News<? if ($_SERVER["PHP_SELF"] != "/press.php") { ?></a><? } ?>&nbsp;]<BR>
					  [&nbsp;<? if ($_SERVER["PHP_SELF"] != "/history.php") { ?><a href="/history.php"><? } ?>Historical Development<? if ($_SERVER["PHP_SELF"] != "/history.php") { ?></a><? } ?>&nbsp;]
					  &nbsp;&nbsp;[&nbsp;<? if ($_SERVER["PHP_SELF"] != "/video.php") { ?><a href="/video.php"><? } ?>Videos<? if ($_SERVER["PHP_SELF"] != "/video.php") { ?></a><? } ?>&nbsp;]<BR>
					  [&nbsp;<A HREF="https://twitter.com/a78gnstnydfs" TARGET="twitter">Follow @A78gnstNYDFS</A>&nbsp;]
						&nbsp;&nbsp;[&nbsp;<A HREF="https://www.instagram.com/a78gnstnydfs" TARGET="instagram">Instagram</A>&nbsp;]
			  		<P>
			  			<BR>
						  <FORM ACTION="">
						  	Enter your email &nbsp;<INPUT TYPE="Text" NAME="Email" SIZE=40>&nbsp;<INPUT TYPE="SUBMIT" VALUE="Keep me posted">
						  </FORM>
					  </P>
		  		</div>
				
					<div id="goal">$ 120,000</div>
					<div id="glass"><div id="progress"></div>
				</div>
				<div class="goal-stat">
				  <span class="goal-number">7 %</span>
				  <span class="goal-label">Funded</span>
				</div>
				<div class="goal-stat">
				  <span class="goal-number">$ 9,012.43</span>
				  <span class="goal-label">Raised</span>
				</div>
				</div>
			  
				<div class="contentTitleShort"><BR><B>Donate:</B></div>
				<div class="contentText"><p>
					<UL>
						<A TARGET="NewBlockChainTarget" HREF="https://bitcoinfoundation.org/bitlicense-theo-chino"><img src="/images/DonationBitcoin.png" alt="1EW7ESwvS3yGesSbP8G5ULsHYmy5pykeCG"></A>&nbsp;
						<A TARGET="NewBlockChainTarget" HREF="https://www.generosity.com/community-fundraising/legal-representation-against-the-ny-dfs"><img src="/images/DonationGenerosity.png" alt="Generosity by Indiegogo"></A>&nbsp;
						<A TARGET="NewBlockChainTarget" HREF="https://secure.meetup.com/Article-78-Against-NYDFS/contribute"><img src="/images/DonationWePay.png" alt="Meetup by WePay"></A><BR>
						<B>Bitcoin:</B> 32TkdtErKNZKcccNcFynRRCG6WAoY1ofj9
					</UL>
				</p></div>			
		  <P></P> 
		  
		  <?php // Old was 8552.39 - JJuly 20, 2017 ?>