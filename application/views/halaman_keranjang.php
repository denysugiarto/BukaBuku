<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta name="theme-color" content="#cee2fd">
    <link rel="stylesheet" type="text/css" href="http://www.bukabuku.com/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="http://www.bukabuku.com/css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="http://www.bukabuku.com/css/jquery.jscrollpane.css" />
    <link rel="stylesheet" type="text/css" href="http://www.bukabuku.com/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" type="text/css" href="http://www.bukabuku.com/css/jquery.selectBoxIt.css" />
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.metadata.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.hoverIntent.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.raty.min.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.mtz.monthpicker.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/mbMenu.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/mwheelIntent.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/global.js"></script>
    <script type="text/javascript" src="http://www.bukabuku.com/js/jquery.selectBoxIt.min.js"></script>
    <link href="http://www.bukabuku.com/img/logo-bukabuku.png" type="image/x-icon" rel="icon" />
    <link href="http://www.bukabuku.com/img/logo-bukabuku.png" type="image/x-icon" rel="shortcut icon" />
    <script type="text/javascript">
        var str_loading = 'Mengisi';
        var str_remove_wishlist = 'Hapus daftar harapan';
        var str_remove_watchlist = 'Hapus daftar pantauan';
        var str_refund_confirm = 'Konfirmasi Pengembalian Dana';
        var str_must_be_filled = 'Harus diisi';
        var str_choose_country = 'Pilih Negara';
        var str_choose_prov = 'Pilih Propinsi';
        var str_choose_city = 'Pilih Kota';
        var str_choose_district = 'Pilih Kecamatan';
        var str_not_found = 'Tidak ditemukan';
        var str_prov_disabled = 'Propinsi Dinonaktifkan';
        var str_district_disabled = 'Daerah Dinonaktifkan';
        var str_city_disabled = 'Kota Dinonaktifkan';
        var str_delete_address_confirm = 'Apakah anda yakin untuk menghapus?';
        var str_number_format_dot = '.';
        var str_cant_be_blank = 'Tidak boleh kosong';
        var str_choose = 'Pilih';
        path = '/';
        domain = 'www.bukabuku.com';
        $(document).ready(function() {
            $("input[type=submit], input[type=button], a[rel=button], button").button();
        });
    </script>
    <title>Bukabuku.com - Keranjang Belanja</title>

</head>

<body>
<div class="loading_container" id="loading_container" style="display: none;">
    <div class="loading">Loading...</div>
</div>
<div class="loading_container" id="loading_container_2" style="display: none;"></div>
<div id="loading_partial" style="display: none;">
    <table style="width: 100%; height: 100%;">
        <tr>
            <td align="center">
                <table>
                    <tr>
                        <td align="center">Loading</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<div class="page_header">
    <div class="headers">
        <div class="header_row_2">
            <div class="logo">
                <a href="/"><img src="http://www.bukabuku.com/img/logo.gif" alt="" /></a>
            </div>
            <div class="features">

            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="header_row_3" id="header_row_3">
            <div style="float: left; width: auto; display: none;" class="headerLogo">
                <a href="/"><img src="http://www.bukabuku.com/img/logo-bukabuku.png" alt="" /></a>&nbsp;
            </div>
            <div style="float: left; width: auto;" class="headerMenu1 rootVoices">
            </div>
            <div style="float: right; width: auto;" class="headerMenu4 rootVoices">
                <div class="rootVoice {menu:'menu_wishlist'} menu_wishlist" style="display: inline-block; cursor: pointer">
                    <a href="/wishlists">
                        <div>Daftar</div>
                        <div>Keinginan<span class="down_arrow"></span></div>
                    </a>
                </div>
            </div>
            <div style="float: left;" class="search_text">Pencarian</div>
            <div style="float: right; width: auto;" class="headerMenu3 rootVoices">
                <div class="rootVoice {menu:'menu_cart'} menu_cart cart_button" id="menu_cart_box" style="font-weight: bold;">
                    <a href="/carts">
                            <span class="cart_items">0
						</span>
                        <img src="http://www.bukabuku.com/img/cart.gif" alt="" />Keranjang
                        <span class="down_arrow"></span></a>
                </div>
            </div>
            <div style="float: right; width: auto;" class="headerMenu2 rootVoices">
                <div class="rootVoice {menu:'menu_member'} menu_member" style="display: inline-block; cursor: pointer;">
                    <a href="/members/login">
                        <div class="text_smaller">Sign In</div>
                        <div style="font-weight:bold">My Bukabuku<span class="down_arrow"></span></div>
                    </a>
                </div>
            </div>
            <div style="width: auto;">
                <form action="/searches/search" style="width:auto" id="SearchForm" method="post" accept-charset="utf-8">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST" />
                    </div>
                    <div style="float: right; width: auto;">
                        <a href="javascript:void(0)" onclick="$('#SearchForm').submit()" class="search_button"><span class="helper"></span><img src="http://www.bukabuku.com/img/icon-search.png" alt=""/></a> </div>
                    <div style="width: auto; overflow: hidden;">
                        <div class="search_input_container">
                            <input name="data[Search][query]" class="placeholder_text" placeholder="Judul, Pengarang, ISBN, ..." value="" type="search" id="SearchQuery" /> </div>
                    </div>
                </form>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div class="menus">
        <div id="menu_category" class="mbmenu boxMenu">
            <div id="menu_category_content">
                <div>
                    <div class="category_title">
                        Books </div>
                    <div class="category_split">
                        <div class="category_item"><a href="/browses/index/cid:44/c:anak-anak">Anak-Anak</a></div>
                        <div class="category_item"><a href="/browses/index/cid:176/c:arsitektur-design-interior">Arsitektur &amp; Design Interior</a></div>
                        <div class="category_item"><a href="/browses/index/cid:46/c:bahasa-kamus">Bahasa &amp; Kamus</a></div>
                        <div class="category_item"><a href="/browses/index/cid:48/c:biografi">Biografi</a></div>
                        <div class="category_item"><a href="/browses/index/cid:47/c:bisnis-manajemen-keuangan">Bisnis, Manajemen &amp; Keuangan</a></div>
                        <div class="category_item"><a href="/browses/index/cid:424/c:buku-impor">Buku Impor</a></div>
                        <div class="category_item"><a href="/browses/index/cid:200/c:buku-saku">Buku Saku</a></div>
                        <div class="category_item"><a href="/browses/index/cid:129/c:current-affairs-reportage">Current Affairs &amp; Reportage</a></div>
                        <div class="category_item"><a href="/browses/index/cid:272/c:design">Design</a></div>
                        <div class="category_item"><a href="/browses/index/cid:185/c:ensiklopedia">Ensiklopedia</a></div>
                        <div class="category_item"><a href="/browses/index/cid:98/c:fashion-beauty">Fashion &amp; Beauty</a></div>
                        <div class="category_item"><a href="/browses/index/cid:49/c:fiksi">Fiksi</a></div>
                        <div class="category_item"><a href="/browses/index/cid:50/c:filsafat">Filsafat</a></div>
                        <div class="category_item"><a href="/browses/index/cid:51/c:fotografi">Fotografi</a></div>
                        <div class="category_item"><a href="/browses/index/cid:52/c:hobi-interest">Hobi &amp; Interest</a></div>
                        <div class="category_item"><a href="/browses/index/cid:172/c:hospitality">Hospitality</a></div>
                    </div>
                    <div class="category_split">
                        <div class="category_item"><a href="/browses/index/cid:206/c:humanitas">Humanitas</a></div>
                        <div class="category_item"><a href="/browses/index/cid:251/c:inspirasional-spiritualitas">Inspirasional &amp; Spiritualitas</a></div>
                        <div class="category_item"><a href="/browses/index/cid:333/c:just-for-fun">Just for Fun</a></div>
                        <div class="category_item"><a href="/browses/index/cid:205/c:katalog">Katalog</a></div>
                        <div class="category_item"><a href="/browses/index/cid:54/c:kesehatan">Kesehatan</a></div>
                        <div class="category_item"><a href="/browses/index/cid:256/c:kisah-nyata">Kisah Nyata</a></div>
                        <div class="category_item"><a href="/browses/index/cid:92/c:komik">Komik</a></div>
                        <div class="category_item"><a href="/browses/index/cid:253/c:komputer">Komputer</a></div>
                        <div class="category_item"><a href="/browses/index/cid:58/c:kuliner">Kuliner</a></div>
                        <div class="category_item"><a href="/browses/index/cid:203/c:life-style">Life Style</a></div>
                        <div class="category_item"><a href="/browses/index/cid:255/c:majalah">Majalah</a></div>
                        <div class="category_item"><a href="/browses/index/cid:244/c:menulis-jurnalisme">Menulis &amp; Jurnalisme</a></div>
                        <div class="category_item"><a href="/browses/index/cid:142/c:musik-perfilman">Musik &amp; Perfilman</a></div>
                        <div class="category_item"><a href="/browses/index/cid:376/c:non-fiksi">Non Fiksi</a></div>
                        <div class="category_item"><a href="/browses/index/cid:209/c:non-profit-and-philantrophy">Non-Profit and Philantrophy</a></div>
                        <div class="category_item"><a href="/browses/index/cid:59/c:orang-tua-keluarga">Orang Tua &amp; Keluarga</a></div>
                    </div>
                    <div class="category_split">
                        <div class="category_item"><a href="/browses/index/cid:296/c:pengembangan-diri-motivasi">Pengembangan Diri &amp; Motivasi</a></div>
                        <div class="category_item"><a href="/browses/index/cid:60/c:pertanian-perkebunan">Pertanian &amp; Perkebunan</a></div>
                        <div class="category_item"><a href="/browses/index/cid:282/c:peternakan-perikanan">Peternakan &amp; Perikanan</a></div>
                        <div class="category_item"><a href="/browses/index/cid:61/c:politik-hukum">Politik &amp; Hukum</a></div>
                        <div class="category_item"><a href="/browses/index/cid:130/c:psikologi">Psikologi</a></div>
                        <div class="category_item"><a href="/browses/index/cid:295/c:puisi-sastra">Puisi &amp; Sastra</a></div>
                        <div class="category_item"><a href="/browses/index/cid:252/c:referensi">Referensi</a></div>
                        <div class="category_item"><a href="/browses/index/cid:143/c:relationship-weddings">Relationship &amp; Weddings</a></div>
                        <div class="category_item"><a href="/browses/index/cid:149/c:religius">Religius</a></div>
                        <div class="category_item"><a href="/browses/index/cid:190/c:sains-teknologi">Sains &amp; Teknologi</a></div>
                        <div class="category_item"><a href="/browses/index/cid:147/c:sejarah">Sejarah</a></div>
                        <div class="category_item"><a href="/browses/index/cid:144/c:seni-budaya">Seni &amp; Budaya</a></div>
                        <div class="category_item"><a href="/browses/index/cid:148/c:textbooks">Textbooks</a></div>
                        <div class="category_item"><a href="/browses/index/cid:155/c:travel">Travel</a></div>
                        <div class="category_item"><a href="/browses/index/cid:194/c:umum">Umum</a></div>
                    </div>
                    <div class="menu_category_other">
                        <a href="/browses/category_list">Kategori Lainnya</a> </div>
                </div>
            </div>
        </div>
        <div id="menu_member" class="mbmenu boxMenu">
            <div style="background-color: #EEE; border: 1px solid #DDD; width: auto; height: auto; padding: 5px;">
                <div align="center">
                    <div><a href="/members/login/home" class="button_link">Sign In</a><a href="/members/reg" class="button_link">Daftar</a></div>
                </div>
            </div>
        </div>
        <div id="menu_cart" class="mbmenu boxMenu">
            <div style="background-color: #EEE; border: 1px solid #DDD; width: auto; height: auto; padding: 5px;">
                <div align="center">
                    <div id="menu_cart_content">
                        <div class="float_clear"></div>
                    </div>
                    <div>
                        <br><b>Keranjang Belanja Kosong</b>
                        <br>
                        <br> </div>
                </div>
            </div>
        </div>
        <div id="menu_wishlist" class="mbmenu boxMenu">
            <div style="background-color: #EEE; border: 1px solid #DDD; width: auto; height: auto; padding: 5px;">
                <div align="center">
                    <div>
                        <div class="float_clear"></div>
                    </div>
                    <div><a href="/wishlists" class="button_link">Lihat Daftar Keinginan</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
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