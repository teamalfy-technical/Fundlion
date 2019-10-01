<div class="layout-sidebar">
    <div class="layout-sidebar-backdrop"></div>
    <div class="layout-sidebar-body">
        <div class="custom-scrollbar">

            <?php
            $url = $_SERVER['REQUEST_URI'];
            $link_array = explode('/',$url);
            $link = end($link_array);
            $user_role = \Illuminate\Support\Facades\Auth::user('client')->role_id;
            ?>

            <nav id="sidenav" class="sidenav-collapse collapse">
                <ul class="sidenav level-1">
                    <li class="sidenav-heading" style="font-size:16px;color: #fff;">PROFILE</li>
                    <li class="sidenav-item @if(@$link_array[2] === "dashboard" || @$link_array[3] === "dashboard") active @endif">
                        <a href="{{route('clients.dashboard')}}" aria-haspopup="true"><span class="sidenav-icon icon icon-works">&#103;</span><span class="sidenav-label"> Dashboard</span></a>
                    </li>
                    <li class="sidenav-item @if(@$link_array[2] === "messages" || @$link_array[3] === "messages") active @endif">
                        <a href="{{route('clients.messages.inbox')}}"><span class="sidenav-icon icon icon-works">&#224;</span><span class="sidenav-label">Messages</span></a>
                    </li>
                    <li class="sidenav-item @if(@$link_array[2] === "my-loans" || @$link_array[3] === "my-loans") active @endif ">
                        <a href="{{route('clients.loans')}}"><span class="sidenav-icon icon icon-works">&#49;</span><span class="sidenav-label">My Loans</span></a>
                    </li>
                    <li class="sidenav-item @if(@$link_array[2] === "account" || @$link_array[3] === "account") active @endif ">
                        <a href="{{route('clients.account')}}"><span class="sidenav-icon icon icon-works">&#112;</span><span class="sidenav-label">Account</span></a>
                    </li>
                    <li class="sidenav-item @if(@$link_array[2] === "lenders" || @$link_array[3] === "lenders") active @endif">
                        <a href="{{route('clients.lenders')}}"><span class="sidenav-icon icon icon-works">&#104;</span><span class="sidenav-label">Lenders</span></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="#"><span class="sidenav-icon icon icon-works">&#99;</span><span class="sidenav-label">Reports</span></a>
                    </li>
                    <li class="sidenav-heading" style="font-size:16px;color: #fff;">HELP</li>
                    <li class="sidenav-item">
                        <a href="{{route('pages.contact')}}" target="_blank"><span class="sidenav-icon icon icon-works">&#192;</span><span class="sidenav-label">Support</span></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{route('pages.terms')}}" target="_blank"><span class="sidenav-icon icon icon-works">&#115;</span><span class="sidenav-label">Terms of Service</span></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{route('pages.contact')}}" target="_blank"><span class="sidenav-icon icon icon-works">&#78;</span><span class="sidenav-label">Contact Fundlion</span></a>
                    </li>
                    <li class="sidenav-item">
                        <a href="{{route('clients.logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="sidenav-icon icon icon-works">&#88;</span>
                            <span class="sidenav-label">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>