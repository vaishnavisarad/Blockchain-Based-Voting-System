 <?php 
    $VoteId = $_GET['id'];
    $selVote = $conn->query("SELECT * FROM Vote_tbl WHERE ex_id='$VoteId' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="app-main__outer">
<div class="app-main__inner">
    <div id="refreshData">
            
    <div class="col-md-12">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <?php echo $selVote['ex_title']; ?>
                          <div class="page-title-subheading">
                            <?php echo $selVote['ex_description']; ?>
                          </div>

                    </div>
                </div>
            </div>
        </div>  
        <div class="row col-md-12">
        	<h1 class="text-primary">RESULT'S</h1>
        </div>

        <div class="row col-md-12 float-left">
        	<div class="main-card mb-12 card" style="width:100%;">
                <div class="card-body">
                	<h5 class="card-title">Your  Poll </h5>
                    
          
        			<table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                    <?php 
                    	$selQuest = $conn->query("SELECT * FROM Vote_question_tbl eqt INNER JOIN Vote_answers ea ON eqt.eqt_id = ea.quest_id WHERE eqt.Vote_id='$VoteId' AND ea.axmne_id='$exmneId' AND ea.exans_status='new' ");
                    	$i = 1;
                    	while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                    		<tr>
                    			<td>
                    				<b><p><?php echo $i++; ?> .) <?php echo $selQuestRow['Vote_question']; ?></p></b>
                    				<label class="pl-4 text-success">
                    					Your Selected Poll : 
                    					<?php 
                    						if($selQuestRow['Vote_answer'] != $selQuestRow['exans_answer'])
                    						{ ?>
                    							<span class="text-success"><?php echo $selQuestRow['exans_answer']; ?></span>
                    						<?PHP }
                    						else
                    						{ ?>
                    							<span class="text-success"><?php echo $selQuestRow['exans_answer']; ?></span>
                    						<?php }
                    					 ?>
                    				</label>
                    			</td>
                    		</tr>
                    	<?php }
                     ?>
	                 </table>




<hr />                     
            <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                    <?php 
	$selQuest = $conn->query("SELECT COUNT(*) as a FROM Vote_attempt WHERE Vote_id='$VoteId'");
                    	
                    	while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) {
							 $axme=$selQuestRow['a'];
						}
                    	$selQuest = $conn->query("SELECT * FROM Vote_question_tbl WHERE Vote_id='$VoteId'");
                    	$i = 1;
                    	while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { 
						$Vote_ch1=$selQuestRow['Vote_ch1'];
						$Vote_ch2=$selQuestRow['Vote_ch2'];
						$Vote_ch3=$selQuestRow['Vote_ch3'];
						$Vote_ch4=$selQuestRow['Vote_ch4'];
						
						?>
                        
                    		<tr>
                    			<td>
                    				<b><p><?php echo $i++; ?> .) <?php echo $selQuestRow['Vote_question'];  ?></p></b>
                    				<label class="pl-4 text-success" style="width:100%;">
                    					
                    					<br />
                    					<?php
						$selQuest1 = $conn->query("SELECT COUNT(*) as a FROM Vote_answers WHERE Vote_id='$VoteId' AND exans_answer='$Vote_ch1'");
                    
                    	while ($selQuestRow1 = $selQuest1->fetch(PDO::FETCH_ASSOC)) { 
										echo "Poll 1: ";echo $Vote_ch1; echo " Total Vote: "; echo  $selQuestRow1['a']; echo "<br>";
										?>
                                        <div class="slidecontainer">  
 
  <input type="range" min="1" style="width:100%;" max="<?php  echo  $axme; ?>" value="<?php  echo  $selQuestRow1['a']; ?>" class="slider" id="myRange">
</div><br><br>
                                        <?php
						}
						
						$selQuest1 = $conn->query("SELECT COUNT(*) as a FROM Vote_answers WHERE Vote_id='$VoteId' AND exans_answer='$Vote_ch2'");
                    
                    	while ($selQuestRow1 = $selQuest1->fetch(PDO::FETCH_ASSOC)) { 
										echo "Poll 2: ";echo $Vote_ch2; echo " Total Vote: "; echo   $selQuestRow1['a']; echo "<br>";
											?>
                                        <div class="slidecontainer">  

  <input type="range" min="1"  style="width:100%;" max="<?php  echo  $axme; ?>" value="<?php  echo  $selQuestRow1['a']; ?>" class="slider" id="myRange">
</div><br><br>
                                        <?php
						}
						
						
						$selQuest1 = $conn->query("SELECT COUNT(*) as a FROM Vote_answers WHERE Vote_id='$VoteId' AND exans_answer='$Vote_ch3'");
                    
                    	while ($selQuestRow1 = $selQuest1->fetch(PDO::FETCH_ASSOC)) { 
										echo "Poll 3: ";echo $Vote_ch3;  echo " Total Vote: "; echo $selQuestRow1['a']; echo "<br>";
											?>
                                        <div class="slidecontainer">  
 
  <input type="range" min="1"  style="width:100%;" max="<?php  echo  $axme; ?>" value="<?php  echo  $selQuestRow1['a']; ?>" class="slider" id="myRange">
</div><br><br>
                                        <?php
										
						}
						
						$selQuest1 = $conn->query("SELECT COUNT(*) as a FROM Vote_answers WHERE Vote_id='$VoteId' AND exans_answer='$Vote_ch4'");
                    
                    	while ($selQuestRow1 = $selQuest1->fetch(PDO::FETCH_ASSOC)) { 
										echo "Poll 4: ";echo $Vote_ch4;   echo " Total Vote: "; echo $selQuestRow1['a']; echo "<br>";
											?>
                                        <div class="slidecontainer">  

  <input type="range" min="1"  style="width:100%;" max="<?php  echo  $axme; ?>" value="<?php  echo  $selQuestRow1['a']; ?>" class="slider" id="myRange">
</div><br><br>
                                        <?php
										
						}
						
						
						
                    						
                    					 ?>
                    				</label>
                    			</td>
                    		</tr>
                    	<?php }
                     ?>
	                 </table>         
                     
                </div>
            </div>
        </div>

        
    </div>


    </div>
</div>
