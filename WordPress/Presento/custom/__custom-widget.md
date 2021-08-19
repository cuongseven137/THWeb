## CÁC BƯỚC PHÁT TRIỂN CUSTOM WIDGET

https://www.wp-hasty.com/tools/wordpress-widget-generator/ 


https://www.inkthemes.com/create-wordpress-custom-widget/
https://www.wpbeginner.com/wp-tutorials/how-to-create-a-custom-wordpress-widget/
https://www.wpexplorer.com/create-widget-plugin-wordpress/ 
https://www.hostinger.com/tutorials/how-to-create-custom-widget-in-wordpress 


**Bước 1** - Tạo cấu trúc Plugin định nghĩa Widget


**Bước 2** - Định nghĩa tên Widget


**Bước 3** - Thêm chức năng cho Widget phần Backend
    - Tạo form cho phần backend (view)
    - Tạo hàm form($instance)

    <?php

    // widget form creation

    function form($instance) {

        // Check values
        if( $instance) {
                $title = esc_attr($instance[‘title’]);
                $textarea = $instance[‘textarea’];
            } else {
                $title = ”;
                $textarea = ”;
        }
        ?>

        <p>
            <label for=”<?php echo $this->get_field_id(‘title’); ?>”><?php _e(‘Title’, ‘wp_widget_plugin’); ?></label>
            <input class=”widefat” id=”<?php echo $this->get_field_id(‘title’); ?>” name=”<?php echo $this->get_field_name(‘title’); ?>” type=”text” value=”<?php echo $title; ?>” />
            </p>
            <p>
            <label for=”<?php echo $this->get_field_id(‘textarea’); ?>”><?php _e(‘Description:’, ‘wp_widget_plugin’); ?></label>
            <textarea class=”widefat” id=”<?php echo $this->get_field_id(‘textarea’); ?>” name=”<?php echo $this->get_field_name(‘textarea’); ?>” rows=”7″ cols=”20″ ><?php echo $textarea; ?></textarea>
        </p>
    <?php
    }

    ?>

**Bước 4** - Cập nhật dữ liệu khi save trong Backend
    - Tạo chức năng update cấu hình Backend Widget
    - Tạo hàm update($instance, $old_instance)
        <?php

        function update($new_instance, $old_instance) {
            $instance = $old_instance;

            // Fields
            $instance[‘title’] = strip_tags($new_instance[‘title’]);
            $instance[‘textarea’] = strip_tags($new_instance[‘textarea’]);
            return $instance;
        }

        ?>

**Bước 5** - Hiển thị Widget ra front-end
    - $args => Các tham số của Widget
    - $instance => thể hiện của biến variable
    - $before_widget => HTML đặt trước widget

    <?php
        // display widget
        function widget($args, $instance) {
            extract( $args );

            // these are the widget options
            $title = apply_filters(‘widget_title’, $instance[‘title’]);
            $textarea = $instance[‘textarea’];
            echo $before_widget;

            // Display the widget
            echo ‘<div class=”widget-text wp_widget_plugin_box” style=”width:269px; padding:5px 9px 20px 5px; border: 1px solid rgb(231, 15, 52); background: pink; border-radius: 5px; margin: 10px 0 25px 0;”>’;
            echo ‘<div class=”widget-title” style=”width: 90%; height:30px; margin-left:3%; “>’;

            // Check if title is set
            if ( $title ) {
                echo $before_title . $title . $after_title ;
            }
            echo ‘</div>’;

            // Check if textarea is set
            echo ‘<div class=”widget-textarea” style=”width: 90%; margin-left:3%; padding:8px; background-color: white; border-radius: 3px; min-height: 70px;”>’;

            if( $textarea ) {
                echo ‘<p class=”wp_widget_plugin_textarea” style=”font-size:15px;”>’.$textarea.'</p>’;
            }
                echo ‘</div>’;
                echo ‘</div>’;
                echo $after_widget;
            }
        }

    ?>

**Bước 6** - Đăng ký Widget với WordPress
    <?php

        // register widget
        add_action(‘widgets_init’, create_function(”, ‘return register_widget(“my_plugin”);’));

    ?>