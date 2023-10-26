<?php

namespace Brace;

function get_post_manager_ccs($post_id)
{
    $manager_ccs = get_field('manager_ccs', $post_id);

    if (!$manager_ccs) {
        return array();
    }

    $emails = wp_list_pluck($manager_ccs, 'email');

    return $emails;
}

add_filter('gform_notification', '\Brace\append_gform_team_member_notification', 10, 3);
function append_gform_team_member_notification($notification, $form, $entry)
{
    if ($notification['name'] !== gf_apply_filters(array('gform_location_selector_notification_name', $form['id']), 'Location-Specific Notification')) {
        return $notification;
    }

    foreach ($form['fields'] as $field) {
        if ($field->type !== 'location-selector') {
            continue;
        }

        $location = get_location((int) rgpost("input_{$field->id}"));

        if (!$location) {
            return $notification;
        }

        $cc = get_post_manager_ccs($location->ID);
        $ancestors = get_post_ancestors($location);

        foreach ($ancestors as $ancestor_id) {
            $ancestor_ccs = get_post_manager_ccs($ancestor_id);
            $cc = array_merge($cc, $ancestor_ccs);
        }

        $notification['cc'] = join(', ', array_filter($cc));
        $team_member = get_field('team_member', $location->ID);

        if (!$team_member) {
            return $notification;
        }

        $email = get_field('email', $team_member->ID);

        if (!$email) {
            return $notification;
        }

        $notification['to'] = $email;

        return $notification;
    }

    return $notification;
}

add_filter('gform_notification_enable_cc', '__return_true');
