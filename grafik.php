<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style type="">
	.highcharts-figure, .highcharts-data-table table {
  min-width: 320px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}


input[type="number"] {
	min-width: 50px;
}

</style>


 <div class="container">
<div class="row">
    <div class="col">
		<figure class="highcharts-figure">
		  <div id="pre1"></div>
		  <p class="highcharts-description">
		    Pie charts are very popular for showing a compact overview of a
		    composition or comparison. While they can be harder to read than
		    column charts, they remain a popular choice for small datasets.
		  </p>
		</figure>
    </div>
    <div class="col">
		<figure class="highcharts-figure">
		  <div id="post1"></div>
		  <p class="highcharts-description">
		    Pie charts are very popular for showing a compact overview of a
		    composition or comparison. While they can be harder to read than
		    column charts, they remain a popular choice for small datasets.
		  </p>
		</figure>
		    </div>
  </div>
<div class="row">
    <div class="col">
		<figure class="highcharts-figure">
		  <div id="pre2"></div>
		  <p class="highcharts-description">
		    Pie charts are very popular for showing a compact overview of a
		    composition or comparison. While they can be harder to read than
		    column charts, they remain a popular choice for small datasets.
		  </p>
		</figure>
    </div>
    <div class="col">
    	<figure class="highcharts-figure">
		  <div id="post2"></div>
		  <p class="highcharts-description">
		    Pie charts are very popular for showing a compact overview of a
		    composition or comparison. While they can be harder to read than
		    column charts, they remain a popular choice for small datasets.
		  </p>
		</figure>
    </div>
   
  </div>
 </div>

<script >
	
	Highcharts.chart('pre1', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Nomor 1'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 122
    }, {
      name: 'Jawaban B',
      y: 258
    }, {
      name: 'Jawaban C',
      y: 761,
      sliced: true,
      selected: true
    }]
  }]
});

	Highcharts.chart('post1', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Nomor 1'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 111,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban B',
      y: 185
    }, {
      name: 'Jawaban C',
      y: 840
    }]
  }]
});

// /------------------------/  //
Highcharts.chart('pre2', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Nomor 2'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 911,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban B',
      y: 152
    }, {
      name: 'Jawaban C',
      y: 78
    }]
  }]
});


Highcharts.chart('post2', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Nomor 2'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 911,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban B',
      y: 152
    }, {
      name: 'Jawaban C',
      y: 78
    }]
  }]
});















</script>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>