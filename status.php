<?php 
include('assets/layouts/header.php');
?>

<!--
<div class="header-content" id="contact-crsl">
    <div class="container-fluid">
        <div class="main-aligned">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="head-left-col">
                        <div class="col-details">
                            <h4>Providing Telecom systems &amp; solutions</h4>
                            <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h6>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!-- === CONTENT STARTS === -->

<div id="main">
    <!-- === SECTION ONE STARTS === -->

    <section id="contact-csr">
        <div class="additional-info">
            <div class="container">
                <!-- === ACCORDIAN PANEL STARTS === -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-example">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">List General</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, molestias laudantium maiores eius facere quam id tempore velit unde voluptas natus nemo pariatur omnis dolorum suscipit, cupiditate aut ratione in?</p>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quis blanditiis ducimus iste, perferendis esse perspiciatis debitis, alias fugit consequatur dicta a fuga commodi optio tenetur, maxime eligendi? Nobis, modi.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, molestias laudantium maiores eius facere quam id tempore velit unde voluptas natus nemo pariatur omnis dolorum suscipit, cupiditate aut ratione in?</p>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quis blanditiis ducimus iste, perferendis esse perspiciatis debitis, alias fugit consequatur dicta a fuga commodi optio tenetur, maxime eligendi? Nobis, modi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Services</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, molestias laudantium maiores eius facere quam id tempore velit unde voluptas natus nemo pariatur omnis dolorum suscipit, cupiditate aut ratione in?</p>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quis blanditiis ducimus iste, perferendis esse perspiciatis debitis, alias fugit consequatur dicta a fuga commodi optio tenetur, maxime eligendi? Nobis, modi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Areas</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, molestias laudantium maiores eius facere quam id tempore velit unde voluptas natus nemo pariatur omnis dolorum suscipit, cupiditate aut ratione in?</p>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quis blanditiis ducimus iste, perferendis esse perspiciatis debitis, alias fugit consequatur dicta a fuga commodi optio tenetur, maxime eligendi? Nobis, modi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === ACCORDIAN PANEL ENDS === -->
            </div>
        </div>
    </section>

    <section id="modal-view">
        <div class="container">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-default btn-lg center-block" data-toggle="modal" data-target="#myModal">Report an issue</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Report an issue</h5>
                        </div>
                        <div class="modal-body">
                            <div class="status-form">
                                <form action="" method="post" class="form-horizontal">


                                    <div class="form-group">
                                        <label for="uname">Name: </label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="uname" id="uname" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Civic Address: </label>
                                        <input type="text" class="form-control" placeholder="Enter Civic sAddress" name="address" id="address" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone: </label>
                                        <input type="tel" class="form-control" placeholder="Enter phone" name="phone" id="phone" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="issue">CNIC: </label>
                                        <textarea name="issue" id="issue" class="form-control" placeholder="Enter your issue"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-default">Report</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
</div>
<!-- === CONTENT ENDS === -->
<?php 
include('assets/layouts/footer.php');
?>
