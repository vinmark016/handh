$(document).ready(function() {

	mark.init();

});

var mark = {

    init: async function() {

    },

    ajaxCall: async function(data,method,async) {

        $.ajax({
             url: feedsite.own,
             type: method,
             async: async,
             data:data,
             cache: false,
             success: function (e) {

                //switches here
                switch(data['action']) {

                    case 'readBasis':

                        var html = '';
                        var t = $.parseJSON(e);
                        $.each(t,function(key, val) {

                            html += '<tr>';
                            html += `   <td>${val.delivery}</td>`;
                            html += `   <td>${val.bid}</td>`;
                            html += `   <td>${val.basis}</td>`;
                            html += `   <td>${val.futures}</td>`;
                            html += `   <td style="color:#900;">${val.chg}</td>`;
                            html += `   <td>${val.symbol}</td>`;
                            html += `   <td>${val.last_trade}</td>`;
                            html += '</tr>';

                        });

                        $("#cornBids").html(html);

                    break;

                }

             }
        });

    }

}
