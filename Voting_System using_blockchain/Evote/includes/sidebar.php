<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

         
                <li class="app-sidebar__heading">AVAILABLE VOTING'S LIST</li>
                <li>
                <a href="#">
                     <i class="metismenu-icon pe-7s-display2"></i>
                     All Voting Available
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul >
                    <?php 
                        
                        if($selVote->rowCount() > 0)
                        {
                            while ($selVoteRow = $selVote->fetch(PDO::FETCH_ASSOC)) { ?>
                                 <li>
        <a href="#" id="startQuiz" data-id="<?php echo $selVoteRow['ex_id']; ?>"  >
                                    <?php 
                                        $lenthOfTxt = strlen($selVoteRow['ex_title']);
                                        if($lenthOfTxt >= 23)
                                        { ?>
                                            <?php echo substr($selVoteRow['ex_title'], 0, 20);?>.....
                                        <?php }
                                        else
                                        {
                                            echo $selVoteRow['ex_title'];
                                        }
                                     ?>
                                 </a>
                                 </li>
                            <?php }
                        }
                        else
                        { ?>
                            <a href="#">
                                <i class="metismenu-icon"></i>No Voting Option @ the moment
                            </a>
                        <?php }
                     ?>


                </ul>
                </li>

                 <li class="app-sidebar__heading">TAKEN VOTING'S </li>
                <li>
                  <?php 
                    $selTakenVote = $conn->query("SELECT * FROM Vote_tbl et INNER JOIN Vote_attempt ea ON et.ex_id = ea.Vote_id WHERE exmne_id='$exmneId' ORDER BY ea.Voteat_id  ");

                    if($selTakenVote->rowCount() > 0)
                    {
                        while ($selTakenVoteRow = $selTakenVote->fetch(PDO::FETCH_ASSOC)) { ?>
                            <a href="home.php?page=result&id=<?php echo $selTakenVoteRow['ex_id']; ?>" >
                               
                                <?php echo $selTakenVoteRow['ex_title']; ?>
                            </a>
                        <?php }
                    }
                    else
                    { ?>
                        <a href="#" class="pl-3">You are not taking Vote yet</a>
                    <?php }
                    
                   ?>

                    
                </li>


                
                
            </ul>
        </div>
    </div>
</div>  