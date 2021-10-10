
function buildRequest (method, url,data = null)
 {
return new Promise((resolve,reject)=>{
        var xhr = new XMLHttpRequest();
        xhr.responseType = 'json';
        xhr.open(method, url);
        xhr.onload = function () {
          resolve(xhr.response);
        };
        xhr.onerror = function () {
          reject(xhr.response);
        };
        xhr.send(data);
    });

}
async function getChart(type)
{
    return await buildRequest('GET', '/api/getChart?type='+type);
}
async function getInfo(type)
{
    return await buildRequest('GET', '/api/getInfo?type='+type);



}


getInfo('osis').then(function(result){

    document.querySelector('#jumlahhaksuaraOsis').innerHTML = result.jumlahhaksuara;
    document.querySelector('#jumlahkandidatOsis').innerHTML = result.jumlahkandidat;
    document.querySelector('#suaramasukOsis').innerHTML = result.suaramasuk;
    var belumvoting = result.belumvoting;
 /*    getChart('osis').then((res)=>{
res.push({name:'Belum Voting',y: belumvoting,drilldown: 'Token Tidak Dipakai'})
Highcharts.chart('chartHasilOsis', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Perolehan Suara.'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total suara yang di dapat'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                // format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> Suara<br/>'
    },

    series: [
        {
            name: "Total",
            colorByPoint: true,
            data: res
        }
    ]
   
});
}); */
 
});
getInfo('mpk').then(function(result){

    document.querySelector('#jumlahhaksuaraMpk').innerHTML = result.jumlahhaksuara;
    document.querySelector('#jumlahkandidatMpk').innerHTML = result.jumlahkandidat;
    document.querySelector('#suaramasukMpk').innerHTML = result.suaramasuk;
    var belumvoting = result.belumvoting;
 /*    getChart('mpk').then((res)=>{
res.push({name:'Belum Voting',y: belumvoting,drilldown: 'Token Tidak Dipakai'})
Highcharts.chart('chartHasilMpk', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Perolehan Suara.'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total suara yang di dapat'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                // format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> Suara<br/>'
    },

    series: [
        {
            name: "Total",
            colorByPoint: true,
            data: res
        }
    ]
   
});
}); */
 
});
	// Create the chart


