<?php include 'header.php';?>



<div class="pt-100">
    <div class="container  justify-content-center ">
        <ol class="breadcrumb bg-transparent w-100 pt-20 li_animate mb-3 mb-md-1">
            <li class="breadcrumb-item"><a href="index.php"><i class="lni lni-home"></i></a></li>
            <!-- <li class="breadcrumb-item"><a href="#">App</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Make Payment</li>
        </ol>

        <div class="row">

            <div class="col-md-12 pb-20">

                <span>Make Payment</span>
                <div class="card">

                    <div class="accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-header p-0" id="headingTwo">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <span>Paypal</span>
                                            <img src="https://i.imgur.com/7kQEsHU.png" width="30">

                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <input type="text" class="form-control" placeholder="Paypal email">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0">
                                <h2 class="mb-0">
                                    <button class="btn btn-light btn-block text-left p-3 rounded-0"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <span>Credit card</span>
                                            <div class="icons">
                                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                                                <img src="https://i.imgur.com/35tC99g.png" width="30">
                                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                            </div>

                                        </div>
                                    </button>
                                </h2>
                            </div>


                        </div>

                    </div>

                </div>
                <div class="card">

                    <div class="card">
                        <div class="card-header p-0">
                            <h2 class="mb-0">
                                <button class="btn btn-light btn-block text-left p-3 rounded-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Order Summary</span>

                                    </div>
                                </button>
                            </h2>
                            <h2 class="mb-0">
                                <button class="btn btn-light btn-block  text-left p-3 rounded-0 ">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Sub Total :</span>
                                        <div class="icons">
                                            <p>KWD 10.00</p>

                                        </div>

                                    </div>
                                </button>
                            </h2>
                            <h2 class="mb-0">
                                <button class="btn btn-light btn-block  text-left p-3 rounded-0 ">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Total :</span>
                                        <div class="icons">
                                            <p>KWD 10.00</p>

                                        </div>

                                    </div>
                                </button>
                            </h2>

                        </div>


                    </div>

                </div>
                <div class="pt-20 pb-20 float-right">
                    <div class="row">
                        <div class="col-md-12">

                            <a href="contact.html" class="custom-button2">Back To Cart</a>
                            <a href="contact.html" class="custom-button1">PAY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>