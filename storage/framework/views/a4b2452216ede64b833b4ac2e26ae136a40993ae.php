<?php $__env->startSection('content'); ?>
<div class="container">

    

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e(Auth::user()->name); ?>'s Account Summary</div>

                <div class="panel-body">
                    <div class="col-md-4 col-sm-4 col-xs-10 ">
                        <img src="uploads/avatar.png" style="height:150px; width:150px;" class="img-responsive">
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-6" style="">
                        <ul class="iqlist">
                            <li><i class="fa fa-user-o" aria-hidden="true"></i> : <?php echo e(Auth::user()->name); ?></li>
                            <li><i class="fa fa-at" aria-hidden="true"></i> : <?php echo e(Auth::user()->email); ?></li>
                            <li><i class="fa fa-address-card-o" aria-hidden="true"></i> : Position</li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-6" style="">
                        <ul class="iqlist">
                            <li>Account settings</li>
                            <li>Full profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e(Auth::user()->name); ?>'s Work shit</div>

                <div class="panel-body">
                    <strong>Timesheets and stuff go here</strong>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>