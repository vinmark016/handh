$(document).ready(function() {

	mark.init();

});

var mark = {

    api: 'https://feeds.infarmsolutions.com/api',
		contractValues: [],
    init: async function() {

			$("#contractMonths").change(function() {

				var value = $(this).val();
				var month = $(this).children("option:selected").text().split(" ");
				var forMomentMOnth = month[0].charAt(0) + month[0].slice(1).toLowerCase();
				var numMonth = (moment().month(forMomentMOnth).format('M'));
				var numYear = moment().format('YYYY');
				var fullDate = `${numMonth}/01/${numYear}`;
				var maxDate = moment(fullDate).add(1, 'month').format('MM/DD/YYYY');
				maxDate = moment(maxDate).subtract(1, 'day').format('MM/DD/YYYY');

				$("#bidValue").val(mark.contractValues[value]);

				$('.input-daterange').datepicker('clearDates').datepicker('destroy').datepicker({
					autoclose: true,
					startDate: fullDate,
					endDate: maxDate,
					todayHighlight: true
				});

			})

			$("#bushels_text").keyup(function() {

				var val = $(this).val();
				val = val.replace(",","");
				$(this).val(mark.numberFormat(val));

			});

      data = {
           action: 'readBasis',
           json:1
       };

       mark.ajaxCall(data, "POST", true);

    },
		numberFormat: function(number, decimals, dec_point, thousands_sep) {
		    // Strip all characters but numerical ones.
		    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
		    var n = !isFinite(+number) ? 0 : +number,
		        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
		        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
		        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
		        s = '',
		        toFixedFix = function (n, prec) {
		            var k = Math.pow(10, prec);
		            return '' + Math.round(n * k) / k;
		        };
		    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
		    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		    if (s[0].length > 3) {
		        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		    }
		    if ((s[1] || '').length < prec) {
		        s[1] = s[1] || '';
		        s[1] += new Array(prec - s[1].length + 1).join('0');
		    }
		    return s.join(dec);
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
												var x = 1;
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

														if (x <=5) {
															dropdown += `<option value="${val.basis_id}">${val.delivery}</option>`;
															x++;
														}
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
