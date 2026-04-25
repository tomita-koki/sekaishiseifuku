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
        'en' => 'CONTACT',
        'ja' => 'お問い合わせ'
      ]
    );
    ?>
    <!-- パンクズ -->
	<?php
	set_query_var('breadcrumb_items', [
	  [
		'label' => get_the_title(),
	  ],
	]);

	get_template_part('template-parts/components/breadcrumbs');
	?>

    <div class="contact-description">
      <div class="contact-description__content">
        <p class="contact-description__text">お仕事のご依頼・YouTube・書籍に関するお問い合わせなど、お気軽にご連絡ください。<br>
        通常<span class="contact-description__strong">3営業日以内</span>にご返信いたします。</p>
      </div>
      <div class="contact-description__image">
        <div class="contact-description__image-item">
          <img class="contact-description__image-img" src="/wp-content/uploads/2026/04/contact-icon-01.png" alt="">
          <p class="contact-description__caption">お仕事の依頼</p>
        </div>
        <div class="contact-description__image-item">
          <img class="contact-description__image-img" src="/wp-content/uploads/2026/04/contact-icon-02.png" alt="">
          <p class="contact-description__caption">YouTube関連</p>
        </div>
        <div class="contact-description__image-item">
          <img class="contact-description__image-img" src="/wp-content/uploads/2026/04/contact-icon-03.png" alt="">
          <p class="contact-description__caption">書籍について</p>
        </div>
        <div class="contact-description__image-item">
          <img class="contact-description__image-img" src="/wp-content/uploads/2026/04/contact-icon-04.png" alt="">
          <p class="contact-description__caption">その他</p>
        </div>
      </div>
    </div>
    <div class="wpcf7 js" id="wpcf7-f9-p2-o1" lang="ja" dir="ltr" data-wpcf7-id="9">
    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
    <form action="/sample-page/#wpcf7-f9-p2-o1" method="post" class="wpcf7-form init" aria-label="コンタクトフォーム" novalidate="novalidate" data-status="init">
    <fieldset class="hidden-fields-container"><input type="hidden" name="_wpcf7" value="9"><input type="hidden" name="_wpcf7_version" value="6.1.5"><input type="hidden" name="_wpcf7_locale" value="ja"><input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f9-p2-o1"><input type="hidden" name="_wpcf7_container_post" value="2"><input type="hidden" name="_wpcf7_posted_data_hash" value="">
    </fieldset>
    <p><label>お名前<span class="required-mark">*</span><br>
    <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="your-name" placeholder="山田 太郎"></span></label>
    </p>
    <p><label class="your-email">メールアドレス<span class="required-mark">*</span><br>
    <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" value="" type="email" name="your-email" placeholder="example@email.com"></span></label>
    </p>
    <p><label>お問い合わせ種別<span class="required-mark">*</span><br>
    <span class="wpcf7-form-control-wrap" data-name="select-140"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="select-140"><option value="" disabled selected>選択してください</option><option value="お仕事の依頼">お仕事の依頼</option><option value="YouTube関連">YouTube関連</option><option value="書籍について">書籍について</option><option value="その他">その他</option></select></span></label>
    </p>
    <p><label>お問い合わせ内容<span class="required-mark">*</span><br>
    <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="your-message" placeholder="お問い合わせ内容をご記入ください"></textarea></span></label>
    </p>
    <p><label class="privacy-policy-wrap"><input type="checkbox" name="privacy-policy" required><a href="/privacy-policy/" class="privacy-policy-link">プライバシーポリシー</a>に同意する</label>
    </p>
    <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="送信する"><span class="wpcf7-spinner"></span>
    </p><div class="wpcf7-response-output" aria-hidden="true"></div>
    </form>
    </div>

    <!-- フッター -->
    <?php get_footer('custom'); ?>
<?php get_footer(); ?>
