<?php
/*
Plugin Name: Dynamic Quotes
Description: A simple plugin that displays random dynamic quotes.
Version: 1.0
Author: Preety Sinha
*/

// Shortcode to display the quote box
function dqp_display_quote() {
    $quotes = array(
        "Believe you can and you're halfway there.",
        "Success is not final, failure is not fatal: It is the courage to continue that counts.",
        "Don't watch the clock; do what it does. Keep going.",
        "The future depends on what you do today.",
        "Your time is limited, so don't waste it living someone else's life."
    );

    $random_quote = $quotes[array_rand($quotes)];

    $output = "<div class='dqp-quote-box'>";
    $output .= "<p class='dqp-quote-text'>" . $random_quote . "</p>";
    $output .= "</div>";

    return $output;
}
add_shortcode('dynamic_quote', 'dqp_display_quote');

// Enqueue CSS
function dqp_add_styles() {
    wp_enqueue_style('dqp-style', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'dqp_add_styles');