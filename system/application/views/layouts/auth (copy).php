<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
		<title>Hospital Entrepreneur - <?=$title?></title>
		<link type="text/css" href="/template/jqueryUI/css/custom-theme/jquery-ui-1.7.2.custom.css" rel="stylesheet" />	
		<link type="text/css" href="/template/css/main.css" rel="stylesheet" />

		<script type="text/javascript" language="javascript" src="{baseurl}template/js/jquery-1.3.2.min.js"></script>
		<?php if(isset($jQuery) && count($jQuery) > 0) foreach($jQuery as $j) { echo $j . "\n"; } ?>
		<script type="text/javascript" language="javascript" src="{baseurl}template/js/jquery-ui-1.7.2.custom.min.js"></script>
	</head>
	<body>

	<table class="logo_table">
		<tr>

			<td class="logo_left"></td>
			<td class="logo" valign="top"><?php include("menu_top.php"); ?></td>
			<td class="logo_right"></td>
		</tr>
	</table>



	<div class="content">
		
		<div class="left">
			
			<div class="user_menu">
				<div class="top"></div>
				<div class="content">
				<ul class="menu_content">
					<li>This menu is disabled</li>
				</ul>
				</div>
				<div class="bottom"></div>
			</div>
			<div class="full_menu">
				<div class="top"><img src="/template/images/menu_header.gif" alt="" /></div>
				<ul class="menu_full">
					<li style="color: #000; font-size: 11px;">This menu is disabled</li>
				</ul>
				<div class="bottom"><img src="/template/images/menu_footer.gif" alt="" /></div>
			</div>
		</div>
		<div class="right">
			<div class="content_padding5px">
<?php
					if($error == 1 || $error == true)
					{
						if(is_array($error_message))
						{
							$o = "<ul>";							
							foreach($error_message as $e)
							{
								$o .= "<li>{$e}</li>";
							}
							$o .= "</ul>";
						}
						else
						{
							$o = $error_message;
						}
				echo "<div class=\"ui-widget\">
					<div class=\"ui-state-error ui-corner-all\" style=\"padding: 0 .7em;\"> 
						<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span> 
						{$o}</p>
					</div>
				</div><br />";
					}
					if($highlight == 1 || $highlight == true)
					{
						if(is_array($highlight_message))
						{
							$o = "<ul>";							
							foreach($highlight_message as $e)
							{
								$o .= "<li>{$e}</li>";
							}
							$o .= "</ul>";
						}
						else
						{
							$o = $highlight_message;
						}
				
				echo "<div class=\"ui-widget\">
					<div class=\"ui-state-highlight ui-corner-all\" style=\" padding: 0 .7em;\"> 
						<p><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
						{$o}</p>
					</div>
				</div><br />";
					}
				?>
				{yield}
			</div>
		</div>

		<div class="copyright">
		<p>Copyright 2010 Hospital Entrepreneur , All rights reserved. | Hospital Entrepreneur is a Product of the <a href="http://www.jottza.com">Jottza Corporation</a> | Contact us at support AT jottza.com</p>
		</div>

	</div>

	

	</body>
</html>


