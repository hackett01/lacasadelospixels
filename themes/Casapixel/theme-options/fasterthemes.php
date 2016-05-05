<?php

function fasterthemes_options_init() {
    register_setting('ft_options', 'faster_theme_options', 'ft_options_validate');
}

add_action('admin_init', 'fasterthemes_options_init');

function ft_options_validate($input) {
    $input['logo'] = esc_url($input['logo']);
    $input['logofooter'] = esc_url($input['logofooter']);
    $input['favicon'] = esc_url($input['favicon']);
    $input['footertext'] = wp_filter_nohtml_kses($input['footertext']);
    $input['email'] = wp_filter_nohtml_kses($input['email']);
    $input['phone'] = wp_filter_nohtml_kses($input['phone']);
    $input['copy'] = wp_filter_nohtml_kses($input['copy']);
    $input['home-title'] = wp_filter_nohtml_kses($input['home-title']);
    $input['home-content'] = wp_filter_nohtml_kses($input['home-content']);
    $input['post-title'] = wp_filter_nohtml_kses($input['post-title']);

    $input['twitter'] = esc_url($input['twitter']);
    $input['fburl'] = esc_url($input['fburl']);
    $input['dribbble'] = esc_url($input['dribbble']);
    $input['linkedin'] = esc_url($input['linkedin']);
    $input['rss'] = esc_url($input['rss']);

    for ($generator_i = 1; $generator_i <= 5; $generator_i++):
        $input['slider-img-' . $generator_i] = esc_url($input['slider-img-' . $generator_i]);
        $input['slidelink-' . $generator_i] = esc_url($input['slidelink-' . $generator_i]);
    endfor;

    for ($generator_section_i = 1; $generator_section_i <= 4; $generator_section_i++):
        $input['home-icon-' . $generator_section_i] = esc_url($input['home-icon-' . $generator_section_i]);
        $input['section-title-' . $generator_section_i] = wp_filter_nohtml_kses($input['section-title-' . $generator_section_i]);
        $input['section-content-' . $generator_section_i] = wp_filter_nohtml_kses($input['section-content-' . $generator_section_i]);
    endfor;
    return $input;
}

function fasterthemes_framework_load_scripts() {
    wp_enqueue_media();
    wp_enqueue_style('fasterthemes_framework', get_template_directory_uri() . '/theme-options/css/fasterthemes_framework.css', false, '1.0.0');
    wp_enqueue_style('fasterthemes_framework');
    // Enqueue custom option panel JS
    wp_enqueue_script('options-custom', get_template_directory_uri() . '/theme-options/js/fasterthemes-custom.js', array('jquery'));
    wp_enqueue_script('media-uploader', get_template_directory_uri() . '/theme-options/js/media-uploader.js', array('jquery'));
    wp_enqueue_script('media-uploader');
}

add_action('admin_enqueue_scripts', 'fasterthemes_framework_load_scripts');

function fasterthemes_framework_menu_settings() {
    $generator_menu = array(
        'page_title' => __('FasterThemes Options', 'generator'),
        'menu_title' => __('Theme Options', 'generator'),
        'capability' => 'edit_theme_options',
        'menu_slug' => 'fasterthemes_framework',
        'callback' => 'fastertheme_framework_page'
    );
    return apply_filters('fasterthemes_framework_menu', $generator_menu);
}

add_action('admin_menu', 'theme_options_add_page');

function theme_options_add_page() {
    $generator_menu = fasterthemes_framework_menu_settings();
    add_theme_page($generator_menu['page_title'], $generator_menu['menu_title'], $generator_menu['capability'], $generator_menu['menu_slug'], $generator_menu['callback']);
}

function fastertheme_framework_page() {
    global $select_options;
    if (!isset($_REQUEST['settings-updated']))
        $_REQUEST['settings-updated'] = false;
    ?>
    <div class="fasterthemes-themes">
        <form method="post" action="options.php" id="form-option" class="theme_option_ft">
            <div class="fasterthemes-header">
                <div class="logo">
                    <?php
                    $generator_image = get_template_directory_uri() . '/theme-options/images/logo-white.svg';
                    echo "<a href='http://lacasadelospixeles.com/' target='_blank'><img src='" . $generator_image . "' alt='FasterThemes' /></a>";
                    ?>
                </div>
                <div class="header-right">
                    <h1><?php _e('Opciones del tema', 'generator') ?></h1>
                    <div class='btn-save'><input type='submit' class='button-primary' value='<?php _e('Save Options', 'generator') ?>' />
                    </div>
                </div>
            </div>
            <div class="fasterthemes-details">
                <div class="fasterthemes-options">
                    <div class="right-box">
                        <div class="nav-tab-wrapper">
                            <ul>
                                <li><a id="options-group-1-tab" class="nav-tab basicsettings-tab" title="Basic Settings" href="#options-group-1"><?php _e('Basic Settings', 'generator') ?></a></li>
                                <li><a id="options-group-3-tab" class="nav-tab socialsettings-tab" title="Social Settings" href="#options-group-3"><?php _e('Social Settings', 'generator') ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-box-bg"></div>
                    <div class="postbox left-box"> 
                        <!--======================== F I N A L - - T H E M E - - O P T I O N ===================-->
                        <?php
                        settings_fields('ft_options');
                        $generator_options = get_option('faster_theme_options');
                        ?>

                        <!-------------- Header group ----------------->
                        <div id="options-group-1" class="group faster-inner-tabs">   

                            <div class="section theme-tabs theme-logo">
                                <a class="heading faster-inner-tab active" href="javascript:void(0)"><?php _e('Site header Logos', 'generator') ?></a>
                                <div class="faster-inner-tab-group active">
                                    <div class="ft-control">
                                        <input id="logo-img" class="upload" type="text" name="faster_theme_options[logo]" 
                                               value="<?php
                                               if (!empty($generator_options['logo'])) {
                                                   echo esc_url($generator_options['logo']);
                                               }
                                               ?>" placeholder="<?php _e('No file chosen', 'generator') ?>" />
                                        <input id="upload_image_button" class="upload-button button" type="button" value="<?php _e('Upload', 'generator') ?>" />
                                        <div class="screenshot" id="logo-image">
                                            <?php if (!empty($generator_options['logo'])) { ?>
                                                <img src="<?php esc_url($generator_options['logo']) ?>"/>
                                                <a class='remove-image'><?php _e('Remove', 'generator') ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            <div class="section theme-tabs theme-favicon">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Favicon', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="explain"><?php _e('Size of favicon should be exactly 32x32px for best results.', 'generator') ?></div>
                                    <div class="ft-control">
                                        <input id="favicon-img" class="upload" type="text" name="faster_theme_options[favicon]" 
                                               value="<?php
                                               if (!empty($generator_options['favicon'])) {
                                                   echo esc_url($generator_options['favicon']);
                                               }
                                               ?>" placeholder="<?php _e('No file chosen', 'generator') ?>" />
                                        <input id="upload_image_button1" class="upload-button button" type="button" value="<?php _e('Upload', 'generator') ?>" />
                                        <div class="screenshot" id="favicon-image">
                                            <?php if (!empty($generator_options['favicon'])) { ?>
                                                <img src="<?php esc_url($generator_options['favicon']) ?>"/>
                                                <a class='remove-image'><?php _e('Remove', 'generator') ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>     
                            <div id="section-footertext" class="section theme-tabs">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Direccion', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('Some text regarding copyright of your site, you would like to display in the footer.', 'generator') ?></div>                
                                        <input type="text" id="footertext" class="of-input" name="faster_theme_options[footertext]" size="32"  value="<?php
                                        if (!empty($generator_options['footertext'])) {
                                            echo esc_attr($generator_options['footertext']);
                                        }
                                        ?>">
                                    </div>                
                                </div>
                            </div>
                            
                               <div id="section-footertext" class="section theme-tabs">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Copyright Text', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('Some text regarding copyright of your site, you would like to display in the footer.', 'generator') ?></div>                
                                        <input type="text" id="footertext" class="of-input" name="faster_theme_options[copy]" size="32"  value="<?php
                                        if (!empty($generator_options['copy'])) {
                                            echo esc_attr($generator_options['copy']);
                                        }
                                        ?>">
                                    </div>                
                                </div>
                            </div>


                            
                          
                           
                            
                           
                            <div id="section-email" class="section theme-tabs">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Email', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('Enter e-mail id for your site , you would like to display in the Top Header.', 'generator') ?></div>                
                                        <input type="text" id="email" class="of-input" name="faster_theme_options[email]" size="32"  value="<?php
                                        if (!empty($generator_options['email'])) {
                                            echo esc_attr($generator_options['email']);
                                        }
                                        ?>">
                                    </div>                
                                </div>
                            </div>

                            <div id="section-phone" class="section theme-tabs">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Phone', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('Enter phone number for your site , you would like to display in the Top Header.', 'generator') ?></div>                
                                        <input type="text" id="phone" class="of-input" name="faster_theme_options[phone]" size="32"  value="<?php
                                        if (!empty($generator_options['phone'])) {
                                            echo esc_attr($generator_options['phone']);
                                        }
                                        ?>">
                                    </div>                
                                </div>
                            </div>

                        </div>          

                        <!-------------- Social group ----------------->
                        <div id="options-group-3" class="group faster-inner-tabs">            
                            <div id="section-facebook" class="section theme-tabs">
                                <a class="heading faster-inner-tab active" href="javascript:void(0)"><?php _e('Facebook', 'generator') ?></a>
                                <div class="faster-inner-tab-group active">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('Facebook profile or page URL ', 'generator') ?>i.e. http://facebook.com/username/ </div>                
                                        <input id="facebook" class="of-input" name="faster_theme_options[fburl]" size="30" type="text" value="<?php
                                        if (!empty($generator_options['fburl'])) {
                                            echo esc_url($generator_options['fburl']);
                                        }
                                        ?>" />
                                    </div>                
                                </div>
                            </div>
                            <div id="section-twitter" class="section theme-tabs">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Twitter', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('Twitter profile or page URL i.e. ', 'generator') ?>http://www.twitter.com/username/</div>                
                                        <input id="twitter" class="of-input" name="faster_theme_options[twitter]" type="text" size="30" value="<?php
                                        if (!empty($generator_options['twitter'])) {
                                            echo esc_url($generator_options['twitter']);
                                        }
                                        ?>" />
                                    </div>                
                                </div>
                            </div>
                            <div id="section-dribbble" class="section theme-tabs">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Dribbble', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('Dribbble profile or page URL i.e.', 'generator') ?> https://dribbble.com/username/</div>                
                                        <input id="dribbble" class="of-input" name="faster_theme_options[dribbble]" type="text" size="30" value="<?php
                                        if (!empty($generator_options['dribbble'])) {
                                            echo esc_url($generator_options['dribbble']);
                                        }
                                        ?>" />
                                    </div>                
                                </div>
                            </div>

                            <div id="section-linkedin" class="section theme-tabs">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Linkedin', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('Linkedin profile or page URL i.e. ', 'generator') ?> https://linkedin.com/username/</div>                
                                        <input id="linkedin" class="of-input" name="faster_theme_options[linkedin]" type="text" size="30" value="<?php
                                        if (!empty($generator_options['linkedin'])) {
                                            echo esc_url($generator_options['linkedin']);
                                        }
                                        ?>" />
                                    </div>                
                                </div>
                            </div>
                            <div id="section-rss" class="section theme-tabs">
                                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('RSS', 'generator') ?></a>
                                <div class="faster-inner-tab-group">
                                    <div class="ft-control">
                                        <div class="explain"><?php _e('RSS profile or page URL i.e. ', 'generator') ?> https://www.rss.com/username/</div>                
                                        <input id="rss" class="of-input" name="faster_theme_options[rss]" type="text" size="30" value="<?php
                                        if (!empty($generator_options['rss'])) {
                                            echo esc_url($generator_options['rss']);
                                        }
                                        ?>" />
                                    </div>                
                                </div>
                            </div>

                        </div>
                        <!-------------- Social group ----------------->          

                        <!--======================== F I N A L - - T H E M E - - O P T I O N S ===================--> 
                    </div>
                </div>
            </div>
            <div class="fasterthemes-footer">
                <ul>
                    <li>&copy; <a href="http://lacasadelospixeles.com/" target="_blank"><?php _e('lacasadelospixeles.com', 'generator') ?></a></li>
                    <li><a href="https://www.facebook.com/CasadePixeles" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/theme-options/images/fb.png"/> </a></li>
                    <li><a href="https://twitter.com/lacasadepixeles" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/theme-options/images/tw.png"/> </a></li>
                    <li class="btn-save"><input type="submit" class="button-primary" value="<?php _e('Save Options', 'generator') ?>" /></li>
                </ul>
            </div>
        </form>    
    </div>
    <div class="save-options"><h2><?php _e('Options saved successfully', 'generator') ?>.</h2></div>

<?php } ?>
