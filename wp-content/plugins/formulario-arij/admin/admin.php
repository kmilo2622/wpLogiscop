<?php
function arij_users_admin_page() {
    ?>
    <div>
        <h2>Hello World Options</h2>

        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options'); ?>

            <table width="510">
                <tr valign="top">
                    <th width="92" scope="row">Enter Text</th>
                    <td width="406">
                        <input name="hello_world_data" type="text" id="hello_world_data"
                        value="<?php echo get_option('hello_world_data'); ?>" />
                        (ex. Hello World)</td>
                    </tr>
                </table>

                <input type="hidden" name="action" value="update" />
                <input type="hidden" name="page_options" value="hello_world_data" />

                <p>
                    <input type="submit" value="<?php _e('Save Changes') ?>" />
                </p>

            </form>
        </div>
        <?php
    }
    ?>
