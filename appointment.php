<?php include('_header.php'); ?>




			<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Appointment</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Appointment</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	




			<!-- APPOINTMENT PAGE
			============================================= -->
			<!-- <div id="appointment-page" class="wide-60 appointment-page-section division">
				<div class="container">
				 	<div class="row">


				 		<div class="col-lg-8">
				 			<div class="txt-block pr-30">

								<h3 class="h3-md steelblue-color">Book an Appointment</h3>
								

								<div id="appointment-form-holder" class="text-center">
									<form name="appointmentform" class="row appointment-form">

						                <div id="input-department" class="col-md-12 input-department">
						                    <select id="inlineFormCustomSelect1" name="department" class="custom-select department" required>
						                        <option value="">Select Department</option>  
						                      	<option>Pediatrics Department</option>
						                      	<option>Neurology Department</option>
						                      	<option>Haematology Department</option>
						                      	<option>X-Ray Diagnostic Department</option>
						                      	<option>Cardiology Department</option>
						                      	<option>MRI Department</option>
						                      	<option>Laboratory Services</option>
						                      	<option>Other</option>
						                    </select>
						                </div>

						               
										<div id="input-doctor" class="col-md-12 input-doctor">
					                    <select id="inlineFormCustomSelect2" name="doctor" class="custom-select doctor" required>
					                        <option value="">Select Doctor</option>  
					                      	<option>Dr. Rashida Khatun</option>
					                      	<option>Dr. Silveya Rahman Tania</option>
					                      	<option>Dr. Md. Inzamam-Ul-Haque (Pappu)</option>
					                      	<option>Dr. Md. Sabbir Karim</option>
					                      	<option>Dr. Md. Unush Ali</option>
					                      	<option>Dr. Adir Chandro Sarkar</option>
											<option>Dr. Taslima Tuly</option>
											<option>Dr. James Robert Gomez</option>
											<option>Dr. Fatema Tuz Zannat</option>
											<option>Dr. Mustakum Billah (Jony)</option>
					                    </select>
					                </div>

						                <div id="input-patient" class="col-md-12 input-patient">
						                    <select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
						                        <option value="">Have You Visited Us Before?*</option>
												<option>New Patient</option>
												<option>Returning Patient</option>
												<option>Other</option>
						                    </select>
						                </div>

						                <div id="input-date" class="col-lg-12">
						                	<input id="datetimepicker" type="text" name="date" class="form-control date" placeholder="Appointment Date" required> 
						                </div>
				                                            
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
						                </div>
						                        
						                <div id="input-email" class="col-lg-12">
						                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
						                </div>

						                <div id="input-phone" class="col-lg-12">
						                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
						                </div>						                          
						                        
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..."></textarea>
						                </div> 
						                                            
						                <div class="col-lg-12 form-btn">  
						                	<button type="submit" class="btn btn-blue blue-hover submit">Request an Appointment</button> 
						                </div>
						                                                              
						                <div class="col-lg-12 appointment-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>  
					                                              
					                </form> 
								</div>									
				 			</div>
				 		</div>	

						<aside id="sidebar" class="col-lg-4">


							<div id="txt-widget" class="sidebar-div mb-50">
										
								<h5 class="h5-sm steelblue-color">The Heart Of Clinic</h5>

								<div class="txt-widget-unit mb-15 clearfix d-flex align-items-center">
								
									<div class="txt-widget-avatar">
										<img src="images/head-of-clinic.jpg" alt="testimonial-avatar">
									</div>

									<div class="txt-widget-data">
										<h5 class="h5-md steelblue-color">Dr. Rashida Khatun</h5>	
										<span>MBBS, BCS(Health), M.C.P.S, D.G.O(Gynae & Obs)</span>	
										<p class="blue-color">1-800-1234-567</p>	
									</div>
								</div>		
								<p class="p-sm">An enim nullam tempor sapien at gravida donec pretium ipsum porta justo
								   integer at odiovelna vitae auctor integer congue magna purus
								</p>
								<a href="about.html" class="btn btn-blue blue-hover">Learn More</a>
																		
							</div>	

								
							<div class="sidebar-table blue-table sidebar-div mb-50">
								<h5 class="h5-md">Working Time</h5>
								<p class="p-sm">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at
								   tempus feugiat dolor lacinia cursus nulla vitae massa
								</p>
								<table class="table">
									<tbody>
									    <tr>
									      	<td>Mon – Wed</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 7:00 PM</td>
									    </tr>
									    <tr>
									      	<td>Thursday</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 6:30 PM</td>
									    </tr>
									     <tr>
									      	<td>Friday</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 6:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Sun - Sun</td>
									      	<td>-</td>
									      	<td class="text-right">CLOSED</td>
									   	 </tr>
									  </tbody>
								</table>
								<h5 class="h5-xs">Need a personal health plan?</h5>
								<p class="p-sm">Porta semper lacus cursus, and feugiat primis ultrice ligula at risus auctor</p>
							</div>	
						</aside> 
					</div>	
				</div>	 
			</div>	 -->

			

		<!-- END APPOINTMENT PAGE -->
		<!-- Appointment-
			============================================= -->	
			<section id="hero-4" class="bg-fixed hero-section division">
				<div class="container">						
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-xl-7">
							<div class="hero-txt mb-40">
								<h5 class="blue-color">Your Good Health is Our Responsibility</h5>
								<h2 class="steelblue-color">Get your appointment through online and remain safe at your home. Because your safety is our first priority.</h2>
								<!-- <h2 class="steelblue-color">World class medical treatment for your family</h2> -->

								<!-- <div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									
								</div> -->
									
								<!-- <div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									
								</div> -->
									
								<!-- <div class="box-list">	
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
								</div> -->

							</div>
						</div>	


						<div class="col-lg-5 col-xl-5">
							<div id="hero-section-form" class="text-center mb-40">
								<form name="heroForm" class="row hero-form bg-blue">

                                    <div class="col-md-12 white-color">
                                        <h4 class="h4-xs">Make an Appointment</h4>	
                                    </div> 

					                <div id="input-name" class="col-lg-12">
					                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
					                </div>
					                        
					                <div id="input-email" class="col-lg-12">
					                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
					                </div>

					                <div id="input-phone" class="col-lg-12">
					                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
					                </div>	

					                <div id="input-date" class="col-lg-12">
					                	<input id="datetimepicker" type="text" name="date" class="form-control date" placeholder="Appointment Date" required> 
					                </div>

					                <div id="input-doctor" class="col-md-12 input-doctor">
					                    <select id="inlineFormCustomSelect2" name="doctor" class="custom-select doctor" required>
					                        <option value="">Select Doctor</option>  
					                      	<option>Dr. Rashida Khatun</option>
					                      	<option>Dr. Silveya Rahman Tania</option>
					                      	<option>Dr. Md. Inzamam-Ul-Haque (Pappu)</option>
					                      	<option>Dr. Md. Sabbir Karim</option>
					                      	<option>Dr. Md. Unush Ali</option>
					                      	<option>Dr. Adir Chandro Sarkar</option>
											<option>Dr. Taslima Tuly</option>
											<option>Dr. James Robert Gomez</option>
											<option>Dr. Fatema Tuz Zannat</option>
											<option>Dr. Mustakum Billah (Jony)</option>
					                    </select>
					                </div>
						                                            
					                <div class="col-lg-12 form-btn">  
					                	<button type="submit" class="btn btn-orange tra-white-hover submit">Send Your Message</button> 
					                </div>
					                                                              
					                <div class="col-lg-12 hero-form-msg text-center">
					                	<div class="sending-msg"><span class="loading"></span></div>
					                </div>  
					            </form>
							</div>
						</div>	
					</div>    
				</div>     
			</section>	
			<!-- END Appointment -->

			<?php include('_footer.php'); ?>