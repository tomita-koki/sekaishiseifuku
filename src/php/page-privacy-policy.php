<?php get_header(); ?>
    <!-- ヘッター -->
    <?php get_header('custom'); ?>

    <!-- サイドバー -->
    <?php get_sidebar(); ?>

    <!-- メインエリア -->
    <!-- 見出し -->
    <?php
    get_template_part(
      'template-parts/components/page-heading',
      null,
      [
        'en' => 'PRIVACY',
        'ja' => 'プライバシーポリシー'
      ]
    );
    ?>
	<?php
	set_query_var('breadcrumb_items', [
	  [
		'label' => get_the_title(),
	  ],
	]);

	get_template_part('template-parts/components/breadcrumbs');
	?>

    <section class="privacy-policy section-bg">
        <div class="privacy-policy__wrap">
            <p class="privacy-policy-container__text">
                合同会社リヨンカンパニー（以下、弊社）が取り扱う全ての個人情報の保護について、社会的使命を十分に認識し、本人の権利の保護、個人情報に関する法規制等を遵守します。また、以下に示す方針を具現化するための体制を構築し、最新のIT技術の動向、社会的要請の変化、経営環境の変動等を常に認識しながらその継続的改善に全社を挙げて取り組むことをここに宣言します。
            </p>
            <p class="privacy-policy-container__text">
                個人情報は、業務における弊社の正当な事業遂行上並びに従業員の雇用、人事管理上必要な範囲に限定して、取得・利用及び提供をし、特定された利用目的の達成に必要な範囲を超えた個人情報の取扱い（目的外利用）を行いません。また、目的外利用を行わないための措置を講じます。
            </p>
            <p class="privacy-policy-container__text">
                個人情報保護に関する法令、国が定める指針及びその他の規範を遵守致します。<br>
                個人情報（弊社が取得し、又は取得しようとしている個人情報を含む。）の漏えい、滅失、き損などのリスクに対しては、合理的な安全対策を講じて防止すべく事業の実情に合致した経営資源を注入し個人情報セキュリティ体制を継続的に向上させます。また、万一の際には速やかに是正措置を講じます。<br>
                個人情報取扱いに関する苦情及び相談に対しては、迅速かつ誠実に、適切な対応をさせていただきます。
            </p>
            <p class="privacy-policy-container__text">
                本方針は、全ての従業者に配付して周知させるとともに、弊社のホームページなどに掲載することにより、いつでもどなたにも入手可能な措置を取るものとします。</p>

            <dl class="privacy-policy-container">
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title"> 人情報の取得 </dt>
                    <dd class="privacy-policy-container__text">
                        本方針において、「個人情報」とは、個人情報保護法第2条第1項に定める個人情報を意味し、お客様から提供いただく氏名、住所、生年月日、電話番号、電子メールアドレス、LINE等のアカウント等の情報を含みます。
                    </dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">個人情報の利用目的</dt>
                    <dd class="privacy-policy-container__text">
                        <ol class="privacy-policy-container__list">
                            <li class="privacy-policy-container__num">
                                <p class="privacy-policy-container__text">
                                    ご本人より書面等（ホームページや電子メール等によるものを含む。以下「書面」という）に記載された個人情報を直接取得する場合の利用目的</p>
                                <dl class="privacy-policy-table">
                                    <div class="privacy-policy-table__wrap">
                                        <dt class="privacy-policy-table__title">お客様情報</dt>
                                        <dd class="privacy-policy-table__text">
                                            弊社サービスにおける商品の発送、関連するカスタマーサポート、新商品・サービスの案内及び提供、お客様情報の管理のため</dd>
                                    </div>
                                    <div class="privacy-policy-table__wrap">
                                        <dt class="privacy-policy-table__title">取引先情報</dt>
                                        <dd class="privacy-policy-table__text">商談及び業務上の諸連絡、受発注業務、請求支払業務のため</dd>
                                    </div>
                                    <div class="privacy-policy-table__wrap">
                                        <dt class="privacy-policy-table__title">従業者情報</dt>
                                        <dd class="privacy-policy-table__text">従業者の人事労務管理、業務管理、健康管理、セキュリティ管理のため
                                        </dd>
                                    </div>
                                    <div class="privacy-policy-table__wrap">
                                        <dt class="privacy-policy-table__title">採用応募者</dt>
                                        <dd class="privacy-policy-table__text">採用応募者への連絡と弊社の採用業務管理のため</dd>
                                    </div>
                                </dl>
                            </li>
                            <li class="privacy-policy-container__num">
                                <p>ご本人より書面以外で直接個人情報を取得する際の利用目的</p>
                                <dl class="privacy-policy-table">
                                    <div class="privacy-policy-table__wrap">
                                        <dt class="privacy-policy-table__title">分類</dt>
                                        <dd class="privacy-policy-table__text">利用目的</dd>
                                    </div>
                                    <div class="privacy-policy-table__wrap">
                                        <dt class="privacy-policy-table__title">個人のお客様情報</dt>
                                        <dd class="privacy-policy-table__text">
                                            <ul>
                                                <li>ユーザー様サポートのため</li>
                                                <li>ご利用履歴管理のため</li>
                                                <li>弊社サービスの案内及び提供のため</li>
                                                <li>お問合せ対応のため</li>
                                            </ul>
                                        </dd>
                                    </div>
                                    <div class="privacy-policy-table__wrap">
                                        <dt class="privacy-policy-table__title">お取引先担当者様情報</dt>
                                        <dd class="privacy-policy-container__text">発注内容確認のため（通信記録等）</dd>
                                    </div>
                                    <div class="privacy-policy-table__wrap">
                                        <dt class="privacy-policy-table__title">業務の受託に伴いお預かりする個人情報</dt>
                                        <dd class="privacy-policy-table__text">委託された当該業務を適切に遂行するため</dd>
                                    </div>
                                </dl>
                            </li>
                        </ol>
                    </dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">事業者、管理者、連絡先</dt>
                    <dd class="privacy-policy-container__text">
                        <dl class="privacy-policy-table">
                            <div class="privacy-policy-table__wrap">
                                <dt class="privacy-policy-table__title">事業者の名称</dt>
                                <dd class="privacy-policy-table__text">合同会社リヨンカンパニー</dd>
                            </div>
                            <div class="privacy-policy-table__wrap">
                                <dt class="privacy-policy-table__title">個人情報保護管理者</dt>
                                <dd class="privacy-policy-table__text">土井昭</dd>
                            </div>
                            <div class="privacy-policy-table__wrap">
                                <dt class="privacy-policy-table__title">連絡先</dt>
                                <dd class="privacy-policy-table__text">
                                    <address>東京都渋谷区神宮前6-23-4桑野ビル2F</address><br>
                                    ※弊社に関する問い合わせは、電話では行っておりません。<a href="<?php echo esc_url(home_url('/')); ?>contact/"
                                        target="_blank">こちらのWebサイト</a>よりDMで連絡してください。
                                </dd>
                            </div>
                        </dl>
                    </dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">個人情報の第三者提供</dt>
                    <dd class="privacy-policy-container__text">
                        <p class="privacy-policy-container__text">
                            弊社は、原則として第三者に個人情報を開示・提供することはありませんが、以下の場合には開示・提供することができるものとします。</p>
                        <ol class="privacy-policy-container__list">
                            <li class="privacy-policy-container__num">法令に基づく場合又は法令で認められる場合</li>
                            <li class="privacy-policy-container__num">人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難である場合
                            </li>
                            <li class="privacy-policy-container__num">
                                公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難である場合</li>
                            <li class="privacy-policy-container__num">
                                国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要があって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがある場合
                            </li>
                            <li class="privacy-policy-container__num">
                                弊社サービスの利用規約への同意その他の方法により、お客様が個人情報の第三者提供に同意している場合に該当する場合</li>
                        </ol>
                    </dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">個人情報取扱いの委託</dt>
                    <dd class="privacy-policy-container__text">
                        弊社は事業運営上、お客様により良いサービスを提供するために業務の一部を外部に委託しています。業務委託先に対しては、個人情報を預けることがあります。この場合、個人情報を適切に取り扱っていると認められる委託先を選定し、契約等において個人情報の適正管理・機密保持などによりお客様の個人情報の漏洩防止に必要な事項を取決め、適切な管理を実施させます。
                    </dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">個人情報の開示等の請求</dt>
                    <dd class="privacy-policy-container__text">
                        <p class="privacy-policy-container__text">
                            お客様は、弊社に対してご自身の個人情報の開示等（利用目的の通知、開示、内容の訂正・追加・削除、利用の停止または消去、第三者への提供の停止）に関して、弊社問合わせ窓口に申し出ることができます。その際、弊社はお客様ご本人を確認させていただいたうえで、合理的な期間内に対応いたします（当該個人情報が存在しないときにはその旨を通知いたします。）。但し、次のいずれかに該当する場合は、その全部又は一部を開示しないことがあります。開示しない決定をした場合には、その旨を遅滞なく通知します。
                        </p>
                        <ol>
                            <li>個人情報保護法その他の法令により、弊社が開示の義務を負わない場合</li>
                            <li>開示することにより、ご本人又は第三者の生命、身体、財産その他の権利利益を害するおそれがある場合</li>
                            <li>開示することにより、弊社の業務の適正な実施に著しい支障を及ぼすおそれがある場合</li>
                        </ol>
                    </dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">安全管理について</dt>
                    <dd class="privacy-policy-container__text">
                        弊社は、取り扱う個人情報のリスクに応じて、漏えい、滅失又はき損の防止その他の個人情報（弊社が取得し、又は取得しようとしている個人情報を含む。）の安全管理のために、法令に基づく必要かつ適切な措置を講じます。
                    </dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">個人情報を提供されることの任意性について</dt>
                    <dd class="privacy-policy-container__text">
                        お客様が弊社に個人情報を提供されるかどうかは、お客様の任意によるものです。ただし、必要な項目をいただけない場合、各サービス等が適切な状態で提供できない場合があります。</dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">ご本人が容易に認識できない方法による取得する場合について</dt>
                    <dd class="privacy-policy-container__text">
                        クッキー（Cookies）は、お客さまが弊社のサイトに再度訪問された際、より便利に当サイトを閲覧していただくためのものであり、お客さまのプライバシーを侵害するものではなく、またお客さまのコンピューターへ悪影響を及ぼすことはありません。また弊社のサイトでは個人情報を入力していただく部分にはすべてSSL（Secure
                        Sockets
                        Layer）のデータ暗号化システムを利用しております。さらに、サイト内における情報の保護にもファイアウォールを設置するなどの方策を採っております。ただし、インターネット通信の性格上、セキュリティを完全に保証するものではありません。予めご了承ください。
                    </dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">認定個人情報保護団体について</dt>
                    <dd class="privacy-policy-container__text">弊社が加入する認定個人情報保護団体は、ありません。</dd>
                </div>
                <div class="privacy-policy-container__wrap">
                    <dt class="privacy-policy-container__title">保有個人データに関する事項の周知</dt>
                    <dd class="privacy-policy-container__text">
                        弊社で保有している開示対象個人情報に関して、ご本人様又はその代理人様からの利用目的の通知、開示、内容の訂正、追加又は削除、利用の停止、消去及び第三者への提供の停止の請求につきましては、お電話または、メールフォームからご連絡ください。
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    <!-- フッター -->
    <?php get_footer('custom'); ?>
<?php get_footer(); ?>
