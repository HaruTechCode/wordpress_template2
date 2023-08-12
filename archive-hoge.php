<?php get_header(); ?>
<main>archive-hoge.php</main>
<?php get_footer(); ?>

<div class="contact">
    <div class="contact-form">
        <div class="contact-form__item">
            <label class="contact-form__label" for="">
                <div class="contact-form__label-name">
                    会社名
                    <span class="contact-form__label-asterisk">*</span>
                </div>
                <div class="contact-form__label-description">
                    個人の場合は「個人」と入力してください
                </div>
            </label>
            form
        </div>
    </div>
</div>
弊社へのお問い合わせは
下記フォームより受け付けております。
担当者が確認後、折り返しご連絡させていただきます。


<div class="contact-form">
    <div class="contact-form__item">
        <label class="contact-form__label" for="company">
            <span class="contact-form__label-name">会社名<span class="contact-form__label-asterisk">*</span></span><span class="contact-form__label-description">個人の場合は「個人」と入力してください</span>
        </label>
        [text* company placeholder "例）株式会社ABC"]
    </div>
    <div class="contact-form__item">
        <label class="contact-form__label" for="yourname">
            <span class="contact-form__label-name">ご担当者名<span class="contact-form__label-asterisk">*</span></span><span class="contact-form__label-description">個人の場合は氏名を入力してください</span>
        </label>
        [text* yourname placeholder "例）輸入車　太郎"]
    </div>
    <div class="contact-form__item">
        <label class="contact-form__label" for="tel">
            <span class="contact-form__label-name">電話番号<span class="contact-form__label-asterisk">*</span></span>
        </label>
        [text* tel placeholder "例）022-000-0000"]
    </div>
    <div class="contact-form__item">
        <label class="contact-form__label" for="email">
            <span class="contact-form__label-name">メールアドレス<span class="contact-form__label-asterisk">*</span></span>
        </label>
        [text* email placeholder "例）abcdefghijk@example.com"]
    </div>
    <div class="contact-form__item">
        <label class="contact-form__label" for="contact_type">
            <span class="contact-form__label-name">お問い合わせの種類<span class="contact-form__label-asterisk">*</span></span>
        </label>
        []
    </div>
    <div class="contact-form__item">
        <label class="contact-form__label" for="contact_content">
            <span class="contact-form__label-name">お問い合わせ内容<span class="contact-form__label-asterisk">*</span></span>
        </label>
        []
    </div>
    <div class="contact-form__item">
        <span class="contact-form__label-asterisk">*</span>
        []
        <label class="contact-form__label" for="agree">
            <span class="contact-form__label-name">「個人情報の取り扱いについて」同意する</span>
        </label>
    </div>
</div>