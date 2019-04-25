<?php 
	if ($this->session->userdata('logged_in')==1) {
		$this->load->view("navbar_logout");
	}else{
		$this->load->view("navbar");
	}
?>
<div class="page_content">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=112038379975";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div style="display:none">normal</div>
    <script type="text/javascript" src="http://books.google.com/books/previewlib.js"></script>
    <script type="text/javascript" src="/js/browse.js"></script>
    <script type="text/javascript" src="/js/ship_tariff.js"></script>
    <div>
        <input type="hidden" name="data[ProductEan]" value="9786025346972" id="ProductEan" />
        <input type="hidden" name="data[ProductISBN]" value="9786025346972" id="ProductISBN" />
        <div id="product_images_container">
            <div class="product_image_large_container">
                <span class="helper"></span>
                <img src="http://img.bukabuku.net/product/a/d/adf50d0b08ed5653653236291e882b78.jpg" data-zoom-image="http://img.bukabuku.net/product_original/a/d/adf50d0b08ed5653653236291e882b78.jpg" alt="" /> </div>
            <div id="gallery_thumb" style="display: none">
                <a href="#" data-image="http://img.bukabuku.net/product/a/d/adf50d0b08ed5653653236291e882b78.jpg" data-zoom-image="http://img.bukabuku.net/product_original/a/d/adf50d0b08ed5653653236291e882b78.jpg"><img src="http://img.bukabuku.net/product_thumb_small/a/d/adf50d0b08ed5653653236291e882b78.jpg" class="product_image_small" style="max-height:50px; max-width:50px; vertical-align:middle; margin:5px;" alt="" /></a>
            </div>
            <div>
                <script type="text/javascript">
                    GBS_insertPreviewButtonPopup('9786025346972');
                </script>
            </div>
        </div>

		<?php foreach ($buku -> result() as  $value) { ?>	
        <div style="float: right; width: 250px">
            <div class="add_to_cart_container">
                <div>
                    <div id="add_cart_button_container">
                        <form action="/carts/add/9786025346972" id="add_cart_form" method="post" accept-charset="utf-8">
                            <div style="display:none;">
                                <input type="hidden" name="_method" value="POST" />
                            </div>
                            <div class="add_cart_qty">
                                <label for="CartQty">Jumlah :</label>
                                <select name="jumlah" id="CartQty">
								<?php 
									for ($i=1; $i <100 ; $i++) { 
										# code...
										echo "<option value=".$i.">".$i."</option>";
									}
								?>
                                    
                                </select>
                            </div>
                            <a href="<?= base_url("index.php/Buku_controller/delete_buku/").$value->No ?>"  alt="cart" class="product_add_to_cart">
                                <table class="width_full">
                                    <tr>
                                        <td><img src="data:image/jpeg;base64,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" height="50" alt="" /></td>
                                        <td align="center">delete </td>
                                    </tr>
                                </table>
                            </a>
                        </form>
                    </div>

                </div>
                <div class="line_behind">
                    <span> Atau				</span>
                </div>
                <div>
                    <a href="<?= site_url("Buku_controller/Daftar_Keinginan") ?>" alt="general" class="product_save_for_later">Tambah ke Daftar Keinginan</a> </div>
                <div>
                    <a href="<?= site_url("Buku_controller/edit/".$value->No) ?>" alt="general" class="product_save_for_later" align="center">Edit Buku</a> </div>
                <div>
                    <a href="<?= site_url("Buku_controller/tambahbuku") ?>" alt="general" class="product_save_for_later" align="center">Tambah Buku</a> </div>
            </div>
        </div>
            </div>



            <br>
            <div class="right_section_container">
                <div> </div>
            </div>
        </div>						
        <div style="width: auto; margin-left: 350px; margin-top: -350px;" id="zoom_container">
            <div>
                <span class="product_title"><?= $value->Judul_Buku ?></span>
                <span>(<?= $value->Bentuk_Cover ?>)</span>
            </div>
            <div>
                <span class="product_author"> oleh <a href="/authors_corners/view/87463/ed-west.html" class="blue_link"><?= $value->Pengarang ?></a>			</span>
            </div>
            <div>
            </div>

            <hr>
            <div class="product_detail">
                <table>
                    <colgroup span="3">
                        <col span="1" width="125">
                        <col span="1" width="25">
                        <col span="1">
                    </colgroup>

                    <tr>
                        <td align="right">Harga</td>
                        <td align="center">:</td>
                        <td><span class="price"><?= $value->Harga ?>					</span>
                        </td>
                    </tr>
                </table>
                <div class="promo_div">
                    <table class="ribbon_table">
                        <tr>
                            <td class="left"></td>
                            <td class="center">
                                <nobr>PO <?= $value->Penerbit ?></nobr>
                            </td>
                            <td class="right"></td>
                        </tr>
                    </table>
                </div>
                <br>
                <table>
                    <colgroup span="3">
                        <col span="1" width="125">
                        <col span="1" width="25">
                        <col span="1">
                    </colgroup>
                    <tr>
                        <td align="right">Ketersediaan</td>
                        <td align="center">:</td>
                        <td><span class="product_status_orange">Akan tersedia pada bulan Mei 2019</span></td>
                    </tr>
                </table>
                <br>
                <table>
                    <colgroup span="3">
                        <col span="1" width="125">
                        <col span="1" width="25">
                        <col span="1">
                    </colgroup>
                    <tr>
                        <td align="right">Format</td>
                        <td align="center">:</td>
                        <td><?= $value->Bentuk_Cover ?> </td>
                    </tr>
                    <tr>
                        <td align="right">ISBN</td>
                        <td align="center">:</td>
                        <td><?= $value->ISBN ?> </td>
                    </tr>
                    <tr>
                        <td align="right">Halaman</td>
                        <td align="center">:</td>
                        <td><?= $value->Halaman ?> </td>
                    </tr>
                    <tr>
                        <td align="right">Tanggal Terbit</td>
                        <td align="center">:</td>
                        <td>
                            Mei 2019 </td>
                    </tr>
                    <tr>
                        <td align="right">Bahasa</td>
                        <td align="center">:</td>
                        <td><?= $value->Bahasa ?> </td>
                    </tr>
                    <tr>
                        <td align="right">Penerbit</td>
                        <td align="center">:</td>
                        <td><a href="/searches/index/brand:LAKUNA" class="blue_link"><?= $value->Penerbit ?></a> </td>
                    </tr>
                </table>
            </div>
            <br>
            <br>

        </div>

    </div>
    <div style="padding: 0 5px; clear: both;">

        <div style="display: none;">
        </div>
        <br>
        <div class="segment_title">
            Deskripsi: </div>
        <div class="product_description">
            <p><?= $value->Sinopsis ?></p>
		</div>
        <br>
        <div class="float_clear"></div>
        <!-- <br> -->
        <!-- Begin Adversal 468x60 - bukabuku.com Code -->
        <!-- <SCRIPT SRC="http://go.adversal.com/ttj?id=4591227&size=468x60&promo_sizes=320x50,300x50,216x36" TYPE="text/javascript"></SCRIPT> -->
        <!-- End Adversal 468x60 - bukabuku.com Code -->
        <!-- <br> -->


        <div>
        </div>
        <div style="display: none;">
        </div>
        <br>

        <div class="author_list_grid author_product">
            <table class="width_full">
                <tr valign="top">
                    <td>
                        <div class="description">Pengarang : <?= $value->Pengarang ?></div>
                        <br>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <br>
    </div>
	<?php } ?>
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
