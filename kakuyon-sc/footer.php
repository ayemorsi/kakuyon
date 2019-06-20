	<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				
					
<div class="footer-social-icons">
    <ul class="social-icons">
		&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php ?>
        <li><a href="https://www.facebook.com/kakuyon1/" class="social-icon"> 
				<i class="fa fa-facebook"></i>
			</a>
		</li>
        <li>
			<a href="https://twitter.com/Kakuyon" class="social-icon"> 
				<i class="fa fa-twitter"></i>
			</a>
		</li>
        <li>
			<a href="https://www.instagram.com/kakuyon1/" class="social-icon"> 
				<i class="fa fa-instagram"></i>
			</a>
		</li>
        <li>
			<a href="https://open.spotify.com/artist/256Ali73Vwxggm4o4yq78F?si=ylEAhnCGTbijz7Azc3ljSg" class="social-icon"> 
				<i class="fa fa-spotify">
				</i>
			</a>
		</li>
        <li>
			<a href="https://soundcloud.com/kakuyon" class="social-icon"> 
				<i class="fa fa-soundcloud"></i>
			</a>
		</li>
    </ul>
</div>

				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->

		<script>
		

			const nav = document.querySelector('#main');
			let topOfNav = nav.offsetTop;

			function fixNav() {
			  if (window.scrollY >= topOfNav) {
				document.body.style.paddingTop = nav.offsetHeight + 'px';
				document.body.classList.add('fixed-nav');
			  } else {
				document.body.classList.remove('fixed-nav');
				document.body.style.paddingTop = 0;
			  }
			}

			window.addEventListener('scroll', fixNav);

		</script>

<script>
(function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();
 
function labnolThumb(id) {
    return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
}
 
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}
								 
								 </script>
	</body>
</html>
