<div class="container">
    <ul class="nav navbar-nav nav-tabs pull-left">
        <li >
            {!! link_to('/', trans('Home')) !!}
        </li>
        <li >
            {!! link_to('article', trans('Article')) !!}
        </li>
        <li >
            {!! link_to('article/create', trans('Create')) !!}
        </li>
        <li >
            {!! link_to('about', trans('About')) !!}
        </li>
    </ul>
    <ul class="nav navbar-top-links navbar-right">
        @if(Auth::check())
            <li class="pull-right">
                {!! link_to('user/logout', 'Login Out') !!}
            </li>
            <li class="pull-right">
                <a>Welcom {{Auth::user()->name}}</a>
            </li>
        @else
            <li class="pull-right">
                {!! link_to('user/login', 'Login In') !!}
            </li>
            <li class="pull-right">
                {!! link_to('user/register', 'Rigister') !!}
            </li>
        @endif
        
    </ul>
</div>