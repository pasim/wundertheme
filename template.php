<?php
/**
 * Created by JetBrains PhpStorm.
 * User: frankbaele
 * Date: 29/08/12
 * Time: 20:53
 * To change this template use File | Settings | File Templates.
 */
function soupkitchen_js_alter($js_files){
  $js_files['sites/all/themes/soupkitchen/javascripts/soupkitchen.js']['scope'] = 'footer';
}