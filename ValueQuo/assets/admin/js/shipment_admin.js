/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* global google */

//Edit image code  and datepicker start
$('#startdate').datepicker({
    dateFormat: 'dd.mm.yy',
    prevText: '<i class="fa fa-chevron-left"></i>',
    nextText: '<i class="fa fa-chevron-right"></i>',
    onSelect: function (selectedDate) {
        $('#finishdate').datepicker('option', 'minDate', selectedDate);
    }
});
$('.datepicerk1').datepicker({
    dateFormat: 'dd.mm.yy',
    prevText: '<i class="fa fa-chevron-left"></i>',
    nextText: '<i class="fa fa-chevron-right"></i>',
    onSelect: function (selectedDate) {
        $('#finishdate').datepicker('option', 'minDate', selectedDate);
    }
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
//Edit image code  and datepicker End

// Load the Google Transliterate API First Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea']);
}
google.setOnLoadCallback(onLoad);
// Load the Google Transliterate API First End
// Load the Google Transliterate API Second Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad1() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea1']);
}
google.setOnLoadCallback(onLoad1);
// Load the Google Transliterate API Second End
// Load the Google Transliterate API Third Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad2() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea2']);
}
google.setOnLoadCallback(onLoad2);
// Load the Google Transliterate API Third End
// Load the Google Transliterate API Forth Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad3() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea3']);
}
google.setOnLoadCallback(onLoad3);
// Load the Google Transliterate API Forth End
// Load the Google Transliterate API Fifth Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad4() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea4']);
}
google.setOnLoadCallback(onLoad4);
// Load the Google Transliterate API Fifth End
// Load the Google Transliterate API Sixth Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad5() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea5']);
}
google.setOnLoadCallback(onLoad5);
// Load the Google Transliterate API Sixth End


// Load the Google Transliterate API Seven Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad6() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea6']);
}
google.setOnLoadCallback(onLoad6);
// Load the Google Transliterate API Seventh End
// Load the Google Transliterate API Eight Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad7() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea7']);
}
google.setOnLoadCallback(onLoad7);
// Load the Google Transliterate API Eight End
// Load the Google Transliterate API Nine Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad8() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea8']);
}
google.setOnLoadCallback(onLoad8);
// Load the Google Transliterate API Nine End

// Load the Google Transliterate API ten Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad9() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea9']);
}
google.setOnLoadCallback(onLoad9);
// Load the Google Transliterate API ten End
// Load the Google Transliterate API eleven Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad10() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea10']);
}
google.setOnLoadCallback(onLoad10);
// Load the Google Transliterate API eleven End

// Load the Google Transliterate API twelve Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad11() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea11']);
}
google.setOnLoadCallback(onLoad11);
// Load the Google Transliterate API twelve End

// Load the Google Transliterate API thirteen Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad12() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea12']);
}
google.setOnLoadCallback(onLoad12);
// Load the Google Transliterate API thirteen End

// Load the Google Transliterate API forteen Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad13() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea13']);
}
google.setOnLoadCallback(onLoad13);
// Load the Google Transliterate API forteen End

// Load the Google Transliterate API fifteen Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad14() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea14']);
}
google.setOnLoadCallback(onLoad14);
// Load the Google Transliterate API fifteen End

// Load the Google Transliterate API sixteen Start
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad15() {
    var options = {
        sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
                [google.elements.transliteration.LanguageCode.ARABIC],
        shortcutKey: 'ctrl+g',
        transliterationEnabled: true
    };
    var control =
            new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['transliterateTextarea15']);
}
google.setOnLoadCallback(onLoad15);
// Load the Google Transliterate API sixteen End
//Change text into arabic language End
//Add more Code start
$(document).on('click', '.btn-add', function (event) {
    event.preventDefault();

    var field = $(this).closest('.multiple-email');
    var field_new = field.clone();

    $(this)
            .toggleClass('btn-default')
            .toggleClass('btn-add')
            .toggleClass('btn-danger')
            .toggleClass('btn-remove')
            .html('–');

    field_new.find('input').val('');
    field_new.insertAfter(field);
});

$(document).on('click', '.btn-remove', function (event) {
    event.preventDefault();
    $(this).closest('.multiple-email').remove();
});
//Add more Code End

//Menu allocation code start
$(function () {
    $('#jstree_demo_div').jstree({
        "checkbox": {
            three_state: false,
            two_state: false
        },
        'plugins': ["wholerow", "checkbox"]
    });
    $('#jstree_demo_div')
            // listen for event
            .on('changed.jstree', function (e, data) {
                var i, j, r = [];
//                    data.rslt.obj.parents("li").each(function () {
//                        r.push($(this).children("a").text());
//                    });
                for (i = 0, j = data.selected.length; i < j; i++) {
                    r.push(data.instance.get_node(data.selected[i]).text);
                    r.push(data.instance.get_node(data.instance.get_node(data.selected[i]).parent).text);
                }

                console.log(r);
                $('#menu_ids').val(JSON.stringify(r));
            })
            // create the instance
            .jstree({'plugins': ["wholerow", "checkbox"]});
});
//Menu allocation code End


//Theme related scripts start
$(document).ready(function () {
    pageSetUp();
    $(".js-status-update a").click(function () {
        var selText = $(this).text();
        var $this = $(this);
        $this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
        $this.parents('.dropdown-menu').find('li').removeClass('active');
        $this.parent().addClass('active');
    });
    $(function () {
        $("#sortable1, #sortable2").sortable({
            handle: '.handle',
            connectWith: ".todo",
            update: countTasks
        }).disableSelection();
    });
    // check and uncheck
    $('.todo .checkbox > input[type="checkbox"]').click(function () {
        var $this = $(this).parent().parent().parent();
        if ($(this).prop('checked')) {
            $this.addClass("complete");
            // remove this if you want to undo a check list once checked
            //$(this).attr("disabled", true);
            $(this).parent().hide();
            // once clicked - add class, copy to memory then remove and add to sortable3
            $this.slideUp(500, function () {
                $this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
                $this.remove();
                countTasks();
            });
        } else {
            // insert undo code here...
        }
    });
    // count tasks
    function countTasks() {
        $('.todo-group-title').each(function () {
            var $this = $(this);
            $this.find(".num-of-tasks").text($this.next().find("li").size());
        });
    }
    /*
     * RUN PAGE GRAPHS
     */
    /* TAB 1: UPDATING CHART */
    // For the demo we use generated data, but normally it would be coming from the server
    var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart").css('color');
    function getRandomData() {
        if (data.length > 0)
            data = data.slice(1);
        // do a random walk
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50;
            var y = prev + Math.random() * 10 - 5;
            if (y < 0)
                y = 0;
            if (y > 100)
                y = 100;
            data.push(y);
        }
        // zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i)
            res.push([i, data[i]]);
        return res;
    }
    // setup control widget
    var updateInterval = 1500;
    $("#updating-chart").val(updateInterval).change(function () {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
            updateInterval = +v;
            $(this).val("" + updateInterval);
        }
    });
    // setup plot
    var options = {
        yaxis: {
            min: 0,
            max: 100
        },
        xaxis: {
            min: 0,
            max: 100
        },
        colors: [$UpdatingChartColors],
        series: {
            lines: {
                lineWidth: 1,
                fill: true,
                fillColor: {
                    colors: [{
                            opacity: 0.4
                        }, {
                            opacity: 0
                        }]
                },
                steps: false
            }
        }
    };
    var plot = $.plot($("#updating-chart"), [getRandomData()], options);
    /* live switch */
    $('input[type="checkbox"]#start_interval').click(function () {
        if ($(this).prop('checked')) {
            $on = true;
            updateInterval = 1500;
            update();
        } else {
            clearInterval(updateInterval);
            $on = false;
        }
    });
    function update() {
        if ($on == true) {
            plot.setData([getRandomData()]);
            plot.draw();
            setTimeout(update, updateInterval);
        } else {
            clearInterval(updateInterval);
        }
    }
    var $on = false;
    /*end updating chart*/
    /* TAB 2: Social Network  */
    $(function () {
        // jQuery Flot Chart
        var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
                label: "Twitter",
                data: twitter,
                lines: {
                    show: true,
                    lineWidth: 1,
                    fill: true,
                    fillColor: {
                        colors: [{
                                opacity: 0.1
                            }, {
                                opacity: 0.13
                            }]
                    }
                },
                points: {
                    show: true
                }
            }, {
                label: "Facebook",
                data: facebook,
                lines: {
                    show: true,
                    lineWidth: 1,
                    fill: true,
                    fillColor: {
                        colors: [{
                                opacity: 0.1
                            }, {
                                opacity: 0.13
                            }]
                    }
                },
                points: {
                    show: true
                }
            }];
        var options = {
            grid: {
                hoverable: true
            },
            colors: ["#568A89", "#3276B1"],
            tooltip: true,
            tooltipOpts: {
                //content : "Value <b>$x</b> Value <span>$y</span>",
                defaultTheme: false
            },
            xaxis: {
                ticks: [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
            },
            yaxes: {
            }
        };
        var plot3 = $.plot($("#statsChart"), data, options);
    });
    // END TAB 2
    // TAB THREE GRAPH //
    /* TAB 3: Revenew  */
    $(function () {
        var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer");
        var data = [{
                label: "Target Profit",
                data: trgt,
                bars: {
                    show: true,
                    align: "center",
                    barWidth: 30 * 30 * 60 * 1000 * 80
                }
            }, {
                label: "Actual Profit",
                data: prft,
                color: '#3276B1',
                lines: {
                    show: true,
                    lineWidth: 3
                },
                points: {
                    show: true
                }
            }, {
                label: "Actual Signups",
                data: sgnups,
                color: '#71843F',
                lines: {
                    show: true,
                    lineWidth: 1
                },
                points: {
                    show: true
                }
            }];
        var options = {
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                //content: '%x - %y',
                //dateFormat: '%b %y',
                defaultTheme: false
            },
            xaxis: {
                mode: "time"
            },
            yaxes: {
                tickFormatter: function (val, axis) {
                    return "$" + val;
                },
                max: 1200
            }
        };
        plot2 = null;
        function plotNow() {
            var d = [];
            toggles.find(':checkbox').each(function () {
                if ($(this).is(':checked')) {
                    d.push(data[$(this).attr("name").substr(4, 1)]);
                }
            });
            if (d.length > 0) {
                if (plot2) {
                    plot2.setData(d);
                    plot2.draw();
                } else {
                    plot2 = $.plot(target, d, options);
                }
            }
        }
        ;
        toggles.find(':checkbox').on('change', function () {
            plotNow();
        });
        plotNow();
    });
    /*
     * VECTOR MAP
     */
    data_array = {
        "US": 4977,
        "AU": 4873,
        "IN": 3671,
        "BR": 2476,
        "TR": 1476,
        "CN": 146,
        "CA": 134,
        "BD": 100
    };
    $('#vector-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: '#fff',
        regionStyle: {
            initial: {
                fill: '#c4c4c4'
            },
            hover: {
                "fill-opacity": 1
            }
        },
        series: {
            regions: [{
                    values: data_array,
                    scale: ['#85a8b6', '#4d7686'],
                    normalizeFunction: 'polynomial'
                }]
        },
        onRegionLabelShow: function (e, el, code) {
            if (typeof data_array[code] == 'undefined') {
                e.preventDefault();
            } else {
                var countrylbl = data_array[code];
                el.html(el.html() + ': ' + countrylbl + ' visits');
            }
        }
    });
    /*
     * FULL CALENDAR JS
     */
    if ($("#calendar").length) {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            draggable: true,
            selectable: false,
            selectHelper: true,
            unselectAuto: false,
            disableResizing: false,
            height: "auto",
            header: {
                left: 'title', //,today
                center: 'prev, next, today',
                right: 'month, agendaWeek, agenDay' //month, agendaDay,
            },
            select: function (start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.fullCalendar('renderEvent', {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                    }, true // make the event "stick"
                            );
                }
                calendar.fullCalendar('unselect');
            },
            events: [{
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    description: 'long description',
                    className: ["event", "bg-color-greenLight"],
                    icon: 'fa-check'
                }, {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    className: ["event", "bg-color-red"],
                    icon: 'fa-lock'
                }, {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false,
                    className: ["event", "bg-color-blue"],
                    icon: 'fa-clock-o'
                }, {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d + 4, 16, 0),
                    allDay: false,
                    className: ["event", "bg-color-blue"],
                    icon: 'fa-clock-o'
                }, {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    className: ["event", "bg-color-darken"]
                }, {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    className: ["event", "bg-color-darken"]
                }, {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    className: ["event", "bg-color-darken"]
                }, {
                    title: 'Shipment Open Day',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    className: ["event", "bg-color-darken"]
                }],
            eventRender: function (event, element, icon) {
                if (!event.description == "") {
                    element.find('.fc-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
                }
                if (!event.icon == "") {
                    element.find('.fc-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
                }
            }
        });
    }
    ;
    /* hide default buttons */
    $('.fc-toolbar .fc-right, .fc-toolbar .fc-center').hide();
    // calendar prev
    $('#calendar-buttons #btn-prev').click(function () {
        $('.fc-prev-button').click();
        return false;
    });
    // calendar next
    $('#calendar-buttons #btn-next').click(function () {
        $('.fc-next-button').click();
        return false;
    });
    // calendar today
    $('#calendar-buttons #btn-today').click(function () {
        $('.fc-button-today').click();
        return false;
    });
    // calendar month
    $('#mt').click(function () {
        $('#calendar').fullCalendar('changeView', 'month');
    });
    // calendar agenda week
    $('#ag').click(function () {
        $('#calendar').fullCalendar('changeView', 'agendaWeek');
    });
    // calendar agenda day
    $('#td').click(function () {
        $('#calendar').fullCalendar('changeView', 'agendaDay');
    });
    /*
     * CHAT
     */
    $.filter_input = $('#filter-chat-list');
    $.chat_users_container = $('#chat-container > .chat-list-body');
    $.chat_users = $('#chat-users');
    $.chat_list_btn = $('#chat-container > .chat-list-open-close');
    $.chat_body = $('#chat-body');
    /*
     * LIST FILTER (CHAT)
     */
    // custom css expression for a case-insensitive contains()
    jQuery.expr[':'].Contains = function (a, i, m) {
        return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };
    function listFilter(list) {// header is any element, list is an unordered list
        // create and add the filter form to the header
        $.filter_input.change(function () {
            var filter = $(this).val();
            if (filter) {
                // this finds all links in a list that contain the input,
                // and hide the ones not containing the input while showing the ones that do
                $.chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
                $.chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
            } else {
                $.chat_users.find("li").slideDown();
            }
            return false;
        }).keyup(function () {
            // fire the above change event after every letter
            $(this).change();
        });
    }
    // on dom ready
    listFilter($.chat_users);
    // open chat list
    $.chat_list_btn.click(function () {
        $(this).parent('#chat-container').toggleClass('open');
    });
    $.chat_body.animate({
        scrollTop: $.chat_body[0].scrollHeight
    }, 500);
});
//Theme related scripts End



//Validations Start
//restrict numbers and special characters in first_name

$("#first_name").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode === 8 || charCode === 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z]/.test(keyChar);
    }
});
//restrict numbers and special characters in last_name
$("#last_name").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z]/.test(keyChar);
    }
});
$("#custom_duty_tarriff").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[0-9\s\%]/.test(keyChar);
    }
});
$("#transliterateTextarea1").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[0-9\s\%]/.test(keyChar);
    }
});
$("#transliterateTextarea3").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[0-9\s\%]/.test(keyChar);
    }
});
$("#transliterateTextarea4").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[0-9\s\%]/.test(keyChar);
    }
});
$("#transliterateTextarea5").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[0-9\s\%]/.test(keyChar);
    }
});
$("#transliterateTextarea2").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /^[0-9\s\-]+$/.test(keyChar);
    }
});
$("#transliterateTextarea6").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z\s]/.test(keyChar);
    }
});
$("#transliterateTextarea").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z\s]/.test(keyChar);
    }
});
$("#transliterateTextarea7").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z\s]/.test(keyChar);
    }
});
$("#transliterateTextarea8").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z0-9\s]/.test(keyChar);
    }
});
$("#transliterateTextarea9").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z0-9\s]/.test(keyChar);
    }
});


$("#transliterateTextarea11").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[0-9\s\%]/.test(keyChar);
    }
});
$("#transliterateTextarea12").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode === 8 || charCode === 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z0-9\s]/.test(keyChar);
    }
});
$("#transliterateTextarea14").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z0-9\s]/.test(keyChar);
    }
});
$("#transliterateTextarea15").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z0-9\s]/.test(keyChar);
    }
});
$("#full_name").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[a-zA-Z\s]+$/.test(keyChar);
    }
});
$("#license_number").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /[A-Z0-9\s]+$/.test(keyChar);
    }
});
$("#contact_name").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /^[A-Za-z\s]+$/.test(keyChar);
    }
});
$("#address_line").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /^[A-Za-z0-9\s]+$/.test(keyChar);
    }
});
$("#tel").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /^[0-9\s\-\+]+$/.test(keyChar);
    }
});
$("#fax").bind("keypress", function (event) {
    var charCode = event.which;
    if (charCode == 8 || charCode == 0) {
        return;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        return /^[0-9\-\+\s]+$/.test(keyChar);
    }
});
$("#mobile").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
            // Allow: Ctrl+A, Command+A
                    (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                            (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
$("#cust_ref_id").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
            // Allow: Ctrl+A, Command+A
                    (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                            (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
$("#zip_code").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
            // Allow: Ctrl+A, Command+A
                    (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                            (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });


$("#email").focusout(function () {
    var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    var email = $('#email').val();
    if (!email.match(email_regex)) {
        $("#email").val('');
        alert('Enter valid email address.');
        $("this").focus();
        return false;
    }
});


//$("#email").blur(function () {
//    var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
//    var email = $('#email').val();
//    var elem = jQuery.trim($("#email").val());
//    if (elem.length == 0) {
//        setTimeout(function () {
//            $("#email").focus();
//        }, 0);
//    }
//    else {
//        if ((!email.match(email_regex))) {
//            alert('Enter valid email address.');
//            return false;
//        }
//    }
//});
$("#password_confirmation").change(function () {
    if ($(this).val() != $("#password").val()) {
        alert("Password do not match");
    }
});
function checkLength(el) {
  if (el.value.length != 8) {
    alert("length must be exactly 8 characters")
  }
}
//Validations End


//    Flash message time set up start
$(window).bind("load", function () {
    window.setTimeout(function () {
        $(".authsuccess").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 5000);
});
//    Flash message time set up End

//For changing all website into other language Start
function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
//For changing all website into other language End
