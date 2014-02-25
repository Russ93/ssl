var strang = '';
$('document').ready(function(){
    $('#form').submit(function(event){
        event.preventDefault();
        $.ajax({
            url: 'http://api.openweathermap.org/data/2.5/weather',
            type: 'get',
            data: {
                q: $('#city').val()+','+$('#region').val()
            },
            dataType: 'json',
            success: function(response){
                var sunR = new Date(response.sys.sunrise*1000),
                sunS = new Date(response.sys.sunset*1000);
                response.sys.sunrise = sunR.getHours()+':'+sunR.getMinutes()+':'+sunR.getSeconds()
                response.sys.sunset = sunS.getHours()+':'+sunS.getMinutes()+':'+sunS.getSeconds()
                response.main.temp = ((9/5)*(response.main.temp - 273) + 32).toFixed(2)
                response.main.temp_min = ((9/5)*(response.main.temp_min - 273) + 32).toFixed(2)
                response.main.temp_max = ((9/5)*(response.main.temp_max - 273) + 32).toFixed(2)
                view(response)
            }
        })//.ajax
    })
})

function view(response){
strang = '<div class="col-md-6"><h3>Current Weather Conditions for:</h3><h1 id="city">'+response.name+'</h1><img src="http://openweathermap.org/img/w/'+response.weather[0].icon+'.png" /><p id="degrees">'+response.main.temp+'&deg</p><p id="current">'+response.weather[0].description+'</p></div><div class="col-md-4"><h3>Minimum Tempature '+response.main.temp_min+'&deg</h4><h3>Maximum Tempature '+response.main.temp_max+'&deg</h4><h3>Humidity '+response.main.humidity+'%</h3><h3>Wind Speed '+response.wind.speed+' MPH</h3><h3>Sunrise '+response.sys.sunrise+'</h3><h3>Sunset '+response.sys.sunset+'</h3></div>'

$('#weather').html(strang)
}

//'<div id="weather" class="row"><div class="col-md-6"><h3>Current Weather Conditions for:</h3><h1 id="city">'+response.name+'</h1>
//<img src="http://openweathermap.org/img/w/'+response.weather[0].icon+'.png" />
//<p id="degrees">'+response.main.temp+'&deg</p>
//<p id="current">'+response.weather[0].description+'</p>
//</div>
//<div class="col-md-4">
//<h3>Minimum Tempature '+response.main.temp_min+'</h4>
//<h3>Maximum Tempature '+response.main.temp_max+'</h4>
//<h3>Humidity '+response.main.humidity+'%</h3>
//<h3>Wind Speed '+response.wind.speed+' MPH</h3>
//<h3>Sunrise '+response.sys.sunrise+'</h3>
//<h3>Sunset '+response.sys.sunset+'</h3>
//</div>
//</div>'