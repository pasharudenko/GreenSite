$(document).ready(function() {
    //alert("test");
    $('#for_show').hide();

    $('#search_kb1').keyup(function () {
        var search = $('#search_kb1').val();
        //alert(search);



        $.ajax({
            //alert(search);
            type: "POST",
            url: "search_kb1.php",
            data: "search=" + search,
            dataType: 'json',
            success: function(data){
                //var dataArray = data.split(" ");
                //alert(data);

                //alert(data[0][7]);

                /*$.each(data, function() {
                    //alert(data[0]['comment']);
                });*/

                $('#for_hide').hide();
                $('#for_show').show();


                var i = 0;
                var l = 0;
                var myId = 0;
                var myName = "";
                var myHtml = "";
                var openTr = "<tr>";
                var closeTr = "</tr>";
                var promejTr = "</tr><tr>";
                var upr = "";

                $('#pokan').html(function() {
                    for (var i = 0; i < data.length; i++) {
                        for (l = 0; l < data[i].length; l++) {
                            if(l == 0) {

                                myId = data[i][l];
                            }

                            if(l == 1) {
                                myName = data[i][l];
                            }


                            if(l != 0) {
                                if(l != 8 && l != 6) {
                                    myHtml+= "<td><p>" + data[i][l] + "</p></td>";
                                }

                                else {
                                    if(l == 6) {
                                        if(data[i][6] == 1) {
                                            myHtml+= "<td><p>Есть</p></td>";


                                        }

                                        else {
                                            myHtml+= "<td><p><span style='color: #FF0040; font-weight: bold;'>Нет</span></p></td>";
                                        }
                                    }

                                    else {
                                        if(data[i][8] == 0) {
                                            myHtml+= "<td><p><a href='module_podpis.php?id_p=" + myId + "&podpis=1' style='color: #00ff00;'>Подписан</a></p></td>";


                                        }

                                        else {
                                            myHtml+= "<td><p><a href='module_podpis.php?id_p=" + myId + "&podpis=0'>Отписан</a></p></td>";
                                        }
                                    }
                                }
                            }
                            else {
                                myHtml+= "<td><p>" + (i + 1) + "</p></td>";
                            }


                            //alert(data[i][l]);
                        }
                        myHtml += "<td class='actions'><a href='edit_buy.php?idc=" + myId +"'><i class='fa fa-file-text-o' title='Редактировать'></i></a><a href='delete_buy.php?idc=" + myId + "&categorie=" + myName + "'><i class='fa fa-trash-o' title='Удалить'></i></a></td>" + promejTr;

                    }
                    //myHtml += promejTr + upr;
                    return openTr + myHtml + closeTr;
                });

                //alert(myHtml);
                /*for (var n in data)
                   alert (data[n]);*/




               /* var myHtml = "";
                var openTr = "<tr>";
                var closeTr = "</tr>";
                var promejTr = "</tr><tr>";
                $('#pokan').html(function() {
                    for (var i = 0; i < dataArray.length; i++) {
                        if(i % 9 == 0) {
                            myHtml+= promejTr;
                        }

                        if(i % 9 == 0) {
                            myHtml+= promejTr;
                        }

                        myHtml+= "<td>" + dataArray[i] + "</td>";

                    }
                    return openTr + myHtml + closeTr;
                });*/
       /*



                var count_arr = new Array();

                $.each(data, function(){
                    count_arr.push(this);
                });

                var count_count = 1;
                for(var i = 1; i < count_arr.length; i++) {

                    var for_1 = count_arr[1];
                    var for_2 = count_arr[2];
                    var for_3 = count_arr[3];
                    var for_4 = count_arr[4];
                    var for_5 = count_arr[5];
                    var for_6 = count_arr[6];
                    var for_7 = count_arr[7];
                    var for_8 = count_arr[8];

                    count_count++;
                }

                $('#pokan').html("<tr><td><p>" + count_count + "</p></td><td><p>" + for_1 + "</p></td><td><p>" + for_2 + "</p></td><td><p>" + for_3 + "</p></td><td><p>" + for_4 + "</p></td><td><p>" + for_5 + "</p></td><td><p>" + for_6 + "</p></td><td><p>" + for_7 + "</p></td><td><p>" + for_8 + "</p></td><td><p><a>Подробнее</a></p></td></tr>");
                */
            }


        });



    });

});
