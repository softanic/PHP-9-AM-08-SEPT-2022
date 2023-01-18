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
                            <div class="card-header justify-content-between align-items-center">                               
                                <h4 class="card-title">All News</h4>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table layout-primary bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
												<th scope="col">cat</th>
                                                <th scope="col">date</th>
                                                <th scope="col">city</th>
												<th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											
											//$q="select * from news";
											$q="SELECT n.*,c.* FROM `news` n left join categories c on n.cat_id=c.cat_id";

											 $res=mysqli_query($conn,$q);
											 $c=1;
											 while($news=mysqli_fetch_array($res))
											 {
												/* $cat_id=$news['cat_id'];
												 $q2="select * from categories where cat_id=$cat_id";
												 $res2=mysqli_query($conn,$q2);
												 $cat=mysqli_fetch_array($res2);
												 */
												 
												 
											?>
                                            <tr>
                                                <th scope="row"><?php echo $c++; ?></th>
                                                <td><?php echo $news['title']; ?></td>
												
												<td><?php echo $news['name']; ?></td>
												
                                                <td><?php echo $news['date']; ?></td>
                                                <td><?php echo $news['city']; ?></td>
												<td><a href="news-update.php?news_id=<?php echo $news['news_id']; ?>">Update</a></td>
                                            </tr>
											
											<?php
											
											 }
											?>
                                            
                                        </tbody>
                                    </table> 
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