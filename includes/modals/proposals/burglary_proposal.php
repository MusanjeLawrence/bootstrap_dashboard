
<div id="burglary_proposal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<div style="display: flex; flex-direction: column; align-items: center;">
                                      <img src="assets/img/silver_small.png" alt="network-logo" width="70" height="70" />
                                      <h5 class="modal-title" style="color: blue; margin-top: 10px;">Burglary proposal form</h5>
                                </div>
                                
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>


		






							<div class="modal-body">
								<form method="POST" >
								
								<div style="display: flex; flex-direction: column; align-items: center;">        
									<label class="col-form-label" >Particulars of prosper</label>
                                </div> 

                            
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Individual applicant</option>
									<option>Corporate applicant</option>
									
								</select>
								<label class="focus-label">Applicant type</label>
							</div>
						
									<div class="row">
										<div class="col-sm-6">
												<div class="form-group">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input name="firstname" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Last Name</label>
												<input name="lastname" required class="form-control" type="text">
											</div>
										</div>
										</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Name(s) <span class="text-danger">*</span></label>
												<input name="names" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Contact Person</label>
												<input name="contactperson" required class="form-control" type="text">
											</div>
										</div>
																		
									</div>

										<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Telephone No</label>
												<input name="telno" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Fax No</label>
												<input name="faxno" required class="form-control" type="text">
											</div>
										</div>
										</div>

										<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Email Address</label>
												<input name="email" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">PIN Number</label>
												<input name="pinno" required class="form-control" type="text">
											</div>
										</div>
										</div>
										<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >Period of Insurance</label>
                                </div>
						<div class="row filter-row">
						<div class="col-sm-6">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
						<div class="col-sm-6">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
					</div>
									<div style="display: flex; flex-direction: column; align-items: Center;">        
									<label class="col-form-label" >FINANCIERS INTEREST IF ANY</label>
                                </div> 
								<div class="form-group">
 						 <input type="text" class="form-control form-control-lg" id="exampleTextBox" placeholder="Enter text here">
						</div>
						<div style="display: flex; flex-direction: column; align-items: Center;">        
									<label class="col-form-label" >PHYSICAL ADDRESS AND OCCUPANCY</label>
                                </div>
								<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >	Location of premises:</label>
                                </div> 
							<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Building Name: </label>
												<input name="building" class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Street/Road:</label>
												<input name="streetname"  class="form-control" type="text">
											</div>
										</div>		
							<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Plot No:</label>
												<input name="plot"  class="form-control" type="text">
											</div>
										</div>		
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Town:</label>
												<input name="town"  class="form-control" type="text">
											</div>
										</div>							
									</div>
									<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >What is the nature of construction of the following?</label>
                                </div>
								<div class="row">
									<div class="col-sm-6">
									<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>External walls</option>
									<option>Internal walls</option>
									<option>Roof</option>
									<option>Ceiling</option>
									
								</select>
								<label class="focus-label">Nature of construction</label>
</div>
							</div>
								<div class="col-sm-6">
									<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Concrete wall</option>
									<option>Brick/stone wall</option>
									<option>Meta wall(steel/aluminium)</option>
									<option>Fibre cement wall(panels)</option>
									<option>Retaining wall</option>
<!-- the spaces between the options are to separate each option for each in the first selection and in the same order-->
									<option>Partitioned wall</option>

									<option>Concrete</option>
									<option>Metal</option>
									<option>Wood</option>
									<option>Roofing Tiles</option>
									<option>RoofShingle</option>

									<option>Wood ceiling</option>
									<option>PVC ceiling</option>
									<option>Glass ceiling</option>
									<option>Gypsium ceiling</option>
									<option>Tile ceiling</option>
									<option>Plaster ceiling</option>
									
								</select>
								<label class="focus-label">Select option</label>
</div>
							</div>
</div>

									<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >Are you the sole occupant of the premises?</label>
                                </div>
								<div class="row">
									<div class="col-sm-6">
									<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>YES</option>
									<option>NO</option>
									
								</select>
								<label class="focus-label">Select option</label>
</div>
</div>
	</div>


	<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >If not, what other occupants are there?</label>
                                </div> 
								<div class="form-group">
 						 <input type="text" class="form-control form-control-lg" id="exampleTextBox" placeholder="Enter text here">
						</div>
						<div class="form-group">
  <label for="exampleNumberInput">How long have you occupied the premises?(in days)</label>
  <input type="number" class="form-control" id="exampleNumberInput" placeholder="Enter a number" min="0" step="1">
</div>
<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >Will the premises be left unoccupied at any time?</label>
                                </div>
								<div class="row">
									<div class="col-sm-6">
									<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>YES</option>
									<option>NO</option>
									
								</select>
								<label class="focus-label">Select option</label>
</div>
</div>
	</div>
	<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >If Yes, please explain</label>
                                </div> 
								<div class="form-group">
 						 <input type="text" class="form-control form-control-lg" id="exampleTextBox" placeholder="Enter text here">
						</div>

						<div style="display: flex; flex-direction: column; align-items: Center;">        
									<label class="col-form-label" >SECURITY ARRANGEMENTS</label>
                                </div>
								<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >Who is responsible for the security arrangements?</label>
                                </div>
								<div class="form-group">
 						 <input type="text" class="form-control form-control-lg" id="exampleTextBox" placeholder="Enter the names here">
						</div>
						<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >What security arrangements are in place? (Tick appropriate option/s)</label>
                                </div>
						<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
				<label class="form-check-label" for="flexCheckDefault">
					Own Watchman
				</label>
				</div>
				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
				<label class="form-check-label" for="flexCheckChecked">
					Security Guards Firm
				</label>
				</div>
				
				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
				<label class="form-check-label" for="flexCheckChecked">
					Burglar Alarm
				</label>
				</div>
				
				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
				<label class="form-check-label" for="flexCheckChecked">
					Any other(Please Specify)
				</label>
				</div>
				<div class="form-group">
 						 <input type="text" class="form-control form-control-lg" id="exampleTextBox" placeholder="Specify here">
						</div>
					<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >If you engaged a Security Guard Company, State the name of the firm</label>
                                </div>
								<div class="form-group">
 						 <input type="text" class="form-control form-control-lg" id="exampleTextBox" placeholder="Enter the firm name here">
						</div>
						<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >How have you secured:</label>
                                </div>
						<div class="row">
										<div class="col-sm-6">
												<div class="form-group">
												<label class="col-form-label">Windows? </label>
												<input name="windows" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Show Windows?</label>
												<input name="showWindows" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
												<div class="form-group">
												<label class="col-form-label">Front Doors? </label>
												<input name="frontDoors" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Rear Entrance?</label>
												<input name="rearEntrance" required class="form-control" type="text">
											</div>
</div>
											<div class="col-sm-6">
												<div class="form-group">
												<label class="col-form-label">Sky Lights? </label>
												<input name="skyLights" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Trap Doors?</label>
												<input name="trapDoors" required class="form-control" type="text">
											</div>
</div>
											<div class="col-sm-6">
												<div class="form-group">
												<label class="col-form-label">Others? Please Specify </label>
												<input name="others" required class="form-control" type="text">
											</div>
										</div>
</div>
						<div style="display: flex; flex-direction: column; align-items: Center;">        
									<label class="col-form-label" >INSURANCE/CLAIMS HISTORY</label>
                                </div>
								<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >Are you now or have you been Insured for this type of Insurance?</label>
                                </div>
								<div class="row">
									<div class="col-sm-6">
									<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>YES</option>
									<option>NO</option>
									
								</select>
								<label class="focus-label">Select option</label>
</div>
</div>
	</div>
	<div style="display: flex; flex-direction: column; align-items: left;">
									<label class="col-form-label" >If yes, please give:</label>
                                </div>
						<div class="row">
										<div class="col-sm-6">
												<div class="form-group">
												<label class="col-form-label">Name of Insurer: </label>
												<input name="windows" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Policy Number:</label>
												<input name="showWindows" required class="form-control" type="text">
											</div>
										</div>
</div>
										<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >Have you ever suffered a loss by theft?</label>
                                </div>
								<div class="row">
									<div class="col-sm-6">
									<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>YES</option>
									<option>NO</option>
									
								</select>
								<label class="focus-label">Select option</label>
</div>
</div>
	</div>
	<div style="display: flex; flex-direction: column; align-items: left;">
									<label class="col-form-label" >If yes, state:</label>
                                </div>
						<div class="row">
										<div class="col-sm-6">
												<div class="form-group">
												<label class="col-form-label">Date of Loss: </label>
												<input name="lossdate" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Extent of Loss:</label>
												<input name="extent" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">What precautions have been taken to prevent another loss?</label>
												<input name="precautions" required class="form-control" type="text">
											</div>
										</div>
</div>

							<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >Have you taken out Fire Insurance cover for the proposed premises? (YES / NO)</label>
									<label class="col-form-label" >(It is mandatory that Burglary and Fire policies run concurrently)</label>
                              </div>

								<div class="row">
									<div class="col-sm-6">
									<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>YES</option>
									<option>NO</option>
									
								</select>
								<label class="focus-label">Select option</label>
</div>
</div>
	</div>
						<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >Do you require the following extensions to your Policy?</label>
								                              </div>
															  <div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown1">Hold up Cover</label>
									<select class="form-select select floating" id="exampleDropdown6">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown2">Riot and Strike</label>
									<select class="form-select select floating" id="exampleDropdown7">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								</div>
										
						<div style="display: flex; flex-direction: column; align-items: left;">        
			<label class="col-form-label" >Has any Insurance Company ever:</label>
						 </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown1">Cancelled your Policy?</label>
									<select class="form-select select floating" id="exampleDropdown1">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown2">Declined to insure you?</label>
									<select class="form-select select floating" id="exampleDropdown2">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown1">Imposed any special terms?</label>
									<select class="form-select select floating" id="exampleDropdown3">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown2">Repudiated any claims?</label>
									<select class="form-select select floating" id="exampleDropdown4">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown1">Declined to renew your policy?</label>
									<select class="form-select select floating" id="exampleDropdown5">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								</div>
								<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >If the answer for any of the above reasons is 'YES', please give details.</label>
                                </div>
								<div class="form-group">
 						 <input type="text" class="form-control form-control-lg" id="exampleTextBox" placeholder="Enter details here">
						</div>

						<div style="display: flex; flex-direction: column; align-items: center;">        
									<label class="col-form-label" >BUSINESS RECORDS</label>
                                </div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown1">Do you keep proper Books of Accounts records?</label>
									<select class="form-select select floating" id="exampleDropdown9">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown2">Can the amount of loss be ascertained from them?</label>
									<select class="form-select select floating" id="exampleDropdown10">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label for="exampleDropdown1">Are the Stock books and Sales books updated regularly</label>
									<select class="form-select select floating" id="exampleDropdown11">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									</div>
								</div>
								
						</div>
						<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >When was the last physical Stock taking done?</label>
                                </div>
							<div class="row filter-row">
						<div class="col-sm-6">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">Select date</label>
							</div></div></div>
							<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >If you don't maintain stock records, describe how you would verify the amounts of goods stolen in
case of a burglary</label>
                                </div>
								<div class="form-group">
 						 <input type="text" class="form-control form-control-lg" id="exampleTextBox" placeholder="Enter the names here">
						</div>

						<div style="display: flex; flex-direction: column; align-items: center;">        
									<label class="col-form-label" >SCHEDULE - PARTICULARS OF PROPERTY TO BE INSURED</label>
									</div>
									<div style="display: flex; flex-direction: column; align-items: left;">        
									<label class="col-form-label" >NB - If property is contained in two or more buildings the sum to be Insured in each building must
be specified.</label>
									</div>
									<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Desription</th>
        <th>Sum Insured</th>
      </tr>
    </thead>
    <tbody id="table-body">
      <tr>
        <td contenteditable="true"></td>
        <td contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td contenteditable="true"></td>
      </tr>
	  <tr>
        <td contenteditable="true"></td>
        <td contenteditable="true"></td>
      </tr>
	  <tr>
        <td contenteditable="true"></td>
        <td contenteditable="true"></td>
      </tr>
	  <tr>
        <td contenteditable="true"></td>
        <td contenteditable="true"></td>
      </tr>
	  <tr>
        <td contenteditable="true"></td>
        <td contenteditable="true"></td>
      </tr>
    </tbody>
  </table>
</div>




									<div class="submit-section">
										<button type="submit" name="add_employee" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>