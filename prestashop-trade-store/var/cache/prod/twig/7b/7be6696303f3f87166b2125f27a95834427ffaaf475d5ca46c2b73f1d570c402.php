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

/* @MailThemes/modern/components/layout.html.twig */
class __TwigTemplate_d8120b0d1407bb9ac667fc4389ac640b51c63e97cfca97ba5342d8672321637b extends \Twig\Template
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

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }
    }
  </style>
    ";
        // line 125
        $this->displayBlock('styles', $context, $blocks);
        // line 127
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
        // line 156
        $this->displayBlock('header', $context, $blocks);
        // line 159
        echo "
                  ";
        // line 160
        $this->displayBlock('content', $context, $blocks);
        // line 162
        echo "
                  ";
        // line 163
        $this->displayBlock('footer_content', $context, $blocks);
        // line 165
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
        // line 179
        $this->displayBlock('footer', $context, $blocks);
        // line 182
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

    // line 125
    public function block_styles($context, array $blocks = [])
    {
        // line 126
        echo "    ";
    }

    // line 156
    public function block_header($context, array $blocks = [])
    {
        // line 157
        echo "                      ";
        $this->loadTemplate("@MailThemes/modern/components/header.html.twig", "@MailThemes/modern/components/layout.html.twig", 157)->display($context);
        // line 158
        echo "                  ";
    }

    // line 160
    public function block_content($context, array $blocks = [])
    {
        // line 161
        echo "                  ";
    }

    // line 163
    public function block_footer_content($context, array $blocks = [])
    {
        // line 164
        echo "                  ";
    }

    // line 179
    public function block_footer($context, array $blocks = [])
    {
        // line 180
        echo "                      ";
        $this->loadTemplate("@MailThemes/modern/components/footer.html.twig", "@MailThemes/modern/components/layout.html.twig", 180)->display($context);
        // line 181
        echo "                  ";
    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/components/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  280 => 181,  277 => 180,  274 => 179,  270 => 164,  267 => 163,  263 => 161,  260 => 160,  256 => 158,  253 => 157,  250 => 156,  246 => 126,  243 => 125,  237 => 5,  228 => 182,  226 => 179,  210 => 165,  208 => 163,  205 => 162,  203 => 160,  200 => 159,  198 => 156,  167 => 127,  165 => 125,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/modern/components/layout.html.twig", "/home/u530738421/domains/trade-store.com.ar/public_html/mails/themes/modern/components/layout.html.twig");
    }
}
