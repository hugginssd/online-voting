<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Welcome to Online Voting!</h4>
             <p>This system allows all registered users to vote for their favorite Presidential Canditate.</p>
             <p>
                Last, all you have to do is add your name and email address, so we can send you your admin link, 
                and then send it off to your guests or participants. You can add their email addresses in the box on the
                poll page or you can simply share the link as you like. In minutes you’ll have your responses and have 
                just used the Doodle online voting system. Pretty cool!
             </p>
        <hr>
            <p class="mb-0">In order to make a vote you have to register first and then login.</p>
    </div>
    <p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>
