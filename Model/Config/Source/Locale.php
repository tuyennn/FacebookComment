<?php

namespace GhoSter\FacebookComment\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

/**
 * Class Locale
 * @package GhoSter\FacebookComment\Model\Config\Source
 */
class Locale extends AbstractSource
{
    /**
     * @var array
     */
    private $options;


    public function getAllOptions()
    {

        if (!$this->options) {
            return [
                ['value' => 'en_US', 'label' => __('English (United States)')],
                ['value' => 'ca_ES', 'label' => __('Catalan (Spain)')],
                ['value' => 'cs_CZ', 'label' => __('Czech (Czech Republic)')],
                ['value' => 'cx_PH', 'label' => __('Cx (Philippines)')],
                ['value' => 'cy_GB', 'label' => __('Welsh (United Kingdom)')],
                ['value' => 'da_DK', 'label' => __('Danish (Denmark)')],
                ['value' => 'de_DE', 'label' => __('German (Germany)')],
                ['value' => 'eu_ES', 'label' => __('Basque (Spain)')],
                ['value' => 'en_UD', 'label' => __('English (Upside Down)')],
                ['value' => 'es_LA', 'label' => __('Spanish (Laos)')],
                ['value' => 'es_ES', 'label' => __('Spanish (Spain)')],
                ['value' => 'gn_PY', 'label' => __('GN (Paraguay)')],
                ['value' => 'fi_FI', 'label' => __('Finnish (Finland)')],
                ['value' => 'fr_FR', 'label' => __('French (France)')],
                ['value' => 'gl_ES', 'label' => __('Galician (Spain)')],
                ['value' => 'hu_HU', 'label' => __('Hungarian (Hungary)')],
                ['value' => 'it_IT', 'label' => __('Italian (Italy)')],
                ['value' => 'ja_JP', 'label' => __('Japanese (Japan)')],
                ['value' => 'ko_KR', 'label' => __('Korean (South Korea)')],
                ['value' => 'nb_NO', 'label' => __('Norwegian Bokmål (Norway)')],
                ['value' => 'nn_NO', 'label' => __('Norwegian Nynorsk (Norway)')],
                ['value' => 'nl_NL', 'label' => __('Dutch (Netherlands)')],
                ['value' => 'fy_NL', 'label' => __('Western Frisian (Netherlands)')],
                ['value' => 'pl_PL', 'label' => __('Polish (Poland)')],
                ['value' => 'pt_BR', 'label' => __('Portuguese (Brazil)')],
                ['value' => 'pt_PT', 'label' => __('Portuguese (Portugal)')],
                ['value' => 'ro_RO', 'label' => __('Romanian (Romania)')],
                ['value' => 'ru_RU', 'label' => __('Russian (Russia)')],
                ['value' => 'sk_SK', 'label' => __('Slovak (Slovakia)')],
                ['value' => 'sl_SI', 'label' => __('Slovenian (Slovenia)')],
                ['value' => 'sv_SE', 'label' => __('Swedish (Sweden)')],
                ['value' => 'th_TH', 'label' => __('Thai (Thailand)')],
                ['value' => 'tr_TR', 'label' => __('Turkish (Turkey)')],
                ['value' => 'ku_TR', 'label' => __('Kurdish (Turkey)')],
                ['value' => 'zh_CN', 'label' => __('Chinese (China)')],
                ['value' => 'zh_HK', 'label' => __('Chinese (Hong Kong SAR China)')],
                ['value' => 'zh_TW', 'label' => __('Chinese (Taiwan)')],
                ['value' => 'af_ZA', 'label' => __('Afrikaans (South Africa)')],
                ['value' => 'sq_AL', 'label' => __('Albanian (Albania)')],
                ['value' => 'hy_AM', 'label' => __('Armenian (Armenia)')],
                ['value' => 'az_AZ', 'label' => __('Azerbaijani (Azerbaijan)')],
                ['value' => 'be_BY', 'label' => __('Belarusian (Belarus)')],
                ['value' => 'bn_IN', 'label' => __('Bengali (India)')],
                ['value' => 'bs_BA', 'label' => __('Bosnian (Bosnia & Herzegovina)')],
                ['value' => 'bg_BG', 'label' => __('Bulgarian (Bulgaria)')],
                ['value' => 'hr_HR', 'label' => __('Croatian (Croatia)')],
                ['value' => 'nl_BE', 'label' => __('Dutch (Belgium)')],
                ['value' => 'en_GB', 'label' => __('English (United Kingdom)')],
                ['value' => 'et_EE', 'label' => __('Estonian (Estonia)')],
                ['value' => 'fo_FO', 'label' => __('Faroese (Faroe Islands)')],
                ['value' => 'fr_CA', 'label' => __('French (Canada)')],
                ['value' => 'ka_GE', 'label' => __('Georgian (Georgia)')],
                ['value' => 'el_GR', 'label' => __('Greek (Greece)')],
                ['value' => 'gu_IN', 'label' => __('Gujarati (India)')],
                ['value' => 'hi_IN', 'label' => __('Hindi (India)')],
                ['value' => 'is_IS', 'label' => __('Icelandic (Iceland)')],
                ['value' => 'id_ID', 'label' => __('Indonesian (Indonesia)')],
                ['value' => 'ga_IE', 'label' => __('Irish (Ireland)')],
                ['value' => 'jv_ID', 'label' => __('Javanese (India)')],
                ['value' => 'kn_IN', 'label' => __('Kannada (India)')],
                ['value' => 'kk_KZ', 'label' => __('Kazakh (Kazakhstan)')],
                ['value' => 'lv_LV', 'label' => __('Latvian (Latvia)')],
                ['value' => 'lt_LT', 'label' => __('Lithuanian (Lithuania)')],
                ['value' => 'mk_MK', 'label' => __('Macedonian (Macedonia)')],
                ['value' => 'mg_MG', 'label' => __('Malagasy (Madagascar)')],
                ['value' => 'ms_MY', 'label' => __('Malay (Malaysia)')],
                ['value' => 'mt_MT', 'label' => __('Maltese (Malta)')],
                ['value' => 'mr_IN', 'label' => __('Marathi (India)')],
                ['value' => 'mn_MN', 'label' => __('Mongolian (Mongolia)')],
                ['value' => 'ne_NP', 'label' => __('Nepali (Nepal)')],
                ['value' => 'pa_IN', 'label' => __('Punjabi (India)')],
                ['value' => 'sr_RS', 'label' => __('Serbian (Serbia)')],
                ['value' => 'so_SO', 'label' => __('Somali (Somalia)')],
                ['value' => 'sw_KE', 'label' => __('Swahili (Kenya)')],
                ['value' => 'tl_PH', 'label' => __('Tagalog (Philippines)')],
                ['value' => 'ta_IN', 'label' => __('Tamil (India)')],
                ['value' => 'te_IN', 'label' => __('Telugu (India)')],
                ['value' => 'ml_IN', 'label' => __('Malayalam (India)')],
                ['value' => 'uk_UA', 'label' => __('Ukrainian (Ukraine)')],
                ['value' => 'uz_UZ', 'label' => __('Uzbek (Uzbekistan)')],
                ['value' => 'vi_VN', 'label' => __('Vietnamese (Vietnam)')],
                ['value' => 'km_KH', 'label' => __('Khmer (Cambodia)')],
                ['value' => 'tg_TJ', 'label' => __('Tajik (Tajikistan)')],
                ['value' => 'ar_AR', 'label' => __('Arabic ()')],
                ['value' => 'he_IL', 'label' => __('Hebrew (Israel)')],
                ['value' => 'ur_PK', 'label' => __('Urdu (Pakistan)')],
                ['value' => 'fa_IR', 'label' => __('Persian (Iran)')],
                ['value' => 'ps_AF', 'label' => __('Pashto (Afghanistan)')],
                ['value' => 'my_MM', 'label' => __('Burmese (Myanmar (Burma))')],
                ['value' => 'qz_MM', 'label' => __('Zawgyi (Myanmar (Burma))')],
                ['value' => 'or_IN', 'label' => __('Oriya (India)')],
                ['value' => 'si_LK', 'label' => __('Sinhala (Sri Lanka)')],
                ['value' => 'rw_RW', 'label' => __('Kinyarwanda (Rwanda)')],
                ['value' => 'cb_IQ', 'label' => __('Kurd (Iraq)')],
                ['value' => 'ha_NG', 'label' => __('Hausa (Nigeria)')],
                ['value' => 'ja_KS', 'label' => __('ja_KS')],
                ['value' => 'br_FR', 'label' => __('Breton (France)')],
                ['value' => 'tz_MA', 'label' => __('tz_MA')],
                ['value' => 'co_FR', 'label' => __('Corsican (France)')],
                ['value' => 'as_IN', 'label' => __('Assamese (India)')],
                ['value' => 'ff_NG', 'label' => __('ff_NG')],
                ['value' => 'sc_IT', 'label' => __('Sardinian (Italy)')],
                ['value' => 'sz_PL', 'label' => __('sz_PL')],
            ];
        }

        return $this->_options;
    }

}