<?php
/**
Add slide code.
**/
add_action( 'wp_head', 'supportnine_slide_banner' );
function supportnine_slide_banner() {
    // Prepare site name.
    $sitename = strtolower( str_replace( ' ', '-', get_bloginfo( 'name' ) ) ) . '-cookie'; ?>
    <div class="supportnine-slide-banner slide-down" data-name="<?php echo urlencode( $sitename ); ?>">
        <div class="supportnine-header">
            <span>×</span>
        </div>
        <div class="supportnine-body">
            <p><strong>We chose a different approach. Will you support it?</strong> Unlike liberal news organizations, we made a choice to keep all of our independent, investigative reporting open for everyone. We believe each American deserves access to accurate information with integrity at its heart. At a time when fake news and Leftwing censorship threatens free speech, support from our readers is paramount in safeguarding our editorial independence. This is our model for open, real, truthful journalism. <span><strong>If you're able to, please support us today from as little as $1.</strong></span></p>
        </div>
        <div class="supportnine-footer">
            <a href="https://www.gofundme.com/f/save-conservative-news" class="supportnine-button" target="_blank">Support Us →</a><img class="supportnine-cc" src="<?php echo SUPPORTNINE_BASE_URI . 'assets/credit-card-icons.png'; ?>" alt="Credit Cards" />
        </div>
    </div><?php
}

/**
Enqueue our CSS & JS.
**/
add_action( 'wp_enqueue_scripts', 'supportnine_enqueue' );
function supportnine_enqueue() {

    // Get version.
    global $wp_version;

    // CSS.
    wp_enqueue_style( 'supportnine-css', SUPPORTNINE_BASE_URI . 'assets/support.css', array(), $wp_version );

    // JS.
    wp_enqueue_script( 'supportnine-js', SUPPORTNINE_BASE_URI . 'assets/support.js', array( 'jquery' ), $wp_version, true );

}

/**
Disable Gutenberg
**/
add_filter( 'use_block_editor_for_post', '__return_false', 10 );
