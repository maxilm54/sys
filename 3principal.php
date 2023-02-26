<?php
include './1cabecera.php';
//var_dump($_POST);
if(isset($_POST['cliente'])){
    $cliente = $_POST['cliente'];
}else{
    echo '<meta http-equiv="refresh" content="1; url=./index.php">';
}

?>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left ">
        <!--/col-->
        <main class="col main mt-3 h-100 overflow-auto">
            <h1 class="display-4 d-none d-sm-block">
            <?php echo '<h2>'.$cliente.' Indicadores</h2>';  ?>
            <div class="row mb-3">
            <p class="lead d-none d-sm-block">Items Consumidos</p>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Anticorte T7</h6>
                            <h1 class="display-4">623</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Auditivo Quantumm</h6>
                            <h1 class="display-4">580</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Antejo 3M I/O</h6>
                            <h1 class="display-4">512</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Pu Negro T8</h6>
                            <h1 class="display-4">456</h1>
                        </div>
                    </div>
                </div>
                <p class="lead d-none d-sm-block">Datos Extra</p>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Restock Semanales</h6>
                            <h1 class="display-4">2</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Quiebres Detectados (Mes)</h6>
                            <h1 class="display-4">3</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Incidencias (Mes)</h6>
                            <h1 class="display-4">4</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Fueras de Servicio (Mes)</h6>
                            <h1 class="display-4">0</h1>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--/row-->

            <hr>
            <div class="row placeholders mb-3">
                <div class="col-6 col-sm-3 placeholder text-center">
                    <img src="//placehold.it/200/dddddd/fff?text=1" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Responsive</h4>
                    <span class="text-muted">Device agnostic</span>
                </div>
                <div class="col-6 col-sm-3 placeholder text-center">
                    <img src="//placehold.it/200/e4e4e4/fff?text=2" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Frontend</h4>
                    <span class="text-muted">UI / UX oriented</span>
                </div>
                <div class="col-6 col-sm-3 placeholder text-center">
                    <img src="//placehold.it/200/d6d6d6/fff?text=3" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>HTML5</h4>
                    <span class="text-muted">Standards-based</span>
                </div>
                <div class="col-6 col-sm-3 placeholder text-center">
                    <img src="//placehold.it/200/e0e0e0/fff?text=4" class="center-block img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Framework</h4>
                    <span class="text-muted">CSS and JavaScript</span>
                </div>
            </div>
            <hr>
            <div class="row my-4">
                <div class="col-lg-3 col-md-4">
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="table-responsive">
                    <p class="lead d-none d-sm-block">10 Usarios de mayor consumos los ultimos 30 dias</p>
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Label</th>
                                    <th>Header</th>
                                    <th>Column</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>responsive</td>
                                    <td>bootstrap</td>
                                    <td>cards</td>
                                    <td>grid</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>rwd</td>
                                    <td>web designers</td>
                                    <td>theme</td>
                                    <td>responsive</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <h2 class="sub-header mt-5">Ultimas 6 Incidencias QR</h2>
            <div class="mb-3">
                <div class="card-deck">
                    <div class="card card-inverse card-success text-center" style="width: 350px !important; float:left;">
                        <div class="card-body">
                            <blockquote class="card-blockquote">
                                <p>No funciona lector de huellas</p>
                                <footer>Lector Riniciado - 2023/01/23<cite title="Source Title">Faster</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-inverse card-success text-center" style="width: 350px !important; float:left;">
                        <div class="card-body">
                            <blockquote class="card-blockquote">
                                <p>No funciona lector de huellas</p>
                                <footer>Lector Riniciado - 2023/01/23<cite title="Source Title">Faster</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-inverse card-success text-center" style="width: 350px !important;">
                        <div class="card-body">
                            <blockquote class="card-blockquote">
                                <p>No funciona lector de huellas</p>
                                <footer>Lector Riniciado - 2023/01/23<cite title="Source Title">Faster</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-inverse card-success text-center" style="width: 350px !important; float:left;">
                        <div class="card-body">
                            <blockquote class="card-blockquote">
                                <p>No funciona lector de huellas</p>
                                <footer>Lector Riniciado - 2023/01/23<cite title="Source Title">Faster</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-inverse card-success text-center" style="width: 350px !important;float:left;">
                        <div class="card-body">
                            <blockquote class="card-blockquote">
                                <p>No funciona lector de huellas</p>
                                <footer>Lector Riniciado - 2023/01/23<cite title="Source Title">Faster</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-inverse card-success text-center" style="width: 350px !important;">
                        <div class="card-body">
                            <blockquote class="card-blockquote">
                                <p>No funciona lector de huellas</p>
                                <footer>Lector Riniciado - 2023/01/23<cite title="Source Title">Faster</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--/row-->
            <hr>
            <h2 class="sub-header mt-5">Interesting layouts and elements</h2>
            <div class="row mb-3">
                <div class="col-lg-6">

                    <div class="card mb-3">
                        <div class="card-header">
                            Bye .well, .panel &amp; .thumbnail
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Replaced with .card</h4>
                            <p class="card-text">All of these Bootstrap 3.x components have been dropped entirely for the new card component.</p>
                            <button type="button" class="btn btn-secondary btn-lg">Large</button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home1" role="tab" data-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#profile1" role="tab" data-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#messages1" role="tab" data-toggle="tab">Messages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#settings1" role="tab" data-toggle="tab">Settings</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <br>
                        <div role="tabpanel" class="tab-pane active" id="home1">
                            <h4>Home</h4>
                            <p>
                                1. These Bootstrap 4 Tabs work basically the same as the Bootstrap 3.x tabs.
                                <br>
                                <br>
                                <button class="btn btn-primary-outline btn-lg">Wow</button>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile1">
                            <h4>Pro</h4>
                            <p>
                                2. Tabs are helpful to hide or collapse some addtional content.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages1">
                            <h4>Messages</h4>
                            <p>
                                3. You can really put whatever you want into the tab pane.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings1">
                            <h4>Settings</h4>
                            <p>
                                4. Some of the Bootstrap 3.x components like well and panel have been dropped for the new card component.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-6">
                    <div class="card card-default card-body">
                        <ul id="tabsJustified" class="nav nav-tabs nav-justified">
                            <li class="nav-item">
                                <a class="nav-link" href="" data-target="#tab1" data-toggle="tab">List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="" data-target="#tab2" data-toggle="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" data-target="#tab3" data-toggle="tab">More</a>
                            </li>
                        </ul>
                        <!--/tabs-->
                        <br>
                        <div id="tabsJustifiedContent" class="tab-content">
                            <div class="tab-pane" id="tab1">
                                <div class="list-group">
                                    <a href="" class="list-group-item"><span class="float-right label label-success">51</span> Home Link</a>
                                    <a href="" class="list-group-item"><span class="float-right label label-success">8</span> Link 2</a>
                                    <a href="" class="list-group-item"><span class="float-right label label-success">23</span> Link 3</a>
                                    <a href="" class="list-group-item text-muted">Link n..</a>
                                </div>
                            </div>
                            <div class="tab-pane active" id="tab2">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h4>Profile Section</h4>
                                        <p>Imagine creating this simple user profile inside a tab card.</p>
                                    </div>
                                    <div class="col-sm-5"><img src="//placehold.it/170" class="float-right img-responsive img-rounded"></div>
                                </div>
                                <hr>
                                <a href="javascript:;" class="btn btn-info btn-block">Read More Profiles</a>
                                <div class="spacer5"></div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="list-group">
                                    <a href="" class="list-group-item"><span class="float-right label label-info label-pill">44</span> <code>.panel</code> is now <code>.card</code></a>
                                    <a href="" class="list-group-item"><span class="float-right label label-info label-pill">8</span> <code>.nav-justified</code> is deprecated</a>
                                    <a href="" class="list-group-item"><span class="float-right label label-info label-pill">23</span> <code>.badge</code> is now <code>.label-pill</code></a>
                                    <a href="" class="list-group-item text-muted">Message n..</a>
                                </div>
                            </div>
                        </div>
                        <!--/tabs content-->
                    </div><!--/card-->
                </div><!--/col-->
                <div class="col-lg-6">
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingOne"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Accordion example
                        </div>
                        <div id="collapseOne" class="card-block collapse in" role="tabpanel" aria-labelledby="headingOne">
                             <p>This is a Bootstrap 4 accordion that uses the <code>.card</code> classes instead of <code>.panel</code>. The single-open section aspect is not working because the parent option (dependent on .panel) has not yet been finalized in BS 4 alpha. </p>
                        </div>
                        <div class="card-header" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Mobile-first
                        </div>
                        <div id="collapseTwo" class="card-block collapse" role="tabpanel" aria-labelledby="headingTwo">
                             <p>Just like it's predecesor, Bootstrap 4 is mobile-first so that you start by designing for smaller devices such as smartphones and tablets, then proceed to laptop and desktop layouts.</p>
                        </div>
                        <div class="card-header" role="tab" id="headingThree"  data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Built for CSS3
                        </div>
                        <div id="collapseThree" class="card-block collapse" role="tabpanel" aria-labelledby="headingThree">
                             <p>Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles.</p>
                        </div>
                      </div>
                    </div>
                    <p class="mt-4">
                        <a href="/go/KrUO8QpyXP/bootstrao-4-dashboard" target="_ext">Get this Bootstrap 4 admin dashboard at Codeply</a>
                    </p>
                </div><!--/col-->
            </div><!--/row-->

        </main>
        <!--/main col-->
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <p>This is a dashboard layout for Bootstrap 4. This is an example of the Modal component which you can use to show content.
                Any content can be placed inside the modal and it can use the Bootstrap grid classes.</p>
                <p>
                    <a href="https://www.codeply.com/go/KrUO8QpyXP" target="_ext">Grab the code at Codeply</a>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>





<?php

include './2pie.php';
?>