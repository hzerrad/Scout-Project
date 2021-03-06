<!-- Sidebar -->
<div class="site-menubar">
        <div class="site-menubar-body">
          <div>
            <div>
              <ul class="site-menu">
                <br/>
                <!--the home sidebar item-->
                <li class="site-menu-item has-sub ">
                  <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">
                      <?php echo e(trans('app.dashboard')); ?>

                    </span>
                    <span class="site-menu-arrow"/>
                  </a>			  
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <router-link class="animsition-link" to="/hub"/>
                        <span class="site-menu-title"><?php echo e(trans('app.home')); ?></span>
                    </li>
                  </ul>
                       </li>
                  <!-- post space sidebar item-->
                  <li class="site-menu-item has-sub ">
                      <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                          <span class="site-menu-title"><?php echo e(trans('app.Publish')); ?></span>
                          <span class="site-menu-arrow"/>
                      </a>
                      <ul class="site-menu-sub">
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="/posts/new"/>
                              <span class="site-menu-title"><?php echo e(trans('app.post')); ?></span>
                          </li>
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="/events/new"/>
                              <span class="site-menu-title"><?php echo e(trans('app.event')); ?></span>
                          </li>
                      </ul>
                  </li>
                  <!--the forms sidebar item-->
                  <li class="site-menu-item has-sub ">
                      <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                          <span class="site-menu-title"><?php echo e(trans('app.add file')); ?></span>
                          <span class="site-menu-arrow"/>
                      </a>
                      <ul class="site-menu-sub">
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="/form"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.form')); ?></span>
                          </li>
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="/reports/create"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.repport')); ?></span>
                          </li>
                      </ul>
                  </li>
  

              <!-- posts menu -->
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-quote-right" aria-hidden="true"></i>
                    <span class="site-menu-title"><?php echo e(trans('app.Publish')); ?></span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">

                    <li class="site-menu-item">
                        <router-link class="animsition-link" to="/post"/>
                        <span class="site-menu-title"><?php echo e(trans('app.post')); ?></span>
                      </a>
                    </li>
                
                <li class="site-menu-item">
                        <router-link class="animsition-link" to="/events"/>
                        <span class="site-menu-title"><?php echo e(trans('app.event')); ?></span>
                      </a>
                    </li>
            

  
                </ul>
            </li>
                  <!--the Miscellaneous sidebar item-->
                  <li class="site-menu-item has-sub ">
                      <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                          <span class="site-menu-title"><?php echo e(trans('app.Miscellaneous')); ?></span>
                          <span class="site-menu-arrow"/>
                      </a>
                      <ul class="site-menu-sub">  <!--my posts sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="/myposts"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.my posts')); ?></span>
                          </li>
                      </ul>
                      <ul class="site-menu-sub">  <!--forum sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="/forum"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.forum')); ?></span>
                              </a>
                          </li>
                      </ul>
                      <ul class="site-menu-sub">  <!--recived repoorts sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="/reports/received"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.Received repports')); ?></span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!--the finance sidebar item-->
                  <li class="site-menu-item has-sub ">
                      <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                          <span class="site-menu-title"><?php echo e(trans('app.Finance')); ?></span>
                          <span class="site-menu-arrow"/>
                      </a>
                      <ul class="site-menu-sub">  <!--my posts sidebar item-->
                          <li class="site-menu-item">
                              <a class="animsition-link" href="<?php echo e(URL::to('/#')); ?>">
                                  <span class="site-menu-title"><?php echo e(trans('app.Financial report')); ?></span>
                              </a>
                          </li>
                      </ul>
                      <ul class="site-menu-sub">  <!--forum sidebar item-->
                          <li class="site-menu-item">
                              <a class="animsition-link" href="<?php echo e(URL::to('/#')); ?>">
                                  <span class="site-menu-title"><?php echo e(trans('app.money mangment')); ?></span>
                              </a>
                          </li>
                      </ul>
                      <ul class="site-menu-sub">  <!--forum sidebar item-->
                          <li class="site-menu-item">
                              <a class="animsition-link" href="<?php echo e(URL::to('/#')); ?>">
                                  <span class="site-menu-title"><?php echo e(trans('app.Equipment')); ?></span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- All scouts-->
                  <li class="site-menu-item has-sub ">
                      <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                          <span class="site-menu-title"><?php echo e(trans('app.scouts')); ?></span>
                          <span class="site-menu-arrow"/>
                      </a>
                      <ul class="site-menu-sub">  <!--my posts sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="scouts/cubs"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.cub')); ?></span>
                              </a>
                          </li>
                      </ul>
                      <ul class="site-menu-sub">  <!--forum sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="scouts/scoutboy"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.scoutboy')); ?></span>
                              </a>
                          </li>
                      </ul>
                      <ul class="site-menu-sub">  <!--forum sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="scouts/advancedscout"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.advanced_scout')); ?></span>
                              </a>
                          </li>
                      </ul>
                      <ul class="site-menu-sub">  <!--forum sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="scouts/traveler"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.traveler')); ?></span>
                              </a>
                          </li>
                      </ul>
                      <ul class="site-menu-sub">  <!--forum sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="scouts/captain"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.leader')); ?></span>
                              </a>
                          </li>
                      </ul>
                  </li>
             <!-- my scout menu -->
                  <li class="site-menu-item has-sub ">
                      <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                          <span class="site-menu-title"><?php echo e(trans('app.my scout')); ?></span>
                          <span class="site-menu-arrow"/>
                      </a>
                      <ul class="site-menu-sub">  <!--my posts sidebar item-->
                          <li class="site-menu-item">
                              <router-link class="animsition-link" to="/my_scout"/>
                                  <span class="site-menu-title"><?php echo e(trans('app.captins')); ?></span>
                          </li>
                      </ul>
                  </li>

                    </li>
                  </ul><!-- Message  menu -->
                         <?php if (\Entrust::can('message.messages')) : ?>
                  <li class="site-menu-item has-sub <?php echo e(Request::is('message') ? 'active open' : ''); ?>">
                      <a href="javascript:void(0)">
                          <i class="site-menu-icon fa fa-envelope-o" aria-hidden="true"></i>
                          <span class="site-menu-title">
                        <?php echo e(trans('app.messages')); ?>

                     </span>
                          <span class="site-menu-arrow"></span>
                      </a>
                      <ul class="site-menu-sub">
                          <li class="site-menu-item <?php echo e(Request::is('message') ? 'active' : ''); ?>">
                              <a class="animsition-link" href="<?php echo e(URL::to('/message')); ?>">
                        <span class="site-menu-title">
                          <?php echo e(trans('app.messages')); ?>

                        </span>
                              </a>
              </li>
                  <?php endif; // Entrust::can ?>
            <!-- Settings  menu -->
            </ul>
          </div>
        </div>
      </div>
  
  
      <div class="site-menubar-footer">
           <a href="<?php echo e(URL::to('profileEdit')); ?>" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo e(trans('app.edit_profile')); ?>">
            <i class="icon wb-pencil" aria-hidden="true"></i>
          </a>
         <?php if(Auth::user()->hasRole('gov')): ?>
           <a href="<?php echo e(URL::to('settings')); ?>" class="fold-show" data-placement="top" data-toggle="tooltip"
            data-original-title="<?php echo e(trans('app.settings')); ?>">
            <span class="icon wb-settings" aria-hidden="true"></span>
          </a>
           <?php else: ?>
             <a class="fold-show" data-placement="top" data-toggle="tooltip"
              data-original-title="">
              &nbsp;
            </a>
           <?php endif; ?>
            <a href="<?php echo e(url('/logout')); ?>"
                       onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();" 
                 data-placement="top" data-toggle="tooltip" 
                 data-original-title="<?php echo e(trans('app.logout')); ?>">
                       <span class="icon wb-power" aria-hidden="true"></span>
                </a>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                     <?php echo e(csrf_field()); ?>

                </form>
      </div>

    <li class="site-menu-item <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
        <a class="animsition-link" href="<?php echo e(URL::to('/dashboard')); ?>">
            <span class="site-menu-title"><?php echo e(trans('app.home')); ?></span>
        </a>
    </li>
    </div> <!--End of Sidebar -->