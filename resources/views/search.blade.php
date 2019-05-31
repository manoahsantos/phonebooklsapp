<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



  <title>Search by AJAX</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 </head>

 <body>
                @include('inc.navbar')
  <br />
  <div class="container">

    <!-- <h3>Live search in laravel using AJAX</h3> -->

    <div class="panel panel-default">
            <div class="panel-heading"><h3>Search Contact Info</h3></div>
                <div class="panel-body">

                        <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search by name or number" />
                        </div>

                        <div class="table-responsive">

                            <h4>Total Contacts: <span id="total_records"></span></h4>

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Number</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!--scriptfromsuccess-->
                                </tbody>

                            </table>

                        </div>
                </div>
        </div>
  </div>

  <!-- <script src="{{ asset('js/app.js') }}"></script> -->
 </body>

</html>


<!-- OUTPUTS search results -->
<script>
$(document).ready(function()
{

 fetch_customer_data(); //function to get data

 function fetch_customer_data(query = '')
    {
        $.ajax(
            {
        url:"{{ route('search.action') }}", //calls controller by route name    //live_search is the blade //LiveSearch is the controller
        method:'GET',
        data:{query:query},
        dataType:'json',

                success:function(data)
                {
                    $('tbody').html(data.table_data); //puts results to tablebody=tbody
                    $('#total_records').text(data.total_data); //id of h4 Total Records
                }
            })
    }

    //updates results every update of input
    $(document).on('keyup', '#search',
                                        function()
                                        {
                                        var query = $(this).val();
                                        fetch_customer_data(query);
                                        }

                  );

//
//return view('search');
}
        );
</script>
