<div class="footerWidget2">
	<?php
	dynamic_sidebar('widget2');
	?>
</div>

<footer id="footer">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<?php
				dynamic_sidebar('widget-footer1');
				?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<?php
				dynamic_sidebar('widget-footer2');
				?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<ul class="social">
					<h4 id="socialamedier">Sociala medier</h4>
					<li>
					<?php $menuarray = ['theme_location' => 'footermeny',]; 
                            wp_nav_menu($menuarray) ?>	
					</li>
				</ul>
			</div>
		</div>
		<div class="row bottom">
			<div class="col-xs-12">
				<p>Copyright &copy; Grupp X, 2016</p>
			</div>
		</div>
	</div>
</footer>

</div>

-->
</body>

</html>