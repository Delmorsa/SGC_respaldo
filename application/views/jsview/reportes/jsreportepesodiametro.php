<?php

?>
<script type="text/javascript">
	var selected = 'Aceptar';
	$(document).ready(function(){

        $('.select2').select2({
			placeholder: "Seleccione",
			allowClear: true,
			language: "es"
		});

		$(".js-data-example-ajax").select2({
			placeholder: '--- Seleccione un Producto ---',
			allowClear: true,
			ajax: {
				url: '<?php echo base_url("index.php/getProductosSAP")?>',
				dataType: 'json',
				type: "POST",
				quietMillis: 100,
				data: function (params) {
					return {
			        q: params.term,  // search term
        			page: params.page
			      };
				},
				processResults: function (data, params) {
					params.page = params.page || 1;
					let res = [];
					for(let i  = 0 ; i < data.length; i++) {
						res.push({id:data[i].ItemCode, text:data[i].ItemName});
						$("#campo").append('<input type="hidden" name="" id="'+data[i].ItemCode+'txtpeso" class="form-control" value="'+data[i].SWeight1+'">');
					}
					return {
						results: res
					}
				},
				cache: true
			}
		}).trigger('change');
				

		$("#txtPeso").numeric();
		$("#nitrito,#kg").numeric();
		$("#largo,#diametro").numeric();

		$('#fecha').datepicker({"autoclose":true});
		$("#tblCNS").DataTable();	



		$('#btnFiltrar').click(function(){
			let table = $("#tabla").DataTable({
            "ajax": {
                "url": "<?php echo base_url("index.php/generarReportePesoDiametro")?>",
                "type": "POST",
                "data": {
                	"lote" :  $('#idlote').val(),
                	"codigo": $('#codigo').val()
                }
            },		
            "orderMulti": false,
            "info": false,
            "sort": true,
            "destroy": true,
            "responsive": true,
            "searching": true,
            "paging": false,
            "order": [
                [0, "desc"]
            ],
            "language": {
                "info": "Registro _START_ a _END_ de _TOTAL_ entradas",
                "infoEmpty": "Registro 0 a 0 de 0 entradas",
                "zeroRecords": "No se encontro coincidencia",
                "infoFiltered": "(filtrado de _MAX_ registros en total)",
                "emptyTable": "NO HAY DATOS DISPONIBLES",
                "lengthMenu": '_MENU_ ',
                "search": 'Buscar:',
                "loadingRecords": "",
                "processing": "Procesando datos...",
                "paginate": {
                    "first": "Primera",
                    "last": "Última ",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "columns": [
                {"data": "CODIGOPRODUCTO"},
				{"data": "NOMBREPRODUCTO"},
				{"data": "LOTE"},
				{"data": "DIAMETRO_UTILIZADO"},
				{"data": "DIAMETRO_ESPERADO"},
				{"data": "FUNDADIAMETRO"},
				{"data": "FUNDALARGO"},
				{"data": "PESO_ESPERADO"},
				{"data": "PESO_PROMEDIO"},
				{"data": "VARIABILIDAD_3"},
				{"data": "MAQUINA"},
				{"data": "TAMANO_MUESTRA"},
				{"data": "PESOEXACTO"},
				{"data": "DEBAJO_LIMITE"},
				{"data": "ENCIMA_LIMITE"},
				{"data": "EN_RANGO"}
            ]           
        	}); 

        	var ctx = document.getElementById("canvas");

		var lineSuperDraw = Chart.controllers.line.prototype.draw;
		Chart.helpers.extend(Chart.controllers.line.prototype, {
		  draw : function() {
		    var chart = this.chart;
		    var ctx = chart.chart.ctx;

		    var yRangeBegin = chart.config.data.yRangeBegin;
		    var yRangeEnd = chart.config.data.yRangeEnd;

		    var xaxis = chart.scales['x-axis-0'];
		    var yaxis = chart.scales['y-axis-0'];

		    var yRangeBeginPixel = yaxis.getPixelForValue(yRangeBegin);
		    var yRangeEndPixel = yaxis.getPixelForValue(yRangeEnd);

		    ctx.save();

		    for (var yPixel = Math.min(yRangeBeginPixel, yRangeEndPixel); yPixel <= Math.max(yRangeBeginPixel, yRangeEndPixel); ++yPixel) {
		      ctx.beginPath();
		      ctx.moveTo(xaxis.left, yPixel);
		      ctx.strokeStyle = '#52b325';
		      ctx.lineTo(xaxis.right, yPixel);
		      ctx.stroke();
		    }
		     
		    //alert(xaxis.right)
		    //ctx.strokeStyle = '#FF0000';
		    //ctx.strokeRect(xaxis.left, yPixel, xaxis.right-36 , (yPixel)*-1);
		    //alert(xaxis.left+" | "+yPixel+" | "+xaxis.right-36+" | "+(yPixel)*-1)
		    //ctx.lineTo(xaxis.right-100, yPixel);

		    /*yRangeBegin : peso+(peso*0.03),
		    yRangeEnd : peso+((peso*0.03)*-1),*/
		      
		    ctx.restore();

		    lineSuperDraw.apply(this, arguments);
		  }
		});

		$.ajax({
		        url: <?php echo "'".base_url('index.php/GraficaPeso')."'"?>,
		        type: 'post',
		        dataType: 'json',
		        data: {
		        	"lote" :  $('#idlote').val(),
                	"codigo": $('#codigo').val()
		        },
		        success: function (msg) {
		        nombre='peso';
		        peso = 0;
		        codigo = '';
				paramNombres = [];
				paramDatos = [];
				bgColor = [];
				bgBorder = [];
				for (var i=0; i<=6; i++) {
							//console.log(i);
							var r = Math.random() * 255;
							r = Math.round(r);

							var g = Math.random() * 255;
							g = Math.round(g);

							var b = Math.random() * 255;
							b = Math.round(b);
							bgColor.push('rgba(255,0,0, 0.8)');
							bgBorder.push('rgba(255,0,0, 0.8)');
						}
				$.each(msg, function(i,item){						
					//paramNombres.push(item["NOMBREVENDEDOR"]);
					peso = parseFloat(item["PESOGRAMOS"])
					codigo = item["DESCRIPCION"]
					paramDatos.push(parseFloat(item["PESOBASCULA"]));
					bgColor.push('rgba('+r+','+g+','+b+', 0.8)');
					bgBorder.push('rgba('+r+','+g+','+b+', 1)');
				});
				//var ctx2 = $("#myChart2");
				    var myChart = new Chart(ctx, {
					    type: 'line',
					    label:'prueba',
					    data: {
					        labels: paramDatos,//['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'],
					        datasets: [{
					            label: codigo,
					            data: paramDatos,
					            backgroundColor: 'rgba(255,0,0,0.0)'					            
					        }],
						    yRangeBegin : peso+(peso*0.03),
						    yRangeEnd : peso+((peso*0.03)*-1),
						    borderColor: 'rgba(0, 100, 200, 0.2)',
					    },
					    options: {
					    	elements: {
								line: {
									tension: 0.000001,
									borderColor: bgBorder
								}
							},
					        scales: {
					            yAxes: [{
					                ticks: {
					                    beginAtZero:true
					                }
					            }]
					        }
					    }
					});
		        }
		    });	
		});	

	});

	
</script>