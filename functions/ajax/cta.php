<?php 

add_action( 'wp_ajax_cta', 'smamo_cta' );
add_action( 'wp_ajax_nopriv_cta', 'smamo_cta' );

function smamo_cta(){
    $response = array();
    
    $fields = array(
        'name' => (isset($_POST['name'])) ? esc_attr($_POST['name']) : false,
        'email' => (isset($_POST['email'])) ? esc_attr($_POST['email']) : false,
        'phone' => (isset($_POST['phone'])) ? esc_attr($_POST['phone']) : false,
        'company' => (isset($_POST['company'])) ? esc_attr($_POST['company']) : false,
        'message' => (isset($_POST['message'])) ? esc_textarea($_POST['message']) : false,
    );
    
    if(!$fields['name'] || !$fields['name']){
        $response['error'] = 'Fejl: ikke alle krævede oplysninger er anført.';
        wp_die(json_encode($response));
    }
    
    // Opret ny post
    $post_vars = array(
        'post_title'     => $fields['name'] .' | '. $fields['email'],
        'post_status'    => 'publish',
        'post_type'      => 'email',
    );  
    
    $new = wp_insert_post($post_vars,true);
    if(is_wp_error($new)){
        $response['error'] = $new->get_error_message();
        wp_die(json_encode($response));
    }
    
    $prfx = 'email_';
    foreach($fields as $field => $value){
        if ($value){
            $meta_field = $prfx.$field;
            update_post_meta($new, $meta_field, $value);
        }
    }
    
    $confirm_title = 'Tak for din henvendelse';
    $confirm_header = '<html><body><p>Tak for din henvendelse. Du modtager her en bekræftelsesemail med de oplysninger vi har modtaget.</p><br/>';
    $confirm_footer = '<br/><p>Med venlig hilsen</p><p><strong>'. get_bloginfo('name') .'</strong></p></body></html>';
    
    $send_title = 'Ny henvendelse via kontaktformularen på '. get_bloginfo('url');
    $send_header = '<html><body><p>Der er modtaget en ny henvendelse via kontaktformularen på '. get_bloginfo('url') .'</p><a href="'. get_bloginfo('url') .'/wp-admin/post.php?post='.$new.'&action=edit">Se beskeden her</a><br/>';
    $send_footer = '<br/><p>Med venlig hilsen</p><p><strong>'. get_bloginfo('name') .'</strong></p></body></html>';
    
    $email_content = '<ul>';
    foreach($fields as $field){
        $email_content .= '<li>'. $field .'</li>';
    }
    $email_content .= '</ul>';

    $company_name = (get_theme_mod('info_name')) ? esc_attr(get_theme_mod('info_name')) : 'Vangede Gruppen';
    $company_email = 'jeppe@smartmonkey.dk'; //(get_theme_mod('info_email')) ? esc_email(get_theme_mod('info_email')) : 'info@vangedebyg.dk';
    
    // send emails
    $confirm = sendEmail( $company_name, $company_email, $fields['email'], $confirm_title, $confirm_header.$email_content.$confirm_footer );
    $send = sendEmail( $company_name, $fields['email'], $company_email, $send_title, $send_header.$email_content.$send_footer );
    
    if(!$confirm || !$send){
        $response['error'] = 'Fejl: Kunne ikke sende emails';
        wp_die(json_encode($response));
    }
    
    $response['success'] = '<h2 style="text-align: center;padding: 0px 0px 30px;">Tak for din henvendelse. Vi vender tilbage hurtigst muligt</h2>';
    wp_die(json_encode($response));
}