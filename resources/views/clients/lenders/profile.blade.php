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
			<div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100%;">
				<div class="row gutter-xs">
					<div class="col-lg-8 col-lg-offset-1">
						<h2 style="color: #000000;font-weight: 900;">{{$lender->detail['company_name']}}</h2>
						{{--                        <p>{{$lender->detail['description']}}</p>--}}
					</div>
					<div class="col-lg-2" style="margin-top: 0px; bottom:0;">
						<form action="{{ route('clients.loans.apply') }}" method="post" role="form">
							@csrf
							<input type="hidden" name="lender_id" value="{{ $lender->id }}">
							<input type="hidden" name="loan_rate" value="{{ $lender->detail['interest_rate'] }}">
							@if($funding !== null)
								<input type="hidden" name="loan_amount" value="{{ $funding->loan_amount }}">
								<input type="hidden" name="loan_purpose_id" value="{{ $funding->loan_purpose_id }}">
								<input type="hidden" name="loan_duration_id" value="{{ $funding->loan_duration_id }}">
								<input type="hidden" name="loan_status_id" value="1">
							@endif
							@if($funding === null)
								<button type="button" class="btn btn-info" style="margin-top:20px;margin-bottom: 20px;"
												data-toggle="modal" data-target="#funding" title="You have no funding options set">Set Funding
									Options
								</button>
							@else
								<?php $loans = \App\FlClientsLoan::where('client_id', $client->id)->where('lender_id', $lender->id)->first()?>
								@if ($loans === null)
									<button type="submit" class="btn btn-success" style="margin-top:20px;margin-bottom: 20px;"
													title="Click to apply for this loan"> Apply For Loan
									</button>
								@else
									<button type="button" class="btn btn-dark" style="margin-top:20px;margin-bottom: 20px;"
													title="You have already applied for this loan" disabled> Application Submitted
									</button>
								@endif
							@endif
						</form>
						{{--                        <button style="bottom: 0;" class="btn btn-success">Apply For Loan</button>--}}
					</div>
				</div>

				<div class="row" style="margin-top: 30px;">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="row gutter-xs">
							<div class="col-lg-12">
								<div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);"><h3
										class="text-center" style="color: #000000; font-weight: 900;">Company Profile</h3>
									<hr>
									<div class="card-body no-border">
										<div class="row grid-divider">

											<div class="col-lg-7 col-md-7" style="padding: 0 30px;color: #0b0b0b">
												<h4 style="text-decoration: underline">Description</h4>
												<p id="description">{{ $lender->detail['description'] }}</p>
											</div>

											<div class="col-lg-5 col-md-5">
												<h3 style="color: #000000; font-weight: 900;" hidden>Lender Details</h3>
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div>
															{{--                                                            <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="{{asset("storage/app/lenders/$lender->id/logo/$img")}}" alt="">--}}
															<?php $img = $lender->detail['logo']; ?>
															<img class="circle" width="120" height="120"
																	 src="{{asset("storage/app/lenders/$lender->id/logo/$img")}}"
																	 alt="{{$lender->detail['company_name']}}">
															<!-- < -->
														</div>
													</div>

													<div class="col-lg-7 col-md-7">
														<h2 style="color: #000; font-weight: 900;">{{$lender->detail['company_name']}}</h2>
														<div class="media" hidden>
															<div class="media-middle media-left">
																<a href="#"><img width="20" height="20"
																								 src="{{asset('public/pages/assets/img/core-img/phone-call.png')}}"></a>
															</div>
															<div class="media-middle media-body" style="color: #000;"><h5 class="m-y-0">
																	(+44) {{$lender->phone}}</h5></div>
														</div>

														<div class="media" hidden>
															<div class="media-middle media-left">
																<a href="#"><img width="20" height="20"
																								 src="{{asset('public/pages/assets/img/core-img/mail.png')}}"
																								 alt="Harry Jones"></a>
															</div>

															<div class="media-middle media-body" style="color: #000;">
																<h5 class="m-y-0">{{$lender->email}}</h5>
															</div>
														</div>

														<div class="media">
															<div class="media-middle media-left">
																<a href="#"><img width="20" height="20"
																								 src="{{asset('public/pages/assets/img/core-img/location.png')}}"
																								 alt="Harry Jones"></a>
															</div>

															<div class="media-middle media-body" style="color: #000;">
																<h5 class="m-y-0">{{$lender->detail['website']}}</h5>
															</div>
														</div>
													</div>
												</div>

												<div class="row" style="margin-top: 20px;" hidden
												<div class="col-lg-7 col-md-7">
													<div class="media">
														<div class="media-middle media-left">
															<a href="#"><img class="img-circle" width="40" height="40"
																							 src="{{asset('public/pages/assets/img/core-img/location.png')}}"
																							 alt="Harry Jones"></a>
														</div>

														<div class="media-middle media-body" style="color: #000;">
															<h5 class="m-y-0" style="font-size: 18px;">24 East Avenue</h5>
															<small>Harrow, London</small>
															<br>
															<small>HA 13 6DS</small>
														</div>
													</div>
												</div>

												<div class="col-lg-5 col-md-5 text-right" hidden>
													<button class="btn btn-success">Edit Details</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="margin-top: 30px;">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="row gutter-xs">
							<div class="col-lg-12">
								<div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);"><h3
										class="text-center" style="color: #000000; font-weight: 900;">Contact Person</h3>
									<hr>
									<div class="card-body no-border">
										<div class="row grid-divider">

											<div class="col-lg-12 col-md-12" style="padding: 0 30px;">

												<div class="col-md-6">
													<div class="row profile-margin">
														<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Full Name:</p></div>
														<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->first_name." ".$lender->last_name}}</p></div>
													</div>
													<div class="row profile-margin">
														<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Job Title:</p></div>
														<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->job_title}}</p></div>
													</div>
													<div class="row profile-margin">
														<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Email:</p></div>
														<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->email}}</p></div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="row profile-margin">
														<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Office Phone:</p></div>
														<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->phone}}</p></div>
													</div>
													<div class="row profile-margin">
														<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Mobile:</p></div>
														<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->mobile}}</p></div>
													</div>
													<div class="row profile-margin">
														<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Skype:</p></div>
														<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->skype}}</p></div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="margin-top: 60px;">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="row gutter-xs">
							<div class="col-lg-12">
								<div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);"><h3 class="text-center" style="color: #000000; font-weight: 900;">Company Details</h3>
									<hr>
									<div class="card-body no-border">

										<div class="row grid-divider">
											<div class="col-lg-12" style="padding: 0 30px;">
												<div class="col-md-6">

													@if($lender->detail['address_one_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Address One :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['address_one']}}</p></div>
														</div>
													@endif

													@if($lender->detail['address_two'] !== null && $lender->detail['address_two_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Address Two :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['address_two']}}</p></div>
														</div>
													@endif

													@if($lender->detail['city_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">City :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['city']}}</p></div>
														</div>
													@endif

													@if($lender->detail['zip_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Zip :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['zip']}}</p></div>
														</div>
													@endif

													@if($lender->detail['country_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Country :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail->country['country']}}</p></div>
														</div>
													@endif

													@if($lender->detail['customer_service_phone_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Customer Service Phone :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['customer_service_phone']}}</p>
															</div>
														</div>
													@endif

													@if($lender->detail['website_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Website :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['website']}}</p></div>
														</div>
													@endif

													@if($lender->detail['commission_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Fundlion Commission :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['commission']}}%</p></div>
														</div>
													@endif

													@if($lender->detail['signing_date_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Contract Date :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['signing_date']}}</p></div>
														</div>
													@endif

													@if($lender->detail['payment_terms_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Commission Payment Terms :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['payment_terms']}}</p></div>
														</div>
													@endif

													@if($lender->detail['web_api_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Use Of Fundlion API :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">@if($lender->detail['web_api'] === 0) No @else Yes @endif</p></div>
														</div>
													@endif

														@if($lender->detail['leads_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Receive Fundlion Leads :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">@if($lender->detail['leads'] === 0) No @else Yes @endif</p></div>
															</div>
														@endif

														@if($lender->detail['lending_products_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Lending Products :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">
																		<?php $lending_products = explode(",", $lender->detail['lending_products']); ?>
																		@foreach($lending_products as $lending_product) {{$lending_product}}, @endforeach
																	</p>
																</div>
															</div>
														@endif

														@if($lender->detail['response_time_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Response Time :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail->response['response_time']}}</p></div>
															</div>
														@endif

														@if($lender->detail['process_time_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Process Time :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail->process['process_time']}}</p></div>
															</div>
														@endif

														@if($lender->detail['interest_rate_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Interest Rate :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['interest_rate']}}%</p></div>
															</div>
														@endif

														@if($lender->detail['loan_size_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Loan Size :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">£{{$lender->detail['loan_size']}}</p></div>
															</div>
														@endif

														@if($lender->detail['additional_fees_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Additional Fees :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['additional_fees']}}</p></div>
															</div>
														@endif

														@if($lender->detail['lender_industry_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Lender Industry :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail->industry['industry']}}</p></div>
															</div>
														@endif

														@if($lender->detail['signing_date_status'] === 1)
															<div class="row profile-margin">
																<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Contract Date :</p></div>
																<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['signing_date']}}</p></div>
															</div>
														@endif

												</div>

												<div class="col-md-6">

													@if($lender->detail['business_structure_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Business Structure :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{ $lender->detail->structure['structure'] }}</p></div>
														</div>
													@endif

													@if($lender->detail['loan_countries_status'] === 1)
														<div class="row">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Loan Countries :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">
																	<?php $loan_countries = explode(",", $lender->detail['loan_countries']); ?>
																	@foreach($loan_countries as $loan_country) {{$loan_country}}, @endforeach</p>
															</div>
														</div>
													@endif

													@if($lender->detail['annual_revenue_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Business Annual Revenue Requirement :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">
																	@if ($lender->detail['annual_revenue'] === 0) No
																	@elseif ($lender->detail['annual_revenue'] === 1) Yes @endif</p>
															</div>
														</div>
													@endif

													@if($lender->detail['revenue_amount_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Revenue Amount :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">£{{$lender->detail['revenue_amount']}}</p></div>
														</div>
													@endif

													@if($lender->detail['profitable_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Profitable Company Requirement :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">
																	@if ($lender->detail['profitable'] === 0) No
																	@elseif ($lender->detail['profitable'] === 1) Yes @endif</p>
															</div>
														</div>
													@endif

													@if($lender->detail['minmax_length_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Minimum & Maximum Length of The Loan Term :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{ $lender->detail->minmax['duration'] }}</p></div>
														</div>
													@endif

													@if($lender->detail['additional_documents_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Additional Documents :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">
																	<?php $additional_documents = explode(",", $lender->detail['additional_documents']); ?>
																	@foreach($additional_documents as $additional_document) {{$additional_document}}, @endforeach</p>
															</div>
														</div>
													@endif

													@if($lender->detail['secured_loans_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Secured Loans Offer :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">
																	@if ($lender->detail['secured_loans'] === 0) No
																	@elseif ($lender->detail['secured_loans'] === 1) Yes @endif</p>
															</div>
														</div>
													@endif

													@if($lender->detail['unsecured_loans_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Unsecured Loans Offer :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">
																	@if ($lender->detail['unsecured_loans'] === 0) No
																	@elseif ($lender->detail['unsecured_loans'] === 1) Yes @endif</p>
															</div>
														</div>
													@endif

													@if($lender->detail['online_accounting_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Online Accounting Package Preference :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">
																	@if ($lender->detail['online_accounting'] === 0) No
																	@elseif ($lender->detail['online_accounting'] === 1) Yes @endif</p>
															</div>
														</div>
													@endif

													@if($lender->detail['loan_requirement_status'] === 1)
														<div class="row profile-margin">
															<div class="col-lg-5"><p style="font-weight: 900;color: #000000;font-size: 16px;text-align: right;">Ideal Customer Loan Requirement :</p></div>
															<div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;">{{$lender->detail['loan_requirement']}}</p></div>
														</div>
													@endif

												</div>


											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{--				<div class="row" style="margin-top: 60px;">--}}
				{{--					<div class="col-lg-10 col-lg-offset-1">--}}
				{{--						<div class="row gutter-xs">--}}
				{{--							<div class="col-lg-12">--}}
				{{--								<div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);"><h3--}}
				{{--										class="text-center" style="color: #000000; font-weight: 900;">Company Documents</h3>--}}
				{{--									<hr>--}}
				{{--									<div class="card-body no-border">--}}
				{{--										<div class="row grid-divider">--}}
				{{--											<div class="col-lg-12" style="padding: 0 30px;">--}}

				{{--												<div class="row" style="margin-top: 30px;overflow-x: auto;white-space: nowrap;">--}}
				{{--													<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">--}}
				{{--														<div class="card files">--}}
				{{--															<span class="delete_file">x</span>--}}
				{{--															<div class="card-image">--}}
				{{--																<img class="card-img img-responsive" style="margin: 20px auto;width: 75px;"--}}
				{{--																		 src="{{asset('public/pages/assets/img/core-img/pdf-file.png')}}" alt="Lloyds">--}}
				{{--															</div>--}}
				{{--														</div>--}}
				{{--														<h4 class="text-center" style="color: #000000;">Passport</h4>--}}
				{{--													</div>--}}

				{{--													<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">--}}
				{{--														<div class="card files">--}}
				{{--															<span class="delete_file">x</span>--}}
				{{--															<div class="card-image">--}}
				{{--																<img class="card-img img-responsive" style="margin: 20px auto;width: 75px;"--}}
				{{--																		 src="{{asset('public/pages/assets/img/core-img/pdf-file.png')}}" alt="Lloyds">--}}
				{{--															</div>--}}
				{{--														</div>--}}
				{{--														<h4 class="text-center" style="color: #000000;">Bank Statement</h4>--}}
				{{--													</div>--}}

				{{--													<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">--}}
				{{--														<div class="card files">--}}
				{{--															<span class="delete_file">x</span>--}}
				{{--															<div class="card-image">--}}
				{{--																<img class="card-img img-responsive" style="margin: 20px auto;width: 75px;"--}}
				{{--																		 src="{{asset('public/pages/assets/img/core-img/pdf-file.png')}}" alt="Lloyds">--}}
				{{--															</div>--}}
				{{--														</div>--}}
				{{--														<h4 class="text-center" style="color: #000000;">I.D</h4>--}}
				{{--													</div>--}}

				{{--													<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">--}}
				{{--														<div class="card files">--}}
				{{--															<span class="delete_file">x</span>--}}
				{{--															<div class="card-image">--}}
				{{--																<img class="card-img img-responsive" style="margin: 20px auto;width: 75px;"--}}
				{{--																		 src="{{asset('public/pages/assets/img/core-img/pdf-file.png')}}" alt="Lloyds">--}}
				{{--															</div>--}}
				{{--														</div>--}}
				{{--														<h4 class="text-center" style="color: #000000;">Other File</h4>--}}
				{{--													</div>--}}

				{{--													<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">--}}
				{{--														<div class="card files">--}}
				{{--															<span class="delete_file">x</span>--}}
				{{--															<div class="card-image">--}}
				{{--																<img class="card-img img-responsive" style="margin: 20px auto;width: 75px;"--}}
				{{--																		 src="{{asset('public/pages/assets/img/core-img/pdf-file.png')}}" alt="Lloyds">--}}
				{{--															</div>--}}
				{{--														</div>--}}
				{{--														<h4 class="text-center" style="color: #000000;">Other File</h4>--}}
				{{--													</div>--}}

				{{--													<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">--}}
				{{--														<div class="card files">--}}
				{{--															<span class="delete_file">x</span>--}}
				{{--															<div class="card-image">--}}
				{{--																<img class="card-img img-responsive" style="margin: 20px auto;width: 75px;"--}}
				{{--																		 src="{{asset('public/pages/assets/img/core-img/pdf-file.png')}}" alt="Lloyds">--}}
				{{--															</div>--}}
				{{--														</div>--}}
				{{--														<h4 class="text-center" style="color: #000000;">Other File</h4>--}}
				{{--													</div>--}}

				{{--													<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">--}}
				{{--														<div class="card files">--}}
				{{--															<span class="delete_file">x</span>--}}
				{{--															<div class="card-image">--}}
				{{--																<img class="card-img img-responsive" style="margin: 20px auto;width: 75px;"--}}
				{{--																		 src="{{asset('public/pages/assets/img/core-img/pdf-file.png')}}" alt="Lloyds">--}}
				{{--															</div>--}}
				{{--														</div>--}}
				{{--														<h4 class="text-center" style="color: #000000;">Other File</h4>--}}
				{{--													</div>--}}

				{{--													<div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">--}}
				{{--														<div class="card files">--}}
				{{--															<span class="delete_file">x</span>--}}
				{{--															<div class="card-image">--}}
				{{--																<img class="card-img img-responsive" style="margin: 20px auto;width: 75px;"--}}
				{{--																		 src="{{asset('public/pages/assets/img/core-img/pdf-file.png')}}" alt="Lloyds">--}}
				{{--															</div>--}}
				{{--														</div>--}}
				{{--														<h4 class="text-center" style="color: #000000;">Other File</h4>--}}
				{{--													</div>--}}
				{{--												</div>--}}
				{{--											</div>--}}
				{{--										</div>--}}
				{{--									</div>--}}
				{{--								</div>--}}
				{{--							</div>--}}
				{{--						</div>--}}
				{{--					</div>--}}
				{{--				</div>--}}

			</div>


		</div>
	</div>

@endsection
