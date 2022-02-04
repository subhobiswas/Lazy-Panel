<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* javascript/variables.twig */
class __TwigTemplate_614e9625e1354cb6e839d91d7e0e05c8dc031907b5815d6354c3f0a1bf7e8759 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "var firstDayOfCalendar = '";
        echo twig_escape_filter($this->env, ($context["first_day_of_calendar"] ?? null), "js", null, true);
        echo "';
var themeImagePath = '";
        // line 3
        echo twig_escape_filter($this->env, ($context["theme_image_path"] ?? null), "js", null, true);
        echo "';
var mysqlDocTemplate = '";
        // line 4
        echo twig_escape_filter($this->env, PhpMyAdmin\Util::getMySQLDocuURL("%s"), "js", null, true);
        echo "';
var maxInputVars = ";
        // line 5
        echo twig_escape_filter($this->env, ($context["max_input_vars"] ?? null), "js", null, true);
        echo ";

";
        // line 7
        ob_start(function () { return ''; });
        // line 8
        // l10n: Month-year order for calendar, use either "calendar-month-year" or "calendar-year-month".
        echo _gettext("calendar-month-year");
        $context["show_month_after_year"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        ob_start(function () { return ''; });
        // line 11
        // l10n: Year suffix for calendar, "none" is empty.
        echo _gettext("none");
        $context["year_suffix"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo "if (\$.datepicker) {
  \$.datepicker.regional[''].closeText = '";
        // line 15
        ob_start(function () { return ''; });
        // l10n: Display text for calendar close link
        echo _gettext("Done");
        $___internal_6abc4d097c325d3b25434d9611bc1a9987566190fba2d111fb5487cd1ce933b9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_6abc4d097c325d3b25434d9611bc1a9987566190fba2d111fb5487cd1ce933b9_, "js");
        echo "';
  \$.datepicker.regional[''].prevText = '";
        // line 16
        ob_start(function () { return ''; });
        // l10n: Previous month. Display text for previous month link in calendar
        echo _gettext("Prev");
        $___internal_2d31925b93716448a20de4a4f81d576566c3d5757c6144b5c657df89e10a40f4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_2d31925b93716448a20de4a4f81d576566c3d5757c6144b5c657df89e10a40f4_, "js");
        echo "';
  \$.datepicker.regional[''].nextText = '";
        // line 17
        ob_start(function () { return ''; });
        // l10n: Next month. Display text for next month link in calendar
        echo _gettext("Next");
        $___internal_90aeca6360bae1ffab727b6c09f7aaf44a91969c8dc10bfd5f100298a214befe_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_90aeca6360bae1ffab727b6c09f7aaf44a91969c8dc10bfd5f100298a214befe_, "js");
        echo "';
  \$.datepicker.regional[''].currentText = '";
        // line 18
        ob_start(function () { return ''; });
        // l10n: Display text for current month link in calendar
        echo _gettext("Today");
        $___internal_aa404e42d00bb6068f627dcbe358a1f1a83467f9a2d080df098b10cf40900c1c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_aa404e42d00bb6068f627dcbe358a1f1a83467f9a2d080df098b10cf40900c1c_, "js");
        echo "';
  \$.datepicker.regional[''].monthNames = [
    '";
        // line 20
        echo twig_escape_filter($this->env, _gettext("January"), "js", null, true);
        echo "',
    '";
        // line 21
        echo twig_escape_filter($this->env, _gettext("February"), "js", null, true);
        echo "',
    '";
        // line 22
        echo twig_escape_filter($this->env, _gettext("March"), "js", null, true);
        echo "',
    '";
        // line 23
        echo twig_escape_filter($this->env, _gettext("April"), "js", null, true);
        echo "',
    '";
        // line 24
        echo twig_escape_filter($this->env, _gettext("May"), "js", null, true);
        echo "',
    '";
        // line 25
        echo twig_escape_filter($this->env, _gettext("June"), "js", null, true);
        echo "',
    '";
        // line 26
        echo twig_escape_filter($this->env, _gettext("July"), "js", null, true);
        echo "',
    '";
        // line 27
        echo twig_escape_filter($this->env, _gettext("August"), "js", null, true);
        echo "',
    '";
        // line 28
        echo twig_escape_filter($this->env, _gettext("September"), "js", null, true);
        echo "',
    '";
        // line 29
        echo twig_escape_filter($this->env, _gettext("October"), "js", null, true);
        echo "',
    '";
        // line 30
        echo twig_escape_filter($this->env, _gettext("November"), "js", null, true);
        echo "',
    '";
        // line 31
        echo twig_escape_filter($this->env, _gettext("December"), "js", null, true);
        echo "',
  ];
  \$.datepicker.regional[''].monthNamesShort = [
    '";
        // line 34
        ob_start(function () { return ''; });
        // l10n: Short month name for January
        echo _gettext("Jan");
        $___internal_40def82f8f83bb5e23c68135cbcc7a10c94105d8cc9b626952156bad40362e4e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_40def82f8f83bb5e23c68135cbcc7a10c94105d8cc9b626952156bad40362e4e_, "js");
        echo "',
    '";
        // line 35
        ob_start(function () { return ''; });
        // l10n: Short month name for February
        echo _gettext("Feb");
        $___internal_01995764f2ead317bca48c02a0a1d68581e2ca4d933c5886acd7d7480af4a96c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_01995764f2ead317bca48c02a0a1d68581e2ca4d933c5886acd7d7480af4a96c_, "js");
        echo "',
    '";
        // line 36
        ob_start(function () { return ''; });
        // l10n: Short month name for March
        echo _gettext("Mar");
        $___internal_e2ed67c9763dbce01a0460c415fda9f2705ea5e46535282f466c4ea844126f78_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_e2ed67c9763dbce01a0460c415fda9f2705ea5e46535282f466c4ea844126f78_, "js");
        echo "',
    '";
        // line 37
        ob_start(function () { return ''; });
        // l10n: Short month name for April
        echo _gettext("Apr");
        $___internal_6a459b95a448cdf9f7671a6d7c25e14c88b8c739b6ceec1c0831120188315c44_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_6a459b95a448cdf9f7671a6d7c25e14c88b8c739b6ceec1c0831120188315c44_, "js");
        echo "',
    '";
        // line 38
        ob_start(function () { return ''; });
        // l10n: Short month name for May
        echo _gettext("May");
        $___internal_52e9db0b39a32c4b2b8a3aba9eefe0414c249abde2a27f0b2ece78e549496db8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_52e9db0b39a32c4b2b8a3aba9eefe0414c249abde2a27f0b2ece78e549496db8_, "js");
        echo "',
    '";
        // line 39
        ob_start(function () { return ''; });
        // l10n: Short month name for June
        echo _gettext("Jun");
        $___internal_e02031978692aeb0a083b42eb0157fb9d0849a0d5a4843b5dca6291ccc645f8e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_e02031978692aeb0a083b42eb0157fb9d0849a0d5a4843b5dca6291ccc645f8e_, "js");
        echo "',
    '";
        // line 40
        ob_start(function () { return ''; });
        // l10n: Short month name for July
        echo _gettext("Jul");
        $___internal_fa6d85e5339b322585134954e6adad65e66af3affcc088222e2df2005d8d1eb7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_fa6d85e5339b322585134954e6adad65e66af3affcc088222e2df2005d8d1eb7_, "js");
        echo "',
    '";
        // line 41
        ob_start(function () { return ''; });
        // l10n: Short month name for August
        echo _gettext("Aug");
        $___internal_2a0be55d7d56f030a37441b75e39c08f05ec93a6fd8283781d3db82a839a0d22_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_2a0be55d7d56f030a37441b75e39c08f05ec93a6fd8283781d3db82a839a0d22_, "js");
        echo "',
    '";
        // line 42
        ob_start(function () { return ''; });
        // l10n: Short month name for September
        echo _gettext("Sep");
        $___internal_e608580e9808604349f077fd68de2d0798f95f3477f3de5f11d185c98f903ed6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_e608580e9808604349f077fd68de2d0798f95f3477f3de5f11d185c98f903ed6_, "js");
        echo "',
    '";
        // line 43
        ob_start(function () { return ''; });
        // l10n: Short month name for October
        echo _gettext("Oct");
        $___internal_ff2c33a60f3c17eafdea39e08bec27b21bbf479d0dc54bf6efb9311ba0b7fc80_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_ff2c33a60f3c17eafdea39e08bec27b21bbf479d0dc54bf6efb9311ba0b7fc80_, "js");
        echo "',
    '";
        // line 44
        ob_start(function () { return ''; });
        // l10n: Short month name for November
        echo _gettext("Nov");
        $___internal_ece175886cc88aad444dffcecfada9a30cd8abd3e8f15fecf1746cd29658b608_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_ece175886cc88aad444dffcecfada9a30cd8abd3e8f15fecf1746cd29658b608_, "js");
        echo "',
    '";
        // line 45
        ob_start(function () { return ''; });
        // l10n: Short month name for December
        echo _gettext("Dec");
        $___internal_24de5625a737c38befa83722f4a274368cce8ad2d2d6b8cfb28969f97c956d6f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_24de5625a737c38befa83722f4a274368cce8ad2d2d6b8cfb28969f97c956d6f_, "js");
        echo "',
  ];
  \$.datepicker.regional[''].dayNames = [
    '";
        // line 48
        echo twig_escape_filter($this->env, _gettext("Sunday"), "js", null, true);
        echo "',
    '";
        // line 49
        echo twig_escape_filter($this->env, _gettext("Monday"), "js", null, true);
        echo "',
    '";
        // line 50
        echo twig_escape_filter($this->env, _gettext("Tuesday"), "js", null, true);
        echo "',
    '";
        // line 51
        echo twig_escape_filter($this->env, _gettext("Wednesday"), "js", null, true);
        echo "',
    '";
        // line 52
        echo twig_escape_filter($this->env, _gettext("Thursday"), "js", null, true);
        echo "',
    '";
        // line 53
        echo twig_escape_filter($this->env, _gettext("Friday"), "js", null, true);
        echo "',
    '";
        // line 54
        echo twig_escape_filter($this->env, _gettext("Saturday"), "js", null, true);
        echo "',
  ];
  \$.datepicker.regional[''].dayNamesShort = [
    '";
        // line 57
        ob_start(function () { return ''; });
        // l10n: Short week day name for Sunday
        echo _gettext("Sun");
        $___internal_c43be44029b36f5dbbaba46cf691b7f6f4d1b00a15bb90025e6056a10e7dd99e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_c43be44029b36f5dbbaba46cf691b7f6f4d1b00a15bb90025e6056a10e7dd99e_, "js");
        echo "',
    '";
        // line 58
        ob_start(function () { return ''; });
        // l10n: Short week day name for Monday
        echo _gettext("Mon");
        $___internal_c04bcd81f9d11171e1ac2ce54044d3136069dfcd4d93a1cdab009e5fb2e74105_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_c04bcd81f9d11171e1ac2ce54044d3136069dfcd4d93a1cdab009e5fb2e74105_, "js");
        echo "',
    '";
        // line 59
        ob_start(function () { return ''; });
        // l10n: Short week day name for Tuesday
        echo _gettext("Tue");
        $___internal_0103c442310e2f250bccc3da64c2ef0f0fac1730bdd662a4af40443b2e16b6f0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_0103c442310e2f250bccc3da64c2ef0f0fac1730bdd662a4af40443b2e16b6f0_, "js");
        echo "',
    '";
        // line 60
        ob_start(function () { return ''; });
        // l10n: Short week day name for Wednesday
        echo _gettext("Wed");
        $___internal_2ea6192387cc21839711f905f6750ab133577acd210599c18a0d9c5b98d52204_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_2ea6192387cc21839711f905f6750ab133577acd210599c18a0d9c5b98d52204_, "js");
        echo "',
    '";
        // line 61
        ob_start(function () { return ''; });
        // l10n: Short week day name for Thursday
        echo _gettext("Thu");
        $___internal_8fa658460ec493b5eba234f16d717a337ba1fef25fd11c29940e1dfb3c5ce42e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_8fa658460ec493b5eba234f16d717a337ba1fef25fd11c29940e1dfb3c5ce42e_, "js");
        echo "',
    '";
        // line 62
        ob_start(function () { return ''; });
        // l10n: Short week day name for Friday
        echo _gettext("Fri");
        $___internal_414a2f2df102861fd4060b4a4eee774a3acc087573e126f9247ad7fc91ec99dc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_414a2f2df102861fd4060b4a4eee774a3acc087573e126f9247ad7fc91ec99dc_, "js");
        echo "',
    '";
        // line 63
        ob_start(function () { return ''; });
        // l10n: Short week day name for Saturday
        echo _gettext("Sat");
        $___internal_3677a213ea9d9fd1699a406a0fb59172c7cb977367be9829853dfadd04273100_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_3677a213ea9d9fd1699a406a0fb59172c7cb977367be9829853dfadd04273100_, "js");
        echo "',
  ];
  \$.datepicker.regional[''].dayNamesMin = [
    '";
        // line 66
        ob_start(function () { return ''; });
        // l10n: Minimal week day name for Sunday
        echo _gettext("Su");
        $___internal_4a10809b2daa96a6db98b08878bee07229ab587b6b8db707fb5470ee0270d7de_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_4a10809b2daa96a6db98b08878bee07229ab587b6b8db707fb5470ee0270d7de_, "js");
        echo "',
    '";
        // line 67
        ob_start(function () { return ''; });
        // l10n: Minimal week day name for Monday
        echo _gettext("Mo");
        $___internal_7c779f7448cd8e3b75ec55f749dcbc196e201a815bff3694ec04ad81aef205c0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_7c779f7448cd8e3b75ec55f749dcbc196e201a815bff3694ec04ad81aef205c0_, "js");
        echo "',
    '";
        // line 68
        ob_start(function () { return ''; });
        // l10n: Minimal week day name for Tuesday
        echo _gettext("Tu");
        $___internal_0306360928a2ad74c26da0a9d387bab3cef87eb7546b1721c29528be1869e1c0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_0306360928a2ad74c26da0a9d387bab3cef87eb7546b1721c29528be1869e1c0_, "js");
        echo "',
    '";
        // line 69
        ob_start(function () { return ''; });
        // l10n: Minimal week day name for Wednesday
        echo _gettext("We");
        $___internal_b203df9128184ae4dafb2414b64f0fff92ef72565dbc6e981191b3e509f70731_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_b203df9128184ae4dafb2414b64f0fff92ef72565dbc6e981191b3e509f70731_, "js");
        echo "',
    '";
        // line 70
        ob_start(function () { return ''; });
        // l10n: Minimal week day name for Thursday
        echo _gettext("Th");
        $___internal_c3da9e88cedf21e2a39b872ea2f82385383bb1c65be66ca7e731a24ce7d8d7d3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_c3da9e88cedf21e2a39b872ea2f82385383bb1c65be66ca7e731a24ce7d8d7d3_, "js");
        echo "',
    '";
        // line 71
        ob_start(function () { return ''; });
        // l10n: Minimal week day name for Friday
        echo _gettext("Fr");
        $___internal_975e066e882b191e15589c5c2ebe87d7642d0874592838a2ee23ccc12110647f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_975e066e882b191e15589c5c2ebe87d7642d0874592838a2ee23ccc12110647f_, "js");
        echo "',
    '";
        // line 72
        ob_start(function () { return ''; });
        // l10n: Minimal week day name for Saturday
        echo _gettext("Sa");
        $___internal_ed5c48ac56bd5b9d4c5c78841ed2649936fce392177b86130e1e550862647f0d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_ed5c48ac56bd5b9d4c5c78841ed2649936fce392177b86130e1e550862647f0d_, "js");
        echo "',
  ];
  \$.datepicker.regional[''].weekHeader = '";
        // line 74
        ob_start(function () { return ''; });
        // l10n: Column header for week of the year in calendar
        echo _gettext("Wk");
        $___internal_01358ca806f02ae4bb8c5d5b89f6248b20a718a2ba126c9b4c8c4ffb7b35aaa0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_01358ca806f02ae4bb8c5d5b89f6248b20a718a2ba126c9b4c8c4ffb7b35aaa0_, "js");
        echo "';
  \$.datepicker.regional[''].showMonthAfterYear = ";
        // line 75
        echo (((($context["show_month_after_year"] ?? null) == "calendar-year-month")) ? ("true") : ("false"));
        echo ";
  \$.datepicker.regional[''].yearSuffix = '";
        // line 76
        echo (((($context["year_suffix"] ?? null) != "none")) ? (twig_escape_filter($this->env, ($context["year_suffix"] ?? null), "js")) : (""));
        echo "';
  \$.extend(\$.datepicker._defaults, \$.datepicker.regional['']);
}

if (\$.timepicker) {
  \$.timepicker.regional[''].timeText = '";
        // line 81
        echo twig_escape_filter($this->env, _gettext("Time"), "js", null, true);
        echo "';
  \$.timepicker.regional[''].hourText = '";
        // line 82
        echo twig_escape_filter($this->env, _gettext("Hour"), "js", null, true);
        echo "';
  \$.timepicker.regional[''].minuteText = '";
        // line 83
        echo twig_escape_filter($this->env, _gettext("Minute"), "js", null, true);
        echo "';
  \$.timepicker.regional[''].secondText = '";
        // line 84
        echo twig_escape_filter($this->env, _gettext("Second"), "js", null, true);
        echo "';
  \$.extend(\$.timepicker._defaults, \$.timepicker.regional['']);
}

function extendingValidatorMessages () {
  \$.extend(\$.validator.messages, {
    required: '";
        // line 90
        echo twig_escape_filter($this->env, _gettext("This field is required"), "js", null, true);
        echo "',
    remote: '";
        // line 91
        echo twig_escape_filter($this->env, _gettext("Please fix this field"), "js", null, true);
        echo "',
    email: '";
        // line 92
        echo twig_escape_filter($this->env, _gettext("Please enter a valid email address"), "js", null, true);
        echo "',
    url: '";
        // line 93
        echo twig_escape_filter($this->env, _gettext("Please enter a valid URL"), "js", null, true);
        echo "',
    date: '";
        // line 94
        echo twig_escape_filter($this->env, _gettext("Please enter a valid date"), "js", null, true);
        echo "',
    dateISO: '";
        // line 95
        echo twig_escape_filter($this->env, _gettext("Please enter a valid date ( ISO )"), "js", null, true);
        echo "',
    number: '";
        // line 96
        echo twig_escape_filter($this->env, _gettext("Please enter a valid number"), "js", null, true);
        echo "',
    creditcard: '";
        // line 97
        echo twig_escape_filter($this->env, _gettext("Please enter a valid credit card number"), "js", null, true);
        echo "',
    digits: '";
        // line 98
        echo twig_escape_filter($this->env, _gettext("Please enter only digits"), "js", null, true);
        echo "',
    equalTo: '";
        // line 99
        echo twig_escape_filter($this->env, _gettext("Please enter the same value again"), "js", null, true);
        echo "',
    maxlength: \$.validator.format('";
        // line 100
        echo twig_escape_filter($this->env, _gettext("Please enter no more than {0} characters"), "js", null, true);
        echo "'),
    minlength: \$.validator.format('";
        // line 101
        echo twig_escape_filter($this->env, _gettext("Please enter at least {0} characters"), "js", null, true);
        echo "'),
    rangelength: \$.validator.format('";
        // line 102
        echo twig_escape_filter($this->env, _gettext("Please enter a value between {0} and {1} characters long"), "js", null, true);
        echo "'),
    range: \$.validator.format('";
        // line 103
        echo twig_escape_filter($this->env, _gettext("Please enter a value between {0} and {1}"), "js", null, true);
        echo "'),
    max: \$.validator.format('";
        // line 104
        echo twig_escape_filter($this->env, _gettext("Please enter a value less than or equal to {0}"), "js", null, true);
        echo "'),
    min: \$.validator.format('";
        // line 105
        echo twig_escape_filter($this->env, _gettext("Please enter a value greater than or equal to {0}"), "js", null, true);
        echo "'),
    validationFunctionForDateTime: \$.validator.format('";
        // line 106
        echo twig_escape_filter($this->env, _gettext("Please enter a valid date or time"), "js", null, true);
        echo "'),
    validationFunctionForHex: \$.validator.format('";
        // line 107
        echo twig_escape_filter($this->env, _gettext("Please enter a valid HEX input"), "js", null, true);
        echo "'),
    validationFunctionForMd5: \$.validator.format('";
        // line 108
        ob_start(function () { return ''; });
        // l10n: To validate the usage of a MD5 function on the column
        echo _gettext("This column can not contain a 32 chars value");
        $___internal_d027353b5eef9aa920a24a55d7418fb6aa9b64cd4eba8c6ca489c07d8f1851c2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_d027353b5eef9aa920a24a55d7418fb6aa9b64cd4eba8c6ca489c07d8f1851c2_, "js");
        echo "'),
    validationFunctionForAesDesEncrypt: \$.validator.format('";
        // line 109
        ob_start(function () { return ''; });
        // l10n: To validate the usage of a AES_ENCRYPT/DES_ENCRYPT function on the column
        echo _gettext("These functions are meant to return a binary result; to avoid inconsistent results you should store it in a BINARY, VARBINARY, or BLOB column.");
        $___internal_3d35aca6f48853adfe2438bfc6c4eae0078c084a9b90b61c0eedd823a0b29dc9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_3d35aca6f48853adfe2438bfc6c4eae0078c084a9b90b61c0eedd823a0b29dc9_, "js");
        echo "')
  });
}
";
    }

    public function getTemplateName()
    {
        return "javascript/variables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 109,  509 => 108,  505 => 107,  501 => 106,  497 => 105,  493 => 104,  489 => 103,  485 => 102,  481 => 101,  477 => 100,  473 => 99,  469 => 98,  465 => 97,  461 => 96,  457 => 95,  453 => 94,  449 => 93,  445 => 92,  441 => 91,  437 => 90,  428 => 84,  424 => 83,  420 => 82,  416 => 81,  408 => 76,  404 => 75,  396 => 74,  387 => 72,  379 => 71,  371 => 70,  363 => 69,  355 => 68,  347 => 67,  339 => 66,  329 => 63,  321 => 62,  313 => 61,  305 => 60,  297 => 59,  289 => 58,  281 => 57,  275 => 54,  271 => 53,  267 => 52,  263 => 51,  259 => 50,  255 => 49,  251 => 48,  241 => 45,  233 => 44,  225 => 43,  217 => 42,  209 => 41,  201 => 40,  193 => 39,  185 => 38,  177 => 37,  169 => 36,  161 => 35,  153 => 34,  147 => 31,  143 => 30,  139 => 29,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  103 => 20,  94 => 18,  86 => 17,  78 => 16,  70 => 15,  67 => 14,  63 => 11,  61 => 10,  57 => 8,  55 => 7,  50 => 5,  46 => 4,  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "javascript/variables.twig", "C:\\xamp\\htdocs\\Lazy-Panel\\phpMyAdmin\\templates\\javascript\\variables.twig");
    }
}
