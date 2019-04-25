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
        <form action="/stores" onsubmit="" id="cart_form" method="post" accept-charset="utf-8">
            <div style="display:none;">
                <input type="hidden" name="_method" value="POST" />
            </div>
            <table class="zebra width_full">
                <colgroup span="4">
                    <col span="1" width="300" />
                    <col span="1" />
                    <col span="1" width="90" />
                    <col span="1" width="150" />
                </colgroup>
                <thead>
                <tr>
                    <th colspan="2">Produk dalam Keranjang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
                </thead>

                <tr valign="top" class="cart_list" id="row_cart_2010001115724-1652">
                    <td align="center" class="cart_product_image_container">
                        <a href="/browses/product/9786025346972/iron-fire-and-ice.html"><img src="http://img.bukabuku.net/product_thumb_small/a/d/adf50d0b08ed5653653236291e882b78.jpg" class="product_image_small" alt="" /></a>
                    </td>
                    <td class="cart_product_information">
                        <div class="product_list_title" id="product_name_2010001115724">
                            <a href="/browses/product/9786025346972/iron-fire-and-ice.html" id="product_name_9786025346972">Iron, Fire, And Ice</a> (Soft Cover) </div>
                        <div class="promo_title">PO Iron, Fire, And Ice</div>
                        <div class="cart_added">
                            <span class="text_smaller">Ditambahkan pada			</span> <span class="text_smaller">Selasa, 23 April 2019			</span>
                        </div>
                        <div>
                            <span class="price_discounted">Rp. 179.000			</span>&nbsp;<span class="price">Rp. 143.200			</span>&nbsp;<span class="price">(20% OFF)			</span>
                        </div>
                        <div class="product_status_orange text_smaller">
                            Akan tersedia pada bulan Mei 2019 </div>
                        <div class="cart_actions_link">
                            <span class="cart_delete"><a href="javascript:void(0)" onclick="if (confirm(&quot;Hapus \&quot;Iron, Fire, And Ice (Soft Cover)\&quot; ?&quot;)) { del(2010001115724,1652); } return false;">Hapus</a>			</span><span><a href="/carts/save_for_later/9786025346972/1652">Simpan untuk Nanti</a>			</span>
                        </div>
                    </td>
                    <td align="center" class="cart_detail_price">
                        <input name="cart[2010001115724-1652]" class="cart_qty" value="1" id="cart_2010001115724-1652" size="3" max="999" style="width:50px;" oninput="this.onkeyup()" onkeyup="check_val(this)" onkeypress="return numbersonly(event)" type="number" />
                        <div id="update_cart_2010001115724-1652" class="cart_update_button">
                            <button type="button" onclick="cart_update('2010001115724-1652')">Update</button>
                        </div>
                    </td>
                    <td align="center">
                        <div>
                            <div class="price">
                                Rp. 143.200 </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <div class="">
            <table class="width_full">
                <tr>
                    <td width="150" align="center">
                        <div>
                            Estimasi Berat </div>
                        <div class="total_weight">
                            2 Kg </div>
                    </td>
                    <td></td>
                    <td width="150" align="center">
                        <div>
                            Total </div>
                        <div class="total_price">
                            Rp. 143.200 </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="cart_action_bar zebra_2">
            <div class="header">
                <a href="/" rel="button" onclick="self.history.back()">Lanjutkan Belanja</a>
                <button class="button_important" type="button" onclick="cart_checkout()">Lanjutkan ke Pembayaran</button>
                <div class="float_clear"></div>
            </div>
        </div>
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
