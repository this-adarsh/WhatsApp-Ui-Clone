<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>WhatsApp</title>
</head>
<body>
<div class="container headnavbar">
        <div class="theme-primary-color row pt-2">
            <div class="header-font col-sm-10 col-8">
                <span>WhatsApp</span>
                <input type="text" class="float-left" id="searchbox" placeholder="Show Text Field" />
            </div>
            <div class="header-font col-sm-1 col-2">
                <span><i class="fas fa-search"></i></span>
            </div>        
            <div class="header-font col-sm-1 col-2 dropdown">
                <span class="" data-toggle="dropdown">
                    <i class="fas fa-ellipsis-v"></i>
                </span>
            <div class="dropdown-menu">
                
                <a class="dropdown-item" href="#">New Group</a>
                <a class="dropdown-item" href="#">New Brodcast</a>
                <a class="dropdown-item" href="#">WhatsApp Web</a>
                <a class="dropdown-item" href="#">Settings</a>
                </div>                
            </div>        
        </div>
        <div class="theme-primary-color swiper row pt-3 shadow-lg">
            <ul class="nav nav-tabs text-center" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active menu-font" data-toggle="tab" aria-controls="chats" role="tab" href="#chats">
                        Chats<span class="ml-2 badge notification-bgcolor">10</span>                           
                    </a>
                </li>            
                <li class="nav-item" role="presentation">
                    <a class="nav-link menu-font" data-toggle="tab" aria-controls="status" role="tab" href="#status">Status</a>
                </li>            
                <li class="nav-item" role="presentation">
                    <a class="nav-link  menu-font" data-toggle="tab" aria-controls="calls" role="tab" href="#calls">Calls</a>
                </li>            
            </ul>
        </div>    
    </div>

  <!-- Tab panes -->
    <div class="tab-content">
        <div id="chats" role="tabpanel"  class="tab-pane active"><br>
            <div class="container">
                <?php for($i=0;$i<10; $i++) {?>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/70/70/">
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <span class="font-weight-bold">Softwere and web dev</span>
                        </div>
                        <div class="row">
                            <span class="">+917 040 905320: Hi How are you doing</span>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="row">
                            <span class="notification-fontcolor">4:45 PM</span>
                        </div>
                        <div class="row">
                            <span class="badge notification-bgcolor">1</span>                            
                        </div>
                    </div>
                </div>
                <?php } ?>    
            </div>        
        </div>
        <div id="status" role="tabpanel"  class="tab-pane fade"><br>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/1/70/70/">
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <span class="font-weight-bold">My Status</span>
                        </div>
                        <div class="row">
                            <span class="">Tap to add status update</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 bg-secondary">
                        <span>Viewed updates</span>
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/1001/70/70/">
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <span class="font-weight-bold">Akshay Shelke Panacea</span>
                        </div>
                        <div class="row">
                            <span class="">Today 4:15 PM</span>
                        </div>
                    </div>
                </div>   
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/1005/70/70/">
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <span class="font-weight-bold">Adarsh Shukla</span>
                        </div>
                        <div class="row">
                            <span class="">Today 4:56 PM</span>
                        </div>
                    </div>
                </div> 
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/1065/70/70/">
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <span class="font-weight-bold">Designer</span>
                        </div>
                        <div class="row">
                            <span class="">Today 5:56 PM</span>
                        </div>
                    </div>
                </div>                                                 
            </div>                    
        </div>
        <div id="calls" role="tabpanel"  class="tab-pane fade"><br>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/1065/70/70/">
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <span class="font-weight-bold">Designer</span>
                        </div>
                        <div class="row">
                            <span class="">Today 5:56 PM</span>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                </div>   
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/1068/70/70/">
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <span class="font-weight-bold">Designer</span>
                        </div>
                        <div class="row">
                            <span class="">Today 5:56 PM</span>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                </div> 
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/1065/70/70/">
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <span class="font-weight-bold">Adarsh Shukla</span>
                        </div>
                        <div class="row">
                            <span class="">Yesterday 5:56 PM</span>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                </div>                                                          
            </div>       
        </div>
    </div>
<!-- Tab panes -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="http://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
<script src="script.js"></script>    
</body>
</html>