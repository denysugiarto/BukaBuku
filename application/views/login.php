<?php $this->load->view("navbar") ?>
<div class="page_content">
    <script>
        function facebook_info() {
            $('#facebook_info').dialog({
                modal: true,
                width: 500,
                buttons: {
                    'OK': function() {
                        $(this).dialog('close');
                    }
                }
            });
        }
    </script>
    <script type="text/javascript" src="./Bukabuku.com - Member - Login_files/members.js.download"></script>
    <div style="width: 600px; margin: auto;">
        <div class="page_title">
            Sign In </div>
        <form action="<?= base_url("index.php/LoginController/cek_login") ?>" id="login_form" method="post" accept-charset="utf-8">
            <div style="display:none;">
                <input type="hidden" name="_method" value="POST">
            </div>
            <div class="login_container">
                <div>
                    <div>
                        Alamat Email Anda </div>
                    <div style="padding: 0 0 10px 30px">
                        Email Saya
                        <input name="email" style="width:350px; padding:5px" class="login_form_input" tabindex="1" maxlength="100" type="email" id="MemberLoginEmail" required="required"> 
					</div>
                    <div style="padding: 0 0 10px 30px">
                        <input type="radio" name="data[MemberLogin][type]" id="MemberLoginTypeReturn" value="return" checked="checked" onchange="login_cart_check()">
                        <label for="MemberLoginTypeReturn">Ya, Saya punya password</label>
                        <input name="password" style="width:200px; padding: 5px;" class="login_form_input" tabindex="2" type="password" id="MemberLoginPassword" required="required"> </div>
                </div>
            </div>
            <div class="" style="padding-left: 20px; padding-bottom: 10px;">
                <a href="javascript:void(0)" onclick="$(&#39;#login_form&#39;).submit()" rel="button" tabindex="3" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Masuk</span></a> <a href="http://www.bukabuku.com/members/password" class="" style="font-size:12px; padding-left:60px" tabindex="4">Lupa Sandi?</a>
                <div style="overflow: hidden; height: 0px;">
                    <input type="submit" onfocus="this.blur()" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false">
                </div>
            </div>
        </form>
        <div class="line_behind_white" style="width: 200px;">
                <span>
		Atau		</span>
        </div>
    </div>
    <div id="facebook_info" title="Informasi" style="display: none;">
        Facebook Login sedang dalam perbaikan,
        <br>Anda dapat menggunakan email &amp; password untuk login.
    </div>
</div>
<div class="page_footer">
    <div class="footer">
        <div class="footer_section">
            <div class="footer_title">Services</div>
            <div><a href="http://www.bukabuku.com/members/data">My Bukabuku</a></div>
            <div><a href="http://www.bukabuku.com/help#2_14">Cara Belanja</a></div>
            <div><a href="http://www.bukabuku.com/infos/contact_us">Customer Service</a></div>
            <div><a href="http://www.bukabuku.com/members">Order Status</a></div>
            <div><a href="http://www.bukabuku.com/help#4_15">Ketentuan COD</a></div>
            <div><a href="http://www.bukabuku.com/infos/pages/returns_policy">Ketentuan Pengembalian</a></div>
            <div><a href="http://www.bukabuku.com/infos/contact_us">Bantuan</a></div>
        </div>
        <div class="footer_section">
            <div class="footer_title">Information</div>
            <div><a href="http://www.bukabuku.com/infos/pages/about_us">Tentang Bukabuku.com</a></div>
            <div><a href="http://www.bukabuku.com/infos/pages/publisher_partnership">Kerjasama Penerbit</a></div>
            <div><a href="http://www.bukabuku.com/infos/pages/careers">Lowongan Kerja</a></div>
            <div><a href="http://www.bukabuku.com/testimonials">Testimonial</a></div>
            <div><a href="http://www.bukabuku.com/infos/ship_tariff">Ongkos Kirim</a></div>
        </div>
        <div class="footer_section">
            <div class="footer_title">Make Money With Us</div>
            <div><a href="http://www.bukabuku.com/partnerships/affiliate">Program Afiliasi</a></div>
            <div><a href="http://www.bukabuku.com/partnerships/dropship">Program Dropship / Reseller</a></div>
        </div>
        <div class="footer_section">
            <div class="footer_title">Connect With Us</div>
            <div class="social_icon"><img src="./Bukabuku.com - Member - Login_files/logo-facebook.png" height="20" alt=""> <a href="http://www.facebook.com/bukabuku">Facebook</a></div>
            <div class="social_icon"><img src="./Bukabuku.com - Member - Login_files/logo-twitter.png" height="20" alt=""> <a href="http://www.twitter.com/Bukabuku">Twitter</a></div>
            <div class="social_icon"><img src="./Bukabuku.com - Member - Login_files/logo-google+.png" height="20" alt=""> <a href="http://www.bukabuku.com/members/login/home#">Google+</a></div>
            <div class="social_icon"><img src="./Bukabuku.com - Member - Login_files/logo-instagram.png" height="20" alt=""> <a href="https://www.instagram.com/bukabuku">Instagram</a></div>
            <div class="social_icon"><img src="./Bukabuku.com - Member - Login_files/logo-pinterest.png" height="20" alt=""> <a href="http://www.bukabuku.com/members/login/home#">Pinterest</a></div>
        </div>
        <div class="footer_section">
            <div class="footer_title">Newsletter</div>
            <div class="text_smaller">
                Daftar dan dapatkan penawaran diskon dan buku-buku terbaru dari kami. </div>
            <br>
            <form action="http://emails.bukabuku.com/subscribe" method="POST" accept-charset="utf-8">
                <input type="hidden" name="name" id="name">
                <input type="text" name="email" id="email" class="placeholder_text" placeholder="Email Anda" style="width: 150px">
                <br>
                <input type="hidden" name="list" value="X2UaMXXCyRv8SrYzgrzeng">
                <button type="submit" name="submit" id="submit" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Berlangganan</span></button>
            </form>
        </div>
        <div class="footer_bottom2">
            <div class="footer_title">Payment Method</div>
            <div class="bank_logo">
                <img src="./Bukabuku.com - Member - Login_files/logo-bca.png" height="20" alt=""> <img src="./Bukabuku.com - Member - Login_files/logo-mandiri.png" height="20" alt=""> <img src="./Bukabuku.com - Member - Login_files/logo-bni.png" height="20" alt=""> <img src="./Bukabuku.com - Member - Login_files/logo-bri.png" height="20" alt=""> <img src="./Bukabuku.com - Member - Login_files/logo-wu.png" height="20" alt=""> <img src="./Bukabuku.com - Member - Login_files/logo-paypal.png" height="20" alt=""> </div>
            <br>
            <div class="footer_title">Shipping Method</div>
            <div class="delivery_logo">
                <img src="./Bukabuku.com - Member - Login_files/logo-jne.png" height="20" alt=""> <img src="./Bukabuku.com - Member - Login_files/logo-jayon.png" height="20" alt=""> <img src="./Bukabuku.com - Member - Login_files/logo-ems.png" height="20" alt=""> <img src="./Bukabuku.com - Member - Login_files/logo-pos.png" height="20" alt=""> </div>
        </div>
        <div class="footer_bottom">
            <span> <a href="http://www.bukabuku.com/infos/pages/terms_of_use" class="text_smaller">Terms of Use</a>		</span> <span> <a href="http://www.bukabuku.com/infos/pages/privacy_policy" class="text_smaller">Privacy Policy</a>		</span> <span class="text_smaller">©&nbsp;2019,&nbsp;Bukabuku.com</span>
        </div>
        <div align="center" id="switch_view"></div>
        <div class="float_clear"></div>
    </div>
</div>

<script src="./Bukabuku.com - Member - Login_files/urchin.js.download" type="text/javascript">
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

<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul>
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
