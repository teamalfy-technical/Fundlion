<?php
	$url = $_SERVER['REQUEST_URI'];
	$link_array = explode('/', $url);
	$link = end($link_array);
	$link = ucwords(str_replace("_", " ", $link));
	$link = ucwords(str_replace("-", " ", $link));
?>

<div class="layout-header">
	<div class="navbar navbar-default">
		<div class="navbar-header">
			<a class="navbar-brand navbar-brand-center" href="{{route('clients.dashboard')}}">
				<img class="navbar-brand-logo" src="{{asset('public/pages/assets/img/core-img/logo2.png')}}" alt="fundlion">
			</a>
			<button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
				<span class="sr-only">Toggle navigation</span>
				<span class="bars">
					<span class="bar-line bar-line-1 out"></span>
					<span class="bar-line bar-line-2 out"></span>
					<span class="bar-line bar-line-3 out"></span>
				</span>
				<span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
			</button>
			<button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="arrow-up"></span>
				<span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32"
									 src="{{asset('public/pages/assets/img/0180441436.jpg')}}" alt="Teddy Wilson">
            </span>
			</button>
		</div>
		<div class="navbar-toggleable" style="background-color: #fff;">
			<nav id="navbar" class="navbar-collapse collapse">
				<button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
				</button>
				<ul class="nav navbar-nav navbar-right">
					<li class="visible-xs-block">
						<h4 class="navbar-text text-center">
							Hi, {{ Auth::user('client')->first_name ." ". Auth::user('client')->last_name }}</h4>
					</li>

					<li class="dropdown hidden-xs">
						<button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
							@if($client->avatar !== null)
								<img class="circle" src="{{asset("storage/app/clients/$client->id/avatar/$client->avatar")}}" width="36" height="36" alt=""/>
							@else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="36" height="36"/> @endif
							<span>&nbsp;{{ $client->first_name }}</span>
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="{{route('clients.account')}}">Profile</a></li>
							<li class="divider"></li>
							<li><a href="{{route('clients.logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a></li>
						</ul>
					</li>
					<li class="visible-xs-block">
						<a href="contacts.html">
							<span class="icon icon-users icon-lg icon-fw"></span>Contacts
						</a>
					</li>
					<li class="visible-xs-block">
						<a href="{{route('clients.account',$client->id)}}">
							<span class="icon icon-user icon-lg icon-fw"></span>Profile
						</a>
					</li>
					<li class="visible-xs-block">
						<a href="{{route('clients.logout')}}"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<span class="icon icon-power-off icon-lg icon-fw"></span>Sign out
						</a>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
							<span class="icon-with-child hidden-xs">
								<span class="icon icon-bell-o icon-lg"></span>
								@if($client->unreadNotifications->count() !== 0)
									<span class="badge badge-primary badge-above right">{{ $client->unreadNotifications->count() }}</span>
								@endif
							</span>
							<span class="visible-xs-block">
								<span class="icon icon-bell icon-lg icon-fw"></span>
								<span class="badge badge-primary pull-right"></span>Notifications
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
							<div class="dropdown-header">
								<a class="dropdown-link" href="{{ route('clients.notifications.all',$client->id) }}">Mark all as read</a>
								<h5 class="dropdown-heading">Recent Notifications</h5>
							</div>
							<div class="dropdown-body">
								<div class="list-group list-group-divided custom-scrollbar">

									@foreach ($client->unreadNotifications->take(7) as $notification)
									@if ($notification !== null)
											<?php
											$date = strtotime($notification->created_at);
											$dd = date("j/m", $date);
											$tt = date("H:ia", $date);
											?>
										<a class="list-group-item" style="background-color: #e9faff" href="{{route('clients.notifications.read',$notification->id)}}">
											<div class="notification">
												<div class="notification-media">
													<span class="icon icon-flag bg-success circle sq-40"></span>
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">{{$dd." - ".$tt}}</small>
													<h5 class="notification-heading">Update Status</h5>
													<p class="notification-text">
														<small class="truncate"><b>{{ $notification->data['data'] }}</b></small>
													</p>
												</div>
											</div>
										</a>
										{{-- <a href="#.">{{ $notification->data['data'] }} </a> --}}
									@else <a href="#.">No New Notification</a> @endif
									@endforeach

									@foreach ($client->readNotifications->take(7) as $notification)
									@if ($notification !== null)
												<?php
												$date = strtotime($notification->created_at);
												$dd = date("j/m", $date);
												$tt = date("H:ia", $date);
												?>
										<a class="list-group-item" href="#.">
											<div class="notification">
												<div class="notification-media">
													<span class="icon icon-flag bg-success circle sq-40"></span>
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">{{$dd." - ".$tt}}</small>
													<h5 class="notification-heading">Update Status</h5>
													<p class="notification-text">
														<small class="truncate">{{ $notification->data['data'] }}</small>
													</p>
												</div>
											</div>
										</a>
										{{-- <a href="#.">{{ $notification->data['data'] }} </a> --}}
									@else <a href="#.">No New Notification</a> @endif
									@endforeach

								</div>
							</div>
							<div class="dropdown-footer">
								<a class="dropdown-btn" href="#.">See All</a>
{{--								<a class="dropdown-btn" href="{{ route('clients.notifications.view') }}">See All</a>--}}
							</div>
						</div>
					</li>

				</ul>
				<form id="logout-form" action="{{ route('clients.logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
				<div class="title-bar">
					<!-- <h1 class="title-bar-title">
							<span class="d-ib">Dasxxhboard</span>
					</h1> -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb" style="margin: 10px 0px 10px 0px;font-size: 15px;">
							<li class="breadcrumb-item"><a href="{{route('clients.dashboard')}}" class="text-muted">Dashboard</a></li>
							@if($link !== "Dashboard")
							<li class="breadcrumb-item active" style="color: #FF5722;" aria-current="page">{{$link}}</li>
							@endif
						</ol>
					</nav>
				</div>
			</nav>
		</div>
	</div>
</div>
