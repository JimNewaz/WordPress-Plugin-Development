<?php

use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields', 'create_options_page');

function load_carbon_fields()
{
    Carbon_Fields::boot();
}

function create_options_page()
{
    Container::make('theme_options', __('Ring Design'))
        ->add_fields(array(
            Field::make('text', 'ring_design_recipient_email', __('Recipient Email'))->set_attribute('placeholder', 'example@example.com'),
            Field::make('textarea', 'ring_design_message', __('Confirmation Message'))->set_attribute('placeholder', 'Thank you for submitting the form')
                ->set_help_text('Type the message you want the submitter to recieve')
        ));
}
