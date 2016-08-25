<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sistema de gerenciamento CMS Melhor Idade</div>
                
                <div class="panel-body">
                    <div id="app-module-content">
                        @foreach($modulos['dados'] as $modulo)
                            <div class="app-modules-content-rows">
                                <div class="app-modules-content-rows-header">
                                    <a href="{{ URL::to('admin/'.$modulo['route_modulo'].'/'.$modulo['link']) }}">
                                        <i class="fa {!! $modulo['ico-img'] !!}" aria-hidden="true"></i> &nbsp;{!! $modulo['modulo'] !!}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>