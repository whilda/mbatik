/**
 * Dashboard data
 */
function highchart_theme(){
	/**
	 * Dark theme for Highcharts JS
	 * @author Torstein Honsi
	 */
	// Load the fonts
	Highcharts.createElement('link', {
	   href: 'https://fonts.googleapis.com/css?family=Unica+One',
	   rel: 'stylesheet',
	   type: 'text/css'
	}, null, document.getElementsByTagName('head')[0]);

	Highcharts.theme = {
			   colors: ["#2b908f", "#90ee7e", "#f45b5b", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
			      "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
			   chart: {
			      backgroundColor: {
			         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
			         stops: [
			            [0, '#2a2a2b'],
			            [1, '#3e3e40']
			         ]
			      },
			      style: {
			         fontFamily: "'Unica One', sans-serif"
			      },
			      plotBorderColor: '#606063'
			   },
			   title: {
			      style: {
			         color: '#E0E0E3',
			         textTransform: 'uppercase',
			         fontSize: '20px'
			      }
			   },
			   subtitle: {
			      style: {
			         color: '#E0E0E3',
			         textTransform: 'uppercase'
			      }
			   },
			   xAxis: {
			      gridLineColor: '#707073',
			      labels: {
			         style: {
			            color: '#E0E0E3'
			         }
			      },
			      lineColor: '#707073',
			      minorGridLineColor: '#505053',
			      tickColor: '#707073',
			      title: {
			         style: {
			            color: '#A0A0A3'

			         }
			      }
			   },
			   yAxis: {
			      gridLineColor: '#707073',
			      labels: {
			         style: {
			            color: '#E0E0E3'
			         }
			      },
			      lineColor: '#707073',
			      minorGridLineColor: '#505053',
			      tickColor: '#707073',
			      tickWidth: 1,
			      title: {
			         style: {
			            color: '#A0A0A3'
			         }
			      }
			   },
			   tooltip: {
			      backgroundColor: 'rgba(0, 0, 0, 0.85)',
			      style: {
			         color: '#F0F0F0'
			      }
			   },
			   plotOptions: {
			      series: {
			         dataLabels: {
			            color: '#B0B0B3'
			         },
			         marker: {
			            lineColor: '#333'
			         }
			      },
			      boxplot: {
			         fillColor: '#505053'
			      },
			      candlestick: {
			         lineColor: 'white'
			      },
			      errorbar: {
			         color: 'white'
			      }
			   },
			   legend: {
			      itemStyle: {
			         color: '#E0E0E3'
			      },
			      itemHoverStyle: {
			         color: '#FFF'
			      },
			      itemHiddenStyle: {
			         color: '#606063'
			      }
			   },
			   credits: {
			      style: {
			         color: '#666'
			      }
			   },
			   labels: {
			      style: {
			         color: '#707073'
			      }
			   },

			   drilldown: {
			      activeAxisLabelStyle: {
			         color: '#F0F0F3'
			      },
			      activeDataLabelStyle: {
			         color: '#F0F0F3'
			      }
			   },

			   navigation: {
			      buttonOptions: {
			         symbolStroke: '#DDDDDD',
			         theme: {
			            fill: '#505053'
			         }
			      }
			   },

			   // scroll charts
			   rangeSelector: {
			      buttonTheme: {
			         fill: '#505053',
			         stroke: '#000000',
			         style: {
			            color: '#CCC'
			         },
			         states: {
			            hover: {
			               fill: '#707073',
			               stroke: '#000000',
			               style: {
			                  color: 'white'
			               }
			            },
			            select: {
			               fill: '#000003',
			               stroke: '#000000',
			               style: {
			                  color: 'white'
			               }
			            }
			         }
			      },
			      inputBoxBorderColor: '#505053',
			      inputStyle: {
			         backgroundColor: '#333',
			         color: 'silver'
			      },
			      labelStyle: {
			         color: 'silver'
			      }
			   },

			   navigator: {
			      handles: {
			         backgroundColor: '#666',
			         borderColor: '#AAA'
			      },
			      outlineColor: '#CCC',
			      maskFill: 'rgba(255,255,255,0.1)',
			      series: {
			         color: '#7798BF',
			         lineColor: '#A6C7ED'
			      },
			      xAxis: {
			         gridLineColor: '#505053'
			      }
			   },

			   scrollbar: {
			      barBackgroundColor: '#808083',
			      barBorderColor: '#808083',
			      buttonArrowColor: '#CCC',
			      buttonBackgroundColor: '#606063',
			      buttonBorderColor: '#606063',
			      rifleColor: '#FFF',
			      trackBackgroundColor: '#404043',
			      trackBorderColor: '#404043'
			   },

			   // special colors for some of the
			   legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
			   background2: '#505053',
			   dataLabelsColor: '#B0B0B3',
			   textColor: '#C0C0C0',
			   contrastTextColor: '#F0F0F3',
			   maskColor: 'rgba(255,255,255,0.3)'
			};

			// Apply the theme
			Highcharts.setOptions(Highcharts.theme);
}

function highchart_asset(){
	$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=aapl-c.json&callback=?', function (data) {
	    //$.getJSON('./api/asset', function (data) {
	        // Create the chart
	        $('#container').highcharts('StockChart', {
	            rangeSelector : {
	                selected : 1
	            },
	            title : {
	                text : 'Asset Price'
	            },
	            series : [{
	                name : 'Asset',
	                data : data,
	                tooltip: {
	                    valueDecimals: 2,
	                    valuePrefix: 'Rp '
	                }
	            }]
	        });
	    });
}

function highchart_dualaxis(){
	$('#dualaxis').highcharts({
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Average Monthly Income and Profit'
        },
        xAxis: [{
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
        	title: {
                text: 'Income',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            labels: {
                format: 'Rp {value}',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Profit',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: 'Rp {value}',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 120,
            verticalAlign: 'top',
            y: 100,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Profit',
            type: 'column',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            tooltip: {
                valuePrefix: 'Rp '
            }

        }, {
            name: 'Income',
            type: 'spline',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
            tooltip: {
                valuePrefix: 'Rp '
            }
        }]
    });
}

function highchart_pie(){
	$('#pie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browser market shares January, 2015 to May, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Microsoft Internet Explorer',
                y: 56.33
            }, {
                name: 'Chrome',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Firefox',
                y: 10.38
            }, {
                name: 'Safari',
                y: 4.77
            }, {
                name: 'Opera',
                y: 0.91
            }, {
                name: 'Proprietary or Undetectable',
                y: 0.2
            }]
        }]
    });
}

function highchart_speedo(){
	$('#speedo').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: 'Speedometer'
        },

        pane: {
            startAngle: -150,
            endAngle: 150,
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 200,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'km/h'
            },
            plotBands: [{
                from: 0,
                to: 120,
                color: '#55BF3B' // green
            }, {
                from: 120,
                to: 160,
                color: '#DDDF0D' // yellow
            }, {
                from: 160,
                to: 200,
                color: '#DF5353' // red
            }]
        },

        series: [{
            name: 'Speed',
            data: [80],
            tooltip: {
                valueSuffix: ' km/h'
            }
        }]

    },
    // Add some life
    function (chart) {
        if (!chart.renderer.forExport) {
            setInterval(function () {
                var point = chart.series[0].points[0],
                    newVal,
                    inc = Math.round((Math.random() - 0.5) * 20);

                newVal = point.y + inc;
                if (newVal < 0 || newVal > 200) {
                    newVal = point.y - inc;
                }

                point.update(newVal);

            }, 3000);
        }
    });
}

function highchart_spider(){
	$('#spider').highcharts({
        chart: {
            polar: true,
            type: 'line'
        },
        title: {
            text: 'Budget vs spending',
            x: -80
        },
        pane: {
            size: '80%'
        },
        xAxis: {
            categories: ['Sales', 'Marketing', 'Development', 'Customer Support',
                    'Information Technology', 'Administration'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },
        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0
        },
        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
        },
        legend: {
            align: 'right',
            verticalAlign: 'top',
            y: 70,
            layout: 'vertical'
        },
        series: [{
            name: 'Allocated Budget',
            data: [43000, 19000, 60000, 35000, 17000, 10000],
            pointPlacement: 'on'
        }, {
            name: 'Actual Spending',
            data: [50000, 39000, 42000, 31000, 26000, 14000],
            pointPlacement: 'on'
        }]
    });	
}

$(function () {
	highchart_theme();
	highchart_asset();
	highchart_pie();
	highchart_speedo();
	highchart_spider();
	highchart_dualaxis();
});