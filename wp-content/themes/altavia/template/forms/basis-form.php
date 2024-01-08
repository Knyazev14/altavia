<div class="basis-form">
    <?php echo do_shortcode('[contact-form-7 id="e9a3f74" title="Форма  снизу сайта"]'); ?>
</div>
<script>
    document.addEventListener('wpcf7mailsent', formSend, false)

    function formSend(e){ 
        if ('13' == e.detail.contactFormId){
           console.log(e.detail.contactFormId)
        }
    }
</script>