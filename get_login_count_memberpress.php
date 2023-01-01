<$php
global $wpdb;
$value = $wpdb->get_var( $wpdb->prepare(
    " SELECT login_count FROM {$wpdb->prefix}mepr_members WHERE ID = %d ",
    get_current_user_id()
) );
$user_id=get_current_user_id();
echo "login count: " . $value . " for user id " . $user_id;
%>
