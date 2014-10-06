<div id="lfapps-general-metabox-holder" class="metabox-holder clearfix">
    <?php wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false);
    wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false);
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            jQuery('.if-js-closed').removeClass('if-js-closed').addClass('closed');
            if (typeof postboxes !== 'undefined')
                postboxes.add_postbox_toggles('plugins_page_livefyre_blog');
        });
    </script>    
    <div class="postbox-container postbox-large">
        <div id="normal-sortables" class="meta-box-sortables ui-sortable">
            <div id="referrers" class="postbox ">
                <div class="handlediv" title="Click to toggle"><br></div>
                <h3 class="hndle"><span><?php esc_html_e('LiveBlog Usage', 'lfapps-blog'); ?></span></h3>
                <div class='inside'>
                    <p>LiveBlog can be activated by placing a shortcode inside your content.</p>
                    <p>The shortcode usage is pretty simple. Let's say we wish to generate a LiveBlog inside post content. We could enter something like this
                        inside the content editor:</p>
                    <p class='code'>[liveblog]</p>
                    <p>LiveBlog streams are separated by the "Article ID" and if not specified it will use the current post ID. You can define the "Article ID"
                        manually like this:</p>
                    <p class='code'>[liveblog article_id="123"]</p>
                </div> 
            </div>
        </div>
    </div>     
</div>