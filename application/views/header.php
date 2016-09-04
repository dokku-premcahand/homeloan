<header class="col-lg-12">
    <nav class="navbar navbar-inverse home-menu">
        <div class="container-fluid">
             <!--Brand and toggle get grouped for better mobile display--> 
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    Triad Realty Ventures
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if($header == 'logout'){
                ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">
                            My Account <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo ($active == 'profile') ? 'active' : ''; ?>">
                                <a href="<?php echo base_url('user/myProfile');?>">MY PROFILE</a>
                            </li>
                            <li class="<?php echo ($active == 'loan') ? 'active' : ''; ?>">
                                <a href="<?php echo base_url('user/loanOpportunity') ?>">LOAN OPPORTUNITY</a>
                            </li>
                            <?php
                                if($active == 'loanDetails'){
                            ?>
                                    <li class="active">
                                        <a href="">LOAN OPPORTUNITY DETAILS</a>
                                    </li>
                            <?php
                                }
                            ?>
                            <li class="<?php echo ($active == 'myLoan') ? 'active' : ''; ?>">
                                <a href="<?php echo base_url('user/myLoanList/'.$this->session->userdata('id')) ?>">
                                    MY LOAN LIST
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php
                    }
                    
                    if((!isset($page)) || (isset($page) && $page != 'login')){
                ?>
                    <li class="active">
                        <?php
                            if($header == 'login' || $header == ''){
                        ?>
                            <a href="<?php echo base_url('home/login'); ?>">Login&nbsp;<i class="glyphicon glyphicon-log-in" style="color: #ffffff;"></i></a>
                        <?php      
                            }else {
                        ?>
                            <a href="<?php echo base_url('home/logout'); ?>">Logout&nbsp;<i class="glyphicon glyphicon-log-out" style="color: #ffffff;"></i></a>
                        <?php
                            }
                        ?>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </nav>
</header>
<?php
    if(!isset($subHeader) || $subHeader != 1 || $subHeader == ''){
?>
    <!-- <header class="col-lg-offset-1 col-lg-10">
        <nav class="navbar navbar-default home-menubar">
            <div class="container-fluid">
                <ul class="nav navbar-nav col-lg-12">
                    <li class="">
                    <a href="">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">LEADERSHIP TEAM</a></li>
                    <li><a href="#">TESTIMONIAL</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            BROKER'S CORNER <span class="caret"></span>
                         </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div> 
        </nav>
    </header> -->
    <?php // echo ($active == 'home') ? 'active' : ''; ?>
<?php
    }
?>
