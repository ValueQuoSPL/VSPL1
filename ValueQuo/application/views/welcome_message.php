<!DOCTYPE html>
<!--<html dir="rtl">-->
<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Welcome to CodeIgniter</title>

        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
               
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 15px 0 15px;
            }

            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }
        </style>
    </head>
    <body style="font-family:Arial">

        <div id="container">
            <!--<h1>Welcome to CodeIgniter!</h1>-->

            <div id="body">
                 <h4 style="text-align:right;">يطبع على مطبوعات الشركة</h4>
                 <h1 style="text-align:center;color:red;">تحديث بيانات مستورد</h1>
                 <b style="text-align:center">بناءاً على تعميم المصلحة رقم٢٠٨/١١/م بتاريخ ٢٨/٠٤/١٤٣٣هـ بشأن البدء بتطبيق خدمة الرسائل 
                النصية (SMS) عن طريق الجوال و تتمثل بالاتي:-</b>
                 <b>١. الرسوم الجمركية و فرقات الرسوم</b>
                 <b>٢.التعهدات الجمركية </b>
                 <b>٣.نتيجة تحليل المختبرات (سلبية ـ ايجابية) </b>
                 <b>نأمل تحديث البيانات التالية:-</b>
                 <p><b>الاسم التجاري: </b><?= $additional_documents->trade_name ?></p>
                 <p><b>رقم السجل التجاري الرئيس:  </b><?= $additional_documents->main_com_reg_no ?></p>
                 <p><b>رقم السجل التجاري الفرعي: </b><?= $additional_documents->sub_regional_reg_no ?></p>
                 <p><b>البريد الالكتروني: </b> <?= $additional_documents->email ?></p>

                 <p><b>رقم الجوال : </b><?= $additional_documents->mobile_number ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> رقم الهاتف: </b> <?= $additional_documents->tel_number ?></p>
                 <p><b>رقم صندوق البريد	: </b><?= $additional_documents->mail_box_number ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> الرمز البريدي: </b><?= $additional_documents->zip_code ?></p>
                 <p><b>العنوان	: </b><?= $additional_documents->address ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> رقم الفاكس: </b><?= $additional_documents->fax_number ?></p>
                 <p><b>رقم حساب ايبان: </b> <?= $additional_documents->IBAN_acc_number ?></p>
                 <p><b>رقم الهوية الوطنية لصاحب السجل التجاري: </b> <?= $additional_documents->national_id_number ?></p>
                <b>و حرصاً من مصلحة الجمارك على ايصال المعلومة الدقيقة لاصحاب الشأن نأمل تعبئة البيانات المذكورة </b>
                <b>اعلاه و اشعارنا في حال تغيير او تعديل البيانات </b>
                
                
                
                
            </div>

            <p class="footer">الاسم:.............................................................. التوقيع:............................................. ختم الشركة: </p>
        </div>
       
    </body>
</html>