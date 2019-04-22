<?php
set_include_path($_SERVER['DOCUMENT_ROOT'] .'/mpdf/'); 
require('mpdf.php');
$mpdf=new mPDF();
$mpdf->WriteHTML('<div style="text-align:center;"><span style="font-size:15px;"><b>THE WEST BENGAL SMALL INDUSTRIES DEVELOPEMENT CORPORATION LIMITED</b></span></div>');
$mpdf->WriteHTML('<div style="text-align:center;"><span style="font-size:13px;padding-left:50px;"><b>(A GOVT. OF WEST BENGAL UNDERTAKING)</b></span></div>');
$mpdf->WriteHTML('<div style="text-align:center;"><span style="font-size:12px;"><b>6A,RAJA SUBODH MULLICK SQUARE,(3FL),KOLKATA-700 013</b></span></div><hr>');
$mpdf->WriteHTML('<div style="text-align:center;"><span style="font-size:15px;">PURCHASE ORDER</span></div>');
$mpdf->WriteHTML('<div width="100%">
                          <table>
								<tr>
									<td  colspan="5">
									   To
									</td>
								</tr>
                                <tr>
									<td style="width:auto">
									  Accent Indostries Ltd.
									</td>
									 <td style="padding-left:50px;width:150px;">
											Our Ref:
									</td>
									<td>
                                            SPR/RFQ0000032

									</td>
                                     <td style="padding-left:50px;width:auto">
											<h4>Date:</h4>
									</td>

                                    <td>
                                            16/05/2017
									</td>
								</tr>
								<tr>
									<td style="width:auto">
									  Unit No.6A,Sharchi Tower,686,K
									  Amandapur,Kolkata-107
									</td>
									 <td style="padding-left:50px;width:auto">
											Site Ind Ref:
									</td>
									<td>
                                            12-13/06/01/01

									</td>
                                     <td style="padding-left:50px;width:auto">
											<h4>Date:</h4>
									</td>

                                    <td>
                                            21/05/2017
									</td>
								</tr>
								<tr>
									<td style="width:auto">
									</td>
									 <td style="padding-left:50px;width:70px;">
											Order Ref:
									</td>
									<td>
                                            SRP/IR0000023/P000013

									</td>
                                     <td style="padding-left:50px;width:auto">
											<h4>Date:</h4>
									</td>

                                    <td>
                                            21/05/2017
									</td>
								</tr>
                               <tr>
									<td>
									</td>
									<td>
									</td>
									<td style="font-size:10px;"> 
									Your Ref:Verbal Conf.
									</td>
									<td style="padding-left:50px;width:auto;font-size:10px;">
									</td>
									<td>
									</td>
							</tr>
		                 </table>
		           </div>');
 $mpdf->WriteHTML('<div style="text-align:left;"><span style="font-size:16px;">Kind Atten:Madhur Nashkar</span></div>');
 


$mpdf->WriteHTML('<table border="1" style="width: 100%">
						<thead>
							<tr>
								<th style="width: 8%; text-align:left;">Sl.No</th>
								<th style="width: 29%; text-align:left;">Description</th>
								<th style="width: 20%; text-align:left;">Part No.</th>
								<th style="width: 5%; text-align:left;">Dis. (%)</th>
								<th style="width: 8%; text-align:left;">Unit Qty.</th>
								<th style="width: 10%; text-align:left;">UOM</th>
								<th style="width: 10%; text-align:left;">Unit Price</th>
								<th style="width: 10%; text-align:left;">Total</th>
							</tr>
						</thead>
						<tbody>
							         <tr>
										<td style="text-align: center;">1.</td>
										<td>Boltless Tile</td>
										<td style="text-align: center;">CP-1</td>
										<td>13</td>
										<td style="text-align: right;">11</td>
										<td style="text-align: center;">Kg</td>
										<td style="text-align: right;">1600</td>
										<td style="text-align: right;">18007</td>
									</tr>
									<tr>
										<td style="text-align: center;">2.</td>
										<td>FLP Wire</td>
										<td style="text-align: center;">CP-5</td>
										<td>6</td>
										<td style="text-align: right;">11</td>
										<td style="text-align: center;">Gm</td>
										<td style="text-align: right;">100</td>
										<td style="text-align: right;">1100</td>
									</tr>
							</tbody>
					</table>
					');
 $mpdf->WriteHTML('<div style="text-align:left;"><span style="font-size:16px;">Total Item(s):2</span></div>');
 $mpdf->WriteHTML('<div style="position:relative;right:292px;margin-top:8px;height:30px;width:600px;margin-bottom:15px;">
                <h4 style="border:1px solid black;margin:auto 0;padding:5px;">**Value of Order:Rs.22170.00(Rupees Twenty Thousand Two Hundred Only)</h4> 
            </div>');
$mpdf->WriteHTML('<div style="text-align:left;"><span style="font-size:15px;">*Exclusive of Tax & Duties</span></div>');
$mpdf->WriteHTML('<div style="text-align:left;"><span style="font-size:15px;">*Exclusive of VAT</span></div>');

$mpdf->Output();
?>