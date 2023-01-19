use session;
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            .form-control{
                width:200px;
                height:60px;
                margin:10px;
                
            }
            .col{
                margin:20px;
    
                padding:0px;
                width:60%;
              
            }
            .row{
                width:1000px;
                height:100px;
                background-color:lightblue;
               
                
                
            }
            .container{
                
               
            }
            .result{
                display:flex;
            }
        .contain{
            background-color:lightblue;
        }
        .s{

        }
        .result{
            margin:10px;
            background-color:lightgray;
        }
        .put{
            display:flex;
            background:lightblue;
        }
        .d{
            width:70px;
            height:40px;
            background:green;
        }
        .delete{
            background:red;
            width:100px;
            height:50px;
        }
    </style>
    </head>
    <body>
        <h1>Application Form</h1>
        @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>

                @endforeach
              </ul>
            </div>
        @endif

        <form calss="container" action="{{url('formStore')}}" method="post">
            @csrf
            <div class='put'>
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="name" >
                </div>
                <div class="col">
                    <input type="text" name="phone" class="form-control" placeholder="phone" >
                </div>
                <div class="col">
                    <input type="text" name="address" class="form-control" placeholder="address" >
                </div>
                <div class="col">
                    <input type="text" name="job" class="form-control" placeholder="job" >
                </div>
            </div>
            <button type="submit" class="form-control d">Submit</button>
        </form>

        <form class="contain" action="{{url('delePost')}}" method="post">
            @csrf
            <button type="submit" class='delete' name="delete">Delete</button>
            @foreach($form as $form)

         
                <div class='result'>

                    <div class="col s">
                        <label for='name'>name</label>
                        <div name="name" class="form-control"  >{{$form->name}}</div>
                    </div>

                    <div class="col s">
                        <label for='phone'>phone</label>
                        <div name="phone" class="form-control"  >{{$form->phone}}</div>
                    </div>
                    <div class="col s">
                        <label for='address'>address</label>

                        <div name="address" class="form-control"  >{{$form->address}}</div>
                    </div>
            
                    <div class="col s">
                        <label for='job'>job</label>
                        <div name="job" class="form-control"  >{{$form->job}}</div>
                    </div>
                </div>

                
            @endforeach

            


        </form>
     
       
    </body>
</html>