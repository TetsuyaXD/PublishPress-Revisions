<?php
if( basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME']) )
	die();

/**
 * @package     Revisionary\RevisionaryOptions
 * @author      PublishPress <help@publishpress.com>
 * @copyright   Copyright (c) 2019 PublishPress. All rights reserved.
 * @license     GPLv2 or later
 * @since       1.0.0
 */
 
// Setting scope: For Network installations, which Revisionary options should default to site-wide control?
function rvy_default_options_sitewide() {
	$def = array(
		'pending_revisions' => true,
		'scheduled_revisions' => true,
		'async_scheduled_publish' => true,
		'pending_rev_notify_admin' => true,
		'pending_rev_notify_author' => true,
		'rev_approval_notify_author' => true,
		'rev_approval_notify_revisor' => true,
		'publish_scheduled_notify_admin' => true,
		'publish_scheduled_notify_author' => true,
		'publish_scheduled_notify_revisor' => true,
		'display_hints' => true,
		'revisor_role_add_custom_rolecaps' => true,
		'revisor_lock_others_revisions' => true,
		'require_edit_others_drafts' => true,
		'diff_display_strip_tags' => false,
		'scheduled_revision_update_post_date' => true,
	);

	if ( $other_options = array_diff_key( rvy_default_options(), $def ) ) {
		$def = array_merge( $def, array_fill_keys( array_keys($other_options), true ) );
	}

	return $def;	
}
 
// Default values for Revisionary settings
function rvy_default_options() {
	$def = array(
		'pending_revisions' => 1,
		'scheduled_revisions' => 1,
		'async_scheduled_publish' => 1,
		'pending_rev_notify_admin' => 1,
		'pending_rev_notify_author' => 1,
		'rev_approval_notify_author' => 1,
		'rev_approval_notify_revisor' => 1,
		'publish_scheduled_notify_admin' => 1,
		'publish_scheduled_notify_author' => 1,
		'publish_scheduled_notify_revisor' => 1,
		'display_hints' => 1,
		'revisor_role_add_custom_rolecaps' => 1,
		'revisor_lock_others_revisions' => 1,
		'require_edit_others_drafts' => 1,
		'diff_display_strip_tags' => 0,
		'scheduled_revision_update_post_date' => 1,
	);

	return $def;
}

function rvy_po_trigger( $string ) {
	return $string;	
}
