$(document).ready(function() {
	/* ===== Declarations =====*/
	let sim_th = (n) => {
		return $(`#sim-table-head th:nth-child(${n})`);
	}
	sim_th(1).text("S/N");sim_th(2).text("Investment");
	sim_th(3).text("Yield");sim_th(4).text("Profit");
	sim_th(5).text("C./Investment");sim_th(6).text("C./Yield");
	sim_th(7).text("C./Profit");sim_th(8).text("Week");
	/* ===== Simulator section ====== */
	function goBack() {
		if ($('main').data('state')==='manner-of-input') {
			$('#manner-of-input').addClass('d-none');
  			$('#what-to-do').removeClass('d-none');
			$('main').data('state','what-to-do');
		}else if ($('main').data('state')==='manual-sim-table'){
			$('#table-section .add-btn').addClass('d-none');
			$('#table-section').addClass('d-none');
			$('#manner-of-input').removeClass('d-none');
			$('main').data('state','manner-of-input');
		}else if ($('main').data('state')==='auto-sim-input') {
			$('#manner-of-input').removeClass('d-none');
  			$('section#auto-simulation').addClass('d-none');
  			$('main').data('state','manner-of-input');
		}else if ($('main').data('state')==='auto-sim-table') {
			$('#table-section').addClass('d-none');
	  		$('section#auto-simulation').removeClass('d-none');
  			$('main').data('state','auto-sim-input');
	  		// $('#table-section tbody').empty();
		}
	}
	/* ===== State Changes ====== */
	$('#sim-btn').click(function() {
  		$('#what-to-do').addClass('d-none');
  		$('#manner-of-input').removeClass('d-none');
  		$('main').data('state','manner-of-input');
  	});
	$('#manual-sim-btn').click(function() {
  		$('#manner-of-input').addClass('d-none');
  		$('#table-section .add-btn').removeClass('d-none');
  		$('#table-section').removeClass('d-none');
  		$('main').data('state','manual-sim-table');
	});
	$('#auto-sim-btn').click(function() {
  		$('#manner-of-input').addClass('d-none');
  		$('section#auto-simulation').removeClass('d-none');
  		$('main').data('state','auto-sim-input');
	});
	$('button#submit-sim-values').click(function(e) {
		e.preventDefault();
	  	$('#table-section tbody').empty();
		let auto_sim_data = $('#sim-parameters').serializeArray();
		let get_value = (index) => {return  auto_sim_data[i].value};
  		$('section#auto-simulation').addClass('d-none');
		$('#table-section').removeClass('d-none');
  		$('main').data('state','auto-sim-table');
  		/* ===== Checking for any error codes =====*/
  		let sim_data = investment_simulation_data(auto_sim_data);
  		if (sim_data.error_code === 0) {
  			for (let i of sim_data.data) {
	    		$('#table-section tbody').append(table_row(i));
	    	}
  		}else {
  			if (sim_data.error_code === 1) {
	  			alert(sim_data.data);
	  		}
  		}
    	
  		/* ===== Check finished =====*/

	})
	$('.back-btn').click(function() {
  		goBack();
	});
	let table_row =  (data_object) => {
		// if (data_object[i]).includes()
		let table_row = 
			`
			 <tr>
				<td>${data_object.index}</td>
				<td>&#8358;${data_object.investment}</td>
				<td>&#8358;${data_object.yield}</td>
				<td>&#8358;${data_object.profit}</td>
				<td>&#8358;${data_object.compounded_investment}</td>
				<td>&#8358;${data_object.compounded_yield}</td>
				<td>&#8358;${data_object.compounded_profit}</td>
				<td class="week">${data_object.compounded_time}</td>
			 </tr>
			`;
		return table_row;
	}
	/* ===== Tracking section ====== */
	$('#track-btn').click(function() {
	})
}); 