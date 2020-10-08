<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Pages
        $pages = Page::all();
        foreach ($pages as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Page::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new pages
        $pages = [
            [
                'template' => 'Home',
                'tr' => [
                    'title' => 'Ana Sayfa',
                    'force_slug' => '/',
                ],
                'en' => [
                    'title' => 'Home Page',
                    'force_slug' => '/',
                ],
            ],
            [
                'template' => 'RetailProducts',
                'tr' => [
                    'title' => 'Perakende Ürünler',
                ],
                'en' => [
                    'title' => 'Retail Products',
                ],
                'children' => [
                    [
                        'template' => 'Retail-NaretKasapUrunleri',
                        'tr' => [
                            'title' => 'Naret Kasap Ürünleri',
                        ],
                        'en' => [
                            'title' => 'Naret Kasap Ürünleri',
                        ],
                    ],
                    [
                        'template' => 'Retail-IleriIslenmisUrunler',
                        'tr' => [
                            'title' => 'İleri İşlenmiş Ürünler',
                        ],
                        'en' => [
                            'title' => 'İleri İşlenmiş Ürünler',
                        ],
                    ],
                ]
            ],
            [
                'template' => 'WholesaleProducts',
                'tr' => [
                    'title' => 'Toptan Ürünler',
                ],
                'en' => [
                    'title' => 'Wholesale Products',
                ],
                'children' => [
                    [
                        'template' => 'Wholesale-DondurulmusDonerGrubu',
                        'tr' => [
                            'title' => 'Dondurulmuş Döner Grubu',
                            'short_title' => 'Döner Grubu',
                        ],
                        'en' => [
                            'title' => 'Dondurulmuş Döner Grubu',
                            'short_title' => 'Döner Grubu',
                        ],
                    ],
                    [
                        'template' => 'Wholesale-DondurulmusKofteGrubu',
                        'tr' => [
                            'title' => 'Dondurulmuş Köfte Grubu',
                            'short_title' => 'Köfte Grubu',
                        ],
                        'en' => [
                            'title' => 'Dondurulmuş Köfte Grubu',
                            'short_title' => 'Köfte Grubu',
                        ],
                    ],
                    [
                        'template' => 'Wholesale-TazeDanaGrubu',
                        'tr' => [
                            'title' => 'Taze Dana Grubu',
                            'short_title' => 'Dana Grubu',
                        ],
                        'en' => [
                            'title' => 'Taze Dana Grubu',
                            'short_title' => 'Dana Grubu',
                        ],
                    ],
                    [
                        'template' => 'Wholesale-TazeKuzuGrubu',
                        'tr' => [
                            'title' => 'Taze Kuzu Grubu',
                            'short_title' => 'Kuzu Grubu',
                        ],
                        'en' => [
                            'title' => 'Taze Kuzu Grubu',
                            'short_title' => 'Kuzu Grubu',
                        ],
                    ],
                ]
            ],
            [
                'template' => 'Corporate',
                'tr' => [
                    'title' => 'Kurumsal',
                ],
                'en' => [
                    'title' => 'Corporate',
                ],
                'children' => [
                    [
                        'template' => 'About',
                        'tr' => [
                            'title' => 'Marka Hikayesi',
                        ],
                        'en' => [
                            'title' => 'Story of Brand',
                        ],
                    ],
                    [
                        'template' => 'NaretPolitics',
                        'tr' => [
                            'title' => 'Naret Politikaları?',
                        ],
                        'en' => [
                            'title' => 'Naret Politikaları?',
                        ],
                    ],
                    [
                        'template' => 'UrunTestSayfasi',
                        'tr' => [
                            'title' => 'Kasap Parakende',
                        ],
                        'en' => [
                            'title' => 'Kasap Parakende',
                        ],
                    ],
                ]
            ],
            [
                'template' => 'Manufacture',
                'tr' => [
                    'title' => 'Üretim',
                ],
                'en' => [
                    'title' => 'Manufacture',
                ],
                'children' => [
                    [
                        'template' => 'CuttingFacilities',
                        'tr' => [
                            'title' => 'Besi ve Kesim Tesisleri',
                        ],
                        'en' => [
                            'title' => 'Besi ve Kesim Tesisleri',
                        ],
                    ],
                    [
                        'template' => 'ProductionFacilities',
                        'tr' => [
                            'title' => 'Üretim Tesisleri',
                        ],
                        'en' => [
                            'title' => 'Üretim Tesisleri',
                        ],
                    ],
                    [
                        'template' => 'Certificate',
                        'tr' => [
                            'title' => 'Sertifikalar',
                        ],
                        'en' => [
                            'title' => 'Certificates',
                        ],
                    ],
                ],
            ],
            [
                'template' => 'Contact',
                'tr' => [
                    'title' => 'İletişim',
                ],
                'en' => [
                    'title' => 'Contact',
                ],
            ],
            [
                'template' => 'InformationText',
                'tr' => [
                    'title' => 'Bilgilendirme Metni',
                    'content' => '
        <h2><strong>GİZLİLİK ve KİŞİSEL VERİLERİN KORUNMASI POLİTİKASI</strong></h2>

<p><strong>TANIMLAR</strong></p>

<p>İşbu Politikada kullanılan kısaltmalar aşağıdaki gibidir.</p>

<p><strong>1.ŞİRKET:</strong><br />
Sitenin resmi sahibi olan Kanuni Merkez: Yalı Boyu Caddesi Koruluk Sokak No:3 Beylerbeyi, &Uuml;sk&uuml;dar, İstanbul adresli RSPM Y&ouml;netim ve Eğitim Danışmanlık Tic.Ltd.Şti.</p>

<p><strong>2.SİTE:</strong><br />
www.naret.com.tr domain adına sahip internet sitesi.</p>

<p><strong>3.ZİYARET&Ccedil;İ:</strong><br />
Siteyi kişisel iletişim bilgilerini vermeden okuyarak bilgilenme ama&ccedil;lı ziyaret eden, ya da kişisel verilerini sitede bulunan formlar aracılığıyla ve kendi rızasıyla site sahibi şirket ile paylaşan şahıs veya şahıslar. Politika i&ccedil;inde bundan sonra Kullanıcı olarak anılacaktır.</p>

<p><strong>MADDELER</strong></p>

<p><strong>1.Gizlilik:</strong></p>

<p>Bu SİTE, Kullanıcıları i&ccedil;eriği ŞİRKET tarafından kontrol edilmeyen başka web sitelerine taşıyan bağlantılar i&ccedil;ermektedir. Bu SİTE&rsquo;de diğer internet-web sitelerine bağlantı verdiği hallerde t&uuml;m kullanım ve işlemler i&ccedil;in o sitelere ait gizlilik-g&uuml;venlik politikası ve kullanım şartları ge&ccedil;erlidir; SİTE&rsquo;den reklam, banner, i&ccedil;erik g&ouml;rmek veya başka herhangi bir ama&ccedil; ile ulaşılan diğer web sitelerinden bilgi kullanımları (&ouml;zellikle bu web sitelerinin toplayabileceği kişisel verilerin derlenmesi, kullanımı veya ifşa edilmesinden), keza sitelerin etik ilkeleri, gizlilik-g&uuml;venlik prensipleri, servis kalitesi ve diğer uygulamaları sebebi ile oluşabilecek ihtilaf, maddi-manevi zarar ve kayıplardan ŞİRKET sorumlu değildir. Dış web sitelerine y&ouml;nlendiren bir bağlantıya tıkladığınızda bu sitelerin &uuml;&ccedil;&uuml;nc&uuml; şahıslar tarafından hazırlanması ve kontrol edilmesi sebebiyle ŞİRKET&rsquo;in sorumluluk alanından &ccedil;ıkılmış olduğunu, bu noktadan sonra ŞİRKET&rsquo;in hi&ccedil;bir şekilde sorumluluğunun olmadığını kabul etmektesiniz. SİTE kullanımı esnasında oluşabilecek herhangi bir hata, kesinti, bilgi naklinde gecikme, bilgisayar vir&uuml;s&uuml;, hat ve elektrik arızası sonucunda ortaya &ccedil;ıkabilecek doğrudan veya dolaylı zarar, ziyan ve masraflardan ŞİRKET sorumlu değildir. Benzer bi&ccedil;imde başka web sitelerinden ŞİRKET&rsquo;in izni olsun ya da olmasın SİTE&rsquo;ye link verildiğinde de, bu t&uuml;r linklerin kontrol edilememesinden kaynaklanan yapı nedeniyle ŞİRKET&rsquo;in herhangi bir sorumluluğu bulunmamaktadır.</p>

<p>SİTE&rsquo;de yer alan bilgi, materyal ve bunların d&uuml;zenlenmesi konusundaki telif hakları ŞİRKET&rsquo;e aittir. Sitemiz materyallerine ait t&uuml;m telif hakları, tescilli marka, patent, entelekt&uuml;el ve diğer m&uuml;lkiyet hakları ŞİRKET&rsquo;de saklıdır. Bir kişi ve/veya kuruluş, &ouml;nceden ŞİRKET&rsquo;in iznini almadık&ccedil;a, SİTE&rsquo;nin belli bir kısmını başka bir web sitesinde kullanamaz, başka bir web sitesinin bağlantısını kuramaz.</p>

<p>Ek bilgi almak istediğiniz konularda SİTE&rsquo;de belirtilen iletişim yolları ile ŞİRKET&rsquo;e danışabilirsiniz.</p>

<p><strong>2.Kişisel Olmayan ve Derleme Bilgiler:</strong></p>

<p>SİTE ziyaret edildiğinde, SİTE&rsquo;ye hangi IP&rsquo;den giriş yaptığınız, sitemizde ziyaret ettiğiniz sayfalar ve her bir sayfa, bilgi formu ve uygulamada ne kadar s&uuml;re harcadığınız gibi genel bilgiler kaydedilir. Bu bilgilerin tutulmasının amacı ŞİRKET&rsquo;in sitesini d&uuml;zenli olarak izleyerek geliştirmek ve hizmetlerini iyileştirmektir. Bu bilgiler genellikle kişisel tanımlama bilgileri ile bağlantılı olmayan IP adresleri kullanılarak alınır.</p>

<p><strong>3.Kişisel Veriler:</strong></p>

<p>Bir Kullanıcı, SİTE &uuml;zerinden bir soru g&ouml;nderdiğinde, belirli bir hizmet i&ccedil;in bilgi formu doldurduğunda veya başvuruda bulunduğunda, kişisel verileri (isim, fatura ve teslimat adresi, telefon numarası, e-posta adresi ve/veya sosyal medya/mesajlaşma hesabı kimliği gibi) ŞİRKET tarafından Kullanıcının hizmet, bilgi veya başvuru talebinin yerine getirilmesi amacıyla sınırlı olarak form alanlarında doldurulması zorunlu alanlar aracılığıyla, Kullanıcı&rsquo;dan talep edilebilir ve kaydedilebilir. Ayrıca Kullanıcı&rsquo;nın kişisel verilerini (isim, fatura ve teslimat adresi, telefon numarası, e-posta adresi ve/veya sosyal medya/mesajlaşma hesabı kimliği gibi) SİTE &uuml;zerinden vereceği a&ccedil;ık rıza ile ŞİRKET ile paylaşması halinde kişisel veriler ŞİRKET tarafından her t&uuml;rl&uuml; &uuml;r&uuml;n-hizmet tanıtım, reklam, iletişim, promosyon, satış, pazarlama, &uuml;yelik işlemleri, bilgilendirmeleri ve uygulamaları yapılması amacı ile, form alanlarında doldurulması zorunlu alanlar aracılığıyla, ŞİRKET tarafından kaydedilebilir. ŞİRKET ve SİTE ile sosyal medya sayfalarımız ve bunlarla sınırlı olmamak &uuml;zere her t&uuml;rl&uuml; yazılı, s&ouml;zl&uuml; ve elektronik kanallar aracılığı ile; kişisel ve/veya hassas nitelikli kişisel verileriniz; kaydedilebilir, depolanabilir, g&uuml;ncellenebilir, periyodik olarak kontrol edilebilir, yeniden d&uuml;zenlenebilir, sınıflandırılabilir, muhafaza edilebilir ve sair suretler ile işlenebilir. ŞİRKET, Kullanıcı&rsquo;lardan edinilen kişisel verileri; işbu Gizlilik ve Kişisel Verilerin Korunması Politikası&rsquo;nda belirtilen ama&ccedil;ların ger&ccedil;ekleştirilmesi kapsamında gerektiğinde yurt i&ccedil;i ve yurt dışındaki iş ortakları ile, Web sitesi barındırma, veri analizi, &ouml;deme işlemleri, sipariş işleme, bilgi teknolojileri ve ilgili altyapıların sağlanması, m&uuml;şteri hizmetleri, e-posta g&ouml;nderimi, denetleme ve benzer hizmetleri sunan &uuml;&ccedil;&uuml;nc&uuml; kişi hizmet sağlayıcıları ve tedarik&ccedil;ileri, sigorta şirketleri ile paylaşabilir veya bunlara ifşa edebilir, yurt dışına aktarabilir. Kişisel verilerin aktarıldığı &uuml;&ccedil;&uuml;nc&uuml; kişi, aktarılan verileri işbu bildirimde belirtilen ama&ccedil;lar dışında kullanmayacak, sadece RSPM Y&ouml;netim ve Eğitim Danışmanlık Tic.Ltd.Şti.&rsquo;nin veri işleme ama&ccedil;ları doğrultusunda kullanacaktır. Kişisel verileriniz 6698 sayılı Kişisel Verilerin Korunması Kanunu (&ldquo;Kanun&rdquo;) madde 5 ve madde 6&rsquo;da belirtilen a&ccedil;ık rıza, kanunlarda a&ccedil;ık&ccedil;a &ouml;ng&ouml;r&uuml;lmesi, hizmet s&ouml;zleşmesinin kurulması ve ifası, bir hakkın tesisi, kullanılması veya korunması, ŞİRKET olarak meşru menfaatlerimizi ve hukuki y&uuml;k&uuml;ml&uuml;l&uuml;klerimizi yerine getirmek hukuki sebepleri kapsamında işlenecektir.</p>

<p>ŞİRKET kişisel verilerinizi aşağıdaki ama&ccedil;larla kullanabilir:</p>

<ul>
	<li>ŞİRKET tarafından sağlanan hizmetleri sunmak.</li>
	<li>Sorularınıza yanıt vermek.</li>
	<li>Haber b&uuml;ltenleri gibi ilginizi &ccedil;ekebileceğini d&uuml;ş&uuml;nd&uuml;ğ&uuml;m&uuml;z pazarlama iletişimlerini, iletişim tercihlerinize g&ouml;re size g&ouml;ndermek.</li>
	<li>Size &ouml;zel &uuml;r&uuml;nler, pazarlama mesajları, teklifler ve i&ccedil;erikler sunmak.</li>
	<li>Anketler, &ccedil;ekilişler, yarışmalar ve benzer promosyonlara katılmanıza olanak sağlamak (bu etkinliklerden bazılarında, kişisel verilerinizi nasıl kullandığımız ve ifşa ettiğimize ilişkin daha fazla bilgi i&ccedil;eren ek kurallar uygulanabilir, bu nedenle s&ouml;z konusu kuralları dikkatle okumanızı &ouml;neririz).</li>
	<li>İş fırsatlarımız, iş ilanlarımız konusunda bilgilendirme yapmak.</li>
	<li>Veri analizi, denetimler, su&ccedil;/dolandırıcılık izleme ve &ouml;nleme, g&uuml;venlik, yeni &uuml;r&uuml;nler geliştirme, test etme, hizmetlerimizi geliştirme, iyileştirme ya da değiştirme, kullanım trendlerini belirleme, tanıtım kampanyalarımızın etkinliğini belirleme, iş faaliyetlerimizi yerine getirme ve genişletme gibi iş ama&ccedil;larımız.</li>
	<li>Bu bildirimin amacıyla tutarlı diğer faaliyetleri ger&ccedil;ekleştirmek.</li>
</ul>

<p>Kişisel verilerinizin işbu Gizlilik ve Kişisel Verilerin Korunması Politikası&rsquo;nda belirtilen ama&ccedil;larla kullanılması ve ifşası konusunda aşağıda belirtilen y&ouml;ntemlerden birini kullanarak iletişim bilgilerinize ve iletişim tercihlerinize erişebilir, bunları g&uuml;ncelleyebilir, ŞİRKET&rsquo;e sağladığınız kişisel verilere erişmek, bunları g&uuml;ncellemek, silmek, yok etmek, d&uuml;zeltmek veya aşağıda ifade edilen diğer haklarınız konusundaki taleplerinizi; Kanun&rsquo;da ve 30356 Veri Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğ&rsquo;de ifade edildiği &uuml;zere yazılı ve imzalı bir şekilde aşağıda belirtilen başvuru adresine bizzat elden teslim edebilir, noter aracılığı ile g&ouml;nderebilir, mobil imza veya ŞİRKET&rsquo;e daha &ouml;nce bildirmiş olduğunuz ve sistemimizde kayıtlı olan elektronik posta adresini kullanarak bilgi@naret.com.tr adresine g&ouml;nderebilirsiniz. M&uuml;mk&uuml;n olan en kısa s&uuml;rede ve y&uuml;r&uuml;rl&uuml;kteki mevzuat uyarınca talebinizi (taleplerinizi) yerine getireceğiz.</p>

<p>BAŞVURU ADRESİ: Yalı Boyu Caddesi Koruluk Sokak No:3 Beylerbeyi, &Uuml;sk&uuml;dar, İstanbul</p>

<p>Daha uzun bir saklama s&uuml;resi yasalarca gerekmedik&ccedil;e ya da izin verilmedik&ccedil;e, kişisel verilerinizi işbu Gizlilik ve Kişisel Verilerin Korunması Politikası&rsquo;nda belirtilen ama&ccedil;ları yerine getirmek i&ccedil;in gerekli s&uuml;re boyunca saklarız. Kişisel verileriniz azami yirmi yıl boyunca saklanacaktır.</p>

<p>Kullanıcı, Kanun &ccedil;er&ccedil;evesinde, ŞİRKET&rsquo;e başvurarak; (a) kişisel verilerin işlenip işlenmediğini &ouml;ğrenme, (b) kişisel veriler işlenmişse buna ilişkin bilgi talep etme, (c) kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını &ouml;ğrenme, (d) yurt i&ccedil;inde veya yurt dışında kişisel verilerin aktarıldığı &uuml;&ccedil;&uuml;nc&uuml; kişileri bilme, (e) kişisel verilerin eksik veya yanlış işlenmiş olması halinde bunların d&uuml;zeltilmesini isteme, (f) kişisel verilerin silinmesini veya yok edilmesini isteme, (g) yukarıdaki e ve f&rsquo;de belirtilen talepler uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı &uuml;&ccedil;&uuml;nc&uuml; kişilere bildirilmesini isteme, (h) işlenen verilerin m&uuml;nhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya &ccedil;ıkmasına itiraz etme, (i) Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması halinde zararın giderilmesini talep etme haklarına sahiptir.</p>

<p><strong>4.&Ccedil;erezler (Cookies) :</strong></p>

<p>Zaman i&ccedil;erisinde, ŞİRKET veya ortakları bilgisayarınıza &ldquo;&ccedil;erez&rdquo; g&ouml;nderebilir. &Ccedil;erezler, web sunucusu tarafından İnternet tarayıcınıza g&ouml;nderilen ve daha sonra bilgisayarınızın hafızasında depolanan, k&uuml;&ccedil;&uuml;k verilerdir. &Ccedil;erezler bilgisayarınızın hafızasından veya diğer web sayfalarınca yaratılmış &ccedil;erez dosyalarından veri sağlayamaz. &Ccedil;erezler sisteminize zarar vermez. &Ccedil;erezler SİTE de nerelerin ziyaret edildiğini ya da hangi sayfaların tarafınızdan d&uuml;zenlenip d&uuml;zenlenmediğini g&ouml;rmek i&ccedil;in kullanılır. Bu uygulamayla siteye yaptığınız tekrarlı ziyaretlerin kolaylaşması sağlanır. İnternet tarayıcınızın ayarlarını değiştirerek &ccedil;erezleri kabul etmeyebilir ya da bilgisayarınıza bir &ccedil;erez g&ouml;nderildiğinde tarayıcınızın sizi uyarmasını sağlayabilirsiniz. Tarayıcınızın ayarlarını başlangı&ccedil;taki haline d&ouml;nd&uuml;rerek genellikle t&uuml;m &ccedil;erezleri kabul etmiş olursunuz. &Ccedil;erezleri reddederseniz sitemizde ve diğer web sitelerinde karşılaşacağınız uygulamalar azalabilir ve bazı &ouml;zellikler istenen şekilde &ccedil;alışmayabilir. Bu azalan uygulamalardan ve aksaklıklardan ŞİRKET sorumlu değildir.</p>

<p><strong>5.Veri G&uuml;venliği:</strong></p>

<p>Sitemizde izinsiz girişi engellemek, veri doğruluğunu s&uuml;rd&uuml;rmek ve bilginin doğru kullanımını sağlamak i&ccedil;in site kanalıyla toplanmış bilgiyi koruyan ve g&uuml;venliğini sağlayan fiziksel, elektronik ve y&ouml;netimsel prosed&uuml;rler uygulanmaktadır. T&uuml;m şartlara rağmen ŞİRKET, kişisel verilerin ŞİRKET sistemlerinden yasal olmayan yollarla elde edilemeyeceğini garanti edemez ve ŞİRKET&rsquo;in online servislerinin kullanılması halinde sistemlerimizde g&uuml;venlik a&ccedil;ığı riski de dahil olmak &uuml;zere ortaya &ccedil;ıkabilecek t&uuml;m riskleri ve sorumluluğu kabul etmiş sayılırsınız.</p>

<p><strong>6.Bağlantılı Siteler:</strong></p>

<p>Bu site, kullanıcılarını i&ccedil;eriği ŞİRKET tarafından kontrol edilmeyen başka web sitelerine taşıyan bağlantılar i&ccedil;ermektedir. Bağlantı verilmiş olan bu web siteleri, bu politikada belirtilen gizlilik h&uuml;k&uuml;mlerinden farklı koşullar i&ccedil;erebilir. Bu web sitelerinin toplayabileceği kişisel verilerin derlenmesi, kullanımı veya ifşa edilmesinden ŞİRKET sorumlu değildir. ŞİRKET bu şekilde bir derleme, kullanım veya ifşadan &ouml;t&uuml;r&uuml; ortaya &ccedil;ıkabilecek zararların sorumluluğunu kabul etmemektedir. Başka sitelere ait bağlantıların ŞİRKET sitesinde yer alıyor olması, o sitelerin g&uuml;venli olduğu anlamına gelmemekte ve tamamen kullanıcının sorumluluğundadır. Dış sitelere y&ouml;nlendiren bir bağlantıya tıkladığınızda bu sitelerin 3. şahıslar tarafından hazırlanması ve kontrol edilmesi sebebiyle ŞİRKET sorumluluk alanından &ccedil;ıkılmış olduğunu, bu noktadan sonra Kullanıcı ŞİRKET&rsquo;in hi&ccedil;bir şekilde sorumluluğunun olmadığını kabul eder. Site kullanımı esnasında oluşabilecek herhangi bir hata, kesinti, bilgi naklinde gecikme, bilgisayar vir&uuml;s&uuml;, hat ve elektrik arızası sonucunda ortaya &ccedil;ıkabilecek doğrudan veya dolaylı zarar, ziyan ve masraflardan ŞİRKET sorumlu değildir. Benzer bi&ccedil;imde başka sitelerden ŞİRKET&rsquo;in izni olsun ya da olmasın ŞİRKET sitesine link verildiğinde de, bu t&uuml;r linklerin kontrol edilememesinden kaynaklanan yapı nedeniyle ŞİRKET&rsquo;in herhangi bir sorumluluğu bulunmamaktadır.</p>

<p><strong>7.Sitede Verilen Bilgiler:</strong></p>

<p>ŞİRKET, SİTE i&ccedil;eriğinde, tasarımında, erişiminde haber vermeksizin değişiklik ve/veya kısıtlama yapma hakkını saklı tutar. ŞİRKET, herhangi bir nedenle ve tamamen kendi kararıyla SİTE erişimi kısıtlayabilir veya kaldırabilir.</p>

<p>ŞİRKET, SİTE i&ccedil;eriğini g&uuml;ncel ve doğru tutmak i&ccedil;in elinden gelen t&uuml;m &ccedil;abayı sarf etmektedir ancak bu bilgilerin doğruluğunu garanti etmez ve bu bilgilerin doğruluğuna, tam olmasına ve g&uuml;ncel olmasına ilişkin hi&ccedil;bir sorumluluğu kabul etmez. Bu bilgilerin kullanımı Kullanıcı inisiyatifindedir ve yasal bağlayıcılığı yoktur.</p>

<p><strong>8.Politika Değişiklikleri:</strong></p>

<p>Bu Politika değişikliğe tabidir ve ŞİRKET tarafından herhangi bir duyuruda bulunulmaksızın değiştirilebilir. Kullanım koşullarında yapılan değişiklik / değişiklikler SİTE&rsquo;ye konulmalarından itibaren ge&ccedil;erlilik kazanacaktır. Kullanım koşullarının g&uuml;ncel halinin kontrol&uuml; Kullanıcı&rsquo;nın y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;ndedir.</p>'
                ],
                'en' => [
                    'title' => 'Information Text',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur cupiditate delectus distinctio eaque earum et eveniet facilis fuga id laudantium, numquam obcaecati praesentium, provident, quod soluta ut veritatis voluptatem?'
                ],
            ],
        ];

        // Create
        foreach ($pages as $attributes) {
            $this->createRow($attributes);
        }
    }

    public function createRow($attributes, $parent = null)
    {
        $children = array_pull($attributes, 'children');

        // Create instance
        $instance = Page::create($attributes);

        if ($parent) {
            $instance->appendToNode($parent);
        }
        $instance->save();

        // Create children
        $relation = new \Illuminate\Database\Eloquent\Collection;
        foreach ((array)$children as $child) {
            $relation->add($child = $this->createRow($child, $instance));
            $child->setRelation('parent', $instance);
        }
        $instance->refreshNode();
        return $instance->setRelation('children', $relation);
    }
}
