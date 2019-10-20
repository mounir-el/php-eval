<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: 'http://localhost:8000/countries',
                async: true,
                dataType: 'json', //you may use jsonp for cross origin request
                crossDomain: true,
                success: function(data, status, xhr) {
                    var country = "";
                    $.each(data, function(index, value) {
                        if (index == 'data') {
                            $.each(value['country'], function(key, item) {
                                console.log(item.city[0].name);
                                var city = item.city[0].name;
                                var cityImage = item.city[0].image;
                                var target = cityImage.replace(/\/$/, '');
                                console.log(target);
                                country = country + "<h1>" + item.name + " </h1> " + "<h2>" + city + "</h2> <div> <img style = 'max-width: 40% ; max-height: 50%;' src = " + target + " / > </div>";

                            });
                        }

                    });
                    $("#div1").html(country);
                    // $('#div1').css('width', 392 px); // ma méthode modifiera la propriété "color" et la définira à "red"

                }
            });
        });
    </script>
    <title>Document</title>
</head>

<body>
    <h1>Countries</h1>
    <div id="div1">
        <p><?= $date; ?></p>
</body>

</html>