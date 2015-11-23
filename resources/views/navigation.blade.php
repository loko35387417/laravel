<div class="container">
    <ul class="nav navbar-na1v nav-tabs">
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
        <li class="pull-right">
            {!! link_to('user/login', 'Login In') !!}
        </li>
        <li class="pull-right">
            {!! link_to('user/login', 'Rigister') !!}
        </li>
        
    </ul>
</div>

