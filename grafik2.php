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
		  </p>
		</figure>
    </div>
    <div class="col">
		<figure class="highcharts-figure">
		  <div id="post1"></div>
		  <p class="highcharts-description">
		  </p>
		</figure>
		    </div>
  </div>


<div class="row">
    <div class="col">
    <figure class="highcharts-figure">
      <div id="pre2"></div>
      <p class="highcharts-description">
      </p>
    </figure>
    </div>
    <div class="col">
    <figure class="highcharts-figure">
      <div id="post2"></div>
      <p class="highcharts-description">
      </p>
    </figure>
        </div>
  </div>


<div class="row">
    <div class="col">
    <figure class="highcharts-figure">
      <div id="pre3"></div>
      <p class="highcharts-description">
      </p>
    </figure>
    </div>
    <div class="col">
    <figure class="highcharts-figure">
      <div id="post3"></div>
      <p class="highcharts-description">
      </p>
    </figure>
        </div>
  </div>


<div class="row">
    <div class="col">
    <figure class="highcharts-figure">
      <div id="pre4"></div>
      <p class="highcharts-description">
      </p>
    </figure>
    </div>
    <div class="col">
    <figure class="highcharts-figure">
      <div id="post4"></div>
      <p class="highcharts-description">
      </p>
    </figure>
        </div>
  </div>

<div class="row">
    <div class="col">
    <figure class="highcharts-figure">
      <div id="pre5"></div>
      <p class="highcharts-description">
      </p>
    </figure>
    </div>
    <div class="col">
    <figure class="highcharts-figure">
      <div id="post5"></div>
      <p class="highcharts-description">
      </p>
    </figure>
        </div>
  </div>

<div class="row">
    <div class="col">
    <figure class="highcharts-figure">
      <div id="pre6"></div>
      <p class="highcharts-description">
      </p>
    </figure>
    </div>
    <div class="col">
    <figure class="highcharts-figure">
      <div id="post6"></div>
      <p class="highcharts-description">
      </p>
    </figure>
        </div>
  </div>


<div class="row">
    <div class="col">
    <figure class="highcharts-figure">
      <div id="pre7"></div>
      <p class="highcharts-description">
      </p>
    </figure>
    </div>
    <div class="col">
    <figure class="highcharts-figure">
      <div id="post7"></div>
      <p class="highcharts-description">
      </p>
    </figure>
        </div>
  </div>

<div class="row">
    <div class="col">
    <figure class="highcharts-figure">
      <div id="pre8"></div>
      <p class="highcharts-description">
      </p>
    </figure>
    </div>
    <div class="col">
    <figure class="highcharts-figure">
      <div id="post8"></div>
      <p class="highcharts-description">
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
    text: 'Soal PRE Test Bagian 2 Nomor 1'
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
      name: 'Tidak Sesuai',
      y: 2
    }, {
      name: 'Kurang Sesuai',
      y: 10
    }, {
      name: 'Netral',
      y: 210
    }, {
      name: 'Agak Sesuai',
      y: 230 
    }, {
      name: 'Sesuai',
      y: 689,
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
    text: 'Soal POST Test Bagian 2 Nomor 1'
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
      name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 8
    }, {
      name: 'Netral',
      y: 99
    }, {
      name: 'Agak Sesuai',
      y: 170  
    }, {
      name: 'Sesuai',
      y: 867,
      sliced: true,
      selected: true
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
    text: 'Soal PRE Test Bagian 2 Nomor 2'
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
      name: 'Tidak Sesuai',
      y: 39
    }, {
      name: 'Kurang Sesuai',
      y: 77
    }, {
      name: 'Netral',
      y: 324
    }, {
      name: 'Agak Sesuai',
      y: 271
    }, {
      name: 'Sesuai',
      y: 469,
      sliced: true,
      selected: true
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
    text: 'Soal POST Test Bagian 2 Nomor 2'
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
      name: 'Tidak Sesuai',
      y: 2
    }, {
      name: 'Kurang Sesuai',
      y: 5
    }, {
      name: 'Netral',
      y: 110
    }, {
      name: 'Agak Sesuai',
      y: 187
    }, {
      name: 'Sesuai',
      y: 834,
      sliced: true,
      selected: true
    }]
  }]
});
// /------------------------/  //

Highcharts.chart('pre3', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 3'
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
      name: 'Tidak Sesuai',
      y: 12
    }, {
      name: 'Kurang Sesuai',
      y: 33
    }, {
      name: 'Netral',
      y: 326
    }, {
      name: 'Agak Sesuai',
      y: 335
    }, {
      name: 'Sesuai',
      y: 435,
      sliced: true,
      selected: true
    }]
  }]
});

  Highcharts.chart('post3', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Bagian 2 Nomor 3'
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
      name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 3
    }, {
      name: 'Netral',
      y: 134
    }, {
      name: 'Agak Sesuai',
      y: 205
    }, {
      name: 'Sesuai',
      y: 734,
      sliced: true,
      selected: true
    }]
  }]
});
// /------------------------/  //
Highcharts.chart('pre4', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 4'
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
      name: 'Tidak Sesuai',
      y: 12
    }, {
      name: 'Kurang Sesuai',
      y: 59
    }, {
      name: 'Netral',
      y: 359,
      sliced: true,
      selected: true
    }, {
      name: 'Agak Sesuai',
      y: 319
    }, {
      name: 'Sesuai',
      y: 392
    }]
  }]
});

  Highcharts.chart('post4', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Bagian 2 Nomor 4'
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
      name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 8
    }, {
      name: 'Netral',
      y: 150
    }, {
      name: 'Agak Sesuai',
      y: 217
    }, {
      name: 'Sesuai',
      y: 761,
      sliced: true,
      selected: true
    }]
  }]
});
// /------------------------/  //
Highcharts.chart('pre5', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 5'
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
      name: 'Tidak Sesuai',
      y: 7
    }, {
      name: 'Kurang Sesuai',
      y: 16
    }, {
      name: 'Netral',
      y: 264
    }, {
      name: 'Agak Sesuai',
      y: 246
    }, {
      name: 'Sesuai',
      y: 608,
      sliced: true,
      selected: true
    }]
  }]
});

  Highcharts.chart('post5', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Bagian 2 Nomor 5'
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
     name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 6
    }, {
      name: 'Netral',
      y: 121
    }, {
      name: 'Agak Sesuai',
      y: 157
    }, {
      name: 'Sesuai',
      y: 852,
      sliced: true,
      selected: true
    }]
  }]
});


// /------------------------/  //
Highcharts.chart('pre6', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 6'
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
      name: 'Tidak Sesuai',
      y: 3
    }, {
      name: 'Kurang Sesuai',
      y: 14
    }, {
      name: 'Netral',
      y: 184
    }, {
      name: 'Agak Sesuai',
      y: 277
    }, {
      name: 'Sesuai',
      y: 676,
      sliced: true,
      selected: true
    }]
  }]
});

  Highcharts.chart('post6', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Bagian 2 Nomor 6'
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
     name: 'Tidak Sesuai',
      y: 1
    }, {
      name: 'Kurang Sesuai',
      y: 1
    }, {
      name: 'Netral',
      y: 108
    }, {
      name: 'Agak Sesuai',
      y: 158
    }, {
      name: 'Sesuai',
      y: 868,
      sliced: true,
      selected: true
    }]
  }]
});

// /------------------------/  //
Highcharts.chart('pre7', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 7'
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
      name: 'Tidak Sesuai',
      y: 1
    }, {
      name: 'Kurang Sesuai',
      y: 8
    }, {
      name: 'Netral',
      y: 175
    }, {
      name: 'Agak Sesuai',
      y: 198
    }, {
      name: 'Sesuai',
      y: 759,
      sliced: true,
      selected: true
    }]
  }]
});

  Highcharts.chart('post7', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Bagian 2 Nomor 7'
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
     name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 5
    }, {
      name: 'Netral',
      y: 99 
    }, {
      name: 'Agak Sesuai',
      y: 120
    }, {
      name: 'Sesuai',
      y: 912,
      sliced: true,
      selected: true
    }]
  }]
});
// /------------------------/  //

Highcharts.chart('pre8', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 8'
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
      name: 'Tidak Sesuai',
      y: 4
    }, {
      name: 'Kurang Sesuai',
      y: 26
    }, {
      name: 'Netral',
      y: 246
    }, {
      name: 'Agak Sesuai',
      y: 219
    }, {
      name: 'Sesuai',
      y: 646,
      sliced: true,
      selected: true
    }]
  }]
});

  Highcharts.chart('post8', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Bagian 2 Nomor 8'
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
     name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 5
    }, {
      name: 'Netral',
      y: 115 
    }, {
      name: 'Agak Sesuai',
      y: 185
    }, {
      name: 'Sesuai',
      y: 831,
      sliced: true,
      selected: true
    }]
  }]
});

// /------------------------/  //
// /------------------------/  //
</script>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>