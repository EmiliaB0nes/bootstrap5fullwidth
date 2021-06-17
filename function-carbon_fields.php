<?php

// Load Carbon Fields

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}


// Front Page

add_action('carbon_fields_register_fields', 'crb_front_page');
function crb_front_page()
{
    Container::make('post_meta', esc_html__('Front Page Options', 'wpb5Translations'))
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(array(
            Field::make('text', 'crb_front_main_title', esc_html__('Main Title', 'wpb5Translations'))
            ->set_default_value( esc_html__('My Title', 'wpb5Translations'))
            ->set_required( true ),
            Field::make('text', 'crb_subtitle', esc_html__('Subtitle', 'wpb5Translations'))
            ->set_default_value( esc_html__('My Subtitle', 'wpb5Translations')),
            Field::make('checkbox', 'crb_show_skills', esc_html__('Show skills', 'wpb5Translations'))
            ->set_default_value( true ),
            Field::make('text', 'crb_skills_area_title', esc_html__('Skills area title', 'wpb5Translations'))
                ->set_conditional_logic(array(
                    array(
                        'field' => 'crb_show_skills',
                        'value' => true,
                    )
                ))
                ->set_required( true ),
            Field::make('complex', 'crb_skill_slider', esc_html__('Skills List', 'wpb5Translations'))
                ->set_conditional_logic(array(
                    array(
                        'field' => 'crb_show_skills',
                        'value' => true,
                    )
                ))
                ->add_fields(array(
                    Field::make('text', 'skill_title', esc_html__('Skill', 'wpb5Translations'))
                    ->set_required( true ),
                    Field::make('image', 'skill_logo', esc_html__('Skill Logo', 'wpb5Translations'))
                    ->set_required( true ),
                )),



        ));
}

add_action('carbon_fields_register_fields', 'crb_competence_page');
function crb_competence_page()
{
    Container::make('post_meta', esc_html__('Competence Page Options', 'wpb5Translations'))
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_id', 'CUSTOM', function( $post_id ) {
            $slug = get_post_field( 'post_name', $post_id );
            return $slug === 'competences';
        } )
        ->add_fields(array(
            Field::make('text', 'crb_competence_slider1_title', esc_html__('List 1 Title', 'wpb5Translations'))
            ->set_default_value( esc_html__('My Title', 'wpb5Translations'))
            ->set_required( true ),
            Field::make('complex', 'crb_competence_slider1', esc_html__('Competence List 1', 'wpb5Translations'))
                ->add_fields(array(
                    Field::make('text', 'skill_title', esc_html__('Competence title', 'wpb5Translations'))
                    ->set_required( true ),
                    Field::make('image', 'skill_logo', esc_html__('Competence Logo', 'wpb5Translations'))
                    ->set_required( true ),
                )),
            Field::make('text', 'crb_competence_slider2_title', esc_html__('List 2 Title', 'wpb5Translations'))
            ->set_default_value( esc_html__('My Title', 'wpb5Translations'))
            ->set_required( true ),
            Field::make('complex', 'crb_competence_slider2', esc_html__('Competence List 2', 'wpb5Translations'))
                ->add_fields(array(
                    Field::make('text', 'skill_title', esc_html__('Competence title', 'wpb5Translations'))
                    ->set_required( true ),
                    Field::make('image', 'skill_logo', esc_html__('Competence Logo', 'wpb5Translations'))
                    ->set_required( true ),
                )),



        ));
}
