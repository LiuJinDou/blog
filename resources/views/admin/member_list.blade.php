@include('admin/header')
<div class="demoTable layui-form">
    Name：<div class="layui-inline">
        <input class="layui-input" name="name" id="member-name" autocomplete="off" placeholder="Please input name">
    </div>
    <button class="layui-btn layui-btn-warm" data-type="reload">Search</button>
    <button class="layui-btn add_member add_member" data-type="add_member">addMember</button>
</div>
<table class="layui-hide" id="member" lay-filter="member"></table>

<script type="text/html" id="toolbarDemo">
    <div class="layui-btn-container">
        <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
        <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
        <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
    </div>
</script>

<script src="/js/admin/privilege/member.js"></script>