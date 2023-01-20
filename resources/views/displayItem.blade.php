<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create three unequal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
            height: 90px;
            /* Should be removed. Only for demonstration */
        }
    </style>
</head>

<body>

    <!-- header -->
    @include('layouts.nav')
     <!-- Sidebar -->
     @include('layouts.sidedash')
        <!-- sidebar -->
        <div class="container-fluid">
        <div class="row mx-5 my-4">
                   <center> <div class="col ">
                   <h1 style="font-family: cursive">MENU</h1>
                    </div>
                
    
                    <div class="mt-5" >
                    <a href="addItem" class="btn btn-info" role="button">Add New Item</a>
                </div>
                </div>
            </center>
        <center>

            <div class="col-lg-10 mt-4">
                <div class="card bg-white mb-3 text-center shadow p-3 mb-3 rounded h-50">
                    <div class="container-fluid mt-3">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Item_id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">action</th>
                              </tr>
                            </thead>
                
                            <tbody>
                              
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->item_id}}</td>
                                    <td>{{$item->i_name}}</td>
                                    <td>{{$item->i_desc}}</td>
                                    <td>{{$item->price}}</td>
                                    <td><a class="btn btn-danger" href="displayItem/{{$item->item_id}}">Delete</a></td>
                                    {{-- <td><a href="{{route('delete/$item->item_id')}}">Delete</a></td> --}}
                                </tr>
                                @endforeach  
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </center>
    </div>

</body>

</html>