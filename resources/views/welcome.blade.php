<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


    <form class="form-material" id="myform">
        ...
        {{--<input type="file" name="l_img" id="l_img">--}}
        <input type="hidden" id="_token" value="{{ csrf_token() }}">
        ..
        <button type="button" onclick="payWithPaystack()"> Pay </button>
    </form>
    </body>
    <script>
        var my_callback_function = function(response_reference){
             var _token = $('input#_token').val();
             send_data = new FormData();
             send_data.append("_token", _token);
             send_data.append("ref_code",response_reference);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            //var myJSON = JSON.parse(response_reference);
            var myJSON = JSON.stringify(response_reference);
            //console.log(myJSON);
            $.ajax({
                url: 'https://api.paystack.co/transferrecipient',
                type: 'POST',
                data: {"ref_code":name},
                dataType : "json",
                success: function(data){
                    console.log(data.success);
                }
             });
        }


        function payWithPaystack(){
            var handler = PaystackPop.setup({
                key: 'pk_test_9c07132e4ef3a4d7466283ff5c635c1b0902a2b1',
                email: 'customer@email.com',
                amount: 1000,
                currency: "NGN",
                 // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",
                            value: "+2348012345678"
                        }
                    ]
                },
                callback: function(response){
                    //console.log(response);
                    my_callback_function(response.reference);
                    //alert('success. transaction ref is ' + response.reference);
                },
                onClose: function(){
                    alert('window closed');
                }
            });
            handler.openIframe();
        }
    </script>
</html>
