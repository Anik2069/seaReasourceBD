@extends("admin.masteradmin")
@section ("content")

			<!-- app-content-->

							<div class="page-header mt-0 shadow p-3">
								<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Email Inbox</li>
								</ol>
							</div>
							<div class="email-app card shadow">

								<div class="inbox p-0">
									<div class="card-body d-none d-lg-block">


									</div>

                                    @foreach($value as $val)

									<ul class="mail_list list-group list-unstyled">
										<li class="list-group-item">
											<div class="media">
												<div class="pull-left">
													<div class="controls">
														<div class="checkbox">
															<input type="checkbox" id="basic_checkbox_1">
															<label for="basic_checkbox_1"></label>
														</div>
														<a href="javascript:void(0);" class="favourite text-muted hidden-sm-down" data-toggle="active"><i class="zmdi zmdi-star-outline"></i></a>
													</div>
												</div>
												<div class="media-body">
													<div class="media-heading">
														<a href="mail-single.html" class="mr-2">Name: {{$val['name']}} || Email: {{$val['email']}} </a>
														<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">{{$val['created_at']}}</time><i class="zmdi zmdi-attachment-alt ml-2"></i> </small>
													</div>
													<p class="msg">{{$val['comments']}} </p>
												</div>
											</div>
										</li>

									</ul>
                                        @endforeach


								</div>
							</div>

		@endsection
