<div class="col-md-4">
     <div class="panel panel-default">
     
     <div class="panel-heading">Menu</div>
     <div class="panel-body">
    <div class="col-md-12">
        <a href="/admin/">
            <button type="button" class="btn btn-success" style="width:155px; margin:3px;">Route</button>
        </a>
    </div>
    @foreach($menu as $k=>$block)
    <div class="col-md-12">    
        <div class="btn-group">
            <a href="/admin/{{$k}}">
                <button type="button" class="btn btn-danger" style="width:155px; margin:3px;">
                    {{$k}}
                </button>
            </a>           
        </div>
         <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Blocks
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    @foreach($block as $b)
                        <li><a href="/admin/{{$b->blocks}}/{{$b->id_name}}" >{{$b->blocks.'-'.$b->id_name}}</a></li>
                        <li class="divider"></li>
                    @endforeach                   
                </ul>
            </div>
    </div>
    @endforeach
</div>
</div>
</div>
