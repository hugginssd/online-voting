<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_admin.php"; 
?>
<BR>
<center>
    <BR>
    <?php 
		include("connection.php");
		$rs = mysqli_query($con,"SELECT COUNT(*) AS 'VoteCount' FROM `voters` WHERE `status`='VOTED'");
                	while ($row = mysqli_fetch_object($rs)){
                        $max=$row->VoteCount;
                        ?>
                        
    <div class="form-group row">
        <div class="col-sm-3">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">VOTED</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo ''.$max.' '.'casted votes' ?></h5>
                    <?php } ?>
                    <p class="card-text">Voting is still under way. System monitoring is still recommended</p>
                </div>
            </div>
        </div>
        <?php 
		include("connection.php");
		$rsm = mysqli_query($con,"SELECT COUNT(*) AS 'VoteCount' FROM `voters` WHERE `status`='NOTVOTED'");
                	while ($rowm = mysqli_fetch_object($rsm)){
                        $min=$rowm->VoteCount;
                        ?>
                        
        <div class="col-sm-3">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">NOT VOTED</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo ''.$min.' '.'have not voted yet' ?></h5>
                    <?php } ?>
                    <p class="card-text">Registrations that haven't casted their votes.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">FAILED REGISTRATIONS</div>
                <div class="card-body">
                    <h5 class="card-title">0 Failed attempts</h5>
                    <p class="card-text">Failed attempts may be due to cyberattacking.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">LOGGED IN</div>
                <div class="card-body">
                    <h5 class="card-title">1 Logged in now</h5>
                    <p class="card-text">Logged in users, administration inclusive.</p>
                </div>
            </div>
        </div>
        
    </div>
</center>