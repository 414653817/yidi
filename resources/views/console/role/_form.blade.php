<div class="row cl">
    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
    <div class="formControls col-xs-8 col-sm-9">
        <input type="text" class="input-text" value="{{ old('roleName') }}" placeholder="" id="roleName" name="roleName">
    </div>
</div>
<div class="row cl">
    <label class="form-label col-xs-4 col-sm-3">备注：</label>
    <div class="formControls col-xs-8 col-sm-9">
        <input type="text" class="input-text" value="{{ old('desc') }}" placeholder="" id="desc" name="desc">
    </div>
</div>
<div class="row cl">
    <label class="form-label col-xs-4 col-sm-3">网站角色：</label>
    <div class="formControls col-xs-8 col-sm-9">
        @foreach($powers as $k=>$v)
        <dl class="permission-list">
            <dt>
                <label>
                    <input type="checkbox" value="" name="user-Character-0" id="user-Character-0">
                    {{ $k }}
                </label>
            </dt>

            <dd>
                <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0" id="user-Character-0-0">
                            栏目管理
                        </label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">
                            审核</label>
                        <label class="c-orange"><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-5"> 只能操作自己发布的</label>
                    </dd>
                </dl>

                <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">
                            文章管理
                        </label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-4">
                            审核</label>
                        <label class="c-orange"><input type="checkbox" value="" name="user-Character-0-2-0" id="user-Character-0-2-5"> 只能操作自己发布的</label>
                    </dd>
                </dl>
            </dd>
        </dl>
        @endforeach

        <dl class="permission-list">
            <dt>
                <label>
                    <input type="checkbox" value="" name="user-Character-0" id="user-Character-1">
                    用户中心
                </label>
            </dt>
            <dd>
                <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0" id="user-Character-1-0">
                            用户管理
                        </label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-0">
                            添加
                        </label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-1">
                            修改
                        </label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-2">
                            删除
                        </label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-3">
                            查看
                        </label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-4">
                            审核
                        </label>
                    </dd>
                </dl>
            </dd>
        </dl>

    </div>
</div>