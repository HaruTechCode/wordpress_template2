<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
    <input type="hidden" value="works" name="post_type" />
    <br>

    <?php
        $work = get_posts(array(
            'post_type' => 'works',
            'posts_per_page' => 1,
        ))[0];

        $selected_field_types = $_GET['field_type'];

        $fields = get_field_objects($work->ID);
        foreach($fields as $field){
            echo '<label>';
                if($selected_field_types):
                    $checked = in_array($field['name'], $selected_field_types) ? 'checked' : null;
                else:
                    $checked = null;
                endif;

                $value = $field['name'];
                echo "<input class='visible-checkbox' type='checkbox' name='field_type[]' value='{$value}' {$checked}>";
                echo $field['label'];
            echo '</label>';
            echo '<br>';
        };
    ?>

	<input type="submit" class="search-submit"
		value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>