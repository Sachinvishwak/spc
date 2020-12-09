                          @extends('admin.layouts.app')

                          @section('content')



                          <div id="our-page-wrapper">
                            <div id="sidebar" style="width: 475px;height: 1500px;"class="assets-sidebar">
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
                                <hr>

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
										<div style="    margin-top: 55px;"class="row">
										<h3 style="color: black;">Alerts</h3>	
											<div style="    margin-left: -52px;"class="row">
											<div class="col-md-4">
												<!-- <select  ><option>select item </option></select>
											 --></div>

											<div class="col-md-3">
												<input  style="margin-left: -75px"type="date" name="">
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

										<div style="    margin-top: 55px;"class="row">
										<h3 style="color: black;">Sensor Status</h3>	
											
										
										<table>
										  <tr>
										    <th>Sensor Name</th>
										    <th>Status</th>
										    
										  </tr>
										  <tr>
										    <td>Sound Sensor</td>
										    <td>Connected</td>
										  </tr>
										  <tr>
										    <td>03 Sep 2020</td>
										    <td>Connected</td>
										   </tr>
										 
										
										</table>
										</div>

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




                                <div class="row">
                          <div class="col-md-6">

                          <h5>Live data chart</h5>
                          <h5>/ Predictive Analysis</h5>
                          <h5>    / Summary</h5>
                          </div>
                          <div class="col-md-6">
                          </div>
                          <br><br><br>
                          <div class="col-md-6">
                          <h4 style="color:#131E84 !important;">Causes for Downtime</h4>
                          <p>Click on Chart to view information</P>
                          </div>
                          <div class="col-md-6">
                          </div>
                          <div class="col-md-12">

                          <img src="https://d1whtlypfis84e.cloudfront.net/guides/wp-content/uploads/2018/02/17080325/Frequency-distribution-graph.png" style="height: 500px;
                          width: 1000px;">
                          </div>
                          <div class="col-md-12">
                          <hr/>
                          <h4  style="color:#131E84 !important;" >Maintenance record</h4>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width:183px;height: 72px">
                          <b>Total Maintenance Conducted</b>
                          <p style="color:orange;">10 Records</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width:183px;height: 72px">
                          <b>Total Replacement</b>
                          <p style="color:orange;">5</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width:183px;height: 72px">
                          <b>Total Downtime</b>
                          <p style="color:orange;">250 hours</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width:183px;height: 72px">
                          <b>Total Maintenance Cost</b>
                          <p style="color:orange;">$ 80000</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width:183px;height: 72px">
                          <b>Total Saving</b>
                          <p style="color:orange;">$ 1250000</p>
                          </div>
                          </div>
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-12">
                          <div class="maing-fileter">
                          <p>Search by</P>
                          <input type="text" placeholder="Issue ID" ><select style="margin-left: 10px;
                          margin-right: 10px;padding-right:20px;"><option>Select Issue</option><option>check</option>  </select><input style="margin-left: 10px;
                          margin-right: 10px;" type="date" placeholder="Date">TO  <input style="margin-left: 10px;
                          margin-right: 10px;" type="date" placeholder="Date">
                          </div>
                          </div>
                          <div class="col-md-12">
                          <div class="production-report">
                                  <div class="table-responsive">
                                    <table class="table prduction-report-table productionReportTable">
                                      <thead>
                                        <tr>
                                          <th>Ticket ID</th>
                                          <th>Date Created</th>
                                          <th>Issue Summary</th>
                                          <th>Sensors Affected</th>
                                          <th>Maintenance Cost</th>
                                          <th>Raised by</th>
                                                        <th>Status</th>
                                          <th>Severity</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                        <tr>
                                          <td>Jul 12, 2019 10:01:08 AM</td>
                                          <td>2hours, 4minutes</td>
                                          <td>2hours, 4minutes</td>
                                          <td>YJ-99</td>
                                          <td>90%</td>
                                                        <td>90%</td>
                                          <td>Lorem Ipsum </td>
                                          <td><a class="btn text-white;" style="background: #E65118;">Sever</a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>


                                </div>
                          </div>
                          </div>


                      


                          <!-----  end ---->
                                  
                                    </div>
                                   
                                </div>
                            </div>
                          </div>

                          @endsection

                          @section('footer_script')
                          
                          @endsection