<?php

function load_my_style()
{
    // Tải font và các CSS
    wp_enqueue_style('googlefont_sc', '', array(), null);
    wp_enqueue_style('my_style_boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css", array(), "4.3.1");
    wp_enqueue_style('my_style', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . "/build/style_index.css");
}
add_action('wp_head', 'load_my_style');


function get_featured_image_url($post_id)
{
    if (has_post_thumbnail($post_id)) {
        // Trả về URL của hình ảnh đại diện
        $image_url = get_the_post_thumbnail_url($post_id, 'full');
        return $image_url;
    } else {
        // Trả về URL ảnh mặc định nếu không có hình ảnh đại diện
        return get_template_directory_uri() . '/images/default-image.jpg';
    }
}
function enqueue_custom_js()
{
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/build/index.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js');

function University_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'University_features');


// Shortcode để hiển thị danh mục sản phẩm theo slug kèm ảnh bìa
function display_product_category_by_slug($atts)
{
    // Lấy thuộc tính 'slug' từ shortcode
    $atts = shortcode_atts(array(
        'slug' => '', // Mặc định không có slug
    ), $atts, 'product_category');

    // Kiểm tra slug
    if (empty($atts['slug'])) {
        return 'Vui lòng cung cấp slug của danh mục.';
    }

    // Lấy danh mục sản phẩm theo slug
    $category = get_term_by('slug', $atts['slug'], 'product_cat');


    if (!$category) {
        return 'Danh mục không tồn tại.';
    }

    // Lấy ID của ảnh bìa và URL của ảnh
    $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
    $thumbnail_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';
    // Hiển thị tên, mô tả và ảnh bìa của danh mục
    ob_start(); // Bắt đầu lưu trữ nội dung

    echo '<div class="product-category mx-2"><div class="">';
    if ($thumbnail_url) {
        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr($category->name) . '" class="category-thumbnail" />';
    }
    echo '<h2 class="font-normal text-center">' . esc_html($category->name) . '</h2>';
    echo '</div></div>';

    return ob_get_clean(); // Trả về nội dung đã lưu trữ
}
add_shortcode('category', 'display_product_category_by_slug');
