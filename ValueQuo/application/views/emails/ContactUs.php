<?php $this->load->view('emails/email_head'); ?>
<div class="layout one-col fixed-width" style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 173000px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
    <div class="layout__inner" style="border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;" emb-background-style>
        <div class="column" style='text-align: left;color: #8f8f8f;font-size: 16px;line-height: 24px;font-family: "Open Sans",sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);'>          
            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div style="line-height:10px;font-size:1px">&nbsp;</div>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;text-align:justify;">
                <h2 style="Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;color: #706f70;font-size: 18px;line-height: 26px;font-family: Cabin,Avenir,sans-serif;">Hello Dear,  Welcome to Ultimate!</h2><p style="Margin-top: 16px;Margin-bottom: 0;"></p>
                <p style="Margin-bottom: 5px;">Your Request Has Been Sent To Samvit.<i class="fa fa-bitcoin fa-2x" style="color:#F9A01B; font-size: 14px;"></i></p><br>
               
                <!--<a href="<?= site_url() ?>Home" style="Margin-bottom: 20px;">click here To Login</a>-->
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div style="line-height:10px;font-size:1px">&nbsp;</div>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div class="btn btn--flat btn--large" style="Margin-bottom: 20px;text-align: center;">
                    <![if !mso]><a style="border-radius: 4px;display: inline-block;font-size: 14px;font-weight: bold;line-height: 24px;padding: 12px 24px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #fff;background-color: #e45d6b;font-family: 'Open Sans', sans-serif;" href="<?= site_url() ?>Home">Click Here!</a><![endif]>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('emails/email_footer'); ?>