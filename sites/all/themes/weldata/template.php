<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 */
 
 
 /**
 * Implements hook_date_combo
 * Removes Fieldset from date fields
 */
function weldata_date_combo($variables) {
  return theme('form_element', $variables);
}

/**
* Altering Date Popup to remove labels and description for specific field
*/
/*function weldata_date_popup_process_alter(&$element, &$form_state, $context) {
  unset($element['date']['#description']);
  unset($element['date']['#title']);
}*/


/**
* Custom theme function for the login/register link.
* Change "Register" to create an account
*/
function weldata_lt_login_link($variables) {
// Only display register text if registration is allowed.
	if (variable_get('user_register', USER_REGISTER_VISITORS_ADMINISTRATIVE_APPROVAL)) {
		return t('Log in / Create an account');
	}
	else {
		return t('Log in');
	}
}

// Convert username to link in logged in users.
function weldata_lt_loggedinblock(){
  global $user;
  return l(check_plain($user->name), 'user/' . $user->uid) .' | ' . l(t('Log out'), 'user/logout');
}
 
 

/**
 * Implements hook_preprocess_print
 * Adds Variables for PQR Table
 */
function weldata_preprocess_print(&$variables) {
  $node = $variables['node'];
  $display = array ('label' => 'hidden');
  if($node->type == 'pqr_wps'){
    $variables['date'] =  field_view_field('node', $node, 'field_date',$display);
    $variables['revision'] =  field_view_field('node', $node, 'field_revision',$display);
    $variables['wps_used'] =  field_view_field('node', $node, 'field_wps_number',$display);
    $variables['welding_process'] =  field_view_field('node', $node, 'field_welding_process',$display);
    $variables['brazing_process'] =  field_view_field('node', $node, 'field_brazing_process',$display);
    $variables['process_type'] =  field_view_field('node', $node, 'field_process_type',$display);

    //Base Metals Table
    $variables['material_specification'] =  field_view_field('node', $node, 'field_material_specification',$display);
    $variables['type_grade_uns'] =  field_view_field('node', $node, 'field_type_or_grade',$display);
    $variables['thickness_test_coupon'] =  field_view_field('node', $node, 'field_thickness_of_test_coupon',$display);
    $variables['diameter_test_coupon'] =  field_view_field('node', $node, 'field_diameter_of_test_coupon',$display);
    $variables['maximum_pass_thickness'] =  field_view_field('node', $node, 'field_maximum_pass_thickness',$display);
    $variables['other_base_metals'] =  field_view_field('node', $node, 'field_other_base_metal',$display);

    //PWHT Table
    $variables['pwht_temperature'] =  field_view_field('node', $node, 'field_temperature',$display);
    $variables['pwht_time'] =  field_view_field('node', $node, 'field_time',$display);
    $variables['other_pwht'] =  field_view_field('node', $node, 'field_other_pwht',$display);
  }
}

