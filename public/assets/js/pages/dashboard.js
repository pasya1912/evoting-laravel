

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




var osis = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1,

	},
	plotOptions: {
	},
	series: [{
		name: 'Jumlah Suara',
		data: []
	}],
	colors: "#435ebe",
	xaxis: {
		categories: [],
	},
}
var mpk = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1,

	},
	plotOptions: {
	},
	series: [{
		name: 'Jumlah Suara',
		data: []
	}],
	colors: "#435ebe",
	xaxis: {
		categories: [],
	},
}
getInfo('osis').then(function(result){

	var jumlahSuara = [];
var kandidat = [];
    document.querySelector('#jumlahhaksuaraOsis').innerHTML = result.jumlahhaksuara;
    document.querySelector('#jumlahkandidatOsis').innerHTML = result.jumlahkandidat;
    document.querySelector('#suaramasukOsis').innerHTML = result.suaramasuk;
    var belumvoting = result.belumvoting;
 getChart('osis').then((res)=>{
	 
		res.push({name:'Belum Voting',y: belumvoting,drilldown: 'Token Tidak Dipakai'});
		console.log(res)
		res.forEach(function(val,key){

			jumlahSuara[key] = val.y;

			kandidat[key] = val.name;
			//kandidat[key] = val.name;
		});
		osis.series[0].data = jumlahSuara;
		osis.xaxis.categories = kandidat;
		var chartProfileVisit = new ApexCharts(document.querySelector("#chartOsis"), osis);
		chartProfileVisit.render();


		});
});
getInfo('mpk').then(function(result){
	var jumlahSuara = [];
	var kandidat = [];
    document.querySelector('#jumlahhaksuaraMpk').innerHTML = result.jumlahhaksuara;
    document.querySelector('#jumlahkandidatMpk').innerHTML = result.jumlahkandidat;
    document.querySelector('#suaramasukMpk').innerHTML = result.suaramasuk;
    var belumvoting = result.belumvoting;
 getChart('mpk').then((res)=>{
	res.push({name:'Belum Voting',y: belumvoting,drilldown: 'Token Tidak Dipakai'});


		console.log(res)
		res.forEach(function(val,key){

			jumlahSuara[key] = val.y;

			kandidat[key] = val.name;
			//kandidat[key] = val.name;
		});
		mpk.series[0].data = jumlahSuara;
		mpk.xaxis.categories = kandidat;
		var mpkChart = new ApexCharts(document.querySelector("#chartMpk"), mpk);
		mpkChart.render();


		});
});







/* 
var chartVisitorsProfile = new ApexCharts(document.getElementById('chart-visitors-profile'), optionsVisitorsProfile)
var chartEurope = new ApexCharts(document.querySelector("#chart-europe"), optionsEurope);
var chartAmerica = new ApexCharts(document.querySelector("#chart-america"), optionsAmerica);
var chartIndonesia = new ApexCharts(document.querySelector("#chart-indonesia"), optionsIndonesia);

chartIndonesia.render();
chartAmerica.render();
chartEurope.render();

chartVisitorsProfile.render() */