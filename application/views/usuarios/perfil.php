<?php
/**
 * Created by Cesar Mejía.
 * User: Sistemas
 * Date: 3/5/2019 15:09 2019
 * FileName: perfil.php
 */
?>

<div class="content-wrapper" style="min-height: 1126px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo $this->uri->segment(1)?>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3">

				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<?php
						$img = '';
						if ($this->session->userdata("sexo") == 1) {
							$img = 'user2.png';
						}else{
							$img = 'female.jpg';
						}
						echo "<img src='".base_url()."/assets/img/".$img."' alt='".$this->session->userdata('user')."'
						  class='profile-user-img img-responsive img-circle'/>";
						?>
						<h3 class="profile-username text-center">
							<?php echo $this->session->userdata('user');?>
						</h3>

						<p class="text-muted text-center"><?php echo $this->session->userdata('rol')?></p>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<strong><i class="fa fa-pencil margin-r-5"></i> <?php echo $this->session->userdata('nombre')?></strong>
							</li>
							<li class="list-group-item">
								<strong><i class="fa fa-pencil-square-o margin-r-5"></i> <?php echo $this->session->userdata('apellidos')?></strong>
							</li>
							<li class="list-group-item">
								<strong><i class="fa fa-envelope margin-r-5"></i> <?php echo $this->session->userdata('correo')?></strong>
							</li>
							<li class="list-group-item">
								<strong><i class="fa fa-intersex scale margin-r-5"></i>
									<?php
									if($this->session->userdata('sexo') == 1){
										echo "Hombre";
									}else{
										echo "Mujer";
									}
									?></strong>
							</li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
						<li><a href="#activity" data-toggle="tab">Activity</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="settings">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputName" class="col-sm-2 control-label">Name</label>

									<div class="col-sm-10">
										<input type="email" class="form-control" id="inputName" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-2 control-label">Email</label>

									<div class="col-sm-10">
										<input type="email" class="form-control" id="inputEmail" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputName" class="col-sm-2 control-label">Name</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputName" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="inputExperience" class="col-sm-2 control-label">Experience</label>

									<div class="col-sm-10">
										<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="inputSkills" class="col-sm-2 control-label">Skills</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<div class="checkbox">
											<label>
												<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-danger">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="activity">
							<!-- Post -->
							<div class="post">
								<div class="user-block">
									<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
									<span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
									<span class="description">Shared publicly - 7:30 PM today</span>
								</div>
								<!-- /.user-block -->
								<p>
									Lorem ipsum represents a long-held tradition for designers,
									typographers and the like. Some people hate it and argue for
									its demise, but others ignore the hate as they create awesome
									tools to help create filler text for everyone from bacon lovers
									to Charlie Sheen fans.
								</p>
								<ul class="list-inline">
									<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
									<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
									</li>
									<li class="pull-right">
										<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
											(5)</a></li>
								</ul>

								<input class="form-control input-sm" type="text" placeholder="Type a comment">
							</div>
							<!-- /.post -->

							<!-- Post -->
							<div class="post clearfix">
								<div class="user-block">
									<img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
									<span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
									<span class="description">Sent you a message - 3 days ago</span>
								</div>
								<!-- /.user-block -->
								<p>
									Lorem ipsum represents a long-held tradition for designers,
									typographers and the like. Some people hate it and argue for
									its demise, but others ignore the hate as they create awesome
									tools to help create filler text for everyone from bacon lovers
									to Charlie Sheen fans.
								</p>

								<form class="form-horizontal">
									<div class="form-group margin-bottom-none">
										<div class="col-sm-9">
											<input class="form-control input-sm" placeholder="Response">
										</div>
										<div class="col-sm-3">
											<button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
										</div>
									</div>
								</form>
							</div>
							<!-- /.post -->

							<!-- Post -->
							<div class="post">
								<div class="user-block">
									<img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
									<span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
									<span class="description">Posted 5 photos - 5 days ago</span>
								</div>
								<!-- /.user-block -->
								<div class="row margin-bottom">
									<div class="col-sm-6">
										<img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
									</div>
									<!-- /.col -->
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-6">
												<img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
												<br>
												<img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
											</div>
											<!-- /.col -->
											<div class="col-sm-6">
												<img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
												<br>
												<img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
											</div>
											<!-- /.col -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->

								<ul class="list-inline">
									<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
									<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
									</li>
									<li class="pull-right">
										<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
											(5)</a></li>
								</ul>

								<input class="form-control input-sm" type="text" placeholder="Type a comment">
							</div>
							<!-- /.post -->
						</div>
						<!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

	</section>
	<!-- /.content -->
</div>
