<!DOCTYPE html>
<html>
    <head>
        <title>AJAX PHP</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            *{
                margin: 0; padding: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h4 class="text-capitalize text-center my-5">Please select the program framework to continue</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form>
                    <div class="form-content">

                        <div class="input-group-mb-3">
                            <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon1">PROGRAM</span>
                                 
                                 <select class="form-control" aria-describedby="basic-addon1" data-toggle="tooltip"
                                 title="Please select your fav Lang" onchange="mylang(this.value)">
                                 <option>Select here</option>
                                 <option>PHP</option>
                                 <option>JAVASCRIPT</option>
                                 <option>PYTHON</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-group-mb-3 mt-3">
                            <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon2">FRAMEWORK</span>
                                 
                                 <select class="form-control" id="frameworklist" aria-describedby="basic-addon2">
                                     <option>Select here</option>
                                     
                                    </select>
                            </div>
                        </div>

                    </div>
                </form>

                <br>
                <strong> You need to specify the folder location in url, then it will work</strong>
            </div>
        </div>

        <script>
            function mylang(data){
                const ajaxreq = new XMLHttpRequest();
                // You need to specify the folder location in url, then it will work
                ajaxreq.open('GET',
                'http://localhost/Projects/Ajax_with_PHP/getdata.php?selectvalue='+data, 'TRUE');
                ajaxreq.send();
                ajaxreq.onreadystatechange = function(){
                    if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
                        document.getElementById('frameworklist').innerHTML = ajaxreq.responseText;
                        // this request will go to getdata.php
                    }
                }
            }
        </script>
    </body>
</html>