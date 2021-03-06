<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function tophit_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['mtt_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => FALSE,
	'#collapsed' => FALSE,
  );

  $form['mtt_settings']['tabs'] = array(
    '#type' => 'vertical_tabs',
	'#attached' => array(
      'css' => array(drupal_get_path('theme', 'tophit') . '/tophit.settings.form.css'),
    ),
  );
  
  $form['mtt_settings']['tabs']['basic_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Basic Settings'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['breadcrumb'] = array(
   '#type' => 'item',
   '#markup' => t('<div class="theme-settings-title">Breadcrumb</div>'),
  );

  $form['mtt_settings']['tabs']['basic_settings']['breadcrumb_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumb'),
  	'#description'   => t('Use the checkbox to enable or disable Breadcrumb.'),
	'#default_value' => theme_get_setting('breadcrumb_display', 'tophit'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['scrolltop'] = array(
   '#type' => 'item',
   '#markup' => t('<div class="theme-settings-title">Scroll to top</div>'),
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['scrolltop_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll-to-top button'),
  	'#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
	'#default_value' => theme_get_setting('scrolltop_display', 'tophit'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['frontpage_content'] = array(
   '#type' => 'item',
   '#markup' => t('<div class="theme-settings-title">Front Page Behavior</div>'),
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['frontpage_emulate'] = array(
    '#type' => 'checkbox',
    '#title' => t('Emulate Drupal frontpage'),
  	'#description'   => t('Use the checkbox to emulate Drupal default frontpage. The sidebar will be automatically enabled if at least one block is placed into it. An extra region, next to the sidebar will also become available.'),
	'#default_value' => theme_get_setting('frontpage_emulate', 'tophit'),
  );
  
  $form['mtt_settings']['tabs']['basic_settings']['frontpage_content_print'] = array(
    '#type' => 'checkbox',
    '#title' => t('Drupal frontpage content'),
  	'#description'   => t('Use the checkbox to enable or disable the Drupal default frontpage functionality. Enable this to have all the promoted content displayed in the frontpage.'),
	'#default_value' => theme_get_setting('frontpage_content_print', 'tophit'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['looknfeel'] = array(
    '#type' => 'fieldset',
    '#title' => t('Look\'n\'Feel'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['looknfeel']['color_scheme'] = array(
    '#type' => 'select',
    '#title' => t('Color Schemes'),
  	'#description'   => t('From the drop-down menu, select the color scheme you prefer.'),
	'#default_value' => theme_get_setting('color_scheme', 'tophit'),
    '#options' => array(
		'default' => t('Orange / Default'),
		'blue' => t('Blue'),
		'green' => t('Green'),
		'gray' => t('Gray'),
		'pink' => t('Pink'),
    ),
  );

  $form['mtt_settings']['tabs']['font'] = array(
    '#type' => 'fieldset',
    '#title' => t('Font Settings'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['font']['font_title'] = array(
   '#type' => 'item',
   '#markup' => 'For every region pick the <strong>font-family</strong> that corresponds to your needs.',
  );

  $form['mtt_settings']['tabs']['font']['sitename_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Site name'),
	'#default_value' => theme_get_setting('sitename_font_family', 'tophit'),
    '#options' => array(
		'sff-1' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
		'sff-2' => t('Open Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sff-3' => t('PT Sans Narrow, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sff-4' => t('Lato, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sff-5' => t('Quatrocento Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sff-6' => t('Asap, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sff-7' => t('Myriad Pro, Helvetica Neue, Arial, Sans-serif'),
		'sff-8' => t('Georgia, Times, Times New Roman, Serif'),
		'sff-9' => t('Merriweather, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['font']['slogan_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Slogan'),
	'#default_value' => theme_get_setting('slogan_font_family', 'tophit'),
    '#options' => array(
		'slff-1' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
		'slff-2' => t('Open Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'slff-10' => t('Open Sans Light, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'slff-3' => t('PT Sans Narrow, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'slff-4' => t('Lato, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'slff-5' => t('Quatrocento Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'slff-6' => t('Asap, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'slff-7' => t('Myriad Pro, Helvetica Neue, Arial, Sans-serif'),
		'slff-8' => t('Georgia, Times, Times New Roman, Serif'),
		'slff-9' => t('Merriweather, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['font']['headings_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Headings'),
	'#default_value' => theme_get_setting('headings_font_family', 'tophit'),
    '#options' => array(
		'hff-1' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
		'hff-2' => t('Open Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hff-10' => t('Open Sans Light, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hff-3' => t('PT Sans Narrow, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hff-4' => t('Lato, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hff-5' => t('Quatrocento Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hff-6' => t('Asap, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hff-7' => t('Myriad Pro, Helvetica Neue, Arial, Sans-serif'),
		'hff-8' => t('Georgia, Times, Times New Roman, Serif'),
		'hff-9' => t('Merriweather, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['font']['footer_headings_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Footer headings'),
	'#default_value' => theme_get_setting('footer_headings_font_family', 'tophit'),
    '#options' => array(
		'hoff-1' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
		'hoff-2' => t('Open Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hoff-10' => t('Open Sans Light, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hoff-3' => t('PT Sans Narrow, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hoff-4' => t('Lato, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hoff-5' => t('Quatrocento Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hoff-6' => t('Asap, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'hoff-7' => t('Myriad Pro, Helvetica Neue, Arial, Sans-serif'),
		'hoff-8' => t('Georgia, Times, Times New Roman, Serif'),
		'hoff-9' => t('Merriweather, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['font']['paragraph_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Paragraph'),
	'#default_value' => theme_get_setting('paragraph_font_family', 'tophit'),
    '#options' => array(
		'pff-1' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
		'pff-2' => t('Open Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'pff-10' => t('Open Sans Light, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'pff-3' => t('PT Sans Narrow, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'pff-4' => t('Lato, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'pff-5' => t('Quatrocento Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'pff-6' => t('Asap, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'pff-7' => t('Myriad Pro, Helvetica Neue, Arial, Sans-serif'),
		'pff-8' => t('Georgia, Times, Times New Roman, Serif'),
		'pff-9' => t('Merriweather, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['font']['slideshow_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Slideshow'),
	'#default_value' => theme_get_setting('slideshow_font_family', 'tophit'),
    '#options' => array(
		'sdff-1' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
		'sdff-2' => t('Open Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sdff-10' => t('Open Sans Light, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sdff-3' => t('PT Sans Narrow, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sdff-4' => t('Lato, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sdff-5' => t('Quatrocento Sans, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sdff-6' => t('Asap, Helvetica Neue, Helvetica, Arial, Sans-serif'),
		'sdff-7' => t('Myriad Pro, Helvetica Neue, Arial, Sans-serif'),
		'sdff-8' => t('Georgia, Times, Times New Roman, Serif'),
		'sdff-9' => t('Merriweather, Times, Times New Roman, Serif'),
    ),
  );
  
  $form['mtt_settings']['tabs']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slideshow'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['slideshow']['slideshow_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
  	'#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
	'#default_value' => theme_get_setting('slideshow_effect', 'tophit'),
    '#options' => array(
		'fade' => t('fade'),
		'slide' => t('slide'),
    ),
  );
  
  $form['mtt_settings']['tabs']['slideshow']['slideshow_effect_direction'] = array(
    '#type' => 'select',
    '#title' => t('Sliding direction'),
  	'#description'   => t('From the drop-down menu, select the sliding direction your prefer (acts only in slide effect)'),
	'#default_value' => theme_get_setting('slideshow_effect_direction', 'tophit'),
    '#options' => array(
		'horizontal' => t('horizontal'),
		'vertical' => t('vertical'),
    ),
  );
  
  $form['mtt_settings']['tabs']['slideshow']['slideshow_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
	'#default_value' => theme_get_setting('slideshow_effect_time', 'tophit'),
  	'#description'   => t('Set the speed of animations, in seconds.'),
  );
  
  $form['mtt_settings']['tabs']['slideshow']['slideshow_fontsize'] = array(
    '#type' => 'textfield',
    '#title' => t('Slideshow text font-size (px)'),
	'#default_value' => theme_get_setting('slideshow_fontsize', 'tophit'),
  	'#description'   => t('Set the Slideshow text font-size, in px.'),
  );
  

 $form['mtt_settings']['tabs']['responsive_menu'] = array(
    '#type' => 'fieldset',
    '#title' => t('Responsive menu'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
 $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable responsive menu'),
  	'#description'   => t('Use the checkbox to enable the plugin which transforms the Main menu of your site to a dropdown select list when your browser is at mobile widths.'),
	'#default_value' => theme_get_setting('responsive_menu_state', 'tophit'),
  );
  
 $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_switchwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Switch width (px)'),
  	'#description'   => t('Set the width (in pixels) at which the Main menu of the site will change to a dropdown select list.'),
	'#default_value' => theme_get_setting('responsive_menu_switchwidth', 'tophit'),
  );
  
  $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_topoptiontext'] = array(
    '#type' => 'textfield',
    '#title' => t('Top option text'),
  	'#description'   => t('Set the very first option display text.'),
	'#default_value' => theme_get_setting('responsive_menu_topoptiontext', 'tophit'),
  );
  
  $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_optgroups'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable responsive menu with optgroups'),
  	'#description'   => t('Use the checkbox to enable a dropdown select list with optgroups support.'),
	'#default_value' => theme_get_setting('responsive_menu_optgroups', 'tophit'),
  );
  
  $form['mtt_settings']['tabs']['responsive_menu']['responsive_menu_nested'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable nested responsive menu'),
  	'#description'   => t('Use the checkbox to enable the optgroups for the dropdown select list (acts only in dropdown select list with optgroups).'),
	'#default_value' => theme_get_setting('responsive_menu_nested', 'tophit'),
  );
  
  $form['mtt_settings']['tabs']['banner_region'] = array(
    '#type' => 'fieldset',
    '#title' => t('Banner shadow'),
    '#collapsible' => TRUE,
	'#collapsed' => TRUE,
  );
  
 $form['mtt_settings']['tabs']['banner_region']['banner_background'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show banner background shadow'),
  	'#description'   => t('Use the checkbox to enable or disable the background shadow in the banner region.'),
	'#default_value' => theme_get_setting('banner_background', 'tophit'),
  );
  
}
