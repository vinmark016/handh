$(document).ready(function() {

	mark.init();

});

var mark = {

    api: 'https://feeds.infarmsolutions.com/api',
		contractValues: [],
    init: async function() {

			$("#contractMonths").change(function() {

				var value = $(this).val();
				$("#bidValue").val(mark.contractValues[value]);

			})


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
												var dropdown = '';
                        var t = $.parseJSON(e);
                        var color = "#E91E63";
                        $.each(t,function(key, val) {

                            if(val.chg > 0) {
                                color = "#4CAF50";
                            } else if(val.chg == 0) {
                                color = "#212529";
                            } else {
                                color = "#E91E63";
                            }

                            html += '<tr>';
                            html += `   <td>${val.delivery}</td>`;
                            html += `   <td>${val.bid}</td>`;
                            html += `   <td>${val.basis}</td>`;
                            html += `   <td>${val.futures}</td>`;
                            html += `   <td style="font-weight:bold; color:${color};">${val.chg}</td>`;
                            html += `   <td class="_mb">${val.symbol}</td>`;
                            html += `   <td class="_mb">${val.last_trade}</td>`;
                            html += '</tr>';

														dropdown += `<option value="${val.basis_id}">${val.delivery}</option>`;
														mark.contractValues[val.basis_id] = val.bid;

                        });

												$("#contractMonths").append(dropdown);
                        $("#cornBids tbody").html(html);

                    break;

                }

             }
        });

    }

}
