<!DOCTYPE HTML>
<html lang="tr-TR">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
<!--
    body,td,th {
        font-family: Tahoma;
        font-size: 12px;
        color: #333;
    }
    input[type="text"], textarea {
        padding: 4px 8px;
        margin-top: 4px;
        width: 300px;
        border: 1px solid #CCC;
        background: #FDFDFD;
    }
    input[type="submit"] {
        padding: 4px 16px;
        border: 1px solid #DFDFDF;
        background: #F2F2F2;
        color: #666;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background: #F5F5F5;
    }
    input[type="submit"]:active {
        background: #DDD;
        padding: 5px 16px 3px;
    }
    -->
    </style>
    <link rel="stylesheet" href="<?php echo $config['base_url']; ?>lib/assets/validationEngine.jquery.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo $config['base_url']; ?>lib/assets/jquery.validationEngine-tr.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo $config['base_url']; ?>lib/assets/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
  <br />
  <form name="contact-form" id="cForm" method="post" target="_self">
      <p>Adınız, Soyadınız<br /><input type="text" name="_name_" id="name" maxlength="40" class="validate[required]"></p>
      <p>Telefon Numaranız<br /><input type="text" name="_phone_" id="phone" maxlength="40"></p>
      <p>E-Posta Adresiniz<br /><input type="text" name="_mail_" id="mail" maxlength="40" class="validate[required,custom[email]]"></p>
      <p>Mesajınızın Konusu<br /><input type="text" name="_subject_" id="subject" maxlength="40" class="validate[required]"></p>
      <p>Mesajınız<br /><textarea name="_message_" id="message" rows="8" cols="32" wrap="virtual" class="validate[required]"></textarea></p>
      <p><input type="submit" value="Mesajımı Gönder"></p>
      <input type="hidden" name="is_posted" value="1">
  </form>
  <script type="text/javascript">
    $("#cForm").validationEngine({
        promptPosition          : 'bottomLeft',
        scroll                  : false
    });
  </script>
  </body>
</html>
