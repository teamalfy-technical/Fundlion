<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $url);
$link = end($link_array);
$link = ucwords(str_replace("_", " ", $link));
?>

<script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}"></script>

@extends('users.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

	<div class="layout-main">
		<div class="layout-content">
			<div id="lender" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="blue-theme card-title text-center">{{__("Create New Lender Account")}}</h4>
						</div>
						<form action="{{ route('users.lenders.store') }}" method="post" role="form">
							@csrf
							<div class="modal-body">
								<div class="col-lg-12">
									<div class="card">
										<h4 class="text-center">Company Information</h4>
										<div class="card-body">

											<div class="form-group row">
												<label for="name"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Company Name:') }}</label>
												<div class="col-md-8">
													<input id="company_name" type="text"
																 class="form-control @error('company_name') is-invalid @enderror"
																 name="company_name" value="{{ old('company_name') }}"
																 required autocomplete="company_name">
													@error('company_name') <span class="invalid-feedback"
																											 role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="description"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Company Description:') }}</label>
												<div class="col-md-8">
													<textarea name="description" id="description"
																		class="form-control @error('description') is-invalid @enderror"
																		rows="5" required
																		autocomplete="description">{{ old('description') }}</textarea>
													@error('description') <span class="invalid-feedback"
																											role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="address_one"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Address One:') }}</label>
												<div class="col-md-8">
													<input id="address_one" type="text"
																 class="form-control @error('address_one') is-invalid @enderror"
																 name="address_one" value="{{ old('address_one') }}" required
																 autocomplete="address_one">
													@error('address_one') <span class="invalid-feedback"
																											role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="city"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('City:') }}</label>
												<div class="col-md-8">
													<input id="city" type="text"
																 class="form-control @error('city') is-invalid @enderror"
																 name="city" value="{{ old('city') }}" autocomplete="city">
													@error('city') <span class="invalid-feedback"
																							 role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="zip"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Zip/Postal Code:') }}</label>
												<div class="col-md-8">
													<input id="zip" type="text"
																 class="form-control @error('zip') is-invalid @enderror"
																 name="zip" value="{{ old('zip') }}" autocomplete="zip">
													@error('zip') <span class="invalid-feedback"
																							role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="country_id"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Country:') }}</label>
												<div class="col-md-8">
													<select name="country_id" class="form-control" required>
														<option readonly hidden>Select Country...</option>
														@foreach($countries as $country)
															<option value="{{$country->id}}"
																			@if(old('country_id') === $country->id) selected @endif>{{$country->country}}</option>
														@endforeach
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label for="website"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Website:') }}</label>
												<div class="col-md-8">
													<input id="website" type="text"
																 class="form-control @error('website') is-invalid @enderror"
																 name="website" value="{{ old('website') }}"
																 autocomplete="website">
													@error('website') <span class="invalid-feedback"
																									role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

										</div>

										<h4 class="text-center">Company Contact Person</h4>
										<div class="card-body">

											<div class="form-group row">
												<label for="title_id"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Name Title:') }}</label>
												<div class="col-md-8">
													<select name="title_id" class="form-control" required>
														<option readonly hidden>Select Title...</option>
														@foreach($titles as $title)
															<option value="{{$title->id}}"
																			@if(old('title_id') === $title->id) selected @endif>{{$title->title}}</option>
														@endforeach
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label for="first_name"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('First Name:') }}</label>
												<div class="col-md-8">
													<input id="first_name" type="text"
																 class="form-control @error('first_name') is-invalid @enderror"
																 name="first_name" value="{{ old('first_name') }}" required
																 spellcheck="true" autocomplete="first_name">
													@error('first_name') <span class="invalid-feedback"
																										 role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="last_name"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Last Name:') }}</label>
												<div class="col-md-8">
													<input id="last_name" type="text"
																 class="form-control @error('last_name') is-invalid @enderror"
																 name="last_name" value="{{ old('last_name') }}" required
																 spellcheck="true" autocomplete="last_name">
													@error('last_name') <span class="invalid-feedback"
																										role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="job_title"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Job Title:') }}</label>
												<div class="col-md-8">
													<input id="job_title" type="text"
																 class="form-control @error('job_title') is-invalid @enderror"
																 name="job_title" value="{{ old('job_title') }}"
																 spellcheck="true" autocomplete="job_title">
													@error('job_title') <span class="invalid-feedback"
																										role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="email"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Email Address:') }}</label>
												<div class="col-md-8">
													<input id="email" type="email"
																 class="form-control @error('email') is-invalid @enderror"
																 name="email" value="{{ old('email') }}" required
																 autocomplete="email">
													@error('email') <span class="invalid-feedback"
																								role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="phone"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Phone:') }}</label>
												<div class="col-md-8">
													<input id="phone" type="number"
																 class="form-control @error('phone') is-invalid @enderror"
																 name="city" value="{{ old('phone') }}" spellcheck="true"
																 autocomplete="phone">
													@error('phone') <span class="invalid-feedback"
																								role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="mobile"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Mobile:') }}</label>
												<div class="col-md-8">
													<input id="mobile" type="number"
																 class="form-control @error('mobile') is-invalid @enderror"
																 name="mobile" value="{{ old('mobile') }}"
																 autocomplete="mobile">
													@error('mobile') <span class="invalid-feedback"
																								 role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="skype"
															 class="col-md-4 col-form-label text-right text-md-right">{{ __('Skype:') }}</label>
												<div class="col-md-8">
													<input id="skype" type="text"
																 class="form-control @error('skype') is-invalid @enderror"
																 name="skype" value="{{ old('skype') }}" autocomplete="skype">
													@error('skype') <span class="invalid-feedback"
																								role="alert"><strong>{{ $message }}</strong></span> @enderror
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-success btn-sm">{{__("Create")}}</button>
								<button type="button" class="btn btn-outline-secondary btn-sm"
												data-dismiss="modal">{{__("Close")}}</button>
							</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100%;">
				<div class="row gutter-xs">
					<div class="col-lg-10 col-lg-offset-1">
						@component('components.messages')@endcomponent
						<h2 style="color: #000000;font-weight: 900;">Hi {{$session->first_name}}, <span
								style="font-weight: 100;">Here are our Lenders</span></h2>
					</div>
				</div>
				<div class="row" style="margin-top:50px;">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="row gutter-xs">
							<div class="col-lg-6 col-md-6">
								<button type="button" data-toggle="modal" data-target="#lender" class="btn btn-success">
									Create New Lender
								</button>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="col-sm-5 control-label" style="text-align: right;font-size: 20px;font-weight: 100;color: #000;">Search Account</label>
									<div class="col-sm-7">
										<form id="search-form" action="{{route('users.lenders.search')}}" method="post" role="form">
											@csrf
											<div class="input-group">
												<input name="search_key" style="height: 27px;" class="form-control" type="text">
												<span class="input-group-btn">
														<label class="btn btn-default file-upload-btn">
																<a href="{{ route('users.lenders.search') }}" onclick="event.preventDefault(); document.getElementById('search-form').submit();"><span class="icon icon-search icon-lg"></span></a>
														</label>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:50px;">
					<div class="col-lg-10 col-lg-offset-1">
						<!-- <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;"> -->
						<div class="row gutter-xs">
							<div class="col-lg-12">
								<table class="table table-hover table-borderless" style="background-color: #e0e0e0;">
									<thead>
									<tr>
										<th class="text-left">Company name</th>
										<th class="text-left">Logo</th>
										<th class="text-left">Email</th>
										<th class="text-left">Website</th>
										<th class="text-left">Postal</th>
										<th class="text-left">Rate</th>
										<th class="text-left"></th>
									</tr>
									</thead>
									<tbody>
									@if($lenderDetails !== null)
										@foreach($lenderDetails as $lender)
											<tr class="white-rows">
												<td class="text-left" style="line-height: 30px;">
													<b>{{ $lender->company_name }}</b></td>
												<?php $img = $lender->logo?>
												<td class="text-left">
													<img class="img-circle" src="{{ asset("storage/app/lenders/$lender->lender_id/logo/$img") }}"
															 style="width: 30px;">
												</td>
												<td class="text-left" style="line-height: 30px;">{{ $lender->lender['email'] }}</td>
												<td class="text-left" style="line-height: 30px;">{{ $lender->website }}</td>
												<td class="text-left" style="line-height: 30px;">{{ $lender->zip }}</td>
												<td class="text-left" style="line-height: 30px;">{{ $lender->interest_rate }}%
												</td>
												<td class="text-left" style="line-height: 30px;">
													<div class="btn-group dropdown">
															<span aria-haspopup="true" data-toggle="dropdown"
																		style="padding: 5px;">
																	<i class="icon icon-ellipsis-v icon-lg icon-fw"></i>
															</span>
														<ul class="dropdown-menu dropdown-menu-right" style="text-align: center">
															<button class="btn btn-success">Update info</button>
														</ul>
													</div>
													<span class="expand-account icon icon-plus" data-toggle="collapse"
																data-target="#lender{{$lender->lender_id}}" class="clickable"></span>
												</td>
											</tr>
											<form action="{{route('users.lenders.update')}}" method="post" role="form"
														enctype="multipart/form-data">
												@csrf

												<td style="padding: 0;" colspan="7">
													<div id="lender{{$lender->lender_id}}" class="collapse">
														<div class="card">
															<div class="card-body" style="height: 300px;overflow-y: scroll;">

																<!-- Main Header -->
																<div class="row visible-lg">
																	<div class="col-lg-6 col-md-6"><h5><b>Company Description</b></h5></div>
																	<div class="col-lg-3 col-md-3"><h5><b>Display info</b></h5></div>
																	<div class="col-lg-3 col-md-3"><h5><b>Internal use</b></h5></div>
																</div>

																<!-- Company Description -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5 class="visible-md visible-sm visible-xs"><b>Company Description</b></h5>
																		<textarea name="description" class="form-control" rows="3"
																							style="margin-top: 0px; margin-bottom: 0px; height: 100px;">{{ $lender->description }}</textarea>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="description_status" @if($lender->description_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="description_status" @if($lender->description_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company Name -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Company Name</h5>
																		<input type="text" name="company_name" class="form-control"
																					 value="{{ $lender->company_name }}">
																	</div>
																	<div class="lender-check3"></div>
																	<div class="col-md-6" style="margin-top: 30px;"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="company_name_status" @if($lender->company_name_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="company_name_status"  @if($lender->company_name_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company Logo -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Company Logo Upload</h5>
																		<input type="file" class="form-control" name="file" id="file">
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="logo_status" @if($lender->logo_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="logo_status" @if($lender->logo_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>
																<!-- Company Logo -->

																<!-- Company Address -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Company Address One</h5>
																		<input type="text" name="address_one" class="form-control"
																					 value="{{$lender->address_one}}">
																	</div>
																	<div class="lender-check3"></div>
																	<div class="col-md-6" style="margin-top: 30px;"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="address_one_status" @if($lender->address_one_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="address_one_status" @if($lender->address_one_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company Address Two -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Company Address Two</h5>
																		<input type="text" name="address_two" class="form-control"
																					 value="{{ $lender->address_two }}">
																	</div>
																	<div class="lender-check3"></div>
																	<div class="col-md-6" style="margin-top: 30px;"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="address_two_status" @if($lender->address_two_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="address_two_status" @if($lender->address_two_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company City -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>City</h5>
																		<input type="text" name="city" class="form-control"
																					 value="{{$lender->city}}">
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="city_status" @if($lender->city_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="city_status" @if($lender->city_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company Zip -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Zip</h5>
																		<input type="text" name="zip" class="form-control"
																					 value="{{$lender->zip}}">
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="zip_status" @if($lender->zip_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label
																			class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="zip_status" @if($lender->zip_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company Country -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Country</h5>
																		<select name="country_id"
																						class="form-control @error('country_id') is-invalid @enderror">
																			@if($lender->country_id === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{ $lender->country_id }}" hidden
																								selected>{{ $lender->country['country'] }}</option>
																			@endif
																			@foreach($countries as $country)
																				<option value="{{$country->id}}">{{$country->country}}</option>
																			@endforeach
																		</select>
																		{{--																		<input type="text" name="country_id" class="form-control"--}}
																		{{--																					 value="{{$lender->detail->country['country']}}">--}}
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="country_id_status" @if($lender->country_id_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="country_id_status" @if($lender->country_id_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company Website -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Website</h5>
																		<input type="text" name="website" class="form-control"
																					 value="{{$lender->website}}">
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="website_status" @if($lender->website_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="website_status" @if($lender->website_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company Commission -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Fundlion Commission</h5>
																		<input type="text" name="commission" class="form-control"
																					 value="{{$lender->commission}}">
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="commission_status" @if($lender->commission_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="commission_status" @if($lender->commission_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Company Sign Date -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Contract Signing Date</h5>
																		<input type="date" name="signing_date" class="form-control"
																					 value="{{ $lender->signing_date }}">
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="signing_date_status" @if($lender->signing_date_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="signing_date_status" @if($lender->signing_date_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>


																{{-- Payment Terms --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Commission Payment Terms</h5>
																		<input type="text" name="payment_terms" class="form-control"
																					 value="{{$lender->payment_terms}}">
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="payment_terms_status" @if($lender->payment_terms_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="payment_terms_status" @if($lender->payment_terms_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>
																{{--  new end--}}

																{{-- Web API --}}
																{{--																<div class="row">--}}
																{{--																	<div class="col-lg-6 col-md-6">--}}
																{{--																		<h5>Lender Own API Connection</h5>--}}
																{{--																		<select name="web_api" class="form-control @error('web_api') is-invalid @enderror">--}}
																{{--																			@if($lender->detail['web_api'] === null)--}}
																{{--																				<option value="" hidden>Select...</option>--}}
																{{--																			@else--}}
																{{--																				<option value="{{$lender->detail['web_api']}}" hidden selected>--}}
																{{--																					@if ($lender->detail['web_api'] === 0) No--}}
																{{--																					@elseif ($lender->detail['web_api'] === 1) Yes @endif </option>--}}
																{{--																			@endif--}}
																{{--																			<option value=0>No</option>--}}
																{{--																			<option value=1>Yes</option>--}}
																{{--																		</select>--}}
																{{--																		--}}{{--                                                                        <input type="text" name="web_api" class="form-control" value="{{$lender->detail['web_api']}}">--}}
																{{--																	</div>--}}
																{{--																	<div class="lender-check2"></div>--}}
																{{--                                                                    <div class="col-lg-3 col-md-3">--}}
																{{--                                                                        <label class="custom-control custom-control-success custom-checkbox">--}}
																{{--                                                                            <input type="radio" name="web_api_status" value="1"> Yes--}}
																{{--                                                                        </label>--}}
																{{--                                                                    </div>--}}
																{{--                                                                    <div class="col-lg-3 col-md-3">--}}
																{{--                                                                        <label class="custom-control custom-control-success custom-checkbox">--}}
																{{--                                                                            <input type="radio" name="web_api_status" value="0"> No--}}
																{{--                                                                        </label>--}}
																{{--                                                                    </div>--}}
																{{--																</div>--}}

																{{-- leads --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Use The Fundlion API</h5>
																		<select name="web_api" class="form-control @error('web_api') is-invalid @enderror">
																			@if($lender->web_api === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{$lender->web_api}}" hidden selected>
																					@if ($lender->web_api === 0) No
																					@elseif ($lender->web_api === 1) Yes @endif </option>
																			@endif
																			<option value=0>No</option>
																			<option value=1>Yes</option>
																		</select>
																		{{--                                                                        <input type="text" name="leads" class="form-control" value="{{$lender->detail['leads']}}">--}}
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="web_api_status" @if($lender->web_api_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="web_api_status" @if($lender->web_api_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Receive Fundlion Leads (email, phone, manual application)</h5>
																		<select name="leads" class="form-control @error('leads') is-invalid @enderror">
																			@if($lender->leads === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{$lender->leads}}" hidden selected>
																					@if ($lender->leads === 0) No
																					@elseif ($lender->leads === 1) Yes @endif </option>
																			@endif
																			<option value=0>No</option>
																			<option value=1>Yes</option>
																		</select>
																		{{--                                                                        <input type="text" name="leads" class="form-control" value="{{$lender->detail['leads']}}">--}}
																	</div>
																	<div class="lender-check2"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="leads_status" @if($lender->leads_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="leads_status" @if($lender->leads_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- lending_products --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Lending Products</h5>
																		<select name="lending_products[]"
																						class="js-example-basic-multiple form-control @error('lending_products') is-invalid @enderror"
																						multiple="multiple">
																			<option value="" hidden>Select...</option>
																			@foreach($loanPurposes as $loanPurpose)
																				<option value="{{$loanPurpose->id}}">{{$loanPurpose->purpose}}</option>
																			@endforeach
																		</select>
																		{{--  <input type="text" name="lending_products" class="form-control" value="{{$lender->detail['lending_products']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="lending_products_status" @if($lender->lending_products_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="lending_products_status" @if($lender->lending_products_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- response_time --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Response Time</h5>
																		<select name="response_time"
																						class="form-control @error('response_time') is-invalid @enderror">
																			@if($lender->response_time === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{ $lender->response_time }}" hidden
																								selected>{{ $lender->response['response_time'] }}</option>
																			@endif
																			@foreach($responseTimes as $responseTime)
																				<option value="{{$responseTime->id}}">{{$responseTime->response_time}}</option>
																			@endforeach
																		</select>
																		{{--																		<input type="text" name="response_time" class="form-control"--}}
																		{{--																					 value="{{$lender->detail['response_time']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="response_time_status" @if($lender->response_time_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="response_time_status" @if($lender->response_time_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- process_time --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Process Time</h5>
																		<select name="process_time"
																						class="form-control @error('process_time') is-invalid @enderror">
																			@if($lender->process_time === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{ $lender->process_time }}" hidden
																								selected>{{ $lender->process['process_time'] }}</option>
																			@endif
																			@foreach($processTimes as $processTime)
																				<option value="{{$processTime->id}}">{{$processTime->process_time}}</option>
																			@endforeach
																		</select>
																		{{--																		<input type="text" name="process_time" class="form-control" value="{{$lender->detail['process_time']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="process_time_status" @if($lender->process_time_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="process_time_status" @if($lender->process_time_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																<!-- Interest Rate -->
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Interest Rate (%)</h5>
																		<input type="text" name="interest_rate" class="form-control"
																					 value="{{$lender->interest_rate}}">
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="interest_rate_status" @if($lender->interest_rate_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="interest_rate_status" @if($lender->interest_rate_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- loan_size --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Loan Size (£)</h5>
																		<input type="text" name="loan_size" class="form-control"
																					 value="{{$lender->loan_size}}">
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="loan_size_status" @if($lender->loan_size_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="loan_size_status" @if($lender->loan_size_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- additional_fees --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Additional Fees</h5>
																		<textarea class="form-control" name="additional_fees" cols="30"
																							rows="3">{{$lender->additional_fees}}</textarea>
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="additional_fees_status" @if($lender->additional_fees_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="additional_fees_status" @if($lender->additional_fees_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- lender_industry --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Lender Industry</h5>
																		<select name="lender_industry"
																						class="form-control @error('lender_industry') is-invalid @enderror">
																			@if($lender->lender_industry === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{ $lender->lender_industry }}" hidden
																								selected>{{ $lender->industry['industry'] }}</option>
																			@endif
																			@foreach($industries as $industry)
																				<option value="{{$industry->id}}">{{$industry->industry}}</option>
																			@endforeach
																		</select>
																		{{--																		<input type="text" name="lender_industry" class="form-control" value="{{$lender->detail['lender_industry']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="lender_industry_status" @if($lender->lender_industry_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="lender_industry_status" @if($lender->lender_industry_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- business_structure --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Business Structure</h5>
																		<select name="business_structure"
																						class="form-control @error('business_structure_id') is-invalid @enderror">
																			@if($lender->business_structure === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{ $lender->business_structure }}" hidden
																								selected>{{ $lender->structure['structure'] }}</option>
																			@endif
																			@foreach($trading_as as $structure)
																				<option value="{{$structure->id}}">{{$structure->structure}}</option> @endforeach
																		</select>
																		{{--																		<input type="text" name="business_structure" class="form-control" value="{{$lender->detail['business_structure']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="business_structure_status" @if($lender->business_structure_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="business_structure_status" @if($lender->business_structure_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- loan_countries --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Loan Countries</h5>
																		<select name="loan_countries[]"
																						class="js-example-basic-multiple form-control @error('loan_countries') is-invalid @enderror"
																						multiple="multiple">
																			<option value="" hidden>Select...</option>
																			<option value="0" hidden>All (except restricted and sanctioned countries)</option>
																			{{--																			<option value="230" selected hidden>United Kingdom</option> @endif--}}
																			@foreach($countries as $country)
																				<option value="{{ $country->id }}">{{ $country->country }}</option>
																			@endforeach
																		</select>
																		{{--																		<input type="text" name="loan_countries" class="form-control" value="{{$lender->detail['loan_countries']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="loan_countries_status" @if($lender->loan_countries_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="loan_countries_status" @if($lender->loan_countries_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- annual_revenue --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Business Annual Revenue Requirement</h5>
																		<select name="annual_revenue" class="form-control @error('annual_revenue') is-invalid @enderror">
																			@if($lender->annual_revenue === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{$lender->annual_revenue}}" hidden selected>
																					@if ($lender->annual_revenue === 0) No
																					@elseif ($lender->annual_revenue === 1) Yes @endif </option>
																			@endif
																			<option value=0>No</option>
																			<option value=1>Yes</option>
																		</select>
																		{{--																		<input type="text" name="annual_revenue"--}}
																		{{--																					 class="form-control"--}}
																		{{--																					 value="{{$lender->detail['annual_revenue']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="annual_revenue_status" @if($lender->annual_revenue_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="annual_revenue_status" @if($lender->annual_revenue_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- revenue_amount --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Revenue Amount (£)</h5>
																		<input type="text" name="revenue_amount"
																					 class="form-control"
																					 value="{{$lender->revenue_amount}}">
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="revenue_amount_status" @if($lender->revenue_amount_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="revenue_amount_status" @if($lender->revenue_amount_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- profitable --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Profitable Company Requirement</h5>
																		<select name="profitable" class="form-control @error('profitable') is-invalid @enderror">
																			@if($lender->profitable === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{$lender->profitable}}" hidden selected>
																					@if ($lender->profitable === 0) No
																					@elseif ($lender->profitable === 1) Yes @endif </option>
																			@endif
																			<option value=0>No</option>
																			<option value=1>Yes</option>
																		</select>
																		{{--																		<input type="text" name="profitable"--}}
																		{{--																					 class="form-control"--}}
																		{{--																					 value="{{$lender->detail['profitable']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="profitable_status" @if($lender->profitable_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="profitable_status" @if($lender->profitable_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- minmax_length --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Minimum & Maximum Length of The Loan Term</h5>
																		<select name="minmax_length" class="form-control @error('loan_countries') is-invalid @enderror">
																			@if($lender->minmax_length === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{ $lender->minmax_length }}" hidden>{{$lender->minmax['length']}}</option>
																			@endif
																			{{--																			<option value="230" selected hidden>United Kingdom</option> @endif--}}
																			@foreach($minmax as $minmaxx)
																				<option value="{{ $minmaxx->id }}">{{ $minmaxx->length }}</option>
																			@endforeach
																		</select>
																		{{--																		<input type="text" name="minmax_length"--}}
																		{{--																					 class="form-control"--}}
																		{{--																					 value="{{$lender->detail['minmax_length']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="minmax_length_status" @if($lender->minmax_length_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="minmax_length_status" @if($lender->minmax_length_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- additional_documents --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Additional Documents</h5>
																		<select name="additional_documents[]"
																						class="js-example-basic-multiple form-control @error('additional_documents') is-invalid @enderror"
																						multiple="multiple">
																			<option value="" hidden>Select...</option>
																			{{--																			<option value="230" selected hidden>United Kingdom</option> @endif--}}
																			@foreach($additionalDocuments as $additionalDocument)
																				<option value="{{ $additionalDocument->id }}">{{ $additionalDocument->document }}</option>
																			@endforeach
																		</select>
																		{{--																		<input type="text" name="additional_documents"--}}
																		{{--																					 class="form-control"--}}
																		{{--																					 value="{{$lender->detail['additional_documents']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="additional_documents_status" @if($lender->additional_documents_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="additional_documents_status" @if($lender->additional_documents_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- secured_loans --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Do You Offer Secured Loans?</h5>
																		<select name="secured_loans" class="form-control @error('secured_loans') is-invalid @enderror">
																			@if($lender->secured_loans === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{$lender->detail['secured_loans']}}" hidden selected>
																					@if ($lender->secured_loans === 0) No
																					@elseif ($lender->secured_loans === 1) Yes @endif </option>
																			@endif
																			<option value=0>No</option>
																			<option value=1>Yes</option>
																		</select>
																		{{--																		<input type="text" name="secured_loans"--}}
																		{{--																					 class="form-control"--}}
																		{{--																					 value="{{$lender->detail['secured_loans']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="secured_loans_status" @if($lender->secured_loans_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="secured_loans_status" @if($lender->secured_loans_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- unsecured_loans --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Do You Offer Unsecured Loans?</h5>
																		<select name="unsecured_loans" class="form-control @error('unsecured_loans') is-invalid @enderror">
																			@if($lender->unsecured_loans === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{$lender->detail['unsecured_loans']}}" hidden selected>
																					@if ($lender->unsecured_loans === 0) No
																					@elseif ($lender->unsecured_loans === 1) Yes @endif </option>
																			@endif
																			<option value=0>No</option>
																			<option value=1>Yes</option>
																		</select>
																		{{--																		<input type="text" name="unsecured_loans"--}}
																		{{--																					 class="form-control"--}}
																		{{--																					 value="{{$lender->detail['unsecured_loans']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="unsecured_loans_status" @if($lender->unsecured_loans_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="unsecured_loans_status" @if($lender->unsecured_loans_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- online_accounting --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Online Accounting Package Preference</h5>
																		<select name="online_accounting" class="form-control @error('online_accounting') is-invalid @enderror">
																			@if($lender->online_accounting === null)
																				<option value="" hidden>Select...</option>
																			@else
																				<option value="{{$lender->online_accounting}}" hidden selected>
																					@if ($lender->online_accounting === 0) No
																					@elseif ($lender->online_accounting === 1) Yes @endif </option>
																			@endif
																			<option value=0>No</option>
																			<option value=1>Yes</option>
																		</select>
																		{{--																		<input type="text" name="online_accounting"--}}
																		{{--																					 class="form-control"--}}
																		{{--																					 value="{{$lender->detail['online_accounting']}}">--}}
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="online_accounting_status" @if($lender->online_accounting_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="online_accounting_status" @if($lender->online_accounting_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>

																{{-- loan_requirement --}}
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<h5>Ideal Customer Loan Requirement We Service
																		</h5>
																		<textarea rows="3" name="loan_requirement"
																							class="form-control">{{ $lender->loan_requirement }}</textarea>
																	</div>
																	<div class="lender-check"></div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="loan_requirement_status" @if($lender->loan_requirement_status === 1) checked @endif value="1"> Yes
																		</label>
																	</div>
																	<div class="col-lg-3 col-md-3">
																		<label class="custom-control custom-control-success custom-checkbox">
																			<input type="radio" name="loan_requirement_status" @if($lender->loan_requirement_status === 0) checked @endif value="0"> No
																		</label>
																	</div>
																</div>


															</div>
															<div class="card-footer text-right"
																	 style="background-color: #ececec;">
																<input type="hidden" name="lender_id" id="lender_id"
																			 value="{{$lender->lender_id}}">
																<button type="submit" class="btn btn-success">Save
																	Changes
																</button>
															</div>
														</div>
													</div>
												</td>
											</form>
										@endforeach
									@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="margin-top: 30px;">
					<div class="col-sm-12">
						<div class="dataTables_paginate paging_full_numbers text-center"
								 id="demo-datatables-5_paginate">
							<ul class="pagination">
								{{ $lenderDetails->links() }}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
