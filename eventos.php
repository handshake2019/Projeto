<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Eventos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        

    </head>
    <body>
        <!-- MENU DO SISTEMA -->
        <?php include './header.php'; ?>
        <!-- FIM MENU DO SISTEMA -->

        <div class="container" align="center">
            <div class="row">
                <div class="col-sm">
                    <h1>Eventos</h1>
                </div>

            </div>
        </div>
        <div class="container" align="center">
            <div class="row">


                <div class="col col-sm-6">
                    <h2>Gênero Musical</h2>
                    <select class="form-control">
                        <option>Aniversário</option>
                        <option>Casamento</option>
                        <option>Show</option>
                    </select>
                </div>
                <div class="col col-sm-6">
                    <h2>Localização</h2>
                    <select class="form-control">
                        <option>Olinda</option>
                        <option>Recife</option>
                        <option>Jaboatao</option>
                    </select>
                </div>

            </div>
        </div>
        <br>
        <h2 align="center">Período dos Eventos</h2>
        <div class="container" align="center">
            <div class="row">
                <div class="col-6">
                    <input type="date" class="form-control">
                    <div id="datepick"></div>
                    <!--<div class="p-5">
                        <h2 class="mb-4">Full Calendar</h2>
                        <div class="card">
                            <div class="card-body p-0">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div> -->

                    <!-- calendar modal -->
                    <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span></h4>
                                    <div class="event-body"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="add-event">
                                    <div class="modal-body">
                                        <h4>Add Event Detail</h4>        
                                        <div class="form-group">
                                            <label>Event name</label>
                                            <input type="text" class="form-control" name="ename">
                                        </div>
                                        <div class="form-group">
                                            <label>Event Date</label>
                                            <input type='text' class="datetimepicker form-control" name="edate">
                                        </div>        
                                        <div class="form-group">
                                            <label>Event Description</label>
                                            <textarea class="form-control" name="edesc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Color</label>
                                            <select class="form-control" name="ecolor">
                                                <option value="fc-bg-default">fc-bg-default</option>
                                                <option value="fc-bg-blue">fc-bg-blue</option>
                                                <option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
                                                <option value="fc-bg-pinkred">fc-bg-pinkred</option>
                                                <option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Icon</label>
                                            <select class="form-control" name="eicon">
                                                <option value="circle">circle</option>
                                                <option value="cog">cog</option>
                                                <option value="group">group</option>
                                                <option value="suitcase">suitcase</option>
                                                <option value="calendar">calendar</option>
                                            </select>
                                        </div>        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <input type="date" class="form-control">
                    <div id="datepick"></div>
                    <!--<div class="p-5">
                        <h2 class="mb-4">Full Calendar</h2>
                        <div class="card">
                            <div class="card-body p-0">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div> -->

                    <!-- calendar modal -->
                    <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span></h4>
                                    <div class="event-body"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="add-event">
                                    <div class="modal-body">
                                        <h4>Add Event Detail</h4>        
                                        <div class="form-group">
                                            <label>Event name</label>
                                            <input type="text" class="form-control" name="ename">
                                        </div>
                                        <div class="form-group">
                                            <label>Event Date</label>
                                            <input type='text' class="datetimepicker form-control" name="edate">
                                        </div>        
                                        <div class="form-group">
                                            <label>Event Description</label>
                                            <textarea class="form-control" name="edesc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Color</label>
                                            <select class="form-control" name="ecolor">
                                                <option value="fc-bg-default">fc-bg-default</option>
                                                <option value="fc-bg-blue">fc-bg-blue</option>
                                                <option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
                                                <option value="fc-bg-pinkred">fc-bg-pinkred</option>
                                                <option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Icon</label>
                                            <select class="form-control" name="eicon">
                                                <option value="circle">circle</option>
                                                <option value="cog">cog</option>
                                                <option value="group">group</option>
                                                <option value="suitcase">suitcase</option>
                                                <option value="calendar">calendar</option>
                                            </select>
                                        </div>        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" >Save</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="container" align="Right">
            <div class="row">

                <div class="col-sm-12">
                    <button class="btn">Buscar</button>
                </div>
            </div>
        </div>
        <br>


        <div class="container" align="center">
            <div class="row">
                <div class="col-sm">
                    <img width="100%" src="https://cdn0.casamentos.com.br/img_r_1092985/5/8/9/2/t30_13_1092985.jpg">
                </div>
                <div class="col-sm">
                    <img width="100%" src="https://extra.globo.com/tv-e-lazer/20646932-aff-bf6/w640h360-PROP/xsilvio.jpg.pagespeed.ic.nIt-xxgagj.jpg">
                </div>
                <div class="col-sm">
                    <img width="100%" src="http://anapolis.go.gov.br/portal/arquivos/noticias/arraiana-20180607-165515.jpg">
                </div>
            </div>
        </div>
        <br><br>
        <div class="container" align="center">
            <div class="row">
                <div class="col-sm">
                    <img width="100%" src="https://blog.poesie.com.br/wp-content/uploads/2014/11/05-ideia-foto-noivado-casamento.gif">
                </div>
                <div class="col-sm">
                    <img width="100%" src="http://giphygifs.s3.amazonaws.com/media/1rrDe7FYyZ3Py/giphy.gif">
                </div>
                <div class="col-sm">
                    <img width="100%" src="https://thumbs.gfycat.com/NearQualifiedHuia-size_restricted.gif">
                </div>
            </div>
        </div>
        <br><br>
    </body>
    <?php include './footer.php'; ?>
    <script>
        $(document).ready(function () {
            
        });
    </script>
</html>
