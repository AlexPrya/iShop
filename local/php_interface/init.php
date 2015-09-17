<?php
function _show_array($mPrintVar) {
    echo '<pre style="font-size:11px; margin:0 0 15px 0; padding:5px; color:#000000 !important; background-color:#ededed; text-align:left !important;">'.htmlspecialchars(print_r($mPrintVar, true)).'</pre>';
}
