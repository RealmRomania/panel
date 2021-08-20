<?php
if($actiune['actionID'] == 1): {
    echo '
    <div class="avatar bg rounded">
    <div class="avatar-content">
    <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
    </div>';
}
elseif($actiune['actionID'] == 2): {
    echo '<div class="avatar bg-light-success rounded">
    <div class="avatar-content">
        <i data-feather="check" class="avatar-icon font-medium-3"></i>
    </div>';
}
endif;
?>