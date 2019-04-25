<?php 
	if ($this->session->userdata('logged_in')==1) {
		$this->load->view("navbar_logout");
	}else{
		$this->load->view("navbar");
	}
?>
<div class="page_content">
    <script type="text/javascript" src="/js/cart.js"></script>
    <div class="page_title">
        <img alt="" class="add_to_cart_image_for_title" src="/img/cart.png"> Keranjang Belanja</div>
    <div id="cart_page" style="padding-bottom: 20px">
        <div id="cart_messages">
            <div class="error">
            </div>
        </div>
        <div class="">
            Keranjang kosong
            <div class="zebra_2">
                <div class="header">
                    <a href="/" rel="button" onclick="self.history.back()">Lanjutkan Belanja</a> </div>
            </div>
        </div>
    </div>
</div>
<div class="page_footer">
</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-329472-3', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>
</body>

</html>
