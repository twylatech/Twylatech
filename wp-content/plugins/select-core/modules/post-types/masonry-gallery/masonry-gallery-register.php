<?php
/**
 * Created by PhpStorm.
 * User: korisnik
 * Date: 30/3/2015
 * Time: 11:25 AM
 */

namespace QodeCore\CPT\MasonryGallery;

use QodeCore\Lib;

/**
 * Class MasonryGalleryRegister
 * @package QodeCore\CPT\MasonryGallery
 */
class MasonryGalleryRegister implements Lib\PostTypeInterface  {
    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'masonry_gallery';
        $this->taxBase = 'masonry_gallery_category';
    }

    /**
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Registers custom post type with WordPress
     */
    public function register() {
        $this->registerPostType();
        $this->registerTax();
    }

    /**
     * Registers custom post type with WordPress
     */
    private function registerPostType() {
        register_post_type($this->base,
            array(
                'labels' 		=> array(
                    'name' 				=> esc_html__('Masonry Gallery','select-core' ),
                    'all_items'			=> esc_html__('Masonry Gallery Items','select-core'),
                    'singular_name' 	=> esc_html__('Masonry Gallery Item','select-core' ),
                    'add_item'			=> esc_html__('New Masonry Gallery Item','select-core'),
                    'add_new_item' 		=> esc_html__('Add New Masonry Gallery Item','select-core'),
                    'edit_item' 		=> esc_html__('Edit Masonry Gallery Item','select-core')
                ),
                'public'		=>	false,
                'show_in_menu'	=>	true,
                'rewrite' 		=> 	array('slug' => 'masonry_gallery'),
                'menu_position' => 	4,
                'show_ui'		=>	true,
                'has_archive'	=>	false,
                'hierarchical'	=>	false,
                'supports'		=>	array('title', 'thumbnail')
            )
        );
    }

    /**
     * Registers custom taxonomy with WordPress
     */
    private function registerTax() {
        $labels = array(
            'name' => esc_html__( 'Masonry Gallery Categories', 'taxonomy general name' ),
            'singular_name' => esc_html__( 'Masonry Gallery Category', 'taxonomy singular name' ),
            'search_items' =>  esc_html__( 'Search Masonry Gallery Categories','select-core' ),
            'all_items' => esc_html__( 'All Masonry Gallery Categories','select-core' ),
            'parent_item' => esc_html__( 'Parent Masonry Gallery Category','select-core' ),
            'parent_item_colon' => esc_html__( 'Parent Masonry Gallery Category:','select-core' ),
            'edit_item' => esc_html__( 'Edit Masonry Gallery Category','select-core' ),
            'update_item' => esc_html__( 'Update Masonry Gallery Category','select-core' ),
            'add_new_item' => esc_html__( 'Add New Masonry Gallery Category','select-core' ),
            'new_item_name' => esc_html__( 'New Masonry Gallery Category Name','select-core' ),
            'menu_name' => esc_html__( 'Masonry Gallery Categories','select-core' ),
        );

        register_taxonomy($this->taxBase, array($this->base), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'show_admin_column' => true,
            'rewrite' => array( 'slug' => 'masonry-gallery-category' ),
        ));
    }
}