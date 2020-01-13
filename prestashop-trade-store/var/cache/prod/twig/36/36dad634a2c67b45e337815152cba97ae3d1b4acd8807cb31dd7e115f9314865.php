<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @MailThemes/modern/components/order_layout.html.twig */
class __TwigTemplate_9519ce27b7a2f6d9d01961d6b4c00870f7860f1845584937cfeadd812e879b1b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer_content' => [$this, 'block_footer_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">

<head>
  <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
  <!--[if !mso]><!-- -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!--<![endif]-->
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass * {
      line-height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <!--[if !mso]><!-->
  <style type=\"text/css\">
    @media only screen and (max-width:480px) {
      @-ms-viewport {
        width: 320px;
      }

      @viewport {
        width: 320px;
      }
    }
  </style>
  <!--<![endif]-->
  <!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
  <!--[if lte mso 11]>
        <style type=\"text/css\">
          .outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
  <style type=\"text/css\">
  </style>
  <style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    .box {
      width: 244px;
    }

    .margin {
      margin-right: 16px
    }

    table {
      font-family: Open sans, Arial, sans-serif;
      font-size: 14px;
    }

    .products-table,
    .products-table th,
    .products-table td {
      font-family: Open sans, Arial, sans-serif;
      font-size: 12px;
      background-color: #FDFDFD;
      color: #353943;
    }

    .products-table th {
      font-weight: 600;
      padding: 10px 5px;
      border: 1px solid #DFDFDF;
    }

    .products-table .order_summary td {
      font-weight: 600;
      font-size: 14px;
      padding: 10px;
      border: 1px solid #DFDFDF;
    }

    .products-table.mail-alert td {
      border: 1px solid #DFDFDF;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }

      .box {
        display: block !important;
        width: 100%
      }

      .space {
        display: none !important
      }
    }
  </style>
    ";
        // line 173
        $this->displayBlock('styles', $context, $blocks);
        // line 175
        echo "</head>

<body style=\"background-color:#eeeeee;\">
  <div style=\"background-color:#eeeeee;\">
    <!--[if mso | IE]>
    
        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td height=\"40\" style=\"vertical-align:top;height:40px;\">
      
    <![endif]-->
    <div style=\"height:40px;\">   </div>
    <!--[if mso | IE]>
    
        </td></tr></table>
      
    
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"shadow-outlook wrapper-container-outlook\" style=\"width:604px;\" width=\"604\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->
    <div class=\"shadow wrapper-container\" style=\"background:#ffffff;background-color:#ffffff;Margin:0px auto;border-radius:4px;max-width:604px;\">
      <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#ffffff;background-color:#ffffff;width:100%;border-radius:4px;\">
        <tbody>
          <tr>
            <td style=\"direction:ltr;font-size:0px;padding:0 0 30px;text-align:center;vertical-align:top;\">
              <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <![endif]--> 
                  ";
        // line 204
        $this->displayBlock('header', $context, $blocks);
        // line 207
        echo "
                  ";
        // line 208
        $this->displayBlock('content', $context, $blocks);
        // line 210
        echo "
                  ";
        // line 211
        $this->displayBlock('footer_content', $context, $blocks);
        // line 213
        echo "
              <!--[if mso | IE]>
                  </table>
                <![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]--> 
                  ";
        // line 227
        $this->displayBlock('footer', $context, $blocks);
        // line 230
        echo "
  </div>
</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Title";
    }

    // line 173
    public function block_styles($context, array $blocks = [])
    {
        // line 174
        echo "    ";
    }

    // line 204
    public function block_header($context, array $blocks = [])
    {
        // line 205
        echo "                      ";
        $this->loadTemplate("@MailThemes/modern/components/header.html.twig", "@MailThemes/modern/components/order_layout.html.twig", 205)->display($context);
        // line 206
        echo "                  ";
    }

    // line 208
    public function block_content($context, array $blocks = [])
    {
        // line 209
        echo "                  ";
    }

    // line 211
    public function block_footer_content($context, array $blocks = [])
    {
        // line 212
        echo "                  ";
    }

    // line 227
    public function block_footer($context, array $blocks = [])
    {
        // line 228
        echo "                      ";
        $this->loadTemplate("@MailThemes/modern/components/footer.html.twig", "@MailThemes/modern/components/order_layout.html.twig", 228)->display($context);
        // line 229
        echo "                  ";
    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/components/order_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 229,  325 => 228,  322 => 227,  318 => 212,  315 => 211,  311 => 209,  308 => 208,  304 => 206,  301 => 205,  298 => 204,  294 => 174,  291 => 173,  285 => 5,  276 => 230,  274 => 227,  258 => 213,  256 => 211,  253 => 210,  251 => 208,  248 => 207,  246 => 204,  215 => 175,  213 => 173,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/modern/components/order_layout.html.twig", "/home/u530738421/domains/trade-store.com.ar/public_html/mails/themes/modern/components/order_layout.html.twig");
    }
}
