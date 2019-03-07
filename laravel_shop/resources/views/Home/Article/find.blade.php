<div id="find">
    @foreach ($article as $v)
    <div class="content" style="margin-top:10px;width:700px">
        <a href="/homearticle/{{$v->id}}" class="tt" style="color:blue;float:left">{{$v->title}}</a>
        <span style="float:right">{{$v->time}}</span>    
    </div>
    @endforeach
</div>