$(document).ready(function() {
    $('#for_show_in').hide();
    $('#for_show_out').hide();
    $('#for_show_stock').hide();


    $('#search_archive1').keyup(function () {
        var search_archive = $('#search_archive1').val();

        $.ajax({

            type: "POST",
            url: "search_archive1.php",
            data: "search_archive=" + search_archive,
            //dataType: 'json',
            success: function(data) {

                $('#for_hide_in').hide();
                $('#for_show_in').show();


                if (data !== null) {

                    var myId_in = 0;
                    var myName_in = "";
                    var myHtml_in = "";
                    var openTr_in = "<tr>";
                    var closeTr_in = "</tr>";
                    var promejTr_in = "</tr><tr>";
                    var upr_in = "";
                    var myValue_in = 0;

                    $('#t_in').html(function () {

                        for (var i = 0; i < data.length; i++) {
                            for (var l = 0; l < data[i].length; l++) {
                                if (l == 0) {
                                    myId_in = data[i][0];
                                }
                                else {
                                    if (l == 5) {
                                        myValue_in = data[i][5];

                                        myHtml_in += "<td><form id='status_in6" + myId_in + "' action='request_archive.php' name='status_in5' method='post'><select name='select_in5" + myId_in + "' id='select_in1'>";
                                        if (data[i][5] == 2) {
                                            myHtml_in += "<option value='2' selected='selected'>Завершенная</option><option value='3'>Отмененная</option><option value='4'>Удаленная</option>";
                                        }
                                        else if (data[i][5] == 3) {
                                            myHtml_in += "<option value='2' >Завершенная</option><option value='3' selected='selected'>Отмененная</option><option value='4'>Удаленная</option>";
                                        }

                                        else {
                                            myHtml_in += "<option value='2' >Завершенная</option><option value='3' >Отмененная</option><option value='4' selected='selected'>Удаленная</option>";
                                        }


                                        myHtml_in += "</select><input type='hidden' name='id_in5' value='" + myId_in + "'></form></td>";

                                        //alert($('option').prop("value"));
                                        /*if($('option').prop("value") == 4) {
                                         $(this).hide();
                                         //$(this).attr("selected", "selected");
                                         }*/
                                    }

                                    else {
                                        myHtml_in += "<td><p>" + data[i][l] + "</p></td>";
                                    }
                                }

                            }
                            myHtml_in += "<td><p class='subtitle'><a href='full_in.php?idi=" + myId_in + "'>Подробнее</a></p></td>" + promejTr_in + "<script>$('select').change(function(){$('#status_in6" + myId_in + "').submit()\;})\;</script>";
                        }

                        return openTr_in + myHtml_in + closeTr_in;
                    });
                }





                else {
                    $('#t_in').html('<tr><td colspan="8"><p style="text-align: center;">По Вашему запросу ничего не найдено.</p></td></tr>');
                }


            }


        });



        //////////////////////////////////




        $.ajax({

            type: "POST",
            url: "search_archive1_out.php",
            data: "search_archive=" + search_archive,
            //dataType: 'json',
            success: function(data){
                //alert(data);

                    //alert(data);
                $('#for_hide_out').hide();
                $('#for_show_out').show();
                if(data !== null) {
                    var myId_in = 0;
                    var myName_in = "";
                    var myHtml_in = "";
                    var openTr_in = "<tr>";
                    var closeTr_in = "</tr>";
                    var promejTr_in = "</tr><tr>";
                    var upr_in = "";
                    var myValue_in = 0;

                    $('#t_out').html(function() {

                        for(var i = 0; i < data.length; i++) {
                            for(var l = 0; l < data[i].length; l++) {
                                if(l == 0) {
                                    myId_in = data[i][0];
                                }
                                else {
                                    if(l == 5) {
                                        myValue_in = data[i][5];

                                        myHtml_in += "<td><form id='status_in7" + myId_in + "' action='request_archive.php' name='status_in6' method='post'><select name='select_in6" + myId_in + "' id='select_in1'>";
                                        if(data[i][5] == 2) {
                                            myHtml_in += "<option value='2' selected='selected'>Завершенная</option><option value='3'>Отмененная</option><option value='4'>Удаленная</option>";
                                        }
                                        else if(data[i][5] == 3) {
                                            myHtml_in += "<option value='2' >Завершенная</option><option value='3' selected='selected'>Отмененная</option><option value='4'>Удаленная</option>";
                                        }

                                        else {
                                            myHtml_in += "<option value='2' >Завершенная</option><option value='3' >Отмененная</option><option value='4' selected='selected'>Удаленная</option>";
                                        }



                                        myHtml_in += "</select><input type='hidden' name='id_in6' value='" + myId_in + "'></form></td>";

                                        //alert($('option').prop("value"));
                                        /*if($('option').prop("value") == 4) {
                                         $(this).hide();
                                         //$(this).attr("selected", "selected");
                                         }*/
                                    }

                                    else {
                                        myHtml_in += "<td><p>" + data[i][l] + "</p></td>";
                                    }
                                }

                            }
                            myHtml_in += "<td><p class='subtitle'><a href='full_out.php?ido=" + myId_in + "'>Подробнее</a></p></td>" + promejTr_in + "<script>$('select').change(function(){$('#status_in7" + myId_in + "').submit()\;})\;</script>";
                        }

                        return openTr_in + myHtml_in + closeTr_in;
                    });
                }




                else {
                    $('#t_out').html('<tr><td colspan="8"><p style="text-align: center;">По Вашему запросу ничего не найдено.</p></td></tr>');
                }


            }
        });


        //////////////////////////////////


        $.ajax({

            type: "POST",
            url: "search_archive1_stock.php",
            data: "search_archive=" + search_archive,
            //dataType: 'json',
            success: function(data) {
                //alert(data);
                $('#for_hide_stock').hide();
                $('#for_show_stock').show();


                if (data !== null) {

                    var myId_in = 0;
                    var myName_in = "";
                    var myHtml_in = "";
                    var openTr_in = "<tr>";
                    var closeTr_in = "</tr>";
                    var promejTr_in = "</tr><tr>";
                    var upr_in = "";
                    var myValue_in = 0;

                    $('#t_stock').html(function () {

                        for (var i = 0; i < data.length; i++) {
                            for (var l = 0; l < data[i].length; l++) {
                                if (l == 0) {
                                    myId_in = data[i][0];
                                }
                                else {
                                    if (l == 5) {
                                        myValue_in = data[i][5];

                                        myHtml_in += "<td><form id='status_in8" + myId_in + "' action='request_archive.php' name='status_in7' method='post'><select name='select_in7" + myId_in + "' id='select_in10'>";
                                        if (data[i][5] == 2) {
                                            myHtml_in += "<option value='2' selected='selected'>Завершенная</option><option value='3'>Отмененная</option><option value='4'>Удаленная</option>";
                                        }
                                        else if (data[i][5] == 3) {
                                            myHtml_in += "<option value='2' >Завершенная</option><option value='3' selected='selected'>Отмененная</option><option value='4'>Удаленная</option>";
                                        }

                                        else {
                                            myHtml_in += "<option value='2' >Завершенная</option><option value='3' >Отмененная</option><option value='4' selected='selected'>Удаленная</option>";
                                        }


                                        myHtml_in += "</select><input type='hidden' name='id_in7' value='" + myId_in + "'></form></td>";

                                        //alert($('option').prop("value"));
                                        /*if($('option').prop("value") == 4) {
                                         $(this).hide();
                                         //$(this).attr("selected", "selected");
                                         }*/
                                    }

                                    else {
                                        myHtml_in += "<td><p>" + data[i][l] + "</p></td>";
                                    }
                                }

                            }
                            myHtml_in += "<td><p class='subtitle'><a href='full_stock.php?ids=" + myId_in + "'>Подробнее</a></p></td>" + promejTr_in + "<script>$('select').change(function(){$('#status_in8" + myId_in + "').submit()\;})\;</script>";
                        }

                        return openTr_in + myHtml_in + closeTr_in;
                    });
                }

                else {

                    $('#t_stock').html('<tr><td colspan="8"><p style="text-align: center;">По Вашему запросу ничего не найдено.</p></td></tr>');

                }

            }





        });














    });

    //alert($('select[name=select_in]'));


});