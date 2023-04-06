<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/urbanxchange.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE DINING ROOM </h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/urbanxchange.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE ULTIMATE PRIVATE DINING EXPERIENCE
                                                
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae saepe, repudiandae quaerat explicabo cumque omnis nostrum ex quis commodi odio ad vel praesentium molestias, impedit iste dolor harum. Veniam, vitae.

                                                </p>

                                            
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Royal Private Dining Room</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Gulshan, Dhaka
                            </p>
                            <p class="definition"><!--content body-->
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, in itaque corrupti voluptatum non mollitia perferendis illum, ut labore repudiandae praesentium placeat repellat! Totam illum quos, sapiente reiciendis omnis alias odio voluptates fuga veniam voluptatem eaque ea reprehenderit. Quam quaerat repudiandae labore architecto quidem fugiat eius quas similique in assumenda?
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/ananasbar.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Bar</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/ananasbar.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>CORNER OF PARIS </h5><!--content title-->
                                                
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt mollitia voluptate tenetur eos voluptatibus quae labore vero totam sed error rem, omnis fugiat maiores, porro quod nostrum ullam! Commodi, molestiae.

                                                <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quis distinctio tempora facere fuga ut voluptate similique. Nihil ab fuga eveniet fugiat, vero nulla mollitia error similique, amet voluptatibus corrupti!

                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Crown Bar </h1><!--location title-->
                            <p class="location">Banani, Dhaka</p><!--location secondary content-->
                            <p class="definition">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nesciunt blanditiis illum ab distinctio repellendus illo soluta explicabo nulla optio, quod cupiditate laudantium qui numquam.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/argyle.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Heritage</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/argyle.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>FIVE BARS OVER TWO LEVELS</h5><!--content title-->
                                                
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore perferendis aspernatur debitis rem delectus, cupiditate similique voluptas consequuntur corporis. Sapiente maxime harum esse voluptatem asperiores beatae iure distinctio culpa, animi in officia labore possimus tenetur.
                                                </p>

                                                <p>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci dolore illo eaque odit ducimus nam molestias architecto animi, dolor enim ratione amet fugiat. Expedita, hic. Aliquid veritatis fugit sit deserunt!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">The Heritage</h1>
                            <p class="location">Old Dhaka</p>
                            <p class="definition">There’s no question that Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia deserunt iste non enim voluptatibus blanditiis, aperiam sint harum, veritatis eius sit ut illo nisi doloribus nemo modi ab corrupti natus ex tempore, praesentium impedit quae.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/munich.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Love in The Air</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/munich.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Romantic Dinner</h5>
                                                
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic molestiae at, id maiores, saepe natus accusamus voluptatem nobis omnis amet non fugit, explicabo recusandae voluptatibus magnam odio vel? Minus, fugiat!
                                                </p>
                                                
                                                <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos explicabo iusto dolor molestias. Blanditiis quod aperiam iusto quae at ex natus culpa impedit. Officia, ex reprehenderit omnis non in soluta fugiat quisquam excepturi itaque recusandae?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Romantic Love</h1>
                            <p class="location">Dhanmondi, DhAKA</p>
                            <p class="definition">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolorem laborum consectetur eos iure, non adipisci sit enim minima tempora ab qui quaerat expedita quam aut ullam ducimus! Possimus.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
