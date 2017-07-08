<?php
if (!defined('IN_SITE')) die ('The request not found');

function set_logged($username, $level) {
	session_set('ss_user_token', array(
		'username' => $username,
		'level' => $level
	));
}

function set_logout() {
	session_delete('ss_user_token');
}

function is_logged() {
	$user = session_get('ss_user_token');
	return $user;
}

function is_admin() {
	$user = is_logged();
	if (!empty($user['level']) && $user['level'] == 1) {
		return true;
	}
	return false;
}
?>