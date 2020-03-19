<h1>test</h1>
<form action="/post" method="post">
    标题： <input type="text" name="title" value="" />
    内容： <input type="text" name="body" value="" />
    {{--表单提交一定记得加上_token 否者会报错419--}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">提交</button>
</form>


<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
