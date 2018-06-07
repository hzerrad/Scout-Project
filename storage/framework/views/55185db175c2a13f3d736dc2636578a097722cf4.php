<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/examples/css/structure/alerts.css">
<div class="page-header">
  <h1 class="page-title font_lato">Alerts </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">Alerts</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <!-- Example Simple -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">Simple</h4>
                <p>Add color contextual class.</p>
                <div class="alert alert-primary alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  NEWS : You have done 5 actions.
                </div>
                <div class="alert alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  INFO : You have 198 messages
                </div>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  SUCCESS : The page has been added.
                </div>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  DANGER : The daily report has failed
                </div>
                <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  WARNING : Bandwidth limit exceeded
                </div>
              </div>
            </div>
            <!-- End Example Simple -->
            <!-- Example Dark -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">Dark</h4>
                <p>Add <code>.dark</code> class to change the style.</p>
                <div class="alert dark alert-primary alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  NEWS : You have done 5 actions.
                </div>
                <div class="alert dark alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  INFO : You have 198 messages
                </div>
                <div class="alert dark alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  SUCCESS : The page has been added.
                </div>
                <div class="alert dark alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  DANGER : The daily report has failed
                </div>
                <div class="alert dark alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  WARNING : Bandwidth limit exceeded
                </div>
              </div>
            </div>
            <!-- End Example Dark -->
            <div class="clearfix visible-sm-block"></div>
            <!-- Example With Icon -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">With Icon</h4>
                <p>Add <code>.alert-icon</code> class.</p>
                <div class="alert dark alert-icon alert-primary alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon wb-bell" aria-hidden="true"></i> You have done
                  5 actions.
                </div>
                <div class="alert dark alert-icon alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon wb-info" aria-hidden="true"></i> You have 198
                  messages
                </div>
                <div class="alert dark alert-icon alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon wb-check" aria-hidden="true"></i> The page has
                  been added.
                </div>
                <div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon wb-close" aria-hidden="true"></i> The daily report
                  has failed
                </div>
                <div class="alert dark alert-icon alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon wb-alert" aria-hidden="true"></i> Bandwidth limit
                  exceeded
                </div>
              </div>
            </div>
            <!-- End Example With Icon -->
            <div class="clearfix visible-md-block visible-lg-block"></div>
            <!-- Example With Title -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">With Title</h4>
                <p>Add title.</p>
                <div role="alert" class="alert alert-success alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
                <div role="alert" class="alert dark alert-warning alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
                <div role="alert" class="alert dark alert-info alert-icon alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon wb-bell" aria-hidden="true"></i>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Example With Title -->
            <div class="clearfix visible-sm-block"></div>
            <!-- Example With Button -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">With Button</h4>
                <p>Add buttons.</p>
                <div class="alert alert-icon alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon wb-bell" aria-hidden="true"></i> You have done
                  5 actions.
                  <p class="margin-top-15">
                    <button class="btn btn-danger" type="button">Do this</button>
                    <button class="btn btn-link blue-grey-500" type="button">Or this</button>
                  </p>
                </div>
                <div role="alert" class="alert dark alert-primary alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                  <p class="margin-top-15">
                    <button class="btn btn-primary btn-inverse btn-outline" type="button">Do this</button>
                    <button class="btn btn-link white" type="button">Or this</button>
                  </p>
                </div>
                <div role="alert" class="alert dark alert-success alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                  <p class="margin-top-15">
                    <button class="btn btn-success btn-inverse btn-outline" type="button">Do this</button>
                    <button class="btn btn-link white" type="button">Or this</button>
                  </p>
                </div>
              </div>
            </div>
            <!-- End Example With Button -->
            <!-- Example With Avatar -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">With Avatar</h4>
                <p>Add <code>.alert-avatar</code> class.</p>
                <div class="alert alert-primary alert-avatar alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <span class="avatar">
                    <img alt="..." src="<?php echo e(URL::to('/')); ?>/global/portraits/5.jpg">
                  </span>
                  You have done 5 actions.
                </div>
                <div role="alert" class="alert dark alert-info alert-avatar alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <span class="avatar">
                    <img alt="..." src="<?php echo e(URL::to('/')); ?>/global/portraits/5.jpg">
                  </span>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
                <div role="alert" class="alert dark alert-danger alert-avatar alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <span class="avatar">
                    <img alt="..." src="<?php echo e(URL::to('/')); ?>/global/portraits/5.jpg">
                  </span>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                  <p class="margin-top-15">
                    <button class="btn btn-danger btn-inverse btn-outline" type="button">Do this</button>
                    <button class="btn btn-link white" type="button">Or this</button>
                  </p>
                </div>
              </div>
            </div>
            <!-- End Example With Avatar -->
            <div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>
            <!-- Example Dismissible & Click -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">Dismissible and Click</h4>
                <p>Build on any alert by adding an optional <code>.alert-dismissible</code>                  and close button.</p>
                <div class="alert alert-primary alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Heads up!</strong> This alert needs your attention, but it's
                  not super important.
                </div>
                <div class="alert dark alert-primary" role="alert">
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Example Dismissible & Click -->
            <!-- Example Link In Alerts -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">Link In Alerts</h4>
                <p>Use the <code>.alert-link</code> utility class to quickly provide
                  matching colored links within any alert.</p>
                <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a class="alert-link" href="javascript:void(0)">not looking too good</a>
                </div>
                <div class="alert dark alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <a class="alert-link" href="javascript:void(0)">not looking too good</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- End Example Link In Alerts -->
            <div class="clearfix visible-sm-block"></div>
            <!-- Example With List -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">With List</h4>
                <p>An alert include title and item list with close button.</p>
                <div class="alert alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4>Alert With List</h4>
                  <ul>
                    <li>Cras justo odio</li>
                    <li>Dapibus ac facilisis in</li>
                  </ul>
                </div>
                <div class="alert dark alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4>Alert With List</h4>
                  <ul>
                    <li>Cras justo odio</li>
                    <li>Dapibus ac facilisis in</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Example With List -->
            <div class="clearfix visible-md-block visible-lg-block"></div>
            <!-- Example Alt Alerts -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">Alt Alerts</h4>
                <p>Swap modifier class <code>.alert-alt</code> to switch another four
                  contextual feedback message style below. </p>
                <div class="alert alert-alt alert-primary alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
                <div class="alert alert-alt alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
                <div class="alert alert-alt alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
                <div class="alert alert-alt alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
                <div class="alert alert-alt alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
              </div>
            </div>
            <!-- End Example Alt Alerts -->
            <div class="clearfix visible-sm-block"></div>
            <!-- Example Dark Alt Alerts -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">Dark Alt</h4>
                <p>Swap modifier class <code>.alert-alt</code> and <code>.dark</code>                  to switch another four contextual feedback message style below.
                </p>
                <div class="alert dark alert-alt alert-primary alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
                <div class="alert dark alert-alt alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
                <div class="alert dark alert-alt alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
                <div class="alert dark alert-alt alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
                <div class="alert dark alert-alt alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Lorem ipsum dolor sit amet, <a class="alert-link" href="javascript:void(0)">consectetur adipisicing elit</a>.
                </div>
              </div>
            </div>
            <!-- End Example Dark Alt Alerts -->
            <!-- Example Social Messages -->
            <div class="col-sm-6 col-md-4">
              <div class="example-wrap">
                <h4 class="example-title">Social Messages</h4>
                <p>Add <code>.alert-social</code> class.</p>
                <div role="alert" class="alert alert-social alert-facebook alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon bd-facebook" aria-hidden="true"></i>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
                <div role="alert" class="alert alert-social alert-twitter alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times; </span>
                  </button>
                  <i class="icon bd-twitter" aria-hidden="true"></i>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
                <div role="alert" class="alert alert-social alert-google-plus alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon bd-google-plus" aria-hidden="true"></i>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
                <div role="alert" class="alert alert-social alert-linkedin alert-dismissible">
                  <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon bd-linkedin" aria-hidden="true"></i>
                  <h4>Some Message</h4>
                  <p>
                    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                    voluptate.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Example Social Messages -->
          </div>
        </div>
      </div>
    </div>
<br/>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>