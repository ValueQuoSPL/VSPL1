<!---<?php //$this->load->view('emails/email_head'); ?>
<div class="layout one-col fixed-width" style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 173000px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
    <div class="layout__inner" style="border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;" emb-background-style>
        <div class="column" style='text-align: left;color: #8f8f8f;font-size: 16px;line-height: 24px;font-family: "Open Sans",sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);'>          
            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div style="line-height:10px;font-size:1px">&nbsp;</div>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;text-align:justify;">
                <img src="<?= USERASSETS ?>images/etlogo.png"/>
                <h2 style="Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;color: #706f70;font-size: 18px;line-height: 26px;font-family: Cabin,Avenir,sans-serif;">Dear  <?php echo $userdetails['name']; ?>,  Welcome to Etender!</h2><p style="Margin-top: 16px;Margin-bottom: 0;"></p>
                <p style="Margin-bottom: 5px;">Thanks for registering on IndiaTenders.com, World's # 1 Tender Portal as rated by Alexa. We will get in touch with you shortly to service your request<i class="fa fa-bitcoin fa-2x" style="color:#F9A01B; font-size: 14px;"></i></p><br>
                <p style="Margin-bottom: 5px;">You Will Shortly Receive An Email With Registration Status.<i class="fa fa-bitcoin fa-2x" style="color:#F9A01B; font-size: 14px;"></i></p><br>
                <a href="<?= site_url() ?>Home" style="Margin-bottom: 20px;">click here To Login</a>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div style="line-height:10px;font-size:1px">&nbsp;</div>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;">
                <div class="btn btn--flat btn--large" style="Margin-bottom: 20px;text-align: center;">
                    <![if !mso]><a style="border-radius: 4px;display: inline-block;font-size: 14px;font-weight: bold;line-height: 24px;padding: 12px 24px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #fff;background-color: #e45d6b;font-family: 'Open Sans', sans-serif;" href="<?= site_url() ?>Home">Click Here!</a><![endif]>
                    </div>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;text-align:justify;">
               
                <p style="Margin-bottom: 5px;">If you need urgent assistance please feel free to contact us during all working hours/week days.</p>
                <p style="Margin-bottom: 5px;">eMail ID : admin@etender.com</p>
                <p style="Margin-bottom: 5px;">admin1:1234567890 | admin2:1234567890</p>
                <p style="Margin-bottom: 5px;">Phone : 1234567890</p>
                <p style="Margin-bottom: 5px;">Fax : 1234567890</p>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;text-align:justify;">
               
                <p style="Margin-bottom: 5px;"> Disclaimer: The information transmitted is meant only for the addressee and may contain confidential and/or privileged information. Any review re-transmission, dissemination, use either in part or in full, by any person other than the intended recipient is prohibited. By this you request and authorize e-Procurement Technologies Limited to contact you on your phone number/e-mail given above for this inquiry/transaction and thus such contacting is 'transactional' as per 'Telecom Regulation Authority of India' rules. If you have received this mail in error, please return to the sender and delete the received material. All mails transmitted from abcProcure server is virus checked. However please do a virus check at your end before opening or downloading the message or attachments. We will not accept any liability whatsoever for damages through virus. URL: www.etender.com <i class="fa fa-bitcoin fa-2x" style="color:#F9A01B; font-size: 14px;"></i></p><br>
                 
            </div>
        </div>
    </div>
</div>
<?php //$this->load->view('emails/email_footer'); ?>--->
<!---start new email design--->
<style>



 /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }

      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #f6f6f6;
        width: 100%; }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        Margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px; }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #fff;
        border-radius: 3px;
        width: 100%; }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; }

      .footer {
        clear: both;
        padding-top: 10px;
        text-align: center;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }

      a {
        color: #3498db;
        text-decoration: underline; }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; }

      .btn-primary table td {
        background-color: #3498db; }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; }

      .first {
        margin-top: 0; }

      .align-center {
        text-align: center; }

      .align-right {
        text-align: right; }

      .align-left {
        text-align: left; }

      .clear {
        clear: both; }

      .mt0 {
        margin-top: 0; }

      .mb0 {
        margin-bottom: 0; }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }

      .powered-by a {
        text-decoration: none; }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
        .btn-primary table td:hover {
          background-color: #34495e !important; }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; } }
</style>
<?php $this->load->view('emails/email_head'); ?>
<table border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
            <table class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
					 <td><img src="<?= USERASSETS ?>img/logo1.png"/></td></tr>
					 <tr>
                      <td>
                        <p>Hello Dear,  Welcome to Ultimate!<p>
						<p style="text-align:justify;">Thanks for registering on Ultimate.com, World's # 1 Portal as rated by Alexa. We will get in touch with you shortly to service your request.</p>
                        <p style="text-align:justify;">You Will Shortly Receive An Email With Subscription Status.</p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td> <a href="<?= site_url() ?>accountAct" target="_blank">Click Here</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p>If you need urgent assistance please feel free to contact us during all working hours/week days.</p>
						<p>-&nbsp; Email ID : admin@ultimate.com</p>
						<p>-&nbsp; admin1:1234567890 | admin2:1234567890</p>
						<p>-&nbsp; Phone : 1234567890</p>
						<p>-&nbsp; Fax : 1234567890</p>
						</td>
						</tr>
						<tr>
						<td>
                        <p style="color: #999999;font-size: 12px;text-align:justify;"><span style="font-family:bold;">Disclaimer:</span> The information transmitted is meant only for the addressee and may contain confidential and/or privileged information. Any review re-transmission, dissemination, use either in part or in full, by any person other than the intended recipient is prohibited. By this you request and authorize e-Procurement Technologies Limited to contact you on your phone number/e-mail given above for this inquiry/transaction and thus such contacting is 'transactional' as per 'Telecom Regulation Authority of India' rules. If you have received this mail in error, please return to the sender and delete the received material. All mails transmitted from abcProcure server is virus checked. However please do a virus check at your end before opening or downloading the message or attachments. We will not accept any liability whatsoever for damages through virus. URL: www.ultimate.com
</p>
                      </td>
                    </tr>
					
                  </table>
                </td>
              </tr>

              <!-- END MAIN CONTENT AREA -->
              </table>

            <!-- START FOOTER -->
            <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
                
                   <?php $this->load->view('emails/email_footer'); ?>
                
              </table>
            </div>
            <!-- END FOOTER -->
            
          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
<!---start new email design-->  



