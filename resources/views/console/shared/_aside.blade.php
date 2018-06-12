<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        @foreach ($groups as $k=>$v)
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> {{ $k }}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    @foreach($v as $key=>$val)
                    <li>
                        <a data-href="{{ route($val['name']) }}" data-title="{{ $key }}" href="javascript:void(0)">{{ $key }}</a>
                    </li>
                    {{--<li><a data-href="admin-list.html" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>--}}
                    @endforeach
                </ul>
            </dd>
        </dl>
        @endforeach

    </div>
</aside>