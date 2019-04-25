<?php $this->load->view("navbar") ?>
<div class="page_content">
    <script type="text/javascript" src="http://books.google.com/books/previewlib.js"></script>
    <script>
        $(function() {
            $("#price_range").slider({
                range: true,
                min: 0,
                max: 0,
                values: [0, 3300000],
                step: 100,
                slide: function(event, ui) {
                    $("#SearchesPriceRange").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            $("#SearchesPriceRange").val($("#price_range").slider("values", 0) + "-" + $("#price_range").slider("values", 1));
        });
    </script>
    <div class="page_title">
        Pencarian</div>
    <div class="content_container">
        </form>
    </div>
    <div class="main_section">
        <div class="browse_bar">
            <div class="result_count">
                <div align="center" class="float_clear">
                    Hasil: 1 - 20 dari 46290</div>
            </div>
            <div class="switch_view">
                <span class="active_view"><img src="http://www.bukabuku.com/img/view_grid.png" alt=""/><span>GRID</span></span>
                <a href="/searches/switch_view/query:a/action_to:index" class="inactive_view"><img src="http://www.bukabuku.com/img/view_list.png" alt="" /><span>LIST</span></a>
            </div>
            <div class="sort_bar">
                <form action="/Searches/change_sort" id="BrowsesChangeSortForm" method="post" accept-charset="utf-8">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST" />
                    </div>
                    <input type="hidden" name="data[Searches][query]" id="sort_query" value="a" />
                    <label for="SearchesSort">Urut berdasarkan</label>
                    <select name="data[Searches][sort]" onchange="$(&#039;#BrowsesChangeSortForm&#039;).submit()" id="SearchesSort">
                        <option value="date" selected="selected">Terbaru</option>
                        <option value="popular">Bestseller</option>
                        <option value="price-desc">Harga Tertinggi</option>
                        <option value="price-asc">Harga Terendah</option>
                        <option value="review-most">Review Terbanyak</option>
                        <option value="review-avg">Rating</option>
                        <option value="az-asc">A-Z</option>
                        <option value="az-desc">Z-A</option>
                    </select>
                </form>
            </div>
        </div>
        <div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786026716477/the-prince-s-escape.html"><img src="http://img.bukabuku.net/product_thumb/9/f/9f7bcf7b195016139264acf79204881c.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786026716477/the-prince-s-escape.html">The Prince&#039;s Escape</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Faradita </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">PO The Prince's Escape</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786026716477/the-prince-s-escape.html">Soft Cover, Notes, Photo Card, Mei 2019</a> </div>
                            <span class="price">Rp. 76.500				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  15 Mei 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786026716477');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786023858040/kiai-ujang-di-negeri-kanguru.html"><img src="http://img.bukabuku.net/product_thumb/8/8/88263ecefda37579d0282f4720b848ee.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786023858040/kiai-ujang-di-negeri-kanguru.html">Kiai Ujang di Negeri Kanguru</a>			</span>
                        <div class="text_smaller">Menjelajahi Mazhab-Mazhab Menjawab Persoalan Sehari-Hari</div>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Nadirsyah Hosen </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">PO Kiai Ujang</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786023858040/kiai-ujang-di-negeri-kanguru.html">Soft Cover, Mei 2019</a> </div>
                             <span class="price">Rp. 67.200				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  2 Mei 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786023858040');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786023676828/apa-itu-ayah.html"><img src="http://img.bukabuku.net/product_thumb/3/a/3a85102206a840b3a913234dcc2bd54a.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786023676828/apa-itu-ayah.html">Apa itu, Ayah?</a>			</span>
                        <div class="text_smaller">Ketika Aku Bertanya Kalimat Thayyibah</div>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Citra Mustikawati </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">PO Apa itu, Ayah?</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786023676828/apa-itu-ayah.html">Board book, Mei 2019</a> </div>
                            <span class="price">Rp. 79.900				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  6 Mei 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786023676828');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786020622392/tukar-takdir.html"><img src="http://img.bukabuku.net/product_thumb/a/f/aff078a89a0d03a12d80073c0ee2f52c.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786020622392/tukar-takdir.html">Tukar Takdir</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Valiant Budi </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786020622392/tukar-takdir.html">Soft Cover, Sticker, Tanda Tangan, Mei 2019</a> </div>
                            <span class="price">Rp. 61.200				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  6 Mei 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786020622392');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/2010001115755/(not)-a-dream-wedding.html"><img src="http://img.bukabuku.net/product_thumb/0/2/0222021e9552869d3d01241f69e5381e.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/2010001115755/(not)-a-dream-wedding.html">(Not) A Dream Wedding</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Zefanya Monika </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">PO (Not) A Dream Wedding</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/2010001115755/(not)-a-dream-wedding.html">Soft Cover, April 2019</a> </div>
                             <span class="price">Rp. 90.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  30 April 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('2010001115755');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786021201473/kpop-dictionary-gaul.html"><img src="http://img.bukabuku.net/product_thumb/1/4/1423cd4031050854cf0a0140932af622.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786021201473/kpop-dictionary-gaul.html">Kpop Dictionary Gaul</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Woosung Kang </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">PO Kpop Dictionary Gaul</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786021201473/kpop-dictionary-gaul.html">Soft Cover, April 2019</a> </div>
                            <span class="price">Rp. 89.100				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  30 April 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786021201473');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786025346972/iron-fire-and-ice.html"><img src="http://img.bukabuku.net/product_thumb/a/d/adf50d0b08ed5653653236291e882b78.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786025346972/iron-fire-and-ice.html">Iron, Fire, And Ice</a>			</span>
                        <div class="text_smaller">Fakta Tersembunyi di Balik Game of Thrones</div>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Ed West </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">PO Iron, Fire, And Ice</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786025346972/iron-fire-and-ice.html">Soft Cover, Mei 2019</a> </div> <span class="price">Rp. 143.200
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada bulan Mei 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786025346972');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786025713866/makan-tepat-tumbuh-sehat!.html"><img src="http://img.bukabuku.net/product_thumb/4/c/4c6ffe13edf36c1a53ebc86aa898e2bd.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786025713866/makan-tepat-tumbuh-sehat!.html">Makan Tepat, Tumbuh Sehat!</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Dr. Arifianto, Sp.A, dr. Pratami Diah Herliani </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">SO Makan Tepat, Tumbuh Sehat!</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786025713866/makan-tepat-tumbuh-sehat!.html">Soft Cover, April 2019</a> </div>
                            <span class="price">Rp. 88.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  30 April 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786025713866');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786020495958/buku-pintar-alam-sekitar.html"><img src="http://img.bukabuku.net/product_thumb/8/2/823095a486e8c4d2f0e7ee17b2bc4d8a.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786020495958/buku-pintar-alam-sekitar.html">Buku Pintar Alam Sekitar</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Jumanta </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786020495958/buku-pintar-alam-sekitar.html">Soft Cover, April 2019</a> </div>
                            <span class="price">Rp. 99.840				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  29 April 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786020495958');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786025508783/break-out.html"><img src="http://img.bukabuku.net/product_thumb/f/9/f9f0653589afc4d698a81035aa85664e.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786025508783/break-out.html">BREAK OUT</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh BELLA ZMR </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">PO BREAK OUT</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786025508783/break-out.html">Soft Cover, April 2019</a> </div>
                            <span class="price">Rp. 89.100				</span> >
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  27 April 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786025508783');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786025508790/perfect-illusion.html"><img src="http://img.bukabuku.net/product_thumb/8/d/8d09ba5ca5fcc2c03a999b46d324e8a3.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786025508790/perfect-illusion.html">Perfect Illusion</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh FLARA DEVIANA </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">PO Perfect Illusion</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786025508790/perfect-illusion.html">Soft Cover, Mei 2019</a> </div>
                             <span class="price">Rp. 82.800				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Akan tersedia pada tanggal  27 Mei 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786025508790');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/2010001115663/my-boyfriend-s-wedding-dress-(2019).html"><img src="http://img.bukabuku.net/product_thumb/3/0/3045f761d45df94a72555ba3c35dfa0f.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/2010001115663/my-boyfriend-s-wedding-dress-(2019).html">My Boyfriend&#039;s Wedding Dress (2019)</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Kim Eun Jeong </div>
                    </div>
                    <div class="promo_div">
                        <table class="ribbon_table">
                            <tr>
                                <td class="left"></td>
                                <td class="center">SO Central Park & My Boyfriend</td>
                                <td class="right"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/2010001115663/my-boyfriend-s-wedding-dress-(2019).html">Soft Cover, April 2019</a> </div>
                            <span class="price">Rp. 79.600				</span>
                                <span class="product_status_orange">Akan tersedia pada tanggal  26 April 2019					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786027742000');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786025781568/jangan-merasa-benar-sendiri-nasihat-nasihat-gus-mus-sepanjang-masa.html"><img src="http://img.bukabuku.net/product_thumb/8/b/8babc2f2113bf448f335db5c29659fa2.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786025781568/jangan-merasa-benar-sendiri-nasihat-nasihat-gus-mus-sepanjang-masa.html">Jangan Merasa Benar Sendiri Nasihat-nasihat Gus Mus Sepanjang Masa</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Ahfa Waid </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786025781568/jangan-merasa-benar-sendiri-nasihat-nasihat-gus-mus-sepanjang-masa.html">Soft Cover, April 2019</a> </div>
                             <span class="price">Rp. 48.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Stock di Gudang Supplier					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786025781568');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786025781575/nasihat-nasihat-keseharian-buya-hamka-quraish-shihab-buya-syafii-maarif-dan-buya-husein-muhammad.html"><img src="http://img.bukabuku.net/product_thumb/e/a/ea201b3455152bb12e05c9b19e7a1224.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786025781575/nasihat-nasihat-keseharian-buya-hamka-quraish-shihab-buya-syafii-maarif-dan-buya-husein-muhammad.html">Nasihat-nasihat Keseharian Buya Hamka, Quraish Shihab, Buya Syafii Maarif, Dan Buya Husein Muhammad</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Ahfa Waid </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786025781575/nasihat-nasihat-keseharian-buya-hamka-quraish-shihab-buya-syafii-maarif-dan-buya-husein-muhammad.html">Soft Cover, April 2019</a> </div>
                            <span class="price">Rp. 48.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Stock di Gudang Supplier					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786025781575');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786020624136/kembali-utuh-(unwind-distology-4-undivided).html"><img src="http://img.bukabuku.net/product_thumb/c/8/c8872949d4e706a09acf24859941cf75.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786020624136/kembali-utuh-(unwind-distology-4-undivided).html">Kembali Utuh (Unwind Distology #4: Undivided)</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Neal Shusterman </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786020624136/kembali-utuh-(unwind-distology-4-undivided).html">Soft Cover, April 2019</a> </div>
                             <span class="price">Rp. 96.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Stock di Gudang Supplier					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786020624136');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786020628981/nana.html"><img src="http://img.bukabuku.net/product_thumb/8/1/81ef07c1652dcc1a13358a6ddd6e85d1.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786020628981/nana.html">Nana</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Emile Zola </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786020628981/nana.html">Soft Cover, April 2019</a> </div>
                             <span class="price">Rp. 116.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Stock di Gudang Supplier					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786020628981');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786020629094/target-utama-(the-silent-widow).html"><img src="http://img.bukabuku.net/product_thumb/9/4/94facbf98f05e541e6be69f9e1a37a69.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786020629094/target-utama-(the-silent-widow).html">Target Utama (The Silent Widow)</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Tilly Bagshawe, Sidney Sheldon </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786020629094/target-utama-(the-silent-widow).html">Soft Cover, April 2019</a> </div>
                             <span class="price">Rp. 95.200				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Stock di Gudang Supplier					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786020629094');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/2010001115625/pembunuhan-terpendam-(sleeping-murder)--cover-baru.html"><img src="http://img.bukabuku.net/product_thumb/c/f/cf437522800f9cb3412868d60fbe9fd6.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/2010001115625/pembunuhan-terpendam-(sleeping-murder)--cover-baru.html">Pembunuhan Terpendam (Sleeping Murder) - Cover Baru</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Agatha Christie </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/2010001115625/pembunuhan-terpendam-(sleeping-murder)--cover-baru.html">Soft Cover, April 2019</a> </div>
                             <span class="price">Rp. 48.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Stock di Gudang Supplier					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9789792275803');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786020629001/bambi-kehidupan-di-dalan-hutan-(bambi-a-life-in-the-woods).html"><img src="http://img.bukabuku.net/product_thumb/3/e/3e2af3df231828b9567ab342bb252cd2.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786020629001/bambi-kehidupan-di-dalan-hutan-(bambi-a-life-in-the-woods).html">Bambi: Kehidupan di Dalan Hutan (Bambi: A Life In The Woods)</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh FELIX SALTEN </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786020629001/bambi-kehidupan-di-dalan-hutan-(bambi-a-life-in-the-woods).html">Soft Cover, April 2019</a> </div>
                            <span class="price">Rp. 44.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Stock di Gudang Supplier					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786020629001');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_list_grid">
                <div class="image">
                    <span class="helper"></span>
                    <a href="/browses/product/9786020628943/circe.html"><img src="http://img.bukabuku.net/product_thumb/8/9/89ad7646ed5906905d003ad37a904975.jpg" class="product_image_small" alt="" /></a>
                </div>
                <div class="content">
                    <div>
                        <span class="product_list_title"> <a href="/browses/product/9786020628943/circe.html">Circe</a>			</span>
                        </span>
                        <div class="product_author text_smaller">
                            oleh Madeline Miller </div>
                    </div>
                    <div>
                        <div>
                            <div class="product_list_detail text_smaller">
                                <a href="/browses/product/9786020628943/circe.html">Soft Cover, April 2019</a> </div>
                             <span class="price">Rp. 108.000				</span>
                            <div class="text_smaller">
                                <span class="product_status_orange">Stock di Gudang Supplier					</span>
                            </div>

                        </div>
                        <div style="margin-top:5px">
                            <script type="text/javascript">
                                GBS_insertPreviewButtonPopup('9786020628943');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <script>
            function change_page() {
                window.location = '/searches/index/query:a/page:' + $('#page_selector').val() + '/';
            }
        </script>
        <div class="page_selector">
            <div class="first">
                <img src="http://www.bukabuku.com/img/page-first-i.png" alt="" /> </div>
            <div class="prev">
                <img src="http://www.bukabuku.com/img/page-prev-i.png" alt="" /> </div>
            <div class="selector">
                <select id="page_selector" onchange="change_page()" onkeyup="change_page()">
                    <option value="1" selected="selected">
                        1 </option>
                    <option value="2">
                        2 </option>
                    <option value="3">
                        3 </option>
                    <option value="4">
                        4 </option>
                    <option value="5">
                        5 </option>
                    <option value="6">
                        6 </option>
                    <option value="7">
                        7 </option>
                    <option value="8">
                        8 </option>
                    <option value="9">
                        9 </option>
                    <option value="10">
                        10 </option>
                    <option value="11">
                        11 </option>
                    <option value="12">
                        12 </option>
                    <option value="13">
                        13 </option>
                    <option value="14">
                        14 </option>
                    <option value="15">
                        15 </option>
                    <option value="16">
                        16 </option>
                    <option value="17">
                        17 </option>
                    <option value="18">
                        18 </option>
                    <option value="19">
                        19 </option>
                    <option value="20">
                        20 </option>
                </select>
            </div>
            <div class="next">
                <a href="http://www.bukabuku.com/searches/index/query:a/page:2/"><img src="http://www.bukabuku.com/img/page-next.png" alt="" /></a>
            </div>
            <div class="last">
                <a href="http://www.bukabuku.com/searches/index/query:a/page:20/"><img src="http://www.bukabuku.com/img/page-last.png" alt="" /></a>
            </div>
        </div>
        <div style="clear: both;"></div>
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
