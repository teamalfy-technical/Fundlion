<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $url);
$link = end($link_array);
$link = ucwords(str_replace("_", " ", $link));
?>

<script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}"></script>

@extends('clients.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

	<div class="layout-main">

		<div class="layout-content">

			<div id="funding" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="blue-theme card-title text-center">{{__("Funding Options")}}</h5>
						</div>

						<form action="{{route('clients.funding')}}" method="post" role="form">
							@csrf
							<div class="modal-body">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-body">
											<div class="input-group" style="margin: 14px 0;">
												<span class="input-group-addon">£</span>
												<input name="loan_amount" class="form-control" type="number" min="0" style="border-radius: 0 15px 15px 0;"
															 placeholder="How much finance do you need?" required>
											</div>

											<div class="form-group">
												<select name="loan_purpose_id" class="form-control" style="font-size: 12px;height: 38px;margin: 10px 0; border-radius: 15px;" required>
													<option readonly hidden>What is the finance for?</option>
													@foreach($loanPurposes as $loanPurpose)
														<option value="{{$loanPurpose->id}}">{{$loanPurpose->purpose}}</option>
													@endforeach
												</select>
											</div>

											<div class="form-group">
												<select name="loan_duration_id" class="form-control" style="font-size: 12px;height: 38px;border-radius: 15px;" required>
													<option readonly hidden>How long do you need the finance for?</option>
													@foreach($loanDurations as $loanDuration)
														<option value="{{$loanDuration->id}}">{{$loanDuration->duration}}</option>
													@endforeach
												</select>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<div class="col-md-12">
									<input type="hidden" name="client_id" value="{{$client->id}}">
									{{-- <button type="submit" class="btn bg-success" style="width: 100%; color: #fff;border-radius: 15px;">Continue</button> --}}
									<button type="submit" class="btn btn-success">{{__("Submit")}}</button>
									<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("Cancel")}}</button>
								</div>
							</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>

			<div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;"> {{--height: 100%;--}}
				<div class="row gutter-xs col-md-12">
					<div class="col-lg-6 col-md-6">
						<h2 style="color: #000000;font-weight: 900;">Hi {{$client->first_name}}, <span style="font-weight: 100;">Here are our Lenders</span></h2>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="row gutter-xs" style="margin: 30px 0;">
							<div class="col-lg-12">
								<div class="form-group">
									<label class="col-sm-5 control-label" style="text-align: right;font-size: 20px;font-weight: 100;color: #000;">Search Lenders</label>
									<div class="col-sm-7">
										<form id="search-form" action="{{route('clients.lenders.search')}}" method="post" role="form">
											@csrf
											<div class="input-group">
												<input name="search_key" style="height: 27px;" class="form-control" type="text">
												<span class="input-group-btn">
													<label class="btn btn-default file-upload-btn">
															<a href="{{ route('clients.lenders.search') }}" onclick="event.preventDefault(); document.getElementById('search-form').submit();"><span class="icon icon-search icon-lg"></span></a>
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

{{--				<div class="row">--}}
{{--					<div class="col-lg-10 col-lg-offset-1">--}}
{{--						<div class="row gutter-xs" style="margin: 30px 0;">--}}
{{--							<div class="col-lg-7 col-lg-offset-5">--}}
{{--								<div class="form-group">--}}
{{--									<label class="col-sm-5 control-label" style="text-align: right;font-size: 20px;font-weight: 100;color: #000;">Search Lenders</label>--}}
{{--									<div class="col-sm-7">--}}
{{--										<form id="search-form" action="{{route('clients.lenders.search')}}" method="post" role="form">--}}
{{--											@csrf--}}
{{--											<div class="input-group">--}}
{{--												<input name="search_key" style="height: 27px;" class="form-control" type="text">--}}
{{--												<span class="input-group-btn">--}}
{{--													<label class="btn btn-default file-upload-btn">--}}
{{--															<a href="{{ route('clients.lenders.search') }}" onclick="event.preventDefault(); document.getElementById('search-form').submit();"><span class="icon icon-search icon-lg"></span></a>--}}
{{--													</label>--}}
{{--												</span>--}}
{{--											</div>--}}
{{--										</form>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}

				<!-- new -->
				<div class="row">

					<div class="row gutter-xs">
						<div class="col-lg-10 col-lg-offset-1">

							@component('components.messages')@endcomponent

							<div class="table-responsive">
								<table class="table" style="background-color: #e0e0e0;">

									<thead class="text-center">
									<tr>
										<th>Lender</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Rate</th>
										<th>Response Time</th>
{{--										<th>Fees</th>--}}
										<th></th>
										<th></th>
									</tr>
									</thead>

									<tbody>
									@if($lenders !== null)
										@foreach($lenders as $lender)
											<tr class="white-rows">
												<td class="vertical-align-middle">
													<?php $img = $lender->logo; ?>
													@if($lender->logo !== null)
															<a href="{{route('clients.lenders.profile',$lender->lender_id)}}" title="Lender's Profile">
																<img style="margin: 0px;padding: 0px;" width="70" src="{{asset("storage/app/lenders/$lender->lender_id/logo/$img")}}">
																@else<img width="70" src="{{asset("public/pages/assets/img/default/no-image.jpg")}}">@endif
															</a>
												</td>
												<td class="vertical-align-middle">{{ $lender->lender['email'] }}</td>
												<td class="vertical-align-middle">{{ $lender->customer_service_phone }}</td>
												<td class="vertical-align-middle orange">{{$lender->interest_rate}}%</td>
												<td class="vertical-align-middle">{{ $lender->response['response_time']}}</td>
												<td class="vertical-align-middle"><a href="{{route('clients.lenders.profile',$lender->lender_id)}}" class="btn btn-success btn-sm">View Profile</a></td>

													<form action="{{ route('clients.loans.apply') }}" method="post" role="form">
														@csrf

														<td class="vertical-align-middle">
														<input type="hidden" name="lender_id" value="{{ $lender->lender_id }}">
														<input type="hidden" name="loan_rate" value="{{ $lender->interest_rate }}">
														@if($funding !== null)
															<input type="hidden" name="loan_amount" value="{{ $funding->loan_amount }}">
															<input type="hidden" name="loan_purpose_id" value="{{ $funding->loan_purpose_id }}">
															<input type="hidden" name="loan_duration_id" value="{{ $funding->loan_duration_id }}">
															<input type="hidden" name="loan_status_id" value="1">
														@endif
														@if($funding === null)
															<button type="button" class="btn btn-info btn-sm"
																			data-toggle="modal" data-target="#funding"
																			title="You have no funding options set">Set Funding Options
															</button>
														@else
															<?php
															$loans = \App\FlClientsLoan::where('client_id', $client->id)->where('lender_id', $lender->lender_id)->first();
															?>
															@if ($loans === null)
																<button type="submit" class="btn btn-success btn-sm"
																				title="Click to apply for this loan"> Apply Now {{$loans}}
																</button>
															@elseif ($loans !== null && $loans->loan_status_id !== 4)
																<button type="button" class="btn btn-dark btn-sm"
																				title="You have already applied for this loan" disabled> Application
																	Submitted </button>
															@endif
															@if ($loans !== null && $loans->loan_status_id === 4)
																	<button type="submit" class="btn btn-success btn-sm"
																					title="Click to apply for this loan"> Apply Now
																	</button>
															@endif
														@endif
														</td>
													</form>

											</tr>
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
						<div class="dataTables_paginate paging_full_numbers text-center" id="demo-datatables-5_paginate">
							<ul class="pagination">
								{{$lenders->links()}}
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection
