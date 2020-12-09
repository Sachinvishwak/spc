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

                            <div style="margin-left: 147px;width: 1075px;margin-top: -1519px;"class="page-inner-box">



                          <div class="row">
                          <div class="col-md-6">

                          <h5>Live data chart</h5>
                          <h5>/ Predictive Analysis</h5>
                          <h5>    / Summary</h5>
                          </div>
                          <div class="col-md-3">


                          </div>
                          <div class="col-md-3">

                          </div>
                          <div class="col-md-9">
                          <br>
                          <h4 style="color:#131E84 !important;"> Sensor Chart</h4>
                          <p>Click and Drag on the chart to see post or future data</p>
                          <br>

                          </div>
                          <div class="col-md-3">
                          <br>
                          <button class="btn btn-primary" style="background-color:#131E84;" data-toggle="modal" data-target="#smallModal">Evaluate Sensor Data</button>
                          </div>
                          <div class="col-md-8">
                          <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                          <div class="modal-content" style="background: white;">
                          <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Merge Sensor Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Select Other sensors to merge within the current sensor chart for comparision</p>
                            <select style="background:white;" class="form-control">
                                <option>select Sensor</option>
                            </select>
                          </div>
                          <div class="modal-footer">
                            <button style="    background: blue;
                          color: white;" type="button" class="btn btn-default" data-dismiss="modal">Confirm</button>
                          </div>
                          </div>
                          </div>
                          </div>
                          <table>
                          <tr>
                          <th> Month</th>
                          <th>Week </th>
                          <th>Day </th>
                          <th style="background-color:#131E84;color:white;">Hour </th>
                          </tr>
                          </table>
                          </div>
                          <div class="col-md-4">
                          <input type="checkbox" checked><span style="color:#131E84;margin-left: 10px;">Show alert </span>
                          <input type="checkbox" checked><span style="color:#131E84;margin-left: 10px;">Scheduled Maintenance</span>
                          </div>
                          <br>

                          </div>
                          <div class="row">

                          <div class="col-md-12">
                          <hr/>
                          <br>
                          </div>
                          <div class="col-md-9">
                          <h4 style="color:#131E84 !important;">Sound Sensor </h4>
                          <br>
                          <span  style="color:#131E84;">Sound Sensor Status </span><span  style="color:green;">active</span>
                          </div>
                          <div class="col-md-3">
                          <input type="radio"> <span style="color:#131E84;margin-left: 10px;">Spectrogram</span>
                          <input type="radio" checked> <span style="color:#131E84;margin-left: 10px;">Wavefrom</span>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Minimum</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Average</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Maximum</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-12">
                          <img width="1000px"src="https://thumbs.dreamstime.com/b/simple-infographic-line-chart-sky-blue-deep-pink-two-color-graph-values-fully-editable-color-lines-dots-not-expanded-82750876.jpg">
                          </div>
                          </div>

                          <div class="row">

                          <div class="col-md-12">
                          <hr/>
                          <br>
                          </div>
                          <div class="col-md-9">
                          <h4 style="color:#131E84 !important;">Vibration Sensor </h4>
                          <br>
                          <span  style="color:#131E84;">Vibration Sensor Status </span><span  style="color:green;">active</span>
                          </div>
                          <div class="col-md-3">
                          <input type="radio"> <span style="color:#131E84;margin-left: 10px;">Spectrogram</span>
                          <input type="radio" checked> <span style="color:#131E84;margin-left: 10px;">Wavefrom</span>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Minimum</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Average</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Maximum</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-12">
                          <img width="1000px"src="https://thumbs.dreamstime.com/b/simple-infographic-line-chart-sky-blue-deep-pink-two-color-graph-values-fully-editable-color-lines-dots-not-expanded-82750876.jpg">
                          </div>
                          </div>
                          <div class="row">

                          <div class="col-md-12">
                          <hr/>
                          <br>
                          </div>
                          <div class="col-md-9">
                          <h4 style="color:#131E84 !important;">Pressure Sensor </h4><span style="color:red;">by RONDS</span>
                          <br>
                          <span  style="color:#131E84;">Vibration Sensor Status </span><span  style="color:green;">active</span>
                          </div>
                          <div class="col-md-3">
                          <input type="radio"> <span style="color:#131E84;margin-left: 10px;">Spectrogram</span>
                          <input type="radio" checked> <span style="color:#131E84;margin-left: 10px;">Wavefrom</span>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Minimum</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Average</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          <div class="box-minimun-mange">
                          <b>Maximum</b>
                          <p style="color:orange;">25.00 Decibels</p>
                          </div>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-12">
                          <img width="1000px"src="https://thumbs.dreamstime.com/b/simple-infographic-line-chart-sky-blue-deep-pink-two-color-graph-values-fully-editable-color-lines-dots-not-expanded-82750876.jpg">
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