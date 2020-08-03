<footer class="footer">
	<nav>
		<?php
		wp_nav_menu($arc =array(
			'menu_class' => 'footer-navigation',
			'theme_location' => 'footer-nav'
		))
		?>
	</nav>
	<p class="copyright">
		<small>All content on this site &copy; Glass Eye Creative</small>
	</p>
	<?php wp_footer() ?>
</footer>

</body>

</html>