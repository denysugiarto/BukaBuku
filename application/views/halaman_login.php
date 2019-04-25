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
    <script type="text/javascript" src="/js/members.js"></script>
    <div style="width: 600px; margin: auto;">
        <div class="page_title">
            Sign In </div>
        <form action="/members/login/home" id="login_form" method="post" accept-charset="utf-8">
            <div style="display:none;">
                <input type="hidden" name="_method" value="POST" />
            </div>
            <div class="login_container">
                <div>
                    <div>
                        Alamat Email Anda </div>
                    <div style="padding: 0 0 10px 30px">
                        Email Saya
                        <input name="data[MemberLogin][email]" style="width:350px; padding:5px" class="login_form_input" tabindex="1" maxlength="100" type="email" id="MemberLoginEmail" required="required" /> </div>
                    <div>
                        Apakah Anda mempunyai password Bukabuku.com? </div>
                    <div style="padding: 0 0 10px 30px">
                        <div class="input radio">
                            <input type="hidden" name="data[MemberLogin][type]" id="MemberLoginType_" value="" />
                            <input type="radio" name="data[MemberLogin][type]" id="MemberLoginTypeNew" value="new" onchange="login_cart_check()" />
                            <label for="MemberLoginTypeNew">Tidak, Saya Pelanggan Baru</label>
                        </div>
                        <input type="radio" name="data[MemberLogin][type]" id="MemberLoginTypeReturn" value="return" checked="checked" onchange="login_cart_check()" />
                        <label for="MemberLoginTypeReturn">Ya, Saya punya password</label>
                        <input name="data[MemberLogin][password]" style="width:200px; padding: 5px;" class="login_form_input" tabindex="2" type="password" id="MemberLoginPassword" required="required" /> </div>
                </div>
            </div>
            <div class="" style="padding-left: 20px; padding-bottom: 10px;">
                <a href="javascript:void(0)" onclick="$(&#039;#login_form&#039;).submit()" rel="button" tabindex="3">Masuk</a> <a href="/members/password" class="" style="font-size:12px; padding-left:60px" tabindex="4">Lupa Sandi?</a>
                <div style="overflow: hidden; height: 0px;">
                    <input type="submit" onfocus="this.blur()" />
                </div>
            </div>
        </form>

        <br>

    <div id="facebook_info" title="Informasi" style="display: none;">
        Facebook Login sedang dalam perbaikan,
        <br>Anda dapat menggunakan email & password untuk login.
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