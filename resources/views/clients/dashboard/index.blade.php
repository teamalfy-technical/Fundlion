<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $url);
$link = end($link_array);
$link = ucwords(str_replace("_", " ", $link));
?>

@extends('clients.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

	<div class="layout-content">
		<div id="messages" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="blue-theme card-title text-center">{{__("Send Message")}}</h5>
					</div>
					<form action="{{ route('clients.messages.store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="modal-body">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<h4 class="text-center">Message Your Account Manager</h4>
										<label for="subject">Account Manager</label>
										<input type="text" class="form-control" value="{{$client->manager['name']}}" readonly>
										<input type="hidden" name="recipient" value="{{$client->account_manager}}">
										<br>
										<label for="subject">Subject</label>
										<input type="text" name="subject" id="subject" value="I'll like to book an appointment with you"
													 class="form-control"">
										<br>
										<label for="messages">Message</label>
										<textarea class="form-control" name="message" id="message" cols="30" rows="5"
															placeholder="Your message here..."></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="modal-footer">
							<input type="hidden" name="recipient" id="recipient" value="{{$session->account_manager}}">
							<button type="submit" class="btn btn-success">{{__("Send")}}</button>
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("Cancel")}}</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;">

			<!-- <div class="container"> -->
			<div class="row gutter-xs">
				<div class="col-lg-10 col-lg-offset-1">
					<h2 style="color: #000000;font-weight: 900;">Hi {{$session->first_name}}, <span style="font-weight: 100;">Here is your dashboard</span>
					</h2>
				</div>
			</div>
			<div class="row" style="margin-top: 30px;">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row gutter-xs">

						<div class="col-lg-2 col-md-2">
							<a style="color: #494949" href="{{route('clients.loans')}}" class="text-dark">
								<div class="card dash-hover bg-success" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
									<div class="card-header no-border">
										<div class="media text-center">
											<div class="media-middle media-center">
												<img width="32" height="32" src="{{asset('public/pages/assets/img/icons/review-icon.png')}}" alt="review">
											</div>
											<div class="media-middle media-body">
												<p class="text-dark" style="margin-top: 8px;line-height: normal;">Review Existing Loan Application</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-2">
							<a style="color: #494949" href="{{route('clients.account')}}">
								<div class="card dash-hover"
										 style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
									<div class="card-header no-border">
										<div class="media text-center">
											<div class="media-middle media-center">
												<img width="32" height="32"
														 src="{{asset('public/pages/assets/img/icons/account-information-icon.png')}}"
														 alt="account">
											</div>
											<div class="media-middle media-body">
												<p class="text-dark" style="margin-top: 8px;line-height: normal;">Upload Account Information</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-2">
							<a style="color: #494949" href="{{route('clients.lenders')}}">
								<div class="card dash-hover"
										 style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
									<div class="card-header no-border">
										<div class="media text-center">
											<div class="media-middle media-center">
												<img width="32" height="32" src="{{asset('public/pages/assets/img/icons/clipboard-icon.png')}}"
														 alt="account">
											</div>
											<div class="media-middle media-body">
												<p class="text-dark" style="margin-top: 8px;line-height: normal;">Apply for a New Loan</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-2">
							<a style="color: #494949" href="{{url('clients/account#doc-upload')}}">
								<div class="card dash-hover"
										 style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
									<div class="card-header no-border">
										<div class="media text-center">
											<div class="media-middle media-center">
												<img width="32" height="32"
														 src="{{asset('public/pages/assets/img/icons/upload-arrow-icon.png')}}" alt="account">
											</div>
											<div class="media-middle media-body">
												<p class="text-dark" style="margin-top: 8px;line-height: normal;">Upload Documents</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-2">
							<a style="color: #494949" href="{{route('clients.lenders')}}">
								<div class="card dash-hover"
										 style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
									<div class="card-header no-border">
										<div class="media text-center">
											<div class="media-middle media-center">
												<img width="32" height="32" src="{{asset('public/pages/assets/img/icons/eye-icon.png')}}"
														 alt="account">
											</div>
											<div class="media-middle media-body">
												<p class="text-dark" style="margin-top: 8px;line-height: normal;">Explore Lenders</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-lg-2 col-md-2">
							<a style="color: #494949" href="#." data-toggle="modal" data-target="#messages">
								<div class="card dash-hover"
										 style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
									<div class="card-header no-border">
										<div class="media text-center">
											<div class="media-middle media-center">
												<img width="32" height="32" src="{{asset('public/pages/assets/img/icons/calendar-512.png')}}"
														 alt="account">
											</div>
											<div class="media-middle media-body">
												<p class="text-dark" style="margin-top: 8px;line-height: normal;">Set an Appointment with a
													Fundlion Account manager</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

					</div>
				</div>
			</div>
			<div class="row gutter-xs" style="margin-top: 30px;">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="card h-100"
							 style="border-radius:20px;background: rgb(74,74,74);background: linear-gradient(0deg, #5a5a5a 0%, #a0a0a0 100%);">
						<div id="black-card"></div>
						<div class="card-body">
							<h4 class="text-center m-0" style="color: #fff;">Loan Application Status</h4>
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="row">

										<div class="col-md-12 text-center">
											<span id="ajaxMessage"></span>
										</div>

										<br><br>

										<div class="col-lg-6">
											<div class="form-group">
												<div class="row">
													<label class="col-sm-3 control-label" for="form-control-6"
																 style="color: #fff;line-height: 35px;font-weight: 100;font-size: 15px;">Provider: </label>
													<div class="col-sm-9">
														<select id="provider" class="form-control"
																		style="background-color: #fff;color: #323232;border: 2px solid #fff;">
															<option value="">Select...</option>
															@foreach($loans as $loan)
																@if($loan !== null && $loan->lender_id !== null)
																	<option value="{{$loan->id}}">{{$loan->lender->detail['company_name']}}</option>
																@else
																	<option>Not Applied</option> @endif
															@endforeach
															{{--@endif--}}
														</select>
													</div>
												</div>
											</div>
										</div>

										<div class="col-lg-6">
											<span id="ajaxMessage"></span>
											<p class="text-center" style="color: #fff;line-height: 30px;font-size: 15px;font-weight: 400;">
												Loan Amount: <span id="loanAmount"></span></p>
										</div>

									</div>
								</div>
							</div>
							<div class="row" style="margin-top: 30px;">
								<div class="col-lg-10 col-lg-offset-1">
									<div class="steps">
										<ul class="steps-container">

											<li style="width:25%;" id="applied">
												<div class="step">
													<div class="step-image"><span></span></div>
													<div class="step-current">Applied</div>
												</div>
											</li>

											<li style="width:25%;" id="submitted">
												<div class="step">
													<div class="step-image"><span></span></div>
													<div class="step-current">Submitted</div>
												</div>
											</li>

											<li style="width:25%;" id="reviewing">
												<div class="step">
													<div class="step-image"><span></span></div>
													<div class="step-current">Reviewing</div>
												</div>
											</li>

											<li style="width:25%;" id="approved">
												<div class="step">
													<div class="step-image"><span></span></div>
													<div class="step-current">Approved</div>
												</div>
											</li>
										</ul>

										{{--                                        @if($client->loans['loan_status_id'] === 2)--}}
										<div class="step-bar" id="status_bar"></div>
										{{--                                        @elseif($client->loans['loan_status_id'] === 3)--}}
										{{--                                            <div class="step-bar" style="width: 42%;"></div>--}}
										{{--                                        @elseif($client->loans['loan_status_id'] === 4)--}}
										{{--                                            <div class="step-bar" style="width: 66%;"></div>--}}
										{{--                                        @elseif($client->loans['loan_status_id'] === 5)--}}
										{{--                                            <div class="step-bar" style="width: 100%;"></div>--}}
										{{--                                        @endif--}}

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row gutter-xs" style="margin-top: 30px;">
				<div class="col-lg-10 col-lg-offset-1">
					<hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
					<div class="card h-100" style="border-radius:20px;">
						<div class="card-body">
							<h4 class="text-center" style="font-weight: 900;font-size: 25px;">See Your Funding Options</h4>
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12 col-md-offset-6">
									<form style="margin-top: 30px;" method="post" action="{{route('clients.funding')}}" role="form">
										@csrf
										<div class="form-group">
											{{--                                            <span class="input-group-addon">£</span>--}}
											<label for="loan_amount">How much finance do you neeed? [£]</label>
											<input name="loan_amount" id="loan_amount" class="form-control" type="text"
														 style="border-radius: 15px;" value="@if($funding !== null){{$funding->loan_amount}}@endif"
														 required>
										</div>
										{{--                                        <div class="input-group" style="margin: 14px 0;">--}}
										{{-- <span class="input-group-addon">£</span> --}}
										{{--                                            <label for="">How much finance do you need?</label>--}}
										{{--                                            <input name="loan_amount" class="form-control" type="number" min="0" style="border-radius: 15px;" value="{{number_format($funding->loan_amount,2)}}" required>--}}
										{{--                                        </div>--}}
										<div class="form-group">
											<label for="loan_purpose_id">What is the finance for?</label>
											<select name="loan_purpose_id" id="loan_purpose_id" class="form-control"
															style="font-size: 12px;height: 38px;margin: 10px 0; border-radius: 15px;" required>
												@if($funding !== null)
													<option value="{{$funding->loan_purpose_id}}" hidden>{{$funding->purpose['purpose']}}</option>
												@else
													<option hidden value="">Select...</option>
												@endif
												@foreach($loanPurposes as $loanPurpose)
													<option value="{{$loanPurpose->id}}">{{$loanPurpose->purpose}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label for="loan_duration_id">How long do you need the finance for?</label>
											<select name="loan_duration_id" id="loan_duration_id" class="form-control"
															style="font-size: 12px;height: 38px;border-radius: 15px;" required>
												@if($funding !== null)
													<option value="{{$funding->loan_duration_id}}"
																	hidden>{{$funding->duration['duration']}}</option>
												@else
													<option hidden>Select...</option>
												@endif
												@foreach($loanDurations as $loanDuration)
													<option value="{{$loanDuration->id}}">{{$loanDuration->duration}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<input type="hidden" name="client_id" value="{{$client->id}}">
											<button type="submit" class="btn bg-success pull-right"
															style="width: 100%; color: #fff;border-radius: 15px;">CONTINUE
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row gutter-xs" style="margin-top: 30px;">
				<div class="col-lg-10 col-lg-offset-1">
					<hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
					<div class="card h-100" style="border-radius:20px;">
						<div class="card-body">
							<h4 class="text-center">Banks & Online Lending Options</h4>
							<div class="row" style="margin-top: 30px;overflow-x: auto;white-space: nowrap;">

								@if($lenders !== null)
									@foreach($lenders as $lender)
										<div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
											<a href="{{route('clients.lenders.profile',$lender->id)}}">
												<div class="card" style="border-radius: 15px;">
													<div class="card-image">
														<?php $img = $lender->detail['logo']; ?>
														<img class="card-img img-responsive"
																 style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;"
																 src="{{asset("storage/app/lenders/$lender->id/logo/$img")}}" alt="">
													</div>
												</div>
											</a>
										</div>
									@endforeach
								@endif

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- </div> -->
		</div>
	</div>

	<!-- <div class="layout-footer">
		<div class="layout-footer-body">
			<small class="version">Version 1.0.0</small>
			<small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
		</div>
	</div> -->


@endsection
