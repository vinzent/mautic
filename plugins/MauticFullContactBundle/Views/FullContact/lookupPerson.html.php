<?php

/*
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$attr = $form->vars['attr'];
?>
    <div class="alert alert-info">Click submit to lookup the information for:</div>
    <div style="margin-top: 10px">
        <ul class="list-group" style="max-height: 400px;overflow-y: auto">
            <?php
                echo '<li class="list-group-item">'.$email.'</li>';
            ?>
        </ul>
    </div>
<?php
echo $view['form']->form($form, ['attr' => $attr]);
