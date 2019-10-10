<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
    <center><BR>
        <div class="form-group row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/emmerson.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Emmerson D. Mnangagwa</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Zanu PF</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lan" id="exampleRadios1" value="Emmerson Dambudzo">
                            <label class="form-check-label" for="exampleRadios1">
                                Click to vote
                            </label>
                    </div>
                        
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <!-- <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/mujuru.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Joyce Teurai Ropa Mujuru</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lan" id="exampleRadios1" value=".net">
                            <label class="form-check-label" for="exampleRadios1">
                                Click to vote
                            </label>
                    </div>
                        
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> -->
            </div>

            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/nkosana.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dr Nkosana Moyo</h5>
                        <h6 class="card-subtitle mb-2 text-muted">PPD</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lan" id="exampleRadios1" value="Nkosana Moyo">
                            <label class="form-check-label" for="exampleRadios1">
                                Click to vote
                            </label>
                    </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/nelson.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Advocate Nelson Chamisa</h5>
                        <h6 class="card-subtitle mb-2 text-muted">MDC-T</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lan" id="exampleRadios1" value="Nelson Chamisa">
                            <label class="form-check-label" for="exampleRadios1">
                                Click to vote
                            </label>
                    </div>
                        
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/muteki.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Brian Taurai Mteki</h5>
                        <h6 class="card-subtitle mb-2 text-muted">People's Party</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lan" id="exampleRadios1" value="Brian Mteki">
                            <label class="form-check-label" for="exampleRadios1">
                                Click to vote
                            </label>
                    </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center>
    <button type="submit" class="btn btn-primary" value="" name="submit">SUBMIT VOTE</button>
</center>
</form>
