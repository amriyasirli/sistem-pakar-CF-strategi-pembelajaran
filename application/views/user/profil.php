<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title"><?= $title?></h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="<?= base_url('Beranda') ?>">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url($title) ?>"><?= $title?></a>
                    </li>
                </ul>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    
                            
                        <!-- ################# FORM CREATE ################### -->
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="card card-profile">
                                    <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                                        <div class="profile-picture">
                                            <div class="avatar avatar-xl">
                                                <img src="<?= base_url('assets/img/user/'. $user->foto)?>" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="user-profile text-center">
                                            <div class="name"><?= $user->nama ?></div>
                                            <div class="job"><?= $user->email ?></div>
                                        <!-- <?php if($this->session->userdata('role') == 1){ ?>

                                            <?php } else{ ?>
                                                <div class="job">Member</div>
                                            <?php }
                                        ?> -->
                                            <div class="desc">Terdaftar : <?= date('d F Y', $user->data_created) ?></div>
                                            <!-- <div class="social-media">
                                                <a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
                                                    <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                                                </a>
                                                <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                                                    <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
                                                </a>
                                                <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
                                                    <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                                                </a>
                                                <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                                                    <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
                                                </a>
                                            </div> -->
                                            <!-- <div class="view-profile">
                                                <a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- <div class="card-footer">
                                        <div class="row user-stats text-center">
                                            <div class="col">
                                                <div class="number">125</div>
                                                <div class="title">Post</div>
                                            </div>
                                            <div class="col">
                                                <div class="number">25K</div>
                                                <div class="title">Followers</div>
                                            </div>
                                            <div class="col">
                                                <div class="number">134</div>
                                                <div class="title">Following</div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        <h4 class="card-title">Nav Pills Without Border (Horizontal Tabs)</h4>
                                    </div> -->
                                    <div class="card-body">
                                        <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <!-- #################################################s -->

                        
                </div>
            </div>
        </div>
    </div>


