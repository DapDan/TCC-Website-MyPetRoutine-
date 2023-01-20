<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>My Pet Routine</title>

    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href= "assets/img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href='assets/css/fullcalendar.css' rel='stylesheet' />
    <link href='assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='assets/js/jquery-1.10.2.js' type="text/javascript"></script>
    <script src='assets/js/jquery-ui.custom.min.js' type="text/javascript"></script>
    <script src='assets/js/fullcalendar.js' type="text/javascript"></script>


    <script>

        $(document).ready(function () {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            /*  className colors

            className: default(transparent), important(red), chill(pink), success(green), info(blue)

            */


            /* initialize the external events
            -----------------------------------------------------------------*/

            $('#external-events div.external-event').each(function () {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true,      // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                });

            });


            /* initialize the calendar
            -----------------------------------------------------------------*/

            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'title',
                    center: 'agendaDay,agendaWeek,month',
                    right: 'prev,next today'
                },
                events: 'load.php',
                editable: true,
                firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
                selectable: true,
                defaultView: 'month',

                axisFormat: 'h:mm',
                columnFormat: {
                    month: 'ddd',    // Mon
                    week: 'ddd d', // Mon 7
                    day: 'dddd M/d',  // Monday 9/7
                    agendaDay: 'dddd d'
                },
                titleFormat: {
                    month: 'MMMM yyyy', // September 2009
                    week: "MMMM yyyy", // September 2009
                    day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
                },
                allDaySlot: false,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var title = prompt('Registre um lembrete importante:');


                    
                    if (title) {
                        calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true // make the event "stick"
                        );
                        $.ajax({
                            url:"insert.php",
                            type:"POST",
                            data:{title:title, start:start, end:end},
                            success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                        });
                    }
                    editable:true,
                    calendar.fullCalendar('unselect');
                },
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);

                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }

                },

               
            });
        });

    </script>
    <style>

        #external-events {
            float: left;
            width: 150px;
            padding: 0 10px;
            text-align: left;
        }

            #external-events h4 {
                font-size: 16px;
                margin-top: 0;
                padding-top: 1em;
            }

        .external-event { /* try to mimick the look of a real event */
            margin: 10px 0;
            padding: 2px 4px;
            background: #ff6a00;
            color: #ff6a00;
            font-size: .85em;
            cursor: pointer;
        }

        #external-events p {
            margin: 1.5em 0;
            font-size: 11px;
            color: #666;
        }

            #external-events p input {
                margin: 0;
                vertical-align: middle;
            }

        #calendar {
            /* 		float: right; */

            background-color: #FFFFFF;
            border-radius: 6px;
            box-shadow: 0 1px 2px #ff6a00;
            
            
        }

        .botao01 {
            border: 1px solid #CCCCCE;
            border-radius: 3px;
            color: white;
            display: block;
            font-family: "Trebuchet MS";
            font-size: 17px;
            font-weight: bold;
            line-height: 30px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            padding: 5px 15px;
            position: relative;
            width: 200px;
            margin: auto;
            

        }

        #wrap {
            margin-left: 30px;
            margin-right: 30px;
            padding: 30px;
        }


      
    
    </style>
</head>
<body>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"
                      style="color:darkolivegreen" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    
                    <nav class="navbar navbar-light bg-light">
                        <a class="navbar-brand"></a>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" style="color:darkolivegreen;border-color:orange;width:400px;" placeholder="Pesquise seus Curiosidades" aria-label="Pesquisar">
                            <button class="btn btn-outline-success my-2 my-sm-0" style="color:darkolivegreen;border-color:orange" type="submit">Pesquisar</button>
                        </form>
                    </nav>


                </div>
            </div>
        </nav>
        <div id='wrap'>
            <div id='calendar'></div>
            <div style='clear:both'></div>
        </div>

        
            <div class="sidebar" data-color=orange>



            <div class="sidebar-wrapper">
                    
            <ul class="nav">
                    <li>
                        <a href="../SITE DANILO/index.php">
                            <i class="pe-7s-angle-left" style="margin-top: 2px;"></i>
                            <h6 class="1">MY PET ROUTINE</h6>
                        </a>
                    </li>
            </ul>
        
            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Calendário</p>
                    </a>
                </li>
                        <li>
                            <a href="user.php">
                                <i class="pe-7s-user"></i>
                                <p>Perfil</p>
                            </a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="pe-7s-note2"></i>
                                <p>Cronograma</p>
                            </a>
                        </li>
                        <li>
                            <a href="typography.html">
                                <i class="pe-7s-news-paper"></i>
                                <p>Lembretes</p>
                            </a>
                        </li>

                        <li>
                            <a href="icons.html">
                                <i class="pe-7s-science"></i>
                                <p>Jogos</p>
                            </a>
                        </li>
                        <li>
                            <a href="maps.html">
                                <i class="pe-7s-map-marker"></i>
                                <p>Mapa</p>
                            </a>
                        </li>
                        <li>
                            <a href="notifications.html">
                                <i class="pe-7s-light"></i>
                                <p>Curiosidades</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        
                    </nav>
                    <p class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="www.mypetroutine.com"> My Pet Routine 
                    </p>
                </div>
            </footer>


</body>
</html>