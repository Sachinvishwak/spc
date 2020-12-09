                          @extends('admin.layouts.app')

                          @section('content')



                          <div id="our-page-wrapper">
                            <div id="sidebar" style="width: 475px;height: 1500px;" class="assets-sidebar">
                              <div class="sidebar-menu-part">

                                  <h3 class="title">Equipment Details</h3>
                                  <div class="row">
                                  	<img style="width:230px;margin-left: 5px; " src="https://cdn.pixabay.com/photo/2020/04/08/15/57/marine-5017885_1280.jpg"><hr>
	                                <table style="margin-left: -22px;">
                                    <tr >
                                    <th style="border: none;"> Equipment Name  </th>
                                    <th style="border: none;"> Propeller</th>
                                    </tr>
                                    <tr style="border: none;">
                                    <th style="border: none;">Manufacturer </th>
                                    <th style="border: none;"> Berg Propulsion </th>
                                    </tr>


                                    <tr style="border: none;">
                                    <th style="border: none;">Model Number </th>
                                    <th style="border: none;"> DL380  C6 </th>
                                    </tr>
                                    <tr style="border: none;">
                                    <th style="border: none;">Serial Number </th>
                                    <th style="border: none;">0000001 </th>
                                    </tr>

                                    <tr style="border: none;">
                                    <th style="border: none;">Installed on </th>
                                    <th style="border: none;">03 September 2020 </th>
                                    </tr>
                                </table>


                                  </div>

										<style>
										table {
										  font-family: arial, sans-serif;
										  border-collapse: collapse;
										  width: 100%;
										}

										td, th {
										  border: 1px solid #dddddd;
										  text-align: left;
										  padding: 8px;
										}

										tr:nth-child(even) {
										  /*background-color: #dddddd;*/
										}
										</style>
										<hr>
										<div class="row">
										<h3 style="color: black;">Alerts</h3>	
											<div class="row">
											<div class="col-md-4">
												<select  ><option>select item </option></select>
											</div>

											<div class="col-md-3">
												<input  style="margin-left: -43px"type="date" name="">
											</div>

											
											<div class="col-md-1">
												<p>to</p>
											</div>
											
											<div class="col-md-3">

												<input style="margin-left: -14px" type="date" name="">
										  
											</div>
										</div>	
										<table>
										  <tr>
										    <th>Date Created</th>
										    <th>Issue Summary</th>
										    <th>Severity</th>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Blade Damage due to submerged object</td>
										    <td><button type="button" class="btn btn-danger">Severe </button></td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Surface cracks formation</td>
										    <td><button type="button" class="btn btn-danger">Severe </button></td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Roland Mendel</td>
										    <td><button type="button" class="btn btn-danger">Severe   </button></td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Shaft Misalignment</td>
										    <td><button type="button" class="btn btn-danger">Severe  </button></td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Blade Errosion</td>
										    <td><button type="button" class="btn btn-warning">Moderate</button></td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Surface cracks formation</td>
										    <td><button type="button" class="btn btn-warning">Moderate</button></td>
										  </tr>
										</table>
										</div>

										<hr>
										<div class="row">

											
												<h3 style="color: black;">Maintenance Records</h3>	
											
											<div class="row">
											<div class="col-md-4">
												
											</div>

											<div class="col-md-3">
												<input  style="margin-left: -100px"type="date" name="">
											</div>

											
											<div class="col-md-1">
												<p>to</p>
											</div>
											
											<div class="col-md-3">

												<input style="margin-left: -14px" type="date" name="">
										  
											</div>
										</div>	
										<table style="margin-left: -14px;">
										  
										  <tr>
										    <th>Date Scheduled</th>
										    <th>Maintenance Details</th>
										    <th>Assigned By</th>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Blade Replacement</td>
										    <td>Admin</td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Blade Repair</td>
										    <td>Admin</td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Blade Repair</td>
										    <td>Admin</td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Blade Repair</td>
										    <td>Admin</td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Blade Repair</td>
										    <td>Admin</td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Blade Repair</td>
										    <td>Admin</td>
										  </tr>
										</table>
										</div>
                                
                                 
                                 
                              </div>
                            </div>


                            <div id="all-content" class="page-content-body">
                              <div class="insight_content">
                                  



                                    
                                    <style>
                                    h4,h5 {
                          display: inline;
                          color:black !important;
                          margin-left:10px;
                          margin-right:5px;
                          }
                          /* .h4calss-inernal
                          {
                          color:black;
                          } */
                          .bnt-css-addmy
                          {
                          margin-left: 45px;
                          color: #fff;
                          background-color: #dc6d42;
                          /* border-color: #7460ee; */
                          border-radius: 20px;
                          border-color:#dc6d42;
                          }
                          .img-set-wisth
                          {
                          width:200px;
                          }
                          .add-box-colume
                          {

                          }
                          .set-margincolutn
                          {
                          margin-bottom:10px;
                          padding:5px;
                          border: 1px solid #eaeadf;
                          }
                          th {
                          color: #131E84;
                          border: #131E84 solid 1px;
                          padding-left: 31px;
                          padding-right: 46px;
                          /* padding: 7px; */
                          text-align: inherit;
                          }
                          .box-minimun-mange {
                          border: solid 1px black;
                          text-align: left;
                          color: #131E84;
                          padding-left: 20px;
                          width: 200px;
                          height: 52px;
                          margin-top:10px;
                          }
                          .maing-fileter {
                          border: 1px solid;
                          padding: 16px;
                          margin-top: 22px;
                          }
                          .manage-isssu-detial {
                          margin: 10px;
                          display: -webkit-box;
                          font-size: 15px;
                          color: #131E84;
                          font-weight: 600;
                          }

                                    </style>

                         <div style="margin-left: 147px;width: 1075px;margin-top: -1519px;" class="page-inner-box">


                                <!-- Insights_Propellor_Predictive Analysis -->
                          <div class="row">
                          <div class="col-md-6">

                          <h5>Live Data Chart</h5>
                          <h5>/ Predictive Analysis</h5>
                          <h5>    / Summary</h5>
                          </div>
                          <div class="col-md-6">
                          </div>
                          <br><br><br>
                          <div class="col-md-6">
                          <h4 style="color:#131E84 !important;">Recommended Maintenance</h4>
                          <p>Select a date or click on chart to view information</P>
                          <select style="padding-right:40px;"><option>15 oct 2020</option></select>
                          </div>
                         

                          <div class="row">

                         
                          
                       
                          <div class="col-md-2">
                          <div style="height: 62px;"  class="box-minimun-mange">
                          <b>Likelihood of Failure</b>
                          <p style="color:orange;">85% Very High</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div  style="height: 62px;" class="box-minimun-mange">
                          <b>Likely Root Cause for Failure</b>
                          <p style="color:orange;">Blade Errosion</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div style="height: 62px;" class="box-minimun-mange">
                          <b>Estimated Downtime</b>
                          <p style="color:orange;">6 Hours</p>
                          </div>
                          </div>

                          <div class="col-md-2">
                          <div style="height: 62px;"class="box-minimun-mange">
                         
                          <b>Maintenance Cost</b>
                          <p style="color:orange;">S$5,000</p>
                          </div>
                          </div>

                          <div class="col-md-2">
                          <div style="height: 62px;" class="box-minimun-mange">
                          <b>Remaining Life</b>
                          <p style="color:orange;">1 Month 30 Days</p>
                          </div>
                          </div>

                          <div class="col-md-2">
                          <div style = "width: 132px;height: 62px;" class="box-minimun-mange">
                          <b>Savings (after maintenance)</b>
                          <p style="color:orange;">S$2,000</p>
                          </div>
                          </div>
                       
                          <div class="col-md-12">
                          <img width="1000px"src="https://thumbs.dreamstime.com/b/simple-infographic-line-chart-sky-blue-deep-pink-two-color-graph-values-fully-editable-color-lines-dots-not-expanded-82750876.jpg">
                          </div>
                          <div class="col-md-7">
                          <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#newlargeModal">Click to open New largeModal</a>

                          <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#nextnewlargeModal">Click to open Next New largeModal</a>
                      	  </div>
                          </div>




                          <!------------------------------------------------>
                          <div class="modal fade" id="newlargeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                          <div class="modal-content" style="background-color: white;">
                          <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel" style="color:#131E84;">Predictive Maintenance <br><p style="font-size: initial;">Recordede on Oct 14,2020 5:00:08 PM</p></h3>

                            <!-- <h4>Recordede on Oct 14,2020 5:00:08 PM</h4> -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <br>
                            <br>

                          </div>
                          <div class="modal-body">
                            <div class="row">
                               <div class="col-sm-6 col-md-6">
                                <h4 style="color:#131E84 !important;">Issue Details</h4>
                                <table style="margin-left: -22px;">
                                    <tr >
                                    <th style="border: none;"> issue ID  </th>
                                    <th style="border: none;"> 54544</th>
                                    </tr>
                                    <tr style="border: none;">
                                    <th style="border: none;">Equipment </th>
                                    <th style="border: none;"> proper </th>
                                    </tr>
                                </table>
                                <hr>
                                <h4 style="color:#131E84 !important;">Diagnosis</h4>
                                <img style="margin-left: 46px;margin-top: 22px;" src="https://i.stack.imgur.com/ZR4Zm.png">



                                <div style="margin-left: 25px;">
                                    <div class="row">
                                    <div style="color: black;"class="col-md-6"> Likelihood for faiure </div>
                                    <div class="col-md-6"> 45%</div>
                                    </div>



                                    <div class="row">
                                    <div style="color: black;"class="col-md-6"> Most likely Cause for Failure </div>
                                    <div class="col-md-6"> Blade Errasian<button style="background-color: cornsilk;"type="button" class="btn btn-light">View other causes</button></div>
                                    </div>


                                    <div class="row">
                                    <div style="color: black;"class="col-md-6">Best Action for Maintenance </div>
                                    <div class="col-md-6"> Schedule for Propeller Blade Repair</div>
                                    </div>



                                </div>



                                <hr>
                                <h4 style="color:#131E84 !important;">Maintenance</h4>
                                <div style="margin-left: 25px;">

                                    <div class="row">
                                    <div style="color: black;"class="col-md-6"> Maintenance Downtime </div>
                                    <div class="col-md-6"> 4 Houre</div>
                                    </div>



                                    <div class="row">
                                    <div style="color: black;"class="col-md-6"> Estimated Lifespan(without Maintenance) </div>
                                    <div class="col-md-6"> 1 Year 30 days</div>
                                    </div>


                                    <div class="row">
                                    <div style="color: black;"class="col-md-6"> Estimated Lifespan(After Maintenance) </div>
                                    <div class="col-md-6">2 year 30 days</div>
                                    </div>



                                </div>

                                <hr>

                                    <div class="row">
                                    <div style="color: red;font-size: 24px;"class="col-md-12"> Savings after Maintenance</div>
                                    <div style="margin-left: 16px;color: red;font-size: 21px;"> S$15,670</div>
                                    </div>

                                <hr>
                                    <button style="background-color: blue;color: #fff3f3;"type="button" class="btn btn-light">Add To Maintenance</button>

                             </div>


                                  <div class="col-sm-6 col-md-6 col-lg-6">
                                     <img style="width: 374px;height: 270px;" src="https://images.ctfassets.net/fevtq3bap7tj/3xWO2uK9j5fX9z3nJxlDBT/3230060b9dba8c3aaeac13f0ad69070f/chartgallery.svg" >
                                 </div>

                            </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          <!---------------------------------------------------------------------------->

                          <!-----------------------------nextnewlargeModal----------------------------------->


                          <div class="modal fade" id="nextnewlargeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                          <div class="modal-content" style="background-color: white;">
                          <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel" style="color:#131E84;">Add to Maintenance</h3>

                            <!-- <h4>Recordede on Oct 14,2020 5:00:08 PM</h4> -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <br>
                            <br>

                          </div>
                          <div class="modal-body"> 
                           

                                <table style="margin-left: -22px;">
                                    <tr >
                                    <th style="color: black;border: none;"> Date Created  </th>
                                    <th style="color: black;border: none;"> 17 Sep 2020 500b5</th>
                                    </tr>

                                    <tr style="border: none;">
                                    <th style="color: black;border: none;">Ticket Number </th>
                                    <th style="color: black;border: none;"> #000001 </th>
                                    </tr>

                                    <tr style="border: none;">
                                    <th style="color: black;border: none;">Priority </th>
                                        <th style="border: none;"> 


                                                        <select style="width: 140px;background-color: white;" id="categories" name="category_id_0" class="form-control"  >
                                                            <option  value="">server</option>
                                                        </select>

                                         </th>
                                    </tr>


                                    <tr style="border: none;">
                                    <th style="color: black;border: none;">Assign To  </th>
                                        <th style="border: none;"> 


                                                        <select style="width: 140px;background-color: white;" id="categories" name="category_id_0" class="form-control"  >
                                                            <option value="">Worker-1</option>
                                                        </select>


                                        
                                        </th>
                                        <th style="border: none;padding: 0"> <a href="">+ Add more</a></th>
                                    </tr>

                                   

                                </table>


                          <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel" style="color:#131E84;">Maintenance Schedule </h3>

                            <!-- <h4>Recordede on Oct 14,2020 5:00:08 PM</h4> -->
                           </div>
                              

                                    <div style="margin-top: 20px;margin-bottom: 14px" class="row">
                                    <div style="color: black;"class="col-md-6"> Priority </div>
                                                        <select style="width: 140px;    margin: 0 0 0 6px;margin-left: -32px;background-color: white;" id="categories" name="category_id_0" class="form-control"  >

                                                            <option value="">server</option>
                                                        </select>
                                                        <input style="margin: 0 0 0 6px;" type="date" name="">
                                    </div>

                                    <div class="row">
                                    <div style="color: black;"class="col-md-6"> Assign To </div>
                                                        <select style="width: 140px;margin-left: -32px;background-color: white;" id="categories" name="category_id_0" class="form-control"  >
                                                            <option value="">Worker-1</option>
                                                        </select>
                                                        <input style="margin: 0 0 0 6px;" type="date" name="">
                                    </div>


                                    <h5 style="color: black;margin-left: -2px;">Downtime</h5>
                                    <h3 style="color: black;">Commets</h3>
                                    
                                   <textarea style="width: 648px;height: 100px" name="comment" form="usrform">Enter text here...</textarea>
                                   
                             
                            <br>
                            <br>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                              </div>
                          </div>
                          </div>
                          </div>
                          </div>



                          </div>
                          </div>
                        
                                </div>
                            </div>
                          </div>

                          @endsection

                          @section('footer_script')
                          
                          @endsection