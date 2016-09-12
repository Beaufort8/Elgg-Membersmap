<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$output = $vars['icon'].' '.$vars['title'];
$output .= ($vars['location']?'<br/>'.$vars['location']:'');
$output .= ($vars['other_info']?'<br/>'.$vars['other_info']:'');
$output .= ($vars['description']?'<br/>'.$vars['description']:'');

echo $output;

