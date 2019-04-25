<?php 
	if ($this->session->userdata('logged_in')==1) {
		$this->load->view("navbar_logout");
	}else{
		$this->load->view("navbar");
	}
?>
<div class="page_content">
    <script type="text/javascript" src="/js/members_reg.js"></script>
    <form action="<?= base_url("index.php/LoginController/register") ?>" id="reg_form" method="post" accept-charset="utf-8">
        <div style="display:none;">
            <input type="hidden" name="_method" value="POST" />
        </div>
        <div class="page_title">
            Registrasi</div>
        <div style="width: 600px; margin: auto; padding: 5px;">
            <div class="tabbox_title">
                Informasi Akun</div>
            <div class="tabbox_container">
                <table class="lines width_full">
                    <colgroup span="2">
                        <col span="1" width="150" />
                        <col span="1" />
                    </colgroup>
                    <tr valign="top">
                        <td>Nama *</td>
                        <td>
                            <input name="nama" style="width:250px" class="text" maxlength="100" type="text" id="MemberName" required="required" /> </td>
                    </tr>
                    <tr valign="top">
                        <td>Email *</td>
                        <td>
                            <input name="email" style="width:250px" class="text" type="text" id="MemberEmail2" /> </td>
                    </tr>
                    <tr valign="top">
                        <td>Ulangi Email *</td>
                        <td>
                            <input name="data[Member][email]" style="width:250px" class="text" maxlength="100" type="email" id="MemberEmail" required="required" /> </td>
                    </tr>
                    <tr valign="top">
                        <td></td>
                    </tr>
                    <tr valign="top">
                        <td>Sandi *</td>
                        <td>
                            <input name="password" style="width:125px" required="required" type="password" id="MemberPassword" /> </td>
                    </tr>
                    <tr valign="top">
                        <td>Ulangi Sandi *</td>
                        <td>
                            <input name="data[Member][password2]" style="width:125px" required="required" type="password" id="MemberPassword2" />
                        </td>
                    </tr>
                </table>
            </div>
            <div class=tabbox_title>
                Kontak</div>
            <div class="tabbox_container">
                <table class="lines width_full">
                    <colgroup span="2">
                        <col span="1" width="150" />
                        <col span="1" />
                    </colgroup>
                    <tr valign="top">
                        <td>Telepon Selular **</td>
                        <td>
                            <input name="data[Member][phone_mobile]" onkeypress="return numbersonly2(event)" style="width:125px" class="text" maxlength="100" type="text" id="MemberPhoneMobile" /> </td>
                    </tr>
                    <tr valign="top">
                        <td>Telepon Rumah **</td>
                        <td>
                            <input name="data[Member][phone_home]" onkeypress="return numbersonly2(event)" style="width:125px" class="text" maxlength="100" type="text" id="MemberPhoneHome" /> </td>
                    </tr>
                    <tr valign="top">
                        <td>Telepon Kantor **</td>
                        <td>
                            <input name="data[Member][phone_office]" onkeypress="return numbersonly2(event)" style="width:125px" class="text" maxlength="100" type="text" id="MemberPhoneOffice" /> </td>
                    </tr>
                </table>
            </div>
            <div class="tabbox_title">
                Bahasa</div>
            <div class="tabbox_container">
                <table class="lines width_full">
                    <colgroup span="2">
                        <col span="1" width="150" />
                        <col span="1" />
                    </colgroup>
                    <tr valign="top">
                        <td>Bahasa</td>
                        <td>
                            <select name="data[Member][language]" id="MemberLanguage">
                                <option value="4">Indonesia</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <div>Kami di BukaBuku.com sangat menghargai privasi Anda. Informasi Anda hanyalah kami gunakan untuk keperluan memproses pesanan Anda. Kami selalu menyimpan data Anda dengan metode yang aman.</div>
            <br>
            <div class="zebra_2">
                <div class="header">
                    <button type="submit">Setujui</button>
                </div>
            </div>
            <div align="left" class="note">
                *&nbsp;&nbsp;Harus diisi
                <br>**&nbsp;Isi Salah Satu</div>
        </div>
    </form>
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
