<!DOCTYPE html>
<html>
<head>
    <title>Corona</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
            margin: 0; padding: 0;
        }
    </style>
</head>
<body onload="fetch()">
    <div class="container">
        <h4 class="text-capitalize text-center my-5">Covid-19 Updates of the World</h4>

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th>Country</th>
                    <th>Total Confirmed</th>
                    <th>Total Recovered</th>
                    <th>Total Deaths</th>
                    <th>New Confirmed</th>
                    <th>New Recovered</th>
                    <th>New Deaths</th>
                 </tr>
            </table>
        </div>
    </div>
    
    <script>
        function fetch(){
            $.get("https://api.covid19api.com/summary",             //jquery function

                function(data){
                    // console.log(data['Countries'].length);
                    var tbval = document.getElementById('tbval');

                    for(var i=1;i<data['Countries'].length;i++){
                        var x = tbval.insertRow();  //inserts a row in variable

                        x.insertCell(0);        //inserts a cell   -->Country's cell in html
                        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                        tbval.rows[i].cells[0].style.background = "#7a4a91";
                        tbval.rows[i].cells[0].style.color = "#ffffff";

                        x.insertCell(1);        //inserts a cell   -->Total Confirmed's cell in html
                        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                        tbval.rows[i].cells[1].style.background = "#4bb7d8";

                        x.insertCell(2);        //inserts a cell   -->Total Recovered's cell in html
                        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                        tbval.rows[i].cells[2].style.background = "#4bb7d8";

                        x.insertCell(3);        //inserts a cell   -->Total Death's cell in html
                        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                        tbval.rows[i].cells[3].style.background = "#f36e23";

                        x.insertCell(4);        //inserts a cell   -->New Confirmed's cell in html
                        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                        tbval.rows[i].cells[4].style.background = "#4bb7d8";

                        x.insertCell(5);        //inserts a cell   -->Total Recovered's cell in html
                        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                        tbval.rows[i].cells[5].style.background = "#9cc850";

                        x.insertCell(6);        //inserts a cell   -->Total Death's cell in html
                        tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                        tbval.rows[i].cells[6].style.background = "#f36e23";
                        }
                }
            )
        }
    </script>
</body>
</html>