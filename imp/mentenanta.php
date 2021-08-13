<?php 
include_once('db.php');
include('foreaches.php');

?>

<?php 
if($panel['mentenanta'] == 1): ?>



<div class="alert alert-info" role="alert">
                                            <div class="alert-body">
                                                <i data-feather="info"></i>
                                                <span> Există o mentenanță în desfășurare.</span>
                                            </div>
                                        </div>
                                    </div>


                                    <?php endif; ?>