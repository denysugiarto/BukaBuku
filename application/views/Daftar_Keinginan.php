<?php 
	if ($this->session->userdata('logged_in')==1) {
		$this->load->view("navbar_logout");
	}else{
		$this->load->view("navbar");
	}
?>
<div class="page_content">
    <div>
        <div class="page_title">
            Daftar Keinginan </div>
        <div style="width: 1000px; margin: auto;">
            <table class="width_full zebra">
                <colgroup>
                    <col width="100" span="1">
                    <col span="1">
                    <col width="200" span="1">
                    <col width="175" span="1">
                </colgroup>
                <thead>
                <tr>
                    <th>Gambar </th>
                    <th>Nama </th>
                    <th>Ditambahkan </th>
                    <th>Aksi </th>
                </tr>
                </thead>
                <tr>
                    <td align="center">
                        <a href="/browses/product/9786023858040/kiai-ujang-di-negeri-kanguru.html"><img src="http://img.bukabuku.net/product_thumb_small/8/8/88263ecefda37579d0282f4720b848ee.jpg" alt="" /></a>
                    </td>
                    <td>
                        <div>
                            <span class="product_list_title"><a href="/browses/product/9786023858040/kiai-ujang-di-negeri-kanguru.html">Kiai Ujang di Negeri Kanguru</a></span>
                        </div>
                        <div class="text_smaller">
                            oleh&nbsp;Nadirsyah Hosen </div>
                        <div class="text_smaller">
                            Soft Cover </div>
                        <span class="price_discounted">Rp. 84.000				</span>&nbsp;&nbsp;&nbsp;<span class="price">Rp. 67.200				</span><span class="discount_percent">(20% OFF)				</span>
                        <div class="text_smaller"><span class="product_status_orange">Akan tersedia pada tanggal  7 Mei 2019</span></div>
                    </td>
                    <td align="center">Selasa, 23 April 2019 </td>
                    <td align="center">
                        <a href="/wishlists/add_cart/731303" rel="button">Masukkan ke Keranjang Belanja</a> <a href="/wishlists/delete/731303" rel="button" onclick="if (confirm(&quot;Hapus dari Daftar Keinginan?&quot;)) { return true; } return false;">Hapus</a> </td>
                </tr>
            </table>
        </div>
    </div>
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
