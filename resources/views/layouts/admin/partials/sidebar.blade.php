
<header class="main-nav">
    <div class="sidebar-user text-center">
        <!-- <a class="setting-primary" href="javascript:void(0)">
            <i data-feather="settings"></i>
        </a> -->
        <img class="img-90 rounded-circle"
            onerror="onErrorImage(this)" 
            src="{{asset('uploads/' . Auth::user()->profile?Auth::user()->profile:'') }}" alt="" />
        <a href="{{route('profile.show')}}"> <h6 class="mt-3 f-14 f-w-600">{{Auth::user()->name}}</h6></a>
        <p class="mb-0 font-roboto">@if(Auth::user()->role == 1)
                                                {{''}}	
                                                @elseif(Auth::user()->type ==1)
														{{trans('user.allevatore')}}
													@elseif(Auth::user()->type ==2)
                                                        {{trans('user.appassionato')}}
													@endif</p>
     
    </div>
    <nav>
    <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    
                    @if(Auth::user()->role==1)
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('user') }}" href="javascript:void(0)"><i data-feather="users"></i><span>{{trans('user.users')}}</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('user') }};">
                            <li><a href="{{ route('user.create') }}" class="{{routeActive('user.create')}}">{{trans('user.add_user')}}</a></li>
                            <li><a href="{{ route('user.index') }}" class="{{routeActive('user.index')}}">{{trans('user.user_list')}}</a></li>
                       
                        </ul>
                    </li>
                    @endif
                    
                    
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ routeActive('profile.show') }}" href="{{ route('profile.show') }}"><i data-feather="users"></i><span>{{trans('user.my_profile')}}</span></a>
                        
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
