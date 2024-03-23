<?php

add_shortcode('ring_design', 'show_ring_design_form');

add_action('rest_api_init', 'create_rest_endpoint');

add_action('wp_enqueue_scripts', 'enqueue_scripts');

add_action('init', 'create_submissions_page');

add_action('add_meta_boxes', 'create_meta_box');

function create_meta_box()
{
    add_meta_box('custom_ring_design_form', 'Submissions', 'display_submissions', 'submission');
}

function display_submissions() {
    $post_id = get_the_ID();
    $post_metas = get_post_meta($post_id);

    unset($post_metas['_edit_lock']);
    // Map values to image URLs
    $image_urls = [
        'DIAMOND' => 'diamond.webp',
        'LAB GROWN DIAMOND' => 'grown-diamond.webp',
        'MOISSANITE' => 'moissianite.webp',
        'SALT PEPPER Diamond' => 'salt-diamond.webp',
        'SAPPHIRE' => 'sapphire.webp',
        'MORGANITE' => 'morganite.webp',
        'TANZANITE' => 'tanzanite.webp',
        'EMERALD' => 'emerald.webp',
        'RUBY' => 'ruby.webp',
        'TOURMALIN' => 'tourmaline.webp',
        'Other' => 'others-removebg-preview.png',
        'Round' => 'round_n.webp',
        'Emerald' => 'emerald_n.webp',
        'Oval' => 'oval_n.webp',
        'Square' => 'square_n.webp',
        'Cushion' => 'cushion_n.webp',
        'Baguette' => 'bag_1.webp',
        'Pear' => 'pear_n.webp',
        'Radiant' => 'radiant_n.webp',
        'Brilliant' => 'Trilliant_Cut_icon_N.png',
        'Marquise' => 'Trilliant_Cut_icon_N.webp',
        'Heart' => 'Heart_Cut_icon_N.webp',
        'solitaire' => 'head.png',
        'Diamond Head' => 'diamond-head.png',
        'Side stone' => 'side-stone.png',
        'Need Advice' => 'others-removebg-preview.png',
        'Gold' => 'gold.png',
        'Yellow Gold' => 'yellow.png',
        'White Gold' => 'white.png',
        'Platinum' => 'platinum.png',
    ];

    $html_output = '<ul>';

    foreach ($post_metas as $key => $value) {
        $clean_value = esc_html($value[0]);
        $html_output .= "<li> <strong>" . ucfirst($key) . "</strong>: <br> $clean_value</li>";

        // Check if value exists in image mapping array
        if (array_key_exists($clean_value, $image_urls)) {
            $image_url = $image_urls[$clean_value];
            $html_output .= "<img src='https://goldjewelleryisland.com/wp-content/uploads/2024/03/$image_url' height='100' ></img>";
        }

        $html_output .= '<hr>';
    }

    $html_output .= '</ul>';

    echo $html_output;
}



function show_ring_design_form()
{
    ob_start();
    include_once MY_PLUGIN_PATH . '/includes/templates/ring-design.php';
    return ob_get_clean();
}

function create_rest_endpoint()
{
    register_rest_route('v1/ring-design', 'submit', array(
        'methods' => 'POST',
        'callback' => 'handle_enquiry',
    ));
}

function enqueue_scripts()
{
    wp_enqueue_style('ring-design-plugin', MY_PLUGIN_URL . 'assets/css/ring-design-plugin.css');

    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap');

    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '5.0.2', true);
    wp_enqueue_script('ring-design-plugin', MY_PLUGIN_URL . 'assets/js/script.js', array('jquery'), null, true);
}

function create_submissions_page()
{
    $args = [
        'public' => true,
        'has_archive' => true,
        'labels' => [
            'name' => 'Ring Submissions',
            'singular_name' => 'Ring Submission',
            'edit_item' => 'View Submission'
        ],
        'publicly_queryable' => false,
        'supports' => false,
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => false,
        ),
        'map_meta_cap' => true,

    ];

    register_post_type('submission', $args);
}

function handle_enquiry($data)
{
    $params = $data->get_params();

    // Personal Information
    $field_fname = sanitize_text_field($params['first_name']);
    $field_lname = sanitize_text_field($params['last_name']);
    $field_email = sanitize_email($params['email']);
    $filed_phone = sanitize_email($params['phone']);
    $field_address = sanitize_textarea_field($params['address']);

    // Ring Stone 
    $filed_stone = $params['ring_stone'];

    // Ring Shape 
    $filed_shape = $params['ring_shape'];

    // Ring Style 
    $filed_style = $params['ring_style'];

    // Ring Color
    $filed_color = $params['ring_colors'];

    // Currency and Budget
    $filed_currency = $params['currency'];
    $filed_budget = $params['budget'];

    // Consultant 
    $filed_consultant = $params['consultant'];

    if (!wp_verify_nonce($params['_wpnonce'], 'wp_rest')) {
        return new WP_REST_Response('Sorry! Message Not Sent', 422);
    }

    unset($params['_wpnonce']);
    unset($params['_wp_http_referer']);

    $headers = [];
    $admin_email = get_bloginfo('admin_email');
    $admin_name = get_bloginfo('name');

    $reciepient_email = get_plugin_options('ring_design_recipient_email');

    if (!$reciepient_email) {
        $reciepient_email = $admin_email;
    }

    $headers[] = "From: " . $admin_email . $admin_name;
    $headers[] = "Reply-to: " . $field_fname . $field_email;
    $headers[] = "Content-Type: text/html";

    $message = '';
    $message = "<h1> New Ring Enquiry From:" . $field_fname . "</h1>";
    $message .= "A new ring enquiry has been submitted on GoldJewelleryIsland:";

    $subject = 'New Ring Enquiry From:' . $field_fname;

    $postarr = [
        'post_title' => $field_fname,
        'post_type'  => 'submission',
        'post_status' => 'publish'
    ];

    $post_id = wp_insert_post($postarr);

    foreach ($params as $label => $value) {


        switch ($label) {
            case 'email':
                $value = sanitize_email($value);
                break;

            default:
                $value = sanitize_text_field($value);
        }

        add_post_meta($post_id, $label, sanitize_text_field($value));
        
        $message .= '<p><strong>' . sanitize_text_field(ucfirst($label)) . '</strong>: ' . $value . '</p>';
    }

    wp_mail($reciepient_email, $subject, $message, $headers);


    // Send email to form submitter
    $submitter_subject  = 'Thank you for your enquiry';
    $submitter_message  = 'Dear ' . $field_fname . ',<br><br>';
    $submitter_message .= 'Thank you for submitting your ring design. <br> We have received your enquiry and will get back to you soon with further details.<br><br>';
    $submitter_message .= 'Best regards,<br>';
    $submitter_message .= 'Gold Jewellery Island';

    wp_mail($field_email, $submitter_subject, $submitter_message, $headers);

    $response = new WP_REST_Response('
                                <div class="mt-5">
                                    <div id="form-success" class="text-center">
                                        <div class="page-wrapper">
                                            <div class="circle-wrapper">
                                                <div class="success circle"></div>
                                                <div class="icon">
                                                <i class="fa fa-check"></i>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <br>
                                        <h3 class = "text-center">Thank You! <br> We will get back to you soon.</h3>
                                        <br>
                                        <a class="back-link" href="">Go back from the beginning ➜</a>
                                    </div>
                                </div>
                            ', 200);

    return $response;
}



// Stones 

// Add custom post type for stones
add_action('init', 'create_stone_post_type');

function create_stone_post_type()
{
    register_post_type(
        'stone',
        array(
            'labels' => array(
                'name' => __('Stones'),
                'singular_name' => __('Stone'),
                'edit_item' => 'View Stone'
            ),
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => false,
            'menu_icon' => 'dashicons-superhero-alt',
            'supports' => false,
        )
    );
}

// Add meta boxes for custom fields
add_action('add_meta_boxes', 'add_stone_meta_boxes');
function add_stone_meta_boxes()
{
    add_meta_box('stone_text_field', __('Text Field'), 'render_stone_text_field', 'stone');
    add_meta_box('stone_image_field', __('Image Field'), 'render_stone_image_field', 'stone');
    add_meta_box('stone_description_field', __('Description Field'), 'render_stone_description_field', 'stone');
}

function render_stone_text_field($post)
{

    wp_nonce_field('stone_meta_box', 'stone_meta_box_nonce');

    $value = get_post_meta($post->ID, 'stone_text_field', true);
    echo '<input type="text" name="stone_text_field" value="' . esc_attr($value) . '" />';
}


function render_stone_image_field($post)
{
    // Output the nonce field
    wp_nonce_field('stone_meta_box', 'stone_meta_box_nonce');

    $image_id = get_post_meta($post->ID, 'stone_image_field', true);
    $image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
?>
    <div class="stone-image-preview">
        <?php if ($image_url) : ?>
            <img src="<?php echo esc_url($image_url); ?>" style="max-width: 200px; max-height: 200px;" />
        <?php else : ?>
            <p>No image selected</p>
        <?php endif; ?>
    </div>
    <input type="hidden" name="stone_image_field" id="stone_image_field_image" value="<?php echo ($image_id); ?>" />

    <button type="button" id="choose_image_button" class="button">Choose Image</button>

    <script>
        jQuery(document).ready(function($) {
            $('#choose_image_button').click(function(e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                        type: 'image',
                        title: 'Choose Image',
                        button: {
                            text: 'Choose Image'
                        },
                        multiple: false
                    })
                    .on('select', function() {
                        var attachment = custom_uploader.state().get('selection').first().toJSON();

                        $('#stone_image_field_image').val(attachment.id);
                        $('.stone-image-preview').html('<img src="' + attachment.sizes.thumbnail.url + '" style="max-width: 200px; max-height: 200px;" />');
                    })
                    .open();
            });
        });
    </script>
<?php
}

function render_stone_description_field($post)
{
    wp_nonce_field('stone_meta_box', 'stone_meta_box_nonce');

    $description = get_post_meta($post->ID, 'stone_description_field', true);
    echo '<textarea name="stone_description_field">' . esc_textarea($description) . '</textarea>';
}

// Save stone meta box data
add_action('save_post', 'save_stone_meta_data');
function save_stone_meta_data($post_id)
{
    // Verify nonce
    if (!isset($_POST['stone_meta_box_nonce']) || !wp_verify_nonce($_POST['stone_meta_box_nonce'], 'stone_meta_box')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save stone text field
    if (isset($_POST['stone_text_field'])) {
        update_post_meta($post_id, 'stone_text_field', sanitize_text_field($_POST['stone_text_field']));
    }

    // Save stone description field
    if (isset($_POST['stone_description_field'])) {
        update_post_meta($post_id, 'stone_description_field', sanitize_text_field($_POST['stone_description_field']));
    }

    // Save stone image field
    if (isset($_POST['stone_image_field'])) {
        update_post_meta($post_id, 'stone_image_field', intval($_POST['stone_image_field']));
    }
}


add_action('pre_get_posts', 'custom_modify_stones_query');
function custom_modify_stones_query($query)
{
    // Check if on the stones list page and main query
    if (is_admin() && $query->is_main_query() && $query->get('post_type') === 'stone') {
        // Include both published and draft stones
        $query->set('post_status', array('publish', 'draft'));
    }
}
