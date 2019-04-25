<?php 
	if ($this->session->userdata('logged_in')==1) {
		$this->load->view("navbar_logout");
	}else{
		$this->load->view("navbar");
	}
?>
<div class="page_content">
    <div id="home_messages">
    </div>

    <br>
    <table class="width_full">
        <tr valign="top">
            <td>
                <div class="main_section_home">
                    <div class="section_header">
                        Daftar Buku </div>

						<?php foreach ($data as $result): ?>
                    <div class="product_list_grid_home" align="center">
                        <div class="image">
                            <span class="helper"></span>
                            <a href="<?= site_url("Buku_controller/product/".$result['No']) ?>"><img src="http://img.bukabuku.net/product_thumb/a/d/adf50d0b08ed5653653236291e882b78.jpg" class="product_image_small lazy" alt="" /></a>
                            <div class="discount_float">
                                <span>20%<br>OFF</span>
                            </div>
                        </div>
                        <div style="margin: auto; float: none;" class="product_list_title">
                            <a href="<?= site_url("Buku_controller/product/".$result['No']) ?>" class=""><?php echo $result['Judul_Buku']; ?></a> </div>
                        <div class="text_smaller">
                            (<?php echo $result['Bentuk_Cover']; ?>) </div>
                        <div class="text_smaller">
						<?php echo $result['Pengarang']; ?> </div>
                        <div>
                            <div class="price"><?php echo $result['Harga']; ?></div>
                        </div>
                    </div>

					<?php endforeach; ?>



                    <div align="right"></div>
        </div>

    </div>
    <!-- <br> -->
    <!-- Begin Adversal 728x90 - bukabuku.com Code -->
    <!-- <SCRIPT SRC="http://go.adversal.com/ttj?id=4591227&size=728x90&promo_sizes=468x60,320x50,300x50,216x36" TYPE="text/javascript"></SCRIPT> -->
    <!-- End Adversal 728x90 - bukabuku.com Code -->
    <!-- <br> -->

</div>

<div class="SEO_text">
    <p>Bukabuku adalah toko buku online yang menjual segala jenis buku, baik buku novel, buku anak-anak, buku impor, buku pelajaran, buku fiksi, buku komik, buku masak, buku komputer, buku kesehatan, buku travel, buku pengembangan diri, buku manajemen, buku religius, majalah dan masih banyak lagi. Anda dapat menemukan ratusan ribu buku dengan koleksi kami yang sangat lengkap. Semuanya dapat anda temui di Bukabuku online bookstore. Buku yang kami jual berasal dari berbagai penerbit ternama seperti Gramedia, Mizan, Elex Media Komputindo, Grasindo, Penerbit Ufuk, Kanisius, Andi Offset, Erlangga, Transmedia, Agromedia, Kompas, dan masih banyak lagi.</p>
    <p>Belanja buku menjadi sangat mudah, hemat dan menyenangkan di Bukabuku.com karena dapat menghemat waktu dan tenaga. Hubungi customer care kami apabila anda ingin mencari buku yang anda inginkan tetapi belum terdapat di Bukabuku.com. Customer care kami akan siap membantu anda dengan mementingkan kepuasan pelanggan dalam berbelanja. Kami selalu mengutamakan pengiriman anda agar diterima dengan kondisi baik dan tepat waktu.</p>
</div>
</body>

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

</html>
