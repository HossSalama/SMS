<style>
	.portial-icon {
	    font-size: 5rem;
	    height: 8.5rem;
	    width: 8.5rem;
	    align-items: center;
	    justify-content: center;
	    display: flex;
	    border: 4px solid #fffafadb;
	    color: #ffffffb8;
	}
	.portal-link{
		color:unset;
	}
	.portal-link:hover{
		color:unset;
	}
	.widget-user .widget-user-image {
		position: absolute;
		top: 50px;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		margin: unset;
		left: unset;
	}
	.portal-link .card:hover {
	    color: unset;
	    position: relative;
	    top: -3px;
	    box-shadow: 0 9px #0201010d;
	}
	/* start cover */
	.cover{
    height: 700px;
    background-image: url(uploads/cover.jpg.webp);
    background-size: cover;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: visible;
    z-index: 1;
	margin: 22px;
   }
   .cover::before {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    inset: 0;
    background-color: black;
    opacity: .4;
    z-index: -1;
   }
   .cover .parent {
    transition: all 2s;
    animation-name: test;
    animation-duration: 1s;
    animation-iteration-count: 1;
   }
   .cover .text {
    color: white;
    text-align: center;
    margin: 10px;
 }
 .cover .text h1 {
    font-size: 40px;
    margin: 10px;
 }
 .cover .text p {
    color: rgba(128, 128, 128, 0.932);
    font-size: 22px;
    padding: 10px;
 }
 .cover .box {
    background-color: rgba(255, 255, 255, 0.3);
    padding: 10px;
    margin: 0 10px;
    text-align: center;
 }
 .cover .box .input {
    border: 2px solid transparent;
    border-radius: 5%;
    padding: 15px;
    margin: 0 7px;
 }
 .cover .parent .box .btn:hover {
    background-color: #38c0ae;
}
 @keyframes test {
    0%{visibility: hidden;}
   10%{transform: translatey(150px);}
   100%{visibility: visible;} 
}
/* end cover */
.about{
	margin: 22px;
}

</style>
<section class="cover">
            <div class="parent">
                <div class="text">
                <h1>Largest E-Learning System In The World</h1>
                
                </div>
                <div class="box">
                    <input type="text" placeholder="What are you looking for?" class="input">
                    <input type="text" placeholder="Location" class="input">
                    <select class="input" name="" id="">
                        <option value="">All Category</option>
                        <option value="">IT</option>
                        <option value="">CS</option>
                        <option value="">IS</option>
                        <option value="">Web Development</option>
                        <option value="">Network</option>
                        <option value="">Other</option>
                    </select>
                    <button class="btn">Search</button>
                </div>
            </div>
        </section>
		<!-- <section>
		<div class="col-lg-12">
			<h1 class="text-center">Welcome</h1>
			<hr class="border-info">
			<?php
			if(is_file(base_app.'welcome.html'))
			 include 'welcome.html' ;
			else{
				echo "Edit the About Content in admin panel.";
			}
			 ?>
		</div>
	</section> -->
		<!-- start About -->
        <section class="about">
            <div class="container-xxl py-5">
                <div class="container">
                  <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                      <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="uploads/more-services-4.jpg" alt="" style="object-fit: cover">
                        <div class="position-absolute top-0 start-0 bg-white pr-3 pb-3" style="width: 200px; height: 200px">
                          <div class="d-flex flex-column justify-content-center text-center bg-primar h-100 p-3">
                            <h1 class="text-white">25</h1>
                            <h2 class="text-white">Years</h2>
                            <h5 class="text-white mb-0">Experience</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                      <div class="h-100">
                        <div class="border-start1 pl-4 mb-5">
                          <h6 class="text-body text-uppercase mb-2">About Us</h6>
                          <h1 class="display-6 mb-0">
						  A School Management  &amp; System
                          </h1>
                        </div>
                        <p>
						A school management system is a software solution that organizes and automates the tasks and operations of educational institutions12. It manages student data, such as grades, fees, attendance, medical history, etc.23. It also facilitates academic and nonacademic functions, such as online application, exam management, library administration, faculty management, payroll management, etc.24. It provides reports and analytics for decision-making and reduces errors and workload124. It is the information hub of any education provider
                        </p>
                        <div class="border-top mt-4 pt-4">
                          <div class="row g-4">
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                              <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                              <h6 class="mb-0">Ontime at services</h6>
                            </div>
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                              <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                              <h6 class="mb-0">24/7 hours services</h6>
                            </div>
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                              <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                              <h6 class="mb-0">Verified professionals</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <!-- end About -->

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-4">
				<a href="<?php echo base_url.'faculty' ?>" class="portal-link">
						<div class="card card-widget widget-user">
			              <!-- Add the bg color to the header using any of the bg-* classes -->
			              <div class="widget-user-header bg-info">
			                <h3 class="widget-user-username">Faculty</h3>
			              </div>
			              <div class="widget-user-image">
			                <span class="img-circle elevation-2 fa fa-user-tie portial-icon"></span>
			              </div>
			              <div class="card-footer bg-info">
			                <div class="container">
			                	<p class="text-center text-white-50"><small><i>Click here to Establishment Side</i></small></p>
			                </div>
			              </div>
			            </div>
					</a>
					
				</div>
				<div class="col-md-4">
					
					<a href="<?php echo base_url.'admin' ?>" class="portal-link">
						<div class="card card-widget widget-user">
			              <!-- Add the bg color to the header using any of the bg-* classes -->
			              <div class="widget-user-header bg-dark">
			                <h3 class="widget-user-username">Admin</h3>
			              </div>
			              <div class="widget-user-image">
			                <span class="img-circle elevation-2 fa fa-user-cog portial-icon"></span>
			              </div>
			              <div class="card-footer bg-dark">
			                <div class="container">
			                	<p class="text-center text-white-50"><small><i>Click here to Admin Side</i></small></p>
			                </div>
			              </div>
			            </div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo base_url.'student' ?>" class="portal-link">
						<div class="card card-widget widget-user">
			              <!-- Add the bg color to the header using any of the bg-* classes -->
			              <div class="widget-user-header bg-warning border-info">
			                <h3 class="widget-user-username">Student</h3>
			              </div>
			              <div class="widget-user-image">
			                <span class="img-circle elevation-2 fa fa-users portial-icon"></span>
			              </div>
			              <div class="card-footer bg-warning border-info">
			                <div class="container">
			                	<p class="text-center text-dark-50"><small><i>Click here to Signin or Register</i></small></p>
			                </div>
			              </div>
			            </div>
					</a>
				</div>
			</div>
		
		<div>
	</div>
	
	

	
</div>
