<?php
/**
 * View: Events Bar
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/components/events-bar.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.2.0
 *
 * @var bool $display_events_bar   Boolean on whether to display the events bar.
 * @var bool $disable_event_search Boolean on whether to disable the event search.
 */

if ( empty( $display_events_bar ) ) {
	return;
}

$heading = $disable_event_search
	? __( 'Views Navigation', 'the-events-calendar' )
	: sprintf( __( '%s Search and Views Navigation', 'the-events-calendar' ), tribe_get_event_label_plural() );

$classes = [ 'tribe-events-header__events-bar', 'tribe-events-c-events-bar' ];
if ( empty( $disable_event_search ) ) {
	$classes[] = 'tribe-events-c-events-bar--border';
}
?>
