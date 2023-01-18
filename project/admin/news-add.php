<?php
include 'header.php';
?>

				<ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dashboard</h4> <p>Welcome to liner admin panel</p></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 col-lg-12  mt-3">
                        <div class="card">
                            <div class="card-header">                               
                                <h6 class="card-title">Form Inputs</h6>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form action='news-save.php' method="post">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Title</label>
                                                        <input type="Text" name='title' required class="form-control rounded" id="inputEmail4" placeholder="News title">
                                                    </div>
													<div class="form-group col-md-6">
                                                        <label for="inputEmail4">News Category</label>
                                                        <select required class="form-control rounded" name='cat_id'>
														<?php
											
															$q="select * from categories";
															 $res=mysqli_query($conn,$q);
															
															 while($cat=mysqli_fetch_array($res))
															 {
																echo "<option value='{$cat[0]}'>{$cat['name']}</option>";
															 }
															?>
														</select>
                                                    </div>
													
													
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Desc</label>
                                                        <input type="text" class="form-control" name="desc">
                                                    </div>
                                               
													<div class="form-group col-md-6">
														<label for="inputAddress">date</label>
														<input type="date" class="form-control" name='date'>
													</div>
													<div class="form-group col-md-6">
														<label for="inputAddress2">Type</label>
														<input type="text" class="form-control" name='type'>
													</div>
                                                
                                               
													<div class="form-group  col-md-6">
														<label for="inputAddress2">city</label>
														<input type="text" class="form-control" name='city'>
													</div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputCity">Reporter</label>
                                                        <input type="text" class="form-control" name='reporter'>
                                                    </div>
                                                    
                                                </div>
                                                

                                                <button type="submit" class="btn btn-primary">Add News</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>   

                    
                </div>
                <!-- END: Card DATA-->                 
            </div>
        </main>
        <!-- END: Content-->
       

<?php

include 'footer.php';
?>