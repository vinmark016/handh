$(document).ready(function() {

	mark.init();

});

var mark = {

    api: 'https://test.infarmsolutions.com/api',
    init: async function() {


      data = {
           action: 'readBasis',
           json:1
       };

       mark.ajaxCall(data, "POST", true);

    },

    ajaxCall: async function(data,method,async) {

        $.ajax({
             url: mark.api,
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
                        var color = "#E91E63";
                        $.each(t,function(key, val) {

                            if(val.chg > 0) {
                                color = "#4CAF50";
                            }

                            html += '<tr>';
                            html += `   <td>${val.delivery}</td>`;
                            html += `   <td>${val.bid}</td>`;
                            html += `   <td>${val.basis}</td>`;
                            html += `   <td>${val.futures}</td>`;
                            html += `   <td style="font-weight:bold; color:${color};">${val.chg}</td>`;
                            html += `   <td>${val.symbol}</td>`;
                            html += `   <td>${val.last_trade}</td>`;
                            html += '</tr>';

                        });

                        $("#cornBids tbody").html(html);

                    break;

                }

             }
        });

    }

}
