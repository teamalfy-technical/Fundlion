<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $url);
$link = end($link_array);
$link = ucwords(str_replace("_", " ", $link));
?>

<script src="{{asset('public/pages/assets/lightbox/js/lightbox-plus-jquery.js')}}"></script>
<script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}"></script>
<script src="{{ asset('public/pages/assets/js/jquery.min.js') }}"></script>

@extends('users.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

	<div class="layout-main">
		<div class="layout-content">

			@foreach($clients as $client)
				{{--Update User Account Modal--}}
				<div id="update{{$client->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="blue-theme card-title text-center">{{__("Update User Account")}}</h5>
							</div>
							<form action="{{ route('users.accounts.update',$client->id) }}" method="post">
								@csrf
								<div class="modal-body">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-body">
												<div class="form-group row">
													<label for="name" class="col-md-4 col-form-label text-right text-md-right">{{ __('Full Name:') }}</label>

													<div class="col-md-8">
														<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $client->name }}" required autocomplete="name">
														@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>

												<div class="form-group row">
													<label for="email" class="col-md-4 col-form-label text-right text-md-right">{{ __('E-Mail Address:') }}</label>
													<div class="col-md-8">
														<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $client->email }}" required autocomplete="email">
														@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>

												<div class="form-group row">
													<label for="phone" class="col-md-4 col-form-label text-right text-md-right">{{ __('Phone Number:') }}</label>
													<div class="col-md-8">
														<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $client->phone }}" required autocomplete="phone">
														@error('phone')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>

												<div class="form-group row">
													<label for="role_id" class="col-md-4 col-form-label text-right text-md-right">{{ __('User Role:') }}</label>

													<div class="col-md-8">
														<label for="role_id">Admin </label>&nbsp;
														<input type="radio" name="role_id" id="role_id" value="1"
																	 @if($client->role_id === 1) checked @endif>
														&emsp;
														<label for="role_id">Account Manager </label>&nbsp;
														<input type="radio" name="role_id" id="role_id" value="2"
																	 @if($client->role_id === 2) checked @endif>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<button type="submit" class="btn btn-success">{{__("Save")}}</button>
									<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("Cancel")}}</button>
								</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				{{--Delete User Account Modal--}}
				<div id="delete{{$client->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="blue-theme card-title text-center">{{__("Delete User Account")}}</h5>
							</div>
							<form action="{{ route('users.clients.destroy',$client->id) }}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="modal-body">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-body">
												<h5><span class="text-danger text-center">Are you sure you want to delete this account? This cannot be undone!</span>
												</h5>
											</div>
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<button type="submit" class="btn btn-danger">{{__("Yes")}}</button>
									<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("No")}}</button>
								</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>

				@foreach($clientsFiles as $clientFile)
					@if($clientFile->client_id === $client->id)
						<div id="doc_remove{{$clientFile->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="blue-theme card-title text-center">{{__("Remove Document")}}</h5>
									</div>

									<form action="{{ route('users.documents.remove') }}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="modal-body">
											<div class="col-lg-12">
												<div class="card">
													<div class="card-body">
															<span class="text-center">Are you sure you want to remove this document?
																	<input type="hidden" name="file_id" value="{{$clientFile->id}}"/>
															</span>
													</div>
												</div>
											</div>
										</div>

										<div class="modal-footer">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-danger">{{__("Yes")}}</button>
												<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("No")}}</button>
											</div>
										</div>
									</form>

								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
					@endif
				@endforeach

			@endforeach

			<div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100%;">
				<div class="row gutter-xs">
					<div class="col-lg-10 col-lg-offset-1">
						<h2 style="color: #000000;font-weight: 900;">Hi {{$admin->name}}, <span style="font-weight: 100;">Here are your clients</span>
						</h2>

					</div>
					<div class="row" style="margin-top:50px;">
						<div class="col-lg-10 col-lg-offset-1">
							<!-- <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;"> -->
							<div class="row gutter-xs">
								<div class="col-lg-12">
									@component('components.messages')@endcomponent
									<br>
									<table class="table table-hover table-borderless" style="background-color: #e0e0e0;">
										<thead>
										<tr>
											<th class="text-left">Name</th>
											<th class="text-left">Avatar</th>
											<th class="text-left">Email</th>
											<th class="text-left">Phone</th>
											<th class="text-left">Active</th>
											<th class="text-left">Date</th>
											<th class="text-left">Control</th>
										</tr>
										</thead>
										<tbody>

											@if($admin->role_id === 2)

												@foreach($clientele as $client)

												<tr class="white-rows">
													<td class="text-left">{{ $client->first_name." ".$client->last_name }}</td>
													<td class="text-left">
														@if($client->avatar !== null)<a href="{{asset("storage/app/clients/$client->id/avatar/$client->avatar")}}" data-lightbox="Client Avatar" data-title="{{ $client->first_name." ".$client->last_name }}">
															<img class="circle" src="{{asset("storage/app/clients/$client->id/avatar/$client->avatar")}}" width="25" height="25" alt=""/></a>
														@else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="25" height="25"/> @endif
													</td>
													<td class="text-left">{{ $client->email }}</td>
													<td class="text-left">{{ $client->phone }}</td>
													<td class="text-left">@if($client->active === 1) Yes @else No @endif</td>
													<?php $date = date('d/m/y', strtotime($client->created_at)); ?>
													<td class="text-left">{{$date}}</td>
													<td class="text-left">
														<span class="expand-account icon icon-plus" data-toggle="collapse"
																	data-target="#accDetail{{$client->id}}" class="clickable"></span>
													</td>
												</tr>
												<form action="{{ route('users.clients.update',$client->id) }}" method="post" role="form"
															enctype="multipart/form-data">
													@csrf
													<td style="padding: 0;" colspan="8">
														<div id="accDetail{{$client->id}}" class="collapse">
															<div class="card">
																<div class="card-body">
																	<div class="row">

																		<div class="col-lg-6 col-md-6">

																			<div class="col-lg-6 col-md-6">
																				<div class="form-group">
																					<label for="bank-application" class="text-dark">Select Application</label>
																					<select name="lender_id" id="bank-application" class="form-control">
																						<option value="" hidden>Select...</option>
																						@foreach($loans as $loan)
																							@if($loan !== null && $loan->client_id === $client->id)
																								<option value="{{$loan->lender_id}}">{{$loan->lender->detail['company_name']}} -
																									({{$loan->status['status']}})
																								</option>
																							@endif
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="col-lg-6 col-md-6">
																				<div class="form-group">
																					<label for="loan_status_id" class="text-dark">Set Application Status</label>
																					<select id="loan_status_id" name="loan_status_id" class="form-control">
																						<option value="" hidden> Select...</option>
																						@foreach($statuses as $status)
																							<option value="{{$status->id}}">{{$status->status}}</option>
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="col-lg-6 col-md-6">
																				<a href="{{route('users.messages.inbox')}}" class="btn btn-success" style="width: 100%; margin: 25px 0 15px 0;">Messages</a>
																			</div>
																			<div class="col-lg-6 col-md-6">
																				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$client->id}}" style="width: 100%; margin: 25px 0 15px 0;">Delete Account
																				</button>
																			</div>
																			<div class="col-lg-12 col-md-12">
																				<input type="submit" class="btn btn-success" style="width: 100%; margin: 25px 0 15px 0;" value="Save Changes">
																			</div>

																		</div>

																		<div class="col-lg-6 col-md-6">
																			<div class="col-lg-12 col-md-12">
																				<div class="form-group">
																					<?php $manager_id = $client->manager['id'] ?>
																					<label for="account_manager" class="text-dark">Assign Account Manager</label>
																					<select id="account_manager" name="account_manager" class="form-control">
																						@if($client->manager['id'] !== null)
																							<option value="{{$client->manager['id']}}" selected hidden>{{$client->manager['name']}}</option>
																						@else
																							<option value="" hidden>Select...</option> @endif
																						@foreach($managers as $manager)
																							@if($manager->id !== $client->manager['id'])
																								<option value="{{$manager->id}}">{{$manager->name}}</option>
																							@endif
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="col-lg-12 col-md-12">
																				<h5 class="text-dark">Upload Client Document</h5>
																			</div>

																			<div class="col-lg-5 col-md-5">
																				<div class="form-group">
																					<label for="type_id" class="text-dark">Document Type</label>
																					<select name="type_id" class="form-control">
																						<option value="" hidden>Select document...</option>
																						@foreach($allTypes as $allType)
																							@if($allType->id !== $client->document['type_id'])
																								<option value="{{$allType->id}}">{{$allType->type}}</option>
																							@endif
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="col-lg-7 col-md-7">
																				<label for="type_custom" class="text-dark"> If other, please specify...</label>
																				<input name="type_custom" class="form-control" placeholder="What document are you uploading?">
																				<br>
																			</div>

																			<div class="col-lg-12 col-md-12">

																				<div class="col-lg-6 col-md-6 pull-right">
																					<input type="submit" class="btn btn-success" style="width: 100%;" value="Upload">
																				</div>

																				<div class="col-lg-6 col-md-6 pull-left">
																					<input type="file" name="file" id="file">
																				</div>

																			</div>
																		</div>

																		<div class="col-lg-12 col-md-12">
																			<div class="card uploader" id="uploader" style="padding: 0px;margin-top: 10px; background-color: #eaeaea; border: 1px solid #46474c;border-radius: 10px;">
																				<div class="card-body" style="padding: 0px;">
																					<div class="row">
																						<div class="col-md-12" style="overflow: auto">
																							@foreach($clientsFiles as $clientsFile)
																								@if($clientsFile->client_id === $client->id)
																									<div class="pull-left" style="margin-left:15px">
																										<a href="{{asset("storage/app/clients/$client->id/documents/$clientsFile->file")}}" target="_blank">
																											<img class="card-img img-responsive" style="margin: 10px auto;width: 45px;" src="{{asset('public/pages/assets/img/core-img/doc-file.png')}}" alt="Lloyds">
																											<p class="text-center" style="color: #000000;"> @if($clientsFile->type['id'] < 5) {{$clientsFile->type['type']}} @else {{$clientsFile->type_custom}} @endif </p>
																										</a>
																										<span class="col-md-12 text-center">
																											<a href="{{asset("storage/app/clients/$client->id/documents/$clientsFile->file")}}" target="_blank" style="font-size: 10px">View</a> |
																												<a href="#." class="text-danger" data-toggle="modal" data-target="#doc_remove{{$clientsFile->id}}" title="Click to remove document" style="font-size: 10px">Remove</a>
																										</span>
																									</div>
																								@endif
																							@endforeach
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</td>
												</form>
												@endforeach

												@elseif($admin->role_id === 1)
												@foreach($clients as $client)
												<tr class="white-rows">
													<td class="text-left">{{ $client->first_name." ".$client->last_name }}</td>
													<td class="text-left">
														@if($client->avatar !== null)<a href="{{asset("storage/app/clients/$client->id/avatar/$client->avatar")}}" data-lightbox="Client Avatar" data-title="{{ $client->first_name." ".$client->last_name }}">
															<img class="circle" src="{{asset("storage/app/clients/$client->id/avatar/$client->avatar")}}" width="25" height="25" alt=""/>
														</a>
														@else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="25" height="25"/> @endif
													</td>
													<td class="text-left">{{ $client->email }}</td>
													<td class="text-left">{{ $client->phone }}</td>
													{{--                                            <td class="text-left">{{ $client->role['role'] }}</td>--}}
													<td class="text-left">@if($client->active === 1) Yes @else No @endif</td>
													<?php $date = date('d/m/y', strtotime($client->created_at)); ?>
													<td class="text-left">{{$date}}</td>
													<td class="text-left"><span class="expand-account icon icon-plus" data-toggle="collapse" data-target="#accDetail{{$client->id}}" class="clickable"></span>
													</td>
												</tr>
												<form action="{{ route('users.clients.update',$client->id) }}" method="post" role="form" enctype="multipart/form-data">
													@csrf
													<td style="padding: 0;" colspan="8">
														<div id="accDetail{{$client->id}}" class="collapse">
															<div class="card">
																<div class="card-body">
																	<div class="row">

																		<div class="col-lg-6 col-md-6">

																			<div class="col-lg-6 col-md-6">
																				<div class="form-group">
																					<label for="bank-application" class="text-dark">Select Application</label>
																					<select name="lender_id" id="bank-application" class="form-control">
																						<option value="" hidden>Select...</option>
																						@foreach($loans as $loan)
																							@if($loan !== null && $loan->client_id === $client->id)
																								<option value="{{$loan->lender_id}}">{{$loan->lender->detail['company_name']}} -
																									({{$loan->status['status']}})
																								</option>
																							@endif
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="col-lg-6 col-md-6">
																				<div class="form-group">
																					<label for="loan_status_id" class="text-dark">Set Application Status</label>
																					<select id="loan_status_id" name="loan_status_id" class="form-control">
																						<option value="" hidden> Select...</option>
																						@foreach($statuses as $status)
																							<option value="{{$status->id}}">{{$status->status}}</option>
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="col-lg-6 col-md-6">
																				<a href="{{route('users.messages.inbox')}}" class="btn btn-success" style="width: 100%; margin: 25px 0 15px 0;">Messages</a>
																			</div>
																			<div class="col-lg-6 col-md-6">
																				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$client->id}}" style="width: 100%; margin: 25px 0 15px 0;">Delete Account
																				</button>
																			</div>
																			<div class="col-lg-12 col-md-12">
																				<input type="submit" class="btn btn-success" style="width: 100%; margin: 25px 0 15px 0;" value="Save Changes">
																			</div>

																		</div>

																		<div class="col-lg-6 col-md-6">
																			<div class="col-lg-12 col-md-12">
																				<div class="form-group">
																					<?php $manager_id = $client->manager['id'] ?>
																					<label for="account_manager" class="text-dark">Assign Account Manager</label>
																					<select id="account_manager" name="account_manager" class="form-control">
																						@if($client->manager['id'] !== null)
																							<option value="{{$client->manager['id']}}" selected hidden>{{$client->manager['name']}}</option>
																						@else
																							<option value="" hidden>Select...</option> @endif
																						@foreach($managers as $manager)
																							@if($manager->id !== $client->manager['id'])
																								<option value="{{$manager->id}}">{{$manager->name}}</option>
																							@endif
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="col-lg-12 col-md-12">
																				<h5 class="text-dark">Upload Client Document</h5>
																			</div>

																			<div class="col-lg-5 col-md-5">
																				<div class="form-group">
																					<label for="type_id" class="text-dark">Document Type</label>
																					<select name="type_id" class="form-control">
																						<option value="" hidden>Select document...</option>
																						@foreach($allTypes as $allType)
																							@if($allType->id !== $client->document['type_id'])
																								<option value="{{$allType->id}}">{{$allType->type}}</option>
																							@endif
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="col-lg-7 col-md-7">
																				<label for="type_custom" class="text-dark"> If other, please specify...</label>
																				<input name="type_custom" class="form-control" placeholder="What document are you uploading?">
																				<br>
																			</div>

																			<div class="col-lg-12 col-md-12">

																				<div class="col-lg-6 col-md-6 pull-right">
																					<input type="submit" class="btn btn-success" style="width: 100%;" value="Upload">
																				</div>

																				<div class="col-lg-6 col-md-6 pull-left">
																					<input type="file" name="file" id="file">
																				</div>

																			</div>
																		</div>

																		<div class="col-lg-12 col-md-12">
																			<div class="card uploader" id="uploader" style="padding: 0px;margin-top: 10px; background-color: #eaeaea; border: 1px solid #46474c;border-radius: 10px;">
																				<div class="card-body" style="padding: 0px;">
																					<div class="row">
																						<div class="col-md-12" style="overflow: auto">
																							@foreach($clientsFiles as $clientsFile)
																								@if($clientsFile->client_id === $client->id)
																									<div class="pull-left" style="margin-left:15px">
																										<a href="{{asset("storage/app/clients/$client->id/documents/$clientsFile->file")}}" target="_blank">
																											<img class="card-img img-responsive" style="margin: 10px auto;width: 45px;" src="{{asset('public/pages/assets/img/core-img/doc-file.png')}}" alt="Lloyds">
																											<p class="text-center" style="color: #000000;"> @if($clientsFile->type['id'] < 5) {{$clientsFile->type['type']}} @else {{$clientsFile->type_custom}} @endif </p>
																										</a>
																										<span class="col-md-12 text-center">
																											<a href="{{asset("storage/app/clients/$client->id/documents/$clientsFile->file")}}" target="_blank" style="font-size: 10px">View</a> |
																												<a href="#." class="text-danger" data-toggle="modal" data-target="#doc_remove{{$clientsFile->id}}" title="Click to remove document" style="font-size: 10px">Remove</a>
																										</span>
																									</div>
																								@endif
																							@endforeach
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																	</div>
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
							<div class="dataTables_paginate paging_full_numbers text-center" id="demo-datatables-5_paginate">
								<ul class="pagination">
									@if($admin->role_id === 2) {{ $clientele->links() }} @else {{ $clients->links() }} @endif
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
    $(function () {
      $("#type_id1").on('change', function () {
        console.log($(this).val());
        if ($(this).val() === "6") {
          $("#customs1").show(300);
          $("#cus_lab1").show(300);
        } else {
          $("#customs1").hide(300);
          $("#cus_lab1").hide(300);
        }
      });

      $("#type_id2").on('change', function () {
        console.log($(this).val());
        if ($(this).val() === "6") {
          $("#customs2").show(300);
          $("#cus_lab2").show(300);
        } else {
          $("#customs2").hide(300);
          $("#cus_lab2").hide(300);
        }
      });
    });
	</script>

@endsection
