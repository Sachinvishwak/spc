                          @extends('admin.layouts.app')

                          @section('content')



                          <div id="our-page-wrapper">
                            <div id="sidebar" class="assets-sidebar">
                              <div class="sidebar-menu-part">
                                  <h3 class="title">Issues</h3>
                                  <ul class="menu_part">
                                      <li>
                                          <a href="#" class="sub-link">Issue Overview</a>
                                          <ul class="sub-menu">
                                              <li>
                                                  <a href="#">Total Units</a>
                                              </li>
                                              <li>
                                                  <a href="#">High Alert</a>
                                              </li>
                                              <li>
                                                  <a href="#">Moderate</a>
                                              </li>
                                              <li>
                                                  <a href="#">Healthy</a>
                                              </li>
                                              <li>
                                                  <a href="#">Unknown</a>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                            </div>
                            <div id="all-content" class="page-content-body">
                              <div class="insight_content">
                                    <div class="breadcrumb_part">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Setting</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Select Equipment</a></li>
                                            <li class="breadcrumb-item active">Evaluate Sensor Data</li>
                                        </ol>
                                    </div>



                                    
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

                                    <div class="page-inner-box">


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
                          <div class="col-md-6">
                          </div>

                          <div class="col-md-12">
                          <hr/>
                          <h4  style="color:#131E84 !important;" >Maintenance record</h4>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width: 215px;">
                          <b>Total Maintenance Conducted</b>
                          <p style="color:orange;">10 Records</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width: 215px;">
                          <b>Total Replacement</b>
                          <p style="color:orange;">5</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width: 215px;">
                          <b>Total Downtime</b>
                          <p style="color:orange;">250 hours</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width: 215px;">
                          <b>Total Maintenance Cost</b>
                          <p style="color:orange;">$ 80000</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange">
                          <b>Total Saving</b>
                          <p style="color:orange;">$ 1250000</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" >
                          <b>Total Saving</b>
                          <p style="color:orange;">$ 1250000</p>
                          </div>
                          </div>
                          <div class="col-md-12">

                          <img src="https://www.jqueryscript.net/images/Simple-Canvas-Based-Line-Chart-Plugin-For-jQuery-Topup.jpg" width="1000" height="400">
                          </div>

                          <div class="col-md-12">
                          <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#largeModal">Click to open Modal</a>
                          <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#newlargeModal">Click to open New largeModal</a>

                          <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#nextnewlargeModal">Click to open Next New largeModal</a>
                          <!-- large modal -->
                          <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                          <div class="modal-content" style="background-color: white;">
                          <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel" style="color:#131E84;">Blade Damage due to submerged object</h3>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <br>
                            <br>

                          </div>
                          <div class="modal-body">
                            <h4 style="color:#131E84 !important;">Issue Details</h4>
                            <div class="manage-isssu-detial">


                            <table>
                            <tr>
                            <th> issue ID -</th>
                            <th> 54544</th>
                            </tr>
                            <tr>
                            <th>Equipment-</th>
                            <th> proper </th>
                            </tr>
                            <tr>
                            <th>Detected by -</th>
                            <th>  Sound ,Presssure,Sensor </th>
                            </tr>
                            </table>
                            </div>
                            <hr>
                            <h4 style="color:#131E84 !important;">Analysis</h4>
                            <div class="manage-isssu-detial">


                            <table>
                            <tr>
                            <th> Suspected Reason -</th>
                            <th> Submit object</th>
                            </tr>
                            <tr>
                            <th>Solution-</th>
                            <th> proper </th>
                            </tr>
                            <tr>
                            <th>Extimated Lifepars -
                            <br>(without Maintenance)</th>
                            <th> 1 month 2o days </th>
                            </tr>
                            <tr>
                            <th>Extimated Lifepars -
                            <br>(with Maintenance)</th>
                            <th> 1 month 2o days </th>
                            </tr>
                            <tr>
                            <th>protentail cost saved
                            <br>(after Maintenance)</th>
                            <th> $ 10000 </th>
                            </tr>
                            </table>
                            </div>
                            <hr>
                            <h4 style="color:#131E84 !important;">Sensor Data</h4>
                            <hr>
                            <h4 style="color:#131E84 !important;">Semilar Issues</h4>
                            <hr>
                            <h4 style="color:#131E84 !important;">activity</h4>
                            <p style="color:black;">Admin created ticket . set status as open set priority as high set impact as high </p>
                            <p style="color:black;">Admin created ticket . set status as open set priority as high set impact as high </p>
                            <p style="color:black;">Admin created ticket . set status as open set priority as high set impact as high </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                          </div>
                          </div>
                          </div>


                          <!---------------------new larg model----------------------------->

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


                          <!---------------------------------------------------------------->


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
                          width: 1208px;">
                          </div>
                          <div class="col-md-12">
                          <hr/>
                          <h4  style="color:#131E84 !important;" >Maintenance record</h4>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width: 215px;">
                          <b>Total Maintenance Conducted</b>
                          <p style="color:orange;">10 Records</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width: 215px;">
                          <b>Total Replacement</b>
                          <p style="color:orange;">5</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width: 215px;">
                          <b>Total Downtime</b>
                          <p style="color:orange;">250 hours</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange" style="width: 215px;">
                          <b>Total Maintenance Cost</b>
                          <p style="color:orange;">$ 80000</p>
                          </div>
                          </div>
                          <div class="col-md-2">
                          <div class="box-minimun-mange">
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


                          <div class="row">

                          <div class="col-md-3 set-margincolutn">
                          <div class="add-box-colume">
                          <img src="https://cdn.xl.thumbs.canstockphoto.com/project-word-with-cogs-in-background-isolated-on-white-drawings_csp5874299.jpg" class="img-set-wisth">
                          <h4 class="h4calss-inernal">Guitars</h4><button class="btn btn-primary bnt-css-addmy">5 Alerts</button>
                          <h5>Manufacture</h5><span>Berg propusion</span>
                          <br>
                          <h5>Model Number</h5><span>04f</span>
                          <br>
                          <h5>Serial Number</h5><span>567676</span>
                          <br>
                          <h5>Installed on</h5><span><?php echo date('Y-m-d');?></span>

                          </div>
                          </div>
                          <div class="col-md-3 set-margincolutn">
                          <div class="add-box-colume">
                          <img class="img-set-wisth" src="https://cdn.xl.thumbs.canstockphoto.com/project-word-with-cogs-in-background-isolated-on-white-drawings_csp5874299.jpg">
                          <h4>Guitars</h4><button class="btn btn-primary bnt-css-addmy">5 Alerts</button>
                          <h5>Manufacture</h5><span>Berg propusion</span>
                          <br>
                          <h5>Model Number</h5><span>04f</span>
                          <br>
                          <h5>Serial Number</h5><span>567676</span>
                          <br>
                          <h5>Installed on</h5><span><?php echo date('Y-m-d');?></span>
                          </div>
                          </div>
                          <div class="col-md-3 set-margincolutn">
                          <div class="add-box-colume">
                          <img  class="img-set-wisth" src="https://cdn.xl.thumbs.canstockphoto.com/project-word-with-cogs-in-background-isolated-on-white-drawings_csp5874299.jpg">
                          <h4>Guitars</h4><button class="btn btn-primary bnt-css-addmy">5 Alerts</button>
                          <h5>Manufacture</h5><span>Berg propusion</span>
                          <br>
                          <h5>Model Number</h5><span>04f</span>
                          <br>
                          <h5>Serial Number</h5><span>567676</span>
                          <br>
                          <h5>Installed on</h5><span><?php echo date('Y-m-d');?></span>
                          </div>
                          </div>
                          <div class="col-md-3 set-margincolutn">
                          <div class="add-box-colume">
                          <img class="img-set-wisth" src="https://cdn.xl.thumbs.canstockphoto.com/project-word-with-cogs-in-background-isolated-on-white-drawings_csp5874299.jpg">
                          <h4>Guitars</h4><button class="btn btn-primary bnt-css-addmy">5 Alerts</button>
                          <h5>Manufacture</h5><span>Berg propusion</span>
                          <br>
                          <h5>Model Number</h5><span>04f</span>
                          <br>
                          <h5>Serial Number</h5><span>567676</span>
                          <br>
                          <h5>Installed on</h5><span><?php echo date('Y-m-d');?></span>
                          </div>
                          </div>

                          <div class="col-md-3 set-margincolutn">
                          <div class="add-box-colume">
                          <img src="https://cdn.xl.thumbs.canstockphoto.com/project-word-with-cogs-in-background-isolated-on-white-drawings_csp5874299.jpg" class="img-set-wisth">
                          <h4 class="h4calss-inernal">Guitars</h4><button class="btn btn-primary bnt-css-addmy">5 Alerts</button>
                          <h5>Manufacture</h5><span>Berg propusion</span>
                          <br>
                          <h5>Model Number</h5><span>04f</span>
                          <br>
                          <h5>Serial Number</h5><span>567676</span>
                          <br>
                          <h5>Installed on</h5><span><?php echo date('Y-m-d');?></span>

                          </div>
                          </div>
                          <div class="col-md-3 set-margincolutn">
                          <div class="add-box-colume">
                          <img class="img-set-wisth" src="https://cdn.xl.thumbs.canstockphoto.com/project-word-with-cogs-in-background-isolated-on-white-drawings_csp5874299.jpg">
                          <h4>Guitars</h4><button class="btn btn-primary bnt-css-addmy">5 Alerts</button>
                          <h5>Manufacture</h5><span>Berg propusion</span>
                          <br>
                          <h5>Model Number</h5><span>04f</span>
                          <br>
                          <h5>Serial Number</h5><span>567676</span>
                          <br>
                          <h5>Installed on</h5><span><?php echo date('Y-m-d');?></span>
                          </div>
                          </div>
                          <div class="col-md-3 set-margincolutn">
                          <div class="add-box-colume">
                          <img  class="img-set-wisth" src="https://cdn.xl.thumbs.canstockphoto.com/project-word-with-cogs-in-background-isolated-on-white-drawings_csp5874299.jpg">
                          <h4>Guitars</h4><button class="btn btn-primary bnt-css-addmy">5 Alerts</button>
                          <h5>Manufacture</h5><span>Berg propusion</span>
                          <br>
                          <h5>Model Number</h5><span>04f</span>
                          <br>
                          <h5>Serial Number</h5><span>567676</span>
                          <br>
                          <h5>Installed on</h5><span><?php echo date('Y-m-d');?></span>
                          </div>
                          </div>
                          <div class="col-md-3 set-margincolutn">
                          <div class="add-box-colume">
                          <img class="img-set-wisth" src="https://cdn.xl.thumbs.canstockphoto.com/project-word-with-cogs-in-background-isolated-on-white-drawings_csp5874299.jpg">
                          <h4>Guitars</h4><button class="btn btn-primary bnt-css-addmy">5 Alerts</button>
                          <h5>Manufacture</h5><span>Berg propusion</span>
                          <br>
                          <h5>Model Number</h5><span>04f</span>
                          <br>
                          <h5>Serial Number</h5><span>567676</span>
                          <br>
                          <h5>Installed on</h5><span><?php echo date('Y-m-d');?></span>
                          </div>
                          </div>
                          </div>


                          <!-----  end ---->
                                    <div class="col-md-5">

                                        <div class="data_table_part">
                                            <div class="data_table_header">
                                                <ul class="d-flex flex-wrap m-0 p-0 list-unstyled">
                                                    <li>
                                                        <a href="#" class="d-flex align-items-center bor-bot" style="width: 170px;">Evaluate Sensor Data</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <p>Add context to machine recordings by identifying and lablling essential sound to improve failure detection accuracy.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <p>alert</p>
                                    </div>
                                </div>
                            </div>
                          </div>

                          @endsection

                          @section('footer_script')
                          
                          @endsection